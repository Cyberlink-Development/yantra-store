@extends('frontend.include.master')

@section('meta-keywords') {!! strip_tags($category->first()->seo_keyword) !!} @endsection
@section('meta-description') {!! strip_tags($category->first()->seo_description) !!} @endsection

@section('title', $category->first()->name)

@section('image')
    @if ($category->first()->image)
        {{ asset('images/categories/' . $category->first()->image) }}@else{{ asset('images/logo.png') }}
    @endif
@endsection

@section('short_description', strip_tags($category->first()->description))<!-- Page Title-->
@section('content')

    <div class=" bg-primary pt-4 pb-4">
        <div class="container py-2 py-lg-3">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-item-center  mb-3 mb-lg-0 pt-lg-2 ">
                    <div>
                        <nav aria-label="breadcrumb text-center">
                            <ol class="breadcrumb  flex-lg-nowrap justify-content-center">
                                <li class="breadcrumb-item"><a class="text-nowrap text-white" href="{{ route('index') }}"><i
                                            class="czi-home"></i>Home</a></li>
                                <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">
                                    {{ $category->first()->name }}
                                </li>
                            </ol>
                        </nav>
                        <div class=" pr-lg-4 text-center">
                            <h1 class="h3 mb-0 text-white"> {{ $category->first()->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content-->
    <div class="container-fluid  px-4 px-md-5">
        <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-3  mt-n5">
                @include('frontend.include.sidebar')
            </aside>
            <!-- Content  -->
            <section class="col-lg-9">
                <div class="mt-5">
                    <div class="d-md-flex  justify-content-between pt-2">
                        <div class=" pr-lg-4 text-md-left text-center">
                            <h2 class="h4 mb-0">Latest Products</h2>
                        </div>
                        <div class="d-flex flex-wrap justify-content-center">
                            <div class="form-inline flex-nowrap mr-3 mr-sm-4 pb-3">
                                <label class="text-light opacity-75 text-nowrap mr-2 d-none d-sm-block" for="sorting">Sort
                                    by:</label>
                                <select class="form-control custom-select" id="sorting">
                                    <option>Popularity</option>
                                    <option>Low - Hight Price</option>
                                    <option>High - Low Price</option>
                                    <option>Average Rating</option>
                                    <option>A - Z Order</option>
                                    <option>Z - A Order</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products grid-->
                <div class="row mx-n2">
                    <!-- Product-->
                    @if ($products->isNotEmpty())
                        @foreach ($products as $value)
                            <div class="col-md-3 col-6 px-1 px-md-2 mb-4">
                                <div class="card product-card translate p-0">
                                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip"
                                        data-placement="left">
                                        <i class="czi-cart"></i>
                                    </button>
                                    <a class="card-img-top d-block overflow-hidden" href="{{route('product-single',$value->slug)}}">
                                        <div class="image-hover-box">
                                            <img src="{{ asset('images/products/' . $value->images->where('is_main', '=', 1)->first()->image)}}"
                                                alt="{{$value->product_name}}" class="main-img img-fluid">
                                                  @if($value->images->where('is_main', '=', 0)->isNotEmpty()) 
                                            <img src="{{asset('images/products/'.$value->images->where('is_main', '=', 0)->first()->image)}}" alt="{{$value->product_name}}"
                                                class="hover-img img-fluid">
                                                @endif

                                               
                                        </div>
                                    </a>
                                    <div class="card-body py-2">
                                        <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                                        <h3 class="product-title font-size-sm mb-2">
                                            <a href="{{route('product-single',$value->slug)}}" class="two-line">{{ $value->product_name }}</a>
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
                                            <div class="product-price"><span class="font-midnight">Rs. {{$value->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{route('product-single',$value->slug)}}">
                                        <div class=" py-1 px-3 book-btn d-flex justify-content-between align-items-center">
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
                        @endforeach
                    @else
                        <h3>No Products Available</h3>
                    @endif
                </div>
                <!-- Pagiantion -->
                <div>
                    @include('frontend.include.pagination')

                </div>
            </section>
        </div>
    </div>

    <!-- Toolbar for handheld devices-->
    @include('frontend.include.toolbar')
    <script>
        document.querySelectorAll('.image-hover-box').forEach(box => {
            const mainImg = box.querySelector('.main-img');
            const hoverImg = box.querySelector('.hover-img');

            if (mainImg && hoverImg && hoverImg.getAttribute('src')) {
                box.classList.add('has-hover');
            }
        });
    </script>
@stop
