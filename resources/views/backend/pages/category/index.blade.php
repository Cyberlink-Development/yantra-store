@extends('backend.layouts.master')
@section('content') 
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="box-header">
                    <h3 class="box-title">All Categories</h3>
                </div>
                <div class="box-body">
                    <table id="package_table" class="table table-bordered datatable123">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Parent</th>
                           
                            <th>Show in Home</th>
                            <th>Status</th>
                            <th class="sorting-false">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $key=>$value)
                            <tr>
                            <td>{{$key+=1}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{App\Model\Category::where('id','=',$value->parent_id)->first() ? App\Model\Category::where('id','=',$value->parent_id)->first()->name : '-'}}</td>
                            
                            <td>
                                @if(($value->is_special)==0)
                                    <button class="btn btn-danger btn btn-sm" name="inactive"><i
                                            class="fa fa-times"></i>
                                    </button>
                                @else
                                    <button class="btn btn-success btn btn-sm" name="active"><i
                                            class="fa fa-check"></i>
                                    </button>
                                @endif
                            </td>
                            <td>
                                 @if(($value->status)==0)
                                    <button class="btn btn-sm btn-danger btn btn-sm" name="inactive"><i
                                            class="fa fa-times"></i>
                                    </button>
                                @else
                                    <button class="btn btn-sm btn-success btn btn-sm" name="active"><i
                                            class="fa fa-check"></i>
                                    </button>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-danger btn btn-sm confirm" href="{{route('delete-category',$value->id)}}"  onclick="return confirm('Confirm Delete?')"><i class="fa fa fa-trash"></i> </a>
                                <a class="btn btn-outline-primary btn btn-sm confirm"  href="{{route('edit-category',$value->id)}}"><i class="fa fa fa-edit"></i> </a>
                            </td>
                          </tr>
                            
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th class="sorting-false">Parent</th>
                           
                            <th>Show in Home</th>
                            <th class="sorting-false">Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->

                <!-- /.box -->
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
