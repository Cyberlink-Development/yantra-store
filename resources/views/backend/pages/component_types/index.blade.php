@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'All Component Types','actionLabel'=>'Create', 'actionLink'=> route('add-componenttype') ])
@endsection
@section('content') 
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <!-- <div class="box-header">
                    <h3 class="box-title">All Component Types</h3>
                </div> -->
                <div class="box-body">
                    <table id="package_table" class="table table-bordered datatable123">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th class="sorting-false">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key=>$value)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>
                                        <input type="checkbox" class="toggle-home" data-id="{{ $value->id }}" name="status"
                                            onclick="updateStatus(this, {{$value->id}},'{{getModelPathFromData($value)}}')"
                                            {{ $value->status == '1' ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary btn btn-sm confirm"  href="{{route('edit-componenttype',$value->id)}}"><i class="fa fa fa-edit"></i> </a>
                                        <a class="btn btn-danger btn btn-sm confirm" href="{{route('delete-componenttype',$value->id)}}"  onclick="return confirm('Confirm Delete?')"><i class="fa fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th class="sorting-false">Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
@push('scripts')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $('#package_table').DataTable({

        });
    </script>
@endpush
