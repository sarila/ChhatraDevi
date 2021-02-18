@extends('backend.admin.admin_design')


@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Projects</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('projects.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> All Projects</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form method="post" action="{{route('projects.update', $project->id)}}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                                  <div class="text-center">
                                <img src="" alt="" width="200px" id="one" style="margin-top: 15px; margin-bottom: 10px">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title" style="font-size: 14px">Title</label>
                                        <input class="form-control" type="text" name="title" id="title" value="{{old('title')??$project->title }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="excerpt" style="font-size: 14px">Excerpt</label>
                                        <textarea class="form-control" type="text" name="excerpt" id="excerpt" > {{old('excerpt')??$project->excerpt}}</textarea> 
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="5" cols="5" class="form-control editor1" id="editor1"  name="description">
                                    {{ old('description')??$project->description }}
                                </textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id"> Gallery ID</label>
                                        <select name="gallery_id" id="gallery_id" class="form-control select">
                                            <option value="0">None</option>
                                            @foreach($galleries as $gallery)
                                                <option value= " {{$gallery->id}} ">{{$gallery->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label><br>
                                        <input type="radio" id="ongoing" name="status" value="0">
                                        <label for="ongoing">Ongoing</label><br>
                                        <input type="radio" id="completed" name="status" value="1">
                                        <label for="completed">Completed</label><br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">Category ID</label>
                                        <select name="category_id" id="category_id" class="form-control select">
                                            <option value="0">None</option>
                                            @foreach($categories as $category)
                                                <option value= " {{$category->id}} ">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Cover Image</label>
                                        <input type="hidden" name="image">
                                        <input class="form-control" name="coverimage" type="file" accept="image/*" id="coverimage" onchange="readURL(this);">
                                    </div>
                                    <div class="welcome-img">
                                        @if(empty($project->coverimage))
                                            <img src="" style="width: 100px" id="one">
                                        @else
                                            <img src="{{ asset('storage/project/'.$project->coverimage) }}" style="width: 100px" id="one">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="start_date" id="datepicker" value="{{ old('start_date')??$project->start_date}}"> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update project</button>
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
@endsection
