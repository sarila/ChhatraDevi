@extends('backend.admin.admin_design')


@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Donations</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('donations.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> All Donations</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('donations.update', $donation->id)}}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="text-center">
                                <img src="" alt="" width="200px" id="one" style="margin-top: 15px; margin-bottom: 10px">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" style="font-size: 14px">Name</label>
                                        <input class="form-control" type="text" name="name" id="name" value="{{old('name') ?? $donation->name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" style="font-size: 14px">Email</label>
                                        <input  class="form-control" type="text" name="email" id="email" value="{{old('email') ?? $donation->email}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="donation_amount" style="font-size: 14px">Amount</label>
                                        <input class="form-control" type="number" name="donation_amount" id="donation_amount" value="{{old('donation_amount') ?? $donation->donation_amount}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="payment_method">Select Payment Method</label>
                                        <select name="payment_method" id="payment_method" class="form-control">
                                            <option value= "0" {{$donation->payment_method == "cash donation" ? 'checked' : ''}}>Cash Donation</option>
                                            <option value= "1" {{$donation->payment_method ==1 ? 'checked' : ''}}>Esewa</option>
                                            <option value= "2" {{$donation->payment_method ==2 ? 'checked' : ''}}>Fone Pay</option>
                                            <option value= "3" {{$donation->payment_method ==3 ? 'checked' : ''}}>Khalti</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="status"> Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value= "0" {{!$donation->status ? 'checked' : ''}} >Not Verified</option>
                                            <option value= "1" {{$donation->status ? 'checked' : ''}}>Verified</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message" style="font-size: 14px">Message</label>
                                        <textarea class="form-control" type="text" name="message" id="message" rows="9" required>{{old('message') ?? $donation->message }}</textarea> 
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-md-12">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update Donation</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection

