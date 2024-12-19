{{-- @extends('webpages.index')
@section('content')
<style>
.border {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
  }
  .custom-form-style {
        background-color: #ffffff;
        border: 2px solid #0d0d0d;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 8px; /* Optional: Adds rounded corners */
      }
      .preview-box {
      width: 150px;
      height: 150px;
      border: 2px dashed #ccc;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }
    .preview-box img {
      width: 100%;
      height: auto;
    }
</style>

<div class="container mt-5 mb-5">
    <div class="text-center">
        <h3 class="display-4 text-primary font-weight-bold">BUILDERS.LK</h3>
        <h4 class="display-6 text-secondary font-weight-bold">
            Construction Professional Registration 
        </h4>
      </div>
      <div class="custom-form-style border px-5">
        <form class="border p-4" >
            <!-- Personal Information -->
            <h4>Personal Information</h4>
            <div class="mb-3">
              <label for="fullName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullName" placeholder="Enter full name" required>
            </div>
            <div class="mb-2 d-flex boder">
              <div>
                <label for="profileImage">Profile Image:</label>
                <input type="file" id="profileImage" name="profileImage" accept="image/*" onchange="previewImage()" required>
              </div>
          
              <div class="preview-box" id="imagePreview">
                <!-- Image preview will appear here -->
                <span>Image Preview</span>
              </div>

            </div>
           
            
        
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email address" required>
              </div>
            </div>
      
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Street Address">
            </div>
      
            <div class="row mb-3">
              <div class="col-md-4">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" placeholder="City">
              </div>
              <div class="col-md-4">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" placeholder="State">
              </div>
              <div class="col-md-4">
                <label for="zip" class="form-label">Zip Code</label>
                <input type="text" class="form-control" id="zip" placeholder="Zip Code">
              </div>
            </div>
      
            <div class="mb-3">
              <label for="dob" class="form-label">Date of Birth</label>
              <input type="date" class="form-control" id="dob">
            </div>
      
            <div class="mb-3">
              <label for="linkedin" class="form-label">LinkedIn Profile or Professional Website</label>
              <input type="url" class="form-control" id="linkedin" placeholder="URL to profile">
            </div>
      
            <!-- Professional Details -->
            <h4>Professional Details</h4>
            <div class="mb-3">
              <label for="jobTitle" class="form-label">Job Title/Role</label>
              <input type="text" class="form-control" id="jobTitle" placeholder="e.g., Architect, Engineer" required>
            </div>
      
            <div class="mb-3">
              <label for="experienceLevel" class="form-label">Experience Level</label>
              <select class="form-select" id="experienceLevel" required>
                <option value="" disabled selected>Select experience level</option>
                <option value="Junior">Junior</option>
                <option value="Mid-level">Mid-level</option>
                <option value="Senior">Senior</option>
              </select>
            
            </div>
      
            <div class="mb-3">
              <label for="yearsOfExperience" class="form-label">Years of Experience</label>
              <input type="number" class="form-control" id="yearsOfExperience" placeholder="Enter number of years">
            </div>
      
            <div class="mb-3">
              <label for="specializations" class="form-label">Specializations</label>
              <select multiple class="form-select select2" id="specializations">
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Electrical Work">Electrical Work</option>
                <option value="Structural Analysis">Structural Analysis</option>
              </select>
      
            </div>
      
            <div class="mb-3">
              <label for="skills" class="form-label">Skills</label>
              <textarea class="form-control" id="skills" rows="3" placeholder="List skills like CAD, project management, etc."></textarea>
            </div>
      
            <div class="mb-3">
              <label class="form-label">Certifications</label>
              <div class="row">
                <div class="col-md-4">
                  <input type="text" class="form-control mb-2" placeholder="Certification Name">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control mb-2" placeholder="Issuing Authority">
                </div>
                <div class="col-md-2">
                  <input type="date" class="form-control mb-2" placeholder="Date Issued">
                </div>
                <div class="col-md-2">
                  <input type="date" class="form-control mb-2" placeholder="Expiration Date">
                </div>
              </div>
            </div>
      
            <div class="mb-3">
              <label for="licenseNumber" class="form-label">Professional License Number</label>
              <input type="text" class="form-control" id="licenseNumber" placeholder="License Number (if applicable)">
            </div>
      
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-3 mb-2">Submit</button>
          </form>

      </div>
    
  </div>
  <script>
       document.getElementById('experienceLevel').addEventListener('change', function() {
                  if (this.value !== '') {
                    this.removeAttribute('disabled');
                  } else {
                    this.setAttribute('disabled', true);
                  }
                });

       $(document).ready(function() {
                  $('#specializations').select2({
                    placeholder: "Select Specializations",
                    allowClear: true
                  });
                });


    function previewImage() {
      const file = document.getElementById("profileImage").files[0];
      const previewBox = document.getElementById("imagePreview");
      previewBox.innerHTML = ""; // Clear any existing content

      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const img = document.createElement("img");
          img.src = e.target.result;
          previewBox.appendChild(img);
        };
        reader.readAsDataURL(file);
      } else {
        previewBox.innerHTML = "<span>Image Preview</span>";
      }
    }
  </script>

@endsection --}}

