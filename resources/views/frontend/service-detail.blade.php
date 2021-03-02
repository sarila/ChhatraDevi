@extends('frontend.includes.layout')

@section('content')

	<div class="service-detail-page">
		<!-- Page Banner -->
		<div class="page-banner">
			<div class="container d-flex">
				<h1 class="page-title lg-title flex-g-1">{{ $serviceDetail->category_name }}</h1>
				<div class="bread-crumbs">
					<ul class="list-none d-flex justify-content-end">
						<li class="xs-title"><a href=" {{route('indexPage')}}" class="d-inline-block text-white">Home</a></li>
						<span class="seperator px-2 text-white"> > </span>
						<li class="xs-title active">Service Detail</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Service Description Seciton -->
		<section class="service-section-desrip pt-5 bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-12">
						<div class="wrapper bg-white p-md-3 p-2 box-shadow-2">
							{!! $serviceDetail->description !!}
						</div>
					</div>
					<!-- Right -->
					<div class="col-md-3 col-12">
						<div class="list mb-4">
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
						<div class="list">
							<h2 class="bg-main py-2 text-center xs-title text-white mb-0">
								<i class="far fa-heart mr-2"></i> Related Services
							</h2>
							<ul class="list-none text-center">
								@foreach ($relatedServices as $relatedService)
									<a class="xs-title d-block py-2 box-shadow-1 font-weight-bold" href="assets/images/logo.png" download="PDF File"><i class="far fa-heart mr-2"></i>{{$relatedService->category_name}}</a>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Service Description Seciton -->
		<!-- Projects -->
		<section class="project-section py-5 my-5">
			<div class="container">
				<header class="section-header-two text-left mb-2 d-flex">
					<div class="title flex-g-1">
						<h2 class="section-title xs-title text-uppercase"><img src="assets/images/causes/like-white.png" alt="" class="mr-2"># Projects</h2>
						<h3 class="md-title text-dark font-weight-bold">Latest Completed Projects in this Service field</h3>
					</div>
					<div class="all text-center mt-4">
						<a href="completed-project.php" class="button-one">View all <i class="fas fa-arrow-right ml-2"></i></a>
					</div>
				</header>
				<div class="project-list">
					<div class="row">
						@foreach ($projects as $project)
							<!-- Project -->
							<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-3">
								<div class="holder box-shadow-2 p-2">
									<a href="project-detail.php " class="wrapper d-block box-shadow-2">
									  <img class="lazy-image" src="{{asset('storage/project/'.$project->coverimage)}}" data-src="{{asset('storage/project/'.$project->coverimage)}}" alt="Avatar" class="image">
									  <div class="cover-bg">
										<div class="text"><i class="far fa-heart mr-2"></i> {{$project->title}}</div>
									  </div>
									</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<!-- End of Projects -->
		<!--Gallery  Section -->
		<section class="team-section gallery-single-section py-5 bg-light">
		    <div class="container">
		    	<header class="section-header-two mb-4 text-center">
	                <h2 class="section-title xs-title text-uppercase mb-3"><img src="assets/images/causes/like-white.png" alt="" class="mr-2">#Gallery</h2>
	                <h3 class="lg-title text-dark font-weight-bold">From Education Service</h3>
	            </header>
		        <div class="row no-gutters">
		        	@if(isset($allImages)):
			        	@foreach ($allImages as $image)
				            <!-- Team -->
				            <div class="col-lg-3 col-md-6 col-12">
				                <div class="img-holder position-relative box-shadow-2 p-2 bg-white">
				                    <a data-fancybox="gallery" href="{{asset('storage/galleries/'. $image->image)}}">
				                    	<img class="lazy-image" src="{{asset('storage/galleries/'. $image->image)}}" data-src="{{asset('storage/galleries/'. $image->image)}}" alt="">
				                    </a>
				                </div>
				            </div>
			            @endforeach
		            @else
		            	<h3>No Photos Availabe</h3>
		            @endif

		        </div>
		    </div>
		</section>
		<!-- End of Gallery Section -->
	</div>

@endsection