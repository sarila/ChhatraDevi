
@extends('frontend.includes.layout')

@section('content')
	<div class="about-page">
		<!-- Page Banner -->
		<div class="page-banner">
			<div class="container">
				<h1 class="page-title lg-title">Contact Info</h1>
				<div class="bread-crumbs">
					<ul class="list-none d-flex justify-content-end">
						<li class="xs-title"><a href="index.php" class="d-inline-block text-white">Home</a></li>
						<span class="seperator px-2 text-white"> > </span>
						<li class="xs-title active">Contact Us</li>
					</ul>
			</div>
		</div>	
	</div>
			
		<!-- End of Page Banner -->
		<section class="contact-section bg-light pb-4">
			<div class="map box-shadow-1 p-md-4 bg-white mb-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28259.83554964602!2d85.31146688702432!3d27.702479548794937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1980e9319e7f%3A0x220dee5bf8a34f6!2sTech%20Coderz!5e0!3m2!1sen!2snp!4v1606127244622!5m2!1sen!2snp" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="container">
				<div class="box-shadow-1 p-md-4 bg-white">
					<div class="row">
						<div class="col-lg-6 col-12 mb-4">
							<h2 class="xs-title left-border text-uppercase d-inline-block text-dark">GET IN TOUCH</h2>
							<h3 class="lg-title text-black font-weight-semi mb-4">Contact with us for any information</h3>
							<div class="contact-info">
								<!-- Contact info -->
								<div class="wrapper d-flex mb-4">
									<div class="icon box-shadow-1 mr-3 d-flex justify-content-center align-items-center">
										<i class="md-title fas fa-map-marker-alt text-main"></i>
									</div>
									<div class="content">
										<h4 class="ls-title text-black mb-0">Address</h4>
										<h5 class="xs-title">{{$setting->address}}</h5>
									</div>
								</div>
								<!-- Contact info -->
								<div class="wrapper d-flex mb-4">
									<div class="icon box-shadow-1 mr-3 d-flex justify-content-center align-items-center">
										<i class="ls-title text-main fas fa-mobile-alt"></i>
									</div>
									<div class="content">
										<h4 class="ls-title text-black mb-0">Phone</h4>
										<h5 class="xs-title">{{$setting->contact_number}}</h5>
									</div>
								</div>
								<!-- Contact info -->
								<div class="wrapper d-flex mb-4">
									<div class="icon text-main box-shadow-1 mr-3 d-flex justify-content-center align-items-center">
										<i class="ls-title text-main far fa-envelope "></i>
									</div>
									<div class="content">
										<h4 class="ls-title text-black mb-0">Email</h4>
										<h5 class="xs-title">{{$setting->email}}</h5>
									</div>
								</div>
							</div>
						</div>
						<!-- Left -->

						<div class="col-lg-6 col-12">
					       @if(Session::has('error_message'))
			                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="height: 40px; padding: 10px;">
			                        {{ Session::get('error_message') }}
			                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                            <span aria-hidden="true" style="position: relative; top: -10px;">&times;</span>
			                        </button>
			                    </div>
			                @endif
			                @if(Session::has('success_message'))
			                    <div class="alert alert-info alert-dismissible fade show" role="alert" style="height: 40px; padding: 10px;">
			                        {{ Session::get('success_message') }}
			                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                            <span aria-hidden="true" style="position: relative; top: -10px;">&times;</span>
			                        </button>
			                    </div>
			                @endif
			                @if($errors->any())
			                    <div class="alert alert-danger" >
			                        <ul style="list-style: none; ">
			                            @foreach($errors->all() as $error)
			                                <li>{{ $error }}</li>
			                            @endforeach
			                        </ul>
			                    </div>
			                @endif
							<form action="{{route('contact.store')}}" class="contact-form" method="POST">
								@csrf
								<div class="row">

									<div class="col-md-6 col-12 mb-3">
										<label>Your Name</label>
										<input type="text" name="name" class="form-control" placeholder="Your Name">
									</div>
									<div class="col-md-6 col-12 mb-3">
										<label>Your Email</label>
										<input type="email" name="email" class="form-control" placeholder="Your Email">
									</div>
									<div class="col-12 mb-3">
										<label>Subject</label>
										<input type="text" name="subject" class="form-control" placeholder="Subject">
									</div>
									<div class="col-12 mb-3">
										<label>Your Messsage</label>
										<textarea placeholder="Message" class="form-control" name="message"  cols="5" rows="10"></textarea>
									</div>
									<div class="col-12">
										<button type="submit" class="button-one">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection