@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Edit ComponentType' , 'backLabel'=>'View All','backLink'=>  route('show-componenttype') ])
@endsection
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('update-componenttype',$data->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                </div>
                                <hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="name" class="form-control" value="{{ old('name', $data->name) }}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Hierarchy Level</label>
                                        <input name="level" class="form-control" value="{{ old('level', $data->level) }}" />
                                    </div>

                                    <div class="form-group special-link">
                                        <label for="status" class="control-label">Status:</label>
                                        <select class="form-control" name="status">
                                            <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Off</option>
                                            <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>On</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <input class="btn btn-danger btn-xs pull-right" type="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop