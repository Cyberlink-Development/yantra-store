<footer>
   <section class="bg-blue uk-section-large">
      <div class="uk-container">
      <div class="uk-grid-expand uk-grid-large uk-grid-margin-large uk-grid"
         uk-grid="">
         <div class="uk-width-2-4@m uk-width-1-3@l">
            <div class="uk-text-left">
               <a class="el-link" href="{{route('index')}}">
               <img
                  class="uk-image uk-text-emphasis"
                  alt=""
                  src="{{asset('images/logo-footer.png')}}"
                  width="200"></a>
               <ul class="uk-list">
                  <li>
                     <a
                        target="_blank"
                        href="{{ getConfiguration('google_map') }}">
                        {{ getConfiguration('address') }}</a>
                  </li>
                  <li>
                     <a href="tel:{{ getConfiguration('contact_no') }}">{{ getConfiguration('contact_no') }}</a>
                  </li>
                  <li>
                     <a href="mailto:{{ getConfiguration('email') }}">{{ getConfiguration('email') }}</a>
                  </li>
               </ul>
               <ul class="uk-grid-small" uk-grid >
                  <li>
                     <div class="uk-box-shadow-small uk-payment-getway">
                        <img src="{{asset('images/payments/esewa.svg')}}" alt="">
                     </div>
                  </li>
                  <li>
                     <div class="uk-box-shadow-small uk-payment-getway">
                        <img src="{{asset('images/payments/khalti.svg')}}" alt="">
                     </div>
                  </li>
                  <li>
                     <div class="uk-box-shadow-small uk-payment-getway">
                        <img src="{{asset('images/payments/visa.svg')}}" alt="">
                     </div>
                  </li>
                  <li>
                     <div class="uk-box-shadow-small uk-payment-getway">
                        <img src="{{asset('images/payments/master-card.svg')}}" alt="">
                     </div>
                  </li>
                  <li>
                     <div class="uk-box-shadow-small uk-payment-getway">
                        <img src="{{asset('images/payments/american-express.svg')}}" alt="">
                     </div>
                  </li>
                  <li>
                     <div class="uk-box-shadow-small uk-payment-getway">
                        <img src="{{asset('images/payments/discover.svg')}}" alt="">
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="uk-width-1-2 uk-width-1-3@s uk-width-expand@m">
            <ul class="uk-list">
               <li>
                  <a href="{{route('about')}}">About us</a>
               </li>
               <li>
                  <a href="{{route('blog-all')}}">Blog</a>
               </li>
               <li>
                  <a href="{{route('contact')}}">Contact Us</a>
               </li>
               <li>
                  <a href="{{route('login')}}">Login</a>
               </li>
            </ul>
         </div>
         <div class="uk-width-1-2 uk-width-1-3@s uk-width-expand@m">
            <ul class="uk-list">
               @foreach ($cat as $value)
               <li>
                  <a href="{{route('product-list', $value->slug)}}">{{$value->name}}</a>
               </li>
               @endforeach
            </ul>
         </div>
         <div class="uk-width-1-2 uk-width-1-3@s uk-width-expand@m">
            <ul class="uk-list">
               <li>
                  <a href="{{route('privacy')}}">Privacy Policy</a>
               </li>
               <li>
                  <a href="{{route('refund')}}">Refund Policy</a>
               </li>
               <li>
                  <a href="{{route('terms')}}">Terms Conditions</a>
               </li>
            </ul>
         </div>
      </div>
   </section>
   <section class="uk-section-xsmall bg-blue">
   <hr class="uk-divider-icon">

      <div class="uk-container">
         <div class="uk-flex-middle" uk-grid="uk-grid">
            <div class="uk-width-expand@m">
               <p class="uk-margin-remove text-white">© 2022 {{getConfiguration('site_title')}}. All rights reserved.
               </p>
            </div>
            <div class="uk-width-auto@m">
               <ul uk-grid="uk-grid" class="uk-grid-small uk-social-media uk-light">
                  <li>
                     <a target="_blank" href="{{getConfiguration('facebook_link')}}"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                     <a target="_blank" href="{{getConfiguration('instagram_link')}}"><i class="fab fa-instagram"></i></a>
                  </li>
               </ul>
            </div>
            
         </div>
      </div>
   </section>
</footer>
<!-- video modal -->
<div id="video-modal" class="uk-flex-top">
   <button
      class="uk-modal-close uk-icon uk-close uk-position-top-right text-white uk-padding"
      type="button"
      uk-icon="icon: close; ratio: 2"></button>
   <div class="uk-modal-dialog uk-margin-auto-vertical"></div>
</div>
<!-- end video modal-->
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62f3982499484600199e46ca&product=sop' async='async'></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script 
      type="text/javascript"
      src="https://d3mkw6s8thqya7.cloudfront.net/integration-plugin.js"
      id="aisensy-wa-widget"
      widget-id="jCKkC5"
    >
    </script>
<!-- search popup -->
<div id="search" class="uk-flex-center uk-overflow-hidden" uk-modal="uk-modal">
    <div class="uk-modal-dialog  uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close="uk-close"></button>
        <div class="uk-search-modal uk-padding-small">
            <form class="uk-search uk-search-large " action="{{route('product-search')}}" method="post">

               @csrf

                <button
                    class="uk-search-icon-flip text-primary"
                    uk-search-icon="uk-search-icon"></button>
                <input class="uk-search-input" name="key" type="search" placeholder="Search..."></form>
            </div>
            </div>
        </div>
        <!-- end search popup -->

</body>
</html>