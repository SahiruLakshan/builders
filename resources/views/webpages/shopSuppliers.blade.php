@extends('webpages.index')
@section('content')
    <!-- /MAIN HEADER -->
    <style>
      /* .border {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
      } */
      .custom-form-style {
        border: 2px solid #f6f2f2;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 8px; /* Optional: Adds rounded corners */
      }

    </style>
    <div class="container-fluid " style="padding-top: 132px" >      
      <div class="text-center">
        <h3 class="display-4 text-primary font-weight-bold">BUILDERS.LK</h3>
        <h4 class="display-6 text-secondary font-weight-bold">
          Constructions Materials Suppliers/Shop Registration 
        </h4>
      </div>
      <form method="POST" class="custom-form-style border p-4" enctype="multipart/form-data" action="{{ route('addshopSuppliers') }}" > 
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
          <div class="col">
            <label for="inputAddress">Address</label>
            <textarea
              class="form-control"
              id="inputAddress"
              rows="3" name="address"
              placeholder="Address Of The Service Provider"
            ></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <label for="category">Select Shop Category:</label>
            <select id="shop_category" name="shop_category" class="form-select select2">
              {{-- <option value="cat1">Category 1</option>
              <option value="cat2">Category 2</option>
              <option value="cat3">Category 3</option> --}}
              @foreach ($shop_catogories as $shop_catogory)
                <option value="{{ $shop_catogory->id }}">{{ $shop_catogory->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-4">
            <label for="category">Select Selling Brands:</label>
            <select id="brand_category" name="brand" class="form-select select2">
              @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->b_name }}</option>
              @endforeach
              {{-- <option value="cat1">Category 1</option>
              <option value="cat2">Category 2</option>
              <option value="cat3">Category 3</option> --}}
            </select>
            <script>
              $(document).ready(function() {
                $('#shop_category').select2({
                  placeholder: "Select a category",
                  allowClear: true
                });
                $('#brand_category').select2({
                  placeholder: "Select a brand",
                  allowClear: true
                });
              });
            </script>
          </div>
          <div class="col-10">
     
          </div>
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
        <div class="col-md-6">
          <div class="form-group">
            <label for="location" class="col-form-label">Location :</label>
            <input type="text" name="location" id="location" class="form-control" aria-describedby="locationHelp">
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
        <div class="col-md-4 mt-3">
          <div class="form-group">
            <label for="facebook" class="col-form-label">FaceBook Link :</label>
            <input type="text" name="fb_link" id="telephone" class="form-control" aria-describedby="telephoneHelp">
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
      </form>
    </div>

    @if ($message = Session::get('success'))

      <script>
        document.addEventListener("DOMContentLoaded", function(event) {
          Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ $message }}'
          })
        });
      </script>

    @endif

    @if ($errors->any())
      <script>
        document.addEventListener("DOMContentLoaded", function(event) {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ $errors->first() }}'
          })
        });
      </script>
    @endif

    {{-- <script>
    
      $(document).ready(function(){
        $('#shop_image').on('change', function(){
          let reader = new FileReader();
          reader.onload = (e) => {
            $('#preview-image').attr('src', e.target.result);
          }
          reader.readAsDataURL(this.files[0]);
        })
      })

      function postData(){
        var formData = new FormData();
        formData.append('shop_name', $('#shop_name').val());
        formData.append('address', $('#address').val());
        formData.append('shop_category', 2);
        formData.append('brand', 3);
        formData.append('district', $('#district').val());
        formData.append('shop_image', $('#shop_image')[0].files[0]);
        formData.append('telephone', $('#telephone').val());
        formData.append('mobile', $('#mobile').val());
        formData.append('whatsapp', $('#whatsapp').val());
        formData.append('fb_link', $('#fb_link').val());
        formData.append('bussiness_reg_no', $('#bussiness_reg_no').val());
        $.ajax({
          url: "/shopSuppliers",
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            alert(data);
          },
          error: function(data) {
            alert(data.responseText);
          }
        });
      }
    </script> --}}
    {{-- <script>
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
        .addEventListener("submit", function (event) {
          event.preventDefault();
          // Gather form data for submission here (can use FormData for AJAX submission)
          alert("Form submitted with project data!");
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