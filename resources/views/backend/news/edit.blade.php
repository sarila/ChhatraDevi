@extends('backend.admin.admin_design')


@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Categories</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('news.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> All Categories</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form method="post" action="{{route('news.update', $news->id)}}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="text-center">
                                <img src="" alt="" width="200px" id="one" style="margin-top: 15px; margin-bottom: 10px">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title" style="font-size: 14px">News Title</label>
                                        <input class="form-control" type="text" name="title" id="title" value="{{ old('title')??$news->title }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="excerpt" style="font-size: 14px">Excerpt</label>
                                        <textarea class="form-control" type="text" name="excerpt" id="excerpt" >{{ old('excerpt')??$news->excerpt }}</textarea> 
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="seo_title" style="font-size: 14px">SEO Title</label>
                                        <input class="form-control" type="text" name="seo_title" id="seo_title" value="{{ old('seo_title')??$news->seo_title }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="keywords" style="font-size: 14px">SEO Keywords</label>
                                        <input class="form-control" type="text" name="keywords" id="keywords" value="{{ old('keywords')??$news->keywords }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="hidden" name="image">
                                        <input class="form-control" name="image" type="file" accept="image/*" id="image" onchange="readURL(this);">
                                    </div>
                                    <div class="welcome-img">
                                        @if(empty($news->image))
                                            <img src="" style="width: 100px" id="one">
                                        @else
                                            <img src="{{ asset('storage/news/'.$news->image) }}" style="width: 100px" id="one">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>News Type</label><br>
                                        <input type="radio" id="articles" name="news_type" value="0" {{!$news->news_type ? 'checked' : ''}}>
                                        <label for="articles">Article</label><br>
                                        <input type="radio" id="media-coverage" name="news_type" value="1" {{$news->news_type ? 'checked' : ''}}>
                                        <label for="media-coverage">Media Coverage</label><br>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="5" cols="5" class="form-control editor1" id="editor1"  name="description" >
                                    {{ old('description') ?? $news->description }}
                                </textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update News</button>
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
