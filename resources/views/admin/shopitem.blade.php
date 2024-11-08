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
                                                <input type="text" class="form-control" id="shop_item_no" name="shop_product_no" readonly>
                                                <small class="form-text text-muted">Automatically generated shop Product number.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Image -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="color">Image</label>
                                                <input class="form-control" type="file" name="image" id="image" accept=".jpg,.jpeg,.png" />
                                                <small class="form-text text-muted">Upload a clear image in JPG, JPEG, or PNG format.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Select Product -->
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="product">Select Product:</label>
                                                <select class="form-control select2" id="product">
                                                    <option value="" disabled selected></option>
                                                    {{-- Dynamically filled product options --}}
                                                </select>
                                                <small class="form-text text-muted">Choose a product from the list.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Select Brand -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="brand_category">Select Brand</label>
                                                <select class="form-control select2" id="brand_category">
                                                    <option value="" disabled selected></option>
                                                    {{-- Dynamically filled brand options --}}
                                                </select>
                                                <small class="form-text text-muted">Select the brand associated with the product.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Select Product Category -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="product_category">Select Product Category</label>
                                                <select class="form-control select2" id="product_category">
                                                    <option value="" disabled selected></option>
                                                    {{-- Dynamically filled product category options --}}
                                                </select>
                                                <small class="form-text text-muted">Choose the appropriate category for this product.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Select Product Subcategory -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="sub_category">Select Product Subcategory</label>
                                                <select class="form-control select2" id="sub_category">
                                                    <option value="" disabled selected></option>
                                                    {{-- Dynamically filled subcategory options --}}
                                                </select>
                                                <small class="form-text text-muted">Select a subcategory if applicable.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Color -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="color">Color</label>
                                                <input type="text" class="form-control" id="color" placeholder="Enter color" />
                                                <small class="form-text text-muted">Specify the color (e.g., Red, Blue).</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Quantity -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="quantity">Product Quantity</label>
                                                <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" min="1" step="1" />
                                                <small class="form-text text-muted">Enter the quantity in stock.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Select Measurement -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="measurement">Select Measurement</label>
                                                <select class="form-control select2" id="measurement">
                                                    {{-- Dynamically filled measurement options --}}
                                                </select>
                                                <small class="form-text text-muted">Choose the measurement unit for this product.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Unit Price -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="price">Unit Price</label>
                                                <input type="number" class="form-control" id="price" placeholder="Enter price" min="0.01" step="0.01" />
                                                <small class="form-text text-muted">Specify the unit price in the local currency.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Vendor Type -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="vander">Vendor</label>
                                                <select class="form-control" id="vander">
                                                    <option value="manufacturer">Manufacturer</option>
                                                    <option value="importer">Importer</option>
                                                    <option value="distributer">Distributor</option>
                                                </select>
                                                <small class="form-text text-muted">Select the vendor type for this product.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Discount -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="discount">Discount</label>
                                                <input type="number" class="form-control" id="discount" placeholder="Enter discount" min="0.1" step="0.1" />
                                                <small class="form-text text-muted">Enter any applicable discount in percentage.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Cost -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cost">Cost</label>
                                                <input type="number" class="form-control" id="cost" placeholder="Enter cost" min="0.1" />
                                                <small class="form-text text-muted">Specify the cost to the vendor.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Attachment -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="attachment">Attachment</label>
                                                <input class="form-control" type="file" name="attachment" id="attachment" accept=".jpg,.jpeg,.png" />
                                                <small class="form-text text-muted">Upload an attachment if needed in JPG, JPEG, or PNG format.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Description -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="descriptoins">Description</label>
                                                <textarea class="form-control" id="descriptoins" rows="5" name="description" placeholder="Enter description"></textarea>
                                                <small class="form-text ">Provide a detailed description of the product.</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Applications -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="aplication">Applications</label>
                                                <textarea class="form-control" id="aplication" rows="5" name="aplication" placeholder="Enter applications"></textarea>
                                                <small class="form-text text-muted">Describe the product's applications or uses.</small>
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
                                                                <th class="wd-20p border-bottom-0">Other Categories</th>
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
    <!-- Include DataTables CSS and JS -->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
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
                let image = $('#image')[0].files[0];
                let otherCategories = [];
                $('input[name="other_categories[]"]').each(function() {
                    otherCategories.push($(this).val());
                });


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
                    image,
                    otherCategories : otherCategories
                };

                products.push(product);

                let row = `<tr>
                    <td>${productName2}</td>
                    <td>${brandName}</td>
                    <td>${categoryName}</td>
                    <td>${otherCategories.join(', ')}</td>
                    <td>${subCategoryName}</td>
                    <td>${quantity}</td>
                    <td>${measurementName}</td>
                    <td>${color}</td>
                    <td>${image ? image.name : ''}</td>
                    <td><button type="button" class="btn btn-danger btn-sm deleteProduct">Delete</button></td>
                </tr>`;
                $('#basic-datatable tbody').append(row);

                // Clear fields
                $('#product').val('').trigger('change');
                $('#brand_category').val('').trigger('change');
                $('#product_category').val('').trigger('change');
                $('#sub_category').val('').trigger('change');
                $('#quantity').val('');
                $('#measurement').val('').trigger('change');
                $('#color').val('');
                $('#image').val('');
                $('#inputFieldsContainer').empty(); // Clear other categories
            });

            $(document).on('click', '.deleteProduct', function() {
                let row = $(this).closest('tr');
                let index = row.index();
                products.splice(index, 1);
                row.remove();
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
                        formData.append(`products[${index}][image]`, product.image);
                    }
                    product.otherCategories.forEach((category, catIndex) => {
                        formData.append(`products[${index}][other_categories][${catIndex}]`,
                            category);
                    });
                });

                $.ajax({
                    url: '{{ route('submit.products') }}',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
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

            // const inputFieldsContainer = document.getElementById('inputFieldsContainer');
            // const addMoreFieldsBtn = document.getElementById('addMoreFieldsBtn');
            // let fieldCounter = 1;
            // let recycledCounters = [];

            // function addNewField() {
            //     const currentFieldCounter = recycledCounters.length > 0 ? recycledCounters.shift() : fieldCounter++;

            //     const newFieldHTML = `
            //     <div class="row">
            //          <div class="inputFieldGroup row mb-2 p-2" id="fieldGroup${currentFieldCounter}">
            //             <div class="col-md-10">
            //                 <label for="other_categories${currentFieldCounter}" class="form-label">Other Category ${currentFieldCounter}:</label>
            //                 <input type="text" name="other_categories[]" class="form-control" id="other_categories${currentFieldCounter}" placeholder="Enter value">
            //             </div>
            //             <div class="col-md-2 mt-4 d-flex justify-content-center">
            //                 <button type="button" class="btn btn-danger btn-sm delete-btn">
            //                     <i class="fas fa-trash"></i> 
            //                 </button>
            //             </div>
            //         </div>
            //     </div>
                    
            //     `;
            // inputFieldsContainer.insertAdjacentHTML('beforeend', newFieldHTML);
            // }

            // // Event listener for adding fields
            // addMoreFieldsBtn.addEventListener('click', addNewField);

            // // Event delegation for delete buttons
            // inputFieldsContainer.addEventListener('click', function (event) {
            //     if (event.target.closest('.delete-btn')) {
            //         const fieldGroup = event.target.closest('.inputFieldGroup');
            //         if (fieldGroup) {
            //             const fieldId = parseInt(fieldGroup.id.replace('fieldGroup', ''));
            //             recycledCounters.push(fieldId);
            //             fieldGroup.remove();

            //             // Check if all fields are removed
            //             if (inputFieldsContainer.children.length === 0) {
            //                 fieldCounter = 1;             // Reset the counter
            //                 recycledCounters = [];         // Clear recycled counters
            //             }
            //         }
            //     }
            // });
            // const inputFieldsContainer = document.getElementById('inputFieldsContainer');
            // const addMoreFieldsBtn = document.getElementById('addMoreFieldsBtn');
            // let fieldCounter = 1;
            // let recycledCounters = [];

            // function addNewField() {
            //     const currentFieldCounter = recycledCounters.length > 0 ? recycledCounters.shift() : fieldCounter++;

            //     const newFieldHTML = `
            //         <div class="inputFieldGroup row mb-2 p-2 align-items-center" id="fieldGroup${currentFieldCounter}">
            //             <div class="col-md-10">
            //                 <label for="other_categories${currentFieldCounter}" class="form-label">Other Category ${currentFieldCounter}:</label>
            //                 <input type="text" name="other_categories[]" class="form-control" id="other_categories${currentFieldCounter}" placeholder="Enter value">
            //             </div>
            //             <div class="col-md-2 d-flex justify-content-center">
            //                 <button type="button" class="btn btn-danger btn-sm delete-btn mt-4">
            //                     <i class="fas fa-trash"></i> 
            //                 </button>
            //             </div>
            //         </div>
            //     `;
            //     inputFieldsContainer.insertAdjacentHTML('beforeend', newFieldHTML);
            // }

            // // Event listener for adding fields
            // addMoreFieldsBtn.addEventListener('click', addNewField);

            // // Event delegation for delete buttons
            // inputFieldsContainer.addEventListener('click', function (event) {
            //     if (event.target.closest('.delete-btn')) {
            //         const fieldGroup = event.target.closest('.inputFieldGroup');
            //         if (fieldGroup) {
            //             const fieldId = parseInt(fieldGroup.id.replace('fieldGroup', ''));
            //             recycledCounters.push(fieldId);
            //             fieldGroup.remove();

            //             // Reset the counter if all fields are removed
            //             if (inputFieldsContainer.children.length === 0) {
            //                 fieldCounter = 1; // Reset counter to 1
            //                 recycledCounters = []; // Clear recycled counters
            //             }
            //         }
            //     }
            // });
            const $inputFieldsContainer = $('#inputFieldsContainer');
            const $addMoreFieldsBtn = $('#addMoreFieldsBtn');
            let fieldCounter = 1;
            let recycledCounters = [];

            function addNewField() {
                const currentFieldCounter = recycledCounters.length > 0 ? recycledCounters.shift() : fieldCounter++;

                const newFieldHTML = `
                    <div class="inputFieldGroup row mb-2 p-2 align-items-center" id="fieldGroup${currentFieldCounter}">
                        <div class="col-md-10">
                            <label for="other_categories${currentFieldCounter}" class="form-label">Other Category ${currentFieldCounter}:</label>
                            <input type="text" name="other_categories[]" class="form-control" id="other_categories${currentFieldCounter}" placeholder="Enter value">
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <button type="button" class="btn btn-danger btn-sm delete-btn mt-4">
                                <i class="fas fa-trash"></i> 
                            </button>
                        </div>
                    </div>
                `;
                $inputFieldsContainer.append(newFieldHTML);
            }

            // Event listener for adding fields
            $addMoreFieldsBtn.on('click', addNewField);

            // Event delegation for delete buttons
            $inputFieldsContainer.on('click', '.delete-btn', function() {
                const $fieldGroup = $(this).closest('.inputFieldGroup');
                if ($fieldGroup.length) {
                    const fieldId = parseInt($fieldGroup.attr('id').replace('fieldGroup', ''));
                    recycledCounters.push(fieldId);
                    $fieldGroup.remove();

                    // Reset the counter if all fields are removed
                    if ($inputFieldsContainer.children().length === 0) {
                        fieldCounter = 1; // Reset counter to 1
                        recycledCounters = []; // Clear recycled counters
                    }
                }
            });


        });
    </script>
@endsection
