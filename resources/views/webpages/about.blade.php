
@extends('webpages.index')
@section('content')
<!-- About Start -->
<div class="about-section "style="padding-top: 140px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <div class="about-img animate-fade">
          <img src="img/about-us.png" alt="About Image" class="img-fluid" />
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="about-text animate-fade-right">
          <h2>Welcome to Our Company</h2>
          <p>25+ Years of Excellence in the Industry</p>
          <p>
            We have been serving with dedication, delivering quality services and products to our clients. Our team is made up of experienced professionals committed to making every project a success.
          </p>
          <a href="#" class="btn-primary">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Facts Start -->
<div class="facts-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="fact-box animate-slide-up bg-warning text-white p-4 rounded shadow">
          <h3>109</h3>
          <p>Expert Workers</p>
        </div>
      </div>
            <div class="col-lg-3 col-sm-6">
        <div class="fact-box animate-slide-up bg-warning text-white p-4 rounded">
          <h3>485</h3>
          <p>Happy Clients</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="fact-box animate-slide-up bg-warning text-white p-4 rounded">
          <h3>789</h3>
          <p>Completed Projects</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="fact-box animate-slide-up bg-warning text-white p-4 rounded">
          <h3>890</h3>
          <p>Ongoing Projects</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Facts End -->

<!-- FAQ Start -->
<div class="faq-section">
  <div class="container">
    <div class="section-header">
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="faq-content">
      <div class="faq-item">
        <h4>What services do you offer?</h4>
        <p>We offer a wide range of services, from construction to consultancy.</p>
      </div>
      <div class="faq-item">
        <h4>How can I contact you?</h4>
        <p>You can contact us via our contact page or call our office directly.</p>
      </div>
      <!-- Add more FAQs as needed -->
    </div>
  </div>
</div>
<!-- FAQ End -->


@endsection