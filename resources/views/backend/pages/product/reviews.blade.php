@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Reviews','backLabel'=>'View All','backLink'=>route('all_reviews') ])
@endsection
@section('content') 
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="box-header">
                    <h4 class="box-title">Product Name: </h4>
                    <h6>{{$product->product_name}} </h6>
                </div>
                <br>
                <div class="box-body">
                    <table id="package_table" class="table table-bordered datatable123">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Rating</th>
                            <th>Show</th>
                            <th>Created At</th>
                            <th class="sorting-false">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product->reviews as $key=>$value)
                            <tr>
                                <td>{{$key+=1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>
                                    @for($i=0; $i<(int)$value->rating; $i++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    @endfor
                                </td>
                                <td>
                                    <input type="checkbox" class="toggle-show" data-id="{{ $value->id }}" name="show" onclick="updateStatus(this, {{$value->id}},'{{getModelPathFromData($value)}}')" {{ $value->show == '1' ? 'checked' : '' }}>
                                    <!-- @if($value->show)
                                    <a href="{{route('update-review', [$value->id, 0])}}">Click here to Hide</a>
                                    @else
                                    <a href="{{route('update-review', [$value->id, 1])}}">Click here to Show</a>
                                    @endif -->
                                </td>
                                <td>{{$value->created_at->format('d M Y')}}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn btn-sm confirm view" 
                                        data-name="{{$value->name}}" 
                                        data-email="{{$value->email}}" 
                                        data-message="{{$value->message}}" 
                                        data-product="{{$value->product->product_name}}"
                                        data-created="{{$value->created_at}}" 
                                        data-toggle="modal" 
                                        data-target="#exampleModal">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-danger btn btn-sm confirm" href="{{route('delete-review',$value->id)}}"  onclick="return confirm('Confirm Delete?')"><i class="fa fa fa-trash"></i> </a>
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

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Name:</strong> <span id="modal-name"></span></p>
                <p><strong>Email:</strong> <span id="modal-email"></span></p>
                <p><strong>Product:</strong> <span id="modal-product"></span></p>
                <p><strong>Message:</strong></p><p id="modal-message" class="pl-2"></p>
                <p><strong>Created At:</strong> <span id="modal-created"></span></p>
            </div>
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
    <script>
        $(document).on('click', '.view', function () {
            $('#exampleModalLabel').text('Review Details');

            $('#modal-name').text($(this).data('name'));
            $('#modal-email').text($(this).data('email'));
            $('#modal-message').text($(this).data('message'));
            $('#modal-product').text($(this).data('product'));
            $('#modal-created').text($(this).data('created'));
        });
    </script>
@endpush
