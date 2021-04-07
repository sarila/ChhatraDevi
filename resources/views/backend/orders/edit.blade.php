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
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('orders.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> All Orders</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card mb-5">
                            <form method="post" action="{{route('orders.update', $order->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name')??$order->first_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name')??$order->last_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact">Contact Number <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="contact" id="contact" value="{{ old('contact')??$order->contact }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="address">Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="address" id="address" value="{{ old('address')??$order->address }}">
                                        </div>
                                    </div> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="state">State <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="state" id="state" value="{{ old('state')??$order->state }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="payment_process">Payment Process</label>
                                            <select name="payment_process" id="payment_process" class="form-control">
                                                <option value= "0" >Cash On Delivery</option>
                                                <!-- <option value= "1" >Esewa</option>
                                                <option value= "2" >Fone Pay</option>
                                                <option value= "3" >Khalti</option> -->
                                            </select>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status"> Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value= "0">Pending</option>
                                                <option value= "1">Completed</option>
                                                <option value= "2">Canceled</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Order Notes</label>
                                            <textarea rows="5" cols="5" class="form-control editor1" name="order_note" id="editor1">{{old('order_note') ?? $order->order_note}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card mb-5">
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
                            </div>  
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection

