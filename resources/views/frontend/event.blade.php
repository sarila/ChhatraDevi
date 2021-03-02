@extends('frontend.includes.layout')

@section('content')

<div class="event-listing-page">
    <!-- Page Banner -->
    <div class="page-banner">
        <div class="container d-flex">
            <h1 class="page-title lg-title flex-g-1">All Events</h1>
            <div class="bread-crumbs">
                <ul class="list-none d-flex justify-content-end">
                    <li class="xs-title"><a href=" {{ route('indexPage') }} " class="d-inline-block text-white">Home</a></li>
                    <span class="seperator px-2 text-white"> > </span>
                    <li class="xs-title active">Events</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Page Banner -->
    <!-- Event SEction -->
    <section class="event-section py-5">
        <div class="container">
            <div class="row">
                <!-- UPcoming Events -->
                    <div class="col-lg-4">
                        <header class="section-header-two mb-4">
                            <h2 class="section-title xs-title text-uppercase"><img src="assets/images/causes/like-white.png" alt="" class="mr-2"># Upcoming Events</h2>
                        </header>
                        @foreach ($upcomingEvents as $upcomingEvent)
                            <!-- One -->
                            <div class="wrapper p-2 box-shadow-2 mb-3">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="e-date text-uppercase bg-main sm-title text-white text-center">
                                            28 <br> Feb
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="event-box">
                                            <a href="event-detail.php" class="d-block ls-title font-weight-bold text-black mb-0">Event:{{ $upcomingEvent->title }}</a>
                                            <span class="date ts-title text-upppercase mr-2"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> {{ $upcomingEvent->date }}</span>
                                            <span class="date ts-title text-upppercase"><i class="fas fa-map-marker-alt text-pri mr-2"></i> {{ $upcomingEvent->location }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       
                    </div>
                    <!-- Past events -->
                    <div class="col-lg-8 col-12">
                        <header class="section-header-two text-right mb-4">
                            <h2 class="section-title xs-title text-uppercase"><img src="assets/images/causes/like-white.png" alt="" class="mr-2"># Past Events</h2>
                        </header>
                        @foreach ($pastEvents as $pastEvent)
                             <div class="wrapper box-shadow-2 mb-4">
                                <div class="row">
                                    <div class="col-lg-4 col-12 mb-md-0 mb-3">
                                        <div class="img-holder p-2">
                                            <img src="{{asset('storage/event/'.$pastEvent->feature_image)}}" data-src="{{asset('storage/event/'.$pastEvent->feature_image)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 align-self-center">
                                        <div class="content xs-title p-2">
                                            <a href="event-detail.php" class="event-title ls-title text-black font-weight-bold text-center">{{$pastEvent->title}}</a>
                                            <div class="event-box">
                                                <span class="date ts-title text-upppercase mr-2"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i>{{$upcomingEvent->date}}</span>
                                                <span class="date ts-title text-upppercase"><i class="fas fa-map-marker-alt text-pri mr-2"></i> {{ $pastEvent->location}}</span>
                                            </div>
                                            <p>{{ $pastEvent->excerpt}}</p>
                                            <div class="btns">
                                                <a href="event-detail.php" class="button-two font-weight-bold py-1 xs-title">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- wrapper end -->
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Event Section -->
</div>
@endsection