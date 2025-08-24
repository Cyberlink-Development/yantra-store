@foreach (Cart::content() as $row)
    <div class="widget-cart-item pb-2 border-bottom">
        <button class="close text-danger" type="button" aria-label="Remove" data-row-id="{{ $row->rowId }}" onclick="deleteCartNavItem(event, '{{ $row->rowId }}')">
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
