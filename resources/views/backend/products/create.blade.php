@extends('backend.admin.admin_design')


@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Products</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('products.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> All products</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('backend.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="text-center">
                                <img src="" alt="" width="200px" id="one" style="margin-top: 15px; margin-bottom: 10px">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="product_name" style="font-size: 14px">Product Name</label>
                                        <input  class="form-control" type="text" name="product_name" id="product_name" value="{{old('product_name')}}" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="product_description" style="font-size: 14px">Product Description</label>
                                        <textarea  class="form-control" type="text" name="product_description" id="product_description">{{old('product_description')}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="price" style="font-size: 14px">Price</label>
                                        <input  class="form-control" type="number" name="price" id="price" value="{{old('price')}}" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input  class="form-control" type="number" name="quantity" id="quantity" value="{{old('quantity')}}" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Discount</label>
                                        <input  class="form-control" type="number" name="discount" id="discount" value="{{old('discount')}}" >
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="discount_type"> Discount Type</label>
                                        <select name="discount_type" id="discount_type" class="form-control">
                                            <option value= "0">No Discount</option>
                                            <option value= "1">Flat</option>
                                            <option value= "2">Percentage</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="coverimage">Cover Image <span class="text-danger">*</span></label>
                                        <input  type="file" name="coverimage" class="form-control" id="coverimage" accept="image/*" onchange="readURL(this);">
                                    </div>
                                </div>  
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pcategory_id">Category</label>
                                        <select name="pcategory_id" id="pcategory_id" class="form-control">
                                            @foreach($pcategories as $pcategory)
                                                <option value= " {{$pcategory->id}} ">{{$pcategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="images">Select Images</label>
                                       <input  type="file" name="images[]" class="form-control" id="images" accept="image/*" multiple>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="tags">Tags</label>
                                    <select class="form-control" name="tags[]" id="select-tags" multiple >
                                        @foreach($tags as $tag)
                                            <option value= "{{$tag->id}}">{{$tag->tag_name}}</option>
                                        @endforeach
                                    </select>
                                </div>                              
                            </div>
                            <div class="col-md-12">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Add Project</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection

 @section('js')
    <!-- CKEDITOR js -->
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor1', {
            filebrowserUploadUrl: "{{route('ckeditor.store', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>

    <script>
        function readURL(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(200)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <!-- JS FOR DATEPICKER -->
    <script>
        $( "#datepicker" ).datepicker({
            format: "mm/dd/yyyy",
            weekStart: 0,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true,
            rtl: true,
            orientation: "auto"
        });
    </script>

    <!-- SELECT2 FOR TAGS -->
    <script type="text/javascript">
        $("#select-tags").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
    </script>
@endsection
