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

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- FontAwesome Icons for phone, map, etc. -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap 5 CSS -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1jFkwKw5yXgLsjI"
      crossorigin="anonymous"
    />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Owl Carousel CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />
    <style>
      /* Common Dropdown Button Styles */
      .common-dropdown-btn {
        font-size: 14px; /* Adjust this value as needed */
      }

      /* Common Dropdown Menu Items */
      .common-dropdown-menu .dropdown-item {
        font-size: 15px; /* Adjust this value as needed */
      }
    </style>
  </head>

  <body>
    <!-- HEADER -->

    <!-- HEADER -->
    <header>
      <div class="fixed-top">
        <div class="container-fluid">
          <div class="row">
            <!-- Logo Section -->
            <div
              class="col-2 d-flex align-items-center justify-content-center"
              style="background-color: blanchedalmond"
            >
              <img
                src="./img/logo.png"
                alt="Description of Image"
                class="img-fluid"
              />
            </div>

            <!-- Main Content Section -->
            <div class="col-md-10">
              <!-- First Row: Top Header (Contact Info & Links) -->
              <div id="top-header">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-9 d-flex justify-content-end">
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
                    <div class="col-md-3 d-flex justify-content-end">
                      <div class="dropdown">
                        <button
                          class="btn btn-warning dropdown-toggle"
                          type="button"
                          data-toggle="dropdown"
                        >
                          My Account
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="login.html">Login</a></li>
                          <li><a href="signup.html">Sign up</a></li>
                          <li><a href="shopprofile.html">Shop Profile</a></li>
                        </ul>
                      </div>
                      <!-- <div class="dropdown">
                        <button
                          class="btn btn-warning dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          My Account
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton1"
                        >
                          <li>
                            <a class="dropdown-item" href="login.html">Login</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="signup.html"
                              >Sign up</a
                            >
                          </li>
                        </ul>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>

              <!-- Second Row: Navigation Bar -->
              <nav
                id="navigation"
                class="navbar navbar-expand-lg navbar-light bg-light"
              >
                <div class="container-fluid">
                  <!-- Hamburger Toggler Button -->
                  <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item dropdown custom-dropdown">
                        <a
                          href="#"
                          class="nav-link dropdown-toggle"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Find Bass
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="#" class="dropdown-item border">Welder</a>
                          </li>
                          <li>
                            <a href="#" class="dropdown-item border">QA</a>
                          </li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown custom-dropdown">
                        <a
                          href="#"
                          class="nav-link dropdown-toggle"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Price Check
                        </a>
                      </li>
                      <li class="nav-item dropdown custom-dropdown">
                        <a
                          href="#"
                          class="nav-link dropdown-toggle"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Free Quater
                        </a>
                      </li>
                      <li class="nav-item dropdown custom-dropdown">
                        <a
                          href="#"
                          class="nav-link dropdown-toggle"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Register With Builders.lk
                        </a>
                        <ul class="dropdown-menu border">
                          <li>
                            <a href="#" class="dropdown-item border"
                              >Service Providers</a
                            >
                          </li>
                          <li>
                            <a href="#" class="dropdown-item border"
                              >Professionals</a
                            >
                          </li>
                          <li>
                            <a href="#" class="dropdown-item border">Bass</a>
                          </li>
                          <li>
                            <a href="#" class="dropdown-item border">Shops</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

              <!-- Third Row: Search Bar and Dropdowns -->
              <div id="header">
                <div class="container-fluid">
                  <div class="row">
                    <!-- First Dropdown -->
                    <div class="col-12 col-md-2 mb-2 mb-md-0">
                      <div class="navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                            <button
                              class="btn dropdown-toggle common-dropdown-btn"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              Service By Category
                            </button>
                            <ul class="dropdown-menu common-dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#"
                                  >Laptop Deals</a
                                >
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"
                                  >Smartphone Deals</a
                                >
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"
                                  >Camera Deals</a
                                >
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- Search Bar -->
                    <div
                      class="col-12 col-md-4 mb-2 mb-md-0 d-flex justify-content-center justify-content-md-end"
                    >
                      <div class="input-group w-100 w-md-75">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search here"
                        />
                        <button
                          class="btn btn-medium btn-dark btn-search"
                          type="button"
                        >
                          Search
                        </button>
                      </div>
                    </div>
                    <!-- Other Dropdowns -->
                    <div class="col-12 col-md-2 mb-2 mb-md-0">
                      <div class="navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                            <button
                              class="btn dropdown-toggle common-dropdown-btn"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              Shop By Category
                            </button>
                            <ul class="dropdown-menu common-dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"
                                  >Another action</a
                                >
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"
                                  >Something else here</a
                                >
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <!-- Additional Dropdowns -->
                    <div class="col-12 col-md-2 mb-2 mb-md-0">
                      <!-- <div class="navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                            <button
                              class="btn dropdown-toggle common-dropdown-btn"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              Dropdown 3
                            </button>
                            <ul class="dropdown-menu common-dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"
                                  >Another action</a
                                >
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"
                                  >Something else here</a
                                >
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div> -->
                    </div>

                    <div class="col-12 col-md-2 mb-2 mb-md-0">
                      <div class="navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                            <button
                              class="btn dropdown-toggle common-dropdown-btn"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              Purchase With Builders.lk
                            </button>
                            <ul class="dropdown-menu common-dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Action</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"
                                  >Another action</a
                                >
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"
                                  >Something else here</a
                                >
                              </li>
                            </ul>
                          </li>
                        </ul>
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

    <!--  Main carousels start here -->

    <div class="container mt-2" style="padding-top: 132px">
      <div class="row">
        <!-- Left Vertical Slider -->
        <div class="col-md-3">
          <div
            id="leftHorizontalCarousel"
            class="carousel slide"
            data-bs-ride="carousel"
            data-bs-interval="3000"
            data-bs-direction="left"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="./img/product01.png"
                  class="d-block w-100"
                  alt="Left Slide 1"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./img/product02.png"
                  class="d-block w-100"
                  alt="Left Slide 2"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./img/product03.png"
                  class="d-block w-100"
                  alt="Left Slide 3"
                />
              </div>
            </div>
            <!-- Carousel Controls for Left -->
          </div>
        </div>
        <!-- Middle Product Carousel -->
        <div class="col-md-6">
          <div
            id="carouselExampleCaptions"
            class="products-tabs carousel slide"
            data-bs-ride="carousel"
            data-bs-interval="3000"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="./img/product01.png"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./img/product02.png"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./img/product03.png"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
            </div>
          </div>
        </div>
        <!-- Right Carousel -->
        <div class="col-md-3">
          <div
            id="rightHorizontalCarousel"
            class="carousel slide"
            data-bs-ride="carousel"
            data-bs-interval="3000"
            data-bs-direction="right"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="./img/product06.png"
                  class="d-block w-100"
                  alt="Right Slide 1"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./img/product05.png"
                  class="d-block w-100"
                  alt="Right Slide 2"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./img/product04.png"
                  class="d-block w-100"
                  alt="Right Slide 3"
                />
              </div>
            </div>
            <!-- Carousel Controls for Right -->
          </div>
        </div>
      </div>
    </div>

    <!--   Main carousels end -->

    <div class="container-fluid">
      <!-- row -->
      <div class="row brandsproduct">
        <div class="container mt-4">
          <div class="row">
            <h3>Brands</h3>
          </div>
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="card">
                <img src="./img/product08.png" class="card-img-top" alt="..." />
              </div>
            </div>
            <div class="item">
              <div class="card">
                <img src="./img/product09.png" class="card-img-top" alt="..." />
              </div>
            </div>
            <div class="item">
              <div class="card">
                <img src="./img/product01.png" class="card-img-top" alt="..." />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row brandsproduct">
        <div class="container-fluid mt-4">
          <div class="row">
            <h3>Service Providers</h3>
          </div>
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="card">
                <img src="./img/product08.png" class="card-img-top" alt="..." />
              </div>
            </div>
            <div class="item">
              <div class="card">
                <img src="./img/product09.png" class="card-img-top" alt="..." />
              </div>
            </div>
            <div class="item">
              <div class="card">
                <img src="./img/product01.png" class="card-img-top" alt="..." />
              </div>
            </div>
            <!-- Add more items as needed -->
          </div>
        </div>
      </div>
    </div>

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <h4>Collections</h4>
          <hr style="border-color: black; border-width: 1px" />
          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/mechanic.jpeg" alt="" />
              </div>
              <div class="shop-body">
                <h3>Paint<br />Collection</h3>
                <a href="#" class="cta-btn"
                  >Shop now <i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/mechanic.jpeg" alt="" />
              </div>
              <div class="shop-body">
                <h3>
                  Gardening Accessories<br />
                  Collection
                </h3>
                <a href="#" class="cta-btn"
                  >Shop now <i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/mechanic.jpeg" alt="" />
              </div>
              <div class="shop-body">
                <h3>Macanic Tools<br />Collection</h3>
                <a href="#" class="cta-btn"
                  >Shop now <i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- section title -->
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title">New Products</h3>
              <div class="section-nav">
                <ul class="section-tab-nav tab-nav">
                  <li class="active">
                    <a data-toggle="tab" href="#tab1">Paint</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#tab1">Electronic Items</a>
                  </li>
                  <li><a data-toggle="tab" href="#tab1">Brands</a></li>
                  <li>
                    <a data-toggle="tab" href="#tab1">Kechicken Accessories</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /section title -->
          <!-- carosuel -->

          <!-- Products tab & slick -->
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">
                <!-- tab -->
                <div id="tab1" class="tab-pane active">
                  <div class="products-slick" data-nav="#slick-nav-1">
                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product01.png" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product02.png" alt="" />
                        <div class="product-label">
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product03.png" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating"></div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product04.png" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product05.png" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->
                  </div>
                  <div id="slick-nav-1" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
              </div>
            </div>
          </div>
          <!-- Products tab & slick -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <div class="hot-deal">
              <ul class="hot-deal-countdown">
                <li>
                  <div>
                    <h3>02</h3>
                    <span>Days</span>
                  </div>
                </li>
                <li>
                  <div>
                    <h3>10</h3>
                    <span>Hours</span>
                  </div>
                </li>
                <li>
                  <div>
                    <h3>34</h3>
                    <span>Mins</span>
                  </div>
                </li>
                <li>
                  <div>
                    <h3>60</h3>
                    <span>Secs</span>
                  </div>
                </li>
              </ul>
              <h2 class="text-uppercase">hot deal this week</h2>
              <p>New Collection Up to 50% OFF</p>
              <a class="primary-btn cta-btn" href="#">Shop now</a>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /HOT DEAL SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- section title -->
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title"></h3>
              <div class="section-nav">
                <ul class="section-tab-nav tab-nav">
                  <li class="active">
                    <a data-toggle="tab" href="#tab2">Cement</a>
                  </li>
                  <li><a data-toggle="tab" href="#tab2">Paint Item</a></li>
                  <li><a data-toggle="tab" href="#tab2">-----</a></li>
                  <li><a data-toggle="tab" href="#tab2">Gradaning Tools</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /section title -->

          <!-- Products tab & slick -->
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">
                <!-- tab -->
                <div id="tab2" class="tab-pane fade in active">
                  <div class="products-slick" data-nav="#slick-nav-2">
                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product06.png" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product07.png" alt="" />
                        <div class="product-label">
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product08.png" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating"></div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product09.png" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product01.png" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->
                  </div>
                  <div id="slick-nav-2" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
              </div>
            </div>
          </div>
          <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-3" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-3">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product07.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product08.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product09.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product01.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product02.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product03.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-4" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-4">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product04.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product05.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product06.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product07.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product08.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product09.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-5" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-5">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product01.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product02.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product03.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product04.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product05.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product06.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <div class="newsletter">
              <p>Sign Up for the <strong>NEWSLETTER</strong></p>
              <form>
                <input
                  class="input"
                  type="email"
                  placeholder="Enter Your Email"
                />
                <button class="newsletter-btn">
                  <i class="fa fa-envelope"></i> Subscribe
                </button>
              </form>
              <ul class="newsletter-follow">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <footer id="footer">
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
      <div id="bottom-footer" class="section">
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12 text-center">
              <ul class="footer-payments">
                <li>
                  <a href="#"><i class="fa fa-cc-visa"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-credit-card"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-cc-paypal"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-cc-mastercard"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-cc-discover"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-cc-amex"></i></a>
                </li>
              </ul>
              <span class="copyright">
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
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
    <!-- jQuery (Required by Owl Carousel) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap 5 JS with Popper.js -->
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"
      integrity="sha384-mQ93B3X6K8/qg3FQ4puhG8txscyK8i6uN0VRVSlA+VVFZn7qFXi1QI0KMPZSu0gF"
      crossorigin="anonymous"
    ></script>
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
