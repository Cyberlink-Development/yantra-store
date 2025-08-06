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
                                <li class="breadcrumb-item"><a class="text-nowrap text-white" href="{{ route('index') }}"><i
                                            class="czi-home"></i>Home</a></li>
                                <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                        <div class=" pr-lg-4 text-center">
                            <h1 class="h3 mb-0 text-white">Your Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0 mt-n5">
                <div class="cz-sidebar-static rounded-lg box-shadow-lg sticky">
                    <div class="text-center mb-4 pb-3 border-bottom">
                        <h2 class="h4 mb-0">Summary </h2>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <div class="font-weight-semibold text-dark"><b>Subtotal:</b></div>
                        </div>
                        <div>Rs.{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</div>
                    </div>
                    <a class="btn btn-primary btn-shadow btn-block mt-4" href="{{route('checkout-address')}}"><i
                            class="czi-card font-size-lg mr-2"></i>Proceed to Checkout</a>
                </div>
            </aside>
            <!-- List of items-->
            <section class="col-lg-8">
                <div class="d-none d-md-flex justify-content-between align-items-center mt-5">
                    <h2 class="h4 mb-0">Your Cart Products</h2><a class="btn btn-primary btn-sm pl-2" href="list.php"><i
                            class="czi-arrow-left mr-2"></i>Continue shopping</a>
                </div>
                <!-- Item-->
                <form id="update-form" method="POST">
                    @csrf
                    @foreach ($cartItem as $value)
                        <div
                            class="d-sm-flex justify-content-between align-items-center pt-4 pt-md-3 p-3  my-4  border-bottom bg-white rounded">
                            <div class="media media-ie-fix d-block d-sm-flex align-items-center text-center text-sm-left">
                                <a class="d-inline-block mx-auto mr-sm-4"
                                    href="{{ route('product-single', $value->options->slug) }}" style="width: 10rem;">
                                    <img src="{{ asset('images/products/' . $value->options->image) }}"
                                        alt="{{ $value->name }}">
                                </a>
                                <div class="media-body pt-2">
                                    <h3 class="product-title font-size-base mb-2"><a
                                            href="{{ route('product-single', $value->options->slug) }}">{{ $value->name }}</a>
                                    </h3>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>Lenevo</div>
                                    <div class="font-size-lg font-secondary pt-2">Rs.{{ $value->price }}</div>
                                </div>
                            </div>
                            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left"
                                style="max-width: 9rem;">
                                <div class="form-group mb-0">
                                    <label class="font-weight-medium" for="quantity1">Quantity</label>
                                    <input class="form-control" type="number" min="1"
                                        max="{{ App\Model\Product::find($value->id)->stock }}" id="quantity1"
                                        value="{{ $value->qty }}">
                                </div>
                                <button class="btn btn-link px-0 text-danger delete-btn" type="button"
                                    data-row-id="{{ $value->rowId }}"><i class="czi-close-circle mr-2"></i><span
                                        class="font-size-sm">Remove</span></button>
                            </div>
                        </div>
                    @endforeach
                    @if (count($cartItem) > 0)
                        <div class="d-flex justify-content-center">
                            <button href="{{ route('index') }}" id="update-button" class="btn btn-outline-accent "><i
                                    class="czi-loading font-size-base mr-2"></i>Update Cart</button>
                        </div>
                    @endif
                </form>
            </section>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $("#update-form").submit(function(event) {
            event.preventDefault();

            let form = document.getElementById("update-form");
            let formData = new FormData(form);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{ route('cart-update') }}',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,

                success: function(data) {
                    // console.log(data);
                    if (!data.errors) {

                        toastr.success(data.message);
                        // alert({{ Gloudemans\Shoppingcart\Facades\Cart::count() }});
                        $(".uk-cart-count").replaceWith($(".uk-cart-count")).html(data.count);
                        $("#sub-total").replaceWith($("#sub-total")).html("$" + data.subTotal);

                    }
                    jQuery.each(data.errors, function(key, value) {

                        toastr.error(value);
                        // hideLoading();

                    })
                },
                error: function(a) { //if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });
        });

        $(".quantity").keyup(function(event) {
            event.preventDefault();
            alert($(this).val());
        });

        $(".quantity-button").click(function(event) {
            event.preventDefault();
            let cartId = $(this).attr("data-row-id");
            let quantity = $("#qt" + cartId).val();
            let price = $(this).attr("data-row-price");

            $("#mintotal" + cartId).html("$" + quantity * price);

        });

        $(".delete-btn").click(function(event) {
            event.preventDefault();
            let cartId = $(this).attr("data-row-id");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'GET',
                url: '{{ route('cart-remove') }}',
                data: {
                    'id': cartId
                },
                success: function(data) {
                    // console.log(data);
                    if (!data.errors) {
                        $("#" + cartId).remove();
                        // $('.mini-cart').replaceWith($('.mini-cart')).html(data);
                        $('.uk-cart-count').replaceWith($('.uk-cart-count')).html(data.count);
                        $("#sub-total").replaceWith($("#sub-total")).html("$" + data.subTotal);
                        toastr.success(data.message);
                        if (data.count == 0) {
                            $("#update-button").remove();
                        }

                    }
                    jQuery.each(data.errors, function(key, value) {

                        toastr.error(value);
                        // hideLoading();

                    })
                },
                error: function(a) { //if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });
        });
    </script>
@endpush
