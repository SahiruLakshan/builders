@extends('admin.sidebar')
@section('content')
<div class="row row-sm mt-5 d-flex justify-content-center align-items-center">
    <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
        <div class="card box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">Update Service</h4>
                <p class="mb-2">Update the service details below</p>
            </div>
            <div class="card-body pt-0">
                <form action="{{ route('service.update', $service->id) }}" method="POST" class="form-horizontal">
                    @csrf
                    @method('PUT')

                    <!-- Service Name Field -->
                    <div class="form-group">
                        <label for="servicename">Service Name</label>
                        <input type="text" class="form-control" name="servicename" value="{{ old('servicename', $service->servicename) }}" required onchange="this.value = this.value.toUpperCase();" />
                        <small class="form-text text-muted">Update the Service name.</small>
                    </div>

                    <!-- Service Description Field -->
                    <div class="form-group">
                        <label for="description">Service Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3" required>{{ old('description', $service->description) }}</textarea>
                        <small class="form-text text-muted">Update the description about the service.</small>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="form-group mb-0 mt-3 justify-content-end">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Update Service
                            </button>
                            <a href="{{ route('service.index') }}" class="btn btn-secondary ms-4">
                                Cancel
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
