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
	    <!--End Cart Section-->
	    <section class="cart-section">
	        <div class="container">
	            <!--Cart Outer-->
	            <div class="cart-outer">
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
	                                        <tr>
	                                            <td colspan="2" class="prod-column">
	                                                <div class="column-box">
	                                                    <figure class="prod-thumb"><a href="product-detail.php"><img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/resource/products/1.png" alt=""></a></figure>
	                                                    <h4 class="prod-title">Back Two Piece</h4>
	                                                </div>
	                                            </td>
	                                            <td class="price">Rs 50.00</td>
	                                            <td class="qty"><input type="number" value="1" class="form-control w-25 mx-auto"></td>
	                                            <td class="sub-total">Rs 50.00</td>
	                                            <td class="remove"><a href="#" class="remove-btn"><i class="fas fa-times pt-1 xs-title"></i></a></td>
	                                        </tr>
	                                        <tr>
	                                            <td colspan="2" class="prod-column">
	                                                <div class="column-box">
	                                                    <figure class="prod-thumb"><a href="product-detail.php"><img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/resource/products/2.png" alt=""></a></figure>
	                                                    <h4 class="prod-title">Beautiful Bag</h4>
	                                                </div>
	                                            </td>
	                                            <td class="price">60.00</td>
	                                            <td class="qty"><input type="number" value="1" class="form-control w-25 mx-auto"></td>
	                                            <td class="sub-total">Rs 60.00</td>
	                                            <td class="remove"><a href="#" class="remove-btn"><i class="fas fa-times pt-1 xs-title"></i></a></td>
	                                        </tr>

	                                        <tr>
	                                            <td colspan="2" class="prod-column">
	                                                <div class="column-box">
	                                                    <figure class="prod-thumb"><a href="product-detail.php"><img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/resource/products/3.png" alt=""></a></figure>
	                                                    <h4 class="prod-title">Light Sweater</h4>
	                                                </div>
	                                            </td>
	                                            <td class="price">Rs 40.00</td>
	                                            <td class="qty"><input type="number" value="1" class="form-control w-25 mx-auto"></td>
	                                            <td class="sub-total">Rs 40.00</td>
	                                            <td class="remove"><a href="#" class="remove-btn"><i class="fas fa-times pt-1 xs-title"></i></a></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        
	                            <div class="coupon-outer">
	                                <div class="content-box clearfix">
	                                   <!--  <div class="apply-coupon clearfix">
	                                        <div class="field-label">Click on a coupon code to apply</div>
	                                        <div class="form-group clearfix">
	                                            <input type="text" name="coupon-code" value="" placeholder="Apply Coupon Code">
	                                        </div>
	                                        <div class="form-group clearfix">
	                                            <button type="button" class="button-one cursor-pointer"><span class="btn-title">Apply Now</span></button>
	                                        </div>
	                                    </div> -->
	                                    <div class="link-box">
	                                        <button type="button" class="button-one cursor-pointer"><span class="btn-title">Update Cart</span></button>
	                                        <a href="{{route('shop')}}" class="button-two cursor-pointer"><span class="btn-title">Continue Shoping</span></a>
	                                    </div>
	                                </div>
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
	                                    <span class="col">Rs 150.00</span>
	                                </li>
	                                <li class="clearfix"><span class="col col-title">Order Total</span><span class="col total-price">Rs 160.00</span></li>
	                                <li class="clearfix"><a href="{{route('checkout')}}" class="button-two cursor-pointer"><span class="btn-title">Procceed To Checkout</span></a></li>
	                                  <span class="d-block text-black xs-title font-weight-semi pb-2">Or</span>
	                                   <li class="clearfix"><a href="{{route('shop')}}" class="button-one"><span class="btn-title">Continue Shopping</span></a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End Cart Section-->
	</div>

@endsection