@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Categories</h3>
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
                                <a href="{{route('categories.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0" id="category-datatable">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Icon</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->category_name }}</td>
                                            <td> <img src="{{ asset('storage/category/'. $category->category_icon)}}"  width="40" align="center"></td>
                                            <td>
                                                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                                    <a href="{{ route('categories.show',$category->id) }}" class="btn btn-success show"><i class="la la-eye" ></i></a>
                                                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}"><i class="fa fa-pencil"></i></a>
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
    <script type="text/javascript">
        $(document).ready( function () {
            $('#category-datatable').DataTable();
        } );
    </script>
    
@endsection
