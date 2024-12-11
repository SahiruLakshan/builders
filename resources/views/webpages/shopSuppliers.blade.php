@extends('webpages.index')
@section('content')
    <!-- /MAIN HEADER -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <!-- Leaflet Geocoder CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />


    <div class="container-fluid justify-content-center">
        <div class="text-center">
            <h3 class="display-4 text-primary font-weight-bold">BUILDERS.LK</h3>
            <h4 class="display-6 text-secondary font-weight-bold">
                Constructions Materials Suppliers/Shop Registration
            </h4>
        </div>

        <div class="custom-form-style border p-5">
            <form id="addShopForm" action="/submitshop" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col">
                        <div class="control-group form-group">
                            <label class="form-label" for="shop_name">Shop Number:(<i>This is generated automatically</i>)</label>
                            <input type="text" class="form-control" name="number"
                                id="number" placeholder="Shop Number" readonly/>
                            <div class="invalid-feedback">
                                Automaticaly Genarated  a valid shop number.
                            </div>
                        </div>
                        <script>
                            function generateServiceProviderNumber() {
                                const prefix = 'SHP';
                                const randomNumber = Math.floor(Math.random() * 1000000); 
                                const formattedNumber = prefix + randomNumber.toString().padStart(6, '0');
                                document.getElementById('number').value = formattedNumber;
                            }
                        
                            // Call the function to set the value when the page loads
                            window.onload = generateServiceProviderNumber;
                        </script>
                    </div>
                    <div class="form-group col">
                        <label for="inputPassword4">Shop Name</label>
                        <input type="text" class="form-control" name="name" id="supplier_name"
                            placeholder="Name Of The Suppliers/Shop"/>
                    </div>
                    <div class="form-group col">
                        <label for="inputPassword4">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Name Of The Suppliers/Shop"/>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress">Address</label>
                        <textarea class="form-control" id="inputAddress" rows="2" name="address"
                            placeholder="Address Of The Service Provider"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="category">Select Shop Category:</label>
                            <select id="shop_category" name="category[]" class="form-select select2"
                                multiple="multiple">
                                @foreach ($shop_catogories as $shop_catogory)
                                    <option value="{{ $shop_catogory->id }}">{{ $shop_catogory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="location" class="col-form-label">Location :</label>
                            <input type="text" name="location" id="location" class="form-control"
                                aria-describedby="locationHelp">
                        </div>
                    </div> --}}
                </div>

                <div class="row">
                    <div class="col-5">
                        <label for="district">Select District:</label>
                        <select id="district" name="district" class="form-select"></select>
                    </div>
                    <div class="col-5">
                        <label for="city">City:</label>
                        <select id="city" name="city" class="form-select disabled" disabled>
                            <option value="">Select City</option>
                        </select>
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
                                <input type="text" id="address" name="location" class="form-control-plaintext" />
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Location</button>
                    <div id="map" class="mt-3 boder-2"></div>
                </div>

                <h5 class="mt-4">Other Details</h5>
                <hr>
                <div class="row">
                    <div class="mb-3 d-flex">
                        <label for="profileImage" class="form-label">Shop Image :</label>
                        <input type="file" id="shop_img" name="shop_img" accept="image/*" onchange="previewImage()"
                            required>
                        <div class="preview-box" id="imagePreview">
                            <span>Image Preview</span>
                        </div>
                    </div>

                    {{-- <div class="col-md-4">
                        <div class="form-group">
                            <label for="telephone" class="col-form-label">Telephone :</label>
                            <input type="tel" name="telephone" id="telephone" class="form-control"
                                aria-describedby="telephoneHelp">
                        </div>
                    </div> --}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile" class="col-form-label">Mobile :</label>
                            <input type="tel" name="p_number" id="mobile" class="form-control"
                                aria-describedby="mobileHelp">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="whatsapp" class="col-form-label">WhatsApp :</label>
                            <input type="tel" name="w_number" id="whatsapp" class="form-control"
                                aria-describedby="whatsappHelp">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="facebook" class="col-form-label">FaceBook Link :</label>
                            <input type="text" name="fb_link" id="fb_link" class="form-control"
                                aria-describedby="telephoneHelp">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="start_time" class="col-form-label">Start Time :</label>
                            <input type="time" name="start_time" id="start_time" class="form-control"
                                aria-describedby="start_timeHelp">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="end_time" class="col-form-label">End Time :</label>
                            <input type="time" name="end_time" id="end_time" class="form-control"
                                aria-describedby="end_timeHelp">
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="bussiness_reg_no" class="col-form-label">Business Registration No :</label>
                        <input type="text" name="br" id="bussiness_reg_no" class="form-control"
                            aria-describedby="telephoneHelp">
                    </div>
                </div>

                <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary"
                        onclick="window.location.href='{{ url()->previous() }}'">Cancel</button>
                </div>
            </form>
        </div>
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

    @if ($message = Session::get('success'))
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    @endif

    {{-- <script>
        function postData() {
            var formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('shop_name', $('#supplier_name').val());
            formData.append('address', $('#address').val());
            formData.append('location', $('#location').val());
            formData.append('telephone', $('#telephone').val());
            formData.append('mobile', $('#mobile').val());
            formData.append('whatsapp', $('#whatsapp').val());
            formData.append('fb_link', $('#fb_link').val());
            formData.append('start_time', $('#start_time').val());
            formData.append('end_time', $('#end_time').val());
            formData.append('bussiness_reg_no', $('#bussiness_reg_no').val());
            formData.append('shop_image', $('#shop_image')[0].files[0]);
            formData.append('shop_category', $('#shop_category').val());
            formData.append('district', $('#district').val());
            formData.append('city', $('#city').val());

            $.ajax({
                url: "/addshopSuppliers",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message
                    })
                },
                error: function(xhr) {
                    var errors = "";
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        errors += value[0] + "\n";
                    });
                    Swal.fire({
                        icon: 'error',
                        title: 'error',
                        text: errors
                    })
                }
            });
        }

        $(document).ready(function() {
            $('#shop_category').select2({
                placeholder: "Select a category",
                allowClear: true
            });

            var cities = [
                @foreach ($dictricts as $dictrict)
                    {
                        'districtId': '{{ $dictrict->dis_id }}',
                        'districtName': '{{ $dictrict->dis_name }}',
                        'cities': [
                            @foreach ($dictrict->city as $city)
                                {
                                    'cityName': '{{ $city->ds_name }}',
                                    'cityId': {{ $city->ds_id }}
                                },
                            @endforeach
                        ]
                    },
                @endforeach
            ];

            let content = '<option value="">Select District</option>';
            cities.forEach((elem) => {
                content += `<option value="${elem.districtId}">${elem.districtName}</option>`;
            });
            $('#district').html(content);
            $('#district').select2();
            $('#city').select2();

            $('#district').change(function() {
                $('#city').removeClass('disabled');
                $('#city').removeAttr('disabled');
                let content = '<option value="">Select City</option>';
                cities.find((elem) => elem.districtId == $(this).val()).cities.forEach((elem) => {
                    content += `<option value="${elem.cityId}">${elem.cityName}</option>`;
                });
                $('#city').html(content);
                $('#city').select2();
            });
        });

        function previewImage() {
            const file = document.getElementById("shop_image").files[0];
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
    </script> --}}
@endsection
