@extends('frontend.include.master')
@section('content')
    <!-- Page Content-->
    <section class="uk-section uk-background-muted uk-section-muted uk-flex uk-flex-middle">
   <div class="uk-width-1-1">
      <div class="uk-container">
         <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-1-1@m">
               <div class="uk-margin uk-width-xlarge uk-margin-auto  bg-white uk-box-shadow-medium uk-padding  uk-box-shadow-large uk-border-rounded">
                    <form class="uk-grid-medium" method="post" action="{{route('login')}}" uk-grid>
                      @csrf
                      <div class="uk-width-1-1">
                        <h3 class="f-w-600">Login</h3>
                      </div>
                        <div class="uk-width-1-1">
                          <label class="uk-margin-small-bottom uk-display-block" for="Email">Email Address <span class="uk-text-danger">*</span></label>
                          <input class="uk-input" type="text" name="email" placeholder="" id="Email"> 
                        </div>
                        <div class="uk-width-1-1">
                          <label class="uk-margin-small-bottom uk-display-block" for="Password">Password <span class="uk-text-danger">*</span></label>
                          <input class="uk-input" type="password" name="password" placeholder="" id="Password">
                        </div>
                        <div class="uk-width-1-1 f-12 uk-text-left uk-text-right@m">
                          <a href="{{route('forgot-password')}}"  class="text-secondary">Forgot password?</a>
                        </div>
                        <div class="uk-width-1-1">
                          <button type="submit" class="uk-button uk-btn-primary  uk-width-1-1">Login</button>
                          <div class="uk-margin-top uk-display-block uk-text-center f-14">Don't have account yet <a href="{{route('register')}}" class="text-secondary"> Sign Up</a></div>
                        </div>
               </form>
                </div>
            </div>
         </div>
      </div>
   </div>
</section> 
    @endsection
