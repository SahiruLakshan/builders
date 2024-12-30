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
                    <div class="card box-shadow-0 boder border-primary">
                        <div class="card-header">
                            <h4 class="card-title mb-1">Shop Infromations</h4>
                            <p class="mb-2">
                              Enter the name of the Shop you want to add
                            </p>
                          </div>
                        <!-- Display validation errors in an alert -->
                        @if ($errors->any())
                            <script>
                                let errorMessages = '';
                                @foreach ($errors->all() as $error)
                                    errorMessages += "{{ $error }}\n";
                                @endforeach

                                Swal.fire({
                                    title: 'Validation Error',
                                    text: errorMessages,
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            </script>
                        @endif
                        <div class="card-body pt-0">
                            <form id="addShopForm" action="{{url ('shop/update',$shop->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                {{-- <div class="card"> --}}
                                    <div class="card-body">
                                        {{-- <div class="main-content-label mg-b-5">Shop Infromations</div> --}}
                                        
                                        <div >
                                            <h4>Shop Information</h4>
                                            <hr>
                                            
                                                <div class="row">
                                                 {{-- metana kalin genatarate una number eka set krnna onii --}}
                                                    <div class="col-md-6">
                                                        <!-- Shop Number shoud be a uniq and it need to auto ganarate  'SN001' like that-->
                                                        <div class="control-group form-group">
                                                            <label class="form-label" for="shop_name">Shop Number:(<i>This is generated automatically</i>)</label>
                                                            <input type="text" class="form-control" name="number"
                                                                id="number" placeholder="Shop Number" readonly/>
                                                            <div class="invalid-feedback">
                                                                Automaticaly Genarated  a valid shop number.
                                                            </div>
                                                        </div>
                                                        {{-- <script>
                                                            function generateServiceProviderNumber() {
                                                                const prefix = 'SHP';
                                                                const randomNumber = Math.floor(Math.random() * 1000000); 
                                                                const formattedNumber = prefix + randomNumber.toString().padStart(6, '0');
                                                                document.getElementById('number').value = formattedNumber;
                                                            }
                                                        
                                                            // Call the function to set the value when the page loads
                                                            window.onload = generateServiceProviderNumber;
                                                        </script> --}}
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
                                                            <!-- Address -->
                                                    <div class="form-group mb-0">
                                                        <label class="form-label" for="address">Address</label>
                                                        <textarea type="text" class="form-control" name="address" id="address"
                                                        value="{{ $shop->address }}" placeholder="Address" ></textarea>
                                                        <div class="invalid-feedback">
                                                            Please enter an Address.
                                                        </div>
                                                    </div>
                                                    <!-- Email Address -->
                                                    <div class="col-md-6">
                                                        <div class="control-group form-group">
                                                            <label class="form-label" for="email_address">Email Address</label>
                                                            <input type="text" class="form-control" name="email"
                                                                id="email_address" value="{{ $shop->email }}" placeholder="Email Address" required />
                                                            <div class="invalid-feedback">
                                                                Please enter a valid email address.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            
                                                                <div class="mb-4">
                                                                    <p class="mg-b-10">Select Your Shop Categories</p>
                                                                    <select multiple="multiple" name="category[]"
                                                                        class="selectsum1">
                                                                        <option disabled selected value="">Select
                                                                            categories...</option> <!-- Placeholder option -->
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
                                                    {{-- in here not loard for the update the distric and city --}}
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
                                                </div>
                                                <div class="row">
                                                    <!-- Start Time -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="start_time">Start
                                                                Time</label>
                                                            <input type="time" class="form-control"
                                                                name="start_time" id="start_time" value="{{ $shop->start_time }}"  />
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
                                                            <input type="time" class="form-control"
                                                                name="end_time" id="close_time" value="{{ $shop->end_time }}"  />
                                                            <div class="invalid-feedback">
                                                                Please enter a valid close time.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Shop Image -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="shop_img" class="form-label">Shop Image</label>
                                                            <img src="{{ asset('assets/shop/'.$shop->shop_img) }}" height="100px" alt="Shop_Image">
                                                            
                                                            <input class="form-control" type="file" id="shop_img" name="shop_img"
                                                                id="shop_img" accept=".jpg,.jpeg,.png"  onchange="previewImage()"/>
                                                              
                                                            <small class="form-text text-muted">
                                                                Upload an image (JPEG or PNG format) representing
                                                                the Shop. Optional field.
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="preview-box mt-3" id="imagePreview">
                                                            <span>Image Preview</span>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        function previewImage() {
                                                          const file = document.getElementById("shop_img").files[0];
                                                          const previewBox = document.getElementById("imagePreview");
                                                          previewBox.innerHTML = ""; // Clear any existing content
                                    
                                                          if (file) {
                                                            const reader = new FileReader();
                                                            reader.onload = function (e) {
                                                              const img = document.createElement("img");
                                                              img.src = e.target.result;
                                                              img.style.width = "100px";
                                                              img.style.height = "100px";
                                                              img.style.objectFit = "contain"; // Ensure the image fits within the box
                                                              previewBox.appendChild(img);
                                                            };
                                                            reader.readAsDataURL(file);
                                                          } else {
                                                            previewBox.innerHTML = "<span>Image Preview</span>";
                                                          }
                                                        }
                                                      </script>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                     <!-- Shop Location -->
                                                <div class="col-md-6">
                                                    <div class="control-group form-group">
                                                        <label class="form-label" for="location">Location</label>
                                                        <input type="text" class="form-control"
                                                            name="location" value="{{ $shop->location }}" id="location"
                                                            placeholder="Enter Location" />
                                                        <div class="invalid-feedback">
                                                            Enter Your Location
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="control-group form-group">
                                                        <label class="form-label" for="fb_link">FaceBook
                                                            Link</label>
                                                        <input type="text" class="form-control" name="fb_link"
                                                            id="location" value="{{ $shop->fb_link }}" placeholder="Enter Location" />
                                                        <div class="invalid-feedback">
                                                            Enter Your FaceBook Link
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                </div>
                                               {{-- metnana  fields tikk aluten add kra --}}
                                                <h4>Contact Details</h4>
                                                <hr>
                                                <div class="row">
                                                    <!-- Phone Number -->
                                                    <div class="col-md-6">
                                                        <div class="control-group form-group">
                                                            <label class="form-label" for="phone_number">Phone Number</label>
                                                            <input type="tel" class="form-control" name="t_number"
                                                                id="phone_number" placeholder="Phone Number"  />
                                                            <div class="invalid-feedback">
                                                                Please enter a valid phone number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Phone Number -->
                                                    <div class="col-md-6">
                                                        <div class="control-group form-group">
                                                            <label class="form-label" for="phone_number">Mobile </label>
                                                            <input type="tel" class="form-control" name="p_number"
                                                                id="phone_number" value="{{ $shop->p_number }}" placeholder="Phone Number"  />
                                                            <div class="invalid-feedback">
                                                                Please enter a valid phone number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Phone Number -->
                                                    <div class="col-md-6">
                                                        <div class="control-group form-group">
                                                            <label class="form-label" for="phone_number">WhatsApp Number</label>
                                                            <input type="tel" class="form-control" name="w_number"
                                                                id="phone_number" placeholder="Phone Number"  />
                                                            <div class="invalid-feedback">
                                                                Please enter a valid phone number.
                                                            </div>
                                                        </div>
                                                    </div>
    
    
                                                    
                                                </div>
    
                                           
                                                {{-- map eke location deka update krnna denna onii --}}
                                                <div class="row">

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
                                                                <input type="text" id="address2" name="location"  class="form-control-plaintext" />
                                                              </div>
                                            
                                                            </div>
                                                          </div>
                                                          {{-- <button type="submit" class="btn btn-primary">Save Location</button> --}}
                                                        <div id="map" class="mt-3 boder-2"></div>
                                                    </div>
                                                </div>  
                                                {{-- shop name eka uda load wenna onii --}}
                                                <h4 class="mt-3">Company Details</h4> <hr>
                                                <div class="div d-flex flex-wrap">
                                                    <div class="col-md-6">
                                                        <div class="control-group form-group">
                                                            <label class="form-label" for="shop_name">Shop Name</label>
                                                            <input type="text" class="form-control" name="shop_name1"
                                                                id="shop_name1" placeholder="Shop Name"  />
                                                            <div class="invalid-feedback">
                                                                Please enter a valid shop name.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="control-group form-group">
                                                            <label class="form-label" for="br">Business
                                                                Registration</label>
                                                            <input type="text" value="{{ $shop->br }}" class="form-control" name="br"
                                                                id="br"
                                                                placeholder="Enter Business Registration" />
                                                            <div class="invalid-feedback">
                                                                Enter Your Business Registration
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- me Directors/Proprietors/Partners table eka loard wenna hadnna oni   --}}
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
                                                    <div class="col-lg-12 col-md-12">
                                                       
                                                        
                                                       
                                                            <div class="">
                                                                <button type="submit" id="submitButton" class="btn btn-primary">Submit</button>
                                                                <button type="reset" id="resetButton" class="btn btn-danger">Reset</button>
                                                            </div>
                                                      
                                                    </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Leaflet JS -->
      <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
      {{-- Dynamically syncs input values between two fields. --}}
      <script>
        const shopNameInput = document.getElementById('shop_name');
        const shopName1Input = document.getElementById('shop_name1');
      
        // Automatically copy the value from shop_name to shop_name1
        shopNameInput.addEventListener('input', () => {
          if (!shopName1Input.dataset.manualChange) {
            shopName1Input.value = shopNameInput.value;
          }
        });
      
        // Detect manual changes in shop_name1
        shopName1Input.addEventListener('input', () => {
          shopName1Input.dataset.manualChange = true; // Mark as manually changed
        });
      
        // Reset manual change flag if shop_name1 becomes empty
        shopName1Input.addEventListener('blur', () => {
          if (shopName1Input.value.trim() === '') {
            shopName1Input.dataset.manualChange = false;
            shopName1Input.value = shopNameInput.value; // Revert to auto-filled value
          }
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
</script>
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




