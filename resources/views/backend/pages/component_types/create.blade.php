@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Add New ComponentType' , 'backLabel'=>'View All','backLink'=>  route('show-componenttype') ])
@endsection
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('store-componenttype')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- LEFT SIDE -->
                <div class="col-md-8">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="box">

                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Hierarchy Level</label>
                                        <input type="number" id="level" name="level" class="form-control" value="{{ old('level',$level) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-md-4">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:.5rem;">
                            <button class="btn btn-primary btn-xs pull-right">Save</button>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="status" class="control-label m-0">Status:</label>
                                    <input type="hidden" name="status" value="0">
                                    <input type="checkbox" id="status" name="status" value="1"
                                        {{ old('status', 1) ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@stop
