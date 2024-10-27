@extends('webpages.index')
@section('content')
    <!-- /MAIN HEADER -->
    <style>
      .border {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
      }
    </style>
    <div class="container-fluid " >
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
         
          <div class="col-12">
            <label for="inputAddress">Address</label>
            <textarea
              class="form-control"
              id="inputAddress"
              rows="3"
              placeholder="Address Of The Service Provider"
            ></textarea>
          </div>
        </div>
        {{-- get form distrc tble and city table --}}
        <div class="row">
          <div class="col-4">
            <label for="category">Select Category:</label>
            <select id="category" name="category" class="form-select">
              <option value="" disabled selected>Select Your Service Category</option>
              @foreach($services as $service)
                <option value="{{ $service->id }}">{{ $service->servicename }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-4 pt-2">
            <label for="district">Select District:</label>
            <select id="district" name="district" class="form-select">
              <option value="">Select District</option>
            </select>
          </div>
          <div class="col-4 pt-2">
            <label for="city">City:</label>
            <select id="city" name="city" class="form-select disabled" disabled>
              <option value="">Select City</option>
            </select>
          </div>
        </div>
        
      <script>
          // Prepare district and city data in JavaScript from Blade data
          var cities = [
          @foreach($districts as $district)
            {
              "districtId": "{{ $district->dis_id }}",
              "districtName": "{{ $district->dis_name }}",
              "cities": [
                @foreach($district->city as $city)
                  {
                    "cityName": "{{ $city->ds_name }}",
                    "cityId": "{{ $city->ds_id }}"
                  },
                @endforeach
              ]
            },
          @endforeach
        ];
        
          $(document).ready(function() {
            // Populate district dropdown
            let districtOptions = '<option value="">Select District</option>';
            cities.forEach((elem) => {
              districtOptions += `<option value="${elem.districtId}">${elem.districtName}</option>`;
            });
        
            $('#district').html(districtOptions).select2(); // Initialize Select2 on the district dropdown
            $('#city').select2(); // Initialize Select2 on the city dropdown
        
            $('#district').change(function() {
              const selectedDistrict = cities.find((elem) => elem.districtId == $(this).val());
              
              if (selectedDistrict) {
                let cityOptions = '<option value="">Select City</option>';
                selectedDistrict.cities.forEach((city) => {
                  cityOptions += `<option value="${city.cityId}">${city.cityName}</option>`;
                });
                
                $('#city').html(cityOptions).prop("disabled", false).removeClass('disabled').select2();
              } else {
                $('#city').html('<option value="">Select City</option>').prop("disabled", true).addClass('disabled');
              }
            });
          });
      </script>
        

      <h5>Contact Details</h5>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="telephone" class="col-form-label">Telephone :</label>
            <input type="tel" id="telephone" class="form-control" aria-describedby="telephoneHelp">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="mobile" class="col-form-label">Mobile :</label>
            <input type="tel" id="mobile" class="form-control" aria-describedby="mobileHelp">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="whatsapp" class="col-form-label">WhatsApp :</label>
            <input type="tel" id="whatsapp" class="form-control" aria-describedby="whatsappHelp">
          </div>
        </div>
      </div>


        <h5>Company Details</h5>
        <div class="row align-items-space-between">
          <div class="col">
            <label for="inputPassword6" class="col-form-label">Name :</label>
            <input type="Telephone" id="telephone" class="form-control" aria-describedby="telephoneHelp">
          </div>
          <div class="col">
            <label for="inputPassword6" class="col-form-label">Business Registration No :</label>
            <input type="Telephone" id="mobile" class="form-control" aria-describedby="telephoneHelp">
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <label for="noOfEmp" class="col-form-label">Number of Employees :</label>
            <input type="number" id="noOfEmp" class="form-control" aria-describedby="noOfEmpHelp">
          </div>
          <div class="col-4">
            <label for="employeesQualification" class="col-form-label">Employees Qualification :</label>
            <input type="text" id="employeesQualification" class="form-control" aria-describedby="employeesQualificationHelp">
          </div>
          <div class="col-4">
            <label for="maxProjectValue" class="col-form-label">Maximum Project Value :</label>
            <input type="text" id="maxProjectValue" class="form-control" aria-describedby="maxProjectValueHelp">
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