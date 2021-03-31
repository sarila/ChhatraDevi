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
                    <a href="{{route('')}}"></a>
                    <button class="btn btn-success"> All Products</button>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <section>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-4">
                      <img src="{{asset('storage/products/'. $product->coverimage)}}" alt="">
                    </div>
                    <div class="col-lg-8">
                      <div class="card-body">
                        <h3 class="card-title">{{$product->product_name}}</h3>
                        <h5 class="card-text">Price: {{$product->price}}</h5>
                        <h5 class="card-text">Quantity: {{$product->quantity}}</h5>
                        <h5 class="card-text">Discount: {{$product->discount}}</h5>
                        <h5 class="card-text">Discount Type: {{$product->discount_type}}</h5>
                        <h5 class="card-text">SKU: {{$product->SKU}}</h5>
                        <h5 class="card-text">Category: {{$product->pcategory_id}}</h5>
                        <h5 class="card-text">Status: {{$product->status}}</h5>
                        <p class="card-text">{{$product->product_description}}</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                      </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Page Content -->

</div>

@endsection

