@extends('profilesheader')
@section('profilesidebar')
<div>
  <!-- main-header -->
  <div class="main-header side-header sticky nav nav-item">
    <div class="container-fluid main-container ">
      <div class="main-header-left ">
        <div class="responsive-logo">
          <a href="index.html" class="header-logo">
            <img src="../assets/img/brand/" class="logo-1" alt="logo">
            <img src="../assets/img/brand/" class="dark-logo-1" alt="logo">
          </a>
        </div>
        <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
          <a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left" ></i></a>
          <a class="close-toggle" href="javascript:void(0);"><i class="header-icons fe fe-x"></i></a>
        </div>
        {{-- <div class="main-header-center ms-3 d-sm-none d-md-none d-lg-block">
          <input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
        </div> --}}
      </div>
      <div class="main-header-right">
        <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fe fe-more-vertical "></span>
        </button>
        <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
          <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="nav nav-item  navbar-nav-right ms-auto">
              <li class="">
              
              </li>
              <li class="dropdown nav-item main-layout">
                <a class="new nav-link theme-layout nav-link-bg layout-setting" >
                  <span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"/></svg></span>
                  <span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"/></svg></span>
                </a>
              </li>
              <li class="nav-link search-icon d-lg-none d-block">
              
              </li>
              
              <li class="nav-item full-screen fullscreen-button">
                <a class="new nav-link full-screen-link" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
              </li>
              <li class="dropdown main-profile-menu nav nav-item nav-link">
                <a class="profile-user d-flex" href=""><img alt="" src="../assets/img/faces/6.jpg"></a>
                <div class="dropdown-menu">
                  <div class="main-header-profile bg-primary p-3">
                    <div class="d-flex wd-100p">
                      <div class="main-img-user"><img alt="" src="../assets/img/faces/6.jpg" class=""></div>
                      <div class="ms-3 my-auto">
                        <h6>Petey Cruiser</h6><span>Premium Member</span>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
                  <a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit Profile</a>
                  <a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
                  <a class="dropdown-item" href=""><i class="bx bx-envelope"></i>Messages</a>
                  <a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account Settings</a>
                  <a class="dropdown-item" href="signin.html"><i class="bx bx-log-out"></i> Sign Out</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /main-header -->

  <!-- main-sidebar -->
  <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
  <div class="sticky">
    <aside class="app-sidebar sidebar-scroll">
      <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="index.html"><img src="../assets/img/brand/" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="index.html"><img src="../assets/img/brand/" class="main-logo" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="../assets/img/brand/" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="../assets/img/brand/" alt="logo"></a>
      </div>
      <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
          <div class="dropdown user-pro-body">
            <div class="">
              <img alt="user-img" class="avatar avatar-xl brround" src="../assets/img/faces/6.jpg"><span class="avatar-status profile-status bg-green"></span>
            </div>
            <div class="user-info">
              <h4 class="fw-semibold mt-3 mb-0">Petey Cruiser</h4>
              <span class="mb-0 text-muted">Premium Member</span>
            </div>
          </div>
        </div>
        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
        <ul class="side-menu">
      
          <li class="side-item side-item-category">Pages</li>
          <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="side-menu__icon" viewBox="0 0 24 24" ><g><rect fill="none"/></g><g><g/><g><path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M3,18.5V7 c1.1-0.35,2.3-0.5,3.5-0.5c1.34,0,3.13,0.41,4.5,0.99v11.5C9.63,18.41,7.84,18,6.5,18C5.3,18,4.1,18.15,3,18.5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.34,0-3.13,0.41-4.5,0.99V7.49c1.37-0.59,3.16-0.99,4.5-0.99c1.2,0,2.4,0.15,3.5,0.5V18.5z"/><path d="M11,7.49C9.63,6.91,7.84,6.5,6.5,6.5C5.3,6.5,4.1,6.65,3,7v11.5C4.1,18.15,5.3,18,6.5,18 c1.34,0,3.13,0.41,4.5,0.99V7.49z" opacity=".3"/></g><g><path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,10.69,16.18,10.5,17.5,10.5z"/><path d="M17.5,13.16c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,13.36,16.18,13.16,17.5,13.16z"/><path d="M17.5,15.83c0.88,0,1.73,0.09,2.5,0.26v-1.52c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,16.02,16.18,15.83,17.5,15.83z"/></g></g></svg><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
              <li class="side-menu__label1"><a href="javascript:void(0);">Pages</a></li>
              <li><a class="slide-item" href="profile.html">Profile</a></li>
            </ul>
          </li>
          
        </ul>
        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
      </div>
    </aside>
  </div>
  <!-- main-sidebar -->
</div>
@yield('profiles')
<footer class="main-footer ht-45">

  <div class="container-fluid pd-t-0 ht-100p">
      <span>
          Copyright © 2024
          <a href="javascript:void(0);" class="text-primary"></a>Builder.lk
          Designed with <span class="fa fa-heart text-danger"></span> by
          <a href="javascript:void(0);"> AAIC </a> All rights reserved.</span>
  </div>



</footer>