@extends('frontend.includes.layout')


@section('content')
	<div class="shop-page">
	    <!-- Page Banner -->
	    <div class="page-banner">
	        <div class="container d-flex">
	            <h1 class="page-title lg-title flex-g-1">Shop</h1>
	            <div class="bread-crumbs">
	                <ul class="list-none d-flex justify-content-end">
	                    <li class="xs-title"><a href="index.php" class="d-inline-block text-white">Home</a></li>
	                    <span class="seperator px-2 text-white"> > </span>
	                    <li class="xs-title active">Shop</li>
	                </ul>
	            </div>
	        </div>
	    </div>
	    <!-- End of Page Banner -->
	 	
	   	 <!--Start Cart Section-->
	    <section class="cart-section">
	        <div class="container">
	            <!--Cart Outer-->
	            <div class="cart-outer">
                    @if (Session::has('cart'))

	                <div class="table-column">
	                    <div class="inner-column">
	                        <div class="table-outer">
	                            <div class="table-box">
	                                <table class="cart-table">
	                                    <thead class="cart-header">
	                                        <tr>
	                                            <th class="prod-column">Product</th>
	                                            <th>&nbsp;</th>
	                                            <th class="price">Price</th>
	                                            <th>Quantity</th>
	                                            <th>Total</th>
	                                            <th>&nbsp;</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                    	@foreach ($products as $product)
	                                    		<tr>
		                                            <td colspan="2" class="prod-column">
		                                                <div class="column-box">
		                                                    <figure class="prod-thumb"><a href="{{route('productDetail',$product['item']['id'])}}"><img class="lazy-image" src="{{asset('storage/products/'. $product['item']['coverimage'])}}" data-src="{{asset('storage/products/'. $product['item']['coverimage'])}}" alt=""></a></figure>
		                                                    <h4 class="prod-title">{{$product['item']['product_name']}}</h4>
		                                                </div>
		                                            </td>
		                                            <td class="price">Rs {{$product['item']['discounted_price']}}</td>
		                                            <td class="qty"><input type="number" value="{{$product['qty']}}" class="form-control w-25 mx-auto" disabled></td>
		                                            <td class="sub-total">Rs {{$product['item']['discounted_price']* $product['qty']}}  </td>
		                                            <td class="remove"><a href="{{ route('removeFromCart', $product['item']['id']) }}" class="remove-btn"><i class="fas fa-times pt-1 xs-title"></i></a></td>
		                                        </tr>
	                                    	@endforeach
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="totals-column clearfix">
	                    <div class="inner">
	                        <div class="cart-total">
	                            <h3 class="title">Cart Totals</h3>
	                            <!--Totals Table-->
	                            <ul class="totals-table list-none">
	                                <li class="clearfix">
	                                    <span class="col col-title">Sub Total</span>
	                                    <span class="col">{{$totalPrice}}</span>
	                                </li>
	                                <li class="clearfix"><span class="col col-title">Order Total</span><span class="col total-price">{{$totalPrice}}</span></li>
	                                <li class="clearfix"><a href="{{route('checkout')}}" class="button-two cursor-pointer"><span class="btn-title">Procceed To Checkout</span></a></li>
	                                  <span class="d-block text-black xs-title font-weight-semi pb-2">Or</span>
	                                   <li class="clearfix"><a href="{{route('shop')}}" class="button-one"><span class="btn-title">Continue Shopping</span></a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	                @else
					    <div class="totals-column clearfix">
							<h3>There are no Items Available in Cart</h3>		                           
			                 <!-- <div class="link-box"> -->
			                    <a href="{{route('shop')}}" class="button-two cursor-pointer"><span class="btn-title">Go to Shop</span></a>
			                <!-- </div> -->
				        </div>
			        @endif
	            </div>
	        </div>
	    </section>
	    <!-- End Cart Section--> 
	</div>

@endsection