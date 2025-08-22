<div class="mt-5">
    <div class="d-md-flex  justify-content-between pt-2">
        <div class=" pr-lg-4 text-md-left text-center">
            <h2 class="h4 mb-0">Our Products</h2>
        </div>
        @if ($products->isNotEmpty())
            <div class="d-flex flex-wrap justify-content-center">
                <div class="form-inline flex-nowrap mr-3 mr-sm-4 pb-3">
                    <label class="text-light opacity-75 text-nowrap mr-2 d-none d-sm-block" for="sorting">Sort by:</label>
                    @php
                        $sort = [
                            'All' => 'latest',
                            'Low - High Price' => 'low-to-high',
                            'High - Low Price' => 'high-to-low',
                            'A - Z Order' => 'a-z',
                            'Z - A Order' => 'z-a'
                        ]
                    @endphp
                    <select class="form-control custom-select" id="sorting" onChange="sorting(this)">
                        @foreach($sort as $key => $value)
                            <option value="{{ $value }}" {{ $value == request('sort')  ? 'selected' : '' }}>{{ $key }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endif
    </div>
</div>
<!-- Products grid-->
<div class="row mx-n2">
    <!-- Product-->
    @if ($products->isNotEmpty())
        @foreach ($products as $row)
            @php
                $isPriced = ($row->discount_price || $row->price);
            @endphp
            <div class="col-md-3 col-6 px-1 px-md-2 mb-4">
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
                            <img src="{{ asset('images/products/' . $row->images->where('is_main', '=', 1)->first()->image)}}" alt="{{$row->product_name}}" class="main-img  img-fluid">
                            @if($row->images->where('is_main', '=', 0)->isNotEmpty())
                                <img src="{{asset('images/products/'.$row->images->where('is_main', '=', 0)->first()->image)}}" alt="{{$row->product_name}}" class="hover-img img-fluid">
                            @endif
                        </div>
                    </a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                        <h3 class="product-title font-size-sm mb-2">
                            <a href="{{route('product-single',$row->slug)}}" class="two-line">{{ $row->product_name }}</a>
                        </h3>
                        <div class="mb-2">
                            <div class="star-list d-flex">
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
                                <i class="sr-star czi-star-filled active-star"></i>
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
                        <div class=" py-1 px-3 book-btn d-flex justify-content-between align-items-center">
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
    @else
        <div class="col-6 px-1 px-md-2 mb-4">
            <div class="card product-card translate p-3">
                <span> No Products Available</span>
            </div>
        </div>
    @endif
</div>
<!-- Pagiantion -->
<div>
    {!! $products->appends(request()->query())->links('frontend.include.pagination') !!}
</div>
