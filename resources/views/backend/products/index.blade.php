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
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('products.create')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add Product</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
          @include('backend.includes.message')

        <div class="row staff-grid-row">
            @foreach($products as $data)
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <a href="{{ route('products.show', $data->id) }}" class="avatar"><img alt="" src="{{asset('storage/products/'.$data->coverimage)}}"></a>
                            <!-- <a href="{{ route('news.show',$data->id) }}" class="btn btn-success show"><i class="la la-eye" ></i></a> -->
                        </div>
                        <div class="dropdown profile-action">
                            <a href="clients.html#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <form method="POST" action="{{route('products.destroy', $data->id)}}">
                                @csrf
                                @method('DELETE')
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a  class="dropdown-item" href="{{ route('products.show',$data->id) }}"><i class="fa fa-eye m-r-5" > Show </i></a>
                                    <a class="dropdown-item" href="{{ route('products.edit',$data->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <button type="submit" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete </button>
                                </div>
                            </form>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">{{ $data->product_name }}</a></h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">{{$data->discounted_price}}</a></h5>
                        <div class="small text-muted">{{ $data->SKU }}</div>
                        <a href="{{ route('products.show', $data->id) }}" class="btn btn-white btn-sm m-t-10">View Product</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- /Page Content -->

</div>

@endsection