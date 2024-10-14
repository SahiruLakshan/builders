@extends('webpages.index')
@section('content')

    <!-- /MAIN HEADER -->
    <div class="container-fluid" style="padding-top:142px ">
        <div class="row">
            <h3>Select Your Products</h3>
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
                        
                    </article> --}}
                    <!-- Product Type Filter with Searchable Dropdown -->
                    {{-- <script>
                        $(".select2").select2();
                    </script> --}}
                    <article class="filter-group">
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
                                        {{-- <option value="car">Car</option>
                                        <option value="bike">Bike</option>
                                        <option value="scooter">Scooter</option>
                                        <option value="cycle">Cycle</option>
                                        <option value="horse">Horse</option> --}}
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
                    </script>

                    <!-- Location Filter -->
                    <article class="filter-group">
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
                            </div>
                        </div>
                    </article>

                    <!-- Brand Filter -->
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
                                        <input type="checkbox" class="form-check-input"  value="{{ $brand->id }}" />
                                        <span class="form-check-label">{{ $brand->b_name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </article>
                    <!-- Price Range Filter -->
                    {{-- <article class="filter-group">
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
                                        <input id="max-price" class="form-control" placeholder="$1,0000"
                                            type="number" />
                                    </div>
                                </div>
                                <button class="btn btn-warning w-100 mt-2">Apply</button>
                            </div>
                        </div>
                    </article> --}}

                    <!-- Additional Filters -->
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse_5"
                                aria-expanded="false">
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
            @if ($shops == null)
                <div class="col">

                    <h2>There are no shops in this Category</h2>

                </div>
            @else
                <div class="col-9">
                    <div class="row row-cols-2 g-2 mb-2">
                        @foreach ($shops as $shop)
                            <div class="col">
                                <div class="card d-flex flex-row">
                                    <!-- Image on the left side -->
                                    <img src="{{ asset('assets/shop/'.$shop->shop_img) }}" class="img-fluid" alt="..." style="width: 40%;">

                                    <!-- Text and button on the right side -->
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div>
                                            <h5 class="card-title">{{ $shop->name }}</h5>
                                            <p class="card-text">{{ $shop->address }} <br>
                                         {{ $shop->district_name }}, {{ $shop->city_name}}
                                        <a href="mailto:{{ $shop->email }}">{{ $shop->email }}</a>
                                        {{ $shop->p_number }}</p>
                                        <a href="tel:{{ $shop->p_number }}" class="btn btn-primary align-self-end">Contact
                                            Us</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
            @endif
        </div>




        <div class="d-flex justify-content-center mt-4">
            {{ $shops->links() }}
        </div>
    </div>
    </div>
    </div>
 
@endsection
