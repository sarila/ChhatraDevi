@if (Session::has('error_message'))
 
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="height: 40px; padding: 10px;">
        {{ Session::get('error_message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="position: relative; top: -10px;">&times;</span>
        </button>
    </div>
 
@endif
 
@if (Session::has('info_message'))
 
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="height: 40px; padding: 10px;">
        {{ Session::get('info_message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="position: relative; top: -10px;">&times;</span>
        </button>
    </div>
 
@endif
