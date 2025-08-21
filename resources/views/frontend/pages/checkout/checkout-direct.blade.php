@extends('frontend.include.master')
@section('content')
    <div class=" bg-primary pt-4 pb-4">
        <div class="container py-2 py-lg-3">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-item-center  mb-3 mb-lg-0 pt-lg-2 ">
                    <div>
                        <nav aria-label="breadcrumb text-center">
                            <ol class="breadcrumb  flex-lg-nowrap justify-content-center">
                                <li class="breadcrumb-item"><a class="text-nowrap text-white" href="{{route('index')}}"><i class="czi-home"></i>Home</a></li>
                                <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                        <div class=" pr-lg-4 text-center">
                            <h1 class="h3 mb-0 text-white">Checkout</h1>
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
                    <div class="widget mb-3">
                        <h2 class="h4 text-center">Order summary</h2>
                        <div class="media align-items-center py-3 border-bottom">
                            <a class="d-block mr-2" href="{{route('product-single',$product->slug)}}">
                                <img width="64" src="{{ asset('images/products/' . $product->images->where('is_main', '=', 1)->first()->image) }}" alt="{{ $product->product_name }}" />
                            </a>
                            <div class="media-body">
                                <h6 class="widget-product-title two-line">
                                    <a href="{{route('product-single',$product->slug)}}">{{ $product->product_name }}</a>
                                </h6>
                                <div class="widget-product-meta">
                                    <span class="font-secondary mr-2">Rs {{ $product->discount_price ?? $product->price }}</span><span class="text-muted">x {{ $quantity }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled font-size-sm pb-2 border-bottom">
                        <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">Rs. {{ $total }}</span></li>
                        <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Shipping:</span><span class="text-right" id="shipping-price">Rs. 0</span></li>
                        <!-- <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Discount:</span><span class="text-right">Rs. 250</span></li> -->
                    </ul>
                    <div class="d-flex justify-content-between">
                        <p class=" font-weight-bold text-center ">Grand Total:</p>
                        <p class=" font-weight-bold text-center" id="grand-total">{{ $total }}</p>

                    </div>
                </div>
            </aside>
            <!-- List of items-->
            <section class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mt-5 border-bottom mb-4">
                    <h2 class="h4">Billing / Shipping Address</h2>
                </div>
                <form action="{{ route('checkout-success') }}" Method="post">
                    @csrf
                    <div class="row">
                        <input class="form-control" type="hidden" id="checkout-fn" name="product_id" value="{{ $product->id }}" required>
                        <input class="form-control" type="hidden" id="checkout-fn" name="quantity" value="{{ $quantity }}" required>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-fn">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-fn" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-ln">Last Name<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-ln" name="last_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-email">E-mail Address<span class="text-danger">*</span></label>
                                <input class="form-control" type="email" id="checkout-email" name="email"  required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-phone">Phone Number<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-phone" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-country">Country<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-country" name="country" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-province">Province<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-province" name="province" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-city">City<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-city" name="city" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-zip">ZIP Code<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-zip" name="zip_code" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-address-1">Address 1<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-address-1" name="address_1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-address-2">Address 2</label>
                                <input class="form-control" type="text" id="checkout-address-2" name="address_2">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="checkout-shipping">Shipping Area<span class="text-danger">*</span></label>
                                <select class="form-control custom-select" id="checkout-shipping" name="shipping" required>
                                    <option value="" selected hidden>Choose Shipping Area</option>
                                    @foreach ($shipping as $row )
                                        <option value="{{ $row->id }}" data-price="{{ $row->shipping_price }}">{{$row->shipping_location}} (Rs. {{ $row->shipping_price }})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="mb-3" for="order-comments">Additional Message</label>
                                <textarea class="form-control" rows="6" id="order-comments" name="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <h6 class="mb-3 py-3 border-bottom">Payment Method</h6>
                    <div class="accordion mb-2 uk- accordion-outline" id="payment-method" role="tablist">
                        <div class="card">
                            <div class="card-header p-3" role="tab">
                                <div class="accordion-heading d-flex justify-content-between">
                                    <div class="acc-heading d-flex align-items-center">
                                        <!-- <input type="radio" id="cash_on_delivery" name="payment" value="cashondelivery"> -->
                                        <input type="hidden" id="cash_on_delivery" name="payment" value="Cash On Delivery">
                                        <i class="czi-card font-size-lg mr-2 mt-n1 align-middle ml-2"></i>Cash on Delivery
                                    </div>
                                    <a href="#tab1" data-toggle="collapse" class="d-flex justify-content-between"><span class="accordion-indicator"></span></a>
                                </div>
                            </div>
                            <div class="collapse " id="tab1" data-parent="#payment-method" role="tabpanel">
                                <div class="card-body">
                                    <p>You can pay cash at the time of delivery. We accept Nepali currency within Nepal, and you can pay the invoice amount when our delivery staff arrives to your home/office.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation (desktop)-->
                    <div class=" d-flex pt-4 mt-3">
                        <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="{{route('product-single',$product->slug)}}"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back </span><span class="d-inline d-sm-none">Back</span></a></div>
                        <div class="w-50 pl-2">
                            <button type="submit" class="btn btn-primary btn-block">
                                <span class="d-none d-sm-inline">Complete Order</span>
                                <span class="d-inline d-sm-none">Next</span>
                                <i class="czi-arrow-right mt-sm-0 ml-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>

    <!-- Sign in / sign up modal-->
    <!-- <div class="modal fade" id="sucess-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-body text-center my-3">
                        <h2 class="h4 pb-3">Order Sucessfully Placed</h2>
                        <img src="img/ok.gif"  alt="" class="mb-4" style="height:130px;"/>
                        <p class="font-size-sm mb-2">Your order has been placed and will be processed as soon as possible.</p>
                        <p class="font-size-sm mb-2">Make sure you make note of your order number, which is <span class="font-weight-medium">34VB5540K83.</span></p>
                        <p class="font-size-sm">You will be receiving an email shortly with confirmation of your order. <u>You can now:</u></p>
                        <a class="btn btn-primary mt-2" href="index.php">Go back shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</section>

@endsection
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const shippingSelect = document.getElementById("checkout-shipping");
        const shippingPriceEl = document.getElementById("shipping-price");
        const grandTotalEl = document.getElementById("grand-total");

        let subtotal = {{ $total }}; // from backend

        shippingSelect.addEventListener("change", function () {
            let selectedOption = this.options[this.selectedIndex];
            let shippingPrice = parseFloat(selectedOption.getAttribute("data-price")) || 0;

            shippingPriceEl.textContent = "Rs. " + shippingPrice;
            grandTotalEl.textContent = "Rs. " + (subtotal + shippingPrice);
        });
    });
</script>
@endpush
