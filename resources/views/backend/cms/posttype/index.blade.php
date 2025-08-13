@extends('backend.layouts.master')
@section('content') 

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="box-header d-flex justify-content-between align-items-center mb-3">
                    <h3 class="box-title">All Post Types</h3>
                    <a href="{{ route('type.posttype.create') }}" class="btn btn-primary">
                        CREATE
                    </a>
                </div>
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
                                    <td>{{$value->post_type}}</td>
                                    <td>
                                        @if(($value->status)==0)
                                            <button class="btn btn-sm btn-danger btn btn-sm" name="inactive">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        @else
                                            <button class="btn btn-sm btn-success btn btn-sm" name="active">
                                                <i class="fa fa-check"></i>
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary btn btn-sm confirm"  href="{{route('type.posttype.edit',$value->id)}}"><i class="fa fa fa-edit"></i> </a>
                                        <form action="{{ route('type.posttype.destroy', $value->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm Delete?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
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
