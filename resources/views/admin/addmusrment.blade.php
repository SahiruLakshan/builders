@extends('front')
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
                  <h4 class="card-title mb-1">Add New Measurement Form</h4>
                  <p class="mb-2">
                    Enter the name of the Measurement you want to add
                  </p>
                </div>
                <div class="card-body pt-0">
                  <form class="form-horizontal" id="addbarand">
                    <!-- Brand Name Field -->
                    <div class="form-group">
                      <label for="brand_name">Unit*</label>
                      <input
                        type="text"
                        class="form-control"
                        id="unit"
                        placeholder="Unit"
                        required
                      />
                      <small class="form-text text-muted"
                        >Enter the Unit name. This field is required.</small
                      >
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
                        >Add any relevant information about this Unit. Optional
                        field.</small
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
        </div>
        <!-- /Container -->
      </div>
      <!-- /main-content -->

      <!-- Sidebar-right-->

      <!--/Sidebar-right-->

      <!-- Message Modal -->
 @endsection