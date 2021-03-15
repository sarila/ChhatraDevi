@extends('frontend.includes.layout')

@section('content')
	<div class="shop-page product-detail">
		<!-- Page Banner -->
		<div class="page-banner">
			<div class="container d-flex">
				<h1 class="page-title lg-title flex-g-1">{{$productDetail->product_name}}</h1>
				<div class="bread-crumbs">
					<ul class="list-none d-flex justify-content-end">
						<li class="xs-title"><a href="index.php" class="d-inline-block text-white">Home</a></li>
						<span class="seperator px-2 text-white"> > </span>
						<li class="xs-title"><a href="shop.php" class="d-inline-block text-white">Shop</a></li>
						<span class="seperator px-2 text-white"> > </span>
						<li class="xs-title active">Product Detail</li>
					</ul>
				</div>
			</div>
		</div>
		<section class="product-detail-section py-5 bg-light">
			<div class="container">
				<div class="row">
					<!-- Product Image -->
					<div class="col-lg-6 col-12">
						<div class="product-sliders">
							 <div class="swiper-container gallery-top">
								<div class="swiper-wrapper">
									@foreach($image as $productImage )
								  		<div class="swiper-slide" style="background-image:url({{asset('storage/products/'. $productImage )}})"></div>
									@endforeach
								</div>
								<div class="swiper-button-next swiper-button-white"></div>
								<div class="swiper-button-prev swiper-button-white"></div>
							  </div>
							  <div class="swiper-container gallery-thumbs mt-2">
								<div class="swiper-wrapper">
									@foreach($image as $productImage )
								  		<div class="swiper-slide" style="background-image:url({{asset('storage/products/'. $productImage )}})"></div>
									@endforeach
						
								</div>
							  </div>
						</div>
					</div>
					<!-- Product Detail -->
					<div class="col-lg-6 col-12">
						<div class="product-descrip mb-2">
							<h2 class="prod-title md-title text-dark font-weight-bold mb-3">{{$productDetail->product_name}}</h2>
							<div class="price-info mb-3">
								@if(($productDetail->discount_type) == 0)
									<span class="price mr-3 md-title text-pri font-weight-bold">Rs {{$productDetail->price}}</span>
								@elseif(($productDetail->discount_type) == 1)
									<span class="price mr-3 md-title text-pri font-weight-bold">Rs {{$productDetail->price - $productDetail->discount}}</span><strike class="">Rs {{$productDetail->price}}</strike>
									<span class="text-success ml-2">{{$productDetail->discount}} Rs. off</span>
								@elseif(($productDetail->discount_type) == 2)
									<span class="price mr-3 md-title text-pri font-weight-bold">Rs {{$productDetail->price - (($productDetail->discount /100) * $productDetail->price)}}</span><strike class="">Rs {{$productDetail->price}}</strike>
									<span class="text-success ml-2">{{$productDetail->discount}} % off</span>
								@endif
										
							</div>
							<div class="prod-sumary">
								<p>{{$productDetail->description}}</p>
							</div>
						</div>
						<!-- End of Product Descrip -->
						<div class="product-counter d-flex flex-wrap  mb-4">
							<div class="quantity-selector mr-3">
	                            <h2 class="text-black sm-title  mb-3">Quantity</h2>
	                            <div class="entry number-minus">&nbsp;</div>
	                            <div class="entry number">10</div>
	                            <div class="entry number-plus">&nbsp;</div>
	                        </div>
	                        <div class="cart-btn align-self-end">
	                        	<span class="d-inline-block button-one cursor-pointer"><span class="fa fa-shopping-bag mr-2"></span>Add To Cart</span>
	                        </div>
						</div>
						<!-- End of Product Count -->
						<div class="product-meta-info mb-2">
							<ul class="list-none">
								<li class="text-left xs-title mb-3">
									<span class="font-weight-bold">SKU:</span>
									<span class="ml-3">{{$productDetail->SKU}}</span>
								</li>
								<li class="text-left xs-title mb-3">
									<span class="font-weight-bold">Category:</span>
									<span class="ml-3">{{$productDetail->pcategory->name}}</span>
								</li>
								<li class="text-left xs-title mb-3">
									<span class="font-weight-bold">Tags:</span>
									@foreach ($productDetail->tags()->with('tags')->pluck('tag_name') as $tag)
										<span class="ml-3">{{$tag}}</span>,
									@endforeach
								</li>
							</ul>
						</div>	
						<!-- End of Prod Category -->
						<div class="social-links d-flex">
							<h2 class="xs-title font-weight-bold mr-3">Share on: </h2>
	                        <ul class="list-none d-flex">
	                            <li class="mr-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
	                            <li class="mr-3"><a href="#"><i class="fab fa-instagram"></i></a></li>
	                            <li class="mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
	                        </ul>
	                    </div>
	                    <!-- End of Product Sharing -->
					</div>
				</div>
			</div>
		</section>	
	</div>
@endsection