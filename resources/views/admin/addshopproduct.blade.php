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
                                                <option value="{{ $shops->id }}">{{ $shops->name }}</option>
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

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="color">Image</label>
                                            <input class="form-control" type="file" name="image" id="image" accept=".jpg,.jpeg,.png" />
                                        </div>
                                    
                                        <!-- Container for dynamically added input fields -->
                                        <div id="inputFieldsContainer"></div>
                                    
                                        <button type="button" id="addMoreFieldsBtn" class="btn btn-success ">Add More Fields</button>
                                    
                                    
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <button type="button" id="addProductButton" class="btn btn-primary">
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
                                                                <th class="wd-25p border-bottom-0">Image</th>
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
            $('.select2').select2();

            let products = [];

            $('#addProductButton').on('click', function() {
                let productName = $('#product').val();
                let productName2 = $('#product option:selected').text();

                let brand = $('#brand_category').val();
                let brandName = $('#brand_category option:selected').text();

                let category = $('#product_category').val();
                let categoryName = $('#product_category option:selected').text();

                let subCategory = $('#sub_category').val();
                let subCategoryName = $('#sub_category option:selected').text();

                let quantity = $('#quantity').val();
                let measurement = $('#measurement').val();
                let measurementName = $('#measurement option:selected').text();
                let color = $('#color').val();
                let image = $('#image')[0].files[0]; // Get the file object

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
                    color,
                    image // Add the file object here
                };

                products.push(product);

                // Append to the table
                let row = `<tr>
            <td>${productName2}</td>
            <td>${brandName}</td>
            <td>${categoryName}</td>
            <td>${subCategoryName}</td>
            <td>${quantity}</td>
            <td>${measurementName}</td>
            <td>${color}</td>
            <td>${image ? image.name : ''}</td>
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
                $('#image').val('');
            });

            $(document).on('click', '.deleteProduct', function() {
                let row = $(this).closest('tr');
                let index = row.index();
                products.splice(index, 1); // Remove from the products array
                row.remove(); // Remove row from table
            });

            $('#submitProducts').on('click', function() {
                let shopName = $('#shop_name').val();
                if (!shopName) {
                    alert('Please select a shop.');
                    return;
                }

                let formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('shop_name', shopName);

                products.forEach((product, index) => {
                    formData.append(`products[${index}][productName]`, product.productName);
                    formData.append(`products[${index}][brand]`, product.brand);
                    formData.append(`products[${index}][category]`, product.category);
                    formData.append(`products[${index}][subCategory]`, product.subCategory);
                    formData.append(`products[${index}][quantity]`, product.quantity);
                    formData.append(`products[${index}][measurement]`, product.measurement);
                    formData.append(`products[${index}][color]`, product.color);
                    if (product.image) {
                        formData.append(`products[${index}][image]`, product
                            .image); // Attach the file
                    }
                });

                $.ajax({
                    url: '{{ route('submit.products') }}',
                    method: 'POST',
                    data: formData,
                    contentType: false, // Important for file upload
                    processData: false, // Important for file upload
                    success: function(response) {
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
                        console.error(xhr.responseText);
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while adding the products.',
                            icon: 'error',
                            confirmButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        });
                    }

                });
            });
        });
        // Get references to the container and button
        const inputFieldsContainer = document.getElementById('inputFieldsContainer');
        const addMoreFieldsBtn = document.getElementById('addMoreFieldsBtn');
        
        // Initialize a counter to give unique IDs to each input field
        let fieldCounter = 1; // Start from 1 since we already have one field

        // Function to add a new input field using a string of HTML
        function addNewField() {
            // Create a string of HTML for the new field with a delete button
            const newFieldHTML = `
                <div class="inputFieldGroup" id="fieldGroup${fieldCounter}">
                    <label for="field${fieldCounter}">Field ${fieldCounter + 1}:</label>
                    <input type="text" name="fields[]" id="field${fieldCounter}" placeholder="Enter value">
                    <button type="button" onclick="deleteField(${fieldCounter})" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i></button>
                </div>
            `;

            // Append the new field HTML to the container
            inputFieldsContainer.innerHTML += newFieldHTML;

            // Increment the counter for the next field
            fieldCounter++;
        }

        // Function to delete an input field
        function deleteField(counter) {
            const fieldGroup = document.getElementById(`fieldGroup${counter}`);
            if (fieldGroup) {
                inputFieldsContainer.removeChild(fieldGroup);
            }
        }

        // Add click event listener to the button
        addMoreFieldsBtn.addEventListener('click', addNewField);
                                            
    </script>
@endsection
