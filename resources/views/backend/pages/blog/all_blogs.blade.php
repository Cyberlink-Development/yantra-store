@extends('backend.layouts.master')
@section('content') 
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="box-header">
                    <h3 class="box-title">All Blogs</h3>
                </div>
                <div class="box-body">
                    <table id="package_table" class="table table-bordered datatable123">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Show in Home</th>
                            <th class="sorting-false">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $key=>$value)
                            <tr>
                                <td>{{$key+=1}}</td>
                                <td>{{$value->title}}</td>
                                <td><img src="{{asset('images/blog/'.$value->image)}}" width=150px; alt=""></td>
                                <td><a href="{{route('blog-single', $value->slug)}}" target="_blank" rel="noopener noreferrer">Let's Go</a></td>
                                <td>
                                    <a class="btn btn-danger btn btn-sm confirm" href="{{route('delete-blog',$value->id)}}"  onclick="return confirm('Confirm Delete?')"><i class="fa fa fa-trash"></i> </a>
                                    <a class="btn btn-outline-primary btn btn-sm confirm"  href="{{route('edit-blog', $value->id)}}"><i class="fa fa fa-edit"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
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
        $('.datatable123').DataTable({

        });
    </script>
@endpush
