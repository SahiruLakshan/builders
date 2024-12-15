
@extends('admin.sidebar')

@section('content')
<!-- main-content -->
<div class="main-content app-content">
  <div class="main-container container-fluid">
     <!-- row -->
     <div class="row row-sm  mt-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
          <div class="card box-shadow-0">
            <div class="card-header">
              <h4 class="card-title mb-1">Update Brand - {{ $brand->b_name }}</h4>
              <p class="mb-2">
                Update your brand
              </p>
            </div>
            <div class="card-body pt-0">
              <form action="{{url ('brand/update',$brand->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                  

                  <!-- Brand Name Field -->
                  <div class="form-group col-md-6">
                      <label for="brand_name">Brand Name</label>
                      <input
                        type="text"
                        class="form-control"
                        name="b_name"
                        value="{{ $brand->b_name }}"
                        id="brand_name"
                        placeholder="Brand Name"
                        required
                      />
                      <small class="form-text text-muted">
                        Enter the brand's official name. This field is
                        required.
                      </small>
                  </div>
                    <!-- Country of Origin Field -->
                    <div class="form-group col-md-6">
                          <label for="country_of_origin">Country Of Origin</label>
                          <input
                            type="text"
                            class="form-control"
                            name="country_of_origin"
                            value="{{ $brand->country_of_origin }}"
                            id="country_of_origin"
                            placeholder="Country Of Origin"
                            required
                          />
                          <small class="form-text text-muted">
                            Specify the country where this brand originates.
                            Required field.
                          </small>
                    </div>
                      <!-- Product Select Dropdown -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="mb-4">
                            <p class="mg-b-10">Select Your Product Categories</p>
                            <select multiple="multiple" name="product[]"
                                class="selectsum1">
                                <option disabled selected value="">Select
                                    categories...</option> <!-- Placeholder option -->
                                    @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                            </select>
                            <small class="form-text text-muted">Choose one product for this Brand. Required field.</small>
                          </div>
                        </div>
                    </div>
                    <!-- Brand Image Field -->
                <div class="form-group col-md-6">
                  <label for="brand_img" class="form-label">Brand Image</label>
                <img src="{{ asset('assets/brand/'.$brand->brand_img) }}" height="200px" alt="Brand_Image">
                  
                  <input class="form-control" type="file"
                    id="brand_img"
                    name="brand_img"
                    accept=".jpg,.jpeg,.png"
                    onchange="previewImage()"
                    required
                  />
                  <div class="preview-box mt-3" id="imagePreview">
                    <span>Image Preview</span>
                  </div>
                  <small class="form-text text-muted">
                    Upload an image (JPEG or PNG format) representing the brand. Required field.
                  </small>
                </div>

                  <script>
                    function previewImage() {
                      const file = document.getElementById("brand_img").files[0];
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

                <!-- Product Source Dropdown -->
                <div class="form-group col-md-6">
                  <label for="product_source">Product Source</label>
                  <select
                    id="product_source"
                    name="production"
                    class="form-control"
                    required
                  >
                    <option value="" disabled selected>
                      Select Product Source
                    </option>
                    <option value="imported" {{$brand->production == 'imported' ? 'selected':''}}>Imported</option>
                    <option value="manufactured" {{$brand->production == 'manufactured' ? 'selected':''}}>Manufactured</option>
                    <option value="deal" {{$brand->production == 'deal' ? 'selected':''}}>Deal/Distribute</option>
                  </select>
                  <small class="form-text text-muted">
                    Specify how the product is sourced. Required field.
                  </small>
                </div>
                    <!-- Description Field -->
                    <div class="form-group col-md-12">
                      <label for="technical-details">Technical Details</label>
                      <textarea
                        class="form-control"
                        id="description"
                        name="description"
                        rows="4"
                        placeholder="Enter technical details here..."
                        required
                      >{{ $brand->description }}</textarea>
                      <small class="form-text text-muted">
                        Provide a detailed description or technical specifications. Required field.
                      </small>
                    </div>
                  
            
                <h4> Copmany Information</h4>
                <hr>
                    <!-- Company Name Field -->
                  <div class="form-group col-6">
                      <label for="company_name">Company Name</label>
                      <input
                        type="text"
                        class="form-control"
                        name="company_name"
                        value="{{ $brand->company_name }}"
                        id="company_name"
                        placeholder="Company Name"
                        required
                      />
                      <small class="form-text text-muted">
                        Enter the name of the company managing this brand.Required field.
                      </small>
                  </div>
                  {{-- meka loard wennea hadana onii br eka --}}
                    <!-- Company  Business Registration Field -->
                    <div class="form-group col-6">
                      <label for="company_name"> Business Registration</label>
                      <input
                        type="text"
                        class="form-control"
                        name="br"
                        id="br"
                        placeholder="Business Registration"
                        required
                      />
                      <small class="form-text text-muted">
                        Enter the Business Registration Number.Required field.
                      </small>
                  </div>
            
                </div>
                        <!-- Address Field -->
                        <div class="form-group">
                          <label for="address">Address</label>
                          <textarea
                            type="text"
                            class="form-control"
                            id="address"
                            value="{{ $brand->address }}"
                            name="address"
                            rows="3"
                            placeholder="Enter Copmany Address.."
                            required
                          ></textarea>
                          <small class="form-text text-muted"
                            >Provide the full address for this brand's main office.
                            Required field.</small>
                        </div>
                        {{-- me tika loard wenna hadnna onii --}}
                      <div class="d-flex flex-wrap">

                        <!-- Contact Person Field -->
                        <div class="form-group col-md-6">
                          <label for="contact_no">Contact Person</label>
                          <input
                            type="tel"
                            class="form-control"
                            id="contact_Person"
                            name="brand_contact_Person"
                            placeholder="Enter Your Contact Person"
                    
                            required
                          />
                          <small class="form-text text-muted">
                            Enter contact Person for this brand.
                            Required field.
                          </small>
                        </div>
                        <!-- Contact Person Field -->
                        <div class="form-group col-md-6">
                          <label for="contact_no">Designation</label>
                          <input
                            type="tel"
                            class="form-control"
                            id="designation"
                            name="designation"
                            placeholder="Enter Your Designation"
                    
                            required
                          />
                          <small class="form-text text-muted">
                            Enter Designation.
                            Required field.
                          </small>
                        </div>
                        <!-- Whatsapp Field -->
                        <div class="form-group col-md-6">
                          <label for="contact_no">Whatsapp Number</label>
                          <input
                            type="tel"
                            class="form-control"
                            id="whatsapp_no"
                            name="whatsapp_no"
                            placeholder="Enter Your Whatsapp Number"
                            pattern="[0-9]{10}"
                            required
                          />
                          <small class="form-text text-muted">
                            Enter a 10-digit Whatsapp number for this brand.
                            Required field.
                          </small>
                        </div>
                        <!-- Contact Number Field -->
                        <div class="form-group col-md-6">
                          <label for="contact_no">Contact Number</label>
                          <input
                            type="tel"
                            class="form-control"
                            id="contact_no"
                            name="brand_contact_number"
                            value="{{ $brand->brand_contact_number }}"
                            placeholder="Enter Your Contact Number"
                            pattern="[0-9]{10}"
                            required
                          />
                          <small class="form-text text-muted">
                            Enter a 10-digit contact number for this brand.
                            Required field.
                          </small>
                        </div>
                          <!--  Email Field -->
                          <div class="form-group col-md-6">
                            <label for="Email"> Email</label>
                            <input
                              type="tel"
                              class="form-control"
                              id="b_email"
                              value="{{ $brand->email }}"
                              name="b_email"
                              placeholder="Enter Your  Email"
                              required
                            />
                            <small class="form-text text-muted">
                              Enter Email for this brand.
                              Required field.
                            </small>
                          </div>
                          {{-- Web Link loard weenna hadanna oni --}}
                          <!-- Contact Number Field -->
                          <div class="form-group col-md-6">
                            <label for="contact_no">Web Link</label>
                            <input
                              type="tel"
                              class="form-control"
                              id="web_link"
                              name="b_web_link"
                              placeholder="Enter Your Web Link"
                      
                              required
                            />
                            <small class="form-text text-muted">
                              Enter a web link for this brand.
                              Required field.
                            </small>
                          </div>
                      </div>
                      {{-- me table Directors/Proprietors/Partners ekama  ekama loard wenna hadna thiynawa  --}}
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
                                  required
                                />
                              </td>
                              <td>
                                <input
                                  type="text"
                                  name="directors[0][contact]"
                                  class="form-control"
                                  placeholder="Enter Contact Number"
                                  required
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
                                                required
                                              />
                                            </td>
                                            <td>
                                              <input
                                                type="text"
                                                name="directors[${rowCount}][contact]"
                                                class="form-control"
                                                placeholder="Enter Contact Number"
                                                required
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
                    <!-- Submit Buttons -->
                      <div class="col-md-12">
                        <div class="form-group mb-0 mt-3 justify-content-end">
                          <div>
                            <button
                              type="submit"
                              id="submitButton"
                              class="btn btn-primary"
                            >
                            Update Brand
                            </button>
          
                            <button
                              type="reset"
                              id="resetButton"
                              class="btn btn-secondary ms-4"
                            >
                              Reset
                            </button>
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

   

@endsection

