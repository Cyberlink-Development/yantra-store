<!-- Footer-->
<footer class="bg-dark ">
    <div class="container-fluid bg-dark text-secondary mt-5 ">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h2 class="text-white">LOGO HERE</h2>
                {{ $setting->welcome_text }}
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">LINKS</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="{{url('/')}}">Home</a>
                        <a class="text-secondary mb-2" href="wishlist.php">Wishlist</a>
                        <a class="text-secondary mb-2" href="{{ route('user-dashboard') }}">Profile</a>
                        <a class="text-secondary mb-2" href="cart.php">Shopping Cart</a>
                        <a class="text-secondary mb-2" href="service-list.php">Services</a>
                        <a class="text-secondary" href="contact.php">Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">CATEGORIES</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="list.php">Laptop</a>
                        <a class="text-secondary mb-2" href="list.php">Desktop</a>
                        <a class="text-secondary mb-2" href="list.php">Mobile</a>
                        <a class="text-secondary mb-2" href="list.php">Tablet</a>
                        <a class="text-secondary mb-2" href="list.php">Processor</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="czi-location text-white mr-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="czi-mail text-white mr-3"></i>info@example.com</p>
                    <p class="mb-0"><i class="czi-phone text-white mr-3"></i>+012 345 67890</p>
                    <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="widget mt-4 text-md-nowrap   ">
                        <a class="social-btn sb-light sb-twitter mr-2 mb-2" href="#"><i class="czi-twitter"></i></a>
                        <a class="social-btn sb-light sb-facebook mr-2 mb-2" href="#"><i class="czi-facebook"></i></a>
                        <a class="social-btn sb-light sb-dribbble mr-2 mb-2" href="#"><i class="czi-instagram"></i></a>
                        </div>
                </div>
                </div>
            </div>
        </div>
      <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
         <div class="col-md-6 px-xl-0">
            <div class="mb-md-0 text-center text-md-left text-secondary d-flex ">
               <div class="mr-2"><a href="terms.php" class="text-white">Terms & Conditions</a></div>
              <div class="mr-2"><a href="faq.php" class="text-white"> FAQ's</a></div>
            </div>
         </div>
         <div class="col-md-6 px-xl-0 text-center text-md-right">
            <!-- <img class="img-fluid" src="img/payments.png" alt=""> -->
            ©  All Rights Reserved.
         </div>
      </div>
   </div>
</footer>
<!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
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
