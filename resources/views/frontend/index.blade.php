@extends('frontend.includes.layout')

@section('content')

<!--Slider Section  -->
<section class="slider-section">
    <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php foreach ($sliders as $slider): ?>
                <div class="swiper-slide">
                    <div class="slider-wrapper">
                        <img class="lazy-image" src="{{ asset('storage/slider/'. $slider->slider_image) }}" data-src="{{ asset('storage/slider/'. $slider->slider_image) }}" alt="">
                        <div class="slider-content">
                            <h2 class="slider-title" data-swiper-parallax="-1000">{{$slider->title}}</h2>
                            <div class="text" data-swiper-parallax="-400">
                                <p>{{$slider->description}}</p>
                            </div>
                            <div class="button" data-swiper-parallax="-300">
                                <a href="{{$slider->link}}" class="button-one py-md-2 px-md-3 font-w-semi"><i class="far fa-heart mr-2"></i>Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end swiper-slide -->
            <?php endforeach ?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <div class="nav-holder lg-title">
            <div class="swiper-button-next">
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="fas fa-long-arrow-alt-left"></i>
            </div>
        </div>
    </div>
    <div class="social-links position-absolute border-right">
        <ul class="list-none d-flex flex-column ls-title">
            <li class="mr-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="mr-3"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </div>
</section>
<!-- End of slider section -->
<!-- List Section -->
<section class="list-section py-5 bg-light">
    <div class="container">
        <header class="section-header mb-4 text-center">
            <h2 class="text-center md-title text-black">What We do</h2>
            <span class="position-relative d-inline-block for-af"></span>
        </header>
        <div class="row">
            <?php foreach ($categories as $category): ?>
                <!-- col -->
                <div class="col-lg-2 col-6 mb-3">
                    <a href="service-detail.php" class="holder box-shadow-3 ls-title bg-white px-md-2 text-center">
                        <img class="lazy-image" src="{{ asset('storage/category/'.$category->category_icon )}}" data-src="{{ asset('storage/category/'.$category->category_icon )}}" alt="">
                        <h2 class="icon-title text-black mb-0 mt-2 font-weight-bold">{{$category->category_name}}</h2>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<!-- End of List Section -->
<!-- About Section -->
<section class="about-section py-4">
    <div class="container">
        <?php foreach ($settings as $setting): ?>
            <div class="row">
                <div class="col-lg-5 col-12 md-lg-0 mb-3">
                    <div class="wrapper">
                        <img class="lazy-image" src="{{ asset('storage/about/'. $setting->about_image) }}" data-src="{{ asset('storage/about/'. $setting->about_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <header class="section-header mb-3">
                        <h2 class="section-title xs-title text-uppercase font-weight-bold"># About Us</h2>
                        <h3 class="lg-title title text-black font-weight-bold text-uppercase">{{ $setting->about_title }}</h3>
                    </header>
                    <div class="content">
                       {{ $setting->excerpt }}
                    </div>
                    <div class="btn-wrapper">
                        <a href="about.php" class="button-two py-md-2 px-md-3 font-w-semi">Read More<i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
       
    </div>
