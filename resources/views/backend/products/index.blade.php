@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Products</h3>
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
                                <a href="{{route('products.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0" id="products-datatable">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Discount Type</th>
                                        <th>SKU</th>
                                        <th>CoverImage</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($products as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->product_name }}</td>
                                            <td>{{ $data->price }}</td>
                                            <td>{{ $data->discount }}</td>
                                            <td>{{ $data->discount_type }}</td>
                                            <td>{{ $data->SKU }}</td>
                                            <td>{{ $data->coverimage }}</td>
                                            <td>{{ $data->pcategory_id }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td>
                                                <form action="{{ route('products.destroy',$data->id) }}" method="POST">

                                                    <a href="{{ route('products.show',$data->id) }}" class="btn btn-success show"><i class="la la-eye" ></i></a>

                                                    <a class="btn btn-primary" href="{{ route('products.edit',$data->id) }}"><i class="fa fa-pencil"></i></a>
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
            $('#products-datatable').DataTable();
        } );
    </script>
@endsection
