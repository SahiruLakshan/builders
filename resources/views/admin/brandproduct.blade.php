@extends('admin.sidebar')
@section('content')
<div class="main-content app-content">
    <div class="main-container container-fluid">
        <div class="row row-sm mt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Select Brand Related To Product </h4>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('brandproduct.store') }}" method="POST" id="shopCategoryForm" novalidate>
                          @csrf
                            <div class="row">
                                <!-- Product Select Dropdown -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="product">Select Product</label>
                                        <select class="form-control select2" id="product" name="product">
                                            <option value="" disabled selected>Select a product</option>
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                        <small class="form-text text-muted">Choose one product for this Brand. Required field.</small>
                                    </div>
                                </div>
                                <!-- Brand Select Dropdown -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brand">Select Brand</label>
                                        <select class="form-control select2" id="brand" name="brand">
                                            <option value="" disabled selected>Select a brand</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->b_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- Action Buttons -->
                                <div class="form-group justify-content-end">
                                    <button type="submit" class="btn btn-primary mt-3 mb-0">Submit</button>
                                    <button type="button" class="btn btn-secondary mt-3 mb-0" onclick="window.location.href='your_cancel_url_here'">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Initialize Select2 -->
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Select an option",
            allowClear: true
        });
    });
</script>
@endsection
