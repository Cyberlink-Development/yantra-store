<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{getConfiguration('site_title')}}</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="YantraNetwork">
    <meta name="keywords" content="YantraNetwork">
    <meta name="author" content="YantraNetwork">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('theme-assets/vendor/simplebar/dist/simplebar.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('theme-assets/vendor/tiny-slider/dist/tiny-slider.css') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ asset('theme-assets/vendor/drift-zoom/dist/drift-basic.min.css') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ asset('theme-assets/vendor/lightgallery.js/dist/css/lightgallery.min.css') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ asset('theme-assets/vendor/nouislider/distribute/nouislider.min.css') }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('theme-assets/css/theme.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('theme-assets/css/theme.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">


</head>
<!-- Body-->

<body class="toolbar-enabled">
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab"
                                role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab"
                                aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
                    </ul>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body tab-content py-4">
                    <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate
                        id="signin-tab">
                        <div class="form-group">
                            <label for="si-email">Email address</label>
                            <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com"
                                required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="form-group">
                            <label for="si-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="si-password" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                        class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show
                                        password</span>
                                </label>
                            </div>
                        </div>
                        <!--<div class="form-group d-flex flex-wrap justify-content-between">-->
                        <!--  <div class="custom-control custom-checkbox mb-2">-->
                        <!--    <input class="custom-control-input" type="checkbox" id="si-remember">-->
                        <!--    <label class="custom-control-label" for="si-remember">Remember me</label>-->
                        <!--  </div><a class="font-size-sm" href="#">Forgot password?</a>-->
                        <!--</div>-->
                        <div>
                            <p class="login-text">Or</p>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <div class="d-inline-block align-middle">Login With: <a
                                    class="social-btn sb-google mr-2 mb-2" href="#" data-toggle="tooltip"
                                    title="" data-original-title="Sign in with Google"><i
                                        class="czi-google"></i></a></div>
                        </div>
                        <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
                    </form>
                    <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                        <div class="form-group">
                            <label for="su-name">Full name</label>
                            <input class="form-control" type="text" id="su-name" placeholder="John Doe"
                                required>
                            <div class="invalid-feedback">Please fill in your name.</div>
                        </div>
                        <div class="form-group">
                            <label for="su-email">Email address</label>
                            <input class="form-control" type="email" id="su-email"
                                placeholder="johndoe@example.com" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="form-group">
                            <label for="su-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                        class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show
                                        password</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="su-password-confirm">Confirm password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password-confirm" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                        class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show
                                        password</span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar-->
    <!-- Navbar 3 Level (Light)-->
    <header class="box-shadow-sm">
        <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->

        <div class="navbar-sticky bg-light">
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="container">

                    <a class="navbar-brand d-none d-sm-block mr-3 flex-shrink-0 p-0" href="index.php"
                        style="min-width: 7rem;">
                        <img width="60" src="{{ asset('theme-assets/img/logo.jpg') }}" alt="Cyberlink" />
                    </a>

                    <a class="navbar-brand d-sm-none mr-2" href="{{ route('index') }}"
                        style="min-width: 4.625rem;"><img width="74"
                            src="{{ asset('theme-assets/img/logo.jpg') }}" alt="Cyberlink"
                            style="height: 60px; object-fit: contain;" /></a>

                    <div class="input-group-overlay d-none d-lg-flex mx-4">
                        <input class="form-control appended-form-control" type="text"
                            placeholder="Search for products">
                        <div class="input-group-append-overlay"><span
                                class="input-group-text bg-secondary text-white"><i class="czi-search"></i></span>
                        </div>
                    </div>
                    <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-tool navbar-stuck-toggler" href="#">
                            <span class="navbar-tool-tooltip">Expand menu</span>
                            <div class="navbar-tool-icon-box ">
                                <i class="navbar-tool-icon czi-menu"></i>
                            </div>
                        </a>
                        <!-- <a class="navbar-tool d-none d-lg-flex" href="account-wishlist.html">
                <span class="navbar-tool-tooltip">Wishlist</span>
                <div class="navbar-tool-icon-box ">
                  <i class="navbar-tool-icon czi-heart"></i>
                  </div>
                </a> -->
                        <div class="mini-cart navbar-tool dropdown mr-3">
                            <a class="navbar-tool-icon-box bg-secondary dropdown-toggle "
                                href="{{ route('cart-item') }}">
                                <span
                                    class="navbar-tool-label uk-cart-count">{{ Gloudemans\Shoppingcart\Facades\Cart::count() }}</span>
                                <i class="navbar-tool-icon czi-cart"></i>
                            </a>
                            <a class="navbar-tool-text" href="{{ route('cart-item') }}" id="sub-total"><small>My
                                    Cart</small>Rs.{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</a>
                            <!-- Cart dropdown-->
                            {{-- <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                                <div class="widget widget-cart px-3 pt-2 pb-3">
                                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                        <div class="widget-cart-item pb-2 border-bottom">
                                            <button class="close text-danger" type="button"
                                                aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="media align-items-center"><a class="d-block mr-2"
                                                    href="detail.php"><img width="64"
                                                        src="img/computer/computer1.webp" alt="Product" /></a>
                                                <div class="media-body">
                                                    <h6 class="widget-product-title"><a href="detail.php">Dell XPS 16
                                                            9640 2024</a></h6>
                                                    <div class="widget-product-meta"><span
                                                            class="text-accent mr-2">Rs. 10,000</span><span
                                                            class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                        <div class="font-size-sm mr-2 py-2"><span
                                                class="text-muted">Subtotal:</span><span
                                                class="text-accent font-size-base ml-1">Rs. 50,000</span></div><a
                                            class="btn btn-outline-secondary btn-sm" href="cart.php">Expand cart<i
                                                class="czi-arrow-right ml-1 mr-n1"></i></a>
                                    </div><a class="btn btn-primary btn-sm btn-block" href="checkout.php"><i
                                            class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                                </div>
                            </div> --}}
                        </div>
                        <a class="navbar-tool ml-2 ml-lg-0 mr-n1 mr-lg-2" href="#signin-modal" data-toggle="modal">
                            <div class="navbar-tool-icon-box bg-secondary"><i class="navbar-tool-icon czi-user"></i>
                            </div>
                            <div class="navbar-tool-text ml-1"><small>Hello, Sign in</small>My Account</div>
                        </a>


                    </div>
                </div>
            </div>
            <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-0">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <!-- Search-->
                        <div class="input-group-overlay d-lg-none my-3 row">
                            <div class="col-11">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                            class="czi-search"></i></span></div>
                                <input class="form-control prepended-form-control" type="text"
                                    placeholder="Search for products">
                            </div>
                            <div class="col-1 p-0">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbar" aria-controls="navbars" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <!-- <span class="navbar-toggler-icon"></span> -->
                                    <i class ="czi-view-list text-white"></i>
                                </button>
                            </div>

                        </div>

                        <div class="container-fluid p-0">
                            <div class="row w-100">
                                <div class="col-12">
                                    <!-- <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button> -->
                                    <div class="collapse navbar-collapse" id="navbar">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ route('index') }}">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="about.php">About Us</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="service-list.php">Service</a></li>
                                            @foreach ($cat as $value)
                                                <li class="nav-item dropdown megamenu-li">
                                                    <a class="nav-link dropdown-toggle d-flex align-items-center"
                                                        href="" id="dropdown01" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        {{ $value->name }} <span
                                                            class="d-none d-md-block">&#9662;</span> </a>
                                                    @if ($value->subCategory->isNotEmpty())
                                                        <div class="dropdown-menu megamenu p-0"
                                                            aria-labelledby="dropdown01">
                                                            <div class="custom-cols-5">
                                                                @foreach ($value->subCategory as $child)
                                                                    <div class="col-5th mb-3 mb-md-0 p-4">
                                                                        <h5 class="font-secondary">{{ $child->name }}
                                                                        </h5>
                                                                        <hr>
                                                                        @if ($child->subCategory->isNotEmpty())
                                                                            @foreach ($child->subCategory as $child2)
                                                                                <a class="dropdown-item pl-0 pb-0"
                                                                                    href="{{ route('product-list', $child2->slug) }}">{{ $child2->name }}</a>
                                                                            @endforeach
                                                                        @endif

                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endif
                                                </li>
                                            @endforeach
                                            {{-- <li class="nav-item"><a class="nav-link" href="list.php">Television</a> --}}
                                            </li>

                                        </ul>
                                    </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
