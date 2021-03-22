<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NGO</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Swipper CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/swipper.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- Fancy CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.fancybox.min.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css') }}">
</head>
<body>
    <div class="site-wrapper">
        <div class="top-wrapper position-relative">
            <header class="site-header border-bottom">
                <div class="container">
                    <div class="d-flex header-wrapper">
                        <nav class="navbar navbar-expand-xl navbar-light p-0 flex-g-1">
                            <div class="wrapper d-flex align-items-center py-1 mr-3">
                                <!-- Brand -->
                                <a class="navbar-brand p-0 m-0 site-logo-one" href="index.php"><img src="{{asset('frontend/assets/images/logo.png') }}" alt=""></a>
                                <a class="navbar-brand p-0 m-0 site-logo-two" href="index.php"><img src="{{asset('frontend/assets/images/whitelogo.png') }}" alt=""></a>
                                <li class="md-title cart-icon d-lg-none d-block">
                                    <a href="#" class="text-dark shop-bag">
                                        <span class="fa fa-shopping-bag"></span>
                                        <span class="prod-count">2</span>
                                    </a>
                                </li>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <!-- Navigation -->
                            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                <nav class="main-navigation">
                                    <ul class="navbar-nav font-w-semi list-none text-uppercase xs-title ">
                                        <li class="nav-item mr-lg-2 mb-lg-0 mb-3">
                                            <a class="nav-link active" href="{{ route('indexPage') }}">Home</a>
                                        </li>
                                        <li class="nav-item dropdown mr-md-1 mb-lg-0 mb-3">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                                About
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('aboutUs') }}">Who We Are</a>
                                                <a class="dropdown-item" href="{{ route('events') }}">Events</a>
                                                <a class="dropdown-item" href="{{ route('teams') }}">Our Team</a>
                                                <a class="dropdown-item" href="{{ route('gallery') }}">Gallery</a>
                                            </div>
                                        </li>
                                        <!-- Dropdown -->
                                        <li class="nav-item dropdown mr-md-1 mb-lg-0 mb-3">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                                Services
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('services')}}">All</a>
                                                @foreach ($services as $service)
                                                    <a class="dropdown-item" href="{{route('serviceDetail', $service->slug)}}">{{$service->category_name}}</a>
                                                @endforeach
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown mr-md-1 mb-lg-0 mb-3">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                                Projects
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('ongoingProjects')}}">On Going</a>
                                                <a class="dropdown-item" href="{{route('completedProjects')}}">Completed</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown mr-md-1 mb-lg-0 mb-3">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                                News Room
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('articleNews')}}">Articles</a>
                                                <a class="dropdown-item" href="{{route('mediaNews')}}">Media Coverage</a>
                                            </div>
                                        </li>
                                        <li class="nav-item mr-lg-2 mb-lg-0 mb-3">
                                            <a class="nav-link" href="{{route('shop')}}">Shop</a>
                                        </li>
                                        <li class="nav-item mr-lg-2 mb-lg-0 mb-3">
                                            <a class="nav-link" href="contact.php">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- End of Navigaiton -->
                        </nav>
                        <div class="border-left right-meta-header d-lg-block d-none">
                            <ul class="list-none px-3 h-100 align-items-center d-flex">
                                <li id="head-cart" class="mr-4 sm-title cart-icon ">
                                    <a href="javascript:void(0)" class="text-white shop-bag  d-lg-block d-none">
                                        <span class="fa fa-shopping-bag"></span>
                                        <span class="prod-count">2</span>
                                    </a>
                                </li>
                                <li class="mr-4 sm-title"><a href="#" class="text-main"><i class="fas fa-search"></i></a></li>
                                <a href="#" class="button-two py-2 px-3 font-w-semi"><i class="far fa-heart mr-2"></i>Donate Now</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
             <!-- Cart Nav -->
            <div class="cart-nav box-shadow-1">
                <h2 class="sm-title pb-3">
                    <span class="fa fa-shopping-bag mr-3 text-primary"></span>
                    SHOPPING BAG <span class="p-count ml-2">(6)</span>
                    <span class="close-cart-now d-inline-block text-right">
                    <i class="fas fa-times cursor-pointer"></i>
                    </span>
                </h2>
                <div class="product-list my-4 overflow-scroll">
                    <!-- Product -->
                    <div class="product pb-3 mb-3">
                        <div class="row">
                            <div class="col-7">
                                <a class="xs-title mb-2 d-inline-block" href="product-detail.php">Brown Bread</a>
                                <div class="prod-counts  mb-2">
                                    <span class="item-count">2</span> ×
                                    <span class="prod-price">Rs 66.00</span> 
                                </div>
                                <div class="prod-remove">
                                    Remove <i class="far fa-times-circle ml-2"></i></div>
                            </div>
                            <div class="col-5">
                                <a href="#" class="d-block"><img src="{{asset('frontend/assets/images/resource/products/2.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-total p-2 d-flex">
                    <span class="font-weight-bold">SUBTOTAL:</span>
                    <span class="float-right">Rs 1400</span>
                </div>
                <div class="prod-cta mt-4 xs-title">
                    <a href="{{route('cart')}}" class="button-two">View Cart</a>
                    <a href="{{route('checkout')}}" class="button-one float-right">CheckOut</a>
                </div>
            </div>
            <!-- End of Car Nav -->