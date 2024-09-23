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
    <!-- <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1jFkwKw5yXgLsjI"
      crossorigin="anonymous"
    /> -->

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
    <header>
      <div class="fixed-top">
        <div class="container-fluid">
          <div class="row">
            <!-- Logo Section -->
            <div
              class="col-2 d-flex align-items-center justify-content-center"
              style="background-color: blanchedalmond"
            >
              <a href="index.html">
                <img
                  src="./img/LOGO-01.png"
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
                    </div>
                  </div>
                </div>
              </div>

              <!-- Second Row: Navigation Bar -->
              <nav
                id="navigation"
                class="navbar navbar-expand"
                style="background-color: #e3f2fd"
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
                      <div class="subnav">
                        <button class="subnavbtn">
                          Service By Category <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="subnav-content">
                          <a href="#">Laptop Deals</a>
                          <a href="#">Smartphone Deals</a>
                          <a href="#">Camera Deals</a>
                        </div>
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
                    <!-- Second Dropdown -->
                    <div class="col-12 col-md-2 mb-2 mb-md-0">
                      <div class="subnav">
                        <button class="subnavbtn">
                          Shop By Category <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="subnav-content">
                          <a href="#">Action</a>
                          <a href="#">Another action</a>
                          <a href="#">Something else here</a>
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
                          <a href="product.html">Product</a>
                          <a href="#">Another action</a>
                        </div>
                      </div>
                    </div>
                    <!-- Fourth Dropdown -->
                    <div class="col-12 col-md-2 mb-2 mb-md-0">
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
        </div>
      </div>
    </header>

    <!-- /MAIN HEADER -->
    <div class="container-fluid" style="padding-top: 145px">
      <div class="row">
        <h3>Select Your Products</h3>
        <aside class="col-md-3 px-0">
          <div class="card">
            <!-- Product Type Filter -->
            <article class="filter-group">
              <!-- Search Bar with Dropdown -->
              <div class="container">
                <div class="row">
                  <form class="col-md-4">
                    <label>Select</label>
                    <select class="form-control select2">
                      <option>Select</option>
                      <option>Car</option>
                      <option>Bike</option>
                      <option>Scooter</option>
                      <option>Cycle</option>
                      <option>Horse</option>
                    </select>
                  </form>
                </div>
              </div>
              <script>
                $(".select2").select2();
              </script>
              <!-- <header class="card-header">
  
            <a
              href="#"
              data-bs-toggle="collapse"
              data-bs-target="#collapse_1"
              aria-expanded="true"
            >
              <i class="icon-control fa fa-chevron-down"></i>
              <h6 class="title">Product type</h6>
            </a>
          </header> -->
              <!-- <div class="filter-content collapse show" id="collapse_1">
  
            <div class="card-body">
              <form class="pb-3">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" />
                  <button class="btn btn-light" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
              <ul class="list-menu">
                <li><a href="#">Paint</a></li>
                <li><a href="#">Cement</a></li>
                <li><a href="#">-----</a></li>
                <li><a href="#">Electronic</a></li>
                <li><a href="#">Home Accessories</a></li>
                <li><a href="#">Mechanic Tools</a></li>
                <li><a href="#">-----</a></li>
              </ul>
            </div>
          </div> -->
            </article>

            <!-- Location Filter -->
            <article class="filter-group">
              <header class="card-header">
                <a
                  href="#"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse_4"
                  aria-expanded="true"
                >
                  <i class="icon-control fa fa-chevron-down"></i>
                  <h6 class="title">Location</h6>
                </a>
              </header>
              <div class="filter-content collapse show" id="collapse_4">
                <div class="card-body">
                  <select class="form-select" id="district">
                    <option value="">Select District</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Gampaha">Gampaha</option>
                    <option value="Kalutara">Kalutara</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Matale">Matale</option>
                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                  </select>
                  <br />
                  <select class="form-select" id="city" disabled>
                    <option value="">Select City</option>
                  </select>
                  <script>
                    document
                      .getElementById("district")
                      .addEventListener("change", function () {
                        const dist = this.value;
                        const cities = {
                          Colombo: [
                            "Colombo",
                            "Boralesgamuwa",
                            "Kaduwela",
                            "Maharagama",
                          ],
                          Gampaha: [
                            "Gampaha",
                            "Negombo",
                            "Ja-Ela",
                            "Katunayake",
                          ],
                          Kalutara: [
                            "Kalutara",
                            "Panadura",
                            "Bandaragama",
                            "Horana",
                          ],
                          Kandy: ["Kandy", "Matale", "Nuwara Eliya", "Gampola"],
                          Matale: [
                            "Matale",
                            "Dambulla",
                            "Kurunegala",
                            "Nawalapitiya",
                          ],
                          "Nuwara Eliya": [
                            "Nuwara Eliya",
                            "Badulla",
                            "Haputale",
                            "Bandarawela",
                          ],
                        };
                        const citySelect = document.getElementById("city");
                        citySelect.innerHTML = "";
                        citySelect.disabled = !dist;
                        if (cities[dist]) {
                          cities[dist].forEach((city) => {
                            const opt = document.createElement("option");
                            opt.value = city;
                            opt.textContent = city;
                            citySelect.appendChild(opt);
                          });
                        }
                      });
                  </script>
                </div>
              </div>
            </article>

            <!-- Brand Filter -->
            <article class="filter-group">
              <header class="card-header">
                <a
                  href="#"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse_2"
                  aria-expanded="true"
                >
                  <i class="icon-control fa fa-chevron-down"></i>
                  <h6 class="title">Brands</h6>
                </a>
              </header>
              <div class="filter-content collapse show" id="collapse_2">
                <div class="card-body">
                  <label class="form-check">
                    <input type="checkbox" class="form-check-input" checked />
                    <span class="form-check-label"
                      >PE+
                      <span class="badge bg-light text-dark float-end"
                        >120</span
                      ></span
                    >
                  </label>
                  <label class="form-check">
                    <input type="checkbox" class="form-check-input" checked />
                    <span class="form-check-label"
                      >Dulux
                      <span class="badge bg-light text-dark float-end"
                        >15</span
                      ></span
                    >
                  </label>
                  <label class="form-check">
                    <input type="checkbox" class="form-check-input" checked />
                    <span class="form-check-label"
                      >Alumex
                      <span class="badge bg-light text-dark float-end"
                        >35</span
                      ></span
                    >
                  </label>
                </div>
              </div>
            </article>

            <!-- Price Range Filter -->
            <article class="filter-group">
              <header class="card-header">
                <a
                  href="#"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse_3"
                  aria-expanded="true"
                >
                  <i class="icon-control fa fa-chevron-down"></i>
                  <h6 class="title">Price range</h6>
                </a>
              </header>
              <div class="filter-content collapse show" id="collapse_3">
                <div class="card-body">
                  <input type="range" class="form-range" min="0" max="100" />
                  <div class="row mt-2">
                    <div class="col-md-6">
                      <label for="min-price">Min</label>
                      <input
                        id="min-price"
                        class="form-control"
                        placeholder="$0"
                        type="number"
                      />
                    </div>
                    <div class="col-md-6 text-end">
                      <label for="max-price">Max</label>
                      <input
                        id="max-price"
                        class="form-control"
                        placeholder="$1,0000"
                        type="number"
                      />
                    </div>
                  </div>
                  <button class="btn btn-warning w-100 mt-2">Apply</button>
                </div>
              </div>
            </article>

            <!-- Additional Filters -->
            <article class="filter-group">
              <header class="card-header">
                <a
                  href="#"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse_5"
                  aria-expanded="false"
                >
                  <i class="icon-control fa fa-chevron-down"></i>
                  <h6 class="title">More filter</h6>
                </a>
              </header>
              <div class="filter-content collapse" id="collapse_5">
                <div class="card-body">
                  <label class="form-check">
                    <input
                      type="radio"
                      name="filter-radio"
                      class="form-check-input"
                      checked
                    />
                    <span class="form-check-label">Any condition</span>
                  </label>
                  <label class="form-check">
                    <input
                      type="radio"
                      name="filter-radio"
                      class="form-check-input"
                    />
                    <span class="form-check-label">Brand new</span>
                  </label>
                </div>
              </div>
            </article>
          </div>
        </aside>
        <div class="col-9">
          <div class="row row-cols-2 g-2 mb-2">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-cols-2 g-2 mb-2">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-warning">Contact Us</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-warning">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-cols-2 g-2 mb-2">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-warning">Contact Us</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-warning">Contact Us</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row row-cols-2 g-2 mb-2">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-warning">Contact Us</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-warning">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-cols-2 g-2 mb-2">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-warning">Contact Us</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-warning">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="newsletter" class="section">
      <!-- container -->
      <!-- <div class="container"> -->
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
            <!-- Section: Social media -->
            <section class="mb-4">
              <!-- Facebook -->
              <a
                class="btn btn-outline-light btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-facebook-f"></i
              ></a>

              <!-- Twitter -->
              <a
                class="btn btn-warning btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-twitter"></i
              ></a>

              <!-- Google -->
              <a
                class="btn btn-warning btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-google"></i
              ></a>

              <!-- Instagram -->
              <a
                class="btn btn-warning btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-instagram"></i
              ></a>

              <!-- Linkedin -->
              <a
                class="btn btn-warning btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-linkedin-in"></i
              ></a>

              <!-- Github -->
              <a
                class="btn btn-warning btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-github"></i
              ></a>
            </section>
            <!-- Section: Social media -->
          </div>
        </div>
      </div>
      <!-- /row -->
      <!-- </div> -->
      <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

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
  </body>
</html>
