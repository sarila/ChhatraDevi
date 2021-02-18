@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Events</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('backend.includes.message')

        <div class="row">

            <div class="col-sm-12">
                <div class="card mb-0">
                    <div class="card-header">
                        <span style="position:relative; top: 7px">
                            Please use the table below to navigate or filter the results.
                        </span>
                        <div class="pull-right">
                            <div class="dropdown">
                                <a href="{{route('events.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0" id="news-datatable">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Title</th>
                                        <th>Location</th>
                                        <th>Duration</th>
                                        <th>Entrance (no. of seat)</th>
                                        <th>Feature_image</th>
                                        <th>Date</th>
                                        <th>Time Duration</th>
                                        <th>Gallery_id</th>
                                        <th>Category_id</th>
                                        <th>Status</th>
                                        <th>Start Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($events as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->location }}</td>
                                            <td>{{ $data->duration }}</td>
                                            <td>{{ $data->no_of_seat }}</td>
                                            <td>{{ $data->feature_image }}</td>
                                            <td>{{ $data->date }}</td>
                                            <td>{{ $data->time_duration }}</td>
                                            <td>{{ $data->gallery_id }}</td>
                                            <td>{{ $data->category_id }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td>{{ $data->start_date }}</td>
                                            <td>{{ $data->projects_type }}</td>

                                            <td>
                                                <form action="{{ route('events.destroy',$data->id) }}" method="POST">

                                                    <a href="{{ route('events.show',$data->id) }}" class="btn btn-success show"><i class="la la-eye" ></i></a>

                                                    <a class="btn btn-primary" href="{{ route('events.edit',$data->id) }}"><i class="fa fa-pencil"></i></a>
                                                    @csrf

                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->


</div>

@endsection
@section('js')

<script>
 $(function() {
   $('#events-datatable').DataTable();
 });
</script>
@endsection
