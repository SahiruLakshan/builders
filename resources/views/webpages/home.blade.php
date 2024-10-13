@extends('webpages.index')
<!--  Main carousels start here -->
@section('content')

  
  <div class="container " style="margin-top: 165px">
    <div class="row p-0">
      <!-- Left Vertical Slider -->
      <div class="col-md-3 p-0">
        <div
          id="leftHorizontalCarousel"
          class="carousel slide"
          data-bs-ride="carousel"
          data-bs-interval="4000"
          data-bs-direction="left"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="{{ asset('assets/webpage/img/left.jpg') }}"
                class="d-block w-100"
                alt="Left Slide 1"
              />
            </div>
            <div class="carousel-item">
              <img
                src="{{ asset('assets/webpage/img/left-02-01.jpg') }}"
                class="d-block w-100"
                alt="Left Slide 2"
              />
            </div>
            <div class="carousel-item">
              <img
                src="{{ asset('assets/webpage/img/left2.jpg') }}"
                class="d-block w-100"
                alt="Left Slide 3"
              />
            </div>
          </div>
          <!-- Carousel Controls for Left -->
        </div>
      </div>
      <!-- Middle Product Carousel -->
      <div class="col-md-6 px-0">
        <div
          id="carouselExampleCaptions"
          class="products-tabs carousel slide"
          data-bs-ride="carousel"
          data-bs-interval="4000"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/webpage/img/midle.jpg') }}" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/webpage/img/midle1.jpg') }}" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/webpage/img/midle2.jpg') }}" class="d-block w-100" alt="..." />
            </div>
          </div>
        </div>
      </div>
      <!-- Right Carousel -->
      <div class="col-md-3 px-0">
        <div
          id="rightHorizontalCarousel"
          class="carousel slide"
          data-bs-ride="carousel"
          data-bs-interval="4000"
          data-bs-direction="right"
        >
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="{{ asset('assets/webpage/img/left.jpg') }}"
                class="d-block w-100"
                alt="Left Slide 1"
              />
            </div>
            <div class="carousel-item">
              <img
                src="{{ asset('assets/webpage/img/left-02-01.jpg') }}"
                class="d-block w-100"
                alt="Left Slide 2"
              />
            </div>
            <div class="carousel-item">
              <img
                src="{{ asset('assets/webpage/img/left2.jpg') }}"
                class="d-block w-100"
                alt="Left Slide 3"
              />
            </div>
          </div>
          <!-- Carousel Controls for Right -->
        </div>
      </div>
    </div>
  </div>

  <!--   Main carousels end -->

  <div class="container-fluid">
    <!-- row -->
    <div class="row brandsproduct">
      <div class="container mt-2">
        <div class="row">
          <h5 class="card-title">Brands</h5>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="card">
              <img src="{{ asset('assets/webpage/img/right_image_20241003_111005_WhatsApp Image 2024-08-21 at 09.00.29_609a785a.jpg') }}" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="item">
            <div class="card">
              <img src="./img/product09.png" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="item">
            <div class="card">
              <img src="./img/product01.png" class="card-img-top" alt="..." />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row brandsproduct">
      <div class="container-fluid mt-2">
        <div class="row">
          <h5 class="card-title">Service Providers</h5>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="card">
              <img src="{{ asset('assets/webpage/img/left2.jpg') }}" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="item">
            <div class="card">
              <img src="./img/product09.png" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="item">
            <div class="card">
              <img src="./img/product01.png" class="card-img-top" alt="..." />
            </div>
          </div>
          <!-- Add more items as needed -->
        </div>
      </div>
    </div>
    {{-- <div class="row brandsproduct">
      <div class="container mt-2">
        <div class="row">
          <h5 class="card-title">Articals</h5>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="card">
              <img src="./img/product08.png" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="item">
            <div class="card">
              <img src="./img/product09.png" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="item">
            <div class="card">
              <img src="./img/product01.png" class="card-img-top" alt="..." />
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>

  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    {{-- <div class="container">
      <!-- row -->
      <div class="row">
        <h4>Collections</h4>
        <hr style="border-color: black; border-width: 1px" />
        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <div class="shop">
            <div class="shop-img">
              <img src="./img/mechanic.jpeg" alt="" />
            </div>
            <div class="shop-body">
              <h3>Paint<br />Collection</h3>
              <a href="#" class="cta-btn"
                >Shop now <i class="fa fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- /shop -->

        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <div class="shop">
            <div class="shop-img">
              <img src="./img/mechanic.jpeg" alt="" />
            </div>
            <div class="shop-body">
              <h3>
                Gardening Accessories<br />
                Collection
              </h3>
              <a href="#" class="cta-btn"
                >Shop now <i class="fa fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- /shop -->

        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <div class="shop">
            <div class="shop-img">
              <img src="./img/mechanic.jpeg" alt="" />
            </div>
            <div class="shop-body">
              <h3>Macanic Tools<br />Collection</h3>
              <a href="#" class="cta-btn"
                >Shop now <i class="fa fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- /shop -->
      </div>
      <!-- /row -->
    </div> --}}
    <!-- /container -->
  </div>
  <!-- /SECTION -->

  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- section title -->
        <div class="col-md-12">
          <div class="section-title">
            <h3 class="title">New Products</h3>
            <div class="section-nav">
              <ul class="section-tab-nav tab-nav">
                <li class="active">
                  <a data-toggle="tab" href="#tab1">Paint</a>
                </li>
                <li>
                  <a data-toggle="tab" href="#tab1">Electronic Items</a>
                </li>
                <li><a data-toggle="tab" href="#tab1">Brands</a></li>
                <li>
                  <a data-toggle="tab" href="#tab1">Kechicken Accessories</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /section title -->
        <!-- carosuel -->

        <!-- Products tab & slick -->
        <div class="col-md-12">
          <div class="row">
            <div class="products-tabs">
              <!-- tab -->
              <div id="tab1" class="tab-pane active">
                <div class="products-slick" data-nav="#slick-nav-1">
                  <!-- product -->
                  <div class="product">
                    <div class="product-img">
                      <img src="./img/product01.png" alt="" />
                      <div class="product-label">
                        <span class="sale">-30%</span>
                        <span class="new">NEW</span>
                      </div>
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name">
                        <a href="#">product name goes here</a>
                      </h3>
                      <h4 class="product-price">
                        $980.00 <del class="product-old-price">$990.00</del>
                      </h4>
                      <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="product-btns">
                        <button class="add-to-wishlist">
                          <i class="fa fa-heart-o"></i
                          ><span class="tooltipp">add to wishlist</span>
                        </button>
                        <button class="add-to-compare">
                          <i class="fa fa-exchange"></i
                          ><span class="tooltipp">add to compare</span>
                        </button>
                        <button class="quick-view">
                          <i class="fa fa-eye"></i
                          ><span class="tooltipp">quick view</span>
                        </button>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <button class="add-to-cart-btn">
                        <i class="fa fa-shopping-cart"></i> add to cart
                      </button>
                    </div>
                  </div>
                  <!-- /product -->

                  <!-- product -->
                  <div class="product">
                    <div class="product-img">
                      <img src="./img/product02.png" alt="" />
                      <div class="product-label">
                        <span class="new">NEW</span>
                      </div>
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name">
                        <a href="#">product name goes here</a>
                      </h3>
                      <h4 class="product-price">
                        $980.00 <del class="product-old-price">$990.00</del>
                      </h4>
                      <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <div class="product-btns">
                        <button class="add-to-wishlist">
                          <i class="fa fa-heart-o"></i
                          ><span class="tooltipp">add to wishlist</span>
                        </button>
                        <button class="add-to-compare">
                          <i class="fa fa-exchange"></i
                          ><span class="tooltipp">add to compare</span>
                        </button>
                        <button class="quick-view">
                          <i class="fa fa-eye"></i
                          ><span class="tooltipp">quick view</span>
                        </button>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <button class="add-to-cart-btn">
                        <i class="fa fa-shopping-cart"></i> add to cart
                      </button>
                    </div>
                  </div>
                  <!-- /product -->

                  <!-- product -->
                  <div class="product">
                    <div class="product-img">
                      <img src="./img/product03.png" alt="" />
                      <div class="product-label">
                        <span class="sale">-30%</span>
                      </div>
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name">
                        <a href="#">product name goes here</a>
                      </h3>
                      <h4 class="product-price">
                        $980.00 <del class="product-old-price">$990.00</del>
                      </h4>
                      <div class="product-rating"></div>
                      <div class="product-btns">
                        <button class="add-to-wishlist">
                          <i class="fa fa-heart-o"></i
                          ><span class="tooltipp">add to wishlist</span>
                        </button>
                        <button class="add-to-compare">
                          <i class="fa fa-exchange"></i
                          ><span class="tooltipp">add to compare</span>
                        </button>
                        <button class="quick-view">
                          <i class="fa fa-eye"></i
                          ><span class="tooltipp">quick view</span>
                        </button>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <button class="add-to-cart-btn">
                        <i class="fa fa-shopping-cart"></i> add to cart
                      </button>
                    </div>
                  </div>
                  <!-- /product -->

                  <!-- product -->
                  <div class="product">
                    <div class="product-img">
                      <img src="./img/product04.png" alt="" />
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name">
                        <a href="#">product name goes here</a>
                      </h3>
                      <h4 class="product-price">
                        $980.00 <del class="product-old-price">$990.00</del>
                      </h4>
                      <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="product-btns">
                        <button class="add-to-wishlist">
                          <i class="fa fa-heart-o"></i
                          ><span class="tooltipp">add to wishlist</span>
                        </button>
                        <button class="add-to-compare">
                          <i class="fa fa-exchange"></i
                          ><span class="tooltipp">add to compare</span>
                        </button>
                        <button class="quick-view">
                          <i class="fa fa-eye"></i
                          ><span class="tooltipp">quick view</span>
                        </button>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <button class="add-to-cart-btn">
                        <i class="fa fa-shopping-cart"></i> add to cart
                      </button>
                    </div>
                  </div>
                  <!-- /product -->

                  <!-- product -->
                  <div class="product">
                    <div class="product-img">
                      <img src="./img/product05.png" alt="" />
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name">
                        <a href="#">product name goes here</a>
                      </h3>
                      <h4 class="product-price">
                        $980.00 <del class="product-old-price">$990.00</del>
                      </h4>
                      <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="product-btns">
                        <button class="add-to-wishlist">
                          <i class="fa fa-heart-o"></i
                          ><span class="tooltipp">add to wishlist</span>
                        </button>
                        <button class="add-to-compare">
                          <i class="fa fa-exchange"></i
                          ><span class="tooltipp">add to compare</span>
                        </button>
                        <button class="quick-view">
                          <i class="fa fa-eye"></i
                          ><span class="tooltipp">quick view</span>
                        </button>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <button class="add-to-cart-btn">
                        <i class="fa fa-shopping-cart"></i> add to cart
                      </button>
                    </div>
                  </div>
                  <!-- /product -->
                </div>
                <div id="slick-nav-1" class="products-slick-nav"></div>
              </div>
              <!-- /tab -->
            </div>
          </div>
        </div>
        <!-- Products tab & slick -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->

  <!-- HOT DEAL SECTION -->
  <div id="hot-deal" class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <div class="hot-deal">
            <ul class="hot-deal-countdown">
              <li>
                <div>
                  <h3>02</h3>
                  <span>Days</span>
                </div>
              </li>
              <li>
                <div>
                  <h3>10</h3>
                  <span>Hours</span>
                </div>
              </li>
              <li>
                <div>
                  <h3>34</h3>
                  <span>Mins</span>
                </div>
              </li>
              <li>
                <div>
                  <h3>60</h3>
                  <span>Secs</span>
                </div>
              </li>
            </ul>
            <h2 class="text-uppercase">hot deal this week</h2>
            <p>New Collection Up to 50% OFF</p>
            <a class="primary-btn cta-btn" href="#">Shop now</a>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /HOT DEAL SECTION -->

  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- section title -->
        <div class="col-md-12">
          <div class="section-title">
            <h3 class="title"></h3>
            <div class="section-nav">
              <ul class="section-tab-nav tab-nav">
                <li class="active">
                  <a data-toggle="tab" href="#tab2">Cement</a>
                </li>
                <li><a data-toggle="tab" href="#tab2">Paint Item</a></li>
                <li><a data-toggle="tab" href="#tab2">-----</a></li>
                <li><a data-toggle="tab" href="#tab2">Gradaning Tools</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /section title -->

        <!-- Products tab & slick -->
        <div class="col-md-12">
          <div class="row">
            <div class="products-tabs">
              <!-- tab -->
              <div id="tab2" class="tab-pane fade in active">
                <div class="products-slick" data-nav="#slick-nav-2">
                  <!-- product -->
                  <div class="product">
                    <div class="product-img">
                      <img src="./img/product06.png" alt="" />
                      <div class="product-label">
                        <span class="sale">-30%</span>
                        <span class="new">NEW</span>
                      </div>
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name">
                        <a href="#">product name goes here</a>
                      </h3>
                      <h4 class="product-price">
                        $980.00 <del class="product-old-price">$990.00</del>
                      </h4>
                      <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="product-btns">
                        <button class="add-to-wishlist">
                          <i class="fa fa-heart-o"></i
                          ><span class="tooltipp">add to wishlist</span>
                        </button>
                        <button class="add-to-compare">
                          <i class="fa fa-exchange"></i
                          ><span class="tooltipp">add to compare</span>
                        </button>
                        <button class="quick-view">
                          <i class="fa fa-eye"></i
                          ><span class="tooltipp">quick view</span>
                        </button>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <button class="add-to-cart-btn">
                        <i class="fa fa-shopping-cart"></i> add to cart
                      </button>
                    </div>
                  </div>
                  <!-- /product -->

                  <!-- product -->
                  <div class="product">
                    <div class="product-img">
                      <img src="./img/product07.png" alt="" />
                      <div class="product-label">
                        <span class="new">NEW</span>
                      </div>
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name">
                        <a href="#">product name goes here</a>
                      </h3>
                      <h4 class="product-price">
                        $980.00 <del class="product-old-price">$990.00</del>
                      </h4>
                      <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <div class="product-btns">
                        <button class="add-to-wishlist">
                          <i class="fa fa-heart-o"></i
                          ><span class="tooltipp">add to wishlist</span>
                        </button>
                        <button class="add-to-compare">
                          <i class="fa fa-exchange"></i
                          ><span class="tooltipp">add to compare</span>
                        </button>
                        <button class="quick-view">
                          <i class="fa fa-eye"></i
                          ><span class="tooltipp">quick view</span>
                        </button>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <button class="add-to-cart-btn">
                        <i class="fa fa-shopping-cart"></i> add to cart
                      </button>
                    </div>
                  </div>
                  <!-- /product -->

                  <!-- product -->
                  <div class="product">
                    <div class="product-img">
                      <img src="./img/product08.png" alt="" />
                      <div class="product-label">
                        <span class="sale">-30%</span>
                      </div>
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name">
                        <a href="#">product name goes here</a>
                      </h3>
                      <h4 class="product-price">
                        $980.00 <del class="product-old-price">$990.00</del>
                      </h4>
                      <div class="product-rating"></div>
                      <div class="product-btns">
                        <button class="add-to-wishlist">
                          <i class="fa fa-heart-o"></i
                          ><span class="tooltipp">add to wishlist</span>
                        </button>
                        <button class="add-to-compare">
                          <i class="fa fa-exchange"></i
                          ><span class="tooltipp">add to compare</span>
                        </button>
                        <button class="quick-view">
                          <i class="fa fa-eye"></i
                          ><span class="tooltipp">quick view</span>
                        </button>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <button class="add-to-cart-btn">
                        <i class="fa fa-shopping-cart"></i> add to cart
                      </button>
                    </div>
                  </div>
                  <!-- /product -->

                  <!-- product -->
                  <div class="product">
                    <div class="product-img">
                      <img src="./img/product09.png" alt="" />
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name">
                        <a href="#">product name goes here</a>
                      </h3>
                      <h4 class="product-price">
                        $980.00 <del class="product-old-price">$990.00</del>
                      </h4>
                      <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="product-btns">
                        <button class="add-to-wishlist">
                          <i class="fa fa-heart-o"></i
                          ><span class="tooltipp">add to wishlist</span>
                        </button>
                        <button class="add-to-compare">
                          <i class="fa fa-exchange"></i
                          ><span class="tooltipp">add to compare</span>
                        </button>
                        <button class="quick-view">
                          <i class="fa fa-eye"></i
                          ><span class="tooltipp">quick view</span>
                        </button>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <button class="add-to-cart-btn">
                        <i class="fa fa-shopping-cart"></i> add to cart
                      </button>
                    </div>
                  </div>
                  <!-- /product -->

                  <!-- product -->
                  <div class="product">
                    <div class="product-img">
                      <img src="./img/product01.png" alt="" />
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name">
                        <a href="#">product name goes here</a>
                      </h3>
                      <h4 class="product-price">
                        $980.00 <del class="product-old-price">$990.00</del>
                      </h4>
                      <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="product-btns">
                        <button class="add-to-wishlist">
                          <i class="fa fa-heart-o"></i
                          ><span class="tooltipp">add to wishlist</span>
                        </button>
                        <button class="add-to-compare">
                          <i class="fa fa-exchange"></i
                          ><span class="tooltipp">add to compare</span>
                        </button>
                        <button class="quick-view">
                          <i class="fa fa-eye"></i
                          ><span class="tooltipp">quick view</span>
                        </button>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <button class="add-to-cart-btn">
                        <i class="fa fa-shopping-cart"></i> add to cart
                      </button>
                    </div>
                  </div>
                  <!-- /product -->
                </div>
                <div id="slick-nav-2" class="products-slick-nav"></div>
              </div>
              <!-- /tab -->
            </div>
          </div>
        </div>
        <!-- /Products tab & slick -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->

  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-4 col-xs-6">
          <div class="section-title">
            <h4 class="title">Top selling</h4>
            <div class="section-nav">
              <div id="slick-nav-3" class="products-slick-nav"></div>
            </div>
          </div>

          <div class="products-widget-slick" data-nav="#slick-nav-3">
            <div>
              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product07.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product08.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product09.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- product widget -->
            </div>

            <div>
              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product01.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product02.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product03.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- product widget -->
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="section-title">
            <h4 class="title">Top selling</h4>
            <div class="section-nav">
              <div id="slick-nav-4" class="products-slick-nav"></div>
            </div>
          </div>

          <div class="products-widget-slick" data-nav="#slick-nav-4">
            <div>
              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product04.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product05.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product06.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- product widget -->
            </div>

            <div>
              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product07.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product08.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product09.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- product widget -->
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="section-title">
            <h4 class="title">Top selling</h4>
            <div class="section-nav">
              <div id="slick-nav-5" class="products-slick-nav"></div>
            </div>
          </div>

          <div class="products-widget-slick" data-nav="#slick-nav-5">
            <div>
              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product01.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product02.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product03.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- product widget -->
            </div>

            <div>
              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product04.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product05.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- /product widget -->

              <!-- product widget -->
              <div class="product-widget">
                <div class="product-img">
                  <img src="./img/product06.png" alt="" />
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">product name goes here</a>
                  </h3>
                  <h4 class="product-price">
                    $980.00 <del class="product-old-price">$990.00</del>
                  </h4>
                </div>
              </div>
              <!-- product widget -->
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->

  <!-- NEWSLETTER -->

  {{-- <div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <div class="newsletter">
            <p>Sign Up for the <strong>NEWSLETTER</strong></p>
            <form>
              <input
                class="input"
                type="email"
                placeholder="Enter Your Email"
              />
              <button class="newsletter-btn">
                <i class="fa fa-envelope"></i> Subscribe
              </button>
            </form>
            <!-- Section: Social media -->
            <section class="mb-4">
              <!-- Facebook -->
              <a
                class="btn btn-outline-light btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-facebook-f"></i
              ></a>

              <!-- Twitter -->
              <a
                class="btn btn-warning btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-twitter"></i
              ></a>

              <!-- Google -->
              <a
                class="btn btn-warning btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-google"></i
              ></a>

              <!-- Instagram -->
              <a
                class="btn btn-warning btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-instagram"></i
              ></a>

              <!-- Linkedin -->
              <a
                class="btn btn-warning btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-linkedin-in"></i
              ></a>

              <!-- Github -->
              <a
                class="btn btn-warning btn-floating m-1"
                href="#!"
                role="button"
                ><i class="fab fa-github"></i
              ></a>
            </section>
            <!-- Section: Social media -->
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div> --}}
  <!-- /NEWSLETTER -->



  
@endsection
