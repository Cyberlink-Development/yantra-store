@extends('frontend.include.master')
@section('content')
    <!-- Hero slider start -->
    @if($banners->count() > 0)
        <section class="cz-carousel cz-controls-lg">
            <div class="cz-carousel-inner" data-carousel-options='{"mode": "gallery", "responsive": {"0":{"nav":true, "controls": true},"992":{"nav":false, "controls": true}}}'>
                @foreach($banners as $row)
                    <div>
                        @php
                            $imagePath = $row->picture
                                ? asset('uploads/banners/' . $row->picture)
                                : asset('theme-assets/img/default-banner.png');
                        @endphp

                        @if($row->link)
                            <a href="{{ $row->link }}">
                                <img src="{{ $imagePath }}" alt="{{ $row->title }}">
                            </a>
                        @else
                            <img src="{{ $imagePath }}" alt="{{ $row->title }}">
                        @endif
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    <!-- Hero slider end -->

    <!-- scrolling text start-->
    <div class="scontainer">
        <div class="horizontal-scrolling-items">
            <div class="horizontal-scrolling-items__item mr-5">
                <a href="list.php">
                    🎉 Big Sale! Up to 50% OFF on Selected Items
                </a>
            </div>
            <div class="horizontal-scrolling-items__item mr-5">
                <a href="list.php">
                    🚚 Free Shipping on Orders Over $50!
                </a>
            </div>
            <div class="horizontal-scrolling-items__item mr-5">
                <a href="list.php">
                    💥 Flash Sale Ends Tonight – Hurry Up!
                </a>
            </div>
            <div class="horizontal-scrolling-items__item mr-5">
                <a href="list.php">
                    🎉 Big Sale! Up to 50% OFF on Selected Items
                </a>
            </div>
            <div class="horizontal-scrolling-items__item mr-5">
                <a href="list.php">
                    🚚 Free Shipping on Orders Over $50!
                </a>
            </div>
            <div class="horizontal-scrolling-items__item mr-5">
                <a href="list.php">
                    💥 Flash Sale Ends Tonight – Hurry Up!
                </a>
            </div>
        </div>
    </div>
    <!-- scrolling text end -->

    <!-- Categories start-->
    <section class="container-fluid  categories px-4 px-md-5 mt-5">
        <!-- Product carousel-->
        <div class="container-fluid">
            <div class="cz-carousel cz-controls-static cz-controls-outside p-0">
                <div class="cz-carousel-inner" data-carousel-options='{
                        "items": null,
                        "controls": true,
                        "nav": false,
                        "autoHeight": true,
                        "responsive": {
                            "0": { "items": 1 },
                            "500": { "items": 1, "gutter": 10 },
                            "768": { "items": 2, "gutter": 0 },
                            "1100": { "items": 4, "gutter": 20 }
                        }
                    }'
                >
                    <div>
                        <div class=" py-4 d-flex bg-image rounded align-items-center">
                            <div class="col-6 col-xl-5 pr-0">
                                <img class="img-fluid" src="img/offer/offer1.png" alt="Image Description">
                            </div>
                            <div class="col-6 col-xl-7 col-wd-6">
                                <div class="mb-2 pb-1 text-white">
                                    CATCH BIG <strong>DEALS</strong> ON THE MOTHERBOARD
                                </div>
                                <a class="btn-offer" href="#">Shop Now <i class="czi-arrow-right-circle ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=" py-4 d-flex bg-image rounded align-items-center">
                            <div class="col-6 col-xl-5 pr-0">
                                <img class="img-fluid" src="img/offer/offer2.png" alt="Image Description">
                            </div>
                            <div class="col-6 col-xl-7 col-wd-6">
                                <div class="mb-2 pb-1 text-white">
                                    CATCH BIG <strong>DEALS</strong> ON THE CABIENTBOARD
                                </div>
                                <a class="btn-offer" href="#">Shop Now <i class="czi-arrow-right-circle ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=" py-4 d-flex bg-image rounded align-items-center">
                            <div class="col-6 col-xl-5 pr-0">
                                <img class="img-fluid" src="img/offer/offer3.png" alt="Image Description">
                            </div>
                            <div class="col-6 col-xl-7 col-wd-6">
                                <div class="mb-2 pb-1 text-white">
                                    CATCH BIG <strong>DEALS</strong> ON THE MEMORIES
                                </div>
                                <a class="btn-offer" href="#">Shop Now <i class="czi-arrow-right-circle ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=" py-4 d-flex bg-image rounded align-items-center">
                            <div class="col-6 col-xl-5 pr-0">
                                <img class="img-fluid" src="img/offer/offer4.png" alt="Image Description">
                            </div>
                            <div class="col-6 col-xl-7 col-wd-6">
                                <div class="mb-2 pb-1 text-white">
                                    CATCH BIG <strong>DEALS</strong> ON THE POWERSUPPLY
                                </div>
                                <a class="btn-offer" href="#">Shop Now <i class="czi-arrow-right-circle ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=" py-4 d-flex bg-image rounded align-items-center">
                            <div class="col-6 col-xl-5 pr-0">
                                <img class="img-fluid" src="img/offer/offer1.png" alt="Image Description">
                            </div>
                            <div class="col-6 col-xl-7 col-wd-6">
                                <div class="mb-2 pb-1 text-white">
                                    CATCH BIG <strong>DEALS</strong> ON THE PROCESSOR
                                </div>
                                <a class="btn-offer" href="#">Shop Now <i class="czi-arrow-right-circle ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories -->
    </section>
    <!-- Categories end-->

    <!-- Sales products start-->
    <section class="container-fluid px-4 px-md-5 mt-4">
        <div class="row d-flex align-items-center justify-content-center mb-4">
            <div class="col-md-12 text-center">
                <div>
                    <span class="sales-badge mb-0 ml-1">Fla<span class="bolt">&#9889</span>h sale</span>
                </div>
                <div class="timer">
                    <div class="text-center">
                        <div class="time-box" id="days">00</div>
                        <span class="cz-handheld-toolbar-label">DAYS</span>
                    </div>
                    <div class="colon">:</div>
                    <div class="text-center">
                        <div class="time-box" id="hours">00</div>
                        <span class="cz-handheld-toolbar-label">HOURS</span>
                    </div>
                    <div class="colon">:</div>
                    <div class="text-center">
                        <div class="time-box" id="minutes">00</div>
                        <span class="cz-handheld-toolbar-label">MINUTE</span>
                    </div>
                    <div class="colon">:</div>
                    <div class="text-center">
                        <div class="time-box" id="seconds">00</div>
                        <span class="cz-handheld-toolbar-label">SECONDS</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-cols-5 pt-4 m-n3">
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <div class="ribbon"> 8% <br> OFF</div>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer1.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer2.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                <del class="font-size-sm text-danger">RS. 5,50,000</del>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <div class="ribbon"> 8% <br> OFF</div>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                <del class="font-size-sm text-danger">RS. 5,50,000</del>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <div class="ribbon"> 8% <br> OFF</div>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                <del class="font-size-sm text-danger">RS. 5,50,000</del>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <div class="ribbon"> 8% <br> OFF</div>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                <del class="font-size-sm text-danger">RS. 5,50,000</del>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <div class="ribbon"> 8% <br> OFF</div>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                <del class="font-size-sm text-danger">RS. 5,50,000</del>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Sales products end-->

    <!-- Hot deals start-->
    <section class="container-fluid px-4 px-md-5 mt-4">
        <div class="row  mb-4">
            <div class="col-md-12">
                <div>
                    <h2 class=" h3 mb-0 ml-1 text-uppercase font-weight-bold font-secondary">
                        H<img src="img/hot.png" alt="fire" border="0" style="height:30px;  margin-bottom: 10px;">t Deals
                    </h2>
                </div>
            </div>
        </div>

        <div class="custom-cols-5 pt-4 m-n3">
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge hot-rating"><img src="img/hot.png" alt="fire" border="0"></span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer1.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer2.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                <del class="font-size-sm text-danger">RS. 5,50,000</del>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge hot-rating"><img src="img/hot.png" alt="fire" border="0"></span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                <del class="font-size-sm text-danger">RS. 5,50,000</del>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge hot-rating"><img src="img/hot.png" alt="fire" border="0"></span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                <del class="font-size-sm text-danger">RS. 5,50,000</del>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge hot-rating"><img src="img/hot.png" alt="fire" border="0"></span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                <del class="font-size-sm text-danger">RS. 5,50,000</del>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge hot-rating"><img src="img/hot.png" alt="fire" border="0"></span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                <del class="font-size-sm text-danger">RS. 5,50,000</del>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hot products end-->

    <!-- Ad section start-->
    <section class="container-fluid px-4 px-md-5">
        <div class="row">
            <div class="col-md-6 my-1 px-1">
                <a href="list.php">
                    <img src="img/ads/ad2.jpg" class="rounded img-fluid" alt"" />
                </a>
            </div>
            <div class="col-md-6 my-1 px-1">
                <a href="list.php">
                    <img src="img/ads/ad1.jpg" class="rounded img-fluid" alt"" />
                </a>
            </div>
        </div>
    </section>
    <!-- Ad section end -->

    <!-- Latest Launches / New Arrivals products start-->
    <section class="container-fluid mb-md-3 px-4 px-md-5">
        <div class="row d-flex align-items-end  mb-3">
            <div class="col-md-6 d-flex  flex-column align-items-center align-items-md-start">
                <h2 class="section-title mb-0">Latest Launches</h2>
            </div>
            <div class="col-md-6 d-none d-md-flex justify-content-end">
                <div class="text-center pt-3">
                    <a class="btn btn-primary btn-sm pl-2" href="list.php">View All Products<i
                            class="czi-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>

        <div class="custom-cols-5 pt-4 m-n3">
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge new-badge"> New</span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer5.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer5.png" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge new-badge"> New</span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge new-badge"> New</span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge new-badge"> New</span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer6.jpeg" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer10.jpeg" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge new-badge"> New</span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer11.jpeg" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer12.jpeg" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge new-badge"> New</span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer6.jpeg" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer10.jpeg" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge new-badge"> New</span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge new-badge"> New</span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge new-badge"> New</span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer11.jpeg" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer12.jpeg" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-4">
                <div class="card product-card translate p-0">
                    <span class="badge new-badge"> New</span>
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer5.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer5.png" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row d-flex  justify-content-center d-md-none mb-3">
            <div class="text-center pt-3">
                <a class="btn btn-primary btn-sm pl-2" href="list.php">View All Products<i
                        class="czi-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>
    <!-- Latest Launches / New Arrivals products end-->

    <!-- category section start -->
    @if($categories->count() > 0)
        <section class="container-fluid px-4 px-md-5 mb-5">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-0">Categories</h2>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $row)
                    <div class="col-lg-3 col-md-4 col-6 category-div">
                        <a href="{{ route('product-list', $row->slug) }}" class="text-center">
                            <img class="img-fluid" src="{{$row->banner ? asset('uploads/banners/'.$row->banner) : asset('theme-assets/img/default-thumbnail.jpeg')}}" alt="">
                            <p>{{$row->name}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    <!-- category section end-->

    <!-- Ad section start-->
    <div class="container-fluid ad-section mb-md-3 px-4 px-md-5">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="d-sm-flex justify-content-between align-items-center bg-image overflow-hidden rounded-lg">
                    <div class="py-4 my-2 my-md-0 py-md-5 px-4 ml-md-3 text-center text-sm-left">
                        <h4 class="font-size-lg font-weight-light mb-2 text-white">Hurry up! Limited time offer</h4>
                        <h3 class="mb-4 text-white">Grab all the discount Appliances</h3><a
                            class="btn btn-primary btn-shadow btn-sm" href="list.php">Shop Now</a>
                    </div>
                    <img class="d-block ml-auto " src="img/ads/computer.webp" alt="Shop Converse">
                </div>
            </div>
        </div>
    </div>
    <!--End of Ad section end-->

    <!-- feature products start-->
    <section class="container-fluid px-4 px-md-5">
        <div class="row d-flex align-items-end  mb-3">
            <div class="col-md-6 d-flex  flex-column align-items-center align-items-md-start">
                <span class="feature-badge">Featured</span>
                <h2 class="section-title mb-0 ml-1">Featured Products</h2>
            </div>
            <div class="col-md-6 d-none d-md-flex justify-content-end">
                <div class="text-center pt-3">
                    <a class="btn btn-primary btn-sm pl-2" href="list.php">View All Products<i
                            class="czi-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>

        <div class="row pt-4 m-n3">
            <!-- Product-->
            <div class="col-lg col-md-4 col-6 px-1 mb-4">
                <div class="card product-card translate p-0">

                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer1.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer2.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>

                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-lg col-md-4  col-6 px-1 mb-4">
                <div class="card product-card translate p-0">

                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>

                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-lg col-md-4 col-6 px-1 mb-4">
                <div class="card product-card translate p-0">

                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>

                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-lg col-md-4 col-6 px-1 mb-4">
                <div class="card product-card translate p-0">

                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>

                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-lg col-md-4 col-6 px-1 mb-4">
                <div class="card product-card translate p-0">

                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>

                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row d-flex  justify-content-center d-md-none">
            <div class="text-center pt-3">
                <a class="btn btn-primary btn-sm pl-2" href="list.php">View All Products<i
                        class="czi-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>
    <!-- featured products  end-->
    <!-- Gone in seconds category start-->
    <section class="container-fluid px-4 px-md-5 mt-4">
        <div class="row">
            <!-- Banner with controls-->
            <div class="col-md-4">
                <div>
                    <div><a class=" mt-auto" href="list.php"><img class="d-block w-100 rounded-lg" src="img/ads/promo.png"
                                alt=""></a></div>
                    <div class="mt-2"><a class=" mt-2" href="list.php"><img class="d-block w-100 rounded-lg"
                                src="https://i.imgur.com/LDzCEGE.jpeg" alt=""></a></div>
                </div>
            </div>
            <!-- Product grid (carousel)-->
            <div class="col-md-8 pt-4 pt-md-0">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <h2 class="section-title mb-0 ml-1">Gone in seconds</h2>
                    </div>
                    <div>
                        <div class="cz-custom-controls" id="hoodie-day">
                            <button type="button"><i class="czi-arrow-left"></i></button>
                            <button type="button"><i class="czi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="cz-carousel">
                    <div class="cz-carousel-inner"
                        data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#hoodie-day&quot;}">
                        <!-- Carousel item-->
                        <div>
                            <div class="row mx-n2">
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer3.webp" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer4.webp" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer10.jpeg" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer11.jpeg" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer5.png" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer9.jpeg" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer10.jpeg" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer11.jpeg" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                            </div>
                        </div>
                        <!-- Carousel item-->
                        <div>
                            <div class="row mx-n2">
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer3.webp" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer4.webp" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer10.jpeg" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer11.jpeg" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer5.png" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer9.jpeg" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card translate p-0">
                                        <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left">
                                            <i class="czi-cart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden" href="detail.php">
                                            <div class="image-hover-box">
                                                <img src="img/computer/computer10.jpeg" alt="" class="main-img img-fluid">
                                                <img src="img/computer/computer11.jpeg" alt="" class="hover-img img-fluid">
                                            </div>
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                            <h3 class="product-title font-size-sm mb-2">
                                                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel
                                                    Core i5 12450HX Processor)</a>
                                            </h3>
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled active-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                    <i class="sr-star czi-star-filled inactive-star"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-sm-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gone in seconds category end-->

    <!-- shop by brand start -->
    <section class="container-fluid categories mt-3 mt-md-0  mb-3  px-4 px-md-5">
        <!-- Product carousel-->
        <div class="container ">
            <div class="row d-flex justify-content-center mb-4">
                <h2 class="section-title mb-0 text-center">Shop By Brands</h2>
            </div>
            <div class="cz-carousel cz-controls-static cz-controls-outside p-0">
                <div class="cz-carousel-inner"
                    data-carousel-options='{"items": 2, "controls": true, "nav": false, "autoHeight": true, "responsive": {"0":{"items":2},"500":{"items":3, "gutter": 10},"768":{"items":4, "gutter": 0}, "1100":{"items":6, "gutter": 0}}}'>
                    <div>
                        <div class="  d-flex  rounded align-items-center">
                            <div class="card product-card translate w-100 p-0">
                                <a class="card-img-top d-block overflow-hidden" href="list.php">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFzTFbgoLfNcWe-f24Qy_AfNUnBN3UnvX9kw&s"
                                        alt="Product" style="height: 55px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="  d-flex  rounded align-items-center">
                            <div class="card product-card translate w-100 p-0">
                                <a class="card-img-top d-block overflow-hidden" href="list.php">
                                    <img src="https://1000logos.net/wp-content/uploads/2016/09/Acer-Logo.png" alt="Product"
                                        style="height: 55px;"></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="  d-flex  rounded align-items-center">
                            <div class="card product-card translate w-100 p-0">
                                <a class="card-img-top d-block overflow-hidden w-100" href="list.php">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXDFh6WJwMiPvxMt3gibuppGzu_p5PkwYucg&s"
                                        alt="Product" style="height: 55px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="  d-flex  rounded align-items-center">
                            <div class="card product-card translate w-100 p-0">
                                <a class="card-img-top d-block overflow-hidden w-100" href="list.php">
                                    <img src="https://dmassets.micron.com/is/image/microntechnology/logo-intel-color?ts=1746204044637&dpr=off"
                                        alt="Product" style="height: 55px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="  d-flex  rounded align-items-center">
                            <div class="card product-card translate w-100 p-0">
                                <a class="card-img-top d-block overflow-hidden" href="list.php">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFzTFbgoLfNcWe-f24Qy_AfNUnBN3UnvX9kw&s"
                                        alt="Product" style="height: 55px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="  d-flex  rounded align-items-center">
                            <div class="card product-card translate w-100 p-0">
                                <a class="card-img-top d-block overflow-hidden" href="list.php">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFzTFbgoLfNcWe-f24Qy_AfNUnBN3UnvX9kw&s"
                                        alt="Product" style="height: 55px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="  d-flex  rounded align-items-center">
                            <div class="card product-card translate w-100 p-0">
                                <a class="card-img-top d-block overflow-hidden" href="list.php">
                                    <img src="https://1000logos.net/wp-content/uploads/2016/09/Acer-Logo.png" alt="Product"
                                        style="height: 55px;"></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="  d-flex  rounded align-items-center">
                            <div class="card product-card translate w-100 p-0">
                                <a class="card-img-top d-block overflow-hidden" href="list.php">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXDFh6WJwMiPvxMt3gibuppGzu_p5PkwYucg&s"
                                        alt="Product" style="height: 55px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="  d-flex  rounded align-items-center">
                            <div class="card product-card translate w-100 p-0">
                                <a class="card-img-top d-block overflow-hidden" href="list.php">
                                    <img src="https://dmassets.micron.com/is/image/microntechnology/logo-intel-color?ts=1746204044637&dpr=off"
                                        alt="Product" style="height: 55px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="  d-flex  rounded align-items-center">
                            <div class="card product-card translate w-100 p-0">
                                <a class="card-img-top d-block overflow-hidden" href="list.php">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFzTFbgoLfNcWe-f24Qy_AfNUnBN3UnvX9kw&s"
                                        alt="Product" style="height: 55px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop by brand end -->

    <!-- Ad section start-->
    <div class=" container-fluid px-4 px-md-5 mb-md-3">
        <div class="row">
            <div class="col-md-12">
                <a href="list.php">
                    <img src="img/index3.webp" class="img-fluid" alt="" class="rounded-lg">
                </a>
            </div>
        </div>
    </div>
    <!--Ad section end -->

    <!-- Product for you start-->
    <section class="container-fluid px-4 px-md-5  mt-3 mt-md-0">
        <div class="row d-flex align-items-center justify-content-center  mb-3">
            <div class="col-12 text-center">
                <h2 class="section-title mb-0">Products for You</h2>
            </div>
        </div>
        <div class="custom-cols-5 pt-4 m-n3">
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer5.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer5.png" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer6.jpeg" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer10.jpeg" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer11.jpeg" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer12.jpeg" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer5.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer5.png" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer6.jpeg" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer10.jpeg" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer11.jpeg" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer12.jpeg" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer5.webp" alt="Main" class="main-img img-fluid">
                            <img src="img/computer/computer5.png" alt="Hover" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer6.jpeg" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer10.jpeg" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Product-->
            <div class="col-5th px-1 mb-2">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                        <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                        <div class="image-hover-box">
                            <img src="img/computer/computer11.jpeg" alt="" class="main-img img-fluid">
                            <img src="img/computer/computer12.jpeg" alt="" class="hover-img img-fluid">
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX
                                Processor)</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                                <i class="sr-star czi-star-filled inactive-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="font-midnight">RS. 4,50,000</span>
                            </div>
                        </div>
                    </div>
                    <a href="detail.php">
                        <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                    BUY NOW
                                </h3>
                            </div>
                            <div>
                                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center mt-3">
            <div class="text-center pt-3">
                <a class="btn btn-primary  " href="list.php">More Products <span><i style="font-size: 12px;"
                            class="czi-arrow-right ml-1 mr-1 font-weight-bold "></i></span></a>
            </div>
        </div>
    </section>
    <!-- Product for you end-->

    <!--service section start-->
    <section class="container-fluid px-4 px-md-5 mt-4">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="section-title mb-0">Services we Provide</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-6 p-1 large-top">
                <div class="bg-white rounded-lg">
                    <div class="p-2 h-320">
                        <a href="service.php">
                            <img src="img/service/cloud.png" class="service-list-img">
                        </a>
                        <a href="service.php" class="text-center">
                            <p class="services-span">Cloud Computing</p>
                        </a>
                        <p class="services-p text-center">By accessing this website or placing an order, you agree to accept
                            all the terms listed below.</p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="price-badge text-center">Rs. 40,000</div>
                            </div>
                            <div class="col-12 p-0">
                                <a href="#quote" data-toggle="modal" class="quote-badge text-center">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6 p-1 large-top">
                <div class="bg-white rounded-lg">
                    <div class="p-2 h-320">
                        <a href="service.php">
                            <img src="img/service/azure.png" class="service-list-img">
                        </a>
                        <a href="service.php" class="text-center">
                            <p class="services-span">Azure</p>
                        </a>
                        <p class="services-p text-center">
                            By accessing this website or placing an order, you agree to accept all the terms listed below.
                        </p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="price-badge text-center">Rs. 40,000</div>
                            </div>
                            <div class="col-12 p-0">
                                <a href="#quote" data-toggle="modal" class="quote-badge text-center">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-6 p-1 large-top">
                <div class="bg-white rounded-lg">
                    <div class="p-2 h-320">
                        <a href="service.php">
                            <img src="img/service/vps.png" class="service-list-img">
                        </a>
                        <a href="service.php" class="text-center">
                            <p class="services-span">VPS</p>
                        </a>
                        <p class="services-p text-center">
                            By accessing this website or placing an order, you agree to accept all the terms listed below.
                        </p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="price-badge text-center">Rs. 40,000</div>
                            </div>
                            <div class="col-12 p-0">
                                <a href="#quote" data-toggle="modal" class="quote-badge text-center">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-6 p-1 large-top">
                <div class="bg-white rounded-lg">
                    <div class="p-2 h-320">
                        <a href="service.php">
                            <img src="img/service/colocation.png" class="service-list-img">
                        </a>
                        <a href="service.php" class="text-center">
                            <p class="services-span">Colocation</p>
                        </a>
                        <p class="services-p text-center">
                            By accessing this website or placing an order, you agree to accept all the terms listed below.
                        </p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="price-badge text-center">Rs. 4,00,000</div>
                            </div>
                            <div class="col-12 p-0">
                                <a href="#quote" data-toggle="modal" class="quote-badge text-center">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6 p-1 large-top">
                <div class="bg-white rounded-lg">
                    <div class="p-2 h-320">
                        <a href="service.php">
                            <img src="img/service/it.png" class="service-list-img">
                        </a>
                        <a href="service.php" class="text-center">
                            <p class="services-span">IT Consulting</p>
                        </a>
                        <p class="services-p text-center">
                            By accessing this website or placing an order, you agree to accept all the terms listed below.
                        </p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="price-badge text-center">Rs. 40,000</div>
                            </div>
                            <div class="col-12 p-0">
                                <a href="#quote" data-toggle="modal" class="quote-badge text-center">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-6 p-1 large-top">
                <div class="bg-white rounded-lg">
                    <div class="p-2 h-320">
                        <a href="service.php">
                            <img src="img/service/implementation.png" class="service-list-img">
                        </a>
                        <a href="service.php" class="text-center">
                            <p class="services-span">Implementation Service</p>
                        </a>
                        <p class="services-p text-center">
                            By accessing this website or placing an order, you agree to accept all the terms listed below.
                        </p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="price-badge text-center">Rs. 40,000</div>
                            </div>
                            <div class="col-12 p-0">
                                <a href="#quote" data-toggle="modal" class="quote-badge text-center">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-6 p-1 large-top">
                <div class="bg-white rounded-lg">
                    <div class="p-2 h-320">
                        <a href="service.php">
                            <img src="img/service/audit.png" class="service-list-img">
                        </a>
                        <a href="service.php" class="text-center">
                            <p class="services-span">Audit Support</p>
                        </a>
                        <p class="services-p text-center">
                            By accessing this website or placing an order, you agree to accept all the terms listed below.
                        </p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="price-badge text-center">Rs. 40,000</div>
                            </div>
                            <div class="col-12 p-0">
                                <a href="#quote" data-toggle="modal" class="quote-badge text-center">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-6 p-1 large-top">
                <div class="bg-white rounded-lg">
                    <div class="p-2 h-320">
                        <a href="service.php">
                            <img src="img/service/server.png" class="service-list-img">
                        </a>
                        <a href="service.php" class="text-center">
                            <p class="services-span">Server Support</p>
                        </a>
                        <p class="services-p text-center">
                            By accessing this website or placing an order, you agree to accept all the terms listed below.
                        </p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="price-badge text-center">Rs. 40,000</div>
                            </div>
                            <div class="col-12 p-0">
                                <a href="#quote" data-toggle="modal" class="quote-badge text-center">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-12 d-flex justify-content-center mt-3 ">
            <div class="text-center pt-3 large-top">
                <a class="btn btn-primary  " href="service-list.php">View All Services <span><i style="font-size: 12px;"
                            class="czi-arrow-right ml-1 mr-1 font-weight-bold "></i></span></a>
            </div>
        </div>

    </section>
    <!--service section end-->
    <!--quote modal start-->
    <div class="modal fade" id="quote" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h3 m-0">Get a Quote</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body tab-content py-4">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quote-name">Full Name</label>
                                    <input class="form-control" type="text" id="quote-name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quote-email">Email address</label>
                                    <input class="form-control" type="email" id="quote-email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quote-phone">Phone</label>
                                    <input class="form-control" type="number" id="quote-phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quote-address">Address</label>
                                    <input class="form-control" type="text" id="quote-address" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="quote-service">Service</label>
                                    <select class="custom-select">
                                        <option value="1">Cloud Computing</option>
                                        <option value="2">Coloaction</option>
                                        <option value="3">Audit Support</option>
                                        <option value="4">It Sercives</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="mb-3" for="message">Message</label>
                                    <textarea class="form-control" rows="4" id="messasge"></textarea>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block btn-shadow" type="submit">Send the quote</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--quote modal end-->
    <script>
        document.querySelectorAll('.image-hover-box').forEach(box => {
            const mainImg = box.querySelector('.main-img');
            const hoverImg = box.querySelector('.hover-img');

            if (mainImg && hoverImg && hoverImg.getAttribute('src')) {
                box.classList.add('has-hover');
            }
        });
    </script>

    <script>
        const targetDate = new Date("2025-07-30T00:00:00");

        const updateTimer = () => {
            const now = new Date();
            const diff = targetDate - now;

            if (diff <= 0) {
                document.getElementById("days").textContent = "00";
                document.getElementById("hours").textContent = "00";
                document.getElementById("minutes").textContent = "00";
                document.getElementById("seconds").textContent = "00";
                clearInterval(timerInterval);
                return;
            }

            const totalSeconds = Math.floor(diff / 1000);

            const days = Math.floor(totalSeconds / 86400);
            const hours = Math.floor((totalSeconds % 86400) / 3600);
            const minutes = Math.floor((totalSeconds % 3600) / 60);
            const seconds = totalSeconds % 60;

            document.getElementById("days").textContent = String(days).padStart(2, "0");
            document.getElementById("hours").textContent = String(hours).padStart(2, "0");
            document.getElementById("minutes").textContent = String(minutes).padStart(2, "0");
            document.getElementById("seconds").textContent = String(seconds).padStart(2, "0");
        };

        const timerInterval = setInterval(updateTimer, 1000);
        updateTimer();
    </script>
    <script>
        function addToCart(e,productId){
            e.preventDefault();
            $.ajax({
                url: "{{ route('cart-add') }}",
                type:'POST',
                data: {
                    'product_id' : productId,
                    'quantity' : 1,
                    '_token': '{{ csrf_token() }}'
                },
                success:function(res){
                    ajax_response(res);
                    $('#cartNav').html(res.view);
                }
            });
        }
    </script>
@stop
