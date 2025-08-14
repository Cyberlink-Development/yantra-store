
<a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{ route('cart-item') }}">
    <span class="navbar-tool-label">{{ Cart::count() }}</span>
    <i class="navbar-tool-icon czi-cart"></i>
</a>
<a class="navbar-tool-text" href="{{ route('cart-item') }}">
    <small>My Cart</small>Rs. {{ Cart::subtotal() }}
</a>
@if(Cart::content()->count() > 0 )
    <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
        <div class="widget widget-cart px-3 pt-2 pb-3">
            <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                @foreach (Cart::content() as $row)
                    <div class="widget-cart-item pb-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="media align-items-center">
                            <a class="d-block mr-2" href="{{ route('product-single', $row->options->slug) }}">
                                <img width="64"  src="{{ asset('images/products/' . $row->options->image) }}" alt="{{ $row->name }}" />
                            </a>
                            <div class="media-body">
                                <h6 class="widget-product-title">
                                    <a href="{{ route('product-single', $row->options->slug) }}">{{ $row->name }}</a>
                                </h6>
                                <div class="widget-product-meta">
                                    <span class="text-accent mr-2">Rs. {{ $row->price }}</span>
                                    <span class="text-muted">x {{ $row->qty }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
@endif
