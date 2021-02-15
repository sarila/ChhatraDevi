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
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('backend.includes.message')
  
        <div class="col-12 mb-3">
            <div class="img-holder">
                <img class="lazy-image" src="{{asset('public/storage/news'.$news->image)}}"  alt="">
            </div>
        </div>
        <!-- End of Image -->
        <div class="col-12 align-self-center">
            <div class="content xs-title">
                {{$news->description}}
            </div>
        </div>
        <!-- End of Content -->
    </div>
    <!-- Page Content -->

</div>

@endsection

