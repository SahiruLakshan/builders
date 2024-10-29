@extends('profilesidebar')

@section('profiles')

	<!-- Loader -->
	<div id="global-loader">
		<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- Page -->
	<div class="page">
		

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">addService Provider</h4><span
								class="text-muted mt-1 tx-13 ms-2 mb-0">/ Profile</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="ps-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<img alt="" src="../assets/img/faces/6.jpg"><a
												class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">Service Provider Name</h5>
											</div>
										</div>
									
									
										<hr class="mg-y-30">
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="fa fa-envelope"></i>
												</div>
												<div class="media-body">
													<span class="fw-bold">Email</span> <span>shopname@gmil.com</span>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="fa fa-phone"></i>
												</div>
												<div class="media-body">
													<span class="fw-bold">Phone</span>  <span>+94 76 88 55 987</span>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="fa-solid fa-house-chimney-user"></i>
												</div>
												<div class="media-body">
													<span class="fw-bold">Address</span> <span>1st street, colombo</span>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="fa-solid fa-house"></i>
												</div>
												<div class="media-body">
													<span class="fw-bold">District</span>  <span>Colombo</span>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="fa-solid fa-city"></i>
												</div>
												<div class="media-body">
													<span class="fw-bold">City</span> <span>Homagama</span>
												</div>
											</div>
											
										</div>
								
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="row row-sm">
							<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div class="counter-status d-flex md-mb-0">
											<div class="counter-icon bg-primary-transparent">
												<i class="icon-layers text-primary"></i>
											</div>
											<div class="ms-auto">
												<h5 class="tx-13">Services</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">1,587</h2>
												<p class="text-muted mb-0 tx-11"><i
														class="si si-arrow-up-circle text-success me-1"></i>increase</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div class="counter-status d-flex md-mb-0">
											<div class="counter-icon bg-danger-transparent">
												<i class="icon-layers text-danger"></i>
											</div>
											<div class="ms-auto">
												<h5 class="tx-13">Projects</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">46,782</h2>
												<p class="text-muted mb-0 tx-11"><i
														class="si si-arrow-up-circle text-success me-1"></i>increase</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div class="counter-status d-flex md-mb-0">
											<div class="counter-icon bg-success-transparent">
												<i class="icon-layers text-success"></i>
											</div>
											<div class="ms-auto">
												<h5 class="tx-13">On Going Projects</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">1,890</h2>
												<p class="text-muted mb-0 tx-11"><i
														class="si si-arrow-up-circle text-success me-1"></i>increase</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="tabs-menu ">
									<!-- Tabs -->
									<ul class="nav nav-tabs profile navtab-custom panel-tabs">
										<li class="">
											<a href="#home" data-bs-toggle="tab" class="active" aria-expanded="true"> <span
													class="visible-xs">
													<i class="icon-layers"></i>
												</span> <span
													class="hidden-xs">Our Services</span> </a>
										</li>
										<li class="">
											<a href="#gallery" data-bs-toggle="tab" aria-expanded="false"> <span
													class="visible-xs"><i class="fa-regular fa-user"></i></span>
												<span class="hidden-xs">Edit profile</span> </a>
										</li>
									</ul>
								</div>
								<div class="tab-content border border-top-0 p-4 br-dark">
									<div class="tab-pane active" id="home">
										<h4 class="tx-15 text-uppercase mb-3">Products</h4>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table mg-b-0 text-md-nowrap">
													<thead>
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Category</th>
															<th>Brand</th>
															<th>Price</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td>Cement</td>
															<td>Construction</td>
															<td>ultratech</td>
															<td>2000 LKR</td>
														</tr>
														<tr>
															<th scope="row">1</th>
															<td>Cement</td>
															<td>Construction</td>
															<td>ultratech</td>
															<td>2000 LKR</td>
														</tr>
														<tr>
															<th scope="row">1</th>
															<td>Cement</td>
															<td>Construction</td>
															<td>ultratech</td>
															<td>2000 LKR</td>
														</tr>
														<tr>
															<th scope="row">1</th>
															<td>Cement</td>
															<td>Construction</td>
															<td>ultratech</td>
															<td>2000 LKR</td>
														</tr>
														<tr>
															<th scope="row">1</th>
															<td>Cement</td>
															<td>Construction</td>
															<td>ultratech</td>
															<td>2000 LKR</td>
														</tr>
														<tr>
															<th scope="row">1</th>
															<td>Cement</td>
															<td>Construction</td>
															<td>ultratech</td>
															<td>2000 LKR</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
						
									</div>
									<div class="tab-pane" id="gallery">
										<form class="form-horizontal">
											<div class="mb-4 main-content-label">Basic information</div>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Email</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="E-mail" value="shop@gmail.com">
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Phone number</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="Phone" value="+94765896541">
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Address</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="Address" value="1st street, Colombo">
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">District</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="District" value="Colombo">
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">City</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="City" value="Homagama">
													</div>
												</div>
											</div>
											<div class="w-100 d-flex justify-content-end">
												<button class="btn btn-primary">Save changes</button>
											</div>
											
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->



	
		{{-- <!-- Footer opened -->
		<div class="main-footer ht-45">
			<div class="container-fluid pd-t-0 ht-100p">
				<span> Copyright © 2022 <a href="javascript:void(0);" class="text-primary">Valex</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a>
					All rights reserved.</span>
			</div>
		</div>
		<!-- Footer closed --> --}}

	</div>
	<!-- End Page -->

@endsection