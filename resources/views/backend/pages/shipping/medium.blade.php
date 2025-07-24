@extends('backend.layouts.master')
@section('content')

    <div class="container">
        <form method="post" class="form-group" action="{{route('add-medium')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Medium</h3>
                                </div>
                                <hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title" class="control-label">Shipping Medium</label>
                                        <input class="form-control" placeholder="Title" name="title" type="text">

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

                <!-- /.box -->
        </form>



        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="box-header">
                        <h3 class="box-title">All Shipping Medium</h3>
                    </div>
                    <div class="box-body">
                        <table id="example" class="table table-bordered table-striped datatable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Created at</th>
                                <th class="sorting-false">Action</th>
                            </tr>
                            </thead>
                            @foreach($shippingmedium as $key=>$value)
                                <tbody>
                                <td>{{$key+=1}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->created_at}}</td>
                                <td>
                                    <a class="btn btn-danger confirm"
                                       href="{{route('delete-medium',$value->id)}}"
                                       onclick="return confirm('Confirm Delete?')"><i
                                            class="fa fa fa-trash"></i>Delete </a>
                                    <a class="btn btn-outline-primary confirm"
                                       data-toggle="modal"
                                       data-target="#myEditModal{{ $value->id }}"
                                    ><i class="fa fa fa-edit"></i>Edit </a>
                                </td>
                                <div id="myEditModal{{ $value->id }}" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-xs">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" style="text-align: center;"><b>Edit Medium</b></h4>

                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="card-body">

                                                <form method="post" class="form-group" action="{{route('edit-medium')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$value->id}}">

                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <!-- general form elements -->
                                                                    <div class="box">
                                                                        <!-- form start -->
                                                                        <div class="box-body">
                                                                            <div class="form-group">
                                                                                <label for="title" class="control-label">Medium</label>
                                                                                <input class="form-control" placeholder="Title" name="title" type="text"
                                                                                       value="{{$value->title}}">

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

                                                        <!-- /.box -->
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>

                                </tbody>
                            @endforeach
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Created at</th>
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
    </div>

@stop

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        $('.datatable').DataTable({

        });
    </script>
@endpush
