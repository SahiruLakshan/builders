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
                        <h4 class="card-title mb-1">Add New Services Provider </h4>
                        <p class="mb-2">
                            Enter the name of the Service Provider you want to add
                        </p>
                    </div>
                    <div class="card-body pt-0">
                        {{-- <form class="border p-4" method="POST" action="{{ route('addserviceprovider.store') }}"> --}}
                        <form class="border p-4" method="POST" action="/addserviceprovider/store">
                            @csrf
                            <div class="d-flex">
                                <div class="form-group">
                                    <!--this one need to automaticaly genarate 'SP001' like that -->
                                    <label for="serviceProviderNumber">ServiceProvider Number </label>
                                    <input type="text" class="form-control" id="s_number" name="s_number" placeholder=" Service Provider No.." />
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputPassword4">Name</label>
                                        <input type="text" class="form-control" id="s_name" name="s_name"
                                            placeholder="Name Of The Service Provider" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="maxProjectValue">Grade </label>
                                        <input type="text" class="form-control" id="grade" name="grade"
                                            placeholder="Grade Of The Service Provider" />
                                    </div>
                                </div>
                               
                               
                            </div>
    
                            <div class="row">
                                <div class="col-12">
                                    <label for="inputAddress">Address</label>
                                    <textarea class="form-control" id="inputAddress" name="inputAddress" rows="3"
                                        placeholder="Address Of The Service Provider"></textarea>
                                </div>
                            </div>
    
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
                                <div class="border p-4 mt-3">
                                    <h5>Search and Select Location</h5>
                                    <input type="text" id="search" placeholder="Search for a location (e.g., city, address)" />
                                    
                                    <!-- Form to Display and Submit Location -->
                                    {{-- <form id="locationForm" method="POST" action="/save-location">
                                      @csrf <!-- Laravel CSRF Token --> --}}
                                      <div class="d-flex">
                                        <div class="col-md-4" >
                                          <div class="form-group">
                                            <label for="latitude">Latitude:</label>
                                            <input type="text" id="latitude" name="latitude"  class="form-control-plaintext" />
                                          </div>
                          
                                        </div>
                        
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <label for="longitude">Longitude:</label>
                                            <input type="text" id="longitude" name="longitude"  class="form-control-plaintext" />
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input type="text" id="address" name="loacatoin1"  class="form-control-plaintext" />
                                          </div>
                        
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Save Location</button>
                                    <div id="map" class="mt-3 boder-2"></div>
                                  </div>
                                      <!-- Leaflet JS -->
                                    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
                                    <script>
                                        const map = L.map('map').setView([6.9271, 79.8612], 13);

                                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                            attribution: '© OpenStreetMap contributors'
                                        }).addTo(map);

                                        let marker;

                                        function addMarker(lat, lng, address = '') {
                                            if (marker) {
                                                marker.setLatLng([lat, lng]);
                                            } else {
                                                marker = L.marker([lat, lng]).addTo(map);
                                            }
                                            map.setView([lat, lng], 13);

                                            document.getElementById('latitude').value = lat;
                                            document.getElementById('longitude').value = lng;

                                            document.getElementById('address').value = address || 'Fetching address...';

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

                                        const searchInput = document.getElementById('search');
                                        searchInput.addEventListener('input', (e) => {
                                            const query = e.target.value;

                                            if (query.length > 2) {
                                                fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${query}`)
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        if (data.length > 0) {
                                                            const { lat, lon, display_name } = data[0];
                                                            addMarker(lat, lon, display_name);
                                                        } else {
                                                            console.log('No results found');
                                                        }
                                                    })
                                                    .catch(err => console.error('Error fetching location:', err));
                                            }
                                        });

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

                                        map.on('click', (e) => {
                                            const lat = e.latlng.lat;
                                            const lng = e.latlng.lng;
                                            addMarker(lat, lng);
                                        });
                                    </script>
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
                            </script>
    
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
                            <div class="row align-items-space-between">
                                <div class="col">
                                    <label for="inputPassword6" class="col-form-label">Name :</label>
                                    <input type="text" id="companyName" name="companyName" class="form-control"
                                        aria-describedby="companyNameHelp">
                                </div>
                                <div class="col">
                                    <label for="businessRegNo" class="col-form-label">Business Registration No :</label>
                                    <input type="text" id="businessRegNo" name="businessRegNo" class="form-control"
                                        aria-describedby="businessRegNoHelp">
                                </div>
                            </div>
    
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
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
@endsection

