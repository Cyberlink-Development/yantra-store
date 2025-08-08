@extends('frontend.include.master')
@section('content')

<!-- Page Title-->
<div class=" bg-primary pt-4 pb-4">
    <div class="container py-2 py-lg-3">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center align-item-center  mb-3 mb-lg-0 pt-lg-2 ">
                <div>
                    <nav aria-label="breadcrumb text-center">
                        <ol class="breadcrumb  flex-lg-nowrap justify-content-center">
                            <li class="breadcrumb-item"><a class="text-nowrap text-white" href="{{url('/')}}"><i class="czi-home"></i>Home</a></li>
                            <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">Wishlist</li>
                        </ol>
                    </nav>
                    <div class=" pr-lg-4 text-center">
                        <h1 class="h3 mb-0 text-white">Your Wishlist</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-3 pt-4 pt-lg-0 mt-n5">
            @include('frontend.include.sidenav')
        </aside>
        <!-- Content  -->
        <section class="col-lg-9">

            <!-- Wishlist-->
            <!-- Item-->
            @foreach ($wishlists as $wishlist)
                @php $product = $wishlist->products; @endphp
                @if($product)
                    <div class="d-sm-flex justify-content-between pt-4 pt-md-3 p-3  my-4  border-bottom bg-white rounded border-bottom">
                        {{-- <div class="media media-ie-fix d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="detail.php" style="width: 10rem;"><img src="{{ $product->options->image ? asset('images/products/' . $product->options->image) : asset('theme-assets/img/computer/computer1.webp')}}" alt="{{ $product->product_name }}"></a> --}}
                        <div class="media media-ie-fix d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="detail.php" style="width: 10rem;"><img src="{{ asset('theme-assets/img/computer/computer1.webp') }}" alt="{{ $product->product_name }}"></a>
                            <div class="media-body pt-2">
                                <h3 class="product-title font-size-base mb-2">
                                    <a href="detail.php">{{ $product->product_name }}</a>
                                </h3>
                                <div class="font-size-sm"><span class="text-muted mr-2">Model:</span>{{ $product->model }}</div>
                                <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>{{get_brand_name($product->brand_id) }}</div>
                                <div class="font-size-lg font-secondary pt-2">Rs. {{ $product->price }}</div>
                            </div>
                        </div>
                        <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                            <button class="btn btn-outline-danger btn-sm" type="button"><i class="czi-trash mr-2"></i>Remove</button>
                        </div>
                    </div>
                @endif
            @endforeach
        </section>
    </div>
</div>
@endsection
