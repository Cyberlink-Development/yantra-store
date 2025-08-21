@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Ads List'])
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">All Ads</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="package_table" class="table table-bordered table-striped datatable123">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Size</th>
                                <th>Status</th>
                                <th>Open In New Tab</th>
                                <th>Ordering</th>
                                <th class="sorting-false">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->ad_position }}</td>
                                    <td>
                                        <img src="{{ $row->image ? asset('uploads/ads/'.$row->image) : asset('theme-assets/img/default-ad.jpg') }}" height="20" width="50" />
                                    </td>
                                    <td>
                                        {{ $row->image_size ?? '-' }}
                                    </td>
                                    <td>
                                        <input type="checkbox" class="toggle-status" data-id="{{ $row->id }}" name="status" onclick="updateStatus(this, {{$row->id}},'{{getModelPathFromData($row)}}')" {{ $row->status == '1' ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <input type="checkbox" class="toggle-home" data-id="{{ $row->id }}" name="open_in_new_tab" onclick="updateStatus(this, {{$row->id}},'{{getModelPathFromData($row)}}')" {{ $row->open_in_new_tab == '1' ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        {{$row->ordering}}
                                    </td>
                                    <td style="display: flex; align-items: center; gap: 5px;">
                                        <a href="{{ route('ads.edit', $row->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        {{--<form action="{{ route('ads.destroy', $row->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirm Delete?')" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>--}}
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
