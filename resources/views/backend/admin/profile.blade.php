@extends('backend.admin.admin_design_v2')
​
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Profile Settings
                                <label class="float-right" style="font-size: 14px">(<span class="text-danger">*</span>) Mandatory</label>
                            </h3>
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


                <form method="post" action="{{route('update.profile', $user->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="firstname">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="{{ $user->firstname }}" name="firstname" id="firstname">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="middlename">Middle Name</label>
                                <input class="form-control" type="text" value="{{ $user->middlename }}" name="middlename" id="middlename">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Last Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="{{ $user->lastname }}" name="lastname" id="lastname">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email Address <span class="text-danger">*</span></label>
                                <input class="form-control" value="{{ $user->email }}" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Address <span class="text-danger">*</span></label>
                                <input class="form-control " value="{{ $user->address }}" type="text" name="address" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone<span class="text-danger">*</span></label>
                                <input class="form-control" value="{{ $user->phone }}" type="text" name="phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="hidden" name="current_image" value="{{ $user->image }}">
                                <input class="form-control" name="image" type="file" accept="image/*" id="image" onchange="readURL(this);">
                            </div>
                            <div class="welcome-img">
                                @if(empty($user->image))
                                    <img src="{{ asset('public/uploads/default/avatar.png') }}" style="width: 100px" id="one">
                                @else
                                    <img src="{{ asset('storage/admin/'.$user->image) }}" style="width: 100px" id="one">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Update</button>
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
    </script>
@endsection