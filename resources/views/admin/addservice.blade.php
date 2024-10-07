@extends('admin.sidebar')
@section('content')
    <div class="row row-sm  mt-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">Add New Services </h4>
                    <p class="mb-2">
                        Enter the name of the Service you want to add
                    </p>
                </div>
                <div class="card-body pt-0">
                    <form action="/submitproduct" method="POST" class="form-horizontal" id="addproduct">
                        @csrf
                        <!-- Service Name Field -->
                        <div class="form-group">
                            <label for="product_name">Service Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Service Name" required onchange="this.value = this.value.toUpperCase();" />
                            <small class="form-text text-muted">Enter the Service name. This field is
                                required.</small>
                        </div>
                        <!-- Service Description Field -->
                        <div class="form-group">
                            <label for="description">Service Description</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Enter a description about the service" rows="3"
                                required></textarea>
                            <small class="form-text text-muted">Enter a brief description about the service. This field
                                is required.</small>
                        </div>
                        <!-- Submit Buttons -->
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" id="submitButton" class="btn btn-primary">
                                    Add service
                                </button>

                                <button type="reset" id="resetButton" class="btn btn-secondary ms-4">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
