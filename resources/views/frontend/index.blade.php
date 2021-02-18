@extends('frontend.includes.layout')

@section('content')
<!--Slider Section  -->
<section class="slider-section">
    <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-wrapper">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/sliders/slider-1.jpg') }}" alt="">
                    <div class="slider-content">
                        <h2 class="slider-title" data-swiper-parallax="-1000">Help <span>someone's dream</span> come true.</h2>
                        <div class="text" data-swiper-parallax="-400">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Dicta rem magnam minus at deserunt saepe quae similique veritatis, neque sunt quasi corporis. Facere facilis laborum repudiandae, eligendi, blanditiis nesciunt veniam?</p>
                        </div>
                        <div class="button" data-swiper-parallax="-300">
                            <a href="#" class="button-one py-md-2 px-md-3 font-w-semi"><i class="far fa-heart mr-2"></i>Donate Now</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end swiper-slide -->
            <div class="swiper-slide">
                <div class="slider-wrapper">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/sliders/slider-2.jpg') }}" alt="">
                    <div class="slider-content">
                        <div class="container">
                            <h2 class="slider-title" data-swiper-parallax="-1000">Help <span>someone's dream</span> come true.</h2>
                            <div class="text" data-swiper-parallax="-400">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Dicta rem magnam minus at deserunt saepe quae similique veritatis, neque sunt quasi corporis. Facere facilis laborum repudiandae, eligendi, blanditiis nesciunt veniam?</p>
                            </div>
                            <div class="button" data-swiper-parallax="-300">
                                <a href="#" class="button-one py-md-2 px-md-3 font-w-semi"><i class="far fa-heart mr-2"></i>Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end swiper-slide -->
            <div class="swiper-slide">
                <div class="slider-wrapper">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/sliders/slider-3.jpg') }}" alt="">
                    <div class="slider-content">
                        <h2 class="slider-title" data-swiper-parallax="-1000">Help <span>someone's dream</span> come true.</h2>
                        <div class="text" data-swiper-parallax="-400">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Dicta rem magnam minus at deserunt saepe quae similique veritatis, neque sunt quasi corporis. Facere facilis laborum repudiandae, eligendi, blanditiis nesciunt veniam?</p>
                        </div>
                        <div class="button" data-swiper-parallax="-300">
                            <a href="#" class="button-one py-md-2 px-md-3 font-w-semi"><i class="far fa-heart mr-2"></i>Donate Now</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end swiper-slide -->
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
            <!-- col -->
            <div class="col-lg-2 col-6 mb-3">
                <a href="service-detail.php" class="holder box-shadow-3 ls-title bg-white px-md-2 text-center">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/after-slider/healthcare.png') }}" alt="">
                    <h2 class="icon-title text-black mb-0 mt-2 font-weight-bold">Health</h2>
                </a>
            </div>
            <!-- col -->
            <div class="col-lg-2 col-6 mb-3">
                <a href="service-detail.php" class="holder box-shadow-3 ls-title bg-white px-md-2 text-center">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/after-slider/graduation-cap.png') }}" alt="">
                    <h2 class="icon-title text-black mb-0 mt-2 font-weight-bold">Education</h2>
                </a>
            </div>
            <!-- col -->
            <div class="col-lg-2 col-6 mb-3">
                <a href="service-detail.php" class="holder box-shadow-3 ls-title bg-white px-md-2 text-center">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/after-slider/peace.png') }}" alt="">
                    <h2 class="icon-title text-black mb-0 mt-2 font-weight-bold">Peace</h2>
                </a>
            </div>
            <!-- col -->
            <div class="col-lg-2 col-6 mb-3">
                <a href="service-detail.php" class="holder box-shadow-3 ls-title bg-white px-md-2 text-center">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/after-slider/right.png') }}" alt="">
                    <h2 class="icon-title text-black mb-0 mt-2 font-weight-bold">Human Right</h2>
                </a>
            </div>
            <!-- col -->
            <div class="col-lg-2 col-6 mb-3">
                <a href="service-detail.php" class="holder box-shadow-3 ls-title bg-white px-md-2 text-center">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/after-slider/care.png') }}" alt="">
                    <h2 class="icon-title text-black mb-0 mt-2 font-weight-bold">Child protection</h2>
                </a>
            </div>
            <!-- col -->
            <div class="col-lg-2 col-6 mb-3">
                <a href="service-detail.php" class="holder box-shadow-3 ls-title bg-white px-md-2 text-center">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/after-slider/love.png') }}" alt="">
                    <h2 class="icon-title text-black mb-0 mt-2 font-weight-bold">Women Empowerment</h2>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End of List Section -->
