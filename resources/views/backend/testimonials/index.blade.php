@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Testimonials</h3>
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

        <div class="row">

            <div class="col-sm-12">
                <div class="card mb-0">
                    <div class="card-header">
                        <span style="position:relative; top: 7px">
                            Please use the table below to navigate or filter the results.
                        </span>
                        <div class="pull-right">
                            <div class="dropdown">
                                <a href="{{route('testimonials.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0" id="testimonial-datatable">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Message</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                 <tbody>
                                    @foreach($testimonials as $testimonial)
                                        <tr>
                                            <td>{{ $testimonial->id }}</td>
                                            <td>{{ $testimonial->name }}</td>
                                            <td>{{ $testimonial->position }}</td>
                                            <td>{{ $testimonial->message }}</td>
                                            <td> <img src="{{ asset('storage/testimonials/'. $testimonial->image)}}"  width="40" align="center"></td>
                                            <td>
                                                <form action="{{ route('testimonials.destroy',$testimonial->id) }}" method="POST">

                                                  <!--   <a href="{{ route('testimonials.show',$testimonial->id) }}" class="btn btn-success show"><i class="la la-eye" ></i></a> -->

                                                    <a class="btn btn-primary" href="{{ route('testimonials.edit',$testimonial->id) }}"><i class="fa fa-pencil"></i></a>
                                                    @csrf

                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <!-- For show data -->
    <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" id="modal-header">
                    <h4 class="modal-title" id="modal-title">Form Input</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="modal-body">
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
@section('js')
    <script>
        $(function() {
            $('#testimonial-datatable').DataTable();
        });
    </script>
    
    <script>      
        // For Show Modal 
        $('body').on('click', '.show', function (event) {
            event.preventDefault();
            var me = $(this),
            
                url = me.attr('href'),
                title = me.attr('title');
            $('#modal-title').text(title);
            $.ajax({
                type: "POST",
                url: url,
                dataType: 'html',
                success: function (response) {
                    $('#modal-body').html(response);
                }
            });
            $('#showModal').modal('show');
        });
    </script>
        
@endsection
