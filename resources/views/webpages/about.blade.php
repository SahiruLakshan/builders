
@extends('webpages.index')
@section('content')
<!-- About Start -->
<div class="d-flex align-items-center p-5 " style="background-image: url({{asset('assets/webpage/aboutus/Picture1.jpg')}}); background-size: cover;">
  <div class="about-text bg-white p-4 shadow-lg position-relative" style="width:500px">
    <h2><strong>ABOUT US</strong></h2>
    <p><strong>Excellence in the Industry</strong></p>
    <p>
      <strong>A.A.I.C. Business Solutions (Pvt) Ltd</strong> is a Company in Sri Lanka that conducts 
      Accounting services, Marketing promotion services, IT services, and business 
      consulting for the purpose of providing services to organizations.
      As a company that launches operations by identifying new trends in the 
      business sector, it has been identified that a <strong>digital platform</strong> is essential to the 
      construction industry in Sri Lanka, and in order to create this platform, necessary 
      steps have been taken to create <strong>BUILDERS.LK</strong> aiming to create an integrated market.
    </p>
    <img src="{{asset('assets/webpage/aboutus/Picture1.jpg')}}" alt="" height="200" class="w-100 object-fit-cover">
  </div>  
</div>
<div class="d-flex align-items-center p-5 " style="background-image: url({{asset('assets/webpage/aboutus/Picture1.jpg')}}); background-size: cover;">
  <div class="d-flex gap-5">
    <div class="col">
      <div class="d-flex align-items-center">
        <div class="bg-white position-relative p-5">
          <h3>OUR VISION</h3>
          <div>
            To become the most efficient digital marketplace to meet buyers and sellers related to the construction industry in Sri Lanka.
          </div>
        </div>
        <img src="{{asset('assets/webpage/aboutus/Picture1.jpg')}}" class="d-block object-fit-cover" width="200" height="250" alt="">
      </div>
      <div class="d-flex align-items-center">
        <img src="{{asset('assets/webpage/aboutus/Picture1.jpg')}}" class="d-block object-fit-cover" width="200" height="250" alt="">
        <div class="bg-white position-relative p-5">
          <h3>OUR VISION</h3>
          <div>
            To become the most efficient digital marketplace to meet buyers and sellers related to the construction industry in Sri Lanka.
          </div>
        </div>
      </div>
     
    </div>
    <div class="col">
      <div class="d-flex " style="height: 600px">
        <div class="col-9 bg-white">
          To become the most efficient digital marketplace to meet buyers and sellers related to the construction industry in Sri Lanka.
        </div>
        <div class="col-3 h-100 d-flex">
          <div class="h-100 bg-white col-8 d-flex align-items-center">
            <img class="d-block object-fit-cover" src="{{asset('assets/webpage/aboutus/Picture1.jpg ')}}" width="180" height="500" alt="">
          </div>
          <div class="bg-transparent col-4">
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>
<div class="d-flex gap-3">
  <div class="col">
    <div class="p-4 text-white " style="background-color: #002b49;">
      <h4>WHY BUILDERS.LK ?</h4>
      <p>
        Nowadays, the market has become digitized to a significant extent. Within the next few years, 
        this will no doubt lead to a revolutionary change in the market.
        <br><br>
        Every organization and individual involved in the construction industry in Sri Lanka will have 
        to adapt their operations to these changing new market trends.
        <br><br>
        In this way, builders.lk has been created as a constantly updated website that has all the 
        facilities you need to present your products and services to the future generations who follow the 
        market through digital media.
        <br><br>
        Through this, you can formally and attractively introduce and present the goods and services 
        supplied by the organization to the market.
        Every matter important for the customer to make decisions about your products and services as well as your organization is entered into a page that is separated for you.
      </p>
    </div>

  </div>
  <div class="col d-flex flex-column justify-content-center">
    <div>
      <div>
        TRADING COMPANIES AND INDIVIDUALS
      </div>
      <div class="row">
        <div class="col-4">
          <img class="d-block object-fit-cover w-100" src="{{asset('assets/webpage/aboutus/Picture1.jpg ')}}" alt="">
        </div>
        <div class="col-8">
          <div>
            <ul>
              <li>Selling products</li>
              <li>Trademarks and Warranties</li>
              <li>Additional information about the goods (Ingredients, uses, how to use)</li>
              <li>Product prices and discounts  </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
    <div>
      <div>
        TRADING COMPANIES AND INDIVIDUALS
      </div>
      <div class="row">
        <div class="col-4">
          <img class="d-block object-fit-cover w-100" src="{{asset('assets/webpage/aboutus/Picture1.jpg ')}}" alt="">
        </div>
        <div class="col-8">
          <div>
            <ul>
              <li>Selling products</li>
              <li>Trademarks and Warranties</li>
              <li>Additional information about the goods (Ingredients, uses, how to use)</li>
              <li>Product prices and discounts  </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Facts Start -->
