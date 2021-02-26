@extends('backend.admin.admin_design')


@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Images</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('images.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> All Images</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form method="post" action="{{route('images.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="text-center">
                                <img src="" alt="" width="200px" id="one" style="margin-top: 15px; margin-bottom: 10px">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title" style="font-size: 14px">Title</label>
                                        <input class="form-control" type="text" name="title" id="title" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description" style="font-size: 14px">Description</label>
                                        <textarea class="form-control" type="text" name="description" id="description" ></textarea> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="link" style="font-size: 14px">Link</label>
                                        <input class="form-control" type="text" name="link" id="link" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gallery_id"> Select Gallery to add image to</label>
                                        <select name="gallery_id" id="gallery_id" class="form-control select">
                                            <option value="NULL">None</option>
                                            @foreach($galleries as $gallery)
                                                <option value= " {{$gallery->id}} ">{{$gallery->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="images">Select Images</label>
                                       <input type="file" name="images[]" class="form-control" id="images" accept="image/*" onchange="readURL(this);" multiple>
                                       
                                   </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Add Images</button>
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


