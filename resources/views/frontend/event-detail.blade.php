@extends('frontend.includes.layout')

@section('content')
<div class="event-listing-page event-detail-page">
    <!-- Page Banner -->
    <div class="page-banner">
        <div class="container d-flex flex-wrap">
            <h1 class="page-title sm-title flex-g-1">{{$eventDetail->title}}</h1>
            <div class="bread-crumbs">
                <ul class="list-none d-flex justify-content-end">
                    <li class="xs-title"><a href="index.php" class="d-inline-block text-white">Home</a></li>
                    <span class="seperator px-2 text-white"> > </span>
                    <li class="xs-title"><a href="{{route('events')}}" class="d-inline-block text-white">All Events</a></li>
                    <span class="seperator px-2 text-white"> > </span>
                    <li class="xs-title active">{{$eventDetail->title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Page Banner -->
    <!-- Event SEction -->
    <section class="event-section py-5">
        <div class="container">
            <header class="section-header-two text-center mb-4">
                <h2 class="section-title xs-title text-uppercase"><img src="assets/images/causes/like-white.png" alt="" class="mr-2"># Past Event</h2>
            </header>
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="wrapper box-shadow-2 mb-4 p-md-3 p-2">
                        <div class="row">
                             <!-- End of Conent -->
                            <div class="col-md-9 mb-3">
                                <div class="img-holder">
                                    <img class="lazy-image" src="{{asset('storage/event/'. $eventDetail->feature_image)}}" data-src="{{asset('storage/event/'. $eventDetail->feature_image)}}" alt="">
                                </div>
                            </div>
                            <!-- End of Image -->
                            <!-- Right Event Info -->
                            <div class="col-md-3 col-12">
                                <div class="list mb-2 ">
                                    <h2 class="bg-main py-2 text-center xs-title text-white mb-0">
                                        <i class="fas fa-bookmark mr-3"></i>Event Detail
                                    </h2>
                                    <ul class="list-none text-center">
                                        <h2 class="xs-title d-block p-2 box-shadow-1 font-weight-bold text-left"><i class="far fa-file-alt mr-2"></i>Category: <span class="float-right font-w-light">{{$eventDetail->category->category_name}}</span></h2>
                                        <h2 class="xs-title d-block p-2 box-shadow-1 font-weight-bold text-left"><i class="far fa-calendar-alt mr-2"></i>Date: <span class="float-right font-w-light">{{$eventDetail->date}}</span></h2>
                                        <h2 class="xs-title d-block p-2 box-shadow-1 font-weight-bold text-left"><i class="fas fa-map-marker-alt mr-2"></i>Location: <span class="float-right font-w-light">{{$eventDetail->location}}</span></h2>
                                        <h2 class="xs-title d-block p-2 box-shadow-1 font-weight-bold text-left"><i class="far fa-clock mr-2"></i>Time: <span class="float-right font-w-light">{{$eventDetail->time_duration}}</span></h2>
                                        <h2 class="xs-title d-block p-2 box-shadow-1 font-weight-bold text-left"><i class="fas fa-history mr-2"></i>Duration: <span class="float-right font-w-light">{{$eventDetail->duration}} Days</span></h2>
                                        <h2 class="xs-title d-block p-2 box-shadow-1 font-weight-bold text-left"><i class="fas fa-network-wired mr-2"></i>Entrance: <span class="float-right font-w-light">{{$eventDetail->no_of_seat}} Seats</span></h2>
                                    </ul>
                                </div>
                                <!-- End of List -->
                            </div>
                            <!-- End of Event Meta Info -->
                            <div class="col-12 align-self-center">
                                <div class="content xs-title">
                                    <h2 class="event-title md-title text-black font-weight-bold  mb-3 d-block">{{$eventDetail->title}}</h2>
                                    {{$eventDetail->description}}
                                </div>
                            </div>
                            <!-- End of Content -->
                            <!-- Team Section -->
                            <section class="team-section gallery-single-section py-5 bg-light">
                                <div class="container">
                                    <header class="section-header-two mb-4 text-center">
                                        <h2 class="section-title xs-title text-uppercase mb-3"><img src="assets/images/causes/like-white.png" alt="" class="mr-2">#Event Gallery</h2>
                                    </header>
                                    <div class="row no-gutters">
                                        <!-- Team -->
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="img-holder position-relative box-shadow-2 p-2 bg-white">
                                                <a data-fancybox="gallery" href="assets/images/causes/img (2).jpg">
                                                    <img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/causes/img (2).jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Team -->
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="img-holder position-relative box-shadow-2 p-2 bg-white">
                                                <a data-fancybox="gallery" href="assets/images/about/img-2.jpg">
                                                    <img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/about/img-2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Team -->
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="img-holder position-relative box-shadow-2 p-2 bg-white">
                                                <a data-fancybox="gallery" href="assets/images/team/img1.jpg">
                                                    <img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/team/img1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Team -->
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="img-holder position-relative box-shadow-2 p-2 bg-white">
                                                <a data-fancybox="gallery" href="assets/images/team/img2.jpg">
                                                    <img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/team/img2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Team -->
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="img-holder position-relative box-shadow-2 p-2 bg-white">
                                                <a data-fancybox="gallery" href="assets/images/team/img3.jpg">
                                                    <img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/team/img3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Team -->
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="img-holder position-relative box-shadow-2 p-2 bg-white">
                                                <a data-fancybox="gallery" href="assets/images/team/img4.jpg">
                                                    <img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/team/img4.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Team -->
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="img-holder position-relative box-shadow-2 p-2 bg-white">
                                                <a data-fancybox="gallery" href="images/team/img5.jpg">
                                                    <img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/team/img5.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Team -->
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="img-holder position-relative box-shadow-2 p-2 bg-white">
                                                <a data-fancybox="gallery" href="assets/images/team/img3.jpg">
                                                    <img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/team/img3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- End of Team Section -->
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