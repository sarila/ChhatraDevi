@extends('backend.admin.admin_design')


@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Events</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('events.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> All Events</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form method="post" action="{{route('events.store')}}" enctype="multipart/form-data">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="location" style="font-size: 14px">Location</label>
                                        <input class="form-control" type="text" name="location" id="location" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="duration" style="font-size: 14px">Duration</label>
                                        <input class="form-control" type="text" name="duration" id="duration" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="no_of_seat" style="font-size: 14px">Entrance/ No. of Seat:</label>
                                        <input class="form-control" type="text" name="no_of_seat" id="no_of_seat" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="excerpt" style="font-size: 14px">Excerpt</label>
                                        <textarea class="form-control" type="text" name="excerpt" id="excerpt" > {{old('excerpt')}}</textarea> 
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" cols="5" class="form-control editor1" id="editor1"  name="description">
                                            {{ old('description') }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gallery_id"> Gallery</label>
                                        <select name="gallery_id" id="gallery_id" class="form-control">
                                            <option>None</option>
                                            @foreach($galleries as $gallery)
                                                <option value= " {{$gallery->id}} ">{{$gallery->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status"> Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value= "0">Past Event</option>
                                            <option value= "1">Upcoming Event</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id"> Category</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option>None</option>
                                            @foreach($categories as $category)
                                                <option value= " {{$category->id}} ">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <label for="time_duration">Time Duration <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="time_duration" id="time_duration"> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="feature_image">Feature Image <span class="text-danger">*</span></label>
                                        <input type="file" name="feature_image" class="form-control" id="feature_image" accept="image/*" onchange="readURL(this);">
                                    </div>
                                </div>  
                                <div class="col-md-6">
                                    <label for="date">Date <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="date" id="datepicker"> 
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Add Project</button>
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
    <!-- CKEDITOR js -->
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor1', {
            filebrowserUploadUrl: "{{route('ckeditor.store', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>


    <script>
        function readURL(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(200)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script>
        $( "#datepicker" ).datepicker({
            format: "mm/dd/yyyy",
            weekStart: 0,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true,
            rtl: true,
            orientation: "auto"
        });
    </script>
@endsection
