@extends('webpages.index')
@section('content')
    <!-- /MAIN HEADER -->
    <div class="container-fluid">
        <div class="row">
            <h3>Select Your Services</h3>
            <aside class="col-md-3 px-0">
                <div class="card">
                    <!-- Product Type Filter -->
                    {{-- <article class="filter-group">
                        <!-- Search Bar with Dropdown -->
                        <div class="container">
                            <div class="row">
                                <form class="col-md-4">
                                    <label>Select</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option>Car</option>
                                        <option>Bike</option>
                                        <option>Scooter</option>
                                        <option>Cycle</option>
                                        <option>Horse</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <script>
                            $(".select2").select2();
                        </script>

                    </article> --}}
                    <!-- Product Type Filter with Searchable Dropdown -->
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Service Type with Search</h6>
                            </a>
                        </header>
                        {{-- <div class="filter-content collapse show" id="collapse_1">
                            <div class="card-body">
                                <form>
                                    <label for="product-type">Select Service Type</label>
                                    <select class="form-control select2" id="product-type">
                                        <option>Select Product</option>
                                        <option value="car">Car</option>
                                        <option value="bike">Bike</option>
                                        <option value="scooter">Scooter</option>
                                        <option value="cycle">Cycle</option>
                                        <option value="horse">Horse</option>
                                    </select>
                                </form>
                            </div>
                        </div> --}}
                    </article>
                    <script>
                        $(document).ready(function() {
                            $('.select2').select2({
                                placeholder: "Select a product",
                                allowClear: true
                            });
                        });
                    </script>

                    <!-- Location Filter -->
                    {{-- get form distrc tble and city table --}}
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="true">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Location</h6>
                            </a>
                        </header>
                        {{-- <div class="filter-content collapse show" id="collapse_4">
                            <div class="card-body">
                                <select class="form-select" id="district">
                                    <option value="">Select District</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                </select>
                                <br />
                                <select class="form-select" id="city" disabled>
                                    <option value="">Select City</option>
                                </select>

                            </div>
                        </div> --}}
                    </article>

                    <!-- Servicers  Filter -->
                    {{-- //get form the service table --}}
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true">
                                <i class="icon-control fa fa-chevron-down"></i>
                                {{-- in here dianamicaly need to show bass category and when check soem category need to show bass  --}}
                                <h6 class="title"> Select Bass Categorys </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_2">
                            <div class="card-body">
                                @foreach ($professionalsCategory as $category)
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input" value="{{ $category->id }}" />
                                        <span class="form-check-label">{{ $category->name }}
                                            <span class="badge bg-light text-dark float-end">{{ $category->count }}</span>
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                    </article>


                    <!-- Price Range Filter -->
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="true">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Price range</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_3">
                            <div class="card-body">
                                <input type="range" class="form-range" min="0" max="100" />
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="min-price">Min</label>
                                        <input id="min-price" class="form-control" placeholder="$0" type="number" />
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <label for="max-price">Max</label>
                                        <input id="max-price" class="form-control" placeholder="$1,0000" type="number" />
                                    </div>
                                </div>
                                <button class="btn btn-warning w-100 mt-2">Apply</button>
                            </div>
                        </div>
                    </article>

                    <!-- Additional Filters -->
                    {{-- <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse_5"
                                aria-expanded="false">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">More filter</h6>
                            </a>
                        </header> --}}
                    {{-- <div class="filter-content collapse" id="collapse_5">
                            <div class="card-body">
                                <label class="form-check">
                                    <input type="radio" name="filter-radio" class="form-check-input" checked />
                                    <span class="form-check-label">Any condition</span>
                                </label>
                                <label class="form-check">
                                    <input type="radio" name="filter-radio" class="form-check-input" />
                                    <span class="form-check-label">Brand new</span>
                                </label>
                            </div>
                        </div>
                    </article> --}}
                </div>
            </aside>

            {{-- Service Providers Section --}}
            {{-- @if ($serviceProviders->isEmpty()); --}}
            {{-- <div class="col">
                <h2>There are no Services in this Category</h2>
            </div>
                @else --}}
            <div class="col-10 col-md-9">
                <div class="d-flex flex-row flex-wrap justify-content-start mb-4">
                    @foreach ($professionals as $base)
                        <div class="col-12 col-md-6 p-2">
                            {{-- <a href="{{route('view_Service_provider_profile', $serviceProvider->id) }}" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-dark">   --}}
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="shadow hcard-200 bg-white d-flex flex-row">
                                    <!-- Image on the left side -->
                                    <img src="{{ asset('assets/professional/' . $base->profile_image) }}"
                                        class="d-block col-4 object-fit-cover rounded-start" alt="Service Provider Image">

                                    <!-- Text and button on the right side -->
                                    <div class="col-8 d-flex flex-column p-4">
                                        <div>

                                            <h5 class="card-title"></h5>
                                            <p class="card-text p-0 m-0 text-small text-muted">
                                            <div class="text-truncate-two-line">
                                                <i class="fas fa-map-marker-alt me-2"></i>

                                            </div>
                                            <div class="d-flex align-items-end">
                                                <i class="fas fa-phone me-3"></i>
                                                <a href="tel:" class="text-truncate col"></a>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <i class="fas fa-user-check me-3"></i>
                                                    Grade:
                                                </div>
                                                <a href="tel:+94"
                                                    class="btn text-white bg-warning shadow phone-button mt-2">
                                                    <i class="fab fa-whatsapp ms-auto"></i>
                                                </a>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            {{-- </a> --}}
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- @endif --}}
        </div>
        {{-- <div class="d-flex justify-content-center mt-4">
            {{ $serviceProviders->links() }}
        </div> --}}
    </div>
@endsection
