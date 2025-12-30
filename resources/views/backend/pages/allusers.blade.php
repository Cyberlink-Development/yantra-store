@extends('backend.layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3 style="text-align:center">All Users</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="package_table" class="table table-bordered datatable">
                <thead>
                <tr class="table table-primary">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $key=>$row)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$row->first_name}} {{$row->last_name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

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
