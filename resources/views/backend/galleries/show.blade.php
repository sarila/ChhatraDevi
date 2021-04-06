@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Gallery</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('backend.includes.message')

        @foreach ($images as $image)
            <div class="col-12 mb-3">
                <div class="img-holder">
                    <img src="{{ asset('/storage/galleries/') . $image }}"  alt="">
                </div>
            </div>
        <!-- End of Image -->
        @endforeach 
        
        <div class="col-12 align-self-center">
            <div class="content xs-title">
                <?php echo $gallery->name ?>
                
            </div>
        </div>
        <!-- End of Content -->
    </div>
    <!-- Page Content -->

</div>

@endsection

