<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Profile Card -->
        <div class="col-lg-3 col-md-4 col-sm-12 pt-2 pb-2">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Profile Image -->
                        <div class="main-img-user profile-user mb-4">
                            <img alt="Profile Image" src="../assets/img/faces/6.jpg"
                                class="img-fluid rounded-circle border border-5 border-white">
                            <a class="fas fa-camera profile-edit position-absolute top-50 start-50 translate-middle"
                                href="JavaScript:void(0);" style="color: #fff;"></a>
                        </div>

                        <!-- Shop Name -->
                        <h5 class="main-profile-name mb-3">{{$shop->name}}</h5>

                        <hr class="my-4">

                        <!-- Profile Details -->
                        <div class="main-profile-social-list">
                            <!-- Email -->
                            <div class="media mb-3">
                                <div class="media-icon bg-primary text-white rounded-circle d-flex justify-content-center align-items-center me-3">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <span class="fw-bold">Email</span>
                                    <p><a href="mailto:shopname@example.com" class="text-decoration-none text-muted">{{$shop->email}}</a></p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="media mb-3">
                                <div class="media-icon bg-success text-white rounded-circle d-flex justify-content-center align-items-center me-3">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <span class="fw-bold">Phone</span>
                                    <p><a href="tel:+94 76 88 55 987" class="text-decoration-none text-muted">{{$shop->p_number}}</a></p>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="media mb-3">
                                <div class="media-icon bg-warning text-white rounded-circle d-flex justify-content-center align-items-center me-3">
                                    <i class="fa-solid fa-house-chimney-user"></i>
                                </div>
                                <div class="media-body">
                                    <span class="fw-bold">Address</span>
                                    <p class="text-muted">{{$shop->address}}</p>
                                </div>
                            </div>

                            <!-- District -->
                            <div class="media mb-3">
                                <div class="media-icon bg-info text-white rounded-circle d-flex justify-content-center align-items-center me-3">
                                    <i class="fa-solid fa-house"></i>
                                </div>
                                <div class="media-body">
                                    <span class="fw-bold">District</span>
                                    <p class="text-muted">{{$shop->location}}</p>
                                </div>
                            </div>

                            <!-- City -->
                            <div class="media mb-3">
                                <div class="media-icon bg-danger text-white rounded-circle d-flex justify-content-center align-items-center me-3">
                                    <i class="fa-solid fa-city"></i>
                                </div>
                                <div class="media-body">
                                    <span class="fw-bold">City</span>
                                    <p class="text-muted">Homagama</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        {{-- <div class="col-lg-9 col-md-8 col-sm-12 pt-2 pb-2">
            <div class="container">
                <!-- Row to display counters -->
                <div class="row">
                    <!-- Card for Services -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="counter-icon bg-primary-transparent">
                                        <i class="icon-layers text-primary"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <h5 class="tx-13">Services</h5>
                                        <h2 class="mb-0 tx-22">1,587</h2>
                                        <p class="text-muted mb-0"><i class="si si-arrow-up-circle text-success"></i> increase</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Projects -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="counter-icon bg-danger-transparent">
                                        <i class="icon-layers text-danger"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <h5 class="tx-13">Projects</h5>
                                        <h2 class="mb-0 tx-22">46,782</h2>
                                        <p class="text-muted mb-0"><i class="si si-arrow-up-circle text-success"></i> increase</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Ongoing Projects -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="counter-icon bg-success-transparent">
                                        <i class="icon-layers text-success"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <h5 class="tx-13">On Going Projects</h5>
                                        <h2 class="mb-0 tx-22">1,890</h2>
                                        <p class="text-muted mb-0"><i class="si si-arrow-up-circle text-success"></i> increase</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Another Ongoing Projects Card -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="counter-icon bg-warning-transparent">
                                        <i class="icon-layers text-warning"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <h5 class="tx-13">Ongoing Projects</h5>
                                        <h2 class="mb-0 tx-22">1,890</h2>
                                        <p class="text-muted mb-0"><i class="si si-arrow-up-circle text-success"></i> increase</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <x-mainProfileCards/>
    </div>
</div>