@extends('frontend.include.master')

@section('meta-keywords') Terms and Condition | Mountain Handicraft @endsection
@section('meta-description') Best Handicraft of Nepal @endsection

@section('content')
    <!-- Page Content-->
    <section class="uk-cover-container uk-position-relative uk-flex uk-flex-middle 
uk-background-norepeat uk-background-cover uk-background-center" 
   uk-parallax="bgx: 80, 80 ;bgy: -50, -50" data-src="{{asset('images/banner/1.jpg')}}" uk-img>
    <div class="uk-inner-banner uk-width-1-1 uk-position-z-index">
      <div class="uk-container uk-position-relative uk-flex-middle uk-flex" 
      uk-height-viewport="expand: true; min-height: 450;">
         <div class="uk-width-1-2@l uk-width-1-1">
             <h1 class="uk-text-bold uk-margin">Terms and Conditions</h1> 
          </div>
      </div>
   </div>
   
</section>
<!-- end banner -->  
<!-- section -->
<section class="uk-section  bg-white uk-position-relative ">
   <div class="uk-container">
      <div class="bg-white uk-padding uk-box-shadow-medium uk-margin-medium-bottom">
         <p>{!! getConfiguration('terms_and_conditions') !!}</p>
       </div>
    
   </div>
</section>
@stop