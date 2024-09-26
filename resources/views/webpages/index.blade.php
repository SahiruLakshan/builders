<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Builders.lk</title>

    <!-- Google font -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700"
      rel="stylesheet"
    />

    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Slick -->
        {{-- <link type="text/css" rel="stylesheet" href="{{ asset('assets/webpage/css/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/webpage/css/slick-theme.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>


    <!-- Owl Carousel CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />

    <!-- FontAwesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />


    <!-- Custom stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/webpage/css/style.css') }}" />

    <style>
      /* Common Dropdown Button Styles */
      .common-dropdown-btn {
        font-size: 13px; /* Adjust this value as needed */
      }

      /* Common Dropdown Menu Items */
      .common-dropdown-menu .dropdown-item {
        font-size: 13px; /* Adjust this value as needed */
      }
    </style>
  </head>

  <body class="overflow-x-hidden">
    <!-- HEADER -->
    <header class="nav navbar-expand-lg">
        <div class="row">
            <!-- Logo Section -->
            <div
              class="col-2 d-flex align-items-center justify-content-center"
              style="background-color: blanchedalmond"
            >
              <a href="index.html">
                <img
                  src="{{ asset('assets/webpage/img/LOGO-01.png') }}"
                  alt="Description of Image"
                  class="img-fluid"
                />
              </a>
            </div>

            <!-- Main Content Section -->
            <div class="col-md-10 px-0">
              <!-- First Row: Top Header (Contact Info & Links) -->
              <div id="top-header">
                <div class="container-fluid">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex ">
                      <ul class="header-links float-left">
                        <li>
                          <a href="tel:0112748149"
                            ><i class="fa fa-phone"></i> Tel: 011 274 81 49</a
                          >
                        </li>
                        <li>
                          <a href="mailto:info@builders.lk"
                            ><i class="fa fa-envelope-o"></i>
                            info@builders.lk</a
                          >
                        </li>
                        <li>
                          <a
                            href="https://www.google.com/maps/search/?api=1&query=No541D,Galawilawaththa,Homagama"
                            target="_blank"
                          >
                            <i class="fa fa-map-marker"></i> No541D,
                            Galawilawaththa, Homagama
                          </a>
                        </li>
                        <li><a href="home.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="galary.html">Gallery</a></li>
                        <li><a href="publications.html">Publications</a></li>
                        <li>
                          <a href="certifications.html">Certifications</a>
                        </li>
                        <li><a href="career.html">Career</a></li>
                        <li><a href="education.html">Education</a></li>
                      </ul>
                    </div>
                    <div class="d-flex">

                          <div class="dropdown px-0">
                            <button class="btn btn-sm btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                My Account
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            @guest()
                                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                                <li><a class="dropdown-item" href="{{route('register')}}">Sign up</a></li>
                            </ul>
                            @endguest
                            @auth
                            @if (Auth::user()->type==1)
                            <li><a class="dropdown-item " href="{{route('dashboard')}}">Dashboard</a></li>
                            @endif
                                <li>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item btn btn danger"><i></i>
                                            Logout</button>
                                    </form>
                                </li>
                              </ul>
                            @endauth
                          </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Second Row: Navigation Bar -->
              <nav
                id="navigation"
                class="navbar navbar-expand p-0"
                style="background-color: #e3f2fd"
              >
                <div class="container-fluid px-3">
                  <!-- Hamburger Toggler Button -->
                  <button
                    class="navbar-toggler p-1"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div
                    class="collapse navbar-collapse p-1"
                    id="navbarNavDropdown"
                  >
                    <ul class="navbar-nav ms-auto p-1">
                      <li class="nav-item dropdown custom-dropdown p-1">
                        <a
                          href="#"
                          class="nav-link dropdown-toggle p-1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Find Bass
                        </a>
                        <ul class="dropdown-menu p-1">
                          <li>
                            <a href="#" class="dropdown-item border p-1"
                              >Welder</a
                            >
                          </li>
                          <li>
                            <a href="#" class="dropdown-item border p-1">QA</a>
                          </li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown custom-dropdown p-1">
                        <a
                          href="#"
                          class="nav-link dropdown-toggle p-1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Price Check
                        </a>
                      </li>
                      <li class="nav-item dropdown custom-dropdown p-1">
                        <a
                          href="#"
                          class="nav-link dropdown-toggle p-1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Free Quater
                        </a>
                      </li>
                      <li class="nav-item dropdown custom-dropdown p-1">
                        <a
                          href="#"
                          class="nav-link dropdown-toggle p-1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Register With Builders.lk
                        </a>
                        <ul class="dropdown-menu p-1 border">
                          <li>
                            <a
                              href="{{route('serviceprovider')}}"
                              class="dropdown-item p-1 border"
                              >Service Providers</a
                            >
                          </li>
                          <li>
                            <a href="#" class="dropdown-item p-1 border"
                              >Professionals</a
                            >
                          </li>
                          <li>
                            <a href="#" class="dropdown-item p-1 border"
                              >Bass</a
                            >
                          </li>
                          <li>
                            <a href="#" class="dropdown-item p-1 border"
                              >Shops</a
                            >
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

              <!-- Third Row: Search Bar and Dropdowns -->
              <div id="header">
                <div class="container-fluid p-1">
                  <div class="d-flex">
                    <!-- First Dropdown -->
                    <div class="  mb-2 mb-md-0 p-1">
                      <div class="subnav">
                        <button class="subnavbtn">
                          Service By Category <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="subnav-content">
                          <div class="col-6 col-md-4">
                            <a href="#">ARCHITECTURS</a>
                            <a href="#">BUILDING CONTRACTORS</a>
                            <a href="#">INTERIOR DESIGNERS</a>
                            <a href="#">SRUCTURAL ENGINEERS</a>
                            <a href="#">QUANTITY SEAVER</a>
                            <a href="#">MEP CONSULTANT</a>
                            <a href="#">FIRE CONSULTANT</a>
                          </div>
                          <div class="col-6 col-md-4">
                            <a href="#">ALUMINIUM FABRICATIORS</a>
                            <a href="#">ELECTRITIONS</a>
                            <a href="#">PLUMBERS</a>
                            <a href="#">STEEL FABRICATORS</a>
                            <a href="#">STAINLESS STEEL FABRICATORS</a>
                            <a href="#">TIMBER CONTRACTOR</a>
                          </div>
                          <div class="col-6 col-md-4">
                            <a href="#">MESENS</a>
                            <a href="#">TILING TECHNETION</a>
                            <a href="#">LANSCAPING</a>
                            <a href="#">WATER FROOFING</a>
                            <a href="#">MAINTENANCE</a>
                            <a href="#">PAINTERS</a>
                          </div>
                          <div class="col-6 col-md-4">
                            <a href="#">AC CONTRACTORS</a>
                            <a href="#">ELIVETORS</a>
                            <a href="#">SWIMMING POOL CONTRACTOR</a>
                            <a href="#">SOLAR POWER</a>
                            <a href="#">OTHERS</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Search Bar -->
                    <div
                      class=" mb-2 mb-md-0 d-flex justify-content-center justify-content-md-end"
                    >
                      <div class="input-group w-100 w-md-75">
                        <input
                          type="search"
                          class="form-control form-control-md"
                          placeholder="Search here"
                          aria-label="Search here"
                        />
                        <button
                          class="btn btn-medium btn-dark btn-search"
                          type="button"
                        >
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </div>
                    <!-- Second Dropdown -->
                    <div class="col-12 col-md-2 mb-2 mb-md-0">
                      <div class="subnav">
                        <button class="subnavbtn">
                          Shop By Category <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="subnav-content">
                          <div class="row">
                            <div class="col-6 col-md-4">
                              <a href="#">HARDWARE SHOP</a>
                              <a href="#">ELECTRICAL SHOP</a>
                              <a href="#">PAINT HOUSE</a>
                              <a href="#">STEEL SHOP</a>
                              <a href="#">ALUMINIUM SHOP</a>
                              <a href="#">TILE AND BATHWARE</a>
                              <a href="#">CARPET SHOP</a>
                            </div>
                            <div class="col-6 col-md-4">
                              <a href="#">PICTURE PALACE</a>
                              <a href="#">CEILING SHOWROOM</a>
                              <a href="#">TIMBER HOUSE</a>
                              <a href="#">TOOL SHOP</a>
                              <a href="#">STAINLESS STEEL SHOP</a>
                            </div>
                            <div class="col-6 col-md-4">
                              <a href="#">NUT AND BOLT SHOP</a>
                              <a href="#">CONSTRUCTION CHEMICALS</a>
                              <a href="#">GRANITE AND MARBLES</a>
                              <a href="#">CONCREATE WORKS</a>
                              <a href="#">ROOFING</a>
                              <a href="#">BRICKS AND BLOCKS</a>
                              <a href="#">METAL SUPLLYER</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Third Dropdown -->
                    <div class="col-12 col-md-2 mb-2 mb-md-0">
                      <div class="subnav">
                        <button class="subnavbtn">
                          Product By Category <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="subnav-content">
                          <div class="row">
                            <div class="col-6 col-md-4">
                              <a href="#">ALUMINIUM EXCRUTIONS & ACCESSORIES</a>
                              <a href="#">CEILINGS</a>
                              <a href="#">DOOR LOCKS & BRASS ITEMS</a>
                              <a href="#">LIGHTS & ELECTRICAL</a>
                              <a href="#">TILE & BATH WARE ACCOSERIES</a>
                              <a href="#">ROOFING</a>
                            </div>
                            <div class="col-6 col-md-4">
                              <a href="#">TIMBR</a>
                              <a href="#">PLUMBING MATERIAL</a>
                              <a href="#">STEEL</a>
                              <a href="#">SAND</a>
                              <a href="#">METAL</a>
                              <a href="#">GRANITE & MARBLES</a>
                              <a href="#">HARDWARE ITEMS</a>
                            </div>
                            <div class="col-6 col-md-4">
                              <a href="#">TOOLS</a>
                              <a href="#">PAINTS AND ANSILARIES</a>
                              <a href="#">NUT AND BOLTS</a>
                              <a href="#">BRICKS & BLOCKS</a>
                              <a href="#">CARPET & FLOORING</a>
                              <a href="#">CONSTRUCTION CHEMICALS</a>
                              <a href="#">SATAINLESS STEEL</a>
                              <a href="#">CONCREATE PRODUCTS</a>
                              <a href="#">GLASS</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Fourth Dropdown -->
                    <div class="col-12 col-md-2 mb-2 ">
                      <div class="subnav">
                        <button class="subnavbtn">
                          Purchase With Builders.lk
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="subnav-content">
                          <a href="#">As a Service Provider</a>
                          <a href="#">As a Professional</a>
                          <a href="#">As a Shop</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </header>

    <!-- /MAIN HEADER -->
{{-- content --}}
@yield('content')
    <!-- FOOTER -->

    <!-- Footer -->
    <footer style="background: #15161d" class="text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <h3 class="footer-title">About Us</h3>
        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            distinctio earum repellat quaerat voluptatibus placeat nam, commodi
            optio pariatur est quia magnam eum harum corrupti dicta, aliquam
            sequi voluptate quas.
          </p>
        </section>
        <!-- Section: Text -->

        <!-- Section: Links -->
        <section>
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase footer-title">Links</h5>

              <ul class="footer-links">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>

              <ul class="footer-links">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>

              <ul class="footer-links">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Information</h5>

              <ul class="footer-links">
                <li>
                  <a href="#!">About Us</a>
                </li>
                <li>
                  <a href="#!">Contact Us</a>
                </li>
                <li>
                  <a href="#!">Privacy Policy</a>
                </li>
                <li>
                  <a href="#!">Orders and Returns</a>
                </li>
                <li>
                  <a href="#!">Terms & Conditions</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->

      <div id="bottom-footer" class="section">
        <!-- Copyright -->
        <span class="copyright text-center">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          All rights reserved | Bilders.lk made with
          <i class="fa fa-heart-o" aria-hidden="true"></i> by
          <a href="https://colorlib.com" target="_blank">AAIC</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </span>
        <!-- Copyright -->
      </div>
    </footer>

    <!-- Footer -->
    <!-- FOOTER -->
    {{-- <footer id="footer">
      <!-- top footer -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">About Us</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut.
                </p>
                <ul class="footer-links">
                  <li>
                    <a href="#"
                      ><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a
                    >
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-envelope-o"></i>email@email.com</a
                    >
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Categories</h3>
                <ul class="footer-links">
                  <li><a href="#">Hot deals</a></li>
                  <li><a href="#">Laptops</a></li>
                  <li><a href="#">Smartphones</a></li>
                  <li><a href="#">Cameras</a></li>
                  <li><a href="#">Accessories</a></li>
                </ul>
              </div>
            </div>

            <div class="clearfix visible-xs"></div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Information</h3>
                <ul class="footer-links">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Orders and Returns</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Service</h3>
                <ul class="footer-links">
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">View Cart</a></li>
                  <li><a href="#">Wishlist</a></li>
                  <li><a href="#">Track My Order</a></li>
                  <li><a href="#">Help</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /top footer -->

      <!-- bottom footer -->
    </footer> --}}

    <!-- /FOOTER -->


<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
{{-- <script src="jquery.min.js"></script> --}}
{{-- <script src="{{ asset('assets/webpage/lib/owlcarousel/owl.carousel.min.js') }}"></script> --}}
<!-- jQuery Plugins -->
{{-- <script src="{{ asset('assets/webpage/js/jquery.min.js') }}"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script src="{{ asset('assets/webpage/js/bootstrap.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/webpage/js/slick.min.js') }}"></script> --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

<script src="{{ asset('assets/webpage/js/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/webpage/js/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('assets/webpage/js/main.js') }}"></script>

<!-- jQuery (Required by Owl Carousel) -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>
      // JavaScript to handle dropdown functionality
      document.querySelectorAll(".subnavbtn").forEach(function (button) {
        button.addEventListener("mouseenter", function () {
          const subnavContent = this.nextElementSibling;
          subnavContent.style.display = "flex"; // Show on hover
        });

        button.addEventListener("mouseleave", function () {
          const subnavContent = this.nextElementSibling;
          if (!subnavContent.classList.contains("active")) {
            subnavContent.style.display = "none"; // Hide on mouse leave if not active
          }
        });

        button.addEventListener("click", function (e) {
          const subnavContent = this.nextElementSibling;
          const isActive = subnavContent.classList.contains("active");

          // Close all dropdowns
          closeAllDropdowns();

          if (!isActive) {
            subnavContent.style.display = "flex";
            subnavContent.classList.add("active"); // Mark as active
          } else {
            subnavContent.style.display = "none";
            subnavContent.classList.remove("active"); // Remove active status
          }

          e.stopPropagation(); // Prevent closing on click
        });
      });

      // Function to close all dropdowns
      function closeAllDropdowns() {
        document
          .querySelectorAll(".subnav-content")
          .forEach(function (dropdown) {
            dropdown.style.display = "none";
            dropdown.classList.remove("active"); // Remove active status
          });
      }

      // Close dropdown if clicked outside
      document.addEventListener("click", function () {
        closeAllDropdowns();
      });
    </script>
    <script>
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          items: 8,
          loop: true,
          autoplay: true,
          autoplayTimeout: 3000,
          autoplayHoverPause: true,
          nav: true,
          dots: true,
          rtl: true, // change direction of the flow
        });
      });
    </script>
  </body>
</html>
