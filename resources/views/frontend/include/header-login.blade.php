<!DOCTYPE html>
<html lang="en-US">
   <head>
      <title>{{getConfiguration('site_title')}}</title>
      <meta charset="utf-8">
      <meta name="keywords" content="@yield('meta-keywords')">
      <meta name="description" content="@yield('meta-description')">
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:url" content="https://demo5.lakhetech.com" />
      <meta property="og:image" content="@yield('image')" />
      <meta property="og:description" content="@yield('short_description')" />
      <meta property="og:site_name" content="{{getConfiguration('site_title')}}" />
      <meta property="og:image:width" content="1000" />
      <meta property="og:image:height" content="600" />
      <meta name="twitter:image" content="@yield('image')" />
      <meta name="twitter:url" content="{{url()->current()}}">
      <meta name="twitter:title" content="@yield('title')">
      <meta name="twitter:description" content="@yield('short_description')">
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
       <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
   </head>
   <body>
      <header>
           <!-- top header -->
           <div class="uk-top-header bg-primary">
            <div class="uk-container">
               <nav  uk-navbar>
                  <div class="uk-navbar-left text-white">
                     <div class="uk-flex uk-flex-middle" uk-grid>
                     </div>
                  </div>
                  <div class="uk-navbar-right">
                     <ul uk-grid="uk-grid" class="uk-grid-small uk-social-media uk-light">
                        <li>
                           <a target="_blank" href="{{ getConfiguration('facebook_link') }}"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                           <a target="_blank" href="{{ getConfiguration('instagram_link') }}"><i class="fab fa-instagram"></i></a>
                        </li>
                        {{-- <li>
                           <a href=""><i class="fab fa-whatsapp"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-viber"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-tiktok"></i></a>
                        </li> --}}
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <!-- end top header -->
         <!-- small nav -->
         <div class="mh-header-mobile bg-white uk-hidden@m"  uk-sticky="uk-sticky" 
            media="@m"
            animation="uk-animation-slide-top">
            <div class="uk-navbar-container">
               <nav uk-navbar class="bg-white">
                  <div class="uk-navbar-left">
                     <ul class="uk-navbar-nav">
                        <li>
                           <a class="uk-navbar-toggle" uk-toggle="target: #mh-mobile" uk-icon="icon:menu;"></a>
                        </li>
                     </ul>
                     <a href="{{route('index')}}" class="uk-navbar-item uk-logo">
                     <img alt="Mountain Handi Craft" src="{{asset('images/logo.png')}}" width="110">
                     </a>
                  </div>
                  <div class="uk-navbar-right uk-margin-small-right">
                     <ul class="uk-navbar-nav">
                        <li>
                              <a href="#search" uk-toggle="#search" uk-tooltip="Search">
                              <i uk-icon="icon:search;"></i>
                              </a>
                        </li>
                        <li>
                           <a href="#" uk-tooltip="{{Auth::user()->first_name}}">{{Auth::user()->first_name}}<span class="" uk-icon="icon: chevron-down; ratio: 1;"></span></a>
                           <div class="uk-navbar-dropdown uk-margin-remove">
                              <ul class="uk-nav uk-navbar-dropdown-nav uk-margin-remove">
                                 <li><a href="{{route('logout')}}">Logout</li>
                              </ul>
                           </div>
                        </li>
                        <li class="mini-cart">
                              <a
                                 class="uk-position-relative"
                                 href="{{route('cart-item')}}"
                                 uk-tooltip="Cart"
                                 uk-icon="icon:cart;">
                                 <div class="uk-cart-count">{{Gloudemans\Shoppingcart\Facades\Cart::count()}}</div>
                              </a>
                           </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <!-- menu modal -->
            <div id="mh-mobile" class="uk-modal-full bg-white" uk-modal="uk-modal">
               <div
                  class="uk-modal-dialog uk-flex uk-flex-center  uk-mobile-menu"
                  uk-height-viewport="uk-height-viewport">
                  <div class="uk-width-1-1">
                       <!-- top header -->
                     <div class="uk-top-header bg-primary">
                        <div class="uk-container">
                           <nav  uk-navbar>
                              <div class="uk-navbar-left text-white">
                                 <div class="uk-flex uk-flex-middle" uk-grid>
                                    {{-- <div class="currency ">
                                       <select>
                                          <option value="select">Currency</option>
                                          <option>CAD</option>
                                          <option>Pound</option>
                                          <option>Euro</option>
                                          <option>USD</option>
                                          <option>Swiss</option>
                                          <option>AUD</option>
                                       </select>
                                    </div> --}}
                                    <div class="uk-visible@m">
                                       <div id="google_translate_element" class="uk-light"></div>
                                       <script type="text/javascript">
                                          function googleTranslateElementInit() {
                                          new google.translate.TranslateElement({pageLanguage: 'en',}, 'google_translate_element');
                                          }
                                       </script>
                                       <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                    </div>
                                 </div>
                              </div>
                              <div class="uk-navbar-right">
                                 <ul uk-grid="uk-grid" class="uk-grid-small uk-social-media uk-light">
                                    <li>
                                       <a href="{{ getConfiguration('facebook_link') }}"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                       <a href="{{ getConfiguration('instagram_link') }}"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    {{-- <li>
                                       <a href=""><i class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>
                                       <a href=""><i class="fab fa-viber"></i></a>
                                    </li>
                                    <li>
                                       <a href=""><i class="fab fa-tiktok"></i></a>
                                    </li> --}}
                                 </ul>
                              </div>
                           </nav>
                        </div>
                     </div>
                     <!-- end top header -->
                     <nav class="uk-navbar bg-white" uk-navbar="uk-navbar">
                        <div class="uk-navbar-left">
                           <ul class="uk-navbar-nav">
                              <li>
                                 <a class="uk-navbar-toggle uk-modal-close text-black" uk-icon="icon:close;"></a>
                              </li>
                           </ul>
                           <a class="uk-navbar-item uk-logo " href="{{route('index')}}">
                           <img alt="Mountain Handi Craft" src="{{asset('images/logo.png')}}" width="110">
                           </a>
                        </div>
                        <div class="uk-navbar-right  uk-margin-small-right">
                           <ul class="uk-navbar-nav">
                           <li>
                              <a href="#search" uk-toggle="#search" uk-tooltip="Search">
                              <i uk-icon="icon:search;"></i>
                              </a>
                        </li>
                           <li>
                              <a uk-tooltip="Login" href="{{ route('user-dashboard') }}" uk-icon="icon:user;">{{Auth::user()->first_name}}</a>
                           </li>
                           <li>
                              <a
                                 class="uk-position-relative"
                                 href="#"
                                 uk-tooltip="Cart"
                                 uk-toggle="target: #cart"
                                 uk-icon="icon:cart;">
                                 <div class="uk-cart-count">5</div>
                              </a>
                           </li>
                        </div>
                     </nav>
                     <nav class="uk-margin-large-top uk-margin-large-bottom">
                        <ul
                           class="uk-navsidebar   uk-nav-parent-icon uk-nav-left uk-margin-auto-vertical"
                           uk-nav="multiple: false">
                           <li>
                              <a href="{{route('index')}}">Home</a>
                           </li>
                           <!-- -->
                           <li class="uk-parent">
                              <a href="#" class="uk-active">Product
                              </a>
                              <ul class="uknavsub  " uk-nav="multiple: false">
                              @foreach ($cat as $value)
                                    <li>

                                       <a href="{{route('product-list', $value->slug)}}">{{$value->name}}
                                       <span
                                          class="uk-margin-remove uk-align-right "></span></a>
                                    </li>
                                        @endforeach
                              </ul>
                           </li>
                           <!-- -->
                           <li>
                              <a href="{{route('blog-all')}}">Blog</a>
                           </li>
                           <li>
                              <a href="{{route('about')}}">About Us</a>
                           </li>
                           <li>
                              <a href="{{route('contact')}}">Contact Us</a>
                           </li>
                        </ul>
                     </nav>
                     <ul uk-grid="uk-grid" class="uk-grid-small uk-social-media uk-light uk-flex-center">
                        <li>
                           <a href="{{ getConfiguration('facebook_link') }}"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                           <a href="{{ getConfiguration('instagram_link') }}"><i class="fab fa-instagram"></i></a>
                        </li>
                        {{-- <li>
                           <a href=""><i class="fab fa-whatsapp"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-viber"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-tiktok"></i></a>
                        </li> --}}
                     </ul>
                  </div>
               </div>
            </div>
            <!-- end -->
         </div>
         <!-- end small nav -->
         <!-- main nav -->
         <div class="mh-header uk-visible@m" uk-header="uk-header">
            <div
               class="bg-white "
               uk-sticky="uk-sticky" 
               media="@m"
               animation="uk-animation-slide-top"
               cls-active="uk-navbar-sticky uk-box-shadow-small bg-white">
               <div class="uk-container">
                  <nav class="uk-navbar" uk-navbar="uk-navbar">
                     <div class="uk-navbar-left">
                        <ul class="uk-navbar-nav">
                           <li>
                              <a href="#">Product
                              <span class="" uk-icon="icon: chevron-down; ratio: 1;"></span></a>
                              <div class="uk-navbar-dropdown uk-margin-remove">
                                 <ul class="uk-nav uk-navbar-dropdown-nav uk-margin-remove">
                                    <!-- -->
                                    @foreach ($cat as $value)
                                    <li>

                                       <a href="{{route('product-list', $value->slug)}}">{{$value->name}}
                                       <span
                                          class="uk-margin-remove uk-align-right "
                                          uk-icon="icon: chevron-right; ratio: 1;"></span></a>
                                             @if($value->subCategory->isNotEmpty())
                                          <div
                                          uk-dropdown="pos: right-top; offset: 0; delay-hide: 200;"
                                          class="uk-dropdown bg-grey">
                                          <ul class="uk-nav uk-dropdown-nav uk-margin-remove">
                                             @foreach($value->subCategory as $child)
                                                <li>
                                                <a href="{{route('product-list',$child->slug)}}">{{$child->name}}</a>
                                             </li>
                                             @endforeach
                                            
                                       
                                          </ul>
                                       </div>
                                        @endif
                                    </li>
                                        @endforeach
                                    <!-- -->
                                 </ul>
                              </div>
                           </li>
                           <li>
                              <a href="{{route('blog-all')}}">Blog</a>
                           </li>
                           <li>
                              <a href="{{route('about')}}">About Us</a>
                           </li>
                        </ul>
                     </div>
                     <div class="uk-navbar-center">
                        <a href="{{route('index')}}" class="uk-navbar-item uk-logo">
                        <img alt="Mountain Handi Craft" src="{{asset('images/logo.png')}}" width="240">
                        </a>
                     </div>
                     <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">   
                           
                           <li>
                              <a href="{{route('contact')}}">Contact Us</a>
                           </li>
                           <li>
                              <a href="#search" uk-toggle="#search" uk-tooltip="Search">
                              <i uk-icon="icon:search;"></i>
                              </a>
                         </li>
                           <li>
                           <a href="{{ route('user-dashboard')}}" uk-tooltip="{{Auth::user()->first_name}}">{{Auth::user()->first_name}}<span class="" uk-icon="icon: chevron-down; ratio: 1;"></span></a>
  
                           </li>
                           <li class="mini-cart">
                              <a
                                 class="uk-position-relative"
                                 href="{{route('cart-item')}}"
                                 uk-tooltip="Cart"
                                 uk-icon="icon:cart;">
                                 <div class="uk-cart-count">{{Gloudemans\Shoppingcart\Facades\Cart::count()}}</div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>