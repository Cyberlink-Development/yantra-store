@extends('backend.layouts.master')
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('store-component')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Assign Compatibility</h3>
                                </div>
                                <hr>
                                
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Component Type</label>
                                        <input name="name" class="form-control" value="{{get_componenttype_by_id($data->component_type) }}" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <textarea name="name" class="form-control" readonly>{{$data->product_name}}</textarea>
                                    </div>
                                    @foreach ($component_types as $row)
                                        <div class="form-group">
                                            <label>Component Type '{{$row->name}}'</label>
                                            <select class="form-control" name="status" >
                                                <option value="" selected>Select compatible product</option>
                                                @foreach (get_product_by_componenttype_id($row->id) as $value)
                                                    <option value="0" >{{$value->product_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endforeach
                                    
                                    
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
