@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">News</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('news.edit', $news->id)}}"><button class="btn btn-info"> Edit News</button></a>
                    <a href="{{route('news.index')}}" class="btn btn-success"> All News</a>

                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('backend.includes.message')
  
        <section>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">{{$news->title}} </h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">SEO Title</div>
                                    <div class="text">{{$news->seo_title}}</div>
                                </li>
                                <li>
                                    <div class="title">Keyword</div>
                                    <div class="text">{{$news->keyword}}</div>
                                </li>
                                <li>
                                    <div class="title">News Type</div>
                                    <div class="text">{{$news->news_type}}</div>
                                </li>
                                <li>
                                    <div class="title">Excerpt</div>
                                    <div class="text">{{$news->excerpt}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <img src="{{ asset('storage/news/'. $news->image)}}" width="100%">
                    </div>
                </div>
                <div class="col-md-12 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Description </h3>
                            <div class="text">
                                {!! $news->description !!}
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </section>
        <!-- End of Content -->
    </div>
    <!-- Page Content -->

</div>

@endsection

