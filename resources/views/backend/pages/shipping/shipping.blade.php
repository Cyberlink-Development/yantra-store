@extends('backend.layouts.master')
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
                    <label for="shipping_media_id">Add Shipping Medium</label>
                    <select class="form-control" name="shipping_medium">
                        <option selected disabled> Please select Medium</option>
                        @foreach($shippingmedium as $value)
                            <option value="{{$value->id}}">{{$value->title}}</option>
                        @endforeach
                    </select>
                </div>
                <hr>
                <div class="form-group">
                    <label for="weight_id">Add Weight Category</label>
                    <select class="form-control" name="weight">
                        <option selected disabled> Please select Weight</option>
                        @foreach($weights as $value)
                            <option value="{{$value->id}}">{{$value->min}}-{{$value->max}}</option>
                        @endforeach
                    </select>
                </div>
                <hr>
                <div class="form-group">
                    <label for="price">Shipping Rate</label>
                    <input type="text" name="price" class="form-control" required>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="title">Zip Code</label>--}}
{{--                    <input type="text" name="zip_code" class="form-control" required>--}}
{{--                </div>--}}
                <div class="form-group">
                    <label for="title">Status</label>
                    <select class="form-control" name="status">
                        <option selected disabled>Select Status</option>
                        <option value="1">Enabled</option>
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
                        <th>Shipping Medium</th>
                        <th>Weight Category</th>
                        <th>Shipping Rate</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($shippings as $key=>$shipping)
                        <tr>
                            <td> {{ $key+=1 }} </td>
                            <td> {{  $shipping->medium->title }} </td>
                            <td> {{  $shipping->weight->min }}-{{  $shipping->weight->max }} </td>
                            <td>{{  $shipping->price }}</td>
                            <td>
                                <form method="post" action="{{route('shipping-status')}}">
                                    <input type="hidden" name="deal" value="{{$shipping->id}}">
                                    @csrf
                                @if(($shipping->status)==0)
                                    <button class="btn btn-danger btn btn-sm" name="inactive"><i
                                            class="fa fa-times"></i>
                                    </button>
                                @else
                                    <button class="btn btn-success btn btn-sm" name="active"><i
                                            class="fa fa-check"></i>
                                    </button>
                            @endif
                                    <small>Click to change status</small>
                                </form>
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
                                                                        <label for="shipping_media_id">Add Shipping Medium</label>
                                                                        <select class="form-control" name="shipping_medium">
                                                                            <option selected disabled> Please select Medium</option>
                                                                            @foreach($shippingmedium as $row)
                                                                                <option @if($shipping->shipping_media_id==$row->id) selected @endif value="{{$row->id}}">{{$row->title}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="weight_id">Add Weight Category</label>
                                                                        <select class="form-control" name="weight">
                                                                            <option selected disabled> Please select Weight</option>
                                                                            @foreach($weights as $row)
                                                                                <option @if($shipping->weight_id==$row->id) selected @endif value="{{$row->id}}">{{$row->min}}-{{$row->max}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="price">Shipping Rate</label>
                                                                        <input type="text" name="price" value="{{$shipping->price}}" class="form-control" required>
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



