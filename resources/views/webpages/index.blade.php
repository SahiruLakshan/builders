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
    {{-- <link href="{{ asset('assets/webpage/css/about.css') }}" rel="stylesheet" /> --}}

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
  .phone-button {
    background-color: #ffc107; /* Bootstrap warning yellow */
    color: white;
    transition: background-color 0.3s ease; /* Smooth color transition */
}

.phone-button:focus, .phone-button:active {
    background-color: #002b49; /* Color change on click */
    color: white; /* Ensures text remains white */
    outline: none; /* Removes outline for cleaner look */
}

</style>

  </head>

  <body class="overflow-x-hidden">
    {{-- <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Builders.lk</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Re
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                My Account
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>


    </div> --}}
    <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Builders.lk</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="accordion" id="accordionExample">
          <!-- First Accordion Item: Contact Info -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Contact Information
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <a href="tel:0112748149"><i class="fa fa-phone"></i> Tel: 011 274 81 49</a><br>
                <a href="mailto:info@builders.lk"><i class="fa fa-envelope"></i> info@builders.lk</a>
              </div>
            </div>
          </div>

          <!-- Second Accordion Item: My Account -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                My Account
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                @guest
                <a href="{{route('login')}}" class="btn btn-primary border">Login</a>
                <a href="{{route('register')}}" class="btn btn-primary">Sign up</a>
                <a href="#" class="btn btn-primary">Shop Login</a>
                @endguest
                @auth
                <a href="{{route('dashboard')}}" class="btn btn-primary">Dashboard</a>
                <form action="{{route('logout')}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-primary">Logout</button>
                </form>
                @endauth

              </div>
            </div>
          </div>

          <!-- Third Accordion Item: Navigation Links -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Navigation Links
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <a href="{{ url('/') }}">Home</a><br>
                <a href="{{ url('/aboutus') }}">About Us</a><br>
                <a href="gallery.html">Gallery</a><br>
                <a href="publications.html">Publications</a><br>
                <a href="certifications.html">Certifications</a><br>
                <a href="career.html">Career</a><br>
                <a href="education.html">Education</a>
              </div>
            </div>
          </div>

          <!-- Additional Accordion Items as Needed -->
          <!-- You can add more accordion items similar to above if you have other dropdown sections -->
        </div>
      </div>
    </div>

    <!-- HEADER -->
    <header class="nav navbar-expand-lg fixed-top">
        <div class="row justify-content-between justify-content-lg-start align-items-center align-items-lg-start">
            <!-- Logo Section -->
            <div
              class="col-2 d-flex align-items-center justify-content-center h-100 "
              style="background-color: rgb(224, 156, 54">
              <a href="{{ url('/') }}">
                <img
                  src="{{ asset('assets/webpage/img/LOGO-01.png') }}"
                  alt="Description of Image"
                  class="img-fluid"
                />
              </a>
            </div>
            <div class="d-block d-lg-none w-auto" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
              <i class="fa-solid fa-bars fs-2 px-4"></i>
            </div>

            <!-- Main Content Section -->
            <div class="col-md-10 px-0 d-none d-lg-block" >
              <!-- First Row: Top Header (Contact Info & Links) -->
              <div id="top-header">
                <div class="container-fluid">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex">
                      <ul class="header-links float-left">
                        <li>
                          <a href="tel:0112748149"
                            ><i class="fa fa-phone"></i> Tel: 011 274 81 49</a
                          >
                        </li>
                        <li>
                          <a href="mailto:info@builders.lk">
                            <i class="fa fa-envelope"></i>
                            info@builders.lk
                          </a>
                        </li>
                        {{-- <li>
                          <a
                            href="https://www.google.com/maps/search/?api=1&query=No541D,Galawilawaththa,Homagama"
                            target="_blank"
                          >
                            <i class="fa fa-map-marker"></i> No541D,
                            Galawilawaththa, Homagama
                          </a>
                        </li> --}}
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Publications</a></li>
                        <li>
                          <a href="#">Certifications</a>
                        </li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Education</a></li>
                      </ul>
                    </div>
                    <div class="d-flex">

                          <div class="dropdown px-2">
                            <button class="btn btn-sm btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                My Account
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            @guest()
                                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                                <li><a class="dropdown-item" href="{{route('register')}}">Sign up</a></li>
                                <li><a class="dropdown-item" href="#">Shop Login</a></li>
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
                style="background-color: #002b49"
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
                          Free Quoter
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
                              href="serviceproviderform"
                              class="dropdown-item p-1 border"
                              >Service Providers</a
                            >
                          </li>
                          <li>
                            <a href="/professionalsform" class="dropdown-item p-1 border"
                              >Professionals</a
                            >
                          </li>
                          <li>
                            <a href="#" class="dropdown-item p-1 border"
                              >Bass</a
                            >
                          </li>
                          <li>
                            <a href="shopSuppliers" class="dropdown-item p-1 border"
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
                  <div class="d-flex justify-content-around">
                    <!-- First Dropdown -->
                    <div class="  mb-2 mb-md-0 p-0">

                      <div class="subnav">
                        <button class="subnavbtn fs-6 ">
                            Shop By Category <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="subnav-content" style="height:40vh">
                            <div class="d-flex flex-wrap">
                                @foreach($shopcats as $shopcat)
                                    <div class="col-6 col-md-4 mb-0">
                                        <a href="{{route('category.shop', $shopcat->name)}}">{{ $shopcat->name }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Third Dropdown -->
                    <div class="col-md-2 mb-2 mb-md-0 p-0">
                      <div class="subnav">
                        <button class="subnavbtn fs-6 ">
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

                    <!-- Search Bar -->
                    <div class="col-12 col-md-4 mb-2 mb-md-0">
                      <form action="{{ route('search') }}" method="GET" class="input-group input-group-sm w-80">
                        <input
                          type="search"
                          name="query"
                          class="form-control"
                          placeholder="Search here"
                          aria-label="Search here"
                        />
                        <button class="btn btn-dark btn-search" type="submit">
                          <i class="fa fa-search"></i>
                        </button>
                      </form>
                    </div>



                    <!-- Second Dropdown -->
                    <div class="  mb-2 mb-md-0 p-0">

                        <div class="subnav">
                          <button class="subnavbtn fs-6 ">
                              Shop By serviceProviders <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="subnav-content" style="height:40vh">
                              <div class="d-flex flex-wrap">
                                  @foreach($services as $service)
                                      <div class="col-6 col-md-4 mb-0">
                                        <a href="{{route('category.service', $service->servicename)}}">{{ $service->servicename }}</a>
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                      </div>

                    <!-- Fourth Dropdown -->
                    <div class=" col-md-2 mb-2  p-0">
                      <div class="subnav">
                        <button class="subnavbtn fs-6 ">
                            Purchase With Builders.lk <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="subnav-content">
                            <div class="col-6 col-md-4">
                                <a href="#">As a Service Provider</a>
                            </div>
                            <div class="col-6 col-md-4">
                                <a href="#">As a Company</a>
                            </div>
                            <div class="col-6 col-md-4">
                                <a href="#">As Brand</a>
                            </div>
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
    <body>
      @yield('content')

    </body>
{{-- content --}}

    <!-- FOOTER -->

    <!-- Footer -->
    <footer style="background: #15161d" class="text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <h3 class="footer-title">About Us</h3>
        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            A.A.I.C. Business Solutions (Pvt) Ltd provides accounting, marketing, IT, and business consulting services in Sri Lanka. Recognizing the need for a digital platform in the construction industry, the company developed BUILDERS.LK to create an integrated market.
          </p>
        </section>

        <!-- Section: Links -->
        <section>
          <div class="row">
            <!-- Customer Service -->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase footer-title">Customer Service</h5>
              <ul class="footer-links">
                <li><a href="#!">My Account</a></li>
                <li><a href="#!">Track Order</a></li>
                {{-- <li><a href="#!">FAQs</a></li> --}}
                <li><a href="#!">Shipping Info</a></li>
                <li><a href="#!">Return & Refund Policy</a></li>
              </ul>
            </div>

            <!-- Company Info -->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase footer-title">Company Info</h5>
              <ul class="footer-links">
                <li><a href="#!">About Us</a></li>
                <li><a href="#!">Careers</a></li>
                <li><a href="#!">Sustainability Efforts</a></li>
                {{-- <li><a href="#!">Blog</a></li> --}}
                <li><a href="#!">Media Resources</a></li>
              </ul>
            </div>

            <!-- Policies -->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase footer-title">Policies</h5>
              <ul class="footer-links">
                <li><a href="#!">Privacy Policy</a></li>
                <li><a href="#!">Terms of Use</a></li>
                <li><a href="#!">Cookie Policy</a></li>
                <li><a href="#!">Data Protection</a></li>
              </ul>
            </div>

            <!-- Contact & Social Media -->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase footer-title">Contact & Follow Us</h5>
              <p>Email: info@builders.lk</p>
              <p>Phone: +94 11 274 81 49</p>
              <div>
                <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </section>

        <!-- Payment Methods -->
        <div class="row mt-4">
          <div class="col text-center">
            <h5 class="text-uppercase footer-title">We Accept</h5>
            <img src="path-to-your-visa-icon" alt="Visa" width="40">
            <img src="path-to-your-mastercard-icon" alt="MasterCard" width="40">
            <img src="path-to-your-paypal-icon" alt="PayPal" width="40">
          </div>
        </div>
      </div>

      <!-- Bottom Footer -->
      <div id="bottom-footer" class="section text-center mt-4">
        <span class="copyright">
          &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | BUILDERS.LK by
          <a href="https://newtecgroup.lk" target="_blank" class="text-white">AAIC</a>
        </span>
      </div>
    </footer>




<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
{{-- <script src="jquery.min.js"></script> --}}
{{-- <script src="{{ asset('assets/webpage/lib/owlcarousel/owl.carousel.min.js') }}"></script> --}}
<!-- jQuery Plugins -->
{{-- <script src="{{ asset('assets/webpage/js/jquery.min.js') }}"></script> --}}
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script>
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
    </script> --}}
    <script>
      // JavaScript to handle dropdown functionality
      document.querySelectorAll(".subnavbtn").forEach(function (button) {
        const subnavContent = button.nextElementSibling;

        // Show dropdown when hovering over the button
        button.addEventListener("mouseenter", function () {
          subnavContent.style.display = "flex"; // Show the dropdown
        });

        // Hide dropdown when leaving the button, unless cursor is over the dropdown content
        button.addEventListener("mouseleave", function () {
          setTimeout(function () {
            if (!subnavContent.matches(':hover')) {
              subnavContent.style.display = "none"; // Hide if not hovered over
            }
          }, 200); // Slight delay to allow smooth transition
        });

        // Ensure dropdown stays visible if the user hovers over the dropdown content itself
        subnavContent.addEventListener("mouseenter", function () {
          subnavContent.style.display = "flex"; // Keep dropdown visible
        });

        // Hide dropdown when the cursor leaves the dropdown content
        subnavContent.addEventListener("mouseleave", function () {
          setTimeout(function () {
            subnavContent.style.display = "none"; // Hide dropdown when cursor leaves
          }, 200); // Slight delay for smooth interaction
        });
      });

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
          responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:8
        }
    }
        });
      });
    </script>
  </body>
</html>
