
@extends('admin.sidebar')
@section('content')
      <!-- main-content -->
      {{-- <div class="main-content app-content"> --}}
        <!-- container -->
        {{-- <div class="main-container container-fluid"> --}}
          <!-- breadcrumb -->

          <!-- breadcrumb -->

          <!-- row -->
          <div class="row row-sm  mt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
              <div class="card box-shadow-0">
                <div class="card-header">
                  <h4 class="card-title mb-1">Add New Product</h4>
                  <p class="mb-2">
                    Enter the name of the Product you want to add
                  </p>
                </div>
                <div class="card-body pt-0">
                  <form class="form-horizontal" id="addproduct">
                    <!-- Brand Name Field -->
                    <div class="form-group">
                      <label for="product_name">Product Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="brand_name"
                        placeholder="Brand Name"
                        required
                      />
                      <small class="form-text text-muted"
                        >Enter the product name. This field is
                        required.</small>
                    </div>
                    <!-- Product Description Field -->
                    <div class="form-group">
                      <label for="description">Product Description</label>
                      <textarea
                        class="form-control"
                        id="description"
                        placeholder="Enter a description about the product"
                        rows="3"
                        required
                      ></textarea>
                      <small class="form-text text-muted"
                        >Enter a brief description about the product. This field
                        is required.</small
                      >
                    </div>
                    <!-- Submit Buttons -->
                    <div class="form-group mb-0 mt-3 justify-content-end">
                      <div>
                        <button
                          type="submit"
                          id="submitButton"
                          class="btn btn-primary"
                        >
                          Add Product
                        </button>

                        <button
                          type="reset"
                          id="resetButton"
                          class="btn btn-secondary ms-4"
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
          <!-- row closed -->

          <!-- row opened -->

          <!-- row closed -->

          <!-- row opened -->

          <!-- row close -->

          <!-- row opened -->

          <!-- /row -->
        {{-- </div> --}}
        <!-- /Container -->
      {{-- </div> --}}
      <!-- /main-content -->
      @endsection