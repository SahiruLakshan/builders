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
                                            <div class="form-group ">
                                                <label for="product">Shop Product No:</label>
                                                <input type="text" class="form-control" id="pro_no" name="pro_no"
                                                    readonly>
                                                <small class="form-text text-muted">Automatically generated shop Product
                                                    number.</small>
                                            </div>
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
                                                <input type="number" class="form-control" name="unit_price"
                                                    id="price" placeholder="Enter price" min="0.01"
                                                    step="0.01" />
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
                                                <!-- Dynamically added input fields with delete buttons will appear here -->
                                            </div>
                                            <div class="container mt-3">
                                                <button type="button" id="addMoreFieldsBtn" class="btn btn-success">
                                                    Add More Fields
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        document.getElementById("addMoreFieldsBtn").addEventListener("click", function() {
                                            // Create a new div for the input field and delete button
                                            const newFieldDiv = document.createElement("div");
                                            newFieldDiv.classList.add("form-group", "mb-2", "d-flex", "align-items-center");

                                            // Create a new input field
                                            const newInput = document.createElement("input");
                                            newInput.type = "text";
                                            newInput.classList.add("form-control", "mr-2");
                                            newInput.name = "additionalField[]"; // Array name for handling multiple fields

                                            // Create a delete button
                                            // Create a delete button
                                            const deleteBtn = document.createElement("button");
                                            deleteBtn.type = "button";
                                            deleteBtn.classList.add("btn", "btn-danger");

                                            // Add the trash icon to the button text
                                            deleteBtn.innerHTML = '<i class="bi bi-trash"></i>';


                                            // Attach click event to delete the current field
                                            deleteBtn.addEventListener("click", function() {
                                                newFieldDiv.remove();
                                            });

                                            // Append the input and delete button to the div
                                            newFieldDiv.appendChild(newInput);
                                            newFieldDiv.appendChild(deleteBtn);

                                            // Append the new div to the input fields container
                                            document.getElementById("inputFieldsContainer").appendChild(newFieldDiv);
                                        });
                                    </script>


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
                                                                <th class="wd-25p border-bottom-0">Product No</th>
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
                                                                <th class="wd-25p border-bottom-0">Other Categories</th>
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
        document.addEventListener("DOMContentLoaded", function() {
            // Function to generate a random ID in the format SHP000001
            function generateRandomId() {
                const randomNumber = Math.floor(Math.random() * 1000000); // Generate a number between 0 and 999999
                return 'SHP' + String(randomNumber).padStart(6, '0'); // Format as SHP000001
            }

            // Function to check if the generated ID already exists in the database
            function checkProNoUniqueness(proNo) {
                return new Promise((resolve, reject) => {
                    $.ajax({
                        url: "/check-pro-no-unique", // The route to check uniqueness
                        type: "GET",
                        data: {
                            pro_no: proNo
                        }, // Send the generated pro_no
                        success: function(response) {
                            if (response.exists) {
                                // If the ID exists, resolve to regenerate
                                resolve(false);
                            } else {
                                // If the ID is unique, resolve
                                resolve(true);
                            }
                        },
                        error: function(xhr, status, error) {
                            reject(error); // Handle errors
                        }
                    });
                });
            }

            // Initialize products array to hold product details
            let products = [];

            // Initial pro_no population
            const proNoField = document.getElementById('pro_no');
            if (proNoField) {
                proNoField.value = generateRandomId(); // Set the initial random ID
            }

            // Add product to table and generate a new unique product number
            $("#addProductButton").click(async function() {
                let productNoUnique = false;
                let proNo;

                // Keep generating and checking the product number until it's unique
                while (!productNoUnique) {
                    proNo = generateRandomId();
                    productNoUnique = await checkProNoUniqueness(proNo);
                }

                // Set the unique product number in the pro_no field
                $("#pro_no").val(proNo);

                // Collect dynamically added other categories
                let otherCategories = [];
                $("#inputFieldsContainer input[name='additionalField[]']").each(function() {
                    if ($(this).val().trim() !== "") {
                        otherCategories.push($(this).val().trim());
                    }
                });

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
                    applications: $("#applications").val(),
                    other_categories: otherCategories // Add the dynamically collected values
                };

                // Add product to the products array
                products.push(product);

                // Append product details to table
                $("#basic-datatable tbody").append(`
                    <tr data-index="${products.length - 1}">
                        <td>${product.pro_no}</td>
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
                        <td>${product.other_categories.join(", ")}</td> <!-- Show Other Categories -->
                        <td><button class="btn btn-danger remove-product">Remove</button></td>
                    </tr>
                `);

                // Clear dynamically added fields after adding the product
                $("#inputFieldsContainer").empty();

                // Generate a new product number for the next product
                proNoField.value = generateRandomId();
            });

            // Handle remove button click
            $("#basic-datatable").on("click", ".remove-product", function() {
                const row = $(this).closest('tr'); // Get the row that contains the button
                const index = row.data("index"); // Get the index of the product to remove

                // Remove the product from the products array
                products.splice(index, 1);

                // Remove the row from the table
                row.remove();

                // Re-index the products array and update the table indices
                $("#basic-datatable tbody tr").each(function(index) {
                    $(this).data("index", index); // Update the data-index attribute
                    $(this).find(".remove-product").data("index",
                    index); // Update remove button index
                });
            });

            // Handle submit all products
            $("#submitAllProductsButton").click(function() {
                let formData = new FormData();
                formData.append("products", JSON.stringify(products)); // Serialize to JSON
                formData.append("_token", "{{ csrf_token() }}"); // Add CSRF token

                // Append product files
                products.forEach((product, index) => {
                    if (product.image) formData.append(`image_${index}`, product.image);
                    if (product.attachment) formData.append(`attachment_${index}`, product
                        .attachment);
                });

                $.ajax({
                    url: "/submitshopitem",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                    
                        // products = [];
                        // $("#basic-datatable tbody").empty();

                        Swal.fire({
                            title: 'Success!',
                            text: 'Products added successfully!',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Error!',  
                            text: xhr.responseText,
                            icon: 'error',
                            confirmButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>
@endsection
