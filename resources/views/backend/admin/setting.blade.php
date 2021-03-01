@extends('backend.admin.admin_design_v2')
​
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Site Settings</h3>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                @if(Session::has('error_message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="height: 40px; padding: 10px;">
                        {{ Session::get('error_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="position: relative; top: -10px;">&times;</span>
                        </button>
                    </div>
                @endif
                @if(Session::has('success_message'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert" style="height: 40px; padding: 10px;">
                        {{ Session::get('success_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="position: relative; top: -10px;">&times;</span>
                        </button>
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger" >
                        <ul style="list-style: none; ">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{route('update.setting', $setting->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="site_title">Site Title <span class="text-danger">*</span></label>
                                <input class="form-control" name="site_title" id="site_title" type="text" value="{{ $setting->site_title }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="address">Address <span class="text-danger">*</span></label>
                                <input class="form-control" name="address" id="address" value="{{ $setting->address }}" type="text">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input class="form-control" name="email" id="email" value="{{ $setting->email }}" type="email">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="contact_number">Contact Number</label>
                                <input class="form-control" name="contact_number" id="contact_number" value="{{ $setting->contact_number }}" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="about_title">About Title <span class="text-danger">*</span></label>
                                <input class="form-control" name="about_title" id="about_title" type="text" value="{{ $setting->about_title }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="excerpt">About Excerpt <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="excerpt" id="excerpt" type="text" rows="7">{{ $setting->excerpt }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="about_us">About Us <span class="text-danger">*</span></label>
                                <textarea class="form-control ckeditor" name="about_us" id="editor1" type="text">{{ $setting->about_us }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="our_values">Our Values</label>
                                <textarea class="form-control ckeditor" name="our_values" id="our_values" type="text">{{ $setting->our_values }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="our_vision">Our Visions</label>
                                <textarea class="form-control ckeditor" name="our_vision" id="our_vision" type="text">{{ $setting->our_vision }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="our_mission"> Our Missions</label>
                                <textarea class="form-control ckeditor" name="our_mission" id="our_mission" type="text">{{ $setting->our_mission }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Image  <span class="text-danger">*</span></label>
                                <input type="hidden" name="about_image" value="{{ $setting->about_image }}">
                                <input class="form-control" name="about_image" type="file" accept="image/*" id="image" onchange="readURL(this);">
                            </div>
                            <div class="welcome-img">
                                @if(empty($setting->about_image))
                                    <img src="" style="width: 100px" id="one">
                                @else
                                    <img src="{{ asset('storage/about/'.$setting->about_image) }}" style="width: 100px" id="one">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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