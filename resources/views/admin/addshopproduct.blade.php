@extends('admin.sidebar')
@section('content')
<div class="main-content app-content">
    <div class="main-container container-fluid">
        <div class="row row-sm d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Add Shop Items</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form id="addShopProduct">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="shop_name">Select Shop Name</label>
                                        <select class="form-control select2" id="shop_name" name="shop_name">
                                            <option value="{{ $shops->id }}">{{ $shops->name }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h4>ADD SHOP ITEMS</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="product">Select Product</label>
                                        <select class="form-control select2" name="product" id="product">
                                            <option value="" disabled selected></option>
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="itemSelect">Select Item</label>
                                        <select id="itemSelect" name="item" class="form-control">
                                            <option value="" disabled selected>Select Item</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <input type="number" class="form-control" name="discount" id="discount" min="0" step="0.1" placeholder="Enter Discount (%)">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="units">Units</label>
                                        <input type="number" class="form-control" name="units" id="units" min="1" placeholder="Enter Units">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="price">Unit Price</label>
                                        <input type="number" class="form-control" name="price" id="price" min="0.01" step="0.01" placeholder="Enter Unit Price">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" id="addProductButton" class="btn btn-primary mt-4">Add Shop Item</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <!-- Product Table -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="productTable">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Item</th>
                                        <th>Discount</th>
                                        <th>Units</th>
                                        <th>Unit Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Rows will be added dynamically -->
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-end">
                            <button type="button" id="submitProducts" class="btn btn-primary">Submit All Products</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        let products = [];

        // Add Product to Table
        $('#addProductButton').on('click', function () {
            const product = $('#product').val();
            const productName = $('#product option:selected').text();
            const item = $('#itemSelect').val();
            const itemName = $('#itemSelect option:selected').text();
            const discount = $('#discount').val();
            const units = $('#units').val();
            const price = $('#price').val();

            if (!product || !item || !discount || !units || !price) {
                alert('Please fill in all fields');
                return;
            }

            products.push({ product, item, discount, units, price });

            $('#productTable tbody').append(`
                <tr>
                    <td>${productName}</td>
                    <td>${itemName}</td>
                    <td>${discount}</td>
                    <td>${units}</td>
                    <td>${price}</td>
                    <td><button type="button" class="btn btn-danger btn-sm deleteRow">Delete</button></td>
                </tr>
            `);

            // Clear Fields
            $('#product').val('').trigger('change');
            $('#itemSelect').val('').trigger('change');
            $('#discount').val('');
            $('#units').val('');
            $('#price').val('');
        });

        // Delete Row
        $('#productTable').on('click', '.deleteRow', function () {
            const rowIndex = $(this).closest('tr').index();
            products.splice(rowIndex, 1);
            $(this).closest('tr').remove();
        });

        // Submit All Products
        $('#submitProducts').on('click', function () {
            const shopName = $('#shop_name').val();
            if (!shopName) {
                alert('Please select a shop name');
                return;
            }

            $.ajax({
                url: '{{ route("shop.addItems") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    shop_name: shopName,
                    products: products
                },
                success: function (response) {
                    alert('Products submitted successfully');
                    window.location.reload();
                },
                error: function (xhr, status, error) {
    let errorMessage = 'An error occurred while submitting products.';
    if (xhr.responseJSON && xhr.responseJSON.message) {
        errorMessage = xhr.responseJSON.message;
    } else if (xhr.responseText) {
        errorMessage = xhr.responseText;
    }
    alert(errorMessage);
}

            });
        });

        // Load Items Based on Product
        $('#product').on('change', function () {
            const productId = $(this).val();

            $('#itemSelect').empty().append('<option disabled selected>Loading...</option>');
            $.get(`/get-items/${productId}`, function (items) {
                $('#itemSelect').empty().append('<option disabled selected>Select Item</option>');
                items.forEach(item => {
                    $('#itemSelect').append(`<option value="${item.brand.b_name} ${item.subcategory.name} ${item.productcategory.name}">${item.brand.b_name} ${item.subcategory.name} ${item.productcategory.name}</option>`);
                });
            });
        });
    });
</script>
@endsection
