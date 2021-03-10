@extends('frontend.includes.layout')

@section('content')

	<div class="article-detail event-detail-page">
	    <!-- Page Banner -->
	    <div class="page-banner">
	        <div class="container d-flex">
	            <h1 class="page-title sm-title flex-g-1">{{$articleDetail->title}}</h1>
	            <div class="bread-crumbs">
	                <ul class="list-none d-flex justify-content-end flex-wrap">
	                    <li class="xs-title"><a href="{{route('indexPage')}}" class="d-inline-block text-white">Home</a></li>
	                    <span class="seperator px-2 text-white"> > </span>
	                    <li class="xs-title"><a href="{{route('articleNews')}}" class="d-inline-block text-white">All Articles</a></li>
	                    <span class="seperator px-2 text-white"> > </span>
	                    <li class="xs-title active">{{$articleDetail->title}}</li>
	                </ul>
	            </div>
	        </div>
	    </div>
	    <!-- End of Page Banner -->
	    <!-- Event SEction -->
	    <section class="event-section py-5">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12 col-12">
	                    <div class="wrapper box-shadow-2 mb-4 p-md-3 p-2">
	                        <div class="row">
	                             <!-- End of Conent -->
	                            <div class="col-12 mb-3">
	                                <div class="img-holder">
	                                    <img class="lazy-image" src="{{asset('storage/news/'. $articleDetail->image)}}" data-src="{{asset('storage/news/'. $articleDetail->image)}}" alt="">
	                                </div>
	                            </div>
	                            <!-- End of Image -->
	                            <div class="col-12 align-self-center">
	                                <div class="content xs-title">
	                                    <h2 class="event-title md-title text-black font-weight-bold  mb-3 d-block">{{$articleDetail->title}}</h2>
	                                    {!! $articleDetail->description !!}
	                                </div>
	                            </div>
	                            <!-- End of Content -->
	                        </div>
	                    </div>
	                </div>
	                <!-- End of Single Event Detail -->
	            </div>
	        </div>
	    </section>
	<!-- End of Event Section -->
	</div>


@endsection