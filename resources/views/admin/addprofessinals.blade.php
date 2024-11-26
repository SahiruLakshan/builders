@extends('admin.sidebar')
@section('content')
<style>
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
<div class="main-content app-content">
    <!-- container -->
    <div class="main-container container-fluid">
        <div class="row row-sm  mt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Add New Professionals </h4>
                        <p class="mb-2">
                            Enter the name of the Professionals you want to add
                        </p>
                    </div>
                    <div class="card-body pt-0">
                        {{-- <form class="border p-4" method="POST" action="{{ route('addserviceprovider.store') }}"> --}}
                          <form class="border p-4" method="POST" action="{{ route('submitprofessionals') }}" enctype="multipart/form-data">
                              @csrf
                                <!-- Personal Information -->
                                <h4>Personal Information</h4>
                                <hr>
                                {{-- this one need to auto fill from our side like that PR00001 --}}
                                <div class="d-flex">
                                  <div class="col">
                                    <div class="form-group">
                                      <div class=" mb-3">
                                        <label for="fullName" class="form-label">Professional Number</label>
                                        <input type="text" class="form-control" id="professionalNumber" name="professionalNumber" >
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-group">
                                      <div class="mb-3">
                                        <label for="fullName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="fullName" name="p_Name" placeholder="Enter full name" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3  d-flex">
                                      <label for="profileImage" class="form-label">Profile Image:</label>
                                      <input type="file" id="profileImage" name="profileImage" accept="image/*" onchange="previewImage()" required>
                                    <div class="preview-box" id="imagePreview">
                                      <span>Image Preview</span>
                                    </div>
                                 
                                </div>
                                <div class="d-flex">
                                  <div class="col">
                                      <div class="form-group">
                                          <label for="phoneNumber">Phone Number</label>
                                          <input type="text" class="form-control" id="phoneNumber" name="phoneNumber"
                                              placeholder="Enter Phone Number" />
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="form-group">
                                          <label for="email">Email Address</label>
                                          <input type="text" class="form-control" id="email" name="p_email"
                                              placeholder="Enter Email Address" />
                                      </div>
                                  </div>
                                 
                                 
                              </div>
                              <div class="col">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea rows="3" class="form-control" id="address" name="p_address" placeholder="Street Address"></textarea>

                                </div>
                              </div>
                              
                            
                                <div class="d-flex mb-3">
                                  <div class="col-6 pt-2">
                                    <label for="district">Select District:</label>
                                    <select id="district" name="district" class="form-select">
                                        <option value="">Select District</option>
                                    </select>
                                </div>
                                <div class="col-6 pt-2">
                                    <label for="city">City:</label>
                                    <select id="city" name="city" class="form-select disabled" disabled>
                                        <option value="">Select City</option>
                                    </select>
                                </div>
                            </div>
    
                            <script>
                                // Prepare district and city data in JavaScript from Blade data
                                var cities = [
                                    @foreach ($dictricts as $district)
                                        {
                                            "districtId": "{{ $district->dis_id }}",
                                            "districtName": "{{ $district->dis_name }}",
                                            "cities": [
                                                @foreach ($district->city as $city)
                                                    {
                                                        "cityName": "{{ $city->ds_name }}",
                                                        "cityId": "{{ $city->ds_id }}"
                                                    },
                                                @endforeach
                                            ]
                                        },
                                    @endforeach
                                ];
                                console.log("🚀 ~ $district:", cities)
    
                                $(document).ready(function() {
    
                                    // Populate district dropdown
                                    let districtOptions = '<option value="">Select District</option>';
                                    cities.forEach((elem) => {
                                        districtOptions += `<option value="${elem.districtId}">${elem.districtName}</option>`;
                                    });
                                    console.log("🚀 ~ $ ~ districtOptions:", $('#district'))
    
                                    $('#district').html(districtOptions); // Initialize Select2 on the district dropdown
                                    $('#district').select2(); // Initialize Select2 on the district dropdown
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
                                            $('#city').html('<option value="">Select City</option>').prop("disabled", true)
                                                .addClass('disabled');
                                        }
                                    });
                                });
                            </script>
                            <div class="d-flex">
                              <div class="col-md-4">
                                <label for="zip" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code">
                              </div>
                              
                                <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="dob" class="form-label">Date of Birth</label>
                                      <input type="date" class="form-control" id="dob" name="dob">
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="mb-3">
                                  <label for="linkedin" class="form-label">LinkedIn Profile or Professional Website</label>
                                  <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="URL to profile">
                                </div>
                              </div>

                            </div>
                            
                                <!-- Professional Details -->
                                <h4>Professional Details</h4>
                                <hr>
                                <div class="d-flex flex-wrap">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="mb-3">
                                        <label for="jobTitle" class="form-label">Job Title/Role</label>
                                        <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="e.g., Architect, Engineer" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="mb-3">
                                        <label for="experienceLevel" class="form-label">Experience Level</label>
                                        <select class="form-select" id="experienceLevel" name="experienceLevel" required>
                                          <option value="" disabled selected>Select experience level</option>
                                          <option value="Junior">Junior</option>
                                          <option value="Mid-level">Mid-level</option>
                                          <option value="Senior">Senior</option>
                                        </select>
                                      </div>
                                    </div>  
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="mb-3">
                                        <label for="yearsOfExperience" class="form-label">Years of Experience</label>
                                        <input type="number" class="form-control" id="yearsOfExperience" name="yearsOfExperience" placeholder="Enter number of years">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="mb-3">
                                        {{-- Professional Category neet to shgow in here this one get form professinalCategory tyble it need to create contoller also --}}
                                        <label for="specializations" class="form-label">Specializations</label>
                                        <select multiple="multiple" name="specialization[]" class="form-select selectsum1">
                                          
                                          <option value="1">Civil Engineering</option>
                                          <option value="2">Electrical Work</option>
                                          <option value="3">Structural Analysis</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 mb-3">
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
                                <div class="col-md-12">
                                     <!-- Submit Button -->
                                     <button type="submit" class="btn btn-primary mt-3 mb-2">Submit</button>
                                     <button type="reset" class="btn btn-secondary mt-3 mb-2" > Cancel</button>
                                </div>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
    

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
@endsection
