@extends('backend.layouts.master')

@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Contact Inquiries'])
@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="mb-0">All Contact Inquiries</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="contacts_table" class="table table-bordered table-striped datatable123">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width: 5%;">#</th>
                            <th style="width: 20%;">Full Name</th>
                            <th style="width: 20%;">Contact Info</th>
                            <th style="width: 45%;">Message</th>
                            <th style="width: 10%;" class="sorting-false">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->first_name }} {{ $row->last_name }} <br> Inquiry Date : {{ $row->created_at->format('F d, Y') }}</td>
                                <td>{{ $row->email }} <br> {{ $row->number }}</td>
                                <td style="padding: 0;">
                                    <textarea style="width: 100%; min-height: 60px; padding: 8px; box-sizing: border-box;" readonly> {{ $row->message }} </textarea>
                                </td>
                                <td style="text-align: center; width: 10%;">
                                    <form action="{{ route('contact.destroy', $row->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirm Delete?')" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
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
    $('#contacts_table').DataTable({
        // You can add any options here
    });
</script>
@endpush
