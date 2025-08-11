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
    <div id="cartList">
        <x-cart.cart_list />
    </div>
@endsection
@push('scripts')
    <script>
        function formSubmit(event){
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
                success: function (data) {
                    ajax_response(data);
                    $('#cartList').html(data.view);
                    $('#cartNav').html(data.view2);
                    // $(".uk-cart-count").replaceWith($(".uk-cart-count")).html(data.count);
                    // $("#sub-total").replaceWith($("#sub-total")).html("$" + data.subTotal);
                }
            });
        }

        function deleteItem(event, cartId) {
            event.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'GET',
                url: '{{ route('cart-remove') }}',
                data: {'id': cartId},
                success: function (data) {
                    $("#cartItem-" + cartId).remove();
                    $('.uk-cart-count').html(data.count);
                    $("#sub-total").html("Rs." + data.subTotal);
                    ajax_response(data);
                },
                error: function(xhr, status, error) {
                    console.error('Delete AJAX Error:', error);
                }
            });
        }
    </script>
@endpush
