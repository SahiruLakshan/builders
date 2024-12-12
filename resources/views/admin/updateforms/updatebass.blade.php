@extends('admin.sidebar')
@section('content')
    <div class="row row-sm  mt-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">Add New Bass Category </h4>
                    <p class="mb-2">
                        Enter the name of  Bass Category you want to add
                    </p>
                </div>
                <div class="card-body pt-0">
                    <form action="" method="POST" class="form-horizontal" id="addporfessionalscategory">
                        @csrf
                        <!-- Professional Name Field -->
                        <div class="form-group">
                            <label for="product_name">Bass Category Name</label>
                            <input type="text" class="form-control" name="bc_name" placeholder="Bass Category Name" required onchange="this.value = this.value.toUpperCase();" />
                            <small class="form-text text-muted">Enter the Bass Category name. This field is
                                required.</small>
                        </div>
                        <!-- Professional Description Field -->
                        <div class="form-group">
                            <label for="description">Category Description</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Enter a description about the Category" rows="3"
                                required></textarea>
                            <small class="form-text text-muted">Enter a brief description about the Professional Category. This field
                                is required.</small>
                        </div>
                        <!-- Submit Buttons -->
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" id="submitButton" class="btn btn-primary">
                                    Update Category
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
