<a
   class="uk-position-relative"
   href="{{route('cart-item')}}"
   uk-tooltip="Cart"
   uk-icon="icon:cart;">
   <div class="uk-cart-count">{{Gloudemans\Shoppingcart\Facades\Cart::count()}}</div>
</a>