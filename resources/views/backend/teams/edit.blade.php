@extends('backend.admin.admin_design')
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Update Team</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href=" {{route('teams.index')}}" class="btn add-btn" ><i class="fa fa-eye"></i> All Team</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

          @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <form method="post" action="{{route('teams.update', $team->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name')??$team->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="designation">Designation <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="designation" id="designation" value="{{ old('designation')??$team->designation }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="department">Department</label>
                                        <input type="text" class="form-control" name="department" id="department" value="{{ old('department') ?? $team->department }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="department">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" value="{{ old('address') ?? $team->address }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="hidden" name="image">
                                        <input class="form-control" name="image" type="file" accept="image/*" id="image" onchange="readURL(this);">
                                    </div>
                                    <div class="welcome-img">
                                        @if(empty($team->image))
                                            <img src="" style="width: 100px" id="one">
                                        @else
                                            <img src="{{ asset('storage/team/'.$team->image) }}" style="width: 100px" id="one">
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
