@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title'=>'Add Shipping Rates'])
@endsection
@section('content')

    <section class="content">

        <div class="card col-md-6 offset-md-3" style="background-color: #f4f6f9">
            <div class="card-body">
                <h1 class=" text-dark" style="text-align: center">Add Shipping Price</h1>
                <hr>
            </div>
            <form action="{{  route('post_price') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="location_name">Shipping Location</label>
                    <input type="text" name="location_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="price">Shipping Rate (Rs)</label>
                    <input type="number" name="price" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="title">Status</label>
                    <select class="form-control" name="status">
                        <option value="1" selected>Enabled</option>
                        <option value="0" >Disabled</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus">Add</i></button>
                </div>


            </form>
        </div>
        <div class="card">
            <div class="card-header with-border">
                <h3 class="box-title">All Shipping Prices</h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Shipping Location</th>
                        <th>Shipping Rate</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($shippings as $key=>$shipping)
                        <tr>
                            <td> {{ $key+=1 }} </td>
                            <td> {{  $shipping->shipping_location }} </td>
                            <td> {{ $shipping->shipping_price }}</td>
                            <td> 
                                <input type="checkbox" class="toggle-home" data-id="{{ $shipping->id }}" name="status"
                                    onclick="updateStatus(this, {{$shipping->id}},'{{getModelPathFromData($shipping)}}')"
                                    {{ $shipping->status == '1' ? 'checked' : '' }}>
                            </td>
                            <td>
                                <a class="btn btn-danger confirm"
                                   href="{{route('delete-price',$shipping->id)}}"
                                   onclick="return confirm('Confirm Delete?')"><i
                                        class="fa fa fa-trash"></i>Delete </a>

                                <a class="btn btn-outline-primary confirm"
                                data-toggle="modal"
                                data-target="#myEditModal{{ $shipping->id }}"
                                ><i class="fa fa fa-edit"></i>Edit </a>
                            </td>
                        </tr>
                        <div id="myEditModal{{ $shipping->id }}" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-xs">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="text-align: center;"><b>Edit Shipping rate</b></h4>

                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="card-body">

                                        <form method="post" class="form-group" action="{{route('edit-price')}}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$shipping->id}}">

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <!-- general form elements -->
                                                            <div class="box">
                                                                <!-- form start -->
                                                                <div class="box-body">
                                                                    <div class="form-group">
                                                                        <label for="price">Shipping Location</label>
                                                                        <input type="text" name="location_name" value="{{$shipping->shipping_location}}" class="form-control" required>
                                                                    </div>
                                                                   
                                                                    <div class="form-group">
                                                                        <label for="price">Shipping Rate</label>
                                                                        <input type="text" name="price" value="{{$shipping->shipping_price}}" class="form-control" required>
                                                                    </div>

                                                                </div>
                                                                <!-- /.box-body -->
                                                                <div class="box-footer">
                                                                    <input class="btn btn-danger btn-xs pull-right" type="submit" value="Save">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- /.box -->
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </table>
            </div>
        </div>
    </section>

@stop



