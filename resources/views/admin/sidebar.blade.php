@extends('admin.header')
@section('section')

    <body class="main-body app sidebar-mini ltr">
        <!-- Loader -->
        <div id="global-loader">
            <img src="../assets/img/loader.svg" class="loader-img" alt="Loader" />
        </div>
        <!-- /Loader -->

        <!-- Page -->
        <div class="page custom-index">
            <div>
                <!-- main-header -->
                <div class="main-header side-header sticky nav nav-item">
                    <div class="container-fluid main-container">
                        <div class="main-header-left">
                            <div class="responsive-logo">
                                <a href="index.html" class="header-logo">
                                    <!-- <img
                      src="../assets/img/brand/logo.png"
                      class="logo-1"
                      alt="logo"
                    />
                    <img
                      src="../assets/img/brand/logo-white.png"
                      class="dark-logo-1"
                      alt="logo"
                    /> -->
                                </a>
                            </div>
                            <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                                <a class="open-toggle" href="javascript:void(0);"><i
                                        class="header-icon fe fe-align-left"></i></a>
                                <a class="close-toggle" href="javascript:void(0);"><i class="header-icons fe fe-x"></i></a>
                            </div>
                            <div class="main-header-center ms-3 d-sm-none d-md-none d-lg-block">
                                <input class="form-control" placeholder="Search for anything..." type="search" />
                                <button class="btn">
                                    <i class="fas fa-search d-none d-md-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="main-header-right">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <ul class="nav nav-item navbar-nav-right ms-auto">
                                        <li class="dropdown nav-item main-layout">
                                            <a class="new nav-link theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg"
                                                        class="header-icon-svgs" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z" />
                                                    </svg></span>
                                                <span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg"
                                                        class="header-icon-svgs" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z" />
                                                    </svg></span>
                                            </a>
                                        </li>
                                        <li class="nav-link search-icon d-lg-none d-block">
                                            <form class="navbar-form" role="search">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" />
                                                    <span class="input-group-btn">
                                                        <button type="reset" class="btn btn-default">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                        <button type="submit" class="btn btn-default nav-link resp-btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                                class="header-icon-svgs" viewBox="0 0 24 24" width="24px"
                                                                fill="#000000">
                                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                                <path
                                                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                            </form>
                                        </li>

                                        <li class="dropdown nav-item main-header-notification">
                                            <a class="new nav-link" href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-bell">
                                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                </svg><span class="pulse"></span></a>
                                            <div class="dropdown-menu">
                                                <div class="menu-header-content bg-primary text-start">
                                                    <div class="d-flex">
                                                        <h6 class="dropdown-title mb-1 tx-15 text-white fw-semibold">
                                                            Notifications
                                                        </h6>
                                                        <span
                                                            class="badge rounded-pill bg-warning ms-auto my-auto float-end">Mark
                                                            All Read</span>
                                                    </div>
                                                    <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12">
                                                        You have 4 unread Notifications
                                                    </p>
                                                </div>
                                                <div class="main-notification-list Notification-scroll">
                                                    <a class="d-flex p-3 border-bottom" href="javascript:void(0);">
                                                        <div class="notifyimg bg-pink">
                                                            <i class="la la-file-alt text-white"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h5 class="notification-label mb-1">
                                                                New files available
                                                            </h5>
                                                            <div class="notification-subtext">
                                                                10 hour ago
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <i class="las la-angle-right text-end text-muted"></i>
                                                        </div>
                                                    </a>
                                                    <a class="d-flex p-3 border-bottom" href="javascript:void(0);">
                                                        <div class="notifyimg bg-purple">
                                                            <i class="la la-gem text-white"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h5 class="notification-label mb-1">
                                                                Updates Available
                                                            </h5>
                                                            <div class="notification-subtext">2 days ago</div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <i class="las la-angle-right text-end text-muted"></i>
                                                        </div>
                                                    </a>
                                                    <a class="d-flex p-3 border-bottom" href="javascript:void(0);">
                                                        <div class="notifyimg bg-success">
                                                            <i class="la la-shopping-basket text-white"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h5 class="notification-label mb-1">
                                                                New Order Received
                                                            </h5>
                                                            <div class="notification-subtext">1 hour ago</div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <i class="las la-angle-right text-end text-muted"></i>
                                                        </div>
                                                    </a>
                                                    <a class="d-flex p-3 border-bottom" href="javascript:void(0);">
                                                        <div class="notifyimg bg-warning">
                                                            <i class="la la-envelope-open text-white"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h5 class="notification-label mb-1">
                                                                New review received
                                                            </h5>
                                                            <div class="notification-subtext">1 day ago</div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <i class="las la-angle-right text-end text-muted"></i>
                                                        </div>
                                                    </a>
                                                    <a class="d-flex p-3 border-bottom" href="javascript:void(0);">
                                                        <div class="notifyimg bg-danger">
                                                            <i class="la la-user-check text-white"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h5 class="notification-label mb-1">
                                                                22 verified registrations
                                                            </h5>
                                                            <div class="notification-subtext">2 hour ago</div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <i class="las la-angle-right text-end text-muted"></i>
                                                        </div>
                                                    </a>
                                                    <a class="d-flex p-3 border-bottom" href="javascript:void(0);">
                                                        <div class="notifyimg bg-primary">
                                                            <i class="la la-check-circle text-white"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h5 class="notification-label mb-1">
                                                                Project has been approved
                                                            </h5>
                                                            <div class="notification-subtext">4 hour ago</div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <i class="las la-angle-right text-end text-muted"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="dropdown-footer">
                                                    <a href="">VIEW ALL</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="dropdown main-profile-menu nav nav-item nav-link">
                                            <a class="profile-user d-flex" href=""><img alt=""
                                                    src="../assets/img/faces/6.jpg" /></a>
                                            <div class="dropdown-menu">
                                                <div class="main-header-profile bg-primary p-3">
                                                    <div class="d-flex wd-100p">
                                                        <div class="main-img-user">
                                                            <img alt="" src="../assets/img/faces/6.jpg"
                                                                class="" />
                                                        </div>
                                                        <div class="ms-3 my-auto">
                                                            <h6>{{ Auth()->user()->name }}</h6>
                                                            <span>Admin</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item" href="{{route('profile.edit')}}"><i
                                                        class="bx bx-user-circle"></i>Profile</a>
                                                <a class="dropdown-item" href="{{route('home')}}"><i
                                                        class="bx bx-window"></i>Website</a>

                                                <form action="/logout" method="POST">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item"><i class="bx bx-log-out"></i>
                                                        Logout</button>
                                                </form>

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
                            <a class="desktop-logo logo-light active" href="index.html"><img src="#"
                                    class="main-logo" alt="logo" /></a>
                            <a class="desktop-logo logo-dark active" href="index.html"><img
                                    src="../assets/img/brand/logo-white1.png" class="main-logo" alt="logo" /></a>
                            <a class="logo-icon mobile-logo icon-light active" href="index.html"><img
                                    src="../assets/img/brand/favicon.png" alt="logo" /></a>
                            <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img
                                    src="../assets/img/brand/favicon-white1.png" alt="logo" /></a>
                        </div>
                        <div class="main-sidemenu">
                            <div class="app-sidebar__user clearfix">
                                <div class="dropdown user-pro-body">
                                    <div class="">
                                        <img alt="user-img" class="avatar avatar-xl brround"
                                            src="{{ asset('assets/assets/img/faces/6.jpg') }}" /><span
                                            class="avatar-status profile-status bg-green"></span>
                                    </div>
                                    <div class="user-info">
                                        <h4 class="fw-semibold mt-3 mb-0">{{ Auth()->user()->name }}</h4>
                                        <span class="mb-0 text-muted">ADMIN</span><br>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-left disabled" id="slide-left">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                                </svg>
                            </div>
                            <ul class="side-menu">
                                <!-- <li class="side-item side-item-category">Main</li>
                  <li class="slide">
                    <a class="side-menu__item" href="index.html"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon"
                        viewBox="0 0 24 24"
                      >
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                          d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z"
                          opacity=".3"
                        />
                        <path
                          d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"
                        /></svg
                      ><span class="side-menu__label">Index</span
                      ><span class="badge bg-success text-light" id="bg-side-text"
                        >1</span
                      ></a
                    >
                  </li> -->
                                <li class="side-item side-item-category">Master</li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><span
                                            class="side-menu__label">Brand</span></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1">
                                            <a href="javascript:void(0);">Brand</a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/addbrand">Add New Brand
                                            </a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/brands">Veiw Brand</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><span
                                            class="side-menu__label"> Shops</span></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1">
                                            <a href="javascript:void(0);">Shops</a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/addshop">Add New Shops
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <a class="slide-item" href="/addshopproduct">Add Shop Product
                                            </a>
                                        </li> --}}
                                        <li>
                                            <a class="slide-item" href="/shops">view Shops</a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/approvedshops">Pending Full Approval</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><span
                                            class="side-menu__label">Product</span></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1">
                                            <a href="javascript:void(0);">Product </a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/addproduct">Add New Product
                                            </a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/products">Veiw Product </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><span
                                            class="side-menu__label">Shop Catogory</span></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1">
                                            <a href="javascript:void(0);">Shop Catogory</a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/addshopcategory">Add New Catogory
                                            </a>
                                        </li>

                                        <li>
                                            <a class="slide-item" href="/shopcategories">Shop Catogory Veiw
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><span
                                            class="side-menu__label">Product Catogory</span></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1">
                                            <a href="javascript:void(0);">Product Catogory</a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/addproductcategory">Add New Product Catogory
                                            </a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/categories">Veiw Product Catogory</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><span
                                            class="side-menu__label">Product SubCatogory</span></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1">
                                            <a href="javascript:void(0);">Product SubCatogory</a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/addproductsub">Add New Product SubCatogory
                                            </a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/subcategories">Veiw Product SubCatogory</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><span
                                            class="side-menu__label">Product Measurements</span></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1">
                                            <a href="javascript:void(0);">Product Measurements</a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/addmeasurement">Add Product Measurement
                                            </a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/measurements">Veiw Product Measurement</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><span
                                            class="side-menu__label">Service Providers</span></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1">
                                            <a href="javascript:void(0);">Service Providers</a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/addservice">Add New Service
                                            </a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="icons.html">Veiw Service</a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/addserviceprovider">Add New Service Provider
                                            </a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="icons.html">Veiw Service Provider</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><span
                                            class="side-menu__label"> Advertisement</span></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1">
                                            <a href="javascript:void(0);">Adedvertisement</a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="/addadvertisement">Add New Main Advertisement
                                            </a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="icons.html">Veiw Advertisement</a>
                                        </li>
                                    </ul>
                                </li>





                                <li class="side-item side-item-category">REGISTER  </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><span
                                            class="side-menu__label"> Users</span></a>
                                    <ul class="slide-menu">
                                        {{-- <li class="side-menu__label1">
                                            <a href="javascript:void(0);">Add New Service Provider</a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="addServiceProvider.html">Add New Service
                                            </a>
                                        </li>
                                        <li>
                                            <a class="slide-item" href="icons.html">Veiw Service Provider</a>
                                        </li> --}}
                                    </ul>
                                </li>





                            </ul>
                            <div class="slide-right" id="slide-right">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                                </svg>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- main-sidebar -->
            </div>

            <!-- main-content -->
            @yield('content')
            @yield('scripts')
            <!-- /main-content -->

            <!-- Sidebar-right-->

            <!--/Sidebar-right-->

            <!-- Message Modal -->
            <div class="modal fade" id="chatmodel" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-right chatbox" role="document">
                    <div class="modal-content chat border-0">
                        <div class="card overflow-hidden mb-0 border-0">
                            <!-- action-header -->
                            <div class="action-header clearfix">
                                <div class="float-start hidden-xs d-flex ms-2">
                                    <div class="img_cont me-3">
                                        <img src="../assets/img/faces/6.jpg" class="rounded-circle user_img"
                                            alt="img" />
                                    </div>
                                    <div class="align-items-center mt-2">
                                        <h4 class="text-white mb-0 fw-semibold">Daneil Scott</h4>
                                        <span class="dot-label bg-success"></span><span
                                            class="me-3 text-white">online</span>
                                    </div>
                                </div>
                                <ul class="ah-actions actions align-items-center">
                                    <li class="call-icon">
                                        <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal"
                                            data-bs-target="#audiomodal">
                                            <i class="si si-phone"></i>
                                        </a>
                                    </li>
                                    <li class="video-icon">
                                        <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal"
                                            data-bs-target="#videomodal">
                                            <i class="si si-camrecorder"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" data-bs-toggle="dropdown" aria-expanded="true">
                                            <i class="si si-options-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><i class="fa fa-user-circle"></i> View profile</li>
                                            <li><i class="fa fa-users"></i>Add friends</li>
                                            <li><i class="fa fa-plus"></i> Add to group</li>
                                            <li><i class="fa fa-ban"></i> Block</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="" class="" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="si si-close text-white"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- action-header end -->

                            <!-- msg_card_body -->
                            <div class="card-body msg_card_body">
                                <div class="chat-box-single-line">
                                    <abbr class="timestamp">February 1st, 2019</abbr>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="img_cont_msg">
                                        <img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                            alt="img" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you Jenna Side?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="msg_cotainer_send">
                                        Hi Connor Paige i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg"
                                            alt="img" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="img_cont_msg">
                                        <img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                            alt="img" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="msg_cotainer_send">
                                        You welcome Connor Paige
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg"
                                            alt="img" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="img_cont_msg">
                                        <img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                            alt="img" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Yo, Can you update Views?
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        But I must explain to you how all this mistaken born and I
                                        will give
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg"
                                            alt="img" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="img_cont_msg">
                                        <img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                            alt="img" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Yo, Can you update Views?
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        But I must explain to you how all this mistaken born and I
                                        will give
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg"
                                            alt="img" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="img_cont_msg">
                                        <img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                            alt="img" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Yo, Can you update Views?
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        But I must explain to you how all this mistaken born and I
                                        will give
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg"
                                            alt="img" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="img_cont_msg">
                                        <img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                            alt="img" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Okay Bye, text you later..
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <!-- msg_card_body end -->
                            <!-- card-footer -->
                            <div class="card-footer">
                                <div class="msb-reply d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Typing...." />
                                        <div class="input-group-text bg-transparent border-0 p-0">
                                            <button type="button" class="btn btn-primary">
                                                <i class="far fa-paper-plane" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card-footer end -->
                        </div>
                    </div>
                </div>
            </div>

            <!--Video Modal -->
            <div id="videomodal" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content bg-dark border-0 text-white">
                        <div class="modal-body mx-auto text-center p-7">
                            <h5>Valex Video call</h5>
                            <img src="../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3"
                                alt="img" />
                            <h4 class="mb-1 fw-semibold">Daneil Scott</h4>
                            <h6>Calling...</h6>
                            <div class="mt-5">
                                <div class="row">
                                    <div class="col-4">
                                        <a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
                                            <i class="fas fa-video-slash"></i>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a class="icon icon-shape rounded-circle text-white mb-0 me-3"
                                            href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                            <i class="fas fa-phone bg-danger text-white"></i>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
                                            <i class="fas fa-microphone-slash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal-body -->
                    </div>
                </div>
                <!-- modal-dialog -->
            </div>
            <!-- modal -->

            <!-- Audio Modal -->
            <div id="audiomodal" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content border-0">
                        <div class="modal-body mx-auto text-center p-7">
                            <h5>Valex Voice call</h5>
                            <img src="../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3"
                                alt="img" />
                            <h4 class="mb-1 fw-semibold">Udara</h4>
                            <h6>Calling...</h6>
                            <div class="mt-5">
                                <div class="row">
                                    <div class="col-4">
                                        <a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
                                            <i class="fas fa-volume-up bg-light text-dark"></i>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a class="icon icon-shape rounded-circle text-white mb-0 me-3"
                                            href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                            <i class="fas fa-phone text-white bg-success"></i>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
                                            <i class="fas fa-microphone-slash bg-light text-dark"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal-body -->
                    </div>
                </div>
                <!-- modal-dialog -->
            </div>
            <!-- modal -->

            <!-- Footer opened -->
        </div>
        <footer class="main-footer ht-45">

            <div class="container-fluid pd-t-0 ht-100p">
                <span>
                    Copyright © 2024
                    <a href="javascript:void(0);" class="text-primary"></a>Builder.lk
                    Designed with <span class="fa fa-heart text-danger"></span> by
                    <a href="javascript:void(0);"> AAIC </a> All rights reserved.</span>
            </div>



        </footer>
        <!-- Footer closed -->
        <!-- End Page -->

        {{-- <!-- Back-to-top -->
   <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

   <!-- JQuery min js -->
   <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

   <!-- Bootstrap Bundle js -->
   <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
   <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

   <!--Internal  Chart.bundle js -->
   <script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

   <!-- Moment js -->
   <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

   <!--Internal Sparkline js -->
   <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

   <!-- Moment js -->
   <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>

   <!--Internal Apexchart js-->
   <script src="{{ asset('assets/js/apexcharts.js') }}"></script>

   <!-- Rating js-->
   <script src="{{ asset('assets/plugins/ratings-2/jquery.star-rating.js') }}"></script>
   <script src="{{ asset('assets/plugins/ratings-2/star-rating.js') }}"></script>

   <!--Internal  Perfect-scrollbar js -->
   <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
   <script src="{{ asset('assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

   <!-- Eva-icons js -->
   <script src="{{ asset('assets/js/eva-icons.min.js') }}"></script>

   <!-- right-sidebar js -->
   <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>
   <script src="{{ asset('assets/plugins/sidebar/sidebar-custom.js') }}"></script>

   <!-- Sticky js -->
   <script src="{{ asset('assets/js/sticky.js') }}"></script>
   <script src="{{ asset('assets/js/modal-popup.js') }}"></script>

   <!-- Left-menu js-->
   <script src="{{ asset('assets/plugins/side-menu/sidemenu.js') }}"></script>

   <!-- Internal Map -->
   <script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
   <script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

   <!--Internal  index js -->
   <script src="{{ asset('assets/js/index.js') }}"></script>

   <!--themecolor js -->
   <script src="{{ asset('assets/js/themecolor.js') }}"></script>

   <!-- Apexchart js-->
   <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.vmap.sampledata.js') }}"></script>

   <!-- custom js -->
   <script src="{{ asset('assets/js/custom.js') }}"></script> --}}

   <script src="https://cdn.jsdelivr.net/gh/noumanqamar450/alertbox@main/version/1.0.2/alertbox.min.js"></script>
   <!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @if (session('success'))
        <script>
            alertbox.render({
                alertIcon: 'success',
                title: 'SUCCESS!',
                message: '{{ session('success') }}',
                btnTitle: 'OK',
                border: true
            });
        </script>
    @endif

    {{-- @if (session('error'))
        <script>
            alertbox.render({
                alertIcon: 'error',
                title: 'FAILED!',
                message: '{{ session('failed') }}',
                btnTitle: 'OK',
                border: true
            });
        </script>
    @endif --}}

    @if ($errors->any())
    <script>
            let errorList='';
            @foreach ($errors->all() as $error)
                // errorList+='{{$error}}+<br>';
                errorList+="<li>{{ $error }}</li>";
            @endforeach
            console.log(errorList);
            $(document).ready(function(){
                Swal.fire({
                    icon: 'error',
                    title: 'FAILED!',
                    html: errorList,
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-danger'
                    }
                });
            });
        </script>
    @endif

    @if (session('warning'))
        <script>
            alertbox.render({
                alertIcon: 'warning',
                title: 'WARNING!',
                message: '{{ session('warning') }}',
                btnTitle: 'OK',
                border: true
            });
        </script>
    @endif
    </body>
@endsection