<!-- About Section -->
<section class="about-section py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 md-lg-0 mb-3">
                <div class="wrapper">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/about/img-1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <header class="section-header mb-3">
                    <h2 class="section-title xs-title text-uppercase font-weight-bold"># About Us</h2>
                    <h3 class="lg-title title text-black font-weight-bold text-uppercase">WE <span>Can't help everyone</span> but <span>everyone can help</span> some one.</h3>
                </header>
                <div class="content">
                    <p>Chhatra Devi Foundation Nepal is established for social work all over in Nepal in sectors like Health, Education, Peace, Human Rights, Child Protection, Woman Empowerment, Disabilities and others.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Voluptates beatae est dolor tempore architecto aut quis dolores nobis, neque corrupti deleniti voluptatibus veritatis, facere delectus obcaecati, officiis tenetur dicta? Inventore. Lorem ipsum, dolor, sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="btn-wrapper">
                    <a href="about.php" class="button-two py-md-2 px-md-3 font-w-semi">Read More<i class="fas fa-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About Section -->
<!-- Causes Seciton -->
<section class="our-causes-section py-5 bg-light">
    <div class="container">
        <header class="section-header-two text-left mb-2 d-flex">
        	<div class="title flex-g-1">
	            <h2 class="section-title xs-title text-uppercase"><img src="{{ asset('frontend/assets/images/causes/like-white.png') }}" alt="" class="mr-2"># On Going Projects</h2>
	        </div>
		    <div class="all text-center">
	            <a href="event-listing.php" class="button-two">View all <i class="fas fa-arrow-right ml-2"></i></a>
	        </div>
        </header>
        <div class="wrapper position-relative">
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper py-4 position-relative">
                    <!-- Slider -->
                    <div class="swiper-slide">
                        <div class="slider-wrapper bg-white p-md-3 box-shadow-1 pb-2">
                            <div class="row">
                                <!-- Right -->
                                <div class="col-md-4 col-12 mb-md-0 mb-2">
                                    <div class="img-holder">
                                        <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/causes/img (2).jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Left -->
                                <div class="col-md-8 col-12">
                                    <div class="content xs-title px-md-0 px-2">
                                        <a href="donate.php" class="sm-title text-black font-weight-bold">Raise Fund for Healthy Food</a>
                                        <div class="fund pb-2 pt-1">
                                            <span class="text-sec raised">$51,867</span> Raised of <span class="goal text-black font-weight-bold">$75,000</span> goal
                                        </div>
                                        <div class="progres position-relative w-75 mb-3">
                                            <span class="bar w-40"></span>
                                        </div>
                                        <p>Do not hope to evade any illness or death, for they are crucial reminders of the transience of this life, and you are only sojourners on this world</p>
                                        <div class="btn-more">
                                            <a href="donate.php" class="button-four xs-title py-1">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                                            <a href="project-detail.php" class="ml-2 button-one-sec xs-title py-1">Donate Now <i class="fab fa-gratipay ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider -->
                    <div class="swiper-slide">
                        <div class="slider-wrapper bg-white p-md-3 box-shadow-1 pb-2">
                            <div class="row">
                                <!-- Right -->
                                <div class="col-md-4 col-12 mb-md-0 mb-2">
                                    <div class="img-holder">
                                        <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/causes/img (3).jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Left -->
                                <div class="col-md-8 col-12">
                                    <div class="content xs-title px-md-0 px-2">
                                        <a href="project-detail.php" class="sm-title text-black font-weight-bold">Raise Fund for Healthy Food</a>
                                        <div class="fund pb-2 pt-1">
                                            <span class="text-sec raised">$61,867</span> Raised of <span class="goal text-black font-weight-bold">$65,000</span> goal
                                        </div>
                                        <div class="progres position-relative w-75 mb-3">
                                            <span class="bar w-40"></span>
                                        </div>
                                        <p>Do not hope to evade any illness or death, for they are crucial reminders of the transience of this life, and you are only sojourners on this world</p>
                                        <div class="btn-more">
                                            <a href="project-detail.php" class="button-four xs-title py-1">Read More <i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                                            <a href="donate.php" class="ml-2 button-one-sec xs-title py-1">Donate Now <i class="fab fa-gratipay ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <h2 class="section-title xs-title text-uppercase"><img src="{{ asset('frontend/assets/images/causes/like-white.png') }}" alt="" class="mr-2"># Upcoming Events</h2>
                </header>
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
                                <a href="event-detail.php" class="d-block ls-title font-weight-bold text-black mb-0">Event: Foods For Poor</a>
                                <span class="date ts-title text-upppercase mr-2"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> 06 Oct 2018</span>
                                <span class="date ts-title text-upppercase"><i class="fas fa-map-marker-alt text-pri mr-2"></i> New Baneshwor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- One -->
                <div class="wrapper p-2 box-shadow-2 mb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="e-date text-uppercase bg-main sm-title text-white text-center">
                                06 <br> dec
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="event-box">
                                <a href="event-detail.php" class="d-block ls-title font-weight-bold text-black mb-0">Event: Help For Education</a>
                                <span class="date ts-title text-upppercase mr-2"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> 06 Oct 2018</span>
                                <span class="date ts-title text-upppercase"><i class="fas fa-map-marker-alt text-pri mr-2"></i> New Baneshwor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- One -->
                <div class="wrapper p-2 box-shadow-2 mb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="e-date text-uppercase bg-main sm-title text-white text-center">
                                18 <br> oct
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="event-box">
                                <a href="event-detail.php" class="d-block ls-title font-weight-bold text-black mb-0">Event: Foods For Poor</a>
                                <span class="date ts-title text-upppercase mr-2"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> 06 Oct 2018</span>
                                <span class="date ts-title text-upppercase"><i class="fas fa-map-marker-alt text-pri mr-2"></i> New Baneshwor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- One -->
                <div class="wrapper p-2 box-shadow-2 mb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="e-date text-uppercase bg-main sm-title text-white text-center">
                                06 <br> dec
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="event-box">
                                <a href="event-detail.php" class="d-block ls-title font-weight-bold text-black mb-0">Event: Help The Children</a>
                                <span class="date ts-title text-upppercase mr-2"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> 06 Oct 2018</span>
                                <span class="date ts-title text-upppercase"><i class="fas fa-map-marker-alt text-pri mr-2"></i> New Baneshwor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Past events -->
            <div class="col-lg-8 col-12">
                <header class="section-header-two text-right mb-4">
                    <h2 class="section-title xs-title text-uppercase"><img src="{{ asset('frontend/assets/images/causes/like-white.png') }}" alt="" class="mr-2"># Past Events</h2>
                </header>
                <div class="wrapper box-shadow-2 mb-4">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-md-0 mb-3">
                                <div class="img-holder p-2">
                                    <img src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/causes/img (5).jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 align-self-center">
                                <div class="content xs-title p-2">
                                    <a href="event-detail.php" class="event-title ls-title text-black font-weight-bold text-center">Charity begins at home, but should not end there</a>
                                    <div class="event-box">
                                        <span class="date ts-title text-upppercase mr-2"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> 06 Oct 2018</span>
                                        <span class="date ts-title text-upppercase"><i class="fas fa-map-marker-alt text-pri mr-2"></i> New Baneshwor</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit, amet consectetur adip....</p>
                                    <div class="btns">
                                        <a href="event-detail.php" class="button-two font-weight-bold py-1 xs-title">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- wrapper end -->
                <div class="wrapper box-shadow-2 mb-4">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-md-0 mb-3">
                                <div class="img-holder p-2">
                                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/causes/img (5).jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 align-self-center">
                                <div class="content xs-title p-2">
                                    <a href="event-detail.php" class="event-title ls-title text-black font-weight-bold text-center">Charity begins at home, but should not end there</a>
                                    <div class="event-box">
                                        <span class="date ts-title text-upppercase mr-2"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> 06 Oct 2018</span>
                                        <span class="date ts-title text-upppercase"><i class="fas fa-map-marker-alt text-pri mr-2"></i> New Baneshwor</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit, amet consectetur adip....</p>
                                    <div class="btns">
                                        <a href="event-detail.php" class="button-two font-weight-bold py-1 xs-title">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- wrapper end -->
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
            <!-- Team -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="img-holder position-relative">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/team/img1.jpg') }}" alt="">
                    <div class="team-des text-center p-2 bg-white position-absolute box-shadow-1">
                        <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                        <span class="desig">Co Founder</span>
                    </div>
                </div>
            </div>
            <!-- Team -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="img-holder position-relative">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/team/img2.jpg') }}" alt="">
                    <div class="team-des text-center p-2 bg-white position-absolute box-shadow-1">
                        <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                        <span class="desig">Co Founder</span>
                    </div>
                </div>
            </div>
            <!-- Team -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="img-holder position-relative">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/team/img3.jpg') }}" alt="">
                    <div class="team-des text-center p-2 bg-white position-absolute box-shadow-1">
                        <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                        <span class="desig">Co Founder</span>
                    </div>
                </div>
            </div>
            <!-- Team -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="img-holder position-relative">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/team/img4.jpg') }}" alt="">
                    <div class="team-des text-center p-2 bg-white position-absolute box-shadow-1">
                        <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                        <span class="desig">Co Founder</span>
                    </div>
                </div>
            </div>
            <!-- Team -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="img-holder position-relative">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/team/img5.jpg') }}" alt="">
                    <div class="team-des text-center p-2 bg-white position-absolute box-shadow-1">
                        <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                        <span class="desig">Co Founder</span>
                    </div>
                </div>
            </div>
            <!-- Team -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="img-holder position-relative">
                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/team/img3.jpg') }}" alt="">
                    <div class="team-des text-center p-2 bg-white position-absolute box-shadow-1">
                        <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                        <span class="desig">Co Founder</span>
                    </div>
                </div>
            </div>
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
                    <h2 class="section-title xs-title text-uppercase mb-3"><img src="{{ asset('frontend/assets/images/causes/like-white.png') }}" alt="" class="mr-2">#TESTIMONIALS</h2>
                    <h3 class="lg-title text-dark font-weight-bold">Client feedbacks</h3>
                </header>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider-wrapper">
                                <div class="content text-left bg-light p-3 xs-title">
                                    <div class="top d-flex">
                                        <div class="left flex-g-1">
                                            <h2 class="name text-black font-weight-bold mb-0  xs-title">Lionel Messi</h2>
                                            <h3 class="xs-title">Co Founder of FCB</h3>
                                        </div>
                                        <div class="qote text-pri lg-title">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <p>“ The way you get meaning into your life is to devote yourself to loving others, devote yourself to your community around you, and devote yourself to creating something that gives you purpose and meaning. ”</p>
                                </div>
                                <img src="{{ asset('frontend/assets/images/team/img2.jpg') }}" alt="">
                            </div>
                        </div> <!-- end swiper-slide -->
                        <div class="swiper-slide">
                            <div class="slider-wrapper">
                                <div class="content text-left bg-light p-3 xs-title">
                                    <div class="top d-flex">
                                        <div class="left flex-g-1">
                                            <h2 class="name text-black font-weight-bold mb-0  xs-title">Xavi Alonso</h2>
                                            <h3 class="xs-title">Co Founder of FCB</h3>
                                        </div>
                                        <div class="qote text-pri lg-title">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <p>“ The way you get meaning into your life is to devote yourself to loving others, devote yourself to your community around you, and devote yourself to creating something that gives you purpose and meaning. ”</p>
                                </div>
                                <img class="lazy-image" src="{{ asset('frontend/assets/images/team/img3.jpg') }}" alt="">
                            </div>
                        </div> <!-- end swiper-slide -->
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
	            <h2 class="section-title xs-title text-uppercase"><img src="{{ asset('frontend/assets/images/causes/like-white.png') }}" alt="" class="mr-2"># OUR Blog</h2>
	            <h3 class="lg-title text-dark font-weight-bold">Our Latest News</h3>
	        </div>
		    <div class="all text-center mt-4">
	            <a href="event-listing.php" class="button-one">View all <i class="fas fa-arrow-right ml-2"></i></a>
	        </div>
        </header>
        <div class="holder p-2 bg-light py-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="col-wrapper bg-white p-2 box-shadow-2">
                        <div class="img-wrapper">
                            <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/causes/01.jpg') }}" alt="">
                        </div>
                        <div class="meta-info py-2">
                            <span class="date xs-title text-upppercase"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> 06 Oct 2018</span>
                        </div>
                        <div class="content xs-title">
                            <a href="event-detail.php" class="event-title ls-title text-black font-weight-bold text-center">Charity begins at home, but should not end there</a>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Aspernatur dolorum natus unde earum.</p>
                        </div>
                        <div class="btns">
                            <a href="event-detail.php" class="button-two font-weight-bold py-1 xs-title">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End of Col -->
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="col-wrapper bg-white p-2 box-shadow-2">
                        <div class="img-wrapper">
                            <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/causes/img (1).jpg') }}" alt="">
                        </div>
                        <div class="meta-info py-2">
                            <span class="date xs-title text-upppercase"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> 06 Oct 2018</span>
                        </div>
                        <div class="content xs-title">
                            <a href="event-detail.php" class="event-title ls-title text-black font-weight-bold text-center">Charity begins at home, but should not end there</a>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Aspernatur dolorum natus unde earum.</p>
                        </div>
                        <div class="btns">
                            <a href="event-detail.php" class="button-two font-weight-bold py-1 xs-title">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End of Col -->
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="col-wrapper bg-white p-2 box-shadow-2">
                        <div class="img-wrapper">
                            <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/causes/img (4).jpg') }}" alt="">
                        </div>
                        <div class="meta-info py-2">
                            <span class="date xs-title text-upppercase"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> 06 Oct 2018</span>
                        </div>
                        <div class="content xs-title">
                            <a href="event-detail.php" class="event-title ls-title text-black font-weight-bold text-center">Charity begins at home, but should not end there</a>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Aspernatur dolorum natus unde earum.</p>
                        </div>
                        <div class="btns">
                            <a href="event-detail.php" class="button-two font-weight-bold py-1 xs-title">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End of Col -->
            </div>
        </div>
    </div>
