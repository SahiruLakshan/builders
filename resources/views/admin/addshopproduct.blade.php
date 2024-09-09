@extends('front')
@section('content')

<div class="main-content app-content">
    <!-- container -->
    <div class="main-container container-fluid">
        <!-- breadcrumb -->

        <!-- breadcrumb -->

        <!-- row -->
        <div class="row row-sm d-flex justify-content-center align-items-center" style="height: 450px">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Add Shop Product</h4>
                        <p class="mb-2">Enter the details of the product you want to add</p>
                    </div>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" id="add">
                           
                                <!-- Shop Name Field -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="shop_name">Select Shop Name</label>
                                        <select class="form-control select2" id="shop_name" name="shop_name">
                                            <!-- Example options, ideally should come from the database -->
                                            <option value="" disabled selected></option>
                                            <option value="shop1">Shop 1</option>
                                            <option value="shop2">Shop 2</option>
                                            <option value="shop3">Shop 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="description">Product Name (Required)</label>
                                        <textarea
                                          class="form-control"
                                          id="Product_name"
                                          placeholder="nippolac weather sheild  Brilliant White"
                                          rows="2"
                                          required
                                        ></textarea>
                                        <small class="form-text text-muted"
                                          >Add any relevant information about this brand. Required
                                          field.</small
                                        >
                                      </div>
                                <!-- Select2 Field 1: Brand -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="brand_category">Select Brand</label>
                                        <select class="form-control select2" id="brand_category" name="brand_category">
                                            <!-- Options from the brand table -->
                                            <option value="" disabled selected></option>
                                            <option value="electronics">Nippolac</option>
                                            <option value="clothing">Dulux</option>
                                            <option value="furniture">Alumex</option>
                                            <option value="beauty">slon</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Select2 Field 2: Product Category -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="brand_type">Select Product Category</label>
                                        <select class="form-control select2" id="brand_type" name="brand_type">
                                            <!-- Options from the product category table -->
                                            <option value="" disabled selected></option>
                                            <option value="paint">paint</option>
                                            <option value="cemant">cemant</option>
                                            <option value="steel">steel</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Select2 Field 3: Product SubCategory -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="sub_category">Select Product SubCategory</label>
                                        <select class="form-control select2" id="sub_category" name="sub_category">
                                            <!-- Empty option to prevent auto-selection -->
                                            <option value="" disabled selected></option>
                                            <option value="premium">Weather Shield</option>
                                            <option value="midrange">Tile Mota</option>
                                            <option value="budget">T Type</option>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                <!-- Quantity Field -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="quantity">Enter Product Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity"
                                            placeholder="Enter quantity" min="1" step="1" />
                                    </div>
                                </div>

                                <!-- Select2 Field 4: Measurement -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="measurement">Select Measurement</label>
                                        <select class="form-control select2" id="measurement" name="measurement">
                                            <!-- Options from the measurement table -->
                                            <option value="mm">mm</option>
                                            <option value="cm">cm</option>
                                            <option value="inch">inch</option>
                                            <option value="l">l</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="color">Colour</label>
                                        <input type="text" class="form-control" id="color" name="color" placeholder="Enter color" style="text-transform: uppercase;" />
                                    </div>
                                </div>


                                <!-- Product Image Field -->
                                <div class="mb-3">
                                    <label for="product_img" class="form-label">Upload Product Image</label>
                                    <input class="form-control" type="file" id="formFile" required>
                                    <small class="form-text text-muted">Upload an image (JPEG or PNG format) representing the product. Required field.</small>
                                </div>

                                <!-- Submit Buttons -->
                                <div class="form-group mb-0 mt-3 justify-content-end">
                                    <div>
                                        <button type="submit" id="submitButton" class="btn btn-primary">
                                            Add Product
                                        </button>

                                        <button type="reset" id="resetButton" class="btn btn-secondary ms-4">
                                            Cancel
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

<!-- Include Select2 JS and CSS -->
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Initialize Select2 -->
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script> --}}

@endsection
  