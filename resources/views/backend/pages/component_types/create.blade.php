@extends('backend.layouts.master')
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('store-componenttype')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Component Type</h3>
                                </div>
                                <hr>
                                
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="name" rows="3" class="form-control" />
                                    </div>

                                    <div class="form-group special-link">
                                        <label for="name" class="control-label">status:</label>
                                        <select class="form-control" name="status" >
                                            <option value="0" selected>Off</option>
                                            <option value="1">On</option>
                                        </select>
                                    </div>
                                </div>
                                
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
