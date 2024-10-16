
@extends('webpages.index')
@section('content')
<!-- About Start -->
<div class="about-section ">
  <div class="container position-relative">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="about-section position-relative">
          <!-- First Box: Text Content -->
          <div class="about-text bg-white p-4 rounded shadow position-relative">
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
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="about-section position-relative">
          <!-- Second Box: Image Content -->
          <div class="about-image-box position-relative p-4">
            <img src="{{ asset('assets/webpage/img/aboutus/Picture2.jpg') }}" alt="About Image" class="img-fluid rounded shadow">
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

  

        


@endsection