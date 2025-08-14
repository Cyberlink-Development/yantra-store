@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Banners List','actionLabel'=>'Create',
      'actionLink'=>route('banner.create')])
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">All Banners</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="package_table" class="table table-bordered table-striped datatable123">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Picture</th>
                                <th>Status</th>
                                <th class="sorting-false">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>
                                        @if($row->picture && File::exists('uploads/banners/'.$row->picture))
                                            <img src="{{ asset('uploads/banners/'.$row->picture) }}" height="20" width="50" />
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        <input type="checkbox" class="toggle-status" data-id="{{ $row->id }}" name="status" {{ $row->status == '1' ? 'checked' : '' }} onclick="updateStatus(this, {{$row->id}},'{{getModelPathFromData($row)}}')">
                                    </td>
                                    <td>
                                        <a href="{{ route('banner.edit', $row->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('banner.delete', $row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Confirm Delete?')" title="Delete">
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

@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        $('.datatable').DataTable({

        });
    </script>
@endpush
