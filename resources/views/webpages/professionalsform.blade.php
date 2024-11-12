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

        <form class="p-4" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
          <!-- Personal Information -->
          <h4>Personal Information</h4>
          <hr>
          {{-- this one need to auto fill from our side like that PR00001 --}}
          {{-- <div class=" mb-3">
            <label for="fullName" class="form-label">Professional Number</label>
            <input type="text" class="form-control" id="professionalNumber" name="professionalNumber" >
          </div> --}}
          <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter full name" required>
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
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Street Address">
          </div>

          <div class="row mb-3">
            <div class="row">
              <div class="col-5">
                <label for="district">Select District:</label>
                <select id="district" name="district" class="form-select">
                </select>
              </div>
              <div class="col-5">
                <label for="city">City:</label>
                <select id="city" name="city" class="form-select disabled" disabled>
                  <option value="">Select City</option>
                </select>
              </div>
            </div> 
            <div class="col-md-4">
              <label for="zip" class="form-label">Zip Code</label>
              <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code">
            </div>
          </div>

          <div class="col-12-mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob">
          </div>

          <div class="mb-3">
            <label for="linkedin" class="form-label">LinkedIn Profile or Professional Website</label>
            <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="URL to profile">
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
            <label for="specializations" class="form-label">Specializations</label>
            <select multiple class="form-select select2" id="specializations" name="specializations[]">
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Electrical Work">Electrical Work</option>
              <option value="Structural Analysis">Structural Analysis</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="skills" class="form-label">Skills</label>
            <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="List skills like CAD, project management, etc."></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Certifications</label>
            <div class="row">
              <div class="col-md-4">
                <input type="text" class="form-control mb-2" name="certificationName" placeholder="Certification Name">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control mb-2" name="issuingAuthority" placeholder="Issuing Authority">
              </div>
              <div class="col-md-2">
                <input type="date" class="form-control mb-2" name="dateIssued" placeholder="Date Issued">
              </div>
              <div class="col-md-2">
                <input type="date" class="form-control mb-2" name="expirationDate" placeholder="Expiration Date">
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="licenseNumber" class="form-label">Professional License Number</label>
            <input type="text" class="form-control" id="licenseNumber" name="licenseNumber" placeholder="License Number (if applicable)">
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

</script>
@endsection
