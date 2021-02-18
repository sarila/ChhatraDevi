@extends('backend.admin.admin_design')
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Update Testimonial</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href=" {{route('testimonials.index')}}" class="btn add-btn" ><i class="fa fa-eye"></i> All Testimonial</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

          @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <form method="post" action="{{route('testimonials.update', $testimonial->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name')??$testimonial->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="position">Position <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="position" id="position" value="{{ old('position')??$testimonial->position }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <input type="text" class="form-control" name="message" id="message" value="{{ old('message') ?? $testimonial->message }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="hidden" name="image">
                                        <input class="form-control" name="image" type="file" accept="image/*" id="image" onchange="readURL(this);">
                                    </div>
                                    <div class="welcome-img">
                                        @if(empty($testimonial->image))
                                            <img src="" style="width: 100px" id="one">
                                        @else
                                            <img src="{{ asset('storage/testimonials/'.$testimonial->image) }}" style="width: 100px" id="one">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
