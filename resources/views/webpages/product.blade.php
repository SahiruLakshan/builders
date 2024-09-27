@extends('webpages.index')
@section('content')

    <!-- /MAIN HEADER -->
    <div class="container-fluid" style="padding-top:132px ">
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
                        <script>
                            $(".select2").select2();
                        </script>
                   
                    </article> --}}
                    <!-- Product Type Filter with Searchable Dropdown -->
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
                                <script>
                                    document
                                        .getElementById("district")
                                        .addEventListener("change", function() {
                                            const dist = this.value;
                                            const cities = {
                                                Colombo: [
                                                    "Colombo",
                                                    "Boralesgamuwa",
                                                    "Kaduwela",
                                                    "Maharagama",
                                                ],
                                                Gampaha: [
                                                    "Gampaha",
                                                    "Negombo",
                                                    "Ja-Ela",
                                                    "Katunayake",
                                                ],
                                                Kalutara: [
                                                    "Kalutara",
                                                    "Panadura",
                                                    "Bandaragama",
                                                    "Horana",
                                                ],
                                                Kandy: ["Kandy", "Matale", "Nuwara Eliya", "Gampola"],
                                                Matale: [
                                                    "Matale",
                                                    "Dambulla",
                                                    "Kurunegala",
                                                    "Nawalapitiya",
                                                ],
                                                "Nuwara Eliya": [
                                                    "Nuwara Eliya",
                                                    "Badulla",
                                                    "Haputale",
                                                    "Bandarawela",
                                                ],
                                            };
                                            const citySelect = document.getElementById("city");
                                            citySelect.innerHTML = "";
                                            citySelect.disabled = !dist;
                                            if (cities[dist]) {
                                                cities[dist].forEach((city) => {
                                                    const opt = document.createElement("option");
                                                    opt.value = city;
                                                    opt.textContent = city;
                                                    citySelect.appendChild(opt);
                                                });
                                            }
                                        });
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
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" checked />
                                    <span class="form-check-label">PE+
                                        <span class="badge bg-light text-dark float-end">120</span></span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" checked />
                                    <span class="form-check-label">Dulux
                                        <span class="badge bg-light text-dark float-end">15</span></span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" checked />
                                    <span class="form-check-label">Alumex
                                        <span class="badge bg-light text-dark float-end">35</span></span>
                                </label>
                            </div>
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
                                        <input id="max-price" class="form-control" placeholder="$1,0000"
                                            type="number" />
                                    </div>
                                </div>
                                <button class="btn btn-warning w-100 mt-2">Apply</button>
                            </div>
                        </div>
                    </article>

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
                                            {{-- <p class="card-text">
                        With supporting text below as a natural lead-in to additional content.
                      </p> --}}
                                        </div>
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
