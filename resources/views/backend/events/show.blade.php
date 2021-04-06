@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Events</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('events.edit', $event->id)}}"><button class="btn btn-info"> Edit Event</button></a>
                    <a href="{{route('events.index')}}" class="btn btn-success"> All Events</a>

                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('backend.includes.message')
  
        <section>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">{{$event->title}} </h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Event Location</div>
                                    <div class="text">{{$event->location}}</div>
                                </li>
                                <li>
                                    <div class="title">Duration</div>
                                    <div class="text">{{$event->duration}}</div>
                                </li>
                                <li>
                                    <div class="title">No. of Seat</div>
                                    <div class="text">{{$event->no_of_seat}}</div>
                                </li>
                                <li>
                                    <div class="title">Date</div>
                                    <div class="text">{{$event->date}}</div>
                                </li>
                                <li>
                                    <div class="title">Time</div>
                                    <div class="text">{{$event->time_duration}}</div>
                                </li>
                                <li>
                                    <div class="title">Category</div>
                                    <div class="text">{{$event->category->category_name}}</div>
                                </li>
                                <li>
                                    <div class="title">Excerpt</div>
                                    <div class="text">{{$event->excerpt}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <img src="{{ asset('storage/event/'. $event->feature_image)}}" width="100%">
                    </div>
                </div>
                <div class="col-md-12 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Description </h3>
                            <div class="text">
                                {!! $event->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12"> 
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="card-title">Related Images</div> </div>
                        <!-- loop -->
                        @foreach($images as $image)
                        <div class="col-md-6 d-flex">
                            <div class="card flex-fill">
                                <img src="{{asset('storage/galleries/'. $image)}}" width="100%">
                            </div>
                        </div>
                        @endforeach

                        <!-- endloop -->
                    </div>
                </div>
              
            </div>
        </section>
        <!-- End of Content -->
    </div>
    <!-- Page Content -->

</div>

@endsection

