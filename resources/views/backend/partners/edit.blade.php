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
                    <a href=" {{route('partners.index')}}" class="btn add-btn" ><i class="fa fa-eye"></i> All Category</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

          @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('partners.update', $partner->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                          @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Partner Comapny Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ?? $partner->name }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Icon<span class="text-danger">*</span></label>
                                        <input type="hidden" name="icon">
                                        <input class="form-control" name="icon" type="file" accept="image/*" id="icon" onchange="readURL(this);">
                                    </div>
                                    <div class="welcome-img">
                                        @if(empty($partner->icon))
                                            <img src="" style="width: 100px" id="one">
                                        @else
                                            <img src="{{ asset('storage/partners/'.$partner->icon) }}" style="width: 100px" id="one">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>contact</label>
                                        <input type="text" class="form-control" name="contact" id="contact" value="{{ old('contact') ?? $partner->contact }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>email</label>
                                        <input type="text" class="form-control" name="email" id="email" value="{{ old('email') ?? $partner->email  }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>facebook</label>
                                        <input type="text" class="form-control" name="facebook" id="facebook" value="{{ old('facebook') ?? $partner->facebook  }}">
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

