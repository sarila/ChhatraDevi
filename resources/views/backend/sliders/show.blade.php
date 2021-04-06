@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Slider</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('sliders.edit', $slider->id)}}"><button class="btn btn-info"> Edit Slider</button></a>
                    <a href="{{route('sliders.index')}}" class="btn btn-success"> All Sliders</a>

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
                            <h3 class="card-title">{{$slider->title}} </h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Link</div>
                                    <div class="text">{{$slider->link}}</div>
                                </li>
                                <li>
                                    <div class="title">Description</div>
                                    <div class="text">{{$slider->description}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <img src="{{ asset('storage/slider/'. $slider->slider_image)}}" width="100%">
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Content -->
    </div>
    <!-- Page Content -->

</div>

@endsection

