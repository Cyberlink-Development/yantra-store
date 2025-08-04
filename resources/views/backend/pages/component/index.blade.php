@extends('backend.layouts.master')
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
                            <th>Component Type Name</th>
                            <th>View Components</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key=>$value)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>
                                        {{$value->name}}
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary btn btn-sm confirm"  href="{{route('view-component',$value->id)}}"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Component Type Name</th>
                            <th>View Components</th>
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
