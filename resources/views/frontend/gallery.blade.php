@extends('frontend.includes.layout')

@section('content')

    <div class="about-page">
        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container d-flex">
                <h1 class="page-title lg-title flex-g-1">Gallery Album</h1>
                <div class="bread-crumbs">
                    <ul class="list-none d-flex justify-content-end">
                        <li class="xs-title"><a href=" {{ route('indexPage')}}" class="d-inline-block text-white">Home</a></li>
                        <span class="seperator px-2 text-white"> > </span>
                        <li class="xs-title active">Our Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
            <!-- Projects -->
        <section class="project-section py-5">
            <div class="container">
                <div class="project-list">
                    <div class="row">
                        @foreach ($galleries as $gallery)
                            <!-- Project -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-3">
                                <div class="holder box-shadow-2 p-2">
                                    <a href="gallery-detail.php " class="wrapper d-block box-shadow-2">
                                      <img class="lazy-image" src="{{asset('storage/galleries/')}}" data-src="assets/images/about/img-1.jpg" alt="Avatar" class="image">
                                      <div class="cover-bg">
                                        <div class="text"><i class="far fa-heart mr-2"></i>{{$gallery->name}}</div>
                                      </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Projects -->
    </div>
@endsection