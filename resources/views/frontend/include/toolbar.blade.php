  <!-- Toolbar for handheld devices-->
  <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100">
          <a class="d-table-cell cz-handheld-toolbar-item" href="index.php">
              <span class="cz-handheld-toolbar-icon"><i class="czi-home font-secondary"></i></span><span class="cz-handheld-toolbar-label">Home</span>
          </a>
          <a class="d-table-cell cz-handheld-toolbar-item" href="wishlist.php">
            <span class="cz-handheld-toolbar-icon"><i class="czi-heart font-secondary"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span>
          </a>
          <a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)">
            <span class="cz-handheld-toolbar-icon"><i class="czi-menu font-secondary"></i></span><span class="cz-handheld-toolbar-label">Menu</span>
          </a>
          <a class="d-table-cell cz-handheld-toolbar-item" href="{{route('cart-item')}}">
            <span class="cz-handheld-toolbar-icon uk-cart-count"><i class="czi-cart font-secondary"></i><span class="badge badge-primary badge-pill ml-1" style="padding: 4px 6px;">{{Gloudemans\Shoppingcart\Facades\Cart::count()}}</span><span class="cz-handheld-toolbar-label">Cart</span>
          </a>
      </div>
  </div>