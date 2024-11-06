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
                  <h4 class="card-title mb-1">Select Brand Related To Product </h4>
                 
                </div>
                <div class="card-body pt-0">
                  <form action="" method="post" id="shopCategoryForm" novalidate>
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="product">Select Product </label>
                            <select class="form-control select2" id="product">
                                <option value="" disabled selected></option>
                                {{-- @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach --}}
                            </select>
                            <small class="form-text text-muted">
                              Choose one product for this Brand. Required field.
                            </small>
                        </div>
                      </div>
                         <!-- Product Related Brand Field -->
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="product">Select Brand  </label>
                            <select class="form-control select2" id="brand">
                                <option value="" disabled selected></option>
                                {{-- @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach --}}
                            </select>
                            <small class="form-text text-muted">
                              Choose Brand for this product. Required field.
                            </small>
                        </div>
                      </div>
                      <!-- Action Buttons -->
                      <div class="form-group justify-content-end">
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
         $('#product').select2({
             placeholder: "Select a product",
             allowClear: true
         })

         $('#brand').select2({
             placeholder: "Select a brand", 
             allowClear: true
         })
      })
      </script>
   
          @endsection
      