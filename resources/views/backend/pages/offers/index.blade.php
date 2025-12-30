@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Offers List'])
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="package_table" class="table table-bordered table-striped datatable123">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th class="sorting-false">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($offers as $key => $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="{{ route('offers.show',$row->id) }}" style="color: black; text-decoration: none;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">
                                            {{ $row->title }}
                                        </a>
                                    </td>
                                    <td>
                                        <input type="checkbox" class="toggle-status" data-id="{{ $row->id }}" name="status" onclick="updateStatus(this, {{$row->id}},'{{getModelPathFromData($row)}}')" {{ $row->status == '1' ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <a href="{{ route('offers.edit', $row->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <!-- <a href="{{ route('offers-delete', $row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Confirm Delete?')" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a> -->
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
