@extends('front')
@section('content')
    <!-- main-content -->
    <div class="main-content app-content">
      <!-- container -->
      <div class="main-container container-fluid">
        <!-- breadcrumb -->

                <!-- breadcrumb -->

                <!-- row -->
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">Shop Infromations</div>
                            <p class="mg-b-20">add your shop form here</p>
                            <div id="wizard1">
                                <h3>Shop Information</h3>
                                <section>
                                    <form action="/submitshop" method="POST" id="shopform">
                                        <div class="row">
                                            <!-- Shop Name -->
                                            <div class="col-md-6">
                                                <div class="control-group form-group">
                                                    <label class="form-label" for="shop_name">Shop Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="shop_name" placeholder="Shop Name" required />
                                                    <div class="invalid-feedback">
                                                        Please enter a valid shop name.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Email Address -->
                                            <div class="col-md-6">
                                                <div class="control-group form-group">
                                                    <label class="form-label" for="email_address">Email
                                                        Address</label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="email_address" placeholder="Email Address" required />
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
                                                        id="phone_number" placeholder="Phone Number" required />
                                                    <div class="invalid-feedback">
                                                        Please enter a valid phone number.
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Shop Image -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="shop_img" class="form-label">Shop Image</label>
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
                                            <input type="text" class="form-control" name="address" id="address"
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
                        <select name="district" id="district" class="form-control form-select select2"
                          data-bs-placeholder="Select District" required>
                          <option value="" disabled selected>
                            Select District
                          </option>
                          {{-- @foreach($districts as $district)
                          <option value="{{ $district->id }}">
                            {{ $district->name }}
                          </option>
                          @endforeach --}}
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
                                                        @foreach ($city as $cities)
                                                            <option value="{{ $cities->ds_name }}">
                                                                {{ $cities->ds_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a city.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </section>


                                <!-- <script>
                                    $(document).ready(function() {
                                        // When district is selected
                                        $('#district').change(function() {
                                            var districtId = $(this).val();
                                            if (districtId) {
                                                // AJAX request to get cities
                                                $.ajax({
                                                    url: '/get-cities/' + districtId,
                                                    type: 'GET',
                                                    dataType: 'json',
                                                    success: function(data) {
                                                        $('#city').empty(); // Clear previous options
                                                        $('#city').append(
                                                            '<option value="" disabled selected>Select City</option>');
                                                        $.each(data, function(key, value) {
                                                            $('#city').append('<option value="' + value.id + '">' +
                                                                value.name + '</option>');
                                                        });
                                                        $('#city').removeAttr('disabled'); // Enable the city dropdown
                                                    }
                                                });
                                            } else {
                                                $('#city').empty().attr('disabled', 'disabled');
                                            }
                                        });

                                        // Bootstrap validation
                                        $('form').on('submit', function(event) {
                                            var isValid = true;
                                            $(this).find('input, select').each(function() {
                                                if (!this.checkValidity()) {
                                                    isValid = false;
                                                    $(this).addClass('is-invalid');
                                                } else {
                                                    $(this).removeClass('is-invalid').addClass('is-valid');
                                                }
                                            });

                                            if (!isValid) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                        });
                                    });
                                </script> -->

                                <h3>Add Shop Catogories</h3>
                                <section>
                                    <div class="row">
                                        <h class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-4">
                                                        <p class="mg-b-10">Select Your Shops Catogories</p>
                                                        <select name="category" multiple="multiple"
                                                            onchange="console.log($(this).children(':selected').length)"
                                                            class="selectsum1">
                                                            <option selected value="volvo">Volvo</option>
                                                            <option value="saab">Saab</option>
                                                            <option value="mercedes">Mercedes</option>
                                                            <option value="audi">Audi</option>
                                                            <option selected value="bmw">BMW</option>
                                                            <option value="porsche">Porche</option>
                                                            <option value="ferrari">Ferrari</option>
                                                            <option value="mitsubishi">Mitsubishi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Start Time -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="start_time">Start Time</label>
                                                        <input type="time" class="form-control" name="start_time"
                                                            id="start_time" required />
                                                        <div class="invalid-feedback">
                                                            Please enter a valid start time.
                                                        </div>
                                                    </div>
                                                </div>

                        <!-- Close Time -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label" for="close_time">Close Time</label>
                            <input type="time" class="form-control" id="close_time" required />
                            <div class="invalid-feedback">
                              Please enter a valid close time.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Shop Name -->
                      <div class="col-md-6">
                        <div class="control-group form-group">
                          <label class="form-label" for="shop_name">Location</label>
                          <input type="text" class="form-control" id="location" placeholder="Enter Location" required />
                          <div class="invalid-feedback">
                            Enter Your Location
                          </div>
                        </div>
                      </div>
                  </div>
              </div>

              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      setTimeout(function () {
        var submitButton = document.getElementById("submit-button");
        submitButton.addEventListener("click", function () {
          console.log("submit button clicked");
        });
      }, 5000);
    </script>

    @endsection