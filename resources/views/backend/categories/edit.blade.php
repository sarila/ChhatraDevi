@extends('backend.admin.admin_design')
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Update Category</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href=" {{route('categories.index')}}" class="btn add-btn" ><i class="fa fa-eye"></i> All Categories</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

          @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('categories.update', $category->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="category_name">Category Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="category_name" id="category_name" value="{{ old('category_name')??$category->category_name }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" cols="5" class="form-control editor1" id="editor1"  name="description">
                                            {{old('description') ?? $category->description}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Icon<span class="text-danger">*</span></label>
                                        <input type="hidden" name="category_icon">
                                        <input class="form-control" name="category_icon" type="file" accept="image/*" id="category_icon" onchange="readURL(this);">
                                    </div>
                                    <div class="welcome-img">
                                        @if(empty($category->category_icon))
                                            <img src="" style="width: 100px" id="one">
                                        @else
                                            <img src="{{ asset('storage/category/'.$category->category_icon) }}" style="width: 100px" id="one">
                                        @endif
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

    @section('js')

    <!-- CKEDITOR js -->
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor1', {
            filebrowserUploadUrl: "{{route('ckeditor.store', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    @endsection
