@extends('frontend.includes.layout')

@section('content')

    <div class="cart-page">
        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container d-flex">
                <h1 class="page-title lg-title flex-g-1">Checkout</h1>
                <div class="bread-crumbs">
                    <ul class="list-none d-flex justify-content-end">
                        <li class="xs-title"><a href="{{route('indexPage')}}" class="d-inline-block text-white">Home</a></li>
                        <span class="seperator px-2 text-white"> > </span>
                        <li class="xs-title"><a href="{{route('cart')}}" class="d-inline-block text-white">Cart</a></li>
                        <span class="seperator px-2 text-white"> > </span>
                        <li class="xs-title active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Page Banner -->
        <!--CheckOut Page-->
        <section class="checkout-page">
            <div class="container">
                <ul class="list-none">
                    <li class="d-block bg-main text-white p-3 mb-4">Returning Customer? <span data-toggle="modal" data-target="#loginModal" class="text-white bg-none border-0 d-inlnie-block cursor-pointer">Click here to Login</span></li>
                    <li class="d-block text-white p-3 mb-4 bg-danger">Please Fill all the necessary Fields</li>
                </ul>
                <!--Checkout Details-->
                <div class="checkout-form">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <form method="post" action="">
                                <div class="billing-detail">
                                <div class="row clearfix">
                                    <div class="billing-column col-12">
                                        <h3 class="checkout-title">Billing Details</h3>
                                        <div class="row clearfix">
                                            <!--Form Group-->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-label">First Name<sup>*</sup></div>
                                                <input type="text" name="first_name" value="" placeholder="">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-label">Last Name<sup>*</sup></div>
                                                <input type="text" name="last_name" value="" placeholder="">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="field-label">Email Address<sup>*</sup></div>
                                                <input type="text" name="email" value="" placeholder="">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-label">Phone Number<sup>*</sup></div>
                                                <input type="text" name="phone_number" value="" placeholder="">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 address">
                                                <div class="field-label">Address*<sup>*</sup></div>
                                                <input type="text" name="address" value="" placeholder="">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="field-label">Town / City <sup>*</sup></div>
                                                <input type="text" name="town" value="" placeholder="">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-label">State <sup>*</sup></div>
                                                <input type="text" name="state" value="" placeholder="Email Address">
                                            </div>
                                            <div class="form-group col-lg-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Create an account?</label></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <h3 class="checkout-title">Additional Information</h3>
                                            <div class="Additional-info">
                                                <!--Form Group-->
                                                <div class="form-group">
                                                    <div class="field-label">Order Notes</div>
                                                    <textarea name="order_notes" class="" placeholder="Notes about your order, e.g. special notes for your delivery."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 col-12">
                            <!--Payment Options-->
                            <div class="payment-options">
                                <h3>Payment Proccess</h3>
                                <ul class="list-none">
                                    <li>
                                        <div class="radio-option">
                                            <input type="radio" name="payment_method" id="payment-1" checked>
                                            <label for="payment-1"><strong class="d-block">Cash On Delivery</strong></label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <button type="submit" class="button-two place-order cursor-pointer"><span class="btn-title">Place Order</span></button>
                                </div>
                            </div>
                            <!--End Place Order-->
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="order-detail-info">
                            <h3 class="checkout-title">Your Order</h3>
                            <div class="order-detail">
                                <div class="cart-outer">
                                    <table class="cart-table">
                                        <tbody>
                                            <tr>
                                                <td class="prod-column">
                                                    <div class="column-box">
                                                        <figure class="prod-thumb"><img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/resource/products/1.png" alt=""></figure>
                                                        <h4 class="prod-title">Women back Top</h4>
                                                    </div>
                                                </td>
                                                <td class="sub-total">Rs150.00</td>
                                            </tr>
                                            <tr>
                                                <td class="prod-column">
                                                    <div class="column-box">
                                                        <figure class="prod-thumb"><img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/resource/products/6.png" alt=""></figure>
                                                        <h4 class="prod-title">Light warm Sweter</h4>
                                                    </div>
                                                </td>
                                                <td class="sub-total">Rs60.00</td>
                                            </tr>
                                            <tr>
                                                <td class="prod-column">
                                                    <div class="column-box">
                                                        <figure class="prod-thumb"><img class="lazy-image" src="assets/images/image-bg.svg" data-src="assets/images/resource/products/4.png" alt=""></figure>
                                                        <h4 class="prod-title">Party Shoes for men</h4>
                                                    </div>
                                                </td>
                                                <td class="sub-total">Rs120.00</td>
                                            </tr>
                                            <tr>
                                                <td class="col col-title">Sub Total</td>
                                                <td class="col">Rs330.00</td>
                                            </tr>
                                            <tr>
                                                <td class="col col-title">Order Total</td>
                                                <td class="col total">Rs330.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Checkout Page -->
    </div>

@endsection