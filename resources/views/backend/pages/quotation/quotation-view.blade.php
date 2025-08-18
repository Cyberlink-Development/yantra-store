@extends('backend.layouts.master')
@section('content')
    {{--sadas--}}
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="page-header" style="padding-bottom: 25px; margin-top:0;">
                    <i class="fa fa-globe"></i> Quotation
                </h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <section>
                    <!-- title row -->

                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-12 invoice-col">
                            <h4><i class="fas fa-users"></i> Customer Info :</h4>
                            <address>
                                <i class="fas fa-user"></i> Name : {{$quotation->full_name}}<br>
                                <i class="fa fa-phone"></i> Phone : {{$quotation->phone}}<br>
                                <i class="fa fa-envelope"></i> Email : {{$quotation->email}}<br>
                                <i class="fa fa-globe"></i> Country : {{$quotation->country}}
                            </address>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4><i class="fas fa-comment-alt"></i> Message :</h4>
                            <p>{{$quotation->message}}</p>
                        </div>
                    </div>
                    
                    <div class="row invoice-info">
                        <div class="col-sm-12 invoice-col">
                            <h4><i class="fas fa-box"> </i> {{ $quotation->product_id ? 'Product Info :' : 'Service Info :' }}</h4>
                            <address>
                                @if ($quotation->product_id)
                                    <td> <strong>Product Name : </strong>{{ $quotation->products ? $quotation->products->product_name : ''}}</td>
                                @else
                                    <td> <strong>Service Name : </strong> {{ $quotation->posts ? $quotation->posts->post_title : ''}}</td>
                                @endif
                            </address>
                        </div>
                    </div>

                    <h4 >Quotation Received Date : {{$quotation->created_at->format('M d, Y')}} </h4>
                </section>
            </div>
        </div>
    </div>

@endsection
