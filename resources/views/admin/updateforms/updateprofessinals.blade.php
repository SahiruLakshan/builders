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
                            <h4 class="card-title mb-1">Update Professional Details</h4>
                            <p class="mb-2">
                                Update the details of the professional
                            </p>
                        </div>
                        <div class="card-body pt-0">
                            <form class="border p-4" method="POST" action="{{ route('updateprofessionals', $prof->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- Personal Information -->
                                <h4>Personal Information</h4>
                                <hr>
                                <div class="d-flex">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="professionalNumber">Professional Number</label>
                                            <input type="text"
                                                class="form-control @error('professionalNumber') is-invalid @enderror"
                                                id="professionalNumber" name="professionalNumber"
                                                value="{{ $prof->professional_number }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="fullName" name="p_Name"
                                                    value="{{ $prof->name }}" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3  d-flex">
                                    <label for="profileImage" class="form-label">Profile Image:</label>
                                    <input type="file" id="profileImage" name="profileImage" accept="image/*"
                                        onchange="previewImage()" >
                                    <div class="preview-box" id="imagePreview">
                                        <img src="{{ asset('assets/professional/' . $prof->profile_image) }}" alt="Profile Image">
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="phoneNumber">Phone Number</label>
                                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber"
                                                value="{{ $prof->phone }}" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="text" class="form-control" id="email" name="p_email"
                                                value="{{ $prof->email }}" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea rows="3" class="form-control" id="address" name="p_address">{{ $prof->address }}</textarea>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="col-6 pt-2">
                                        <label for="district">Select District:</label>
                                        <select id="district" name="district" class="form-select">
                                            <option value="">Select District</option>
                                            @foreach ($dictricts as $district)
                                                <option value="{{ $district->dis_id }}" {{ $prof->district == $district->dis_id ? 'selected' : '' }}>{{ $district->dis_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6 pt-2">
                                        <label for="city">City:</label>
                                        <select id="city" name="city" class="form-select">
                                            <option value="">Select City</option>
                                            @foreach ($dictricts as $district)
                                                @foreach ($district->city as $city)
                                                    <option value="{{ $city->ds_id }}" {{ $prof->city == $city->ds_id ? 'selected' : '' }}>{{ $city->ds_name }}</option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-md-4">
                                        <label for="zip" class="form-label">Zip Code</label>
                                        <input type="text" class="form-control" id="zip" name="zip"
                                            value="{{ $prof->zip }}">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob"
                                                value="{{ $prof->dob }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="linkedin" class="form-label">LinkedIn Profile or Professional
                                                Website</label>
                                            <input type="text" class="form-control" id="linkedin" name="linkedin"
                                                value="{{ $prof->linkedin }}">
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
                                                <input type="text" class="form-control" id="jobTitle"
                                                    name="jobTitle" value="{{ $prof->job_title }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="experienceLevel" class="form-label">Experience Level</label>
                                                <select class="form-select" id="experienceLevel" name="experienceLevel">
                                                    <option value="" disabled>Select experience level</option>
                                                    <option value="entry" {{ $prof->experience_level == 'entry' ? 'selected' : '' }}>Entry</option>
                                                    <option value="mid" {{ $prof->experience_level == 'mid' ? 'selected' : '' }}>Mid-level</option>
                                                    <option value="senior" {{ $prof->experience_level == 'senior' ? 'selected' : '' }}>Senior</option>
                                                    <option value="expert" {{ $prof->experience_level == 'expert' ? 'selected' : '' }}>Expert</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="yearsOfExperience" class="form-label">Years of
                                                    Experience</label>
                                                <input type="number" class="form-control" id="yearsOfExperience"
                                                    name="yearsOfExperience" value="{{ $prof->years_of_experience }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="specializations" class="form-label">Specializations</label>
                                                <select multiple="multiple" name="specialization[]"
                                                    class="form-select selectsum1">
                                                    @foreach ($cate as $category)
                                                        <option value="{{ $category->name }}" {{ in_array($category->name, json_decode($prof->specializations, true)) ? 'selected' : '' }}>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="skills" class="form-label">Skills</label>
                                    <textarea class="form-control" id="skills" name="skills" rows="3">{{ $prof->skills }}</textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Certifications</label>
                                    <div id="certifications">
                                        @foreach (json_decode($prof->certifications, true) as $index => $certification)
                                            <div class="row certification-row">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control mb-2"
                                                        name="certificationName[]" value="{{ $certification['name'] }}" placeholder="Certification Name">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control mb-2" name="issuingAuthority[]"
                                                        value="{{ $certification['authority'] }}" placeholder="Issuing Authority">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="date" class="form-control mb-2" name="dateIssued[]"
                                                        value="{{ $certification['issued'] }}" placeholder="Date Issued">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="date" class="form-control mb-2" name="expirationDate[]"
                                                        value="{{ $certification['expires'] }}" placeholder="Expiration Date">
                                                </div>
                                                <div class="col-md-12 text-end">
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm delete-certification">Delete</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" class="btn btn-primary mt-2" id="addCertification">Add More
                                        Certification</button>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="col-md-12 ">
                                        <label for="licenseNumber" class="form-label">Professional License Number</label>
                                        <input type="text" class="form-control" id="licenseNumber"
                                            name="licenseNumber" value="{{ $prof->license_number }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-primary mt-3 mb-2">Update</button>
                                    <button type="reset" class="btn btn-secondary mt-3 mb-2">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

        $(document).ready(function() {
            // Populate district dropdown
            let districtOptions = '<option value="">Select District</option>';
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

            // Trigger change event to populate city dropdown on page load
            $('#district').trigger('change');
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
