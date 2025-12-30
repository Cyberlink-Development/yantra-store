@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Tags List','actionLabel'=>'Create',
      'actionLink'=>route('tags.create')])
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">All Tags</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="package_table" class="table table-bordered table-striped datatable123">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Icon</th>
                                <th>Status</th>
                                <th>In Home?</th>
                                <th class="sorting-false">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>
                                        {{ $row->icon }}
                                    </td>
                                    <td>
                                        <input type="checkbox" class="toggle-status" data-id="{{ $row->id }}" name="status" onclick="updateStatus(this, {{$row->id}},'{{getModelPathFromData($row)}}')" {{ $row->status == '1' ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <input type="checkbox" class="toggle-home" data-id="{{ $row->id }}" name="in_home" onclick="updateStatus(this, {{$row->id}},'{{getModelPathFromData($row)}}')" {{ $row->in_home == '1' ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <a href="{{ route('tags.edit', $row->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('tags.destroy', $row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Confirm Delete?')" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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
