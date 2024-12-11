@extends('webpages.index')

@section('content')
    <div class="container">
        <h3>Search Results for "{{ request()->input('query') }}"</h3>

        <div class="row">
            @if ($results->isEmpty())
                <div class="col">
                    <h2>There are no results for this query.</h2>
                </div>
            @else
                <div class="col-9">
                    <div class="row row-cols-2 g-2 mb-2">
                        @foreach ($results as $result)
                            <div class="col mb-3"> <!-- Add mb-3 to apply a margin below each card -->
                                <div class="card d-flex flex-row">

                                    <!-- Image on the left side -->
                                    @if (isset($result->shop_img))
                                        <img src="{{ asset('assets/shop/' . $result->shop_img) }}" class="img-fluid"
                                            alt="{{ $result->name }}" style="width: 40%;">
                                    @elseif (isset($result->brand_img))
                                        <img src="{{ asset('assets/brands/' . $result->brand_img) }}" class="img-fluid"
                                            alt="{{ $result->b_name }}" style="width: 40%;">
                                    @endif

                                    <!-- Text and button on the right side -->
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div>
                                            <!-- Title for Shop or Brand -->
                                            @if (isset($result->name))
                                                <h5 class="card-title">{{ $result->name }}</h5>
                                                <p class="card-text">
                                                    {{ $result->address }} <br>
                                                    District: {{ $result->district_name ?? 'N/A' }}, City:
                                                    {{ $result->city_name ?? 'N/A' }} <br>
                                                    <a href="mailto:{{ $result->email }}">{{ $result->email }}</a> <br>
                                                    {{ $result->p_number }}
                                                </p>
                                            @elseif (isset($result->b_name))
                                                <h5 class="card-title">{{ $result->b_name }}</h5>
                                                <p class="card-text">
                                                    Company: {{ $result->company_name }} <br>
                                                    Address: {{ $result->address }} <br>
                                                    Country of Origin: {{ $result->country_of_origin }} <br>
                                                    <a href="mailto:{{ $result->email }}">{{ $result->email }}</a> <br>
                                                    {{ $result->brand_contact_number }}
                                                </p>
                                            @endif
                                        </div>

                                        <!-- Contact button or action button -->
                                        @if (isset($result->p_number))
                                            <!-- This is a Shop -->
                                            <a href="tel:+94{{ $result->p_number }}"
                                                class="btn text-white bg-warning shadow phone-button">
                                                <i class="fas fa-phone"></i>Contact
                                            </a>
                                        @elseif (isset($result->brand_contact_number))
                                            <!-- This is a Brand -->
                                            <a href="tel:+94{{ $result->brand_contact_number }}"
                                                class="btn text-white bg-warning shadow phone-button">
                                                <i class="fas fa-phone"> </i>Contact
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
