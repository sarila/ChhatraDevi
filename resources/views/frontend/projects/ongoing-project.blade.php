@extends('frontend.includes.layout')

@section('content')

    <div class="cause-listing-page">
        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container d-flex">
                <h1 class="page-title lg-title flex-g-1">ALL On Going Projects</h1>
                <div class="bread-crumbs">
                    <ul class="list-none d-flex justify-content-end">
                        <li class="xs-title"><a href="index.php" class="d-inline-block text-white">Home</a></li>
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
                <div class="row">
                    @foreach ($ongoingProjects as $ongoingProject)
                        <div class="col-lg-6 col-12 mb-4">
                            <div class="wrapper position-relative">
                                <div class="slider-wrapper bg-white p-md-3 box-shadow-1 pb-2">
                                    <div class="row">
                                        <!-- Right -->
                                        <div class="col-md-4 col-12 mb-md-0 mb-2">
                                            <div class="img-holder">
                                                <img class="lazy-image" src="{{asset('storage/project/'. $ongoingProject->frontimage)}}" data-src="{{asset('storage/project/'. $ongoingProject->frontimage)}}" alt="">
                                            </div>
                                        </div>
                                        <!-- Left -->
                                        <div class="col-md-8 col-12">
                                            <div class="content xs-title px-md-0 px-2">
                                                <a href="project-detail.php" class="sm-title text-black font-weight-bold">{{$ongoingProject->title}}</a>
                                                <div class="fund pb-2 pt-1">
                                                    <span class="text-sec raised">$51,867</span> Raised of <span class="goal text-black font-weight-bold">${{$ongoingProject->goal}}</span> goal
                                                </div>
                                                <div class="progres position-relative w-75 mb-3">
                                                    <span class="bar w-40"></span>
                                                </div>
                                                <p>{{$ongoingProject->excerpt}}</p>
                                                <div class="btn-more">
                                                    <a href="{{route('projectDetail', $ongoingProject->id)}}" class="button-four xs-title py-1">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                                                    <a href="project-detail.php" class="ml-2 button-one-sec xs-title py-1">Donate Now <i class="fab fa-gratipay ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End of Our causes -->
    </div>

@endsection