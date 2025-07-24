@extends('frontend.include.master')
@section('content')

<!-- section -->
<section class="uk-section uk-background-muted uk-section-muted uk-flex uk-flex-middle">
    
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-width-1-1@m">
                    <div class="uk-margin uk-width-xlarge uk-margin-auto  bg-white uk-box-shadow-medium uk-padding  uk-box-shadow-large uk-border-rounded">
                    <form action="{{route('user-registration')}}" class="uk-grid-medium" uk-grid method="POST">
                    @csrf
                        <div class="uk-width-1-1">
                        <h3 class="f-w-600">New Customers</h3>
                        </div>
                        
                         
                        <div class="uk-width-1-2@m">
                            <label class="uk-margin-small-bottom uk-display-block" for="fname">First Name <span class="uk-text-danger">*</span></label>
                            <input class="uk-input" name="first_name" type="text" placeholder="" id="fname"> 
                        </div>
                        <div class="uk-width-1-2@m">
                            <label class="uk-margin-small-bottom uk-display-block" for="lname">Last Name <span class="uk-text-danger">*</span></label>
                            <input class="uk-input" type="text" name="last_name" placeholder="" id="lname"> 
                        </div>
                        <div class="uk-width-1-1">
                            <p class="f-w-600">Login Information</p>
                        </div>
                        <div class="uk-width-1-1">
                            <label class="uk-margin-small-bottom uk-display-block" for="Email">Email Address <span class="uk-text-danger">*</span></label>
                            <input class="uk-input" type="text" name="email" placeholder="" id="Email"> 
                        </div>
                        <div class="uk-width-1-1">
                            <label class="uk-margin-small-bottom uk-display-block" for="phone">Contact Number <span class="uk-text-danger">*</span></label>
                            <input class="uk-input" type="number" name="phone_number" placeholder="" id="phone"> 
                        </div>
                        <div class="uk-width-1-1">
                            <label class="uk-margin-small-bottom uk-display-block" for="Password">Password <span class="uk-text-danger">*</span></label>
                            <input class="uk-input" type="password" name="password" placeholder="" id="Password">
                        </div>
                        <div class="uk-width-1-1">
                            <label class="uk-margin-small-bottom uk-display-block" for="ConfirmPassword">Confirm Password <span class="uk-text-danger">*</span></label>
                            <input class="uk-input" type="password" name="password_confirmation" placeholder="" id="ConfirmPassword">
                        </div>
                        
                        <div class="uk-width-1-1">
                            <button class="uk-button uk-btn-primary  uk-width-1-1">Create an Account</button>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> 
   <!-- end section -->

@endsection