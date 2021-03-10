@extends('frontend.includes.layout')

@section('content')

    <div class="cause-listing-page">
        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container d-flex">
                <h1 class="page-title lg-title flex-g-1">ALL Completed Projects</h1>
                <div class="bread-crumbs">
                    <ul class="list-none d-flex justify-content-end">
                        <li class="xs-title"><a href="{{route('indexPage')}}" class="d-inline-block text-white">Home</a></li>
                        <span class="seperator px-2 text-white"> > </span>
                        <li class="xs-title active">Projects</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Page Banner -->
        <!-- Causes Seciton -->
        <section class="our-causes-section py-5 bg-light">
            <div class="container">
                </header>
                <div class="row">
                    @foreach($completedProjects as $completedProject)
                        <!-- Project -->
                        <div class="col-lg-4 col-md-6 col-12 mb-4">
                            <div class="wrapper position-relative">
                                <div class="slider-wrapper bg-white p-md-3 box-shadow-1 pb-2">
                                    <div class="row">
                                        <!-- Right -->
                                        <div class="col-12 mb-2">
                                            <div class="img-holder">
                                                <img class="lazy-image" src="{{asset('storage/project/'.$completedProject->frontimage)}}" data-src="{{asset('storage/project/'.$completedProject->frontimage)}}" alt="">
                                            </div>
                                        </div>
                                        <!-- Left -->
                                        <div class="col-12">
                                            <div class="content xs-title px-md-0 px-2">
                                                <a href="project-detail.php" class="d-inline-block my-2 sm-title text-black font-weight-bold">{{$completedProject->title}}</a>
                                                <p>{{ $completedProject->excerpt }}</p>
                                                <div class="btn-more">
                                                    <a href="{{route('projectDetail', $completedProject->id)}}" class="button-four xs-title py-1">View<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Project -->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End of Our causes -->
    </div>
@endsection