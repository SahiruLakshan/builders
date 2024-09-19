@extends('admin.sidebar')
@section('content')
      <!-- main-content -->
      <div class="main-content app-content">
        <!-- container -->
        <div class="main-container container-fluid">
          <!-- breadcrumb -->

          <!-- breadcrumb -->

          <!-- row -->
          <div
            class="row row-sm d-flex justify-content-center align-items-center"
             style="height: 450px"
          >
            <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
              <div class="card box-shadow-0">
                <div class="card-header">
                  <h4 class="card-title mb-1">Update Shop Category - {{ $shopCategory->name }}</h4>
                  <p class="mb-2">
                    It is very easy to customize and use in your website
                    application.
                  </p>
                </div>
                <div class="card-body pt-0">
                  <form action="{{ url('shopcategory/update', $shopCategory->id) }}" method="post" id="shopCategoryForm" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="">
                      <!-- Shop Category Name Field -->
                      <div class="form-group">
                        <label for="shop_category_name"
                          >Shop Category Name</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="shop_category_name"
                          name="name"
                          value="{{ $shopCategory->name }}"
                          placeholder="Enter Shop Category Name"
                          required
                        />
                        <div class="invalid-feedback">
                          Please provide a valid Shop Category Name.
                        </div>
                      </div>

                      <!-- Shop Category Description Field -->
                      <div class="form-group">
                        <label for="shop_category_description"
                          >Description</label
                        >
                        <textarea
                          class="form-control"
                          id="shop_category_description"
                          placeholder="Enter Description"
                          name="description"
                          rows="4"
                          required
                        >{{ $shopCategory->description }}</textarea>
                        <div class="invalid-feedback">
                          Please provide a valid description for the category.
                        </div>
                      </div>

                      <!-- Action Buttons -->
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-3 mb-0">
                          Submit
                        </button>
                        {{-- <button
                          type="button"
                          class="btn btn-secondary mt-3 mb-0"
                          onclick="window.location.href='your_cancel_url_here'"
                        >
                          Cancel
                        </button> --}}
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endsection
