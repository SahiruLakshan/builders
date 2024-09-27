@extends('webpages.index')
@section('content')
    <!-- /MAIN HEADER -->
    <div class="container-fluid " style="padding-top: 132px" >
      <div class="text-center">
        <h3 class="display-4 text-primary font-weight-bold">BUILDERS.LK</h3>
        <h4 class="display-6 text-secondary font-weight-bold">
          Constructions Service Provides Registration form
        </h4>
      </div>
      <form class="border p-4">
        <div class="row">
          <div class="form-group col">
            <label for="inputPassword4">Name</label>
            <input
              type="text"
              class="form-control"
              id="s_name"
              placeholder="Name Of The Service Provider"
            />
          </div>
          <div class="col">
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
          <div class="col-auto">
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

        <h5>Cantact Details</h5>
        <div class="row g-3 align-items-space-between">
          <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Telephone :</label>
          </div>
          <div class="col-auto">
            <input type="Telephone" id="telephone" class="form-control" aria-describedby="telephoneHelp">
          </div>
          <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Mobile :</label>
          </div>
          <div class="col-auto">
            <input type="Telephone" id="mobile" class="form-control" aria-describedby="telephoneHelp">
          </div>
          <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Whatsapp :</label>
          </div>
          <div class="col-auto">
            <input type="Telephone" id="telephone" class="form-control" aria-describedby="telephoneHelp">
          </div>

  
        </div>
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
    {{-- <!-- NEWSLETTER -->

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
    </div> --}}
@endsection