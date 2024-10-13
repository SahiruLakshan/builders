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
                        <div class="col">
                            <div class="card d-flex flex-row">
                                <!-- Image on the left side -->
                                @if (isset($result->shop_img))
                                    <!-- This is a Shop -->
                                    <img src="{{ asset('assets/shop/'.$result->shop_img) }}" class="img-fluid" alt="{{ $result->name }}" style="width: 40%;">
                                @elseif (isset($result->product_img))
                                    <!-- This is a ShopProduct -->
                                    <img src="{{ asset('assets/products/'.$result->product_img) }}" class="img-fluid" alt="{{ $result->name }}" style="width: 40%;">
                                @endif

                                <!-- Text and button on the right side -->
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="card-title">{{ $result->name }}</h5>
                                        @if (isset($result->category))
                                            <!-- This is a Shop -->
                                            <p class="card-text">Category: {{ $result->category }}</p>
                                            <p class="card-text">District: {{ $result->district }}</p>
                                        @elseif (isset($result->description))
                                            <!-- This is a ShopProduct -->
                                            <p class="card-text">Description: {{ $result->description }}</p>
                                            <p class="card-text">Price: ${{ $result->price }}</p>
                                        @endif
                                        <p class="card-text"><small class="text-muted">Last updated {{ $result->updated_at->diffForHumans() }}</small></p>
                                    </div>

                                    @if (isset($result->p_number))
                                        <!-- This is a Shop -->
                                        <a href="tel:{{ $result->p_number }}" class="btn btn-primary align-self-end">Contact Us</a>
                                    @elseif (isset($result->product_link))
                                        <!-- This is a ShopProduct -->
                                        <a href="{{ $result->product_link }}" class="btn btn-primary align-self-end">Buy Now</a>
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
