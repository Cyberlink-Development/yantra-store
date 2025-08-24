<div id="cartItemCount">
    <x-partials.cart_item_count />
</div>
<a class="navbar-tool-text" href="{{ route('cart-item') }}">
    <small>My Cart</small>Rs. {{ Cart::subtotal() }}
</a>
@if(Cart::content()->count() > 0 )
    <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
        <div class="widget widget-cart px-3 pt-2 pb-3">
            <div id="cartItemNav" style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                <x-partials.cart_item_nav />
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                <div class="font-size-sm mr-2 py-2">
                    <span class="text-muted">Subtotal:</span>
                    <span class="text-accent font-size-base ml-1">Rs. {{ Cart::subtotal() }}</span>
                </div>
                <a class="btn btn-outline-secondary btn-sm" href="{{ route('cart-item') }}">Expand cart
                    <i class="czi-arrow-right ml-1 mr-n1"></i>
                </a>
            </div>
            <a class="btn btn-primary btn-sm btn-block" href="{{route('checkout-address')}}">
                <i class="czi-card mr-2 font-size-base align-middle"></i>Checkout
            </a>
        </div>
    </div>
    <script>
        function deleteCartNavItem(event, cartId) {
            event.preventDefault();
            $.ajax({
                type: 'GET',
                url: '{{ route('cart-remove') }}',
                data: {'id': cartId},
                success: function (data) {
                    // $("#cartItem-" + cartId).remove();
                    // $('.uk-cart-count').html(data.count);
                    // $("#sub-total").html("Rs." + data.subTotal);
                    ajax_response(data);
                    $('#cartList').html(data.view);
                    $('#cartNav').html(data.view2);
                    $('#mblCart').html(data.mblView);
                },
                error: function(xhr, status, error) {
                    console.error('Delete AJAX Error:', error);
                }
            });
        }
    </script>
@endif