<div class="facts-section pt-5 pb-5">
  <div class="container">
    <div class="row">
      <!-- Mission and Vision Section -->
      <div class="col-lg-6 col-sm-12">
        <div class="fact-box bg-image text-white p-4 rounded shadow d-flex flex-column" style="background-image: url('your-background-image.jpg'); background-size: cover; background-position: center;">
          <div class="row">
            <!-- Our Mission Box -->
            <div class="col-lg-6 col-sm-12 d-flex">
              <div class="bg-warning p-4 rounded shadow-inner flex-fill">
                <h3>OUR MISSION</h3>
                <p>To become the most efficient digital 
                   marketplace to meet buyers and 
                   sellers related to the construction 
                   industry in Sri Lanka.
                </p>
              </div>
            </div>
            <!-- Our Vision Box -->
            <div class="col-lg-6 col-sm-12 d-flex">
              <div class="bg-warning p-4 rounded shadow-inner flex-fill">
                <h3>OUR VISION</h3>
                <p>Becoming a pioneer in the 
                   Sri Lankan construction
                   industry.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Image Section -->
      <div class="col-lg-6 col-sm-12">
        <div class="image-box">
          <img src="your-image-path.jpg" alt="Image Description" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Facts End -->
<div class="fact-box bg-image text-white p-4 rounded shadow" style="background-image: url('your-background-image.jpg'); background-size: cover; background-position: center;">
  <div class="container">
    <div class="row d-flex align-items-center">
      <!-- Left side: Paragraph -->
      <div class="col-lg-6 col-sm-12">
        <div class="p-4 rounded shadow-inner" style="background-color: #002b49;">
          <h4>WHY BUILDERS.LK ?</h4>
          <p>
            Nowadays, the market has become digitized to a significant extent. Within the next few years, 
            this will no doubt lead to a revolutionary change in the market.
            <br><br>
            Every organization and individual involved in the construction industry in Sri Lanka will have 
            to adapt their operations to these changing new market trends.
            <br><br>
            In this way, builders.lk has been created as a constantly updated website that has all the 
            facilities you need to present your products and services to the future generations who follow the 
            market through digital media.
            <br><br>
            Through this, you can formally and attractively introduce and present the goods and services 
            supplied by the organization to the market.
            Every matter important for the customer to make decisions about your products and services as well as your organization is entered into a page that is separated for you.
          </p>
        </div>
      </div>

      <!-- Right side: Image -->
      <div class="col-lg-6 col-sm-12">
        <div class="image-box text-center">
          <img src="your-image-path.jpg" alt="Image Description" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Separate Container for WHO NEEDS BUILDERS.LK -->
<div class="container mt-4 pt-4 pb-4 pl-4">
  <div class="p-4 rounded shadow" style="background-color: #ffffff; color: #002b49;">
    <h4>WHO NEEDS BUILDERS.LK?</h4>
    <ul>
      <li>Builders.lk is more important for everyone who is interested in and related to the construction industry in Sri Lanka.</li>
      <li>Accordingly, it is important to the institutions and people who carry out the production, sale, and distribution of raw materials, tools, and machinery related to the construction industry.</li>
      <li>To organizations and individuals who provide any kind of construction services, sub-services, and related services.</li>
      <li>Institutions and individuals who are carrying out or intending to carry out construction work in Sri Lanka.</li>
      <li>Professionals related to the construction industry and any kind of employees.</li>
      <li>To those who are studying and training to join the construction industry.</li>
    </ul>
  </div>
</div>
@endsection