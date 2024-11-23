{{-- <style>
    .main-profile-social-list a:hover {
    color: #fff !important; /* Keep links white on hover */
}
</style> --}}
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Profile Card -->
        <div class="col-lg-2 col-md-4 col-sm-12 pt-2 pb-2">
            <div class="bg-white shadow-lg border-0 ">
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Profile Image -->
                        <div class="main-img-user profile-user mb-4">
                            <img alt="Profile Image" src="../assets/img/faces/6.jpg"
                                class="img-fluid rounded-circle border border-5 border border-primary-subtle">
                        
                        </div>

                        <!-- Shop Name -->
                        <h5 class="main-profile-name mb-3">{{$shop->name}}</h5>

                        <hr class="my-4">

                        <!-- Profile Details -->
                        {{-- <div class="main-profile-social-list border shadow-lg  text-white" style="background-color: #002b49">
                            <!-- Email -->
                            <div class="media text-white ">
                             
                                <div class="media-body text-break text-wrap">
                                    <span class="fw-bold">Email</span>
                                    <p><a href="mailto:shopname@example.com" class="text-decoration-none text-muted">{{$shop->email}}</a></p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="media text-center">
                              
                                <div class="media-body text-white">
                                    <span class="fw-bold">Phone</span>
                                    <p><a href="tel:+94 76 88 55 987" class="text-decoration-none text-muted">{{$shop->p_number}}</a></p>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="media text-center text-break text-wrap">
                              
                                <div class="media-body text-white">
                                    <span class="fw-bold">Address</span>
                                    <p class="text-muted">{{$shop->address}}</p>
                                </div>
                            </div>

                            <!-- District -->
                            <div class="media ">
                               
                                <div class="media-body text-white">
                                    <span class="fw-bold">District</span>
                                    <p class="text-muted text-white">{{$shop->location}}</p>
                                </div>
                            </div>

                            <!-- City -->
                            <div class="media ">
                                
                                <div class="media-body ">
                                    <span class="fw-bold">City</span>
                                    <p class="text-muted text-white">Homagama</p>
                                </div>
                            </div>

                            <!--products Sections-->
                            <hr class="my-4"> 


                        </div> --}}
                        <!-- Profile Details -->
                        <div class="text-break text-wrap" >
                            <div class="accordion" id="profileAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingProfileDetails">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProfileDetails" aria-expanded="false" aria-controls="collapseProfileDetails" style="background-color: #002b49; color: white;">
                                            Profile Details
                                        </button>
                                    </h2>
                                    <div class="main-profile-social-list border shadow-lg text-white" style="background-color: #002b49">
                                        <div id="collapseProfileDetails" class="accordion-collapse collapse" aria-labelledby="headingProfileDetails" data-bs-parent="#profileAccordion">
                                            <div class="accordion-body">
                                                <!-- Email -->
                                                <div class="media">
                                                    <div class="media-body">
                                                        <span class="fw-bold">Email</span>
                                                        <p><a href="mailto:shopname@example.com" class="text-decoration-none text-white">{{$shop->email}}</a></p>
                                                    </div>
                                                </div>
                                                <!-- Phone -->
                                                <div class="media text-center">
                                                    <div class="media-body">
                                                        <span class="fw-bold">Phone</span>
                                                        <p><a href="tel:+94 76 88 55 987" class="text-decoration-none text-white">{{$shop->p_number}}</a></p>
                                                    </div>
                                                </div>
                                                <!-- Address -->
                                                <div class="media text-center">
                                                    <div class="media-body">
                                                        <span class="fw-bold">Address</span>
                                                        <p class="text-white">{{$shop->address}}</p>
                                                    </div>
                                                </div>
                                                <!-- District -->
                                                <div class="media">
                                                    <div class="media-body">
                                                        <span class="fw-bold">District</span>
                                                        <p class="text-white fs-6">{{$shop->district_name}}</p>
                                                    </div>
                                                </div>
                                                <!-- City -->
                                                <div class="media">
                                                    <div class="media-body">
                                                        <span class="fw-bold">City</span>
                                                        <p class="text-white">{{$shop->city_name}}</p>
                                                    </div>
                                                </div>
                                                <!-- Products Section -->
                                                <hr class="my-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingAnotherSection">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAnotherSection" aria-expanded="true" aria-controls="collapseAnotherSection" style="background-color: #002b49; color: white;">
                                            Another Section
                                        </button>
                                    </h2>
                                    <div id="collapseAnotherSection" class="accordion-collapse collapse show" aria-labelledby="headingAnotherSection" data-bs-parent="#profileAccordion"  style="background-color: #002b49">
                                        <div class="accordion-body">
                                            <!-- Add content for another section here -->
                                           <x-offerings/>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingAnotherSection">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAnotherSection" aria-expanded="true" aria-controls="collapseAnotherSection" style="background-color: #002b49; color: white;">
                                            Another Section
                                        </button>
                                    </h2>
                                    <div id="collapseAnotherSection" class="accordion-collapse collapse show" aria-labelledby="headingAnotherSection" data-bs-parent="#profileAccordion"  style="background-color: #002b49">
                                        <div class="accordion-body">
                                            <!-- Add content for another section here -->
                                           <x-offerings/>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>

                            
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
