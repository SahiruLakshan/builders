@extends('webpages.index')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <h3>Select Your Products</h3>
            <aside class="col-md-3 px-0">
                <div class="card ">
                    {{-- <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Product Type with Search</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_1">
                            <div class="card-body">
                                <form>
                                    <label for="product-type">Select Product Type</label>
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
                        </div>
                    </article>
                    <script>
                        $(document).ready(function() {
                            $('.select2').select2({
                                placeholder: "Select a product",
                                allowClear: true
                            });
                        });
                    </script> --}}

                    {{-- <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="true">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Location</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_4">
                            <div class="card-body">
                                <label for="district">Select District:</label>
                                <select id="district" name="district" class="form-select pd-2">
                                </select>
                                <label for="city">City:</label>
                                <select id="city" name="city" class="form-select disabled" disabled>
                                    <option value="">Select City</option>
                                </select>
                                <script>
                                    // select district and city
                                    var cities = [
                                        @foreach ($dictricts as $dictrict)
                                            {
                                                'districtId': '{{ $dictrict->dis_id }}',
                                                'districtName': '{{ $dictrict->dis_name }}',
                                                'cities': [
                                                    @foreach ($dictrict->city as $city)
                                                        {
                                                            'cityName': '{{ $city->ds_name }}',
                                                            'cityId': {{ $city->ds_id }}
                                                        },
                                                    @endforeach
                                                ]
                                            },
                                        @endforeach
                                    ];

                                    $(document).ready(function() {
                                        let content = '<option value="">Select District</option>';
                                        cities.forEach((elem) => {
                                            content += `<option value="${elem.districtId}">${elem.districtName}</option>`;
                                        })
                                        $('#district').html(content);
                                        $('#district').select2();
                                        $('#city').select2();

                                        $('#district').change(function() {
                                            $('#city').removeClass('disabled');
                                            $('#city').removeAttr('disabled');
                                            // console.log("city:", cities.find((elem) => elem.districtId == $(this).val()));
                                            let content = '<option value="">Select City</option>';
                                            cities.find((elem) => elem.districtId == $(this).val()).cities.forEach((elem) => {
                                                content += `<option value="${elem.cityId}">${elem.cityName}</option>`;
                                            })
                                            $('#city').html(content);
                                            $('#city').select2();
                                        });
                                    })
                                </script>
                            </div>
                        </div>
                    </article> --}}

                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Brands</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_2">
                            <div class="card-body">
                                @foreach ($brands as $brand)
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input" value="{{ $brand->id }}" />
                                        <span class="form-check-label">{{ $brand->b_name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </article>

                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse_5" aria-expanded="false">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">More filter</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse" id="collapse_5">
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
                    </article>
                </div>
            </aside>
            @if ($shopitems == null)
                <div class="col">

                    <h2>There are no shop items in this Category</h2>

                </div>
            @else
                <div class="col-12 col-md-9">
                    <div class="d-flex flex-wrap mb-4 ">
                        @foreach ($shopitems as $shopitem)
                       
                        <div  class="col-12 col-md-6 p-2 "> <!-- Add mb-3 to apply a margin below each card -->
                            <a href="" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-dark">
                                <div class=" shadow hcard-200 bg-white d-flex flex-row">
                                    <!-- Image on the left side -->
                                    <img src="{{ asset('assets/shop/' . $shopitem->image) }}"  class="d-block col-4 object-fit-cover rounded-start" alt="...">
                                    {{-- <img src="{{ asset('assets/shop/1730369468_screenshot.png') }}" alt="..."> --}}
                                    <!-- Text and button on the right side -->
                                    <div class="col-8 d-flex flex-column  p-4">
                                        <div>
                                            <h5 class="card-title">{{ $shopitem->$item }}</h5>
                                            <p class="card-text p-0 m-0 text-small text-muted boader-bottom  ">

                                                <div class="text-truncate-two-line ">
                                                    <i class="fas fa-map-marker-alt me-2"></i>
                                                    {{-- {{ $shop->address }}
                                                    {{ $shop->district_name }}, {{ $shop->city_name }}  --}}
                                                </div>
                                                <div class="d-flex align-items-end">
                                                    <i class="fas fa-envelope d-block me-3"></i> 
                                                    <a href="mailto:" class="p-0 m-0 d-block w-100 text-truncate col">{{ $shop->email }}</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-start">
                                                    <div>
                                                        <i class="fas fa-phone me-3"></i>
                                                       
                                                    </div> 
                                                    <a href="tel:+94"
                                                        class="btn text-white bg-warning shadow phone-button mt-2 ">
                                                        <i class="fas fa-phone ms-auto me-3"> </i>Contact
                                                    </a>

                                                    {{-- <a href="{{ route('view_Shop_profile', $shop->id) }}"
                                                        class="btn text-white bg-warning shadow phone-button mt-2 ">
                                                        <i class="fas fa-user ms-auto"></i>
                                                    </a> --}}
                                                    {{-- {{$shop->id}} --}}
                                                </div>
                                            </p>
                                           

                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        @endforeach
            @endif
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $shopitems->links() }}
        </div>
    </div>
@endsection
