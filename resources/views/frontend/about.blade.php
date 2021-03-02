@extends('frontend.includes.layout')

@section('content')
<div class="event-listing-page">
    <!-- Page Banner -->
    <div class="page-banner">
        <div class="container d-flex">
            <h1 class="page-title lg-title flex-g-1">All Events</h1>
            <div class="bread-crumbs">
                <ul class="list-none d-flex justify-content-end">
                    <li class="xs-title"><a href="index.php" class="d-inline-block text-white">Home</a></li>
                    <span class="seperator px-2 text-white"> > </span>
                    <li class="xs-title active">Events</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Page Banner -->
	    <!-- About Section -->
	    <section class="about-section py-4">
	        <div class="container">
	            <div class="row">
					
	                <div class="col-lg-5 col-12 md-lg-0 mb-3">
	                    <div class="wrapper"> 
	                        <img  class="lazy-image" src="{{ asset('storage/about/' . $setting->about_image) }}" data-src="{{ asset('storage/about/' . $setting->about_image) }}" alt="">
	                    </div>
	                </div>
	                <div class="col-lg-7 col-12">
	                    <header class="section-header mb-3">
	                        <h2 class="section-title xs-title text-uppercase font-weight-bold"># About Us</h2>
	                        <h3 class="lg-title title text-black font-weight-bold text-uppercase">{{$setting->about_title}}</h3>
	                    </header>
	                    <div class="content">
	                        {!! $setting->about_us !!}
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End of About Section -->
	 	<!-- List Section -->
	    <section class="list-section py-5 bg-light">
	        <div class="container">
	            <header class="section-header mb-4 text-center">
	                <h2 class="text-center md-title text-black">What We do</h2>
	                <span class="position-relative d-inline-block for-af"></span>
	            </header>
	            <div class="row">
	            	@foreach ($categories as $category)
	            		<!-- col -->
		                <div class="col-lg-2 col-6 mb-3">
		                    <a href="service-detail.php" class="holder box-shadow-3 ls-title bg-white px-md-2 text-center">
		                        <img  class="lazy-image" src="{{ asset('storage/category/' . $category->category_icon) }}" data-src="{{ asset('storage/category/' . $category->category_icon) }}" alt="">
		                        <h2 class="icon-title text-black mb-0 mt-2 font-weight-bold">{{ $category->category_name }}</h2>
		                    </a>
		                </div>
	            	@endforeach
	            </div>
	        </div>
	    </section>
	    <!-- End of List Section -->
	    <!-- Mission section -->
	    <section class="our-mission py-5">
	        <div class="container">
	            <div class="row">
	            	<div class="col-md-4 col-12 mb-md-0 mb-3">
		                <div class="wrapper box-shadow-2 p-md-4 p-2">
		                    <h2 class="sm-title text-black font-weight-bold after-border-b-primary">Our Mission</h2>
		                    {!! $setting->our_mission !!}
		                </div>
		            </div>
		            <!-- Mission -->
		            <div class="col-md-4 col-12 mb-md-0 mb-3">
		                <div class="wrapper box-shadow-2 p-md-4 p-2 second">
		                    <h2 class="sm-title text-black font-weight-bold after-border-b-primary">Our vision</h2>
		                    {!! $setting->our_vision !!}
		                </div>
		            </div>
		            <!-- Mission -->
		            <div class="col-md-4 col-12 mb-md-0 mb-3">
		                <div class="wrapper box-shadow-2 p-md-4 p-2">
		                    <h2 class="sm-title text-black font-weight-bold after-border-b-primary">Our Value</h2>
		                    {!! $setting->our_values !!}
		                </div>
		            </div>
	            </div>
	            <div class="button mt-5 text-center">
	                <a href="#" class="button-one py-md-2 px-md-3 font-w-semi"><i class="far fa-heart mr-2"></i>Donate Now</a>
	            </div>
	    </section>
	    <!-- End of Mission -->
	    <!-- Causes Seciton -->
		<section class="our-causes-section py-5 bg-light">
		    <div class="container">
		        <header class="section-header-two text-center mb-2 d-flex justify-content-center">
		        	<div class="title flex-g-1">
			            <h2 class="section-title xs-title text-uppercase"><img src="assets/images/causes/like-white.png" alt="" class="mr-2"># Causes</h2>
			            <h3 class="lg-title text-dark font-weight-bold">Our Popular Causes</h3>
			        </div>
		        </header>
		        <div class="row">
		        	@foreach ($projects as $project)
		        		<div class="col-lg-6 col-12 mb-4">
			        		<div class="wrapper position-relative">
					            <div class="slider-wrapper bg-white p-md-3 box-shadow-1 pb-2">
					                <div class="row">
					                    <!-- Right -->
					                    <div class="col-md-4 col-12 mb-md-0 mb-2">
					                        <div class="img-holder">
					                            <img class="lazy-image" src="{{  asset('storage/project/'.$project->frontimage) }}" data-src=" {{  asset('storage/project/'.$project->frontimage) }}" alt="">
					                        </div>
					                    </div>
					                    <!-- Left -->
					                    <div class="col-md-8 col-12">
					                        <div class="content xs-title px-md-0 px-2">
					                            <a href="cause-detail.php" class="sm-title text-black font-weight-bold"> {{$project->title}} </a>
					                            <div class="fund pb-2 pt-1">
					                                <span class="text-sec raised">$51,867</span> Raised of <span class="goal text-black font-weight-bold">$ {{$project->goal}}</span> goal
					                            </div>
					                            <div class="progres position-relative w-75 mb-3">
					                                <span class="bar w-40"></span>
					                            </div>
					                            <p> {{ $project->excerpt }}</p>
					                            <div class="btn-more">
					                                <a href="cause-detail.php" class="button-four xs-title py-1">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
					                                <a href="cause-detail.php" class="ml-2 button-one-sec xs-title py-1">Donate Now <i class="fab fa-gratipay ml-2"></i></a>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
		        	@endforeach
		        	
			    </div>
			    <div class="all text-center mt-4">
		            <a href="event-listing.php" class="button-two">View all <i class="fas fa-arrow-right ml-2"></i></a>
		        </div>
		    </div>
		</section>
		<!-- End of Our causes -->
	    <!-- Team Section -->
		<section class="team-section py-4 bg-light">
		    <div class="container">
		        <div class="row no-gutters">
		            <div class="col-md-6 col-12">
		                <header class="section-header mb-3 text-right px-md-4 py-2">
		                    <h2 class="section-title xs-title text-uppercase font-weight-bold text-pri"># Team</h2>
		                    <h3 class="lg-title font-weight-bold text-black mb-3">Our <span>Volunteer</span></h3>
		                    <p>If you haven't any charity in your heart, You have the worst kind of heart trouble.</p>
		                    <a href="contact.php" class="left-two-border text-black d-inline-block mb-3">Become a Volunter</a>
		                </header>
		            </div>
		            @foreach ($teams as $team)
		            	<!-- Team -->
			            <div class="col-lg-3 col-md-6 col-12">
			                <div class="img-holder position-relative">
			                    <img class="lazy-image" src="{{asset('storage/team/'.$team->image)}}" data-src="{{asset('storage/team/'.$team->image)}}" alt="">
			                    <div class="team-des text-center p-2 bg-white position-absolute box-shadow-1">
			                        <h2 class="ls-title name mb-0 font-weight-bold text-dark">{{ $team->name }}</h2>
			                        <span class="desig">{{ $team->designation }}</span>
			                    </div>
			                </div>
			            </div>
		            @endforeach
		        </div>
		    </div>
		</section>
		<!-- End of Team Section -->
		<!-- Client Section -->
		<section class="client-section  text-center bg-light py-4">
		    <div class="container-fluid">
		    	<div class="swiper-container">
		        <!-- Additional required wrapper -->
			        <div class="swiper-wrapper">
					    @foreach ($partners as $partner)
		                    <div class="swiper-slide">
		                        <div class="slider-wrapper">
		                            <img class="lazy-image" src="{{ asset('storage/partners/'. $partner->icon) }}" data-src="{{ asset('storage/partners/'. $partner->icon) }}" alt="">
		                        </div>
		                    </div> <!-- end swiper-slide -->
		                @endforeach
			        </div>
			    </div>
		    </div>
		</section>
		<!-- End of Client section -->
	</div>
@endsection