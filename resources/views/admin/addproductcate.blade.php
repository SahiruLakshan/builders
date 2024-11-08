@extends('admin.sidebar')
@section('content')
      <!-- main-content -->
      <div class="main-content app-content">
        <!-- container -->
        <div class="main-container container-fluid">
          <!-- row -->
          <div class="row row-sm mt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
              <div class="card box-shadow-0">
                <div class="card-header">
                  <h4 class="card-title mb-1">Add Product Category</h4>
                </div>
                <div class="card-body pt-0">
                  <form action="/submitproductcategory" method="post" id="shopCategoryForm" novalidate>
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="product">Select Product</label>
                            <select class="form-control select2" name="product" id="product_select">
                                <option value="" disabled selected></option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">
                              Choose one product for this category. Required field.
                            </small>
                        </div>
                      </div>
                         <!-- Product Related Brand Field -->
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="product">Select Brand Related to this Category </label>
                            <select class="form-control select2" name="brand" id="brand_select">
                                <option value="" disabled selected></option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->b_name }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">
                              Choose Brand for this subcategory. Required field.
                            </small>
                        </div>
                      </div>
                      <!-- Category Name Field -->
                      <div class="form-group">
                        <label for="shop_category_name"
                          >Product Category Name</label
                        >
                        <input
                        
                          type="text"
                          class="form-control"
                          id="shop_category_name"
                          name="name"
                          placeholder="Enter Category Name"
                          required
                        />
                        <div class="invalid-feedback">
                          Please provide a valid Product Category Name.
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="description"
                          >Description</label
                        >
                        <textarea
                          class="form-control"
                          id="description"
                          name="description"
                          placeholder="Enter description"
                          rows="4"
                          required
                        ></textarea>
                        <div class="invalid-feedback">
                          Please provide a valid description.
                        </div>
                      </div>


                      <!-- Action Buttons -->
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-3 mb-0">
                          Submit
                        </button>
                        <button
                          type="button"
                          class="btn btn-secondary mt-3 mb-0"
                          onclick="window.location.href='your_cancel_url_here'"
                        >
                          Cancel
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function() {
            // Initialize select2 for both dropdowns
            $('#product_select').select2({
                placeholder: "Select a product",
                allowClear: true
            });
    
            $('#brand_select').select2({
                placeholder: "Select a brand",
                allowClear: true
            });
        });
    </script>
          @endsection
      