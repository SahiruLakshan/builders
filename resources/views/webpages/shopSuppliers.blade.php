@extends('webpages.index')
@section('content')
    <!-- /MAIN HEADER -->
    <style>
      .border {
        border: 1px solid #161515;
        border-radius: 5px;
        padding: 10px;
      }
      .custom-form-style {
        background-color: #ffffff;
        border: 2px solid #0d0d0d;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 8px; /* Optional: Adds rounded corners */
      }

    </style>
    <div class="container-fluid " >      
      <div class="text-center">
        <h3 class="display-4 text-primary font-weight-bold">BUILDERS.LK</h3>
        <h4 class="display-6 text-secondary font-weight-bold">
          Constructions Materials Suppliers/Shop Registration 
        </h4>
      </div>
      <div class="custom-form-style border px-5">
                    {{-- <form class="custom-form-style border p-4"   >  --}}
              @csrf
              <div class="row">
                <div class="form-group col">
                  <label for="inputPassword4">Shop Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="supplier_name"
                    placeholder="Name Of The Suppliers/Shop"
                    name="shop_name"
                  />
                </div>
                <div class="col-12">
                  <label for="inputAddress">Address</label>
                  <textarea
                    class="form-control"
                    id="inputAddress"
                    rows="2" name="address"
                    placeholder="Address Of The Service Provider"
                  ></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-4">
                  <div class="form-group" >
                    <label for="category">Select Shop Category:</label>
                  <select id="shop_category" name="shop_category[]" class="form-select select2" multiple="multiple">
                      {{-- Populating categories dynamically from the controller --}}
                      @foreach ($shop_catogories as $shop_catogory)
                          <option value="{{ $shop_catogory->id }}">{{ $shop_catogory->name }}</option>
                      @endforeach
                  </select>
                  </div>
                  
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="location" class="col-form-label">Location :</label>
                  <input type="text" name="location" id="location" class="form-control" aria-describedby="locationHelp">
                </div>
              </div>
                  {{-- <div class="col-4">
                  <label for="category">Select Selling Brands:</label>
                  <select id="brand_category" name="brand" class="form-select select2">
                    @foreach ($brands as $brand)
                      <option value="{{ $brand->id }}">{{ $brand->b_name }}</option>
                    @endforeach
                    
                  </select>
                </div> --}}
                {{-- <div class="col-10">

                </div> --}}
              </div>
              <div class="row">
                <div class="col-5">
                  <label for="district">Select District:</label>
                  <select id="district" name="district" class="form-select">
                  </select>
                </div>
                <div class="col-5">
                  <label for="city">City:</label>
                  <select id="city" name="city" class="form-select disabled" disabled>
                    <option value="">Select City</option>
                  </select>
                </div>
              </div>  
              <script>
             
              </script>

              <h5>Other Details</h5>
              <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="shop_image" class="col-form-label">Shop Image :</label>
                  <input type="file" name="shop_image" id="shop_image" class="form-control-file">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <img src="" id="preview-image" style="max-width: 150px; max-height: 150px;">
                </div>
              </div>
            

              <div class="col-md-4">
                <div class="form-group">
                  <label for="telephone" class="col-form-label">Telephone :</label>
                  <input type="tel" name="telephone" id="telephone" class="form-control" aria-describedby="telephoneHelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="mobile" class="col-form-label">Mobile :</label>
                  <input type="tel"  name="mobile" id="mobile" class="form-control" aria-describedby="mobileHelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="whatsapp" class="col-form-label">WhatsApp :</label>
                  <input type="tel" name="whatsapp" id="whatsapp" class="form-control" aria-describedby="whatsappHelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="facebook" class="col-form-label">FaceBook Link :</label>
                  <input type="text" name="fb_link" id="fb_link" class="form-control" aria-describedby="telephoneHelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="start_time" class="col-form-label">Start Time :</label>
                  <input type="time" name="start_time" id="start_time" class="form-control" aria-describedby="start_timeHelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="end_time" class="col-form-label">End Time :</label>
                  <input type="time" name="end_time" id="end_time" class="form-control" aria-describedby="end_timeHelp">
                </div>
              </div>
              <div class="col-md-4 mt-3">
                <label for="bussiness_reg_no" class="col-form-label">Business Registration No :</label>
                <input type="text" name="bussiness_reg_no" id="bussiness_reg_no" class="form-control" aria-describedby="telephoneHelp">
              </div>
              </div>


              <div class="mt-3 mb-3">
                <button onclick="postData()" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ url()->previous() }}'">Cancel</button>
              </div>
{{-- </form> --}}
      </div>
      
    </div>

    @if ($message = Session::get('success'))

    <script>
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    </script>


    @endif
      <script>

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
              console.log("🚀 ~ postData ~ response:", response)

                Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  text: response.message
                })
              },
              error: function(xhr) {
                //  console.log("🚀 ~ postData ~ xhr:", xhr)
                  var errors = "";
                  $.each(xhr.responseJSON.errors, function(key, value) {
                    errors += value[0] + "\n";
                  });
                  // console.log("🚀 ~ postData ~ errors:", errors)
                  Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: errors
                  })
              }
          });
        }

       
        $(document).ready(function() {  

            $('#shop_image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        // shop catogory
        $(document).ready(function() {
                      $('#shop_category').select2({
                        placeholder: "Select a category",
                        allowClear: true
                      });
                      // $('#brand_category').select2({
                      //   placeholder: "Select a brand",
                      //   allowClear: true
                      // });
                    });
                // select district and city 
                var cities=[
                  @forEach($dictricts as $dictrict)
                    {
                    'districtId':'{{$dictrict->dis_id}}',
                    'districtName':'{{$dictrict->dis_name}}',
                    'cities':[ 
                    @forEach($dictrict->city as $city)
                      {
                        'cityName':'{{$city->ds_name}}',
                        'cityId':{{$city->ds_id}}
                      },
                    @endforeach
                    ]},
                  @endforeach
                ];

                $(document).ready(function(){
                  let content='<option value="">Select District</option>';
                  cities.forEach((elem) => {
                    content+=`<option value="${elem.districtId}">${elem.districtName}</option>`;
                  })
                  $('#district').html(content);
                  $('#district').select2();
                  $('#city').select2();

                  $('#district').change(function() {
                    $('#city').removeClass('disabled');
                    $('#city').removeAttr('disabled');
                    // console.log("city:", cities.find((elem) => elem.districtId == $(this).val()));
                    let content='<option value="">Select City</option>';
                    cities.find((elem) => elem.districtId == $(this).val()).cities.forEach((elem) => {
                      content+=`<option value="${elem.cityId}">${elem.cityName}</option>`;
                    })
                    $('#city').html(content);
                    $('#city').select2();
                  });
                })

  
      </script>



  
@endsection