</section>
<!-- End of Blog section -->
<!-- Client Section -->
<section class="client-section  text-center bg-light py-4">
    <div class="container">
    	<header class="section-header-two mb-4">
            <h2 class="section-title xs-title text-uppercase"><img src="{{ asset('frontend/assets/images/causes/like-white.png') }}" alt="" class="mr-2"># Our Partners</h2>
        </header>
    	<div class="swiper-container">
        <!-- Additional required wrapper -->
	        <div class="swiper-wrapper">
	            <div class="swiper-slide">
	                <div class="slider-wrapper">
	                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/clients/01.png') }}" alt="">
	                </div>
	            </div> <!-- end swiper-slide -->
	            <div class="swiper-slide">
	                <div class="slider-wrapper">
	                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/clients/02.png') }}" alt="">
	                </div>
	            </div> <!-- end swiper-slide -->
	            <div class="swiper-slide">
	                <div class="slider-wrapper">
	                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/clients/03.png') }}" alt="">
	                </div>
	            </div> <!-- end swiper-slide -->
	            <div class="swiper-slide">
	                <div class="slider-wrapper">
	                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/clients/04.png') }}" alt="">
	                </div>
	            </div> <!-- end swiper-slide -->
	            <div class="swiper-slide">
	                <div class="slider-wrapper">
	                    <img class="lazy-image" src="{{ asset('frontend/assets/images/image-bg.svg') }}" data-src="{{ asset('frontend/assets/images/clients/01.png') }}" alt="">
	                </div>
	            </div> <!-- end swiper-slide -->
	        </div>
	    </div>
    </div>
</section>
<!-- End of Client section -->