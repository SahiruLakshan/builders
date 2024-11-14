@extends('admin.sidebar')
@section('content')
    <div class="main-content app-content">
        <!-- container -->
        <div class="main-container container-fluid">
            <!-- row -->
            <div class="row row-sm d-flex justify-content-center align-items-center">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card box-shadow-0">
                        <div class="card-header">
                            <h4 class="card-title mb-1">Add Shop Items</h4>
                            <p class="mb-2">Enter the details of the Item you want to add</p>
                        </div>
                        <div class="card-body pt-0">

                            <!-- Shop Selection -->
                            <form class="form-horizontal" id="addShopProduct">

                                <h4>ADD SHOP ITEMS</h4>
                                <hr>
                                <!-- Product Details -->
                                <div class="row">
                                    <div class="row">
                                        <!-- Shop Item No (Automatically filled) -->
                                        <div class="col-md-6">
                                            {{-- <div class="form-group ">
                                                <label for="product">Shop Product No:</label>
                                                <input type="text" class="form-control" id="pro_no" name="pro_no"
                                                    readonly>
                                                <small class="form-text text-muted">Automatically generated shop Product
                                                    number.</small>
                                            </div> --}}
                                        </div>

                                        <!-- Image -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="color">Image</label>
                                                <input class="form-control" type="file" name="image" id="image"
                                                    accept=".jpg,.jpeg,.png" />
                                                <small class="form-text text-muted">Upload a clear image in JPG, JPEG, or
                                                    PNG format.</small>
                                            </div>
                                        </div>

                                        <!-- Select Product -->
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="product">Select Product:</label>
                                                <option value=""></option>
                                                <select class="form-control select2" name="product_id" id="product_id">
                                                    <option value="" disabled selected>Select Product</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="form-text text-muted">Choose a product from the list.</small>
                                            </div>
                                        </div>

                                        <!-- Select Brand -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="brand_category">Select Brand</label>
                                                <select class="form-control select2" name="brand_id" id="brand_id">
                                                    <option value="" disabled selected>Select Brand</option>
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->b_name }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="form-text text-muted">Select the brand associated with the
                                                    product.</small>
                                            </div>
                                        </div>

                                        <!-- Select Product Category -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="product_category">Select Product Category</label>
                                                <select class="form-control select2" name="product_category_id"
                                                    id="product_category">
                                                    <option value="" disabled selected>Select Product Category
                                                    </option>
                                                    @foreach ($pc as $productcategory)
                                                        <option value="{{ $productcategory->id }}">
                                                            {{ $productcategory->name }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="form-text text-muted">Choose the appropriate category for this
                                                    product.</small>
                                            </div>
                                        </div>

                                        <!-- Select Product Subcategory -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="sub_category">Select Product Subcategory</label>
                                                <select class="form-control select2" name="subcategory_id"
                                                    id="sub_category">
                                                    <option value="" disabled selected>Select Sub Category</option>
                                                    @foreach ($sub as $subcategory)
                                                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <small class="form-text text-muted">Select a subcategory if
                                                    applicable.</small>
                                            </div>
                                        </div>

                                        <!-- Color -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="color">Color</label>
                                                <input type="text" class="form-control" name="color" id="color"
                                                    placeholder="Enter color" />
                                                <small class="form-text text-muted">Specify the color (e.g., Red,
                                                    Blue).</small>
                                            </div>
                                        </div>

                                        <!-- Quantity -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="quantity">Product Quantity</label>
                                                <input type="number" class="form-control" name="quantity" id="quantity"
                                                    placeholder="Enter quantity" min="1" step="1" />
                                                <small class="form-text text-muted">Enter the quantity in stock.</small>
                                            </div>
                                        </div>

                                        <!-- Select Measurement -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="measurement">Select Measurement</label>
                                                <select class="form-control select2" name="measurement_id" id="measurement">
                                                    <option value="" disabled selected>Select a Measurement</option>
                                                    @foreach ($measurements as $measurement)
                                                        <option value="{{ $measurement->id }}">{{ $measurement->unit }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <small class="form-text text-muted">Choose the measurement unit for this
                                                    product.</small>
                                            </div>
                                        </div>

                                        <!-- Unit Price -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="price">Unit Price</label>
                                                <input type="number" class="form-control" name="unit_price" id="price"
                                                    placeholder="Enter price" min="0.01" step="0.01" />
                                                <small class="form-text text-muted">Specify the unit price in the local
                                                    currency.</small>
                                            </div>
                                        </div>

                                        <!-- Vendor Type -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="vander">Vendor</label>
                                                <select class="form-control" name="vendor" id="vender">
                                                    <option value="manufacturer">Manufacturer</option>
                                                    <option value="importer">Importer</option>
                                                    <option value="distributer">Distributor</option>
                                                </select>
                                                <small class="form-text text-muted">Select the vendor type for this
                                                    product.</small>
                                            </div>
                                        </div>

                                        <!-- Discount -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="discount">Discount</label>
                                                <input type="number" class="form-control" name="discount"
                                                    id="discount" placeholder="Enter discount" min="0.1"
                                                    step="0.1" />
                                                <small class="form-text text-muted">Enter any applicable discount in
                                                    percentage.</small>
                                            </div>
                                        </div>

                                        <!-- Cost -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cost">Cost</label>
                                                <input type="number" class="form-control" name="cost" id="cost"
                                                    placeholder="Enter cost" min="0.1" />
                                                <small class="form-text text-muted">Specify the cost to the vendor.</small>
                                            </div>
                                        </div>

                                        <!-- Attachment -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="attachment">Attachment</label>
                                                <input class="form-control" type="file" name="attachment"
                                                    id="attachment" accept=".jpg,.jpeg,.png" />
                                                <small class="form-text text-muted">Upload an attachment if needed in JPG,
                                                    JPEG, or PNG format.</small>
                                            </div>
                                        </div>

                                        <!-- Description -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="descriptoins">Description</label>
                                                <textarea class="form-control" id="descriptoins" rows="5" name="description" placeholder="Enter description"></textarea>
                                                <small class="form-text ">Provide a detailed description of the
                                                    product.</small>
                                            </div>
                                        </div>

                                        <!-- Applications -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="aplication">Applications</label>
                                                <textarea class="form-control" id="applications" rows="5" name="applications"
                                                    placeholder="Enter applications"></textarea>
                                                <small class="form-text text-muted">Describe the product's applications or
                                                    uses.</small>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group">
                                            <div id="inputFieldsContainer" class="d-flex flex-wrap p-2 pb-3">
                                            </div>
                                            <!-- Container for dynamically added input fields -->
                                            <div class="container mt-3">
                                                <!-- Bootstrap margin for spacing -->
                                                <!-- Bootstrap button for adding fields -->
                                                <button type="button" id="addMoreFieldsBtn" class="btn btn-success">
                                                    Add More Fields
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        {{-- <div id="inputFieldsContainer" class="container">
                                                </div>                                         --}}
                                        <div class="form-group">
                                            <button type="button" id="addProductButton" class="btn btn-primary">
                                                Add Shop Items
                                            </button>
                                        </div>

                                    </div>

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
                                                                <th class="wd-25p border-bottom-0">Image</th>
                                                                <th class="wd-15p border-bottom-0">Unit Price</th>
                                                                <th class="wd-15p border-bottom-0">Vendor</th>
                                                                <th class="wd-15p border-bottom-0">Discount</th>
                                                                <th class="wd-15p border-bottom-0">Cost</th>
                                                                <th class="wd-25p border-bottom-0">Attachment</th>
                                                                <th class="wd-25p border-bottom-0">Description</th>
                                                                <th class="wd-25p border-bottom-0">Applications</th>
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
                                    $('#addItemBtn').click(function() {
                                        const itemId = $('#itemSelect').val();
                                        const price = $('#itemPrice').val();

                                        $.ajax({
                                            url: '/add-shop-item', // Route to handle adding item
                                            method: 'POST',
                                            data: {
                                                item_id: itemId,
                                                price: price,
                                                _token: '{{ csrf_token() }}'
                                            },
                                            success: function(response) {
                                                alert('Item added successfully!');
                                                $('#addItemModal').modal('hide');
                                                // Optionally, refresh item list or table
                                            },
                                            error: function(error) {
                                                alert('Failed to add item.');
                                            }
                                        });
                                    });
                                </script>

                                <!-- End Row -->

                                <!-- Submit Button -->
                                <!-- Add to the end of your form -->
                                <div class="row">
                                    <div class="form-group">
                                        <button type="button" id="submitAllProductsButton" class="btn btn-primary">
                                            Submit All Products
                                        </button>
                                    </div>
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
    <!-- Include DataTables CSS and JS -->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        let products = []; // Array to hold product data temporarily

        $("#addProductButton").click(function() {
            // Collect product details from form inputs
            let product = {
                pro_no: $("#pro_no").val(),
                image: $("#image").prop("files")[0], // File object for image
                product_id: $("#product_id option:selected").val(),
                brand_id: $("#brand_id option:selected").val(),
                product_category_id: $("#product_category option:selected").val(),
                subcategory_id: $("#sub_category option:selected").val(),
                color: $("#color").val(),
                quantity: $("#quantity").val(),
                measurement_id: $("#measurement option:selected").val(),
                unit_price: $("#price").val(),
                vendor: $("#vender").val(),
                discount: $("#discount").val(),
                cost: $("#cost").val(),
                attachment: $("#attachment").prop("files")[0], // File object for attachment
                description: $("#descriptoins").val(),
                applications: $("#applications").val()
            };

            products.push(product); // Add product to array

            // Append product details to table
            $("#basic-datatable tbody").append(`
                <tr>
                    <td>${$("#product_id option:selected").text()}</td>
                    <td>${$("#brand_id option:selected").text()}</td>
                    <td>${$("#product_category option:selected").text()}</td>
                    <td>${$("#sub_category option:selected").text()}</td>
                    <td>${product.quantity}</td>
                    <td>${$("#measurement option:selected").text()}</td>
                    <td>${product.color}</td>
                    <td><img src="${URL.createObjectURL(product.image)}" alt="Product Image" width="50"></td>
                    <td>${product.unit_price}</td>
                    <td>${product.vendor}</td>
                    <td>${product.discount}</td>
                    <td>${product.cost}</td>
                    <td><img src="${URL.createObjectURL(product.attachment)}" alt="Attachment" width="50"></td>
                    <td>${product.description}</td>
                    <td>${product.applications}</td>
                    <td><button class="btn btn-danger remove-product" data-index="${products.length - 1}">Remove</button></td>
                </tr>
            `);

        });

        $("#submitAllProductsButton").click(function() {
            let formData = new FormData();
            formData.append("products", JSON.stringify(products)); // Serialize to JSON
            formData.append("_token", "{{ csrf_token() }}"); // Add CSRF token

            products.forEach((product, index) => {
                if (product.image) formData.append(`image_${index}`, product.image);
                if (product.attachment) formData.append(`attachment_${index}`, product.attachment);
            });

            $.ajax({
                url: "/submitshopitem",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert("Products submitted successfully!");
                    products = [];
                    $("#basic-datatable tbody").empty();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText); // Log the response text for detailed errors
                    alert("An error occurred. Please try again.");
                }
            });
        });
    </script>
@endsection
