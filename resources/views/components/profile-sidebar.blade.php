<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Profile Card -->
        <div class="col-lg-2 col-md-4 col-sm-12 pt-2 pb-2">
            <div class="bg-white shadow-lg border-0">
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Profile Image -->
                        <div class="main-img-user profile-user mb-4">
                            <img alt="Profile Image" src="../assets/img/faces/6.jpg"
                                class="img-fluid rounded-circle border border-5 border-white">
                        
                        </div>

                        <!-- Shop Name -->
                        <h5 class="main-profile-name mb-3">{{$shop->name}}</h5>

                        <hr class="my-4">

                        <!-- Profile Details -->
                        <div class="main-profile-social-list">
                            <!-- Email -->
                            <div class="media mb-2">
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

                            <!--products Sections-->
                            <hr class="my-4"> 


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        
        <x-mainProfileCards/>
    </div>
</div>
{{-- <div class="bg-white shadow-lg border-0">
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Profile Image -->
            <div class="main-img-user profile-user mb-4">
                <img alt="Profile Image" src="{{ $profile->image ?? asset('default-image.jpg') }}"
                    class="img-fluid rounded-circle border border-5 border-white">
            </div>

            <!-- Profile Name -->
            <h5 class="main-profile-name mb-3">{{ $profile->name }}</h5>
            <hr class="my-4">

            <!-- Profile Details -->
            <div class="main-profile-social-list">
                <!-- Email -->
                @if(!empty($profile->email))
                <div class="media mb-2">
                    <div
                        class="media-icon bg-primary text-white rounded-circle d-flex justify-content-center align-items-center me-3">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        <span class="fw-bold">Email</span>
                        <p><a href="mailto:{{ $profile->email }}" class="text-decoration-none text-muted">{{ $profile->email }}</a></p>
                    </div>
                </div>
                @endif

                <!-- Phone -->
                @if(!empty($profile->phone))
                <div class="media mb-3">
                    <div
                        class="media-icon bg-success text-white rounded-circle d-flex justify-content-center align-items-center me-3">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <span class="fw-bold">Phone</span>
                        <p><a href="tel:{{ $profile->phone }}" class="text-decoration-none text-muted">{{ $profile->phone }}</a></p>
                    </div>
                </div>
                @endif

                <!-- Address -->
                @if(!empty($profile->address))
                <div class="media mb-3">
                    <div
                        class="media-icon bg-warning text-white rounded-circle d-flex justify-content-center align-items-center me-3">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="media-body">
                        <span class="fw-bold">Address</span>
                        <p class="text-muted">{{ $profile->address }}</p>
                    </div>
                </div>
                @endif

                <!-- Type-Specific Field -->
                @if($type === 'shop')
                <div class="media mb-3">
                    <div
                        class="media-icon bg-info text-white rounded-circle d-flex justify-content-center align-items-center me-3">
                        <i class="fa fa-store"></i>
                    </div>
                    <div class="media-body">
                        <span class="fw-bold">District</span>
                        <p class="text-muted">{{ $profile->district }}</p>
                    </div>
                </div>
                @elseif($type === 'serviceProvider')
                <div class="media mb-3">
                    <div
                        class="media-icon bg-danger text-white rounded-circle d-flex justify-content-center align-items-center me-3">
                        <i class="fa fa-tools"></i>
                    </div>
                    <div class="media-body">
                        <span class="fw-bold">Specialization</span>
                        <p class="text-muted">{{ $profile->specialization }}</p>
                    </div>
                </div>
                @elseif($type === 'professional')
                <div class="media mb-3">
                    <div
                        class="media-icon bg-secondary text-white rounded-circle d-flex justify-content-center align-items-center me-3">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="media-body">
                        <span class="fw-bold">Experience</span>
                        <p class="text-muted">{{ $profile->experience }}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div> --}}
