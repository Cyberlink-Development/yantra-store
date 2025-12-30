@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'All Discounts','actionLabel'=>'Create','actionLink'=> route('admin.discount.create')])
@endsection
@section('content') 
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="box-body">
                    <table id="package_table" class="table table-bordered datatable123">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Discount Code</th>
                            <th>Discount</th>
                            <th>Usage Limit</th>
                            <th>Used Time</th>
                            <th>Expiry Date</th>
                            <th>Status</th>
                            <th class="sorting-false">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->code }}</td>
                                    <td>
                                        @if($value->type === 'percent')
                                            {{ $value->discount }}%
                                        @else
                                            Rs. {{ $value->discount }}
                                        @endif
                                    </td>
                                    <td>{{ $value->usage_limit ?? '-' }}</td>
                                    <td>{{ $value->used }}</td>
                                    <td>{{ $value->expiry_date ? \Carbon\Carbon::parse($value->expiry_date)->format('Y-m-d') : '-' }}</td>
                                    <td>
                                        <input type="checkbox" class="toggle-home" data-id="{{ $value->id }}" name="status"
                                            onclick="updateStatus(this, {{$value->id}},'{{getModelPathFromData($value)}}')"
                                            {{ $value->status == '1' ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary btn btn-sm confirm" href="{{ route('admin.discount.edit', $value->id) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.discount.destroy', $value->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn btn-sm" onclick="return confirm('Confirm Delete?')">
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
                            <th>Discount Code</th>
                            <th>Discount</th>
                            <th>Usage Limit</th>
                            <th>Used Time</th>
                            <th>Expiry Date</th>
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
