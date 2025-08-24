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
    @if($categoriesMovingText->count () > 0)
        <div class="scontainer">
            <div class="horizontal-scrolling-items">
                @foreach($categoriesMovingText as $row)
                    <div class="horizontal-scrolling-items__item mr-5">
                        <a href="{{ route('product-list', $row->slug) }}">
                            {{$row->caption}}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    <!-- scrolling text end -->

    <!-- Categories start-->
    @if($categoriesSlider->count() > 0)
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
                        @foreach ($categoriesSlider as $row)
                            <div>
                                <div class=" py-4 d-flex bg-image rounded align-items-center">
                                    <div class="col-6 col-xl-5 pr-0">
                                        <img class="img-fluid" src="{{$row->banner ? asset('uploads/banners/'.$row->banner) : asset('theme-assets/img/default-thumbnail.jpeg')}}" alt="{{$row->name}}">
                                    </div>
                                    <div class="col-6 col-xl-7 col-wd-6">
                                        <div class="mb-2 pb-1 text-white">
                                            {{$row->caption}}
                                        </div>
                                        <a class="btn-offer" href="{{ route('product-list', $row->slug) }}">Shop Now <i class="czi-arrow-right-circle ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Categories -->
        </section>
    @endif
    <!-- Categories end-->

    <!-- Sales products start-->
    @if($flashSales->count() > 0)
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
                @foreach($flashSales as $row)
                    @php
                        $isPriced = ($row->discount_price || $row->price);
                    @endphp
                    <div class="col-5th px-1 mb-4">
                        <div class="card product-card translate p-0">
                            @if($isPriced)
                                @if($row->discount_price && $row->price)
                                    <div class="ribbon"> {{getDiscountPercentage($row->price,$row->discount_price)}} <br> OFF</div>
                                @endif
                                <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left" onclick="addToCart(event,{{ $row->id }})">
                                    <i class="czi-cart"></i>
                                </button>
                            @endif
                            <a class="card-img-top d-block overflow-hidden" href="{{route('product-single',$row->slug)}}">
                                <div class="image-hover-box">
                                    @php
                                        $main = $row->main_image ?? $row->hover_image;
                                        $hover = $row->hover_image;
                                    @endphp
                                    @if($main)
                                        <img src="{{ asset('images/products/' . $main->image) }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                    @else
                                        <img src="{{ asset('theme-assets/img/default-thumbnail.jpeg') }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                    @endif
                                    @if($hover)
                                        <img src="{{ asset('images/products/' . $hover->image) }}" alt="{{ $row->product_name }}" class="hover-img img-fluid">
                                    @endif
                                </div>
                            </a>
                            <div class="card-body py-2">
                                @if($row->categories->count() > 0)
                                    <a href="{{ route('product-list', $row->categories->first()->slug) }}" class="product-meta d-block font-size-xs pb-1">{{$row->categories->first()->name}}</a>
                                @endif
                                <h3 class="product-title font-size-sm mb-2">
                                    <a href="{{route('product-single',$row->slug)}}" class="two-line">{{ $row->product_name }}</a>
                                </h3>
                                <div class="mb-2">
                                    <div class="star-list d-flex">
                                        @php
                                            $stars = $row->star_ratings;
                                        @endphp
                                        @for ($i = 0; $i < $stars['full']; $i++)
                                            <i class="sr-star czi-star-filled active-star"></i>
                                        @endfor
                                        @if ($stars['half'])
                                            <i class="sr-star czi-star-half active-star"></i>
                                        @endif
                                        @for ($i = 0; $i < $stars['empty']; $i++)
                                            <i class="sr-star czi-star-filled inactive-star"></i>
                                        @endfor
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="product-price">
                                        @if($isPriced)
                                            <span class="font-midnight">Rs. {{ $row->discount_price ?? $row->price }}</span>
                                            @if($row->discount_price)
                                                <del class="font-size-sm text-danger">Rs. {{ $row->price }}</del>
                                            @endif
                                        @else
                                            <span class="font-midnight" style="visibility: hidden;"> Rs</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($isPriced)
                                <a href="javascript:void(0)" class="buy_now_btn" data-slug="{{ $row->slug }}">
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
                            @else
                                <a href="#quote" data-toggle="modal" data-item-id="{{ $row->id }}" data-price="{{ $row->price }}" data-name="{{ $row->product_name }}" data-type="product">
                                    <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="font-size-md mb-2 text-white text-center pt-2">
                                                Get a quote
                                            </h3>
                                        </div>
                                        <div>
                                            <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    <!-- Sales products end-->

    <!-- Hot deals start-->
    @if($hotProducts->count() > 0)
        <section class="container-fluid px-4 px-md-5 mt-4">
            <div class="row  mb-4">
                <div class="col-md-12">
                    <div>
                        <h2 class=" h3 mb-0 ml-1 text-uppercase font-weight-bold font-secondary">
                            H<img src="{{asset('theme-assets/img/hot.png')}}" alt="fire" border="0" style="height:30px;  margin-bottom: 10px;">t Deals
                        </h2>
                    </div>
                </div>
            </div>

            <div class="custom-cols-5 pt-4 m-n3">
                <!-- Product-->
                @foreach($hotProducts as $row)
                    @php
                        $isPriced = ($row->discount_price || $row->price);
                    @endphp
                    <div class="col-5th px-1 mb-4">
                        <div class="card product-card translate p-0">
                            <span class="badge hot-rating">
                                <img src="{{asset('theme-assets/img/hot.png')}}" alt="fire" border="0">
                            </span>
                            @if($isPriced)
                                <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left" onclick="addToCart(event,{{ $row->id }})">
                                    <i class="czi-cart"></i>
                                </button>
                            @endif
                            <a class="card-img-top d-block overflow-hidden" href="{{route('product-single',$row->slug)}}">
                                <div class="image-hover-box">
                                    @php
                                        $main = $row->main_image ?? $row->hover_image;
                                        $hover = $row->hover_image;
                                    @endphp
                                    @if($main)
                                        <img src="{{ asset('images/products/' . $main->image) }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                    @else
                                        <img src="{{ asset('theme-assets/img/default-thumbnail.jpeg') }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                    @endif
                                    @if($hover)
                                        <img src="{{ asset('images/products/' . $hover->image) }}" ="{{ $row->product_name }}" class="hover-img img-fluid">
                                    @endif
                                </div>
                            </a>
                            <div class="card-body py-2">
                                @if($row->categories->count() > 0)
                                    <a href="{{ route('product-list', $row->categories->first()->slug) }}" class="product-meta d-block font-size-xs pb-1">{{$row->categories->first()->name}}</a>
                                @endif
                                <h3 class="product-title font-size-sm mb-2">
                                    <a href="{{route('product-single',$row->slug)}}" class="two-line">{{$row->product_name}}</a>
                                </h3>
                                <div class="mb-2">
                                    <div class="star-list d-flex">
                                        @php
                                            $stars = $row->star_ratings;
                                        @endphp
                                        @for ($i = 0; $i < $stars['full']; $i++)
                                            <i class="sr-star czi-star-filled active-star"></i>
                                        @endfor
                                        @if ($stars['half'])
                                            <i class="sr-star czi-star-half active-star"></i>
                                        @endif
                                        @for ($i = 0; $i < $stars['empty']; $i++)
                                            <i class="sr-star czi-star-filled inactive-star"></i>
                                        @endfor
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="product-price">
                                        @if($isPriced)
                                            <span class="font-midnight">Rs. {{ $row->discount_price ?? $row->price }}</span>
                                            @if($row->discount_price)
                                                <del class="font-size-sm text-danger">Rs. {{ $row->price }}</del>
                                            @endif
                                        @else
                                            <span class="font-midnight" style="visibility: hidden;">Rs</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($isPriced)
                                <a href="javascript:void(0)" class="buy_now_btn" data-slug="{{ $row->slug }}">
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
                            @else
                                <a href="#quote" data-toggle="modal" data-item-id="{{ $row->id }}" data-price="{{ $row->price }}" data-name="{{ $row->product_name }}" data-type="product">
                                    <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                                Get a quote
                                            </h3>
                                        </div>
                                        <div>
                                            <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    <!-- Hot products end-->

    <!-- Ad section start-->
    @if(isset($ads['after_hot_deals']) && $ads['after_hot_deals']->count() > 0)
        <section class="container-fluid px-4 px-md-5">
            <div class="row">
                @foreach($ads['after_hot_deals'] as $row)
                    <div class="col-md-6 my-1 px-1">
                        <a href="{{ $row->link ?? '#' }}" {{ $row->link && $row->isNewTab() ? 'target="_blank"' : '' }}>
                            <img src="{{$row->image ? asset('uploads/ads/'.$row->image) : asset('theme-assets/img/default-ad.jpg')}}" class="rounded img-fluid" alt="{{ $row->client_name ?? $row->title }}" />
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    <!-- Ad section end -->

    <!-- Latest Launches / New Arrivals products start-->
    @if($latestProducts->count() > 0)
        <section class="container-fluid mb-md-3 px-4 px-md-5">
            <div class="row d-flex align-items-end  mb-3">
                <div class="col-md-6 d-flex  flex-column align-items-center align-items-md-start">
                    <h2 class="section-title mb-0">Latest Launches</h2>
                </div>
                <div class="col-md-6 d-none d-md-flex justify-content-end">
                    <div class="text-center pt-3">
                        <a class="btn btn-primary btn-sm pl-2" href="{{route('search.results',['uri'=>'latest'])}}">View All Products<i
                                class="czi-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="custom-cols-5 pt-4 m-n3">
                <!-- Product-->
                @foreach($latestProducts as $row)
                    @php
                        $isPriced = ($row->discount_price || $row->price);
                    @endphp
                    <div class="col-5th px-1 mb-4">
                        <div class="card product-card translate p-0">
                            <span class="badge new-badge"> New</span>
                            @if($isPriced)
                                <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left"  onclick="addToCart(event,{{ $row->id }})">
                                    <i class="czi-cart"></i>
                                </button>
                            @endif
                            <a class="card-img-top d-block overflow-hidden" href="{{route('product-single',$row->slug)}}">
                                <div class="image-hover-box">
                                    @php
                                        $main = $row->main_image ?? $row->hover_image;
                                        $hover = $row->hover_image;
                                    @endphp
                                    @if($main)
                                        <img src="{{ asset('images/products/' . $main->image) }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                    @else
                                        <img src="{{ asset('theme-assets/img/default-thumbnail.jpeg') }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                    @endif
                                    @if($hover)
                                        <img src="{{ asset('images/products/' . $hover->image) }}" ="{{ $row->product_name }}" class="hover-img img-fluid">
                                    @endif
                                </div>
                            </a>
                            <div class="card-body py-2">
                                @if($row->categories->count() > 0)
                                    <a href="{{ route('product-list', $row->categories->first()->slug) }}" class="product-meta d-block font-size-xs pb-1">{{$row->categories->first()->name}}</a>
                                @endif
                                <h3 class="product-title font-size-sm mb-2">
                                    <a href="{{route('product-single',$row->slug)}}" class="two-line">{{ $row->product_name }}</a>
                                </h3>
                                <div class="mb-2">
                                    <div class="star-list d-flex">
                                        @php
                                            $stars = $row->star_ratings;
                                        @endphp
                                        @for ($i = 0; $i < $stars['full']; $i++)
                                            <i class="sr-star czi-star-filled active-star"></i>
                                        @endfor
                                        @if ($stars['half'])
                                            <i class="sr-star czi-star-half active-star"></i>
                                        @endif
                                        @for ($i = 0; $i < $stars['empty']; $i++)
                                            <i class="sr-star czi-star-filled inactive-star"></i>
                                        @endfor
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="product-price">
                                        @if($isPriced)
                                            <span class="font-midnight">Rs. {{ $row->discount_price ?? $row->price }}</span>
                                            @if($row->discount_price)
                                                <del class="font-size-sm text-danger">Rs. {{ $row->price }}</del>
                                            @endif
                                        @else
                                            <span class="font-midnight" style="visibility: hidden;">Rs.</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($isPriced)
                                <a href="javascript:void(0)" class="buy_now_btn" data-slug="{{ $row->slug }}">
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
                            @else
                                <a href="#quote" data-toggle="modal" data-item-id="{{ $row->id }}" data-price="{{ $row->price }}" data-name="{{ $row->product_name }}" data-type="product">
                                    <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                                Get a quote
                                            </h3>
                                        </div>
                                        <div>
                                            <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row d-flex  justify-content-center d-md-none mb-3">
                <div class="text-center pt-3">
                    <a class="btn btn-primary btn-sm pl-2" href="{{route('search.results',['uri'=>'latest'])}}">View All Products<i
                            class="czi-arrow-right ml-2"></i></a>
                </div>
            </div>
        </section>
    @endif
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
                            <img class="img-fluid" src="{{$row->image ? asset('images/categories/'.$row->image) : asset('theme-assets/img/default-thumbnail.jpeg')}}" alt="{{ $row->name }}">
                            <p>{{$row->name}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    <!-- category section end-->

    <!-- Ad section start-->
    @if(isset($ads['after_categories']) && $ads['after_categories']->count() > 0)
        @php
            $ad = $ads['after_categories']->first();
        @endphp
        <div class="container-fluid ad-section mb-md-3 px-4 px-md-5">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div  class="d-sm-flex justify-content-between align-items-center bg-image overflow-hidden rounded-lg">
                        <div class="py-4 my-2 my-md-0 py-md-5 px-4 ml-md-3 text-center text-sm-left">
                            {!! $ad->description !!}
                            <a class="btn btn-primary btn-shadow btn-sm" href="{{ $ad->link_url ?? '#' }}" {{ $ad->link_url && $ad->open_in_new_tab ? 'target="_blank"' : '' }}>Shop Now</a>
                        </div>
                        <a href="{{ $ad->link_url ?? '#' }}" {{ $ad->link_url && $ad->open_in_new_tab ? 'target="_blank"' : '' }}>
                            <img class="d-block ml-auto" src="{{$ad->image ? asset('uploads/ads/'.$ad->image) : asset('theme-assets/img/default-ad.jpg')}}" alt="{{ $ad->client_name ?? $ad->title }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!--End of Ad section end-->

    <!-- feature products start-->
    @if($featuresProducts->count() > 0)
        <section class="container-fluid px-4 px-md-5">
            <div class="row d-flex align-items-end  mb-3">
                <div class="col-md-6 d-flex  flex-column align-items-center align-items-md-start">
                    <span class="feature-badge">Featured</span>
                    <h2 class="section-title mb-0 ml-1">Featured Products</h2>
                </div>
                <div class="col-md-6 d-none d-md-flex justify-content-end">
                    <div class="text-center pt-3">
                        <a class="btn btn-primary btn-sm pl-2" href="{{route('search.results',['uri'=>'features'])}}">View All Products<i
                                class="czi-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="row pt-4 m-n3">
                <!-- Product-->
                @foreach ($featuresProducts as $row)
                    @php
                        $isPriced = ($row->discount_price || $row->price);
                    @endphp
                    <div class="col-lg col-md-4 col-6 px-1 mb-4">
                        <div class="card product-card translate p-0">
                            @if($isPriced)
                                @if($row->discount_price && $row->price)
                                    <div class="ribbon"> {{getDiscountPercentage($row->price,$row->discount_price)}} <br> OFF</div>
                                @endif
                                <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left"   onclick="addToCart(event,{{ $row->id }})">
                                    <i class="czi-cart"></i>
                                </button>
                            @endif
                            <a class="card-img-top d-block overflow-hidden" href="{{route('product-single',$row->slug)}}">
                                <div class="image-hover-box">
                                    @php
                                        $main = $row->main_image ?? $row->hover_image;
                                        $hover = $row->hover_image;
                                    @endphp
                                    @if($main)
                                        <img src="{{ asset('images/products/' . $main->image) }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                    @else
                                        <img src="{{ asset('theme-assets/img/default-thumbnail.jpeg') }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                    @endif
                                    @if($hover)
                                        <img src="{{ asset('images/products/' . $hover->image) }}" ="{{ $row->product_name }}" class="hover-img img-fluid">
                                    @endif
                                </div>
                            </a>
                            <div class="card-body py-2">
                                @if($row->categories->count() > 0)
                                    <a href="{{ route('product-list', $row->categories->first()->slug) }}" class="product-meta d-block font-size-xs pb-1">{{$row->categories->first()->name}}</a>
                                @endif
                                <h3 class="product-title font-size-sm mb-2">
                                    <a href="{{route('product-single',$row->slug)}}" class="two-line">{{ $row->product_name }}</a>
                                </h3>
                                <div class="mb-2">
                                    <div class="star-list d-flex">
                                        @php
                                            $stars = $row->star_ratings;
                                        @endphp
                                        @for ($i = 0; $i < $stars['full']; $i++)
                                            <i class="sr-star czi-star-filled active-star"></i>
                                        @endfor
                                        @if ($stars['half'])
                                            <i class="sr-star czi-star-half active-star"></i>
                                        @endif
                                        @for ($i = 0; $i < $stars['empty']; $i++)
                                            <i class="sr-star czi-star-filled inactive-star"></i>
                                        @endfor
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="product-price">
                                        @if($isPriced)
                                            <span class="font-midnight">Rs. {{ $row->discount_price ?? $row->price }}</span>
                                            @if($row->discount_price)
                                                <del class="font-size-sm text-danger">Rs. {{ $row->price }}</del>
                                            @endif
                                        @else
                                            <span class="font-midnight" style="visibility:hidden;">Rs.</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($isPriced)
                                <a href="javascript:void(0)" class="buy_now_btn" data-slug="{{ $row->slug }}">
                                    <div class="py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="font-size-md mb-2 text-white text-center pt-2">
                                                BUY NOW
                                            </h3>
                                        </div>
                                        <div>
                                            <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                                        </div>
                                    </div>
                                </a>
                            @else
                                <a href="#quote" data-toggle="modal" data-item-id="{{ $row->id }}" data-price="{{ $row->price }}" data-name="{{ $row->product_name }}" data-type="product">
                                    <div class="py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="font-size-md mb-2 text-white text-center pt-2">
                                                Get a quote
                                            </h3>
                                        </div>
                                        <div>
                                            <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row d-flex  justify-content-center d-md-none">
                <div class="text-center pt-3">
                    <a class="btn btn-primary btn-sm pl-2" href="{{route('search.results',['uri'=>'features'])}}">View All Products<i
                            class="czi-arrow-right ml-2"></i></a>
                </div>
            </div>
        </section>
    @endif
    <!-- featured products  end-->
    <!-- Gone in seconds category start-->
    @if($goneInSeconds->count() > 0) <!----- heare add || $ads[] exits too --->
        <section class="container-fluid px-4 px-md-5 mt-4">
            <div class="row">
                <!-- Banner with controls-->
                @if($goneInSeconds->count() > 0)
                    <div class="col-md-4">
                        <div>
                            @if(isset($ads['gone_in_seconds_sidebar']) && $ads['gone_in_seconds_sidebar']->count() > 0)
                                @foreach($ads['gone_in_seconds_sidebar']->take(2) as $index => $ad)
                                    <div class="{{ $index > 0 ? 'mt-2' : '' }}">
                                        <a class="mt-auto" href="{{ $ad->link_url ?? '#' }}" {{ $ad->link_url && $ad->open_in_new_tab ? 'target="_blank"' : '' }}>
                                            <img class="d-block w-100 rounded-lg" src="{{$ad->image ? asset('uploads/ads/'.$ad->image) : asset('theme-assets/img/default-ad.jpg')}}" alt="{{ $ad->client_name ?? $ad->title }}">
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                @endif
                <!-- Product grid (carousel)-->
                @if($goneInSeconds->count() > 0)
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
                                @foreach($goneInSeconds->chunk(6) as $items)
                                    <div>
                                        <div class="row mx-n2">
                                            @foreach ($items as $row)
                                                @php
                                                    $isPriced = ($row->discount_price || $row->price);
                                                @endphp
                                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                                    <div class="card product-card translate p-0">
                                                        @if($isPriced)
                                                            @if($row->discount_price && $row->price)
                                                                <div class="ribbon"> {{getDiscountPercentage($row->price,$row->discount_price)}} <br> OFF</div>
                                                            @endif
                                                            <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                                                data-placement="left" onclick="addToCart(event,{{ $row->id }})">
                                                                <i class="czi-cart"></i>
                                                            </button>
                                                        @endif
                                                        <a class="card-img-top d-block overflow-hidden" href="{{route('product-single',$row->slug)}}">
                                                            <div class="image-hover-box">
                                                                @php
                                                                    $main = $row->main_image ?? $row->hover_image;
                                                                    $hover = $row->hover_image;
                                                                @endphp
                                                                @if($main)
                                                                    <img src="{{ asset('images/products/' . $main->image) }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                                                @else
                                                                    <img src="{{ asset('theme-assets/img/default-thumbnail.jpeg') }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                                                @endif
                                                                @if($hover)
                                                                    <img src="{{ asset('images/products/' . $hover->image) }}" ="{{ $row->product_name }}" class="hover-img img-fluid">
                                                                @endif
                                                            </div>
                                                        </a>
                                                        <div class="card-body py-2">
                                                            @if($row->categories->count() > 0)
                                                                <a href="{{ route('product-list', $row->categories->first()->slug) }}" class="product-meta d-block font-size-xs pb-1">{{$row->categories->first()->name}}</a>
                                                            @endif
                                                            <h3 class="product-title font-size-sm mb-2">
                                                                <a href="{{route('product-single',$row->slug)}}" class="two-line">{{$row->product_name}}</a>
                                                            </h3>
                                                            <div class="mb-2">
                                                                <div class="star-list d-flex">
                                                                    @php
                                                                        $stars = $row->star_ratings;
                                                                    @endphp
                                                                    @for ($i = 0; $i < $stars['full']; $i++)
                                                                        <i class="sr-star czi-star-filled active-star"></i>
                                                                    @endfor
                                                                    @if ($stars['half'])
                                                                        <i class="sr-star czi-star-half active-star"></i>
                                                                    @endif
                                                                    @for ($i = 0; $i < $stars['empty']; $i++)
                                                                        <i class="sr-star czi-star-filled inactive-star"></i>
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="product-price">
                                                                    @if($isPriced)
                                                                        <span class="font-midnight">Rs. {{ $row->discount_price ?? $row->price }}</span>
                                                                        @if($row->discount_price)
                                                                            <del class="font-size-sm text-danger">Rs. {{ $row->price }}</del>
                                                                        @endif
                                                                    @else
                                                                        <span class="font-midnight" style="visibility: hidden;"> Rs</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="d-sm-none">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                                <!-- Carousel item-->
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    @endif
    <!-- Gone in seconds category end-->

    <!-- shop by brand start -->
    @if($brands->count() > 0)
        <section class="container-fluid categories mt-3 mt-md-0  mb-3  px-4 px-md-5">
            <!-- Product carousel-->
            <div class="container ">
                <div class="row d-flex justify-content-center mb-4">
                    <h2 class="section-title mb-0 text-center">Shop By Brands</h2>
                </div>
                <div class="cz-carousel cz-controls-static cz-controls-outside p-0">
                    <div class="cz-carousel-inner"
                        data-carousel-options='{"items": 2, "controls": true, "nav": false, "autoHeight": true, "responsive": {"0":{"items":2},"500":{"items":3, "gutter": 10},"768":{"items":4, "gutter": 0}, "1100":{"items":6, "gutter": 0}}}'>
                        @foreach($brands as $row)
                            <div>
                                <div class="  d-flex  rounded align-items-center">
                                    <div class="card product-card translate w-100 p-0">
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('search.results',['uri'=>'brands-'.$row->slug])}}">
                                            @if($row->brand_image)
                                                <img src="{{$row->brand_image ? asset('images/brands/'.$row->brand_image) : asset('theme-assets/img/default-thumbnail.jpeg')}}"
                                                alt="{{$row->brand_name}}" style="height: 55px;">
                                            @else
                                                <h6 style="height: 55px!important; display: flex; align-items: center; justify-content: center; margin: 0;">
                                                    {{ $row->brand_name }}
                                                </h6>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- shop by brand end -->

    <!-- Ad section start-->
    @if(isset($ads['after_brands']) && $ads['after_brands']->count() > 0)
        @php
            $ad = $ads['after_brands']->first();
        @endphp
        <div class=" container-fluid px-4 px-md-5 mb-md-3">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ $ad->link_url }}" {{ $ad->link_url && $ad->open_in_new_tab ? 'target="_blank"' : '' }}>
                        <img src="{{$ad->image ? asset('uploads/ads/'.$ad->image) : asset('theme-assets/img/default-ad.jpg')}}" class="rounded-lg" alt="{{ $ad->client_name ?? $ad->title }}">
                    </a>
                </div>
            </div>
        </div>
    @endif
    <!--Ad section end -->

    <!-- Product for you start-->
    @if($productsForYou->count() > 0)
        <section class="container-fluid px-4 px-md-5  mt-3 mt-md-0">
            <div class="row d-flex align-items-center justify-content-center  mb-3">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-0">Products for You</h2>
                </div>
            </div>
            <div class="custom-cols-5 pt-4 m-n3">
                <!-- Product-->
                @foreach($productsForYou as $row)
                    @php
                        $isPriced = ($row->discount_price || $row->price);
                    @endphp
                    <div class="col-5th px-1 mb-2">
                        <div class="card product-card translate p-0">
                            @if($isPriced)
                                @if($row->discount_price && $row->price)
                                    <div class="ribbon"> {{getDiscountPercentage($row->price,$row->discount_price)}} <br> OFF</div>
                                @endif
                                <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left" onclick="addToCart(event,{{ $row->id }})">
                                    <i class="czi-cart"></i>
                                </button>
                            @endif
                            <a class="card-img-top d-block overflow-hidden" href="{{route('product-single',$row->slug)}}">
                                <div class="image-hover-box">
                                    @php
                                        $main = $row->main_image ?? $row->hover_image;
                                        $hover = $row->hover_image;
                                    @endphp
                                    @if($main)
                                        <img src="{{ asset('images/products/' . $main->image) }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                    @else
                                        <img src="{{ asset('theme-assets/img/default-thumbnail.jpeg') }}" alt="{{ $row->product_name }}" class="main-img img-fluid">
                                    @endif
                                    @if($hover)
                                        <img src="{{ asset('images/products/' . $hover->image) }}" ="{{ $row->product_name }}" class="hover-img img-fluid">
                                    @endif
                                </div>
                            </a>
                            <div class="card-body py-2">
                                @if($row->categories->count() > 0)
                                    <a href="{{ route('product-list', $row->categories->first()->slug) }}" class="product-meta d-block font-size-xs pb-1">{{$row->categories->first()->name}}</a>
                                @endif
                                <h3 class="product-title font-size-sm mb-2">
                                    <a href="{{route('product-single',$row->slug)}}" class="two-line">{{$row->product_name}}</a>
                                </h3>
                                <div class="mb-2">
                                    <div class="star-list d-flex">
                                        @php
                                            $stars = $row->star_ratings;
                                        @endphp
                                        @for ($i = 0; $i < $stars['full']; $i++)
                                            <i class="sr-star czi-star-filled active-star"></i>
                                        @endfor
                                        @if ($stars['half'])
                                            <i class="sr-star czi-star-half active-star"></i>
                                        @endif
                                        @for ($i = 0; $i < $stars['empty']; $i++)
                                            <i class="sr-star czi-star-filled inactive-star"></i>
                                        @endfor
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="product-price">
                                        @if($isPriced)
                                            <span class="font-midnight">Rs. {{ $row->discount_price ?? $row->price }}</span>
                                            @if($row->discount_price)
                                                <del class="font-size-sm text-danger">Rs. {{ $row->price }}</del>
                                            @endif
                                        @else
                                            <span class="font-midnight" style="visibility: hidden;"> Rs</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($isPriced)
                                <a href="javascript:void(0)" class="buy_now_btn" data-slug="{{ $row->slug }}">
                                    <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="font-size-md mb-2 text-white text-center pt-2">
                                                BUY NOW
                                            </h3>
                                        </div>
                                        <div>
                                            <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                                        </div>
                                    </div>
                                </a>
                            @else
                                <a href="#quote" data-toggle="modal" data-item-id="{{ $row->id }}" data-price="{{ $row->price }}" data-name="{{ $row->product_name }}" data-type="product">
                                    <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                                Get a quote
                                            </h3>
                                        </div>
                                        <div>
                                            <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 d-flex justify-content-center mt-3">
                <div class="text-center pt-3">
                    <a class="btn btn-primary" href="{{route('search.results',['uri'=>'productsForYou'])}}">
                        More Products
                        <span>
                            <i style="font-size: 12px;" class="czi-arrow-right ml-1 mr-1 font-weight-bold "></i>
                        </span>
                    </a>
                </div>
            </div>
        </section>
    @endif
    <!-- Product for you end-->

    <!--service section start-->
    <section class="container-fluid px-4 px-md-5 mt-4">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="section-title mb-0">Services we Provide</h2>
            </div>
        </div>
        <div class="row">
            @foreach($services as $row)
                <div class="col-lg-3 col-md-4 col-6 p-1 large-top">
                    <div class="bg-white rounded-lg">
                        <div class="p-2 h-320">
                            <a href="{{ route('page.pagedetail', $row->uri) }}">
                                <img src="{{ $row->thumbnail ? asset('uploads/thumbnails/'.$row->thumbnail) : asset('theme-assets/img/service/cloud.png') }}" class="service-list-img" alt="{{$row->post_title}}">
                            </a>
                            <a href="{{ route('page.pagedetail', $row->uri) }}" class="text-center">
                                <p class="services-span">{{$row->post_title}}</p>
                            </a>
                            <p class="services-p text-center">{{$row->sub_title}}</p>
                        </div>
                        <div class="container">
                            <div class="row">
                                @if ($row->price)
                                    <div class="col-12 p-0">
                                        <div class="price-badge text-center">Rs. {{$row->price}}</div>
                                    </div>
                                @endif
                                <div class="col-12 p-0">
                                    <a href="#quote" data-toggle="modal" data-item-id="{{ $row->id }}" data-price="{{ $row->price }}" data-name="{{ $row->post_title }}" data-type="service" class="quote-badge text-center">{{$row->price ? 'Purchase Now' : 'Get A Quote'}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-12 d-flex justify-content-center mt-3 ">
            <div class="text-center pt-3 large-top">
                <a class="btn btn-primary" href="{{route('page.posttype_detail',$post_type->uri)}}">View All Services <span><i style="font-size: 12px;" class="czi-arrow-right ml-1 mr-1 font-weight-bold "></i></span></a>
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
                    <form action="{{route('quotation-submit')}}" method="post">
                        @csrf
                        <input type="hidden" name="type" id="quote-type">
                        <input type="hidden" name="product_id" id="quote-product-id">
                        <input type="hidden" name="service_id" id="quote-service-id">
                        <input type="hidden" name="price" id="quote-price">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quote-name">Full Name*</label>
                                    <input class="form-control" type="text" name="full_name" id="quote-name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quote-email">Email address*</label>
                                    <input class="form-control" type="email" name="email" id="quote-email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quote-phone">Phone*</label>
                                    <input class="form-control" type="number" name="phone" id="quote-phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quote-address">Address*</label>
                                    <input class="form-control" type="text" name="country" id="quote-address" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="quote-service">Selected Item*</label>
                                    <select class="custom-select" id="quote-service" >
                                        <!-- Option will be filled dynamically -->
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="mb-3" for="message">Message</label>
                                    <textarea class="form-control" rows="4" name="message" id="messasge"></textarea>
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

        $(document).on('click', '.buy_now_btn', function(e){
            e.preventDefault();

            let productSlug = $(this).data('slug');
            let quantity = 1;

            // If you have per-product quantity inputs, you can grab it like this:
            // let quantity = $(this).closest('.product-card').find('select[name="quantity"]').val() || 1;

            let url = "{{ url('checkout') }}/" + productSlug + "?quantity=" + quantity;
            window.location.href = url;
        });

        $('#quote').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var itemId = button.data('item-id');
            var itemName = button.data('name');
            var type = button.data('type');
            var price = button.data('price');

            var modal = $(this);

            if (price) {
                modal.find('.modal-header h2').text('Purchase');
            } else {
                modal.find('.modal-header h2').text('Get a Quote');
            }

            // Reset hidden inputs
            modal.find('#quote-product-id').val('');
            modal.find('#quote-service-id').val('');

            // Set type
            modal.find('#quote-type').val(type);

            // Set name in dropdown
            modal.find('#quote-service').html(
                `<option value="${itemId}" selected>${itemName}</option>`
            );

            // Set correct ID field
            if (type === 'product') {
                modal.find('#quote-product-id').val(itemId);
            } else {
                modal.find('#quote-service-id').val(itemId);
            }

            // Price if any
            modal.find('#quote-price').val(price || '');
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
                    $('#mblCart .badge').text(res.newItemCount);
                }
            });
        }
    </script>
@stop
