@extends('frontend.includes.layout')

@section('content')

    <div class="article-page">
        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container d-flex">
                <h1 class="page-title lg-title flex-g-1">Articles</h1>
                <div class="bread-crumbs">
                    <ul class="list-none d-flex justify-content-end">
                        <li class="xs-title"><a href="{{ route('indexPage')}}" class="d-inline-block text-white">Home</a></li>
                        <span class="seperator px-2 text-white"> > </span>
                        <li class="xs-title active">our Articles</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Page Banner -->
        <!-- Blogs -->
        <section class="blog-section py-5 bg-light">
            <div class="container">
                <header class="section-header-two text-center mb-2 d-flex">
                    <div class="title flex-g-1">
                        <h2 class="section-title xs-title text-uppercase"><img src="assets/images/causes/like-white.png" alt="" class="mr-2"># Articles</h2>
                        <h3 class="lg-title text-dark font-weight-bold">Our Latest Articles</h3>
                    </div>
                </header>
                <div class="holder p-2 bg-light py-4">
                    <div class="row">
                        @foreach ($articleNews as $article):
                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <div class="col-wrapper bg-white p-2 box-shadow-2">
                                    <div class="img-wrapper">
                                        <img class="lazy-image" src="{{asset('storage/news/'. $article->image)}}" data-src="{{asset('storage/news/'. $article->image)}}" alt="">
                                    </div>
                                    <div class="meta-info py-2">
                                        <span class="date xs-title text-upppercase"><i class="far fa-calendar-alt text-pri mr-2 font-weight-bold"></i> {{ $article->created_at->format('d M Y')}}</span>
                                    </div>
                                    <div class="content xs-title">
                                        <a href="article-detail.php" class="event-title ls-title text-black font-weight-bold text-center">{{$article->title}}</a>
                                        <p>{{$article->excerpt}}</p>
                                    </div>
                                    <div class="btns">
                                        <a href="{{route('articleDetail', $article->id )}}" class="button-two font-weight-bold py-1 xs-title">Read More<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Col -->
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Blog section -->
    </div>

@endsection