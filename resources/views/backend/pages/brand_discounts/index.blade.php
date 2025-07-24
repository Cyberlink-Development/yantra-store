@extends('backend.layouts.master')
@section('content')
  <h3 class="blockquote" style="text-align: center">Brand Discounts / <a href="{{ route('brand-discounts.create') }}"
                class="btn btn-primary btn-sm">Create</a></h3>
    <table class="table mt-3 datatable">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Type</th>
                <th>Value</th>
                <th>Starts At</th>
                <th>Ends At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($discounts as $discount)
                <tr>
                    <td>{{ get_brand_name($discount->brand_id)  }}</td>
                    <td>{{ ucfirst($discount->discount_type) }}</td>
                    <td>{{ $discount->discount_value }}</td>
                    <td>{{ $discount->starts_at }}</td>
                    <td>{{ $discount->ends_at }}</td>
                    <td>
                        <a href="{{ route('brand-discounts.edit', $discount) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('brand-discounts.destroy', $discount) }}" method="POST" class="d-inline-block"
                            onsubmit="return confirm('Delete this discount?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        $('.datatable').DataTable({

        });
    </script>
@endpush