@extends('webpages.index')
@section('content')
<style>
.border {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
  }
  .custom-form-style {
        background-color: #ffffff;
        border: 2px solid #decaca;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 8px;
      }
      .preview-box {
      width: 100px;
      height: 100px;
      border: 2px dashed #060404;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
     
    }
    .preview-box img {
      width: 100%;
      height: auto;
    }
</style>

<div class="container mt-5 mb-5">
    <div class="text-center">
        <h3 class="display-4 text-primary font-weight-bold">BUILDERS.LK</h3>
        <h4 class="display-6 text-secondary font-weight-bold">
            Construction Professional Registration 
        </h4>
    </div>
    <div class="custom-form-style px-5">
      <div class="border">

        <form class="p-4" method="POST" action="{{ route('submitprofessionals') }}" enctype="multipart/form-data">
          @csrf
          <!-- Personal Information -->
          <h4>Personal Information</h4>
          <hr>
          <div class="form-group">
            <label for="professionalNumber">Professional Number</label>
            <input type="text"
                class="form-control @error('professionalNumber') is-invalid @enderror"
                id="professionalNumber" name="professionalNumber"
                value="{{ old('professionalNumber') }}" readonly>
                <script>
                    function generateServiceProviderNumber() {
                        const prefix = 'PR';
                        const randomNumber = Math.floor(Math.random() * 100000); 
                        const formattedNumber = prefix + randomNumber.toString().padStart(6, '0');
                        document.getElementById('professionalNumber').value = formattedNumber;
                    }

                    window.onload = generateServiceProviderNumber;
                </script>
          </div>
          <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="p_Name" placeholder="Enter full name" required>
          </div>
          
          <div class="mb-3 d-flex">
            <label for="profileImage" class="form-label">Profile Image:</label>
            <input type="file" id="profileImage" name="profileImage" accept="image/*" onchange="previewImage()" required>
            <div class="preview-box" id="imagePreview">
              <span>Image Preview</span>
            </div>
          </div>
          
          <div class="row mb-3">
            <div class="col-12 col-md-6">
              <label for="phoneNumber" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number" required>
            </div>
            <div class="col-12 col-md-6">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="p_email" placeholder="Enter email address" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="p_address" placeholder="Street Address">
          </div>

          <div class="row mb-3">
            <div class="row">
              <div class="col-6">
                <label for="district">Select District:</label>
                <select id="district" name="district" class="form-select">
                </select>
              </div>
              <div class="col-6 ">
                <label for="city">City:</label>
                <select id="city" name="city" class="form-select disabled" disabled>
                  <option value="">Select City</option>
                </select>
              </div>
            </div> 
            <div class="col-md-6">
              <label for="zip" class="form-label">Zip Code</label>
              <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code">
            </div>

            <div class="col-md-6 col-mb-3">
              <label for="dob" class="form-label">Date of Birth</label>
              <input type="date" class="form-control" id="dob" name="dob">
            </div>
          </div>

          

          <div class="mb-3">
            <label for="linkedin" class="form-label">LinkedIn Profile or Professional Website</label>
            <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="URL to profile">
          </div>

          <!-- Professional Details -->
          <h4>Professional Details</h4>
          <hr>
          <div class="mb-3">
            <label for="jobTitle" class="form-label">Job Title/Role</label>
            <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="e.g., Architect, Engineer" required>
          </div>

          <div class="mb-3">
            <label for="experienceLevel" class="form-label">Experience Level</label>
            <select class="form-select" id="experienceLevel" name="experienceLevel" required>
              <option value="" disabled selected>Select experience level</option>
              <option value="Junior">Junior</option>
              <option value="Mid-level">Mid-level</option>
              <option value="Senior">Senior</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="yearsOfExperience" class="form-label">Years of Experience</label>
            <input type="number" class="form-control" id="yearsOfExperience" name="yearsOfExperience" placeholder="Enter number of years">
          </div>

          <div class="mb-3">
            {{-- in here also need to show professional Catogery get form data base 
             --}}
            <label for="specializations" class="form-label">Specializations</label>
            <select multiple class="form-select select2" id="specializations" name="specialization[]">
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Electrical Work">Electrical Work</option>
              <option value="Structural Analysis">Structural Analysis</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="skills" class="form-label">Skills</label>
            <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="List skills like CAD, project management, etc."></textarea>
          </div>

          <div class="col-md-12 mb-3">
            <label class="form-label">Certifications</label>
            <div id="certifications">
              <div class="row certification-row">
                <div class="col-md-4">
                  <input type="text" class="form-control mb-2" name="certificationName[]" placeholder="Certification Name">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control mb-2" name="issuingAuthority[]" placeholder="Issuing Authority">
                </div>
                <div class="col-md-2">
                  <input type="date" class="form-control mb-2" name="dateIssued[]" placeholder="Date Issued">
                </div>
                <div class="col-md-2">
                  <input type="date" class="form-control mb-2" name="expirationDate[]" placeholder="Expiration Date">
                </div>
               
                  <div class="col-md-6">
      
                      <label for="certificationPdf" class="form-label">Certification PDF (if applicable)</label>
                      <input type="file" class="form-control" id="certificationPdf" name="certificationPdf[]" multiple placeholder="Upload PDF(s)">
                  
                  </div>
          
                <div class="col-md-12 text-end">
                  <button type="button" class="btn btn-danger btn-sm delete-certification">Delete</button>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary mt-2" id="addCertification">Add More Certification</button>
          
          </div>

          <div class="form-group mt-3">
            <div class="col-md-12 ">
        
                <label for="licenseNumber" class="form-label">Professional License Number</label>
                <input type="text" class="form-control" id="licenseNumber" name="licenseNumber" placeholder="License Number (if applicable)">
          
            </div>
          </div>
          
          <h5>Company Details</h5>
          <div class="row align-items-space-between">
              <div class="col">
                  <div class="mb-3 d-flex">
                      <label for="profileImage" class="form-label">Company Logo:</label>
                      <input type="file" id="providerImage" name="providerImage" accept="image/*" onchange="previewImage()" required>
                      <div class="preview-box" id="imagePreview">
                        <span>Image Preview</span>
                      </div>
                  </div>
              </div>
              <div class="form-group col-md-6">
                  <label for="inputPassword6" class="col-form-label">Name :</label>
                  <input type="text" id="companyName" name="companyName" class="form-control"
                      aria-describedby="companyNameHelp">
              </div>
              <div class="form-group col-md-6">
                  <label for="businessRegNo" class="col-form-label">Business Registration No :</label>
                  <input type="text" id="businessRegNo" name="businessRegNo" class="form-control"
                      aria-describedby="businessRegNoHelp">
              </div>
             
              <!-- Registrations File Upload -->
              <div class="form-group col-md-6">
                  <label for="registrations">Registrations</label>
                  <input type="file" name="registrations" id="registrations" class="form-control" accept=".pdf,.doc,.docx,.jpg,.png">
              </div>

              <!-- Certifications File Upload -->
              <div class="form-group col-md-6">
                  <label for="certifications">Certifications</label>
                  <input type="file" name="certifications" id="certifications" class="form-control" accept=".pdf,.doc,.docx,.jpg,.png">
              </div> 
          </div>
           <!-- Dynamic Providing Services Section -->
          <div class="form-group">
              <label for="providing_services">Providing Services</label>
              <div id="services-container">
                  <!-- Initial Row with Two Fields -->
                  <div class="service-row mb-2 d-flex align-items-center">
                      <input type="text" name="service_name[]" class="form-control me-2" placeholder="Service Name">
                    
                      <button type="button" class="btn btn-danger btn-sm remove-service">Remove</button>
                  </div>
              </div>

              <!-- Add More Button -->
              <button type="button" id="add-more" class="btn btn-success mt-2">Add More</button>
          </div>
          <script>
              $(document).ready(function () {
                  // Add More Button Click
                  $('#add-more').click(function () {
                      $('#services-container').append(`
                          <div class="service-row mb-2 d-flex align-items-center">
                              <input type="text" name="service_name[]" class="form-control me-2" placeholder="Service Name">
                              
                              <button type="button" class="btn btn-danger btn-sm remove-service">Remove</button>
                          </div>
                      `);
                  });
          
                  // Remove Row
                  $(document).on('click', '.remove-service', function () {
                      $(this).closest('.service-row').remove();
                  });
              });
          </script>
          <div class="form-group col-md-12">
              <label for="directors-details">Directors/Proprietors/Partners</label>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="directors-table-body">
                  <!-- Rows will be added dynamically -->
                  <tr>
                    <td>
                      <input
                        type="text"
                        name="directors[0][name]"
                        class="form-control"
                        placeholder="Enter Name"
                        required
                      />
                    </td>
                    <td>
                      <input
                        type="text"
                        name="directors[0][contact]"
                        class="form-control"
                        placeholder="Enter Contact Number"
                        required
                      />
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger btn-sm remove-row">Remove</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <button type="button" class="btn btn-primary" id="add-director-row">Add Row</button>
          </div>
            
            
              <script>
                document.getElementById('add-director-row').addEventListener('click', function () {
                                const tableBody = document.getElementById('directors-table-body');
                                const rowCount = tableBody.rows.length;
                              
                                const newRow = document.createElement('tr');
                                newRow.innerHTML = `
                                  <td>
                                    <input
                                      type="text"
                                      name="directors[${rowCount}][name]"
                                      class="form-control"
                                      placeholder="Enter Name"
                                      required
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="text"
                                      name="directors[${rowCount}][contact]"
                                      class="form-control"
                                      placeholder="Enter Contact Number"
                                      required
                                    />
                                  </td>
                                  <td>
                                    <button type="button" class="btn btn-danger btn-sm remove-row">Remove</button>
                                  </td>
                                `;
                              
                                tableBody.appendChild(newRow);
                              });
                              
                              // Event delegation to handle row removal
                              document.getElementById('directors-table-body').addEventListener('click', function (event) {
                                if (event.target.classList.contains('remove-row')) {
                                  event.target.closest('tr').remove();
                                }
                              });
              </script>

          <div class="row">
              <div class="col-4">
                  <label for="noOfEmp" class="col-form-label">Number of Employees :</label>
                  <input type="number" id="noOfEmp" name="noOfEmp" class="form-control"
                      aria-describedby="noOfEmpHelp">
              </div>
              <div class="col-4">
                  <label for="employeesQualification" class="col-form-label">Employees Qualification
                      :</label>
                  <input type="text" id="employeesQualification" name="employeesQualification"
                      class="form-control" aria-describedby="employeesQualificationHelp">
              </div>
              <div class="col-4">
                  <label for="maxProjectValue" class="col-form-label">Maximum Project Value :</label>
                  <input type="text" id="maxProjectValue" name="maxProjectValue" class="form-control"
                      aria-describedby="maxProjectValueHelp">
              </div>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary mt-3 mb-2">Submit</button>
          <button type="reset" class="btn btn-secondary mt-3 mb-2" > Cancel</button>
        </form>

      </div>
        
    </div>
