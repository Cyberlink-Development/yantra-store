@extends('frontend.include.master')
@section('content')
    <!-- Page Content-->
    <section class="uk-section uk-background-muted uk-section-muted uk-flex uk-flex-middle">
   <div class="uk-width-1-1">
      <div class="uk-container">
         <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-1-1@m">
               <div class="uk-margin uk-width-xlarge uk-margin-auto  bg-white uk-box-shadow-medium uk-padding  uk-box-shadow-large uk-border-rounded">
               @isset($error)
                  <p>{{$error}}</p>
                  @else
                    <form class="uk-grid-medium" method="post" action="{{route('reset-password', $token)}}" uk-grid>
                      @csrf
                      <input type="hidden" value="{{$email}}" name="email">
                      <div class="uk-width-1-1">
                        <h3 class="f-w-600">Password Change</h3>
                      </div>
                        <div class="uk-width-1-1">
                          <label class="uk-margin-small-bottom uk-display-block" for="Password">Password <span class="uk-text-danger">*</span></label>
                          <input class="uk-input" type="password" name="password" placeholder="Password" id="password"> 
                        </div>
                        <div class="uk-width-1-1">
                          <label class="uk-margin-small-bottom uk-display-block" for="password_confirmation">Password Confirmation<span class="uk-text-danger">*</span></label>
                          <input class="uk-input" type="password" name="password_confirmation" placeholder="Password Confirmation" id="password_confirmation">
                        </div>
                        <div class="uk-width-1-1">
                          <button type="submit" class="uk-button uk-btn-primary  uk-width-1-1">Reset Password</button>
                        </div>
               </form>
               @endisset
                </div>
            </div>
         </div>
      </div>
   </div>
</section> 
    @endsection
