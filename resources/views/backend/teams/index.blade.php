@extends('backend.admin.admin_design')
@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Our Team</h3>
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
                                <a href="{{route('teams.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0" id="team-datatable">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Designation</th>
                                        <th>Address</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
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

    <!-- For delete data -->
    <!-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" id="modal-header">
                    <h4 class="modal-title" id="modal-title">Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="modal-body">
                    Confirm Delete? 
                    <button class="btn btn-danger" id="deleteButton">Yes Delete</button>
                </div>
            </div>
        </div>
    </div>
 -->


</div>

@endsection
@section('js')
    <script>
        $('#team-datatable').DataTable({
            processing: true,
            serverSide: true,
            sorting: true,
            searchable : true,
            responsive: true,
            ajax: "{{ route('teamTable') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'department', name: 'department'},
                {data: 'designation', name: 'designation'},
                {data: 'address', name: 'address'},
                {data: 'image', name: 'image'},
                {data: 'action', name: 'action', orderable: false}
            ]
        });
    </script>
    
    <script>      
        // For Show Modal 
        $('body').on('click', '.btn-show', function (event) {
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

        // For Delete Modal 
        // $('body').on('click', '.btn-delete', function (event) {
        //     event.preventDefault();
        //     $.ajax({
        //         type: "DELETE",
        //         url: url,
        //         dataType: 'html',
        //         success: function (response) {
        //             $('#modal-body').html('Delete successful');
        //         }
        //     });
        // });

        $(document).on('click', '.btn-delete', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            swal({
                    title: "Are you sure!",
                    type: "warning",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                },
                function() {
                    $.ajax({
                        type: "POST",
                        url: "{{url('/teams/{id}')}}",
                        data: {id:id},
                        success: function (data) {
                            window.location.href =  SITEURL + "/admin/" + deleteFunction + "/" + id;
                        }         
                    });
            });
        });
    </script>
        
@endsection
