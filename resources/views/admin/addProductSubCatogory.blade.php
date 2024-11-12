@extends('admin.sidebar')

@section('content')


<!-- main-content -->
<div class="main-content app-content">
  <div class="main-container container-fluid">
              <!-- row -->
              <div class="row row-sm mt-5 d-flex justify-content-center align-items-center">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                  <div class="card box-shadow-0">
                    <div class="card-header">
                      <h4 class="card-title mb-1">Add New Product Subcategory</h4>
                      <p class="mb-2">
                        Enter the name of the subcategory you want to add
                      </p>
                    </div>
                    <div class="card-body pt-0">
                      <form action="/submitsub" method="POST" class="form-horizontal" id="addSubcategoryForm" novalidate>
                        @csrf
                        <div class="row">
                          <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="product">Select Product Category</label>
                                <select class="form-control select2" id="product">
                                    <option value="" disabled selected></option>
                                    {{-- @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach --}}
                                </select>
                                <small class="form-text text-muted">
                                  Choose one or more products for this Subcategory. Required field.
                                </small>
                            </div>
                          <script>
                          $(document).ready(function() {
                            $("#product").select2({
                              placeholder: "Select Product",
                              allowClear: true;
                            })
                          })       
                          </script>
                          </div>
                          <!-- Subcategory Name Field -->
                          <div class="form-group  col-md-6">
                          <label for="subcategory_name">Subcategory Name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="subcategory_name"
                            name="name"
                            placeholder="Subcategory Name"
                            required
                          />
                          <small class="form-text text-muted">
                            Enter the subcategory's official name. This field is
                            required.
                          </small>
                          <div class="invalid-feedback">
                            Please provide a subcategory name.
                          </div>
                          </div>
                          
                        </div>
                        <!-- Description Field -->
                        <div class="form-group">
                          <label for="description">Description (Optional)</label>
                          <textarea
                            class="form-control"
                            id="description"
                            name="description"
                            placeholder="Provide details about the subcategory"
                            rows="3"
                          ></textarea>
                          <small class="form-text text-muted">
                            Add any relevant information about this subcategory.
                            Optional field.
                          </small>
                        </div>
                        <!-- Submit and Reset Buttons -->
                        <div class="form-group mb-0 mt-3 justify-content-end">
                          <div>
                            <button
                              type="submit"
                              id="submitButton"
                              class="btn btn-primary"
                            >
                              Add Subcategory
                            </button>
                            <button
                              type="reset"
                              id="resetButton"
                              class="btn btn-secondary ms-4"
                            >
                              Cancel
                            </button>
                          </div>
                        </div>
                      </form>
    
                      <!-- <script>
              // JavaScript for Bootstrap validation
              (function () {
                'use strict';
                window.addEventListener('load', function () {
                  // Fetch the form element we want to apply custom Bootstrap validation styles to
                  var form = document.getElementById('addSubcategoryForm');
                  form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                }, false);
              })();
            </script> -->
                    </div>
                  </div>
                </div>
              </div>

  </div>
  <!-- container -->
</div>

        
      

    <!-- End Page -->

    @endsection