</div>

<script>
    document.getElementById('experienceLevel').addEventListener('change', function() {
        if (this.value !== '') {
            this.removeAttribute('disabled');
        } else {
            this.setAttribute('disabled', true);
        }
    });

    // $(document).ready(function() {
    //     $('#specializations').select2({
    //         placeholder: "Select Specializations",
    //         allowClear: true
    //     });
    // });

    // function previewImage() {
    //     const file = document.getElementById("profileImage").files[0];
    //     const previewBox = document.getElementById("imagePreview");
    //     previewBox.innerHTML = ""; // Clear any existing content

    //     if (file) {
    //         const reader = new FileReader();
    //         reader.onload = function(e) {
    //             const img = document.createElement("img");
    //             img.src = e.target.result;
    //             previewBox.appendChild(img);
    //         };
    //         reader.readAsDataURL(file);
    //     } else {
    //         previewBox.innerHTML = "<span>Image Preview</span>";
    //     }
    // }
              //   // select district and city 
                
              // var cities=[
              //         @forEach($districts as $dictrict)
              //           {
              //           'districtId':'{{$dictrict->dis_id}}',
              //           'districtName':'{{$dictrict->dis_name}}',
              //           'cities':[ 
              //           @forEach($dictrict->city as $city)
              //             {
              //               'cityName':'{{$city->ds_name}}',
              //               'cityId':{{$city->ds_id}}
              //             },
              //           @endforeach
              //           ]},
              //         @endforeach
              //       ];

              //       $(document).ready(function(){
              //         let content='<option value="">Select District</option>';
              //         cities.forEach((elem) => {
              //           content+=`<option value="${elem.districtId}">${elem.districtName}</option>`;
              //         })
              //         $('#district').html(content);
              //         $('#district').select2();
              //         $('#city').select2();

              //         $('#district').change(function() {
              //           $('#city').removeClass('disabled');
              //           $('#city').removeAttr('disabled');
              //           // console.log("city:", cities.find((elem) => elem.districtId == $(this).val()));
              //           let content='<option value="">Select City</option>';
              //           cities.find((elem) => elem.districtId == $(this).val()).cities.forEach((elem) => {
              //             content+=`<option value="${elem.cityId}">${elem.cityName}</option>`;
              //           })
              //           $('#city').html(content);
              //           $('#city').select2();
              //         });
              //       })


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

//add cetification
          $(document).ready(function() {
              $('.selectsum1').select2({
                  placeholder: "Select specializations...", // Sets the placeholder text
                  allowClear: true // Allows users to clear the selection if desired
              }).val(null).trigger('change');
          });

          $(document).ready(function() {


              // Add new certification row
              $('#addCertification').click(function() {
                  // Clone the first certification row
                  let newCertification = $('.certification-row:first').clone();

                  // Clear the input fields in the cloned row
                  newCertification.find('input').val('');

                  // Append the cloned row to the certifications container
                  $('#certifications').append(newCertification);
              });

              // Delete a specific certification row
              $(document).on('click', '.delete-certification', function() {
                  // Remove the certification row
                  $(this).closest('.certification-row').remove();
              });
          });
</script>
@endsection
