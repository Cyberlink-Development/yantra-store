@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title'=>'Assign Compatibility','backLabel'=>'Back','backLink'=> route('view-component',$data->component_type) ])
@endsection
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
                                    <!-- <h3 class="box-title">Assign Compatibility</h3> -->
                                </div>
                                <hr>
                                
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Component Type</label>
                                        <input class="form-control" value="{{get_componenttype_by_id($data->component_type) }}" readonly/>
                                        <input type="hidden" name="component_type" class="form-control" value="{{ $data->component_type }}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <textarea class="form-control" readonly>{{$data->product_name}}</textarea>
                                        <input type="hidden" name="product_id" class="form-control" value="{{ $data->id }}" />
                                    </div>
                                    @foreach ($component_types as $row)
                                        <div class="form-group">
                                            <label>Component Type '{{$row->name}}'</label>
                                            <select class="form-control select2" id="compatible_{{ $row->id }}" name="compatible_products[{{$row->id}}][]" multiple>
                                                <option value="" disabled >Select compatible product</option>
                                                @foreach (get_product_by_componenttype_id($row->id) as $value)
                                                    <option value="{{$value->id}}" {{ in_array($value->id, $existingCompatibleIds) ? 'selected' : '' }}>{{$value->product_name}}</option>
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
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice{
            color:#000!important;
        }
    </style>
@stop

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endpush