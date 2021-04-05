@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Our Team</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('teams.create')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add Team</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('backend.includes.message')


        <div class="row staff-grid-row">
            @foreach($teams as $data)
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <a href="{{ route('teams.show', $data->id) }}" class="avatar"><img alt="" src="{{asset('storage/team/'.$data->image)}}"></a>
                            <!-- <a href="{{ route('news.show',$data->id) }}" class="btn btn-success show"><i class="la la-eye" ></i></a> -->
                        </div>
                        <div class="dropdown profile-action">
                            <a href="clients.html#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <form method="POST" action="{{route('teams.destroy', $data->id)}}">
                                @csrf
                                @method('DELETE')
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a  class="dropdown-item" href="{{ route('teams.show',$data->id) }}"><i class="fa fa-eye m-r-5" > Show </i></a>
                                    <a class="dropdown-item" href="{{ route('teams.edit',$data->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <button type="submit" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete </button>
                                </div>
                            </form>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{route('teams.show', $data->id)}}">{{ $data->name }}</a></h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{route('teams.show', $data->id)}}">{{$data->designation}}</a></h5>
                        <div class="small text-muted">{{ $data->department }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Page Content -->
</div>

@endsection

