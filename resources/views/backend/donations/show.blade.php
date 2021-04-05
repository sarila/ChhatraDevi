@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Donation</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('donations.edit', $donation->id)}}"><button class="btn btn-info"> Edit</button></a>
                    <a href="{{route('donations.index')}}" class="btn btn-success"> Go Back</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <section>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <ul class="personal-info">
                            <li>
                                <span class="title">Name:</span>
                                <span class="text">{{$donation->name}}</span>
                            </li>
                            <li>
                                <span class="title">Email:</span>
                                <span class="text">{{$donation->email}}</span>
                            </li>
                            <li>
                                <span class="title">Donation Amount:</span>
                                <span class="text">{{$donation->donation_amount}}</span>
                            </li>
                            <li>
                                <span class="title">Status:</span>
                                <span class="text">{{$donation->status}}</span>
                            </li>
                            <li>
                                <span class="title">Payment Method:</span>
                                <span class="text">{{$donation->payment_method}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

              <div class="card mb-3">
                <div class="card-title">
                    <span>Message</span>
                </div>
                <div class="row g-0">
                    <div class="col-lg-12">
                        <div class="message-content">
                            <p> {{$donation->message}} </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Page Content -->

</div>

@endsection

