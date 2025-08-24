@extends('frontend.include.master')
@section('meta-keywords')
    @if ($data->seo)
        {!! strip_tags($data->seo->seo_keyword) !!}
    @endif
@endsection
@section('meta-description')
    @if ($data->seo)
        {!! strip_tags($data->seo->seo_description) !!}
    @endif
@endsection
@section('title', $data->product_name)
@section('image', asset('images/products/' . $data->images->where('is_main', 1)->first()->image))
@section('short_description', strip_tags($data->short_description))

@section('content')
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
    <!-- Page Title-->
    <div class="bg-primary page-title-overlap   pt-4 ">
        <div class="container d-flex justify-content-center align-items-center text-center py-2 py-lg-3">
            <div>
                <div class="mb-3 mb-lg-0 pt-lg-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb  flex-lg-nowrap justify-content-center">
                            <li class="breadcrumb-item">
                                <a class="text-nowrap text-white" href="{{ route('index') }}">
                                    <i class="czi-home"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">
                                <a class="text-nowrap text-white" href="{{ route('product-list', $data->categories->first()->slug) }}">
                                    {{ $data->categories->first()->name }}
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class=" pr-lg-4 text-center">
                    <h1 class="h3  mb-0 text-white">{{ $data->product_name }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container-fluid px-4 px-md-5">
        <!-- Gallery + details-->
        <div class="bg-light box-shadow-lg rounded-lg px-4 py-3 mb-5">
            <div class="px-lg-3">
                <div class="row">
                    <!-- Product gallery-->
                    @if ($data->images->count() > 0)
                        <div class="col-lg-7 pr-lg-0 pt-lg-4">
                            <div class="cz-product-gallery">
                                {{-- Preview Images --}}
                                <div class="cz-preview order-sm-2">
                                    @foreach ($data->images as $index => $img)
                                        <div class="cz-preview-item {{ $index === 0 ? 'active' : '' }}"
                                            id="preview-{{ $index }}">
                                            <img class="cz-image-zoom" src="{{ asset('images/products/' . $img->image) }}"
                                                data-zoom="{{ asset('images/products/' . $img->image) }}"
                                                alt="{{ $data->product_name }}">
                                            <div class="cz-image-zoom-pane"></div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- Thumbnail Navigation --}}
                                <div class="cz-thumblist order-sm-1">
                                    @foreach ($data->images as $index => $img)
                                        <a class="cz-thumblist-item {{ $index === 0 ? 'active' : '' }}"
                                            href="#preview-{{ $index }}">
                                            <img src="{{ asset('images/products/' . $img->image) }}"
                                                alt="{{ $data->product_name }}">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- Product details-->
                    <div class="col-lg-5 pt-4 pt-lg-0">
                        <div class="product-details ml-auto pb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    @if($data->categories->count() > 0)
                                        <p class="text-weight-bold text-uppercase m-0">{{ $data->categories->first()?->name }}</p>
                                    @endif
                                    <div class="mb-2">

                                        <div class="star-list d-flex">
                                            @php
                                                $stars = $data->star_ratings;
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
                                </div>
                                <div>
                                    @if($data->discount_price && $data->price)
                                        <div class="ribbon-detail"> 🔥 {{getDiscountPercentage($data->price,$data->discount_price)}} <br> OFF</div>
                                    @endif
                                    <button class="btn-wishlist mr-0 mr-lg-n3 " type="button" data-toggle="tooltip"
                                        title="Add to wishlist"><i class="czi-heart"></i></button>
                                </div>
                            </div>
                            <h3>{{ $data->product_name }}</h3>
                            <hr>
                            <div class="d-flex justify-content-between mt-3">
                                <div style="font-size:25px;">
                                    @if($data->discount_price || $data->price)
                                        <span class="font-midnight">Rs.{{ $data->discount_price ?? $data->price }}</span>
                                        @if($data->discount_price)
                                            <del class="font-size-sm text-danger">Rs. {{ $data->price }}</del>
                                        @endif
                                    @else
                                        <span class="font-midnight" style="visibility: hidden;"> Rs</span>
                                    @endif
                                </div>
                            </div>
                            <div class="font-size-sm mb-4">
                                <span class="text-muted" id="colorOption">**Price is inclusive of VAT**</span>
                            </div>
                            <div class="position-relative mr-n4 mb-3" style="top:-4px;">
                                @if($data->stock > 0)
                                    <div class="product-badge product-available mt-n1">
                                        <i class="czi-security-check"></i>In Stock Avaliable
                                    </div>
                                @else
                                    <div class="product-badge product-out-of-stock mt-n1">
                                        <i class="czi-close-circle"></i>Out of Stock
                                    </div>
                                @endif
                            </div>
                            <form class="mb-grid-gutter" id="add_to_cart">
                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                                @php
                                    $isPriced = (($data->discount_price || $data->price) && $data->stock > 0);
                                @endphp
                                @if($isPriced)
                                    <div class="form-group d-flex align-items-center">
                                        <label>Quantity : </label>
                                        <select name="quantity" class="custom-select mr-3 ml-3" style="width: 5rem;">
                                            @for($i=1; $i<= $data->stock; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                @endif
                                <div class="form-group d-flex align-items-center" style="gap:5px;">
                                    @if($isPriced)
                                        <a class="btn btn-primary btn-shadow btn-block mt-0" id="buy_now_btn">
                                            <i class="czi-bag font-size-lg mr-2"></i>Buy Now
                                        </a>
                                        <a class="btn btn-secondary btn-shadow btn-block mt-0 btn-hover-white" id="cart_btn">
                                            <i class="czi-cart font-size-lg mr-2"></i>Add to Cart
                                        </a>
                                    @else
                                        <!-- <a class="btn btn-primary btn-shadow btn-block mt-0" id="buy_now_btn">
                                            <i class="czi-bag font-size-lg mr-2"></i>Get a quote
                                        </a> -->
                                        <a href="#quote" data-toggle="modal" data-item-id="{{ $data->id }}" data-price="{{ $data->price }}" data-name="{{ $data->product_name }}" data-type="product" class="btn btn-secondary btn-shadow btn-block mt-0 btn-hover-white">
                                            Get a quote
                                            <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                                        </a>
                                    @endif
                                </div>
                            </form>

                            <!-- Sharing-->
                            <h6 class="d-inline-block align-middle font-size-base my-2 mr-2">Share:</h6>
                            <a class="share-btn sb-twitter mr-2 my-2" href="#">
                                <i lass="czi-twitter"></i>Twitter
                            </a>
                            <a class="share-btn sb-instagram mr-2 my-2" href="#">
                                <i class="czi-instagram"></i>Instagram
                            </a>
                            <a class="share-btn sb-facebook my-2" href="#">
                                <i class="czi-facebook"></i>Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product description-->
    <div class="container ">
        <!-- Product panels-->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#tab1" class="nav-link active tab-font" data-toggle="tab" role="tab">
                            Specification
                        </a>
                    </li>
                    @if($data->long_description)
                        <li class="nav-item">
                            <a href="#tab2" class="nav-link" data-toggle="tab" role="tab">
                                Description
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="#tab3" class="nav-link" data-toggle="tab" role="tab">
                            Review
                        </a>
                    </li>
                </ul>

                <!-- Tabs content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="accordion mb-4" id="productPanels">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="accordion-heading">
                                        <a href="#productInfo" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="productInfo">
                                            <i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>
                                            Specification Info
                                            <span class="accordion-indicator"></span>
                                        </a>
                                    </h3>
                                </div>
                                <div class="collapse show" id="productInfo" data-parent="#productPanels">
                                    <div class="card-body p-0">
                                        {!! $data->short_description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($data->long_description)
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            {!! $data->long_description !!}
                        </div>
                    @endif
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="container pt-md-2" id="reviews">
                            <div class="row">
                                <!-- Reviews list-->
                                <div class="{{ Auth::check() ? 'col-md-7' : ''}}">
                                    @if($data->reviews->count() > 0)
                                        <div class="d-flex justify-content-between pb-4">
                                            <div class="mb-2">
                                                <div class="star-list d-flex">
                                                    @php
                                                        $stars = $data->star_ratings;
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
                                            <div class="form-inline flex-nowrap">
                                                <label class="text-muted text-nowrap mr-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                                                <select class="custom-select custom-select-sm" id="sort-reviews" onChange="sortReview(this)">
                                                    <option value="latest">Latest</option>
                                                    <option value="oldest">Oldest</option>
                                                    <option value="high_rating">High rating</option>
                                                    <option value="low_rating">Low rating</option>
                                                </select>
                                            </div>
                                        </div>
                                    @endif
                                    <!-- Review-->
                                    <div id="reviewList">
                                        <x-review.review_list :reviews="$data->reviews" />
                                    </div>
                                </div>
                                <!-- Leave review form-->
                                @if(Auth::check())
                                    <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
                                        <div class="bg-light-grey py-grid-gutter px-grid-gutter rounded-lg">
                                            <h3 class="h4 pb-2">Write a review</h3>
                                            <form class="needs-validation" action="{{ route('front.review.create') }}" method="post" novalidate onSubmit="reviewCreation(this,event)">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $data->id }}" />
                                                <div class="form-group">
                                                    <label for="review-name">Your name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" name="name" class="form-control" id="review-name" value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}" required disabled>
                                                    <div class="invalid-feedback">Name is required!</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="review-email">Your email
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="email" name="email" id="review-email" class="form-control" value="{{ Auth::user()->email }}" required disabled>
                                                    <div class="invalid-feedback">Email is required!</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="review-rating">Rating
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <select name="rating" class="custom-select" id="review-rating" required>
                                                        <option value="">Choose rating</option>
                                                        <option value="5">5 stars</option>
                                                        <option value="4">4 stars</option>
                                                        <option value="3">3 stars</option>
                                                        <option value="2">2 stars</option>
                                                        <option value="1">1 star</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please choose rating!</div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="message">Message</label>
                                                    <textarea name="message" class="form-control" rows="4" placeholder="Write a Review" id="message" required></textarea>
                                                    <div class="invalid-feedback">Message is required!</div>
                                                </div>
                                                <button class="btn btn-primary btn-shadow btn-block" type="submit">Submit a Review</button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product  (Style with)-->
    @if($relatedProducts->count() > 0)
        <div class="">
            <div class="container ">
                <div class="row d-flex align-items-end  mb-3">
                    <div class="col-6">
                        <h2 class="section-title mb-0">Similar Products</h2>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="text-center pt-3">
                            <a class="btn btn-primary btn-sm pl-2" href="{{ route('product-list', $data->categories()->first()->slug) }}">View All Products<i
                                    class="czi-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-cols-5">
                    <!-- Product-->
                    @foreach($relatedProducts as $row)
                        @php
                            $isPriced = ($row->discount_price || $row->price);
                        @endphp
                        <div class="col-5th col-lg px-1  mb-4">
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
                                <a href="{{route('product-single',$row->slug)}}">
                                    <div class="py-1 px-3 book-btn d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                                                View Details
                                            </h3>
                                        </div>
                                        <div>
                                            <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <script>
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
        document.querySelectorAll('.image-hover-box').forEach(box => {
            const mainImg = box.querySelector('.main-img');
            const hoverImg = box.querySelector('.hover-img');

            if (mainImg && hoverImg && hoverImg.getAttribute('src')) {
                box.classList.add('has-hover');
            }
        });
    </script>
    <script>
        function sortReview(sorting){
            sortingValue = $(sorting).val();
            const url = "{{ route('front.review.sort',$data->id) }}";
            $.ajax({
                url: url,
                method: 'GET',
                data: {
                    sortValue: sortingValue,
                },
                success: function(res){
                    ajax_response(res)
                    if(res.success == true){
                        $('#reviewList').html(res.view);
                    }
                }
            })
        }
    </script>
    @include('frontend.include.toolbar')
