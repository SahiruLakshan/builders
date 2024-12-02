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
                Constructions Service Provides Registration
            </h4>
            <hr>
        </div>
        <div class="custom-form-style  px-5 ">
            <form action="/addserviceprovider/store" method="POST" class="border p-4">
                @csrf
                <div class="row">
                    <div class="form-group col">
                        <div class="form-group">
                            <label for="serviceProviderNumber">ServiceProvider Number</label>
                            <input type="text" class="form-control" id="number" name="number"
                                placeholder="Service Provider No.." readonly>
                        </div>

                        <script>
                            function generateServiceProviderNumber() {
                                const prefix = 'SP';
                                const randomNumber = Math.floor(Math.random() * 1000000);
                                const formattedNumber = prefix + randomNumber.toString().padStart(6, '0');
                                document.getElementById('number').value = formattedNumber;
                            }

                            // Call the function to set the value when the page loads
                            window.onload = generateServiceProviderNumber;
                        </script>
                    </div>

                    <div class="form-group col">
                        <label for="inputPassword4">Name</label>
                        <input type="text" class="form-control" id="s_name" name="s_name"
                            placeholder="Name Of The Service Provider" />
                    </div>
                    <div class="col">
                        <label for="maxProjectValue">Grade </label>
                        <input type="text" class="form-control" id="grade" name="grade"
                            placeholder="Grade Of The Service Provider" />
                    </div>
                </div>

                <div class="row">

                    <div class="col-12">
                        <label for="inputAddress">Address</label>
                        <textarea class="form-control" id="inputAddress" rows="3" name="inputAddress"
                            placeholder="Address Of The Service Provider"></textarea>
                    </div>
                </div>
                {{-- get form distrc tble and city table --}}
                <div class="row">
                    <div class="col-4">
                        <label for="category">Select Category:</label>
                        <select id="category" name="category" class="form-select">
                            <option value="" disabled selected>Select Your Service Category</option>
                            @foreach ($services as $service)
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


                <h5>Contact Details</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telephone" class="col-form-label">Telephone :</label>
                            <input type="tel" id="telephone" name="telephone" class="form-control"
                                aria-describedby="telephoneHelp">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile" class="col-form-label">Mobile :</label>
                            <input type="tel" id="mobile" name="mobile" class="form-control"
                                aria-describedby="mobileHelp">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="whatsapp" class="col-form-label">WhatsApp :</label>
                            <input type="tel" id="whatsapp" name="whatsapp" class="form-control"
                                aria-describedby="whatsappHelp">
                        </div>
                    </div>
                </div>


                <h5>Company Details</h5>
                <hr>
                <div class="row align-items-space-between">
                    <div class="col">
                        <label for="inputPassword6" class="col-form-label">Name :</label>
                        <input type="text" id="companyName" name="companyName" class="form-control"
                            aria-describedby="telephoneHelp">
                    </div>
                    <div class="col">
                        <label for="inputPassword6" class="col-form-label">Business Registration No :</label>
                        <input type="text" id="businessRegNoo" name="businessRegNo" class="form-control"
                            aria-describedby="telephoneHelp">
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label for="noOfEmp" class="col-form-label">Number of Employees :</label>
                        <input type="number" id="noOfEmp" name="noOfEmp" class="form-control"
                            aria-describedby="noOfEmpHelp">
                    </div>
                    <div class="col-4">
                        <label for="employeesQualification" class="col-form-label">Employees Qualification :</label>
                        <input type="text" id="employeesQualification" name="employeesQualification"
                            class="form-control" aria-describedby="employeesQualificationHelp">
                    </div>
                    <div class="col-4">
                        <label for="maxProjectValue" class="col-form-label">Maximum Project Value :</label>
                        <input type="text" id="maxProjectValue" name="maxProjectValue" class="form-control"
                            aria-describedby="maxProjectValueHelp">
                    </div>
                </div>

                <div class="border p-4">
                    <h5>Search and Select Location</h5>
                    <input type="text" id="search" placeholder="Search for a location (e.g., city, address)" />

                    <!-- Form to Display and Submit Location -->
                    {{-- <form id="locationForm" method="POST" action="/save-location">
              @csrf <!-- Laravel CSRF Token --> --}}
                    <div class="d-flex">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="latitude">Latitude:</label>
                                <input type="text" id="latitude" name="latitude" class="form-control-plaintext" />
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="longitude">Longitude:</label>
                                <input type="text" id="longitude" name="longitude" class="form-control-plaintext" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" id="address" name="address" class="form-control-plaintext" />
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Location</button>
                    <div id="map" class="mt-3 boder-2"></div>
                </div>

                <h5>Project History</h5>
                <hr>
                <div class="table-responsive">
                    <table class="table" id="projectTable">
                        <thead>
                            <tr>
                                <th scope="col">Project Name</th>
                                <th scope="col">Location</th>
                                <th scope="col">Value</th>
                                <th scope="col">Contact Person</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="projectHistory">
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="projectName[]"
                                        placeholder="Project Name" />
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="projectLocation[]"
                                        placeholder="Location" />
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="projectValue[]"
                                        placeholder="Value" />
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="contactPerson[]"
                                        placeholder="Contact Person" />
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="contactNumber[]"
                                        placeholder="Contact Number" />
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" onclick="removeRow(this)">
                                        Remove
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button type="button" class="btn btn-success" onclick="addProjectRow()">
                    Add Project
                </button>
                <button type="submit" class="btn btn-primary">Submit</button>
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
    <script>
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
