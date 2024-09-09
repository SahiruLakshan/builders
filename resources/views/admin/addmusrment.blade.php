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
 
    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Bundle js -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--Internal  Chart.bundle js -->
    <script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>

    <!-- Moment js -->
    <script src="../assets/plugins/moment/moment.js"></script>

    <!--Internal Sparkline js -->
    <script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Moment js -->
    <script src="../assets/plugins/raphael/raphael.min.js"></script>

    <!--Internal Apexchart js-->
    <script src="../assets/js/apexcharts.js"></script>

    <!-- Rating js-->
    <script src="../assets/plugins/ratings-2/jquery.star-rating.js"></script>
    <script src="../assets/plugins/ratings-2/star-rating.js"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

    <!-- Eva-icons js -->
    <script src="../assets/js/eva-icons.min.js"></script>

    <!-- right-sidebar js -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>
    <script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>
    <script src="../assets/js/modal-popup.js"></script>

    <!-- Left-menu js-->
    <script src="../assets/plugins/side-menu/sidemenu.js"></script>

    <!-- Internal Map -->
    <script src="../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <!--Internal  index js -->
    <script src="../assets/js/index.js"></script>

    <!--themecolor js-->
    <script src="../assets/js/themecolor.js"></script>

    <!-- Apexchart js-->
    <script src="../assets/js/apexcharts.js"></script>
    <script src="../assets/js/jquery.vmap.sampledata.js"></script>

    <!-- custom js -->
    <script src="../assets/js/custom.js"></script>
  </body>
</html>
