<div class="mt-5">
    <div class="d-md-flex  justify-content-between pt-2">
        <div class=" pr-lg-4 text-md-left text-center">
            <h2 class="h4 mb-0">Latest Products</h2>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="form-inline flex-nowrap mr-3 mr-sm-4 pb-3">
                <label class="text-light opacity-75 text-nowrap mr-2 d-none d-sm-block" for="sorting">Sort by:</label>
                @php
                    $sort = [
                        'None' => 'none',
                        'Low - High Price' => 'low-to-high',
                        'High - Low Price' => 'high-to-low',
                        'A - Z Order' => 'a-z',
                        'Z - A Order' => 'z-a'
                    ]
                @endphp
                <select class="form-control custom-select" id="sorting" onChange="sorting(this)">
                    @foreach($sort as $key => $value)
                        <option value="{{ $value }}" {{ $value === 'none' ? 'selected' : '' }}>{{ $key }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
<!-- Products grid-->
<div class="row mx-n2">
    <!-- Product-->
    @if ($products->isNotEmpty())
        @foreach ($products as $row)
            <div class="col-md-3 col-6 px-1 px-md-2 mb-4">
                <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left" onclick="addToCart(event,{{ $row->id }})">
                        <i class="czi-cart"></i>
                    </button>
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
                                <span class="font-midnight">Rs. {{$row->price}}</span>
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
        <div class="col-md-3 col-6 px-1 px-md-2 mb-4">
            <h6>No Products Available</h6>
        </div>
    @endif
</div>
<!-- Pagiantion -->
<div>
    {!! $products->links('frontend.include.pagination') !!}
</div>
