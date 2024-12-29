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
                            <h4 class="card-title mb-1">Add New Bass </h4>
                            <p class="mb-2">
                                Enter the name of the Bass you want to add
                            </p>
                        </div>
                        <div class="card-body pt-0">
                            {{-- <form class="border p-4" method="POST" action="{{ route('addserviceprovider.store') }}"> --}}
                            <form class="border p-4" method="POST" action="{{ route('submitprofessionals') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <!-- Personal Information -->
                                <h4>Personal Information</h4>
                                <hr>
                                {{-- this one need to auto fill from our side like that PR00001 --}}
                                <div class="d-flex ">
                                    <div class="col">
                                        {{-- <!-- Display Validation Errors -->
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif --}}

                                        <!-- Personal Information -->
                                        <div class="form-group">
                                            <label for="professionalNumber">Bass Number</label>
                                            <input type="text"
                                                class="form-control @error('BassNumber') is-invalid @enderror"
                                                id="BassNumber" name="BassNumber"
                                                value="{{ old('BassNumber') }}" readonly>
                                              
                                        </div>
                                    </div>
                                   
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">NIC No</label>
                                                <input type="text" class="form-control" id="nic" name="nic"
                                                    placeholder="Enter NIC Here" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="d-flex">
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="fullName" name="b_Name"
                                                    placeholder="Enter full name" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            
                                <hr>
                                <div class="row md-3 ">
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="mb-3 d-flex">
                                                <label for="nicImage" class="form-label">NIC Image:</label>
                                                <input type="file" id="nicImage" name="nicImage" accept="image/*" capture="enviorement"
                                                    onchange="previewImage(this)" >
                                                <div class="preview-box" id="imagePreview2">
                                                    <span>NIC Image Preview</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="mb-3 d-flex">
                                                <label for="backNicImage" class="form-label">Back Side NIC Image:</label>
                                                <input type="file" id="backNicImage" name="backNicImage" accept="image/*"  capture="enviorement" 
                                                    onchange="previewImage(this)" >
                                                <div class="preview-box" id="imagePreview3">
                                                    <span>Back Side NIC Image Preview</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group"">
                                    <div class="col">
                                            <div class="mb-3">
                                                <label for="profileImage" class="form-label">Profile Image:</label>
                                                <input type="file" id="profileImage" name="profileImage" accept="image/*"  capture="user"
                                                onchange="previewImage(this)" >
                                                <div class="preview-box" id="imagePreview">
                                                    <span>Image Preview</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="phoneNumber">Telephone Number</label>
                                            <input type="text" class="form-control" id="telephoneNumber" name="telephoneNumber"
                                                placeholder="Enter Phone Number" />
                                        </div>
                                    </div>
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
                                            <input type="text" class="form-control" id="email" name="b_email"
                                                placeholder="Enter Email Address" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea rows="3" class="form-control" id="address" name="b_address" placeholder="Street Address"></textarea>

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
                                <div class="d-flex">
                                    <div class="col-md-4">
                                        <label for="zip" class="form-label">Zip Code</label>
                                        <input type="text" class="form-control" id="zip" name="zip"
                                            placeholder="Zip Code">
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
                                            <label for="linkedin" class="form-label">LinkedIn Profile or FaceBook
                                                Link</label>
                                            <input type="text" class="form-control" id="linkedin" name="linkedin"
                                                placeholder="URL to profile">
                                        </div>
                                    </div>
                                </div>

                                <!-- Professional Details -->
                                <h4>Bass Details</h4>
                                <hr>
                                <div class="d-flex flex-wrap">
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="jobTitle" class="form-label">Job Title/Role</label>
                                                <input type="text" class="form-control" id="jobTitle"
                                                    name="jobTitle" placeholder="e.g., Architect, Engineer" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="experienceLevel" class="form-label">Experience Level</label>
                                                <select class="form-select" id="experienceLevel" name="experienceLevel"
                                                    >
                                                    <option value="" disabled selected>Select experience level
                                                    </option>
                                                    <option value="Junior">Junior</option>
                                                    <option value="Mid-level">Mid-level</option>
                                                    <option value="Senior">Senior</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="yearsOfExperience" class="form-label">Years of
                                                    Experience</label>
                                                <input type="number" class="form-control" id="yearsOfExperience"
                                                    name="yearsOfExperience" placeholder="Enter number of years">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                {{-- Professional Category neet to shgow in here this one get form professinalCategory tyble it need to create contoller also --}}
                                                <label for="specializations" class="form-label">Specializations</label>
                                                <select multiple="multiple" name="specialization[]"
                                                    class="form-select selectsum1">
                                                    {{-- @foreach ($cate as $category)
                                                        <option value="{{ $category->name }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                {{-- Professional Category neet to shgow in here this one get form professinalCategory tyble it need to create contoller also --}}
                                                <label for="specializations" class="form-label">Working Area</label>
                                                <select multiple="multiple" name="workingArea[]"
                                                    class="form-select selectsum1">
                                                    {{-- @foreach ($cate as $category)
                                                        <option value="{{ $category->name }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                  
                                
                                <div class="col-md-12 mb-3">
                                    <label for="skills" class="form-label">Skills</label>
                                    <textarea class="form-control" id="skills" name="skills" rows="3"
                                        placeholder="List skills like CAD, project management, etc."></textarea>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Certifications</label>
                                    <div id="certifications">
                                        <div class="row certification-row">
                                            <div class="col-md-4">
                                                <input type="text" class="form-control mb-2"
                                                    name="certificationName[]" placeholder="Certification Name">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control mb-2" name="issuingAuthority[]"
                                                    placeholder="Issuing Authority">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="date" class="form-control mb-2" name="dateIssued[]"
                                                    placeholder="Date Issued">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="date" class="form-control mb-2" name="expirationDate[]"
                                                    placeholder="Expiration Date">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="certificationPdf" class="form-label">Certification PDF (if
                                                    applicable)</label>
                                                <input type="file" class="form-control" id="certificationPdf"
                                                    name="certificates[]" multiple placeholder="Upload PDF(s)">
                                            </div>
                                            
                            <h5>Company Details</h5>
                            <div class="row align-items-space-between">
                                <div class="col">
                                    <div class="mb-3 d-flex">
                                        <label for="profileImage" class="form-label">Company Logo:</label>
                                        <input type="file" id="providerImage" name="providerImage" accept="image/*" onchange="previewImage()" >
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
                                          
                                        />
                                      </td>
                                      <td>
                                        <input
                                          type="text"
                                          name="directors[0][contact]"
                                          class="form-control"
                                          placeholder="Enter Contact Number"
                                          
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
                                                        
                                                      />
                                                    </td>
                                                    <td>
                                                      <input
                                                        type="text"
                                                        name="directors[${rowCount}][contact]"
                                                        class="form-control"
                                                        placeholder="Enter Contact Number"
                                                        
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

                                            <div class="col-md-12 text-end">
                                                <button type="button"
                                                    class="btn btn-danger btn-sm delete-certification">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary mt-2" id="addCertification">Add More
                                        Certification</button>

                                </div>
                                {{-- <div class="form-group mt-3">
                                    <div class="col-md-12 ">

                                        <label for="licenseNumber" class="form-label">Professional License Number</label>
                                        <input type="text" class="form-control" id="licenseNumber"
                                            name="licenseNumber" placeholder="License Number (if applicable)">

                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-primary mt-3 mb-2">Submit</button>
                                    <button type="reset" class="btn btn-secondary mt-3 mb-2"> Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    
    </script>
    {{-- <script>
        $(document).ready(function() {

            // Prepare district and city data in JavaScript from Blade data
            const cities = [
                @foreach ($dictricts as $district)
                    {
                        districtId: "{{ $district->dis_id }}",
                        districtName: "{{ $district->dis_name }}",
                        cities: [
                            @foreach ($district->city as $city)
                                {
                                    cityName: "{{ $city->ds_name }}",
                                    cityId: "{{ $city->ds_id }}"
                                },
                            @endforeach
                        ]
                    },
                @endforeach
            ];

            // Populate district dropdown
            const districtOptions = '<option value="">Select District</option>';
            cities.forEach((elem) => {
                districtOptions += `<option value="${elem.districtId}">${elem.districtName}</option>`;
            });

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
    </script> --}}
    <script>
    //     function previewImage() {
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

    function generateBassNumber() {
            const prefix = 'BR';
            const randomNumber = Math.floor(Math.random() * 100000); 
            const formattedNumber = prefix + randomNumber.toString().padStart(6, '0');
            document.getElementById('BassNumber').value = formattedNumber;
        }

    window.onload = generateBassNumber;

    function previewImage(input) 
    {
        const file = input.files[0]; // Get the file from the input
        const previewBoxId = input.nextElementSibling.id; // Get the ID of the corresponding preview box
        const previewBox = document.getElementById(previewBoxId);
        previewBox.innerHTML = ""; // Clear any existing content
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement("img");
                img.src = e.target.result;
                img.style.maxWidth = "100%"; // Adjust as needed
                img.style.height = "auto";
                previewBox.appendChild(img);
            };
            reader.readAsDataURL(file);
        } else {
            previewBox.innerHTML = "<span>Image Preview</span>";
        }
    }
                                    
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
