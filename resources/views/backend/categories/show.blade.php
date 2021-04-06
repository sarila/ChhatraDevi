@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Category</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('categories.edit', $category->id)}}"><button class="btn btn-info"> Edit Category</button></a>
                    <a href="{{route('categories.index')}}" class="btn btn-success"> All Categories</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <section>
            <div class="card mb-0">
                <div class="card-title">
                    <div class="title">{{$category->category_name}}</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                               <div class=""> {!! $category->description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
        </section>

    </div>
    <!-- Page Content -->

</div>

@endsection

