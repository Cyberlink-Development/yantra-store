@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title'=>'Order Detail','backLabel'=>'Back','backLink'=> route('service_orders') ])
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">

                <h2 class="page-header" style="padding-bottom: 5px; margin-top:0;">
                    Order ID: {{$order->order_track}} <br>
                    <small style="text-align: right">Ordered Date: {{$order->created_at->format('M d Y')}} </small>
                </h2>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <section>
                    <!-- title row -->

                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            <h4> Customer Info:</h4>
                            <address>
                                <strong>
                                    @if($order->users?->first_name)
                                        {{$order->users?->first_name}} {{$order->users?->last_name}}
                                    @elseif($order->address?->first_name)
                                        {{ $order->address?->first_name }} {{ $order->address?->last_name }}
                                    @else
                                        Anonymous
                                    @endif
                                </strong>
                                <br>
                                <i class="fa fa-phone"></i> {{$order->users?->phone ?? $order->address?->phone ?? 'N/A'}}<br>
                                <i class="fa fa-envelope"></i> {{$order->users?->email ?? $order->address?->email ?? 'N/A'}}
                            </address>
                        </div>
                        
                        <div class="col-sm-4 invoice-col">
                            <h4>Billing Info:</h4>
                            <address>
                                <strong>{{$order->address->first()->first_name}}  {{$order->address->first()->last_name}}</strong><br>
                                <i class="fa fa-location-arrow"></i>{{$order->address->first()->address1}}<br>
                                <i class="fa fa-phone"></i>  <strong>Phone: </strong>{{$order->address->first()->phone}}<br>
                            </address>
                        </div>
                    </div>
                    @if($order->notes)
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            <h4><i class="fa fa-sticky-note" aria-hidden="true"></i> Order Note:</h4>
                            <address>
                                {{$order->notes}}
                            </address>
                        </div>
                    </div>
                    @endif
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table id="example" class="table table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th>Sn</th>
                                    <th>Service Name</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>{{$service_name->post_title}}</td>
                                        <td>Rs. {{number_format($order->price)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-xs-12">
                        <hr>
                        <p class="lead">Change Status:</p>

                        <div class="row">
                            <div class="col-md-6">
                                <form method="post" action="{{route('service_order_status')}}">
                                    <input type="hidden" name="id" value="{{$order->id}}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Payment Status:</label>
                                        <select class="form-control " id="status_id" name="orders_status"
                                                style="width: 100%;">
                                            <option selected disabled>--Select Order Status--</option>
                                            <option @if($order->status==0) selected @endif value="0">Pending</option>
                                            <option @if($order->status==1)  selected @endif value="1">Completed</option>
                                            <option @if($order->status==2) selected @endif value="2" >Cancel</option>
                                            <option @if($order->status==3)  selected @endif value="3">Return</option>
                                        </select>
                                        <span class="help-block"
                                              style="font-weight: normal;font-size: 11px;margin-bottom: 0;">Choose status</span>
                                    </div>
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i>
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">

                                <div class="table-responsive ">
                                    <table id="info" class="table order-table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td class="sub">Rs. {{number_format($order->subtotal)}}</td>
                                        </tr>
                                        <tr>
                                            <th>Discount:</th>
                                            <td class="vat">Rs. {{$order->discount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td class="grand">Rs. {{number_format($order->grand_total)}}</td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
