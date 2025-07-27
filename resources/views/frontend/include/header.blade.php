 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Yantra Network</title>
  <!-- SEO Meta Tags-->
  <meta name="description" content="Rasanpani">
  <meta name="keywords" content="Rasanpani">
  <meta name="author" content="Rasanpani">
  <!-- Viewport-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon and Touch Icons-->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
  <link rel="stylesheet" media="screen" href="{{asset('theme-assets/vendor/simplebar/dist/simplebar.min.css')}}" />
  <link rel="stylesheet" media="screen" href="{{asset('theme-assets/vendor/tiny-slider/dist/tiny-slider.css')}}" />
  <link rel="stylesheet" media="screen" href="{{asset('theme-assets/vendor/drift-zoom/dist/drift-basic.min.css')}}" />
  <link rel="stylesheet" media="screen" href="{{asset('theme-assets/vendor/lightgallery.js/dist/css/lightgallery.min.css')}}" />
  <link rel="stylesheet" media="screen" href="{{asset('theme-assets/vendor/nouislider/distribute/nouislider.min.css')}}" />


  <!-- Main Theme Styles + Bootstrap-->
  <link rel="stylesheet" media="screen" href="{{asset('theme-assets/css/theme.min.css')}}">
  <link rel="stylesheet" media="screen" href="{{asset('theme-assets/css/theme.css')}}">

  <style>
        /********* google captcha *********/
      .grecaptcha-badge{
          display: none!important;
      }
    </style>
    <style>
        /* Custom notification styles */
        .uk-notification-message-danger {
            background-color: #ffebee !important;
            color: #c62828 !important;
            border-left: 4px solid #d32f2f !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        }
        .uk-notification-message-danger .uk-notification-close {
            color: #c62828 !important;
        }
        .uk-notification-message-danger:hover {
            background-color: #ffcdd2 !important;
        }

        .uk-notification-message-success {
            background-color: #e8f5e9 !important;
            color: #2e7d32 !important;
            border-left: 4px solid #4caf50 !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        }
        .uk-notification-message-success .uk-notification-close {
            color: #2e7d32 !important;
        }
        .uk-notification-message-success:hover {
            background-color: #c8e6c9 !important;
        }

        .uk-notification-message-warning {
            background-color: #fff3e0 !important;
            color: #ff9800 !important;
            border-left: 4px solid #ffb74d !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        }
        .uk-notification-message-warning .uk-notification-close {
            color: #ff9800 !important;
        }
        .uk-notification-message-warning:hover {
            background-color: #ffe0b2 !important;
        }

        .uk-notification-message-info {
            background-color: #e3f2fd !important;
            color: #1976d2 !important;
            border-left: 4px solid #64b5f6 !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        }
        .uk-notification-message-info .uk-notification-close {
            color: #1976d2 !important;
        }
        .uk-notification-message-info:hover {
            background-color: #bbdefb !important;
        }

        /* Ensure the notification container is positioned correctly */
        .uk-notification {
            top: 10px !important; /* Adjust as needed */
            right: 10px !important; /* Adjust as needed */
            z-index: 100000 !important;
        }
    </style>
</head>
<!-- Body-->

<body class="toolbar-enabled">

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                @foreach ($errors->all() as $index => $error)
                    setTimeout(function() {
                        showNotification("{{ $error }}", 'danger');
                    }, {{ $index * 300 }}); // 300ms delay between each notification
                @endforeach
            });

            function showNotification(message, status) {
                UIkit.notification({
                    message: message,
                    status: status,
                    pos: 'top-right',
                    timeout: 5000,
                    click: true
                });
            }
        </script>
    @endif
    @if(session('success') || session('warning') || session('info') || session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                @if(session('success'))
                    showNotification("{{ session('success') }}", 'success');
                @endif
                @if(session('warning'))
                    showNotification("{{ session('warning') }}", 'warning');
                @endif
                @if(session('info'))
                    showNotification("{{ session('info') }}", 'info');
                @endif
                @if(session('error'))
                    showNotification("{{ session('error') }}", 'danger');
                @endif
            });

            function showNotification(message, status) {
                UIkit.notification({
                    message: message,
                    status: status,
                    pos: 'top-right',
                    timeout: 5000
                });
            }
        </script>
    @endif
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="form-group">
                <label for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group d-flex flex-wrap justify-content-between">
                <div class="custom-control custom-checkbox mb-2">
                  <input class="custom-control-input" type="checkbox" id="si-remember">
                  <label class="custom-control-label" for="si-remember">Remember me</label>
                </div><a class="font-size-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="form-group">
                <label for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="form-group">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
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
    
    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title product-title"><a href="detail.php" data-toggle="tooltip" data-placement="right" title="Go to product page">Sports Hooded Sweatshirt<i class="czi-arrow-right font-size-lg ml-2"></i></a></h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <!-- Product gallery-->
              <div class="col-lg-7 pr-lg-0">
                <div class="cz-product-gallery">
                  <div class="cz-preview order-sm-2">
                    <div class="cz-preview-item active" id="first"><img class="cz-image-zoom" src="img/shop/single/gallery/01.jpg" data-zoom="img/shop/single/gallery/01.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="second"><img class="cz-image-zoom" src="img/shop/single/gallery/02.jpg" data-zoom="img/shop/single/gallery/02.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="third"><img class="cz-image-zoom" src="img/shop/single/gallery/03.jpg" data-zoom="img/shop/single/gallery/03.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="fourth"><img class="cz-image-zoom" src="img/shop/single/gallery/04.jpg" data-zoom="img/shop/single/gallery/04.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                  </div>
                  <div class="cz-thumblist order-sm-1"><a class="cz-thumblist-item active" href="#first"><img src="img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#second"><img src="img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#third"><img src="img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#fourth"><img src="img/shop/single/gallery/th04.jpg" alt="Product thumb"></a></div>
                </div>
              </div>
              <!-- Product details-->
              <div class="col-lg-5 pt-4 pt-lg-0 cz-image-zoom-pane">
                <div class="product-details ml-auto pb-3">
                  <div class="d-flex justify-content-between align-items-center mb-2"><a href="detail.php#reviews">
                      <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                      </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span></a>
                    <button class="btn-wishlist" type="button" data-toggle="tooltip" title="Add to wishlist"><i class="czi-heart"></i></button>
                  </div>
                  <div class="mb-3"><span class="h3 font-weight-normal text-accent mr-1">$18.<small>99</small></span>
                    <del class="text-muted font-size-lg mr-3">$25.<small>00</small></del><span class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>
                  </div>
                  <div class="font-size-sm mb-4"><span class="text-heading font-weight-medium mr-1">Color:</span><span class="text-muted">Red/Dark blue/White</span></div>
                  <div class="position-relative mr-n4 mb-3">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color1" checked>
                      <label class="custom-option-label rounded-circle" for="color1"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color2">
                      <label class="custom-option-label rounded-circle" for="color2"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color3">
                      <label class="custom-option-label rounded-circle" for="color3"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                    </div>
                    <div class="product-badge product-available mt-n1"><i class="czi-security-check"></i>Product available</div>
                  </div>
                  <form class="mb-grid-gutter">
                    <div class="form-group">
                      <label class="font-weight-medium pb-1" for="product-size">Size:</label>
                      <select class="custom-select" required id="product-size">
                        <option value="">Select size</option>
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                      </select>
                    </div>
                    <div class="form-group d-flex align-items-center">
                      <select class="custom-select mr-3" style="width: 5rem;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                      <button class="btn btn-primary btn-shadow btn-block" type="submit"><i class="czi-cart font-size-lg mr-2"></i>Add to Cart</button>
                    </div>
                  </form>
                  <h5 class="h6 mb-3 pb-2 border-bottom"><i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product info</h5>
                  <h6 class="font-size-sm mb-2">Style</h6>
                  <ul class="font-size-sm pl-4">
                    <li>Hooded top</li>
                  </ul>
                  <h6 class="font-size-sm mb-2">Composition</h6>
                  <ul class="font-size-sm pl-4">
                    <li>Elastic rib: Cotton 95%, Elastane 5%</li>
                    <li>Lining: Cotton 100%</li>
                    <li>Cotton 80%, Polyester 20%</li>
                  </ul>
                  <h6 class="font-size-sm mb-2">Art. No.</h6>
                  <ul class="font-size-sm pl-4 mb-0">
                    <li>183260098</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar 3 Level (Light)-->
    <header class="box-shadow-sm">
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <div class="navbar-sticky bg-light">
        <div class="navbar navbar-expand-lg navbar-light">
          <div class="container">

            <a class="navbar-brand d-none d-sm-block mr-3 flex-shrink-0 p-0" href="index.php" style="min-width: 7rem;">
            <img width="60" src="img/logo.jpg" alt="Cyberlink"/>
          </a>

            <a class="navbar-brand d-sm-none mr-2" href="index.php" style="min-width: 4.625rem;"><img width="74" src="img/logo-icon.png" alt="Cyberlink"/></a>

            <div class="input-group-overlay d-none d-lg-flex mx-4">
              <input class="form-control appended-form-control" type="text" placeholder="Search for products">
              <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
            </div>
            <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
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
                <div class="navbar-tool dropdown mr-3">
                <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="cart.php">
                  <span class="navbar-tool-label">4</span>
                  <i class="navbar-tool-icon czi-cart"></i>
                </a>
                <a class="navbar-tool-text" href="cart.php"><small>My Cart</small>$265.00</a>
                <!-- Cart dropdown-->
                <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                  <div class="widget widget-cart px-3 pt-2 pb-3">
                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                      <div class="widget-cart-item pb-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="detail.php"><img width="64" src="img/computer/computer1.webp" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="detail.php">Dell XPS 16 9640 2024</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">Rs. 10,000</span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="detail.php"><img width="64" src="img/computer/computer2.webp" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="detail.php">Dell XPS 16 9640 2024</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">Rs. 10,000</span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="detail.php"><img width="64" src="img/computer/computer3.webp" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="detail.php">Dell XPS 16 9640 2024</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">Rs. 10,000</span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="detail.php"><img width="64" src="img/computer/computer4.webp" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="detail.php">Dell XPS 16 9640 2024</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">Rs. 10,000</span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                      <div class="font-size-sm mr-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent font-size-base ml-1">Rs. 50,000</span></div><a class="btn btn-outline-secondary btn-sm" href="cart.php">Expand cart<i class="czi-arrow-right ml-1 mr-n1"></i></a>
                    </div><a class="btn btn-primary btn-sm btn-block" href="checkout.php"><i class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                  </div>
                </div>
              </div>
              <a class="navbar-tool ml-2 ml-lg-0 mr-n1 mr-lg-2" href="#signin-modal" data-toggle="modal">
                <div class="navbar-tool-icon-box bg-secondary"><i class="navbar-tool-icon czi-user"></i></div>
                <div class="navbar-tool-text ml-1"><small>Hello, Sign in</small>My Account</div>
              </a>


            </div>
          </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-0">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <!-- Search-->
              <div class="input-group-overlay d-lg-none my-3">
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                <input class="form-control prepended-form-control" type="text" placeholder="Search for products">
              </div>

              <!-- Primary menu-->
              <ul class="navbar-nav mega-nav ">
                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="list.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="list.php">Television</a></li>
                <li class="nav-item"><a class="nav-link" href="list.php">Laptop</a></li>
                <li class="nav-item"><a class="nav-link" href="list.php">Phone</a></li>
                 <!--  -->
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle  " href="#" data-toggle="dropdown"> Desktop</a>
                    <ul class="dropdown-menu">
                      <!--  -->
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Laptop</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            <div class="mega-dropdown-column py-4 px-3">
                              <div class="widget widget-links">
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Acer</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Dell</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Lenvo</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Intel</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Apple</a></li>

                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <!--  -->


                      <!--  -->
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Procesor</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            <div class="mega-dropdown-column py-4 px-3">
                              <div class="widget widget-links">
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">First Generation</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Second Generation</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Third Generation</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Fourth Generation</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Fifth Generation</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sixth Generation</a></li>

                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <!--  -->


                    </ul>
                  </li>
                <!--  -->
                <li class="nav-item"><a class="nav-link" href="list.php">Tablet</a></li>
                <li class="nav-item"><a class="nav-link" href="list.php">Laptop</a></li>
                <li class="nav-item"><a class="nav-link" href="list.php">Phone</a></li>
                <li class="nav-item"><a class="nav-link" href="list.php">Tablet</a></li>
                <li class="nav-item"><a class="nav-link" href="list.php">Television</a></li>
                <li class="nav-item"><a class="nav-link" href="list.php">Laptop</a></li>
                <li class="nav-item"><a class="nav-link" href="list.php">Television</a></li>





              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
