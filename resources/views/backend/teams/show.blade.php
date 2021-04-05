@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Team</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('teams.edit', $team->id)}}"><button class="btn btn-info"> Edit Team</button></a>
                    <a href="{{route('teams.index')}}" class="btn btn-success"> All Team</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <section>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-3">
                      <img src="{{asset('storage/team/'. $team->image)}}" alt="" width="223px">
                    </div>
                    <div class="col-lg-3">
                        <div class="profile-info-left">
                            <h3 class="user-name m-t-0">{{$team->name}}</h3>
                            <h5 class="company-role m-t-0 mb-0">{{$team->designation}}</h5>
                            <small class="text-muted">{{$team->department}}</small>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="personal-info">
                            <li>
                                <span class="title">Address:</span>
                                <span class="text">{{$team->address}}</span>
                            </li>
                            <li>
                                <span class="title">Contact Number:</span>
                                <span class="text">{{$team->contact}}</span>
                            </li>
                            <li>
                                <span class="title">Email:</span>
                                <span class="text">{{$team->email}}</span>
                            </li>
                            <li>
                                <span class="title">Department:</span>
                                <span class="text">{{$team->department}}</span>
                            </li>
                            <li>
                                <span class="title">Designation:</span>
                                <span class="text">{{$team->designation}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- Page Content -->

</div>

@endsection