@stop
@push('scripts')
    <script type="text/javascript">
        $('#cart_btn').on('click', function(e) {
            e.preventDefault();
            // Setup CSRF token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Get form data
            let myform = document.getElementById('add_to_cart');
            let formData = new FormData(myform);

            // Send AJAX request
            $.ajax({
                type: 'POST',
                url: "{{ route('cart-add') }}",
                data: formData,
                contentType: false,
                processData: false,
                cache: false,

                success: function(res) {
                    ajax_response(res);
                    $('#cartNav').html(res.view);
                    $('#mblCart .badge').text(res.newItemCount);
                },

                error: function(xhr) {
                    alert("An error occurred while uploading data.\nError code: " + xhr.statusText);
                }
            });
        });
        $('#buy_now_btn').on('click', function(e){
            e.preventDefault();
            let quantity = $('select[name="quantity"]').val(); // get selected quantity
            let productSlug = "{{ $data->slug }}";
            let url = "{{ url('checkout') }}/" + productSlug + "?quantity=" + quantity;
            window.location.href = url; // redirect with selected quantity
        });
    </script>

    <script>
        function reviewCreation(element,e){
            e.preventDefault();
            const url = element.action;
            const formData = $(element).serialize();
            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                success:function(res){
                    ajax_response(res);
                    if(res.success == true){
                        element.reset();
                        $(element).removeClass("was-validated")
                    }
                }
            });
        }
    </script>

@endpush
