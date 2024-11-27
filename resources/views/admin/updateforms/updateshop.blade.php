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
            <!-- breadcrumb -->

            <!-- breadcrumb -->
            <div class="row row-sm  mt-5 d-flex justify-content-center align-items-center">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <!-- row -->
                    <div class="col-lg-12 col-md-12">
                        <form id="addShopForm" action="{{url ('shop/update',$shop->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-body">
                                    <div class="main-content-label mg-b-5">Update Shop Infromations</div>
                                    <p class="mg-b-20">add your shop form here</p>
                                    <div id="wizard1">
                                        <h3>Shop Information</h3>
                                        <section>
                                            <div class="row">
                                                <!-- Shop Number -->
                                                <div class="col-md-6">
                                                    <!-- Shop Number shoud be a uniq and it need to auto ganarate  'SN001' like that-->
                                                    <div class="control-group form-group">
                                                        <label class="form-label" for="shop_name">Shop Number:</label>
                                                        <input type="text" class="form-control" name="snumber"
                                                            id="shop_number" placeholder="Shop Number" required />
                                                        <div class="invalid-feedback">
                                                            Automaticaly Genarated  a valid shop number.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Shop Name -->
                                                <div class="col-md-6">
                                                    <div class="control-group form-group">
                                                        <label class="form-label" for="shop_name">Shop Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            id="shop_name" value="{{ $shop->name }}" placeholder="Shop Name" required />
                                                        <div class="invalid-feedback">
                                                            Please enter a valid shop name.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Email Address -->
                                                <div class="col-md-6">
                                                    <div class="control-group form-group">
                                                        <label class="form-label" for="email_address">Email Address</label>
                                                        <input type="email" class="form-control" name="email"
                                                            id="email_address" value="{{ $shop->email }}" placeholder="Email Address" required />
                                                        <div class="invalid-feedback">
                                                            Please enter a valid email address.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Phone Number -->
                                                <div class="col-md-6">
                                                    <div class="control-group form-group">
                                                        <label class="form-label" for="phone_number">Phone Number</label>
                                                        <input type="tel" class="form-control" name="p_number"
                                                            id="phone_number" value="{{ $shop->p_number }}" placeholder="Phone Number" required />
                                                        <div class="invalid-feedback">
                                                            Please enter a valid phone number.
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <!-- Shop Image -->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="shop_img" class="form-label">Shop Image</label>
                                                        <img src="{{ asset('assets/shop/'.$shop->shop_img) }}" height="100px" alt="Shop_Image">
                                                        <input class="form-control" type="file" name="shop_img"
                                                            id="shop_img" accept=".jpg,.jpeg,.png" />
                                                        <small class="form-text text-muted">
                                                            Upload an image (JPEG or PNG format) representing
                                                            the Shop. Optional field.
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Address -->
                                            <div class="control-group form-group mb-0">
                                                <label class="form-label" for="address">Address</label>
                                                <input type="text" class="form-control" value="{{ $shop->address }}" name="address" id="address"
                                                    placeholder="Address" required />
                                                <div class="invalid-feedback">
                                                    Please enter an address.
                                                </div>
                                            </div>

                                            <div class="row">
                                                <!-- Select District -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="district">Select District</label>
                                                        <select name="district" id="district"
                                                            class="form-control form-select select2"
                                                            data-bs-placeholder="Select District" required>
                                                            <option value="" disabled selected>
                                                                Select District
                                                            </option>
                                                            @php
																$select = $shop->district
															@endphp
                                                            @foreach ($districts as $district)
                                                                <option value="{{ $district->dis_id }}" {{$district->dis_id == $select ? 'selected':''}}>
                                                                    {{ $district->dis_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a district.
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Select City -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="city">Select City</label>
                                                        <select name="city" id="city"
                                                            class="form-control form-select select2"
                                                            data-bs-placeholder="Select City" required>
                                                            @php
																$select = $shop->city
															@endphp
                                                            @foreach ($city as $cities)
                                                                <option value="{{ $cities->ds_id }}" {{$cities->ds_id == $select ? 'selected':''}}>
                                                                    {{ $cities->ds_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a city.
                                                        </div>
                                                    </div>
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
                                                            <input type="text" id="address2" name="loacatoin"  class="form-control-plaintext" />
                                                          </div>
                                        
                                                        </div>
                                                      </div>
                                                      <button type="submit" class="btn btn-primary">Save Location</button>
                                                    <div id="map" class="mt-3 boder-2"></div>
                                                </div>
                                            </div>
                                        </section>

                                        <h3>Add Shop Catogories</h3>
                                        <section>
                                            <div class="row">
                                                <h class="col-lg-12 col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="mb-4">
                                                                <p class="mg-b-10">Select Your Shops Categories</p>
                                                                <select multiple="multiple" name="category[]" class="selectsum1">
                                                                    @foreach ($category as $cate)
                                                                        <option value="{{ $cate->name }}"
                                                                            @if (in_array($cate->name, $selectedCategories)) selected @endif>
                                                                            {{ $cate->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <!-- Start Time -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="start_time">Start
                                                                    Time</label>
                                                                <input type="time" value="{{ $shop->start_time }}" class="form-control"
                                                                    name="start_time" id="start_time" required />
                                                                <div class="invalid-feedback">
                                                                    Please enter a valid start time.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Close Time -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="close_time">Close
                                                                    Time</label>
                                                                <input type="time" value="{{ $shop->end_time }}" class="form-control"
                                                                    name="end_time" id="close_time" required />
                                                                <div class="invalid-feedback">
                                                                    Please enter a valid close time.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!-- Shop Name -->
                                                        <div class="col-md-6">
                                                            <div class="control-group form-group">
                                                                <label class="form-label" for="location">Location</label>
                                                                <input type="text" class="form-control"
                                                                    name="location" value="{{ $shop->location }}" id="location"
                                                                    placeholder="Enter Location" required />
                                                                <div class="invalid-feedback">
                                                                    Enter Your Location
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="control-group form-group">
                                                                <label class="form-label" for="fb_link">FaceBook
                                                                    Link</label>
                                                                <input type="text" value="{{ $shop->fb_link }}" class="form-control" name="fb_link"
                                                                    id="location" placeholder="Enter Location"
                                                                    required />
                                                                <div class="invalid-feedback">
                                                                    Enter Your FaceBook Link
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <div class="control-group form-group">
                                                              <label class="form-label" for="br">Business Registration</label>
                                                              <input type="text" value="{{ $shop->br }}" class="form-control" name="br"
                                                                  id="br" placeholder="Enter Business Registration"
                                                                  required />
                                                              <div class="invalid-feedback">
                                                                  Enter Your Business Registration
                                                              </div>
                                                          </div>
                                                      </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Leaflet JS -->
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
     <script>
         window.addEventListener("load", function() {
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

                 document.getElementById('address2').value = address || 'Fetching address...';

                 if (!address) {
                     fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`)
                         .then(response => response.json())
                         .then(data => {
                             const display_name = data.display_name || 'Address not found';
                             document.getElementById('address2').value = display_name;
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
         });
     </script>
    {{-- <script>
      setTimeout(function () {
        var submitButton = document.getElementById("submit-button");
        submitButton.addEventListener("click", function () {
          console.log("submit button clicked");
        });
      }, 5000);
    </script> --}}
@endsection
