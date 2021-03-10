@extends('frontend.includes.layout')

@section('content')

	<div class="cause-listing-page cause-detail">
	    <!-- Page Banner -->
	    <div class="page-banner">
	        <div class="container d-flex">
	            <h1 class="page-title lg-title flex-g-1">Projects Single</h1>
	            <div class="bread-crumbs">
	                <ul class="list-none d-flex justify-content-end">
	                    <li class="xs-title"><a href="{{ route('indexPage')}}" class="d-inline-block text-white">Home</a></li>
	                    <span class="seperator px-2 text-white"> > </span>
	                    <li class="xs-title active">project</li>
	                </ul>
	            </div>
	        </div>
	    </div>
	    <!-- End of Page Banner -->
	    <!-- Service Description Seciton -->
	    <section class="service-section-desrip cause-detail py-5 bg-light">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-9 col-12">
	                    <div class="wrapper bg-white box-shadow-2">
	                        <img class="lazy-image" src="{{asset('storage/project/'. $projectDetails->coverimage)}}" data-src="{{asset('storage/project/'. $projectDetails->coverimage)}}" alt="">
	                    </div>
	                    <nav>
	                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
	                            <a class="tab-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Summary</a>
	                            <a class="tab-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Project Photos</a>
	                            <a class="tab-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Project Donation Form</a>
	                        </div>
	                    </nav>
	                    <div class="tab-content" id="nav-tabContent">
	                        <!-- Tab Content -->
	                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
	                            <div class="wrapper bg-white box-shadow-2 py-4 px-md-3 px-2">
	                            	{!! $projectDetails->description !!}
	                            </div>
	                        </div>
	                        <!-- Tab Content -->
	                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
	                            <!-- Team Section -->
	                            <section class="team-section gallery-single-section py-5 bg-white">
	                                <header class="section-header-two mb-4">
	                                    <h3 class="lg-title text-dark font-weight-bold after-border-b-primary">Cause Photos</h3>
	                                </header>
	                                <div class="row no-gutters">
	                                	@foreach($galleries as $gallery)
		                                    <!-- Team -->
		                                    <div class="col-lg-3 col-md-6 col-12">
		                                        <div class="img-holder position-relative box-shadow-2 p-2 bg-white">
		                                            <a data-fancybox="gallery" href="{{asset('storage/galleries/'. $gallery->image)}}">
		                                                <img class="lazy-image" src="{{asset('storage/galleries/'. $gallery->image)}}" data-src="{{asset('storage/galleries/'. $gallery->image)}}" alt="">
		                                            </a>
		                                        </div>
		                                    </div>	
	                                    @endforeach
	                                </div>
	                            </section>
	                            <!-- End of Team Section -->
	                        </div>
	                        <!-- Tab Content -->
	                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
	                            <div class="wrapper p-md-4 p-2 box-shadow-2 bg-white">
	                                <header class="section-header-two mb-2">
	                                    <h3 class="md-title text-dark font-weight-bold after-border-b-primary">Donation Form</h3>
	                                </header>
	                                <form id="form-donation" action="#" class="form-holder">
	                                    <div class="pay-method mb-4">
	                                        <h2 class="xs-title border-bottom mb-3">Select Payment Method</h2>
	                                        <ul class="list-none d-flex">
	                                            <div class="radio mr-3">
	                                                <input type="radio" id="male" name="gender" value="male">
	                                                <label for="male">Esewa</label>
	                                            </div>
	                                            <div class="radio mr-3">
	                                                <input type="radio" id="male" name="gender" value="male">
	                                                <label for="male">Fone Pay</label>
	                                            </div>
	                                            <div class="radio mr-3">
	                                                <input type="radio" id="male" name="gender" value="male">
	                                                <label for="male">Khalti</label>
	                                            </div>
	                                        </ul>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-12 mb-3">
	                                            <label class="xs-title font-weight-bold text-black d-block">CHOOSE YOUR DONATE AMOUNT<span class="text-danger">*</span></label>
	                                            <span class="d-inline-block currency">$</span><input type="text" placeholder="Amt" class="form-control w-25 d-inline-block amt">
	                                        </div>
	                                        <div class="col-lg-6 col-12 mb-3">
	                                            <label class="xs-title font-weight-bold text-black">Name <span class="text-danger">*</span></label>
	                                            <input type="text" placeholder="Full Name" class="form-control">
	                                        </div>
	                                        <div class="col-lg-6 col-12 mb-3">
	                                            <label class="xs-title font-weight-bold text-black">Email Address<span class="text-danger">*</span></label>
	                                            <input type="email" placeholder="Email" class="form-control">
	                                        </div>
	                                        <div class="col-12 mb-3">
	                                            <label class="xs-title font-weight-bold text-black">Your Message<span class="text-danger">*</span></label>
	                                            <textarea class="form-control" name="msg" placeholder="Your Message"></textarea>
	                                        </div>
	                                    </div>
	                                </form>
	                                <div class="btn-holder">
	                                    <button type="submit" class="button-one cursor-pointer">Submit</button>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- Right -->
	                <div class="col-md-3 col-12">
	                    <div class="p-md-3 p-2 box-shadow-2 mb-5  donate-count">
	                        <span class="text d-inline-block mb-3"><span class="raised">$75,682</span>raised of <span class="goal">$80,000</span> goal</span>
	                        <div class="progress mb-2">
	                            <span class="inner d-inline-block progress-bar"></span>
	                        </div>
	                        <div class="add-info xs-title d-flex mb-2">
	                            <span class="text flex-g-1"><span class="font-weight-bold text-dark d-c-numb mr-1 ">580 </span>donations</span>
	                            <span class="text"><span class="font-weight-bold text-dark d-numb mr-1">$4,318 </span>to go</span>
	                        </div>
	                        <div class="d-btn">
	                            <a href="donation.php" class="button-one d-block text-center"> <i class="far fa-heart mr-2"></i>Donate Now</a>
	                        </div>
	                    </div>
	                    <!-- End of Donation BTN -->
	                    <div class="list mb-5 ">
	                        <h2 class="bg-main py-2 text-center xs-title text-white mb-0">
	                            <i class="fas fa-download mr-3"></i> Downloadable Resources
	                        </h2>
	                        <ul class="list-none text-center">
	                            <a class="xs-title d-block py-2 box-shadow-1 font-weight-bold" href="assets/images/logo.png" download="PDF File"><i class="far fa-file-alt mr-2"></i>PDF Article File</a>
	                            <a class="xs-title d-block py-2 box-shadow-1 font-weight-bold" href="assets/images/logo.png" download="PDF File"><i class="far fa-file-alt mr-2"></i>PDF Article File</a>
	                            <a class="xs-title d-block py-2 box-shadow-1 font-weight-bold" href="assets/images/logo.png" download="PDF File"><i class="far fa-file-alt mr-2"></i>PDF Article File</a>
	                        </ul>
	                    </div>
	                    <!-- End of List -->
	                    <div class="share mb-5 text-center ">
	                        <a href="#" class="mb-2 d-block"><img src="assets/images/facebook_badge.svg" alt=""></a>
	                        <a href="#" class="d-block"><img src="assets/images/twitter_badge.svg" alt=""></a>
	                    </div>
	                    <!-- End of Share -->
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End of Service Description Seciton -->
	</div>

@endsection