</section>
<!-- End of About Section -->
<!-- Causes Seciton -->
<section class="our-causes-section py-5 bg-light">
    <div class="container">
        <header class="section-header-two text-left mb-2 d-flex">
            <div class="title flex-g-1">
                <h2 class="section-title xs-title text-uppercase"><img src="assets/images/causes/like-white.png" alt="" class="mr-2"># On Going Projects</h2>
            </div>
            <div class="all text-center">
                <a href="event-listing.php" class="button-two">View all <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </header>
        <div class="wrapper position-relative">
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper py-4 position-relative">

                    <?php foreach ($ongoingProjects as $ongoingProject): ?>
                        <!-- Slider -->
                        <div class="swiper-slide">
                            <div class="slider-wrapper bg-white p-md-3 box-shadow-1 pb-2">
                                <div class="row">
                                    <!-- Right -->
                                    <div class="col-md-4 col-12 mb-md-0 mb-2">
                                        <div class="img-holder">
                                            <img class="lazy-image" src="{{ asset('storage/project/'.$ongoingProject->frontimage)}}" data-src="{{ asset('storage/project/'.$ongoingProject->frontimage)}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Left -->
                                    <div class="col-md-8 col-12">
                                        <div class="content xs-title px-md-0 px-2">
                                            <a href="donate.php" class="sm-title text-black font-weight-bold">{{$ongoingProject->title}}</a>
                                            <div class="fund pb-2 pt-1">
                                                <span class="text-sec raised">$51,867</span> Raised of <span class="goal text-black font-weight-bold">{{$ongoingProject->goal}}</span> goal
                                            </div>
                                            <div class="progres position-relative w-75 mb-3">
                                                <span class="bar w-40"></span>
                                            </div>
                                            <p>{{$ongoingProject->excerpt}}</p>
                                            <div class="btn-more">
                                                <a href="donate.php" class="button-four xs-title py-1">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                                                <a href="project-detail.php" class="ml-2 button-one-sec xs-title py-1">Donate Now <i class="fab fa-gratipay ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                   
                </div>
            </div>
            <!-- Swipper Container -->
            <div class="nav-holder lg-title">
                <div class="swiper-button-next">
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="fas fa-long-arrow-alt-left"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Our causes -->
<!-- Event SEction -->
<section class="event-section py-5">
    <div class="container">
        <div class="row">
            <!-- UPcoming Events -->
            <div class="col-lg-4">
                <header class="section-header-two mb-4">
                    <h2 class="section-title xs-title text-uppercase"><img src="assets/images/causes/like-white.png" alt="" class="mr-2"># Upcoming Events</h2>
                </header>
                <?php foreach ($upcomingEvents as $upcomingEvent): ?>
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
                <?php endforeach ?>
               
            </div>
            <!-- Past events -->
            <div class="col-lg-8 col-12">
                <header class="section-header-two text-right mb-4">
                    <h2 class="section-title xs-title text-uppercase"><img src="assets/images/causes/like-white.png" alt="" class="mr-2"># Past Events</h2>
                </header>
                <?php foreach ($pastEvents as $pastEvent): ?>
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
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<!-- End of Event Section -->
<!-- Team Section -->
<section class="team-section py-4">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 col-12">
                <header class="section-header mb-3 text-right px-md-4 py-2">
                    <h2 class="section-title xs-title text-uppercase font-weight-bold text-pri"># Team</h2>
                    <h3 class="lg-title font-weight-bold text-black mb-3">Our <span>Volunteer</span></h3>
                    <p>If you haven't any charity in your heart, You have the worst kind of heart trouble.</p>
                    <a href="contact.php" class="left-two-border text-black d-inline-block mb-3">Become a Volunter</a>
                    <div class="btns">
                        <a href="team-listing.php" class="button-three">View all<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                    </div>
                </header>
            </div>
            <?php foreach ($teams as $team): ?>
                 <!-- Team -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="img-holder position-relative">
                        <img class="lazy-image" src="{{asset('storage/team/'.$team->image)}}" data-src="{{asset('storage/team/'.$team->image)}}" alt="">
                        <div class="team-des text-center p-2 bg-white position-absolute box-shadow-1">
                            <h2 class="ls-title name mb-0 font-weight-bold text-dark">{{$team->name}}</h2>
                            <span class="desig">{{$team->designation}}</span>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
           

        </div>
    </div>
