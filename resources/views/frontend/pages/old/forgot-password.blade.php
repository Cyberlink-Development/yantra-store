@extends('frontend.include.master')
@section('content')
<section class="uk-section uk-background-muted uk-section-muted uk-flex uk-flex-middle">
   <div class="uk-width-1-1">
      <div class="uk-container">
         <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-1-1@m">
               <div class="uk-margin uk-width-xlarge uk-margin-auto  bg-white uk-box-shadow-medium uk-padding  uk-box-shadow-large uk-border-rounded">
                    <form class="uk-grid-medium" action="{{route('recovery-mail')}}" method="POST" uk-grid>
                        @csrf
                <div class="uk-width-1-1">
                  <h3 class="f-w-600">Forgot password</h3>
                  <p class="f-13">Change your password in three easy steps. This helps to keep your new password secure.</p>
                  <ol class="f-13">
            <li class="uk-margin-small"> Fill in your email address below.</li>
            <li class="uk-margin-small"> We'll email you a temporary code.</li>
            <li class="uk-margin-small"> Use the code to change your password on our secure website.</li>
         </ol>
                </div>
                  <div class="uk-width-1-1">
                     <label for="email" class="uk-margin-small-bottom uk-display-block">Email Address <span class="uk-text-danger">*</span></label>
                     <input class="uk-input" name="email" type="text" id="email" placeholder=""> 
                  </div>
                 
                  <div class="uk-width-1-1">
                     <button href="# " class="uk-button uk-btn-black  uk-width-1-1"  onclick="UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Successfully Submitted', pos: 'bottom-center', status: 'primary'})">Get new password</button>
                   </div>
               </form>
                </div>
            </div>
         </div>
      </div>
   </div>
</section> 
@endsection