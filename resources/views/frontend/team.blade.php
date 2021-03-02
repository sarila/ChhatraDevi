@extends('frontend.includes.layout')

@section('content')


    <div class="about-page">
        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container d-flex">
                <h1 class="page-title lg-title flex-g-1">Team</h1>
                <div class="bread-crumbs">
                    <ul class="list-none d-flex justify-content-end">
                        <li class="xs-title"><a href="{{route('indexPage')}}" class="d-inline-block text-white">Home</a></li>
                        <span class="seperator px-2 text-white"> > </span>
                        <li class="xs-title active">Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Page Banner -->

         <!-- Team Section -->
        <section class="team-section py-4">
            <div class="container">
                @foreach ($departments as $department)
                    <div class="team-cat my-60 text-center">
                        <h2 class="after-b-primary font-weight-bold after-border-b-primary text-black d-inline-block mb-3 ">{{$department->department}}</h2>
                        <div class="row no-gutters">
                            @foreach ($teams as $team)
                                @if ($department->department == $team->department)
                                    <!-- Team -->
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="img-holder position-relative">
                                            <img class="lazy-image" src="{{asset('storage/team/'. $team->image)}}" data-src="{{asset('storage/team/'. $team->image)}}" alt="">
                                            <div class="team-des text-center p-2 bg-white position-absolute box-shadow-1">
                                                <h2 class="ls-title name mb-0 font-weight-bold text-dark">{{$team->name}}</h2>
                                                <span class="desig xs-title">{{ $team->designation}}, {{$team->address}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>                    
                @endforeach
            </div>
        </section>
        <!-- End of Team Section -->
    </div>

@endsection