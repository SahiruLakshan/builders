@extends('admin.sidebar')

@section('content')
<!-- main-content -->
{{-- <div class="main-content app-content"> --}}
  <!-- container -->
  {{-- <div class="main-container container-fluid"> --}}
    <!-- breadcrumb -->

    <!-- breadcrumb -->

    <!-- row -->
    <div
      class="row row-sm  mt-5 d-flex justify-content-center align-items-center"
    >
      <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
        <div class="card box-shadow-0">
          <div class="card-header">
            <h4 class="card-title mb-1">Update Brand - {{ $brand->b_name }}</h4>
            <p class="mb-2">
              Update your brand
            </p>
          </div>
          <div class="card-body pt-0">
            <form action="{{url ('brand/update',$brand->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row">
                <!-- Brand Name Field -->
                <div class="form-group col-md-6">
                  <label for="brand_name">Brand Name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="b_name"
                    value="{{ $brand->b_name }}"
                    id="brand_name"
                    placeholder="Brand Name"
                    required
                  />
                  <small class="form-text text-muted">
                    Enter the brand's official name. This field is
                    required.
                  </small>
                </div>

                <!-- Country of Origin Field -->
                <div class="form-group col-md-6">
                  <label for="country_of_origin">Country Of Origin</label>
                  <input
                    type="text"
                    class="form-control"
                    name="country_of_origin"
                    value="{{ $brand->country_of_origin }}"
                    id="country_of_origin"
                    placeholder="Country Of Origin"
                    required
                  />
                  <small class="form-text text-muted">
                    Specify the country where this brand originates.
                    Required field.
                  </small>
                </div>
              </div>
              <!-- Company Name Field -->
              <div class="form-group">
                <label for="company_name">Company Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="company_name"
                  value="{{ $brand->company_name }}"
                  id="company_name"
                  placeholder="Company Name"
                  required
                />
                <small class="form-text text-muted"
                  >Enter the name of the company managing this brand.
                  Required field.</small
                >
              </div>
              <!-- Address Field -->
              <div class="form-group">
                <label for="address">Address</label>
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  value="{{ $brand->address }}"
                  name="address"
                  placeholder="Enter Your Address"
                  required
                />
                <small class="form-text text-muted"
                  >Provide the full address for this brand's main office.
                  Required field.</small
                >
              </div>
              <!-- Email Address Field -->
              <div class="form-group">
                <label for="email">Email Address</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  value="{{ $brand->email }}"
                  placeholder="Enter Your Email"
                  required
                />
                <small class="form-text text-muted"
                  >Enter a valid email address for this brand. Required
                  field.</small
                >
              </div>
              <div class="row">
                <!-- Contact Number Field -->
                <div class="form-group col-md-6">
                  <label for="contact_no">Contact Number</label>
                  <input
                    type="tel"
                    class="form-control"
                    id="contact_no"
                    name="brand_contact_number"
                    value="{{ $brand->brand_contact_number }}"
                    placeholder="Enter Your Contact Number"
                    pattern="[0-9]{10}"
                    required
                  />
                  <small class="form-text text-muted">
                    Enter a 10-digit contact number for this brand.
                    Required field.
                  </small>
                </div>
                <!-- Product Source Dropdown -->
                <div class="form-group col-md-6">
                  <label for="product_source">Product Source</label>
                  <select
                    id="product_source"
                    name="production"
                    class="form-control"
                    required
                  >
                    <option value="" disabled selected>
                      Select Product Source
                    </option>
                    <option value="imported" {{$brand->production == 'imported' ? 'selected':''}}>Imported</option>
                    <option value="manufactured" {{$brand->production == 'manufactured' ? 'selected':''}}>Manufactured</option>
                    <option value="deal" {{$brand->production == 'deal' ? 'selected':''}}>Deal/Distribute</option>
                  </select>
                  <small class="form-text text-muted">
                    Specify how the product is sourced. Required field.
                  </small>
                </div>
              </div>
              <!-- Description Field -->
              <div class="form-group">
                <label for="description">Description (Optional)</label>
                <textarea
                  class="form-control"
                  id="description"
                  name="description"
                  placeholder="Provide details about the brand"
                  rows="3"
                >{{ $brand->description }}</textarea>
                <small class="form-text text-muted"
                  >Add any relevant information about this brand. Optional
                  field.</small
                >
              </div>

              <img src="" alt="">

              <!-- Brand Image Field -->
              <div class="mb-3">
                <label for="brand_img" class="form-label"
                  >Brand Image</label
                >

                <img src="{{ asset('assets/brand/'.$brand->brand_img) }}" height="200px" alt="Brand_Image">

                <input
                  class="form-control"
                  type="file"
                  id="brand_img"
                  name="brand_img"
                  accept=".jpg,.jpeg,.png"
                />
                <small class="form-text text-muted"
                  >Upload an image (JPEG or PNG format) representing the
                  brand. Required field.</small
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
                    Update Brand
                  </button>

                  <button
                    type="reset"
                    id="resetButton"
                    class="btn btn-secondary ms-4"
                  >
                    Reset
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

