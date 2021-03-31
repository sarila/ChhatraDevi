@extends('frontend.includes.layout')

@section('content')
    <div class="about-page">
        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container">
                <h1 class="page-title lg-title">Donation Form</h1>
                <div class="bread-crumbs">
                    <ul class="list-none d-flex justify-content-end">
                        <li class="xs-title"><a href="index.php" class="d-inline-block text-white">Home</a></li>
                        <span class="seperator px-2 text-white"> > </span>
                        <li class="xs-title active">Donation</li>
                    </ul>
            </div>
        </div>  
    </div>

    <section class="contact-section bg-light pb-4">
         
        <div class="container">
            <div class="wrapper p-md-4 p-2 box-shadow-2 bg-white">
                <header class="section-header-two mb-2">
                    <h3 class="md-title text-dark font-weight-bold after-border-b-primary">Donation Form</h3>
                </header>
                @if(Session::has('error_message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="height: 40px; padding: 10px;">
                        {{ Session::get('error_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="position: relative; top: -10px;">&times;</span>
                        </button>
                    </div>
                @endif
                @if(Session::has('success_message'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert" style="height: 40px; padding: 10px;">
                        {{ Session::get('success_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="position: relative; top: -10px;">&times;</span>
                        </button>
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger" >
                        <ul style="list-style: none; ">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="form-donation" action="{{ route('donations.store') }}" class="form-holder" method="POST">
                    @csrf
                    <div class="pay-method mb-4">
                        <h2 class="xs-title border-bottom mb-3">Select Payment Method</h2>
                        <ul class="list-none d-flex">
                            <div class="radio mr-3">
                                <input type="radio" id="cash" name="payment_method" value="0">
                                <label for="cash">Cash Donation</label>
                            </div>
                            <div class="radio mr-3">
                                <input type="radio" id="esewa" name="payment_method" value="1">
                                <label for="esewa">Esewa</label>
                            </div>
                            <div class="radio mr-3">
                                <input type="radio" id="fonepay" name="payment_method" value="2">
                                <label for="fonepay">Fone Pay</label>
                            </div>
                            <div class="radio mr-3">
                                <input type="radio" id="khalti" name="payment_method" value="3">
                                <label for="khalti">Khalti</label>
                            </div>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="xs-title font-weight-bold text-black d-block">YOUR DONATION AMOUNT<span class="text-danger">*</span></label>
                            <span class="d-inline-block currency">Nrs</span><input type="number" name="donation_amount" placeholder="Amount" class="form-control w-25 d-inline-block amt">
                        </div>
                        <div class="col-lg-6 col-12 mb-3">
                            <label class="xs-title font-weight-bold text-black">Name <span class="text-danger">*</span></label>
                            <input type="text" placeholder="Full Name" name="name" class="form-control">
                        </div>
                        <div class="col-lg-6 col-12 mb-3">
                            <label class="xs-title font-weight-bold text-black">Email Address<span class="text-danger">*</span></label>
                            <input type="email" placeholder="Email" name="email" class="form-control">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="xs-title font-weight-bold text-black">Your Message<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="message" placeholder="Your Message" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="btn-holder">
                        <button type="submit" class="button-one cursor-pointer">Submit</button>
                    </div>
                </form>
               
            </div>  
        </div>
    </section>

    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

    </div>
@endsection