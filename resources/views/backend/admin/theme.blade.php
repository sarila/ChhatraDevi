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
                            <h3 class="page-title">Theme Settings</h3>
                        </div>
                    </div>
                </div>

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
            <!-- /Page Header -->

                <form method="post" action="{{route('update.theme', $theme->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Website Name</label>
                        <div class="col-lg-9">
                            <input name="website_name" class="form-control" value="{{$theme->website_name}}" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Header Logo</label>
                        <div class="col-lg-5">
                            <input type="file" class="form-control" name="header_logo" accept="image/*" id="logo" onchange="readURL(this);">
                            <span class="form-text text-muted">Recommended image size is 190px x 60px</span>
                        </div>
                        <div class="col-lg-4">
                            <div class="img-thumbnail float-right"><img src="{{asset('storage/admin/theme/'.$theme->header_logo)}}" alt="" width="100" height="100" id="one"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Footer Logo</label>
                        <div class="col-lg-5">
                            <input type="file" class="form-control" name="footer_logo" accept="image/*" id="logo" onchange="readURL3(this);">
                            <span class="form-text text-muted">Recommended image size is 190px x 60px</span>
                        </div>
                        <div class="col-lg-4">
                            <div class="img-thumbnail float-right"><img src="{{ asset('storage/admin/theme/'.$theme->footer_logo) }}" alt="" width="100" height="100" id="three"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Favicon</label>
                        <div class="col-lg-5">
                            <input type="file" class="form-control" name="favicon" accept="image/*" id="favicon" onchange="readURL2(this)">
                            <span class="form-text text-muted">Recommended image size is 16px x 16px</span>
                        </div>
                        <div class="col-lg-4">
                            <div class="settings-image img-thumbnail float-right"><img src="{{ asset('storage/admin/theme/'.$theme->favicon) }}" class="img-fluid" width="60" height="60" alt="" id="two"></div>
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
        function readURL3(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#three')
                        .attr('src', e.target.result)
                        .width(100)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL2(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#two')
                        .attr('src', e.target.result)
                        .width(60)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    @endsection