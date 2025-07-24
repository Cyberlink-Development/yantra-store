@extends('backend.layouts.master')
@section('content')
    {{--sadas--}}
    <div class="container">
        <div class="card">
            <div class="card-header">

                <h2 class="page-header" style="padding-bottom: 25px; margin-top:0;">
                    <i class="fa fa-globe"></i> Quotation
                    <small style="text-align: right">Sent Date:{{$quotation->created_at->format('M d Y')}} </small>
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
                                <strong>{{$quotation->full_name}}</strong><br>
                                <i class="fa fa-phone"></i>{{$quotation->phone}}<br>
                                <i class="fa fa-envelope"></i>{{$quotation->email}}<br>
                                <i class="fa fa-globe"></i>{{$quotation->country}}
                            </address>
                        </div>
                        <!-- /.col -->
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <h4><i class="fas fa-comment-alt"></i> Message:</h4>
                            <p>{{$quotation->message}}</p>
                        </div>
                    </div>
</div>
</div>
</div>

@endsection
