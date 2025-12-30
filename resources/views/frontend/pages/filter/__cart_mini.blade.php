       <div class="mini-cart navbar-tool dropdown mr-3">
           <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{ route('cart-item') }}">
               <span class="navbar-tool-label">{{ Gloudemans\Shoppingcart\Facades\Cart::count() }}</span>
               <i class="navbar-tool-icon czi-cart"></i>
           </a>
           <a class="navbar-tool-text" href="{{ route('cart-item') }}"><small>My
                   Cart</small>${{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</a>
       </div>
