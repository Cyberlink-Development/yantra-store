<!-- Footer-->
<footer class="bg-dark ">
    <div class="container  bg-dark text-secondary mt-5 ">
        <div class="row px-xl-5 pt-5">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="media"><i class="czi-rocket text-white" style="font-size: 2.25rem;"></i>
                    <div class="media-body pl-3">
                        <h6 class="font-size-base text-light mb-1">Fast and free delivery</h6>
                        <p class="mb-0 font-size-ms text-light opacity-50">Free delivery for all orders over $200</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="media"><i class="czi-currency-exchange text-white" style="font-size: 2.25rem;"></i>
                    <div class="media-body pl-3">
                        <h6 class="font-size-base text-light mb-1">Money back guarantee</h6>
                        <p class="mb-0 font-size-ms text-light opacity-50">We return money within 30 days</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="media"><i class="czi-support text-white" style="font-size: 2.25rem;"></i>
                    <div class="media-body pl-3">
                        <h6 class="font-size-base text-light mb-1">24/7 customer support</h6>
                        <p class="mb-0 font-size-ms text-light opacity-50">Friendly 24/7 customer support</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="media"><i class="czi-card text-white" style="font-size: 2.25rem;"></i>
                    <div class="media-body pl-3">
                        <h6 class="font-size-base text-light mb-1">Secure online payment</h6>
                        <p class="mb-0 font-size-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row px-xl-5 pt-3">
            <!--<div class="col-lg-3 col-md-12 mb-5 pr-3 pr-xl-5">-->
                <!-- <h2 class="text-white">LOGO HERE</h2> -->
                <!--<a href="{{url('/')}}"><img src="{{ asset('theme-assets/img/transparent.png') }}" style="max-height: 100px" alt="{{$setting->site_name}}"></a>-->
                <!--{!! $setting->welcome_text !!}-->
            <!--</div>-->
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <!--<div class="col-md-4 mb-5">-->
                    <!--    <h5 class="text-secondary text-uppercase mb-4">CATEGORIES</h5>-->
                    <!--    <div class="d-flex flex-column justify-content-start">-->
                    <!--        @foreach ($cat as $value)-->
                    <!--            <a class="text-secondary mb-2" href="{{ route('product-list', $value->slug) }}">{{ $value->name }}</a>-->
                    <!--        @endforeach-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="czi-location text-white mr-3"></i>{{ $setting->address }}</p>
                        <p class="mb-2"><i class="czi-mail text-white mr-3"></i>{{ $setting->email_primary }}</p>
                        <p class="mb-0"><i class="czi-phone text-white mr-3"></i>{{ $setting->phone1 }},{{ $setting->phone2 }}</p>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="widget mt-4 text-md-nowrap   ">
                            <a class="social-btn sb-light sb-twitter mr-2 mb-2" href="{{ $setting->twitter_link }}"  target="_blank"><i class="czi-twitter"></i></a>
                            <a class="social-btn sb-light sb-facebook mr-2 mb-2" href="{{ $setting->facebook_link }}"  target="_blank"><i class="czi-facebook"></i></a>
                            <a class="social-btn sb-light sb-dribbble mr-2 mb-2" href="{{ $setting->instagram_link }}" target="_blank"><i class="czi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">USEFUL LINKS</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <!-- <a class="text-secondary mb-2" href="wishlist.php">Wishlist</a> -->
                            <a class="text-secondary mb-2" href="{{ route('user-dashboard') }}">Profile</a>
                            <a class="text-secondary mb-2" href="{{ route('cart-item') }}">Shopping Cart</a>
                            @foreach ($posttypeFooter as $row)
                                <a class="text-secondary mb-2" href="{{route('page.posttype_detail',$row->uri)}}">{{ $row->post_type }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <!-- <h5 class="text-secondary text-uppercase mb-4">Subscribe to the newsletter </h5>
                        <form class="validate mb-4" action="" method="get" name="mc-embedded-subscribe-form"
                            id="mc-embedded-subscribe-form">
                            <div class="input-group input-group-overlay flex-nowrap">
                                <div class="input-group-prepend-overlay"><span
                                        class="input-group-text text-muted font-size-base"><i class="czi-mail"></i></span></div>
                                <input class="form-control prepended-form-control" type="email" name="EMAIL" id="mce-EMAIL"
                                    value="" placeholder="Your email" required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" name="subscribe"
                                        id="mc-embedded-subscribe">Subscribe*</button>
                                </div>
                            </div> -->
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                            </div><small class="form-text text-light opacity-50" id="mc-helper">*Subscribe to our newsletter to
                                receive early discount offers, updates and new products info.</small>
                            <div class="subscribe-status"></div>
                        </form>
                        <div class="col-md-12 px-xl-0 text-center mt-5">
                            <div class="d-inline-block payment-methods" style="width: 260px">
                                <img width="374" height="56" src="{{asset('theme-assets/img/cards-alt.png')}}" class="attachment-full size-full img-fluid" alt="" decoding="async" srcset="{{asset('theme-assets/img/cards-alt.png')}} 374w, {{asset('theme-assets/img/cards-alt.png')}} 300w" sizes="(max-width: 374px) 100vw, 374px">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-12 px-xl-0 text-center ">
                {!! $setting->copyright_text  !!}
            </div>
            <div class="col-md-12 px-xl-0 text-center">
                <div class="d-inline-block payment-methods" style="width: 260px">
                    <img width="374" height="56" src="{{asset('theme-assets/img/cards-alt.png')}}" class="attachment-full size-full img-fluid" alt="" decoding="async" srcset="{{asset('theme-assets/img/cards-alt.png')}} 374w, {{asset('theme-assets/img/cards-alt.png')}} 300w" sizes="(max-width: 374px) 100vw, 374px">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Back To Top Button-->
<a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
<!-- WhatsApp Chat Button -->
<a href="https://wa.me/{{$setting->whatsapp}}"
   target="_blank"
   style="
      position:fixed;
      bottom:75px;   /* moved above Tawk.to */
      right:20px;
      background-color:#25D366;
      color:white;
      border-radius:50%;
      width:60px;
      height:60px;
      text-align:center;
      font-size:30px;
      z-index:1000;
      display:flex;
      align-items:center;
      justify-content:center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      ">
    <i class="fab fa-whatsapp"></i>
</a>
<!-- <script>
   $("#navbarCollapse").on('show.bs.collapse', function() {
   $('a.nav-link').click(function() {
     $("#navbarCollapse").collapse('hide');
   });
   });
   </script> -->
<!-- Vendor scrits: js libraries and plugins-->

<script src="{{asset('theme-assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/tiny-slider/dist/min/tiny-slider.js')}}"></script>
<script src="{{asset('theme-assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/shufflejs/dist/shuffle.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/drift-zoom/dist/Drift.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/lightgallery.js/dist/js/lightgallery.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/lg-video.js/dist/lg-video.min.js')}}"></script>
<script src="{{asset('theme-assets/vendor/card/dist/card.js')}}"></script>
<script src="{{asset('theme-assets/vendor/nouislider/distribute/nouislider.min.js')}}"></script>
<!-- Main theme script-->
<script src="{{asset('theme-assets/js/theme.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>
</html>
