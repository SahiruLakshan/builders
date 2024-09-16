@extends('admin.header')
@section('section')
	<!-- Loader -->
	<div id="global-loader">
		<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->
		<!-- main-content -->
			<!-- container -->
			<div class="main-container container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Shop Informations</h4><span
								class="text-muted mt-1 tx-13 ms-2 mb-0">/About Your Shop</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pe-1 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon me-2 btn-b"><i
									class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pe-1 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon me-2"><i
									class="mdi mdi-star"></i></button>
						</div>
						<div class="pe-1 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon me-2"><i
									class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
									id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuDate"
									x-placement="bottom-end">
									<a class="dropdown-item" href="javascript:void(0);">2015</a>
									<a class="dropdown-item" href="javascript:void(0);">2016</a>
									<a class="dropdown-item" href="javascript:void(0);">2017</a>
									<a class="dropdown-item" href="javascript:void(0);">2018</a>
								</div>
							</div>
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
											<img alt="" src="{{ asset('assets/shop/'.$shop->shop_img) }}"><a
												class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">{{ $shop->name }}</h5>
											</div>
										</div>
										<hr class="mg-y-30">
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="fa fa-envelope"></i>
												</div>
												<div class="media-body">
													<span class="fw-bold">Email</span> <span>{{ $shop->email }}</span>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="fa fa-phone"></i>
												</div>
												<div class="media-body">
													<span class="fw-bold">Phone</span>  <span>{{ $shop->p_number }}</span>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="fa-solid fa-house-chimney-user"></i>
												</div>
												<div class="media-body">
													<span class="fw-bold">Address</span>{{ $shop->address }}<span></span>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="fa-solid fa-house"></i>
												</div>
												<div class="media-body">
													<span class="fw-bold">District</span>  <span>{{ $district->dis_name }}</span>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="fa-solid fa-city"></i>
												</div>
												<div class="media-body">
													<span class="fw-bold">City</span> <span>{{ $city->ds_name }}</span>
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
												<h5 class="tx-13">Products</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">{{ $product_count }}</h2>
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
												<h5 class="tx-13">Brands</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">{{ $brand_count }}</h2>
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
												<h5 class="tx-13">Categories</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">{{ $category_count }}</h2>
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
													class="hidden-xs">Products</span> </a>
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
														@foreach ($shop_product as $product)
														    <tr>
														    	<th scope="row">{{ $product->product_id }}</th>
														    	<td>{{ $product->product->name }}</td>
														    	<td>{{ $product->category->name }}</td>
														    	<td>{{ $product->brand->b_name}}</td>
														    	<td>{{ $product->category->unit_price }} LKR</td>
														    </tr>
														@endforeach
													</tbody>
												</table>
											</div>
										</div>
						
									</div>
									<div class="tab-pane" id="gallery">
										<form action="{{url ('shop/update',$shop->id) }}" method="POST" class="form-horizontal">
											@csrf
											@method('PUT')
											<div class="mb-4 main-content-label">Basic information</div>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Email</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" name="email" placeholder="E-mail" value="{{ $shop->email }}">
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Phone number</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" name="p_number" placeholder="Phone" value="{{ $shop->p_number }}">
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Address</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" name="address" placeholder="Address" value="{{ $shop->address }}">
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">District</label>
													</div>
													<div class="col-md-9">
														<select name="district" id="district"
                                                            class="form-control form-select select2"
                                                            data-bs-placeholder="Select District" required>

															@php
																$select = $district->dis_name
															@endphp
															
                                                            @foreach ($alldistricts as $districts)
                                                                <option value="{{ $districts->dis_id }}" {{$districts->dis_name == $select ? 'selected':''}}>
                                                                    {{ $districts->dis_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Facebook Link</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" name="fb_link" placeholder="Enter Your Facebook Link" value="{{ $shop->fb_link }}">
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">City</label>
													</div>
													<div class="col-md-9">
														<select name="city" id="city"
                                                            class="form-control form-select select2"
                                                            data-bs-placeholder="Select City" required>
															@php
																$select = $city->ds_name
															@endphp

                                                            @foreach ($allcities as $cities)
                                                                <option value="{{ $cities->ds_id }}" {{$cities->ds_name == $select ? 'selected':''}}>
                                                                    {{ $cities->ds_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
													</div>
												</div>
											</div>
											<div class="w-100 d-flex justify-content-end">
												<button type="submit" class="btn btn-primary">Save changes</button>
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
		<!-- main-content closed -->
@endsection


	
