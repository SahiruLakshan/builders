
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
            class="row row-sm d-flex justify-content-center align-items-center"
          >
            <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
              <div class="card box-shadow-0">
                <div class="card-header">
                  <h4 class="card-title mb-1">Add New Product</h4>
                  <p class="mb-2">
                    Enter the name of the brand you want to add
                  </p>
                </div>
                <div class="card-body pt-0">
                  <form class="form-horizontal" id="addbarand">
                    <!-- Brand Name Field -->
                    <div class="form-group">
                      <label for="brand_name">Brand Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="brand_name"
                        placeholder="Brand Name"
                        required
                      />
                      <small class="form-text text-muted"
                        >Enter the brand's official name. This field is
                        required.</small
                      >
                    </div>

                    <!-- Company Name Field -->
                    <div class="form-group">
                      <label for="company_name">Company Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="company_name"
                        placeholder="Company Name"
                        required
                      />
                      <small class="form-text text-muted"
                        >Enter the name of the company managing this brand.
                        Required field.</small
                      >
                    </div>

                    <!-- Country of Origin Field -->
                    <div class="form-group">
                      <label for="country_of_origin">Country Of Origin</label>
                      <input
                        type="text"
                        class="form-control"
                        id="country_of_origin"
                        placeholder="Country Of Origin"
                        required
                      />
                      <small class="form-text text-muted"
                        >Specify the country where this brand originates.
                        Required field.</small
                      >
                    </div>

                    <!-- Address Field -->
                    <div class="form-group">
                      <label for="address">Address*</label>
                      <input
                        type="text"
                        class="form-control"
                        id="address"
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
                        placeholder="Enter Your Email"
                        required
                      />
                      <small class="form-text text-muted"
                        >Enter a valid email address for this brand. Required
                        field.</small
                      >
                    </div>

                    <!-- Contact Number Field -->
                    <div class="form-group">
                      <label for="contact_no">Contact Number*</label>
                      <input
                        type="tel"
                        class="form-control"
                        id="contact_no"
                        placeholder="Enter Your Contact Number"
                        pattern="[0-9]{10}"
                        required
                      />
                      <small class="form-text text-muted"
                        >Enter a 10-digit contact number for this brand.
                        Required field.</small
                      >
                    </div>

                    <!-- Product Source Dropdown -->
                    <div class="form-group">
                      <div class="mb-4">
                        <label for="product_source">Product Source*</label>
                        <select
                          name="product_source"
                          id="product_source"
                          class="form-control"
                          required
                        >
                          <option value="" disabled selected>
                            Select Product Source
                          </option>
                          <option value="imported">Imported</option>
                          <option value="manufactured">Manufactured</option>
                          <option value="deal">Deal/Distribute</option>
                        </select>
                        <small class="form-text text-muted"
                          >Specify how the product is sourced. Required
                          field.</small
                        >
                      </div>
                    </div>

                    <!-- Description Field -->
                    <div class="form-group">
                      <label for="description">Description (Optional)</label>
                      <textarea
                        class="form-control"
                        id="description"
                        placeholder="Provide details about the brand"
                        rows="3"
                      ></textarea>
                      <small class="form-text text-muted"
                        >Add any relevant information about this brand. Optional
                        field.</small
                      >
                    </div>

                    <!-- Brand Image Field -->
                    <div class="mb-3">
                      <label for="brand_img" class="form-label"
                        >Brand Image</label
                      >
                      <input
                        class="form-control"
                        type="file"
                        id="brand_img"
                        accept=".jpg,.jpeg,.png"
                      />
                      <small class="form-text text-muted"
                        >Upload an image (JPEG or PNG format) representing the
                        brand. Optional field.</small
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
                          ADD
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