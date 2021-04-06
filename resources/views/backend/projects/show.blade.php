@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Projects</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('projects.edit', $project->id)}}"><button class="btn btn-info"> Edit Project</button></a>
                    <a href="{{route('projects.index')}}" class="btn btn-success"> All Projects</a>
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
                            <h3 class="card-title">{{$project->title}} </h3>
                            <ul class="personal-info">
                         <!--        <li>
                                    <div class="title">SEO Title</div>
                                    <div class="text">{{$project->seo_title}}</div>
                                </li>
                                <li>
                                    <div class="title">Keyword</div>
                                    <div class="text">{{$project->keyword}}</div>
                                </li>
                                <li>
                                    <div class="title">project Type</div>
                                    <div class="text">{{$project->project_type}}</div>
                                </li> -->
                                <li>
                                    <div class="title">Status</div>
                                    <div class="text">{{$project->status}}</div>
                                </li>
                                <li>
                                    <div class="title">Category</div>
                                    <div class="text">{{$project->category->category_name}}</div>
                                </li>
                                <li>
                                    <div class="title">Start Date</div>
                                    <div class="text">{{$project->start_date}}</div>
                                </li>
                                <li>
                                    <div class="title">Goal</div>
                                    <div class="text">{{$project->goal}}</div>
                                </li>
                                <li>
                                    <div class="title">Excerpt</div>
                                    <div class="text">{{$project->excerpt}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <img src="{{ asset('storage/project/'. $project->coverimage)}}" width="100%">
                    </div>
                </div>
                <div class="col-md-12 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Description </h3>
                            <div class="text">
                                {!! $project->description !!}
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </section>
        <!-- End of Content -->
    </div>
    <!-- Page Content -->

</div>

@endsection

