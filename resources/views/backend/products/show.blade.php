@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Product</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('products.create')}}"><button class="btn btn-info"> Add Products</button></a>
                    <a href="{{route('products.index')}}" class="btn btn-success"> All Products</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <section>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-3">
                      <img src="{{asset('storage/products/'. $product->coverimage)}}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <div class="profile-info-left">
                            <h3 class="user-name m-t-0">{{$product->product_name}}</h3>
                            <h5 class="company-role m-t-0 mb-0">{{$product->SKU}}</h5>
                            <small class="text-muted">Price: {{$product->price}}</small>
                            <div class="staff-id">Category: {{$product->pcategory_id}}</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="personal-info">
                            <li>
                                <span class="title">Quantity:</span>
                                <span class="text">{{$product->quantity}}</span>
                            </li>
                            <li>
                                <span class="title">Discount:</span>
                                <span class="text">{{$product->discount}}</span>
                            </li>
                            <li>
                                <span class="title">Discount Type:</span>
                                <span class="text">{{$product->discount_type}}</span>
                            </li>
                            <li>
                                <span class="title">Status:</span>
                                <span class="text">{{$product->status}}</span>
                            </li>
                            <li>
                                <span class="title">Description:</span>
                                <span class="text">{{$product->product_description}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12"> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-title">All Images</div> 
                    </div>
                    <!-- loop -->
                    @foreach($images as $image)
                    <div class="col-md-4 d-flex">
                        <div class="card flex-fill">
                            <a href="{{asset('storage/products/'.$image)}}">
                                <img src="{{asset('storage/products/'. $image)}}" width="100%">
                            </a>
                        </div>
                    </div>
                    @endforeach

                        <!-- endloop -->
                </div>
            </div>
        </section>

    </div>
    <!-- Page Content -->

</div>

@endsection

