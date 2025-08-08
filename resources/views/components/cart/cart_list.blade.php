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
                    <div>Rs.{{ Cart::subtotal() }}</div>
                </div>
                <a class="btn btn-primary btn-shadow btn-block mt-4" href="{{route('checkout-address')}}">
                    <i class="czi-card font-size-lg mr-2"></i>Proceed to Checkout
                </a>
            </div>
        </aside>
        <!-- List of items-->
        <section class="col-lg-8">
            <div class="d-none d-md-flex justify-content-between align-items-center mt-5">
                <h2 class="h4 mb-0">Your Cart Products</h2>
                <a class="btn btn-primary btn-sm pl-2" href="list.php">
                    <i class="czi-arrow-left mr-2"></i>Continue shopping
                </a>
            </div>
            <!-- Item-->
            @if(Cart::content()->count() > 0 )
                <form id="update-form" method="POST" action="{{ route('cart-update') }}" onSubmit="formSubmit(event)">
                    @csrf
                    @foreach (Cart::content() as $value)
                        <input type="hidden" name="id[]" value="{{ $value->rowId }}">
                        <div class="d-sm-flex justify-content-between align-items-center pt-4 pt-md-3 p-3  my-4  border-bottom bg-white rounded" id="cartItem-{{ $value->rowId }}">
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
                                    @if($value->options->brand)
                                        <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>{{$value->options->brand->brand_name}}</div>
                                    @endif
                                    <div class="font-size-md font-secondary pt-2"><span class="text-muted mr-2 font-size-sm">Per Item:</span>Rs.{{ $value->price }}</div>
                                    <div class="font-size-lg font-secondary pt-2"><span class="text-muted mr-2 font-size-sm">Total:</span>Rs.{{ $value->price * $value->qty }}</div>
                                </div>
                            </div>
                            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 9rem;">
                                <div class="form-group mb-0">
                                    <label class="font-weight-medium" for="quantity{{ $loop->iteration }}">Quantity</label>
                                    <input class="form-control" name="quantity[]" type="number" min="1" max="{{ $value->options->stock }}" id="quantity{{ $loop->iteration }}" value="{{ $value->qty }}" onkeyup="updateQuantity(event)">
                                </div>
                                <button class="btn btn-link px-0 text-danger delete-btn" type="button" data-row-id="{{ $value->rowId }}" onclick="deleteItem(event, '{{ $value->rowId }}')">
                                    <i class="czi-close-circle mr-2"></i>
                                    <span class="font-size-sm">Remove</span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                    @if (count(Cart::content()) > 0)
                        <div class="d-flex justify-content-center">
                            <button type="submit" id="update-button" class="btn btn-outline-accent ">
                                <i class="czi-loading font-size-base mr-2"></i>Update Cart
                            </button>
                        </div>
                    @endif
                </form>
            @else
                <div class="pt-4 pt-md-3 p-3  my-4  border-bottom bg-white rounded">
                    <h6 class="m-0">No items in the cart...</h6>
                </div>
            @endif
        </section>
    </div>
</div>
