@extends('frontend.include.master')
@section('content')

<!-- banner -->
<section class="bg-primary uk-background-norepeat uk-background-top-right uk-background-image@s  
   uk-position-relative uk-flex uk-flex-middle uk-text-left" uk-height-viewport="expand: true; min-height: 150;">
      <div class="uk-width-1-1 uk-position-z-index">
         <div class="uk-container text-white">
            <h2 class="f-30 f-w-600  uk-margin-remove">Contact Us</h2> </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- section -->
   <section class="uk-section bg-light">
      <div class="uk-container ">
         <div class="uk-margin-medium-bottom">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28257.722150564652!2d85.312268!3d27.710639!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x71c0674f2c724d5!2sMountain%20Handicraft!5e0!3m2!1sen!2snp!4v1660218378934!5m2!1sen!2snp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
         <div class="uk-child-width-1-2@s uk-grid-small" uk-grid uk-height-match="target:.uk-same-height"  >
            <!--  -->
            <div>
               <div class="uk-padding bg-white uk-box-shadow-medium uk-same-height">
                  <h1 class="uk-h4 f-w-400 ">Location</h1>
                  <ul class="uk-list text-primary ">
                     <li class="uk-flex uk-flex-middle"><span class="material-icons-outlined uk-margin-small-right text-secondary">location_on</span>
                         <a href="{{ getConfiguration('google_map') }}" target="_blank" class="text-black"> {{ getConfiguration('address') }}</a> </li>
                  </ul>
               </div>
            </div>
            <!--  -->
            <!--  -->
            <div>
               <div class="uk-padding bg-white uk-box-shadow-medium uk-same-height">
                  <h1 class="uk-h4 f-w-400 ">Contact at</h1>
                  <ul class="uk-list text-primary ">
                     <li class="uk-flex uk-flex-middle"><span class="material-icons-outlined uk-margin-small-right text-secondary">smartphone</span>  <a href="tel:+977-9849033851" class="text-black">{{ getConfiguration('contact_no') }}</a></li>
                  </ul>
               </div>
            </div>
            <!--  -->
            <!--  -->
            <div>
               <div class="uk-padding bg-white uk-box-shadow-medium uk-same-height">
                  <h1 class="uk-h4 f-w-400 ">Email us</h1>
                  <ul class="uk-list text-primary ">
                     <li class="uk-flex uk-flex-middle"><span class="material-icons-outlined uk-margin-small-right text-secondary">email</span><a href="mailto:info@mountainhandicraft.com" class="text-black">{{ getConfiguration('email') }}</a></li>
                  </ul>
               </div>
            </div>
            <!--  -->
             <!--  -->
             <div>
               <div class="uk-padding bg-white uk-box-shadow-medium uk-same-height">
                  <h1 class="uk-h4 f-w-400 ">Opening hours</h1>
                  <ul class="uk-list text-primary ">
                     <li class="uk-flex uk-flex-middle"><span class="material-icons-outlined uk-margin-small-right text-secondary">schedule</span> <span class="text-black">{{ getConfiguration('opening_hours') }}</span></li>
                  </ul>
               </div>
            </div>
            <!--  -->
         </div>
      </div>
   </section>

@endsection