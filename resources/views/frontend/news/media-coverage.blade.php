@extends('frontend.includes.layout')

@section('content')

    <div class="media-page">
        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container d-flex">
                <h1 class="page-title lg-title flex-g-1">Media Coverage</h1>
                <div class="bread-crumbs">
                    <ul class="list-none d-flex justify-content-end">
                        <li class="xs-title"><a href="{{route('indexPage')}}" class="d-inline-block text-white">Home</a></li>
                        <span class="seperator px-2 text-white"> > </span>
                        <li class="xs-title active">Media Coverage</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Page Banner -->
        <!-- Blogs -->
        <section class="blog-section py-5 bg-light">
            <div class="container">
                <div class="holder p-2 bg-light py-4">
                    @foreach ($mediaNews as $media)
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <div class="col-wrapper bg-white p-2 box-shadow-2">
                                    <div class="img-wrapper">
                                        <img class="lazy-image" src="{{asset('storage/news/'. $media->image)}}" data-src="{{asset('storage/news/'. $media->image)}}" alt="">
                                    </div>
                                    <div class="meta-info py-2">
                                        <span class="date xs-title text-upppercase"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> {{ $media->created_at->format('d M Y')}}</span>
                                    </div>
                                    <div class="content xs-title">
                                        <a href="media-detail.php" class="event-title ls-title text-black font-weight-bold text-center">{{$media->title}}</a>
                                        <p>{{$media->excerpt}}</p>
                                    </div>
                                    <div class="btns">
                                        <a href="{{route('mediaDetail', $media->id)}}" class="button-two font-weight-bold py-1 xs-title">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Col -->
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End of Blog section -->
    </div>


@endsection