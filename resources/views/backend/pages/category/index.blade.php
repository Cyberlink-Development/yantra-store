@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Categories List','actionLabel'=>'Create',
      'actionLink'=>route('category.create'),'backLabel'=>'','backLink'=>''])
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">All Categories</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="package_table" class="table table-bordered table-striped datatable123">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Parent</th>
                                <th>In Home?</th>
                                <th>Status</th>
                                <th class="sorting-false">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($table as $key => $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>
                                        {{ optional(App\Model\Category::find($row->parent_id))->name ?? '-' }}
                                    </td>
                                    <td>
                                        <input type="checkbox" class="toggle-home" data-id="{{ $row->id }}" {{ $row->in_home == '1' ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <input type="checkbox" class="toggle-status" data-id="{{ $row->id }}" {{ $row->status == '1' ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <a href="{{ route('category.edit', $row->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('delete-category', $row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Confirm Delete?')" title="Delete">
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
