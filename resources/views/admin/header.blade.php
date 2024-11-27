<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta
      name="Description"
      content="Bootstrap Responsive Admin Web Dashboard HTML5 Template"
    />
    <meta name="Author" content="Spruko Technologies Private Limited" />
    <meta
      name="Keywords"
      content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"
    />

    <!-- Title -->
    <title>Builder.lk</title>

    <!-- Favicon -->
    <link
      rel="icon"
      href="{{ asset('assets/img/brand/favicon.png') }}"
      type="image/x-icon"
    />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- Bootstrap css -->
    <link
      href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}"
      rel="stylesheet"
    />

    <!-- style css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!--- Animations css-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
     <!-- Leaflet CSS (Free Mapping Library) -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
 <!-- Leaflet Geocoder CSS -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap CSS and JS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>

<!-- DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">


  </head>

  @yield('section')
{{-- @push('js') --}}
<!-- JQuery min js -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Bundle js -->
<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Internal Chart.bundle js -->
<script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

<!-- Moment js -->
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

<!-- Internal Sparkline js -->
<script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Raphael js -->
<script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>

<!-- Internal Apexchart js -->
<script src="{{ asset('assets/js/apexcharts.js') }}"></script>

<!-- Rating js -->
<script src="{{ asset('assets/plugins/ratings-2/jquery.star-rating.js') }}"></script>
<script src="{{ asset('assets/plugins/ratings-2/star-rating.js') }}"></script>

<!-- Internal Perfect-scrollbar js -->
<script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

<!-- Eva-icons js -->
<script src="{{ asset('assets/js/eva-icons.min.js') }}"></script>

<!-- Right-sidebar js -->
<script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>
<script src="{{ asset('assets/plugins/sidebar/sidebar-custom.js') }}"></script>

<!-- Sticky js -->
<script src="{{ asset('assets/js/sticky.js') }}"></script>
<script src="{{ asset('assets/js/modal-popup.js') }}"></script>

<!-- Left-menu js -->
<script src="{{ asset('assets/plugins/side-menu/sidemenu.js') }}"></script>

<!-- Internal Map -->
<script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<!-- Internal index js -->
<script src="{{ asset('assets/js/index.js') }}"></script>

<!-- Themecolor js -->
<script src="{{ asset('assets/js/themecolor.js') }}"></script>

<!-- Custom js -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Internal Select2 js -->
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

<!-- Internal Jquery.steps js -->
<script src="{{ asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
<script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>

<!-- Internal Form-wizard js -->
<script src="{{ asset('assets/js/form-wizard.js') }}"></script>

<!-- Internal Form-elements js -->
<script src="{{ asset('assets/js/advanced-form-elements.js') }}"></script>
{{-- <script src="{{ asset('assets/js/select2.js') }}"></script> --}}

<!-- Internal Sumoselect js -->
<script src="{{ asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>

{{-- @endpush --}}

 </html>