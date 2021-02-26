@extends('backend.admin.admin_design')


@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Sliders</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('sliders.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> All Sliders</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('sliders.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="link">Link</label>
                                        <input type="text" class="form-control" name="link" id="link" value="{{ old('link') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" class="form-control" id="description"  name="description">
                                            {{ old('description') }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Slider Image<span class="text-danger">*</span></label>
                                        <input type="hidden" name="slider_image">
                                        <input class="form-control" name="slider_image" type="file" accept="image/*" id="slider_image" onchange="readURL(this);">
                                    </div>
                                    <div class="welcome-img">
                                        @if(empty($user->slider_image))
                                            <img src="" style="width: 100px" id="one">
                                        @else
                                            <img src="{{ asset('storage/slider/'.$user->slider_image) }}" style="width: 100px" id="one">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-right">
                                    <input type="submit" class="btn btn-primary" name="Add Category">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection

@section('js')

    <script type="text/javascript">
        function readURL(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(100)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection