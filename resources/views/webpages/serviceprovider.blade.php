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
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- Owl Carousel CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />

    <!-- FontAwesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <!-- Select2 CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
      rel="stylesheet"
    />

    <!-- Custom stylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!-- Slick CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />

    <!-- Slick JS -->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>

    <style>
      /* Common Dropdown Button Styles */
      .common-dropdown-btn {
        font-size: 10px; /* Adjust this value as needed */
      }

      /* Common Dropdown Menu Items */
      .common-dropdown-menu .dropdown-item {
        font-size: 12px; /* Adjust this value as needed */
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
                  <div class="row px-0">
                    <div class="col-md-10 d-flex justify-content-end">
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
                    <div class="col-md-2 d-flex justify-content-end">
                      <!-- <div class="dropdown ">
                        <button
                          class="btn btn-warning common-dropdown-btn dropdown-toggle"
                          type="button"
                          data-toggle="dropdown"
                        >
                          My Account
                        </button>
                        <ul class="dropdown-menu">
                          <li></li>
                          <li></li>
                          <li></li>
                        </ul>
                      </div> -->
                      <!-- Dropdown for My Account -->
                      <div class="dropdown px-0">
                        <button
                          class="btn btn-sm btn-warning dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          My Account
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <li><a href="login.html">Login</a></li>
                          <li>
                            <a href="signup.html">Sign up</a>
                          </li>
                          <li>
                            <a href="shopprofile.html">Shop Profile</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Second Row: Navigation Bar -->
              <nav
                id="navigation"
                class="navbar navbar-expand p-0"
                style="background-color: #f9c805"
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
                            <a href="#" class="dropdown-item p-1 border"
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
                  <div class="row">
                    <!-- First Dropdown -->
                    <div class="col-12 col-md-2 mb-2 mb-md-0 p-1">
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
                          <a href="serviceprovider.html"
                            >As a Service Provider</a
                          >
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
    <div class="container-fluid mt-2" style="padding-top: 145px">
      <div class="text-center">
        <h3 class="display-4 text-primary font-weight-bold">BUILDERS.LK</h3>
        <h4 class="display-6 text-secondary font-weight-bold">
          Constructions Service Provides Registration form
        </h4>
      </div>
      <form class="border mt-2">
        <div class="row">
          <div class="form-group col-md-5">
            <label for="inputPassword4">Name</label>
            <input
              type="text"
              class="form-control"
              id="s_name"
              placeholder="Name Of The Service Provider"
            />
          </div>
          <div class="col-5">
            <label for="maxProjectValue">Grade </label>
            <input
              type="text"
              class="form-control"
              id="grade"
              placeholder="Grade Of The Service Provider"
            />
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <label for="category">Select Category:</label>
            <select id="category" name="category" class="form-select">
              <option value="cat1">Category 1</option>
              <option value="cat2">Category 2</option>
              <option value="cat3">Category 3</option>
            </select>
          </div>

          <div class="col-8">
            <label for="inputAddress">Address</label>
            <textarea
              class="form-control"
              id="inputAddress"
              rows="3"
              placeholder="Address Of The Service Provider"
            ></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <label for="district">Select District:</label>
            <select id="district" name="district" class="form-select">
              <option value="">Select District</option>
              <option value="Colombo">Colombo</option>
              <option value="Gampaha">Gampaha</option>
              <option value="Kalutara">Kalutara</option>
              <option value="Kandy">Kandy</option>
              <option value="Matale">Matale</option>
              <option value="Nuwara Eliya">Nuwara Eliya</option>
            </select>
          </div>
          <div class="col-5">
            <label for="city">City:</label>
            <select id="city" name="city" class="form-select" disabled>
              <option value="">Select City</option>
            </select>
          </div>
        </div>
        <script>
          const cities = {
            Colombo: ["Colombo", "Kotahena", "Nugegoda"],
            Gampaha: ["Gampaha", "Negombo", "Minuwangoda"],
            Kalutara: ["Kalutara", "Panadura", "Horana"],
            Kandy: ["Kandy", "Nawalapitiya", "Peradeniya"],
            Matale: ["Matale", "Dambulla", "Kurunegala"],
            "Nuwara Eliya": ["Nuwara Eliya", "Hatton", "Bandarawela"],
          };

          const distSelect = document.getElementById("district");
          const citySelect = document.getElementById("city");

          distSelect.addEventListener("change", (e) => {
            const dist = e.target.value;
            if (cities[dist]) {
              citySelect.disabled = false;
              citySelect.innerHTML = "<option value=''>Select City</option>";
              cities[dist].forEach((city) => {
                const opt = document.createElement("option");
                opt.value = city;
                opt.textContent = city;
                citySelect.appendChild(opt);
              });
            } else {
              citySelect.disabled = true;
            }
          });
        </script>
        <h5>Project History</h5>
        <table class="table" id="projectTable">
          <thead>
            <tr>
              <th>Project Name</th>
              <th>Location</th>
              <th>Value</th>
              <th>Contact Person</th>
              <th>Contact Number</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="projectHistory">
            <tr>
              <td>
                <input
                  type="text"
                  class="form-control"
                  name="projectName[]"
                  placeholder="Project Name"
                />
              </td>
              <td>
                <input
                  type="text"
                  class="form-control"
                  name="projectLocation[]"
                  placeholder="Location"
                />
              </td>
              <td>
                <input
                  type="text"
                  class="form-control"
                  name="projectValue[]"
                  placeholder="Value"
                />
              </td>
              <td>
                <input
                  type="text"
                  class="form-control"
                  name="contactPerson[]"
                  placeholder="Contact Person"
                />
              </td>
              <td>
                <input
                  type="text"
                  class="form-control"
                  name="contactNumber[]"
                  placeholder="Contact Number"
                />
              </td>
              <td>
                <button
                  type="button"
                  class="btn btn-danger"
                  onclick="removeRow(this)"
                >
                  Remove
                </button>
              </td>
            </tr>
          </tbody>
        </table>

        <button type="button" class="btn btn-success" onclick="addProjectRow()">
          Add Project
        </button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <script>
      // Function to add a new project row
      function addProjectRow() {
        const tableBody = document.getElementById("projectHistory");
        const newRow = `
            <tr>
              <td><input type="text" class="form-control" name="projectName[]" placeholder="Project Name" /></td>
              <td><input type="text" class="form-control" name="projectLocation[]" placeholder="Location" /></td>
              <td><input type="text" class="form-control" name="projectValue[]" placeholder="Value" /></td>
              <td><input type="text" class="form-control" name="contactPerson[]" placeholder="Contact Person" /></td>
              <td><input type="text" class="form-control" name="contactNumber[]" placeholder="Contact Number" /></td>
              <td><button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button></td>
            </tr>
          `;
        tableBody.insertAdjacentHTML("beforeend", newRow);
      }

      // Function to remove a project row
      function removeRow(button) {
        button.closest("tr").remove();
      }

      // Handle form submission
      document
        .getElementById("builderForm")
        .addEventListener("submit", function (event) {
          event.preventDefault();
          // Gather form data for submission here (can use FormData for AJAX submission)
          alert("Form submitted with project data!");
        });
    </script>
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
      </div>
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

    <!-- /FOOTER -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap 5 JS Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Slick JS -->
    <script src="js/slick.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- nouislider -->
    <script src="js/nouislider.min.js"></script>
    <!-- jQuery (required by Select2) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- Custom JS -->
    <script src="js/main.js"></script>

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
