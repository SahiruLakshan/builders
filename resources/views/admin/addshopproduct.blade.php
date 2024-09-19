@extends('admin.sidebar')
@section('content')
    <div class="main-content app-content">
        <!-- container -->
        <div class="main-container container-fluid">
            <!-- row -->
            <div class="row row-sm d-flex justify-content-center align-items-center" >
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card box-shadow-0">
                        <div class="card-header">
                            <h4 class="card-title mb-1">Add Shop Product</h4>
                            <p class="mb-2">Enter the details of the product you want to add</p>
                        </div>
                        <div class="card-body pt-0">
                            <!-- Shop Selection -->
                            <form class="form-horizontal" id="addShopProduct">
                                <div class="row">
                                    <!-- Shop Name Field -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="shop_name">Select Shop Name</label>
                                            <select class="form-control select2" id="shop_name" name="shop_name">
                                                @foreach ($shops as $shop)
                                                    <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <h4>ADD PRODUCTS</h4>
                                <!-- Product Details -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="product">Select Product</label>
                                            <select class="form-control select2" id="product">
                                                <option value="" disabled selected></option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Brand -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="brand_category">Select Brand</label>
                                            <select class="form-control select2" id="brand_category">
                                                <option value="" disabled selected></option>
                                                @foreach ($brand as $brands)
                                                    <option value="{{ $brands->id }}">{{ $brands->b_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Category -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="product_category">Select Product Category</label>
                                            <select class="form-control select2" id="product_category">
                                                <option value="" disabled selected></option>
                                                @foreach ($pc as $pc)
                                                    <option value="{{ $pc->id }}">{{ $pc->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- SubCategory -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="sub_category">Select Product SubCategory</label>
                                            <select class="form-control select2" id="sub_category">
                                                <option value="" disabled selected></option>
                                                @foreach ($sub as $sub)
                                                    <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Quantity -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="quantity">Enter Product Quantity</label>
                                            <input type="number" class="form-control" id="quantity"
                                                placeholder="Enter quantity" min="1" step="1" />
                                        </div>
                                    </div>

                                    <!-- Measurement -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="measurement">Select Measurement</label>
                                            <select class="form-control select2" id="measurement">
                                                @foreach ($measurement as $measurements)
                                                    <option value="{{ $measurements->id }}">{{ $measurements->unit }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="color">Color</label>
                                            <input type="text" class="form-control" id="color"
                                                placeholder="Enter color" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <button type="button" id="addProductButton" class="btn btn-success">
                                                    Add Product
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Color -->


                                    <!-- Add Product Button -->

                                </div>

                                <!-- Product Table -->
                                <!-- Row -->
                                <div class="row row-sm">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Shop Product</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table
                                                        class="table border-top-0 table-bordered text-nowrap border-bottom"
                                                        id="basic-datatable">
                                                        <thead>
                                                            <tr>
                                                                <th class="wd-25p border-bottom-0">Product Name</th>
                                                                <th class="wd-15p border-bottom-0">Brand</th>
                                                                <th class="wd-20p border-bottom-0">Category</th>
                                                                <th class="wd-15p border-bottom-0">SubCategory</th>
                                                                <th class="wd-10p border-bottom-0">Quantity</th>
                                                                <th class="wd-25p border-bottom-0">Measurement</th>
                                                                <th class="wd-25p border-bottom-0">Color</th>
                                                                <th class="wd-25p border-bottom-0">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- Data will be added dynamically via AJAX or JS -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Include DataTables CSS and JS -->
                                <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"
                                    rel="stylesheet" />
                                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

                                <!-- Initialize DataTable -->
                                <script>
                                    $(document).ready(function() {
                                        $('#basic-datatable').DataTable({
                                            // Optional settings
                                            paging: true, // Enable pagination
                                            searching: true, // Enable search/filter
                                            ordering: true, // Enable sorting
                                            columnDefs: [{
                                                    orderable: false,
                                                    targets: 7
                                                } // Disable sorting for actions column
                                            ]
                                        });
                                    });
                                </script>

                                <!-- End Row -->

                                <!-- Submit Button -->
                                <div class="form-group mb-0 mt-3 justify-content-end">
                                    <button type="button" id="submitProducts" class="btn btn-primary">Submit All
                                        Products</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row closed -->
        </div>
        <!-- /Container -->
    </div>
    <script src="
        https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize Select2
            $('.select2').select2();

            let products = [];

            // Add product to table
            $('#addProductButton').on('click', function() {
                let productName = $('#product').val();
                let brand = $('#brand_category').val();
                let category = $('#product_category').val();
                let subCategory = $('#sub_category').val();
                let quantity = $('#quantity').val();
                let measurement = $('#measurement').val();
                let color = $('#color').val();

                if (!productName || !brand || !category || !quantity || !measurement) {
                    alert('Please fill in all required fields.');
                    return;
                }
          

                let product = {
                    productName,
                    brand,
                    category,
                    subCategory,
                    quantity,
                    measurement,
                    color
                };

                products.push(product);

                // Append to the table
                let row = `<tr>
                        <td>${productName}</td>
                        <td>${brand}</td>
                        <td>${category}</td>
                        <td>${subCategory}</td>
                        <td>${quantity}</td>
                        <td>${measurement}</td>
                        <td>${color}</td>
                        <td><button type="button" class="btn btn-danger btn-sm deleteProduct">Delete</button></td>
                   </tr>`;
                $('#basic-datatable tbody').append(row);

                // Reset fields
                $('#product').val('').trigger('change');
                $('#brand_category').val('').trigger('change');
                $('#product_category').val('').trigger('change');
                $('#sub_category').val('').trigger('change');
                $('#quantity').val('');
                $('#measurement').val('').trigger('change');
                $('#color').val('');
            });

            // Delete product from table
            $(document).on('click', '.deleteProduct', function() {
                let row = $(this).closest('tr');
                let index = row.index();
                products.splice(index, 1); // Remove from the products array
                row.remove(); // Remove row from table
            });

            // Submit all products
            $('#submitProducts').on('click', function() {
                let shopName = $('#shop_name').val();
                if (!shopName) {
                    alert('Please select a shop.');
                    return;
                }

                $.ajax({
                    url: '{{ route('submit.products') }}', // Ensure this is correct
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        shop_name: shopName,
                        products: products
                    },
                    success: function(response) {
                        alert('Products added successfully!');
                        window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText); // Log the response for more details
                        alert('An error occurred while adding the products.');
                    }
                });

            });
        });
    </script>
@endsection
