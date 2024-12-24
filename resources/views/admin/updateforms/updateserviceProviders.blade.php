@extends('admin.sidebar')
@section('content')

<style>
#map {
    height: 500px;
    width: 100%;
    margin-top: 20px;
}
#search {
    margin: 10px 0;
    padding: 10px;
    font-size: 14px;
    width: 100%;
    max-width: 300px;
}
</style>
<div class="main-content app-content">
    <!-- container -->
    <div class="main-container container-fluid">
        <div class="row row-sm  mt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Update Services Provider </h4>
                        <p class="mb-2">
                            Enter the name of the Service Provider you want to add
                        </p>
                    </div>
                    <div class="card-body pt-0">
                        {{-- <form class="border p-4" method="POST" action="{{ route('addserviceprovider.store') }}"> --}}
                        <form class="border p-4" method="POST" action="{{ route('serviceprovider.edit', $serviceProvider->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="d-flex">
                                <div class="form-group">
                                    <label for="serviceProviderNumber">ServiceProvider Number</label>
                                    <input type="text" class="form-control" id="number" name="number" value="{{ $serviceProvider->number }}" readonly>
                                </div>
                                
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputPassword4">Name</label>
                                        <input type="text" class="form-control" id="s_name" name="s_name" value="{{ $serviceProvider->s_name }}" />
                                    </div>
                                </div>
                             
                                <div class="col">
                                    <div class="form-group">
                                        <label for="maxProjectValue">Grade </label>
                                        <input type="text" class="form-control" id="grade" name="grade" value="{{ $serviceProvider->grade }}" />
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-12">
                                    <label for="inputAddress">Address</label>
                                    <textarea class="form-control" id="inputAddress" name="inputAddress" rows="3">{{ $serviceProvider->address }}</textarea>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-4">
                                    <label for="category">Select Category: <span class="text-danger">*</span></label>
                                    <select id="category" name="category[]" class="form-select" multiple required>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}" {{ in_array($service->id, json_decode($serviceProvider->category_id)) ? 'selected' : '' }}>{{ $service->servicename }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-4 pt-2">
                                    <label for="district">Select District:</label>
                                    <select id="district" name="district" class="form-select">
                                        <option value="">Select District</option>
                                        @foreach ($dictricts as $district)
                                            <option value="{{ $district->dis_id }}" {{ $serviceProvider->district_id == $district->dis_id ? 'selected' : '' }}>{{ $district->dis_name }}</option>
                                        @endforeach
                                    </select>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            document.getElementById('district').value = "{{ $serviceProvider->district_id }}";
                                        });
                                    </script>
                                </div>
                                <div class="col-4 pt-2">
                                    <label for="city">City:</label>
                                    <select id="city" name="city" class="form-select">
                                        <option value="">Select City</option>
                                        @foreach ($dictricts as $district)
                                            @foreach ($district->city as $city)
                                                <option value="{{ $city->ds_id }}" {{ $serviceProvider->city_id == $city->ds_id ? 'selected' : '' }}>{{ $city->ds_name }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                                <div class="border p-4 mt-3">
                                    <h5>Search and Select Location</h5>
                                    <input type="text" id="search" placeholder="Search for a location (e.g., city, address)" />
                                    
                                    <div class="d-flex">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="latitude">Latitude:</label>
                                                <input type="text" id="latitude" name="latitude" class="form-control-plaintext" value="{{ $serviceProvider->latitude }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="longitude">Longitude:</label>
                                                <input type="text" id="longitude" name="longitude" class="form-control-plaintext" value="{{ $serviceProvider->longitude }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="address">Address:</label>
                                                <input type="text" id="address" name="location1" class="form-control-plaintext" value="{{ $serviceProvider->address }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Location</button>
                                    <div id="map" class="mt-3 border-2"></div>
                                </div>
                                
                                <!-- Leaflet JS -->
                                <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
                                <script>
                                    // Initialize map centered on a default location (Colombo, Sri Lanka)
                                    const map = L.map('map').setView([{{ $serviceProvider->latitude }}, {{ $serviceProvider->longitude }}], 13);
                                
                                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                        attribution: '© OpenStreetMap contributors'
                                    }).addTo(map);
                                
                                    let marker = L.marker([{{ $serviceProvider->latitude }}, {{ $serviceProvider->longitude }}]).addTo(map);
                                
                                    // Function to update the marker and input fields
                                    function updateLocationFields(lat, lng, address = '') {
                                        if (marker) {
                                            marker.setLatLng([lat, lng]);
                                        } else {
                                            marker = L.marker([lat, lng]).addTo(map);
                                        }
                                        map.setView([lat, lng], 13);
                                
                                        // Update Latitude and Longitude fields
                                        document.getElementById('latitude').value = lat;
                                        document.getElementById('longitude').value = lng;
                                        document.getElementById('address').value = address || 'Fetching address...';
                                
                                        // Fetch address if not provided
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
                                
                                    // Auto-track the user's current location if available
                                    navigator.geolocation.watchPosition(
                                        (position) => {
                                            const lat = position.coords.latitude;
                                            const lng = position.coords.longitude;
                                            updateLocationFields(lat, lng, 'Your Current Location');
                                        },
                                        () => {
                                            console.log('Unable to retrieve your location.');
                                        },
                                        {
                                            enableHighAccuracy: true, // Attempt to get a more accurate location
                                            timeout: 10000, // Wait up to 10 seconds for location data
                                            maximumAge: 0 // Do not use cached location data
                                        }
                                    );
                                
                                    // Search for a location and place a marker
                                    const searchInput = document.getElementById('search');
                                    searchInput.addEventListener('input', (e) => {
                                        const query = e.target.value;
                                        if (query.length > 2) {
                                            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${query}`)
                                                .then(response => response.json())
                                                .then(data => {
                                                    if (data.length > 0) {
                                                        const { lat, lon, display_name } = data[0];
                                                        updateLocationFields(lat, lon, display_name);
                                                    } else {
                                                        console.log('No results found');
                                                    }
                                                })
                                                .catch(err => console.error('Error fetching location:', err));
                                        }
                                    });
                                
                                    // Allow user to select a location by clicking on the map
                                    map.on('click', (e) => {
                                        const lat = e.latlng.lat;
                                        const lng = e.latlng.lng;
                                        updateLocationFields(lat, lng);
                                    });
                                </script>
                                
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
                                    // console.log("🚀 ~ $district:", cities)
        
                                    $(document).ready(function() {
        
                                        // Populate district dropdown
                                        let districtOptions = '<option value="">Select District</option>';
                                        cities.forEach((elem) => {
                                            districtOptions += `<option value="${elem.districtId}">${elem.districtName}</option>`;
                                        });
                                        // console.log("🚀 ~ $ ~ districtOptions:", $('#district'))
        
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
                                    function previewImage() {
                                        const file = document.getElementById("providerImage").files[0];
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
    
                            <h5>Contact Details</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPassword4">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $serviceProvider->email }}" placeholder="Email Of The Service Provider" />
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telephone" class="col-form-label">Telephone:</label>
                                        <input type="tel" id="telephone" name="telephone" class="form-control" value="{{ $serviceProvider->telephone }}" aria-describedby="telephoneHelp">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile" class="col-form-label">Mobile :</label>
                                        <input type="tel" id="mobile" name="mobile" class="form-control" value="{{ $serviceProvider->mobile }}" aria-describedby="mobileHelp">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="whatsapp" class="col-form-label">WhatsApp :</label>
                                        <input type="tel" id="whatsapp" name="whatsapp" class="form-control" value="{{ $serviceProvider->whatsapp }}" aria-describedby="whatsappHelp">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="web" class="col-form-label">Web Link:</label>
                                        <input type="url" id="web" name="web" class="form-control" value="{{ $serviceProvider->web }}" aria-describedby="webHelp">
                                    </div>
                                </div>
                            </div>
    
                            <h5>Company Details</h5>
                            <div class="row align-items-space-between">
                                <div class="col">
                                    <div class="mb-3 d-flex">
                                        <label for="profileImage" class="form-label">Company Logo:</label>
                                        <input type="file" id="providerImage" name="providerImage" accept="image/*" onchange="previewImage()">
                                        <div class="preview-box" id="imagePreview">
                                          <span>Image Preview</span>
                                          @if($serviceProvider->logo)
                                              <img src="{{ asset($serviceProvider->logo) }}" alt="Company Logo">
                                          @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword6" class="col-form-label">Name :</label>
                                    <input type="text" id="companyName" name="companyName" class="form-control" value="{{ $serviceProvider->company_name }}" aria-describedby="companyNameHelp">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="businessRegNo" class="col-form-label">Business Registration No :</label>
                                    <input type="text" id="businessRegNo" name="businessRegNo" class="form-control" value="{{ $serviceProvider->business_reg_no }}" aria-describedby="businessRegNoHelp">
                                </div>
                               
                                <!-- Registrations File Upload -->
                                <div class="form-group col-md-6">
                                    <label for="registrations">Registrations</label>
                                    <input type="file" name="registrations" id="registrations" class="form-control" accept=".pdf,.doc,.docx,.jpg,.png">
                                    @if($serviceProvider->registrations)
                                        <a href="{{ asset($serviceProvider->registrations) }}" target="_blank">View Current File</a>
                                    @endif
                                </div>

                                <!-- Certifications File Upload -->
                                <div class="form-group col-md-6">
                                    <label for="certifications">Certifications</label>
                                    <input type="file" name="certifications" id="certifications" class="form-control" accept=".pdf,.doc,.docx,.jpg,.png">
                                    @if($serviceProvider->certifications)
                                        <a href="{{ asset($serviceProvider->certifications) }}" target="_blank">View Current File</a>
                                    @endif
                                </div> 
                            </div>
                             <!-- Dynamic Providing Services Section -->
                            <div class="form-group">
                                <label for="providing_services">Providing Services</label>
                                <div id="services-container">
                                    @foreach(json_decode($serviceProvider->services) as $service)
                                        <div class="service-row mb-2 d-flex align-items-center">
                                            <input type="text" name="service_name[]" class="form-control me-2" value="{{ $service }}" placeholder="Service Name">
                                            <button type="button" class="btn btn-danger btn-sm remove-service">Remove</button>
                                        </div>
                                    @endforeach
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
                                    @foreach(json_decode($serviceProvider->directors) as $index => $director)
                                        <tr>
                                          <td>
                                            <input type="text" name="directors[{{ $index }}][name]" class="form-control" value="{{ $director->name }}" placeholder="Enter Name" required />
                                          </td>
                                          <td>
                                            <input type="text" name="directors[{{ $index }}][contact]" class="form-control" value="{{ $director->contact }}" placeholder="Enter Contact Number" required />
                                          </td>
                                          <td>
                                            <button type="button" class="btn btn-danger btn-sm remove-row">Remove</button>
                                          </td>
                                        </tr>
                                    @endforeach
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
                                                      <input type="text" name="directors[${rowCount}][name]" class="form-control" placeholder="Enter Name" required />
                                                    </td>
                                                    <td>
                                                      <input type="text" name="directors[${rowCount}][contact]" class="form-control" placeholder="Enter Contact Number" required />
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
                                    <input type="number" id="noOfEmp" name="noOfEmp" class="form-control" value="{{ $serviceProvider->no_of_employees }}" aria-describedby="noOfEmpHelp">
                                </div>
                                <div class="col-4">
                                    <label for="employeesQualification" class="col-form-label">Employees Qualification :</label>
                                    <input type="text" id="employeesQualification" name="employeesQualification" class="form-control" value="{{ $serviceProvider->employees_qualification }}" aria-describedby="employeesQualificationHelp">
                                </div>
                                <div class="col-4">
                                    <label for="maxProjectValue" class="col-form-label">Maximum Project Value :</label>
                                    <input type="text" id="maxProjectValue" name="maxProjectValue" class="form-control" value="{{ $serviceProvider->max_project_value }}" aria-describedby="maxProjectValueHelp">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                            <button type="reset" class="btn btn-secondary mt-3 ms-2">Cancel</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

