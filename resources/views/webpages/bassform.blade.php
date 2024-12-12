@extends('webpages.index')
@section('content')
    <!-- Leaflet CSS (Free Mapping Library) -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <!-- Leaflet Geocoder CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <!-- /MAIN HEADER -->

    <div class="container-fluid  mt-5 mb-5">
        <div class="text-center">
            <h3 class="display-4 text-primary font-weight-bold">BUILDERS.LK</h3>
            <h4 class="display-6 text-secondary font-weight-bold">
                Constructions Bass Registration
            </h4>
            <hr>
        </div>
        <div class="custom-form-style  px-5 ">
            <form class="border p-4" method="POST" action=""
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
            {{-- <div class="row">
                <div class="col ">
                    <div class="form-group">
                        <div class="mb-3 d-flex">
                            <label for="profileImage" class="form-label">NIC Image:</label>
                            <input type="file" id="nicImage" name="nicImage" accept="image/*"
                                onchange="previewImage()" required>
                            <div class="preview-box" id="imagePreview2">
                                <span>NIC Image Preview</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <div class="mb-3 d-flex">
                            <label for="profileImage" class="form-label">Back Side NIC Image:</label>
                            <input type="file" id="backNicImage" name="backNicImage" accept="image/*"
                                onchange="previewImage()" required>
                            <div class="preview-box" id="imagePreview3">
                                <span>Back Side NIC Image Preview</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col">
                <div class="mb-3 ">
                    <label for="profileImage" class="form-label">Profile Image:</label>
                    <input type="file" id="profileImage" name="profileImage" accept="image/*"
                        onchange="previewImage()" required>
                    <div class="preview-box" id="imagePreview">
                        <span>Image Preview</span>
                    </div>

                </div>
            </div> --}}
            <hr>
            <div class="row md-3 ">
                <div class="col">
                    <div class="form-group">
                        <div class="mb-3 d-flex">
                            <label for="nicImage" class="form-label">NIC Image:</label>
                            <input type="file" id="nicImage" name="nicImage" accept="image/*" capture="enviorement"
                                onchange="previewImage(this)" required>
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
                                onchange="previewImage(this)" required>
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
                            onchange="previewImage(this)" required>
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
                            placeholder="Enter Email Address" />
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
                                name="jobTitle" placeholder="e.g., Architect, Engineer" required>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="experienceLevel" class="form-label">Experience Level</label>
                            <select class="form-select" id="experienceLevel" name="experienceLevel"
                                required>
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
                            <label for="specialization" class="form-label">Specializations</label>
                            <select multiple="multiple" name="specialization[]" id="specialization" class="form-select">
                                {{-- Dynamic options will be populated here --}}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="workingArea" class="form-label">Working Area</label>
                            <select multiple="multiple" name="workingArea[]" id="workingArea" class="form-select">
                                {{-- Dynamic options will be populated here --}}
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
              <script>
                $(document).ready(function () {
                    // Initialize Select2 for Specializations
                    $('#specialization').select2({
                        placeholder: "Select Specializations", // Placeholder text
                        allowClear: true, // Allow clearing selected options
                        width: '100%', // Ensures the dropdown matches the input width
                        // ajax: {
                        //     url: '/get-specializations', // Route to fetch specializations
                        //     dataType: 'json',
                        //     processResults: function (data) {
                        //         return {
                        //             results: data.map(item => ({
                        //                 id: item.id,
                        //                 text: item.name
                        //             }))
                        //         };
                        //     }
                        // }
                    });

                    // Initialize Select2 for Working Area
                    $('#workingArea').select2({
                        placeholder: "Select Working Areas",
                        allowClear: true,
                        width: '100%',
                        // ajax: {
                        //     url: '/get-working-areas', // Route to fetch working areas
                        //     dataType: 'json',
                        //     processResults: function (data) {
                        //         return {
                        //             results: data.map(item => ({
                        //                 id: item.id,
                        //                 text: item.name
                        //             }))
                        //         };
                        //     }
                        // }
                    });
                });

             
              </script>
            
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
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <script>
        // Initialize the map
        const map = L.map('map').setView([6.9271, 79.8612], 13); // Default to Colombo, Sri Lanka

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Initialize a marker variable
        let marker;

        // Function to add a marker on the map and update form fields
        function addMarker(lat, lng, address = '') {
            if (marker) {
                marker.setLatLng([lat, lng]); // Update the marker position
            } else {
                marker = L.marker([lat, lng]).addTo(map); // Create a new marker
            }
            map.setView([lat, lng], 13); // Center the map on the selected location

            // Update the form fields
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;

            // If address is not provided, clear the address field
            document.getElementById('address').value = address || 'Fetching address...';

            // Reverse geocode to get the address if not provided
            if (!address) {
                fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`)
                    .then(response => response.json())
                    .then(data => {
                        const display_name = data.display_name || 'Address not found';
                        document.getElementById('address').value = display_name;
                        marker.bindPopup(display_name).openPopup();
                    })
                    .catch(err => console.error('Error fetching address:', err));
            } else {
                marker.bindPopup(address).openPopup();
            }
        }

        // Set up the search input
        const searchInput = document.getElementById('search');
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value;

            if (query.length > 2) {
                // Fetch results from Nominatim (free geocoding API)
                fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${query}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.length > 0) {
                            const {
                                lat,
                                lon,
                                display_name
                            } = data[0];
                            addMarker(lat, lon, display_name);
                        } else {
                            console.log('No results found');
                        }
                    })
                    .catch(err => console.error('Error fetching location:', err));
            }
        });

        // Geolocation: Detect user location
        navigator.geolocation.getCurrentPosition(
            (position) => {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;
                addMarker(lat, lng, 'Your Current Location');
            },
            () => {
                console.log('Unable to retrieve your location.');
            }
        );

        // Event listener for map clicks
        map.on('click', (e) => {
            const lat = e.latlng.lat;
            const lng = e.latlng.lng;

            // Add marker and fetch address for clicked location
            addMarker(lat, lng);
        });
    </script>

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
              <td><input type="file" class="form-control" name="projectImage[]" accept="image/*" capture="camera" /></td>
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
            .addEventListener("submit", function(event) {
                event.preventDefault();
                // Gather form data for submission here (can use FormData for AJAX submission)
                alert("Form submitted with project data!");
            });
    </script>
    {{-- <script>
        // Prepare district and city data in JavaScript from Blade data
        var cities = [
            @foreach ($districts as $district)
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
                    $('#city').html('<option value="">Select City</option>').prop("disabled", true)
                        .addClass('disabled');
                }
            });
        });
    </script> --}}

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
