<a href="{{$url_show}}" class="btn-show btn btn-sm btn-success" title="Detail: {{ $model->name }}"><i class="la la-eye" ></i></a>
<a href="{{$url_edit}}" class="btn btn-sm btn-info" title="Edit: {{ $model->name }}">
    <i class="fa fa-pencil"></i>
</a>
<!-- <form action="{{ route('teams.destroy', $model->id) }}" method="POST" >
    <input type="hidden" name="_method" value="DELETE">
    @csrf
    <input type="submit" class="btn-delete btn btn-sm btn-danger"><i class="la la-trash"></i>
</form> -->
<a href="" class="btn-delete btn btn-sm btn-danger" rel="{{ $model->id }}" rel1="teams"  title=" Delete" ><i class="la la-trash"></i></a>