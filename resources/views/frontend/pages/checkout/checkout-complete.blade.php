@extends('frontend.include.master')
@section('content')
<!-- section -->
<section class="uk-section-large uk-background-muted">
    <div class="uk-container uk-container-small">
        <div class="uk-padding-large bg-white uk-box-shadow-medium uk-border-rounded uk-text-center">
            <!-- payment success -->
            <div class="uk-payment">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                </svg>
                <h2 class="uk-margin-remove uk-h3">Your payment has been processed successfully</h2>
            </div>
             <!-- end payment success -->
            <!-- payment payment denied -->
             <!-- <div class="uk-payment">
                <svg   svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                <circle class="path circle" fill="none" stroke="#f00" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                <line class="path line" fill="none" stroke="#f00" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
                <line class="path line" fill="none" stroke="#f00" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
                </svg> 
                <h2 class="uk-margin-remove uk-h3">Your payment could not completed</h2>
            </div> -->
            <!-- end payment payment denied -->
            <a href="{{route('index')}}" class="uk-flex uk-flex-middle uk-flex-center uk-margin-top text-primary"><span class="material-icons-outlined f-14 uk-margin-small-right">arrow_back_ios</span>Return to shipping</a>
            <!-- <a href="{{route('track-order',['order_id'=>$order->id])}}" class="uk-flex uk-flex-middle uk-flex-center uk-margin-top text-primary"><span class="material-icons-outlined f-14 uk-margin-small-right">arrow_forward_ios</span>Track Your Order</a> -->
        </div>
    </div>
</div> 
</section>
@endsection
