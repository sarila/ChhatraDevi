@extends('backend.admin.admin_design_v2')
​
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Social Settings</h3>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                @include('backend.includes.message')

                <form method="post" action="{{ route('update.social', $setting->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="facebook">Facebook </label>

                                <input class="form-control" name="facebook" id="facebook" type="text" value="{{ $setting->facebook }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="twitter">Twitter </label>
                                <input class="form-control" name="twitter" id="twitter" type="text" value="{{ $setting->twitter }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="youtube">Youtube </label>
                                <input class="form-control" name="youtube" id="youtube" value="{{ $setting->youtube }}" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input class="form-control" id="instagram" name="instagram" value="{{ $setting->instagram }}" type="text">
                            </div>
                        </div>
                    </div>


                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