</section>
<!-- End of Team Section -->
<!-- Testimonial Section -->
<section class="testimonial-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <header class="section-header-two mb-4">
                    <h2 class="section-title xs-title text-uppercase mb-3"><img src="assets/images/causes/like-white.png" alt="" class="mr-2">#TESTIMONIALS</h2>
                    <h3 class="lg-title text-dark font-weight-bold">Client feedbacks</h3>
                </header>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimonials as $testimonial): ?>
                            <div class="swiper-slide">
                                <div class="slider-wrapper">
                                    <div class="content text-left bg-light p-3 xs-title">
                                        <div class="top d-flex">
                                            <div class="left flex-g-1">
                                                <h2 class="name text-black font-weight-bold mb-0  xs-title">{{$testimonial->name}}</h2>
                                                <h3 class="xs-title">{{$testimonial->position}}</h3>
                                            </div>
                                            <div class="qote text-pri lg-title">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <p>“ {{$testimonial->message}} ”</p>
                                    </div>
                                    <img src="{{ asset('storage/testimonials/'. $testimonial->image) }}" alt="">
                                </div>
                            </div> <!-- end swiper-slide -->
                        <?php endforeach ?>
                       
                    </div>
                    <div class="swiper-pagination text-right"></div>
                </div>
            </div>
            <!-- Left -->
            <div class="col-lg-4 col-12 pt-4">
                <div class="text d-flex justify-content-end py-2 align-items-center">
                    <h2 class="mr-2 number">
                        <span data-appear-animation="animateDigits" data-from="0" data-to="25" data-interval="1" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">25
                        </span>
                    </h2>
                    <span class="text font-weight-bold"><span class="number">+</span> VOLUNTEER</span>
                </div>
                <!-- count -->
                <div class="text d-flex justify-content-end py-2 align-items-center">
                    <h2 class="mr-2 number">
                        <span data-appear-animation="animateDigits" data-from="0" data-to="36" data-interval="1" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">36
                        </span>
                    </h2>
                    <span class="text font-weight-bold"><span class="number">+</span>HAPPY CHILDREN</span>
                </div>
                <!-- count -->
                <div class="text d-flex justify-content-end py-2 align-items-center">
                    <h2 class="mr-2 number">
                        <span data-appear-animation="animateDigits" data-from="0" data-to="66" data-interval="1" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">66
                        </span>
                    </h2>
                    <span class="text font-weight-bold"><span class="number">+</span>DONATED</span>
                </div>
                <!-- count -->
                <div class="text d-flex justify-content-end py-2 align-items-center">
                    <h2 class="mr-2 number">
                        <span data-appear-animation="animateDigits" data-from="0" data-to="86" data-interval="1" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">86
                        </span>
                    </h2>
                    <span class="text font-weight-bold"><span class="number">+</span>CAMPAIGNS</span>
                </div>
                <!-- count -->
            </div>
        </div>
    </div>
</section>
<!-- End of Testimonial Section -->
<!-- Blogs -->
<section class="blog-section py-5 bg-light">
    <div class="container">
        <header class="section-header-two text-left mb-2 d-flex">
            <div class="title flex-g-1">
                <h2 class="section-title xs-title text-uppercase"><img src="assets/images/causes/like-white.png" alt="" class="mr-2"># OUR Blog</h2>
                <h3 class="lg-title text-dark font-weight-bold">Our Latest News</h3>
            </div>
            <div class="all text-center mt-4">
                <a href="event-listing.php" class="button-one">View all <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </header>
        <div class="holder p-2 bg-light py-4">
            <div class="row">
                <?php foreach ($news as $latestNews): ?>
                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                        <div class="col-wrapper bg-white p-2 box-shadow-2">
                            <div class="img-wrapper">
                                <img class="lazy-image" src="{{asset('storage/news/'. $latestNews->image)}}" data-src="{{asset('storage/news/'. $latestNews->image)}}" alt="">
                            </div>
                            <div class="meta-info py-2">    
                                <span class="date xs-title text-upppercase"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> {{ $latestNews->created_at->format('Y-M-d')}}</span>
                            </div>
                            <div class="content xs-title">
                                <a href="event-detail.php" class="event-title ls-title text-black font-weight-bold text-center">{{$latestNews->title}}</a>
                                <p>{{$latestNews->excerpt}}</p>
                            </div>
                            <div class="btns">
                                <a href="event-detail.php" class="button-two font-weight-bold py-1 xs-title">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                <!-- End of Col -->
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<!-- End of Blog section -->
<!-- Client Section -->
<section class="client-section  text-center bg-light py-4">
    <div class="container">
        <header class="section-header-two mb-4">
            <h2 class="section-title xs-title text-uppercase"><img src="assets/images/causes/like-white.png" alt="" class="mr-2"># Our Partners</h2>
        </header>
        <div class="swiper-container">
        <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?php foreach ($partners as $partner): ?>
                    <div class="swiper-slide">
                    <div class="slider-wrapper">
                        <img class="lazy-image" src="{{ asset('storage/partners/'. $partner->icon) }}" data-src="{{ asset('storage/partners/'. $partner->icon) }}" alt="">
                    </div>
                </div> <!-- end swiper-slide -->
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<!-- End of Client section -->

@endsection