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
                    <div class="d-sm-flex justify-content-between pt-4 pt-md-3 p-3  my-4  border-bottom bg-white rounded border-bottom" id="wishlist-{{ $wishlist->id }}">
                        <div class="media media-ie-fix d-block d-sm-flex text-center text-sm-left">
                            <a class="d-inline-block mx-auto mr-sm-4" href="{{route('product-single',$product->slug)}}" style="width: 10rem;">
                                <img src="{{ asset('images/products/' . $product->images->where('is_main', '=', 1)->first()->image)}}" alt="{{$product->product_name}}">

                                <!-- <img src="{{ asset('theme-assets/img/computer/computer1.webp') }}" alt="{{ $product->product_name }}"> -->
                            </a>
                            <div class="media-body pt-2">
                                <h3 class="product-title font-size-base mb-2">
                                    <a href="{{route('product-single',$product->slug)}}">{{ $product->product_name }}</a>
                                </h3>
                                @if($product->model)
                                    <div class="font-size-sm"><span class="text-muted mr-2">Model:</span>{{ $product->model }}</div>
                                @endif
                                @if(get_brand_name($product->brand_id))
                                    <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>{{get_brand_name($product->brand_id) }}</div>
                                @endif
                                <div class="font-size-lg font-secondary pt-2">Rs. {{ $product->discount_price }}</div>
                                <del class="font-size-sm text-danger">Rs. {{ $product->price }}</del>
                            </div>
                        </div>
                        <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center wishlist-item" >
                            <button class="btn btn-outline-danger btn-sm" type="button" onclick="removeWishlist({{ $wishlist->id }})">
                                <i class="czi-trash mr-2"></i>Remove
                            </button>
                        </div>
                    </div>
                @endif
            @endforeach
          {!! $wishlists->links('frontend.include.pagination') !!}
        </section>
    </div>
</div>
@endsection

@push('scripts')
<script>
function removeWishlist(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This will remove the item from your wishlist.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, remove it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "{{ route('remove-wishlist', '') }}/" + id,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: 'DELETE'
                },
                success: function(response) {
                    if (response.success) {
                        $("#wishlist-" + id).fadeOut(300, function() {
                            $(this).remove();

                            if ($(".wishlist-item").length === 0) {
                                $(".wishlist-container").html("<p>Your wishlist is empty.</p>");
                            }
                        });

                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function() {
                    toastr.error('Something went wrong.');
                }
            });
        }
    });
}
</script>
@endpush
