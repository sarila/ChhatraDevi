@extends('backend.admin.admin_design')
@section('content')

  <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Orders</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('orders.edit', $order->id)}}"><button class="btn btn-info"> Edit Order</button></a>
                    <a href="{{route('orders.index')}}" class="btn btn-success"> All Orders</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
         @include('backend.includes.message')
        <section>
            <div class="card mb-0">
                <div class="card-body">
                    @foreach($order->cart->items as $item)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-view">
                                    <div class="profile-img-wrap">
                                        <div class="profile-img">
                                            <img src="{{ asset('storage/products/'. $item['item']['coverimage']) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="profile-basic">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <ul class="personal-info">
                                                    <li>
                                                        <span class="title">Product Name:</span>
                                                        <span class="text">{{ $item['item']['product_name'] }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Quantity:</span>
                                                        <span class="text">{{ $item['qty'] }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Price:</span>
                                                        <span class="text">{{ $item['price'] }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <hr>
                    @endforeach
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>Total Price</h4>
                        </div>
                        <div class="col-lg-6">
                            Rs. {{$order->cart->totalPrice }}
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>Order Note</h4><br>
                        </div>
                        <div class="col-lg-6">
                        <p>
                            {{ $order->order_note }}
                        </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>Status</h4><br>
                        </div>
                        <div class="col-lg-6">
                        <p>
                            {{ $order->status }}
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection

