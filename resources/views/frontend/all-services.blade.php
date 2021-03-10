   
@extends('frontend.includes.layout')

@section('content')
    <div class="service-page">
        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container d-flex">
                <h1 class="page-title lg-title flex-g-1">What we Do</h1>
                <div class="bread-crumbs">
                    <ul class="list-none d-flex justify-content-end">
                        <li class="xs-title"><a href="index.php" class="d-inline-block text-white">Home</a></li>
                        <span class="seperator px-2 text-white"> > </span>
                        <li class="xs-title active">Our Services</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Page Banner -->
        <!-- List Section -->
        <section class="list-section py-5 bg-light">
            <div class="container">
                <header class="section-header mb-4 text-center">
                    <h2 class="text-center md-title text-black">We Work For</h2>
                    <span class="position-relative d-inline-block for-af"></span>
                </header>
                <div class="row">
                    @foreach ($categories as $category)
                        
                        <!-- col -->
                        <div class="col-lg-2 col-6 mb-3">
                            <a href="{{route('serviceDetail', $category->slug)}}" class="holder box-shadow-3 ls-title bg-white px-md-2 text-center">
                                <img class="lazy-image" src="{{ asset('storage/category/'.$category->category_icon )}}" data-src="{{ asset('storage/category/'.$category->category_icon )}}" alt="">
                                <h2 class="icon-title text-black mb-0 mt-2 font-weight-bold">{{$category->category_name}}</h2>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End of List Section -->
        <!-- Cta Seciton -->
        <!-- CTA-->
        <div class="cta text-white">
            <div class="container">
                <div class="d-flex align-items-center flex-wrap">
                    <div class="content flex-g-1">
                        <h2 class="page-title lg-title text-uppercase">Become A Volunteer.</h2>
                        <p>If we can't help via money, we can help via works.</p>
                    </div>
                    <a href="contact.php" class="button-one text-uppercase">Join Now</a>
                </div>
            </div>
        </div>
        <!-- End of CTA -->
    </div>

    @endsection
