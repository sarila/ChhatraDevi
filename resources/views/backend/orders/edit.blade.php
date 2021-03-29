@extends('backend.admin.admin_design')


@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Categories</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('news.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> All Categories</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                         <form method="post" action="{{ route('placeOrder') }}">
                                @csrf
                                @method('POST')
                                <div class="billing-detail">
                                    <div class="row clearfix">
                                        <div class="billing-column col-12">
                                            <h3 class="checkout-title">Billing Details</h3>
                                            <div class="row clearfix">
                                                <!--Form Group-->
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <div class="field-label">First Name<sup>*</sup></div>
                                                    <input type="text" id="first_name" name="first_name" value="" placeholder="">
                                                </div>
                                                <!--Form Group-->
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <div class="field-label">Last Name<sup>*</sup></div>
                                                    <input type="text" id="last_name" name="last_name" value="" placeholder="">
                                                </div>
                                                <!--Form Group-->
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <div class="field-label">Contact Number<sup>*</sup></div>
                                                    <input type="text" id="contact" name="contact" value="" placeholder="">
                                                </div>
                                                <!--Form Group-->
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 address">
                                                    <div class="field-label">Address*<sup>*</sup></div>
                                                    <input type="text" id="address" name="address" value="" placeholder="">
                                                </div>
                                                <!--Form Group-->
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <div class="field-label">Town / City <sup>*</sup></div>
                                                    <input type="text" id="town" name="town" value="" placeholder="">
                                                </div>
                                                <!--Form Group-->
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <div class="field-label">State <sup>*</sup></div>
                                                    <input type="text" id="state" name="state" value="" placeholder="State">
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <h3 class="checkout-title">Additional Information</h3>
                                                <div class="Additional-info">
                                                    <!--Form Group-->
                                                    <div class="form-group">
                                                        <div class="field-label">Order Notes</div>
                                                        <textarea id="order_note" name="order_note" class="" placeholder="Notes about your order, e.g. special notes for your delivery."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Payment Options-->
                                <div class="payment-options">
                                    <h3>Payment Proccess</h3>
                                    <ul class="list-none">
                                        <li>
                                            <div class="radio-option">
                                                <input type="radio" name="payment_process" id="payment-1" value="0" checked>
                                                <label for="payment-1"><strong class="d-block">Cash On Delivery</strong></label>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="btn-box">
                                        <button type="submit" class="button-two place-order cursor-pointer"><span class="btn-title">Place Order</span></button>
                                    </div>
                                </div>
                                <!--End Place Order-->
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection

 @section('js')
    <!-- CKEDITOR js -->
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor1', {
            filebrowserUploadUrl: "{{route('ckeditor.store', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>


    <script>
        function readURL(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(200)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
