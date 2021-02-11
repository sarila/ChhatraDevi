@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">News</h3>
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
                                <a href="{{route('news.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Add New</a>
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
                                        <th>SEO-Title</th>
                                        <th>Keyword</th>
                                        <th>Image</th>
                                        <th>News_Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($news as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->seo_title }}</td>
                                            <td>{{ $data->keywords }}</td>
                                            <td> <img src="{{ asset('storage/news/'. $data->image)}}"  width="40" align="center"></td>
                                            <td>{{ $data->news_type }}</td>

                                            <td>
                                                <form action="{{ route('news.destroy',$data->id) }}" method="POST">

                                                    <a href="{{ route('news.show',$data->id) }}" class="btn btn-success show"><i class="la la-eye" ></i></a>

                                                    <a class="btn btn-primary" href="{{ route('news.edit',$data->id) }}"><i class="fa fa-pencil"></i></a>
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
    <!-- For show data -->
    <!-- <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" id="modal-header">
                    <h4 class="modal-title" id="modal-title">Form Input</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="modal-body">
                </div>
            </div>
        </div>
    </div> -->

    <!-- For delete data -->
    <!-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" id="modal-header">
                    <h4 class="modal-title" id="modal-title">Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="modal-body">
                    Confirm Delete? 
                    <button class="btn btn-danger" id="deleteButton">Yes Delete</button>
                </div>
            </div>
        </div>
    </div>
 -->


</div>

@endsection
@section('js')

<script>
 $(function() {
   $('#news-datatable').DataTable();
 });
</script>
@endsection
