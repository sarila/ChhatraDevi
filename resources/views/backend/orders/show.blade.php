@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                
                <div class="card-header">
                    <div class="col-8">
                        <h3 class="page-title">Order</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Order Details</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <div class="pull-right">
                            <div class="dropdown">
                                <a href="{{route('orders.index')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('backend.includes.message')
  
        <div class="col-12 align-self-center">
            <div class="content xs-title">
               <span>Total Price: </span> <span>{{$order->cart->totalPrice }}</span>
            </div>
            @foreach($order->cart->items as $item)
                <td>{{ $item['item']['product_name'] }}  || {{ $item['qty'] }}  ||  {{ $item['price'] }}</td> <br>
            @endforeach
        </div>
        <div class="card-body">
            {{ $order->order_note }}
        </div>

        <!-- End of Content -->
    </div>
    <!-- Page Content -->

</div>

@endsection

