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
                        @foreach($cartItem as $item)
                            <div class="media align-items-center py-3 border-bottom">
                                <a class="d-block mr-2" href="{{route('product-single',$item->options->slug)}}">
                                    <img width="64" src="{{ asset('images/products/' . $item->options->image) }}" alt="{{ $item->name }}" />
                                </a>
                                <div class="media-body">
                                    <h6 class="widget-product-title two-line">
                                        <a href="{{route('product-single',$item->options->slug)}}">{{ $item->name }}</a>
                                    </h6>
                                    <div class="widget-product-meta">
                                        <span class="font-secondary mr-2">Rs {{ $item->price }}</span><span class="text-muted">x {{ $item->qty }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="accordion mb-3" id="order-options">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="accordion-heading">
                                    <a href="#promo-code" class="border-bottom" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="promo-code">
                                        Apply promo code
                                        <span class="accordion-indicator"></span>
                                    </a>
                                </h3>
                            </div>
                            <div class="collapse show border-bottom" id="promo-code" data-parent="#order-options">
                                <form id="promo-form" class="card-body">
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="promo_code" placeholder="Promo code" required>
                                        <small class="text-danger" id="promo-error"></small>
                                        <small class="text-success" id="promo-success"></small>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary btn-block">Apply discount promo code</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled font-size-sm pb-2 border-bottom">
                        <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">Rs. {{ $cartPrice['subTotal'] }}</span></li>
                        <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Discount:</span><span class="text-right" id="discount-code">Rs. 0</span></li>
                        <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Shipping:</span><span class="text-right" id="shipping-price">Rs. 0</span></li>
                    </ul>
                    <div class="d-flex justify-content-between">
                        <p class=" font-weight-bold text-center ">Grand Total:</p>
                        <p class=" font-weight-bold text-center" id="grand-total"> {{ $final }}</p>
                    </div>
                </div>
            </aside>
            <!-- List of items-->
            <section class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mt-5 border-bottom mb-4">
                    <h2 class="h4">Billing / Shipping Address</h2>
                </div>
                <form action="{{ route('checkout-page') }}" Method="post">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="discount_id" id="discount-id" value="">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="checkout-fn">Full Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-fn" value="{{ old('first_name', $user->first_name ?? '') }}" name="first_name" required>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-ln">Last Name<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-ln" value="Doe" required>
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-email">E-mail Address<span class="text-danger">*</span></label>
                                <input class="form-control" type="email" id="checkout-email" name="email" value="{{ $user->email }}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-phone">Phone Number<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-phone" name="phone" value="{{ $user->phone }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-country">Country<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-country" name="country" value="{{ $userInfo->country ?? '' }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-province">Province<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-province" name="province" value="{{ $userInfo->province ?? '' }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-city">City<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-city" name="city" value="{{ $userInfo->city ?? '' }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-zip">ZIP Code<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-zip" name="zip_code" value="{{ $userInfo->zip_code ?? '' }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-address-1">Address 1<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="checkout-address-1" name="address_1" value="{{ $userInfo->address1 ?? '' }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-address-2">Address 2</label>
                                <input class="form-control" type="text" id="checkout-address-2" name="address_2" value="{{ $userInfo->address2 ?? '' }}">
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
                        <!-- <div class="card">
                            <div class="card-header p-3" role="tab">
                                <div class="accordion-heading d-flex justify-content-between">
                                    <div class="acc-heading d-flex align-items-center">
                                        <input type="radio" id="esewa" name="payment" value="ESEWA">
                                        <i class="czi-card font-size-lg mr-2 mt-n1 align-middle ml-2"></i>Pay with Esewa
                                    </div>
                                    <a href="#tab2" data-toggle="collapse" class="d-flex justify-content-between"><span class="accordion-indicator"></span></a>
                                </div>
                            </div>
                            <div class="collapse " id="tab2" data-parent="#payment-method" role="tabpanel">
                                <div class="card-body">
                                    <p>After clicking “Complete order”, you will be redirected to You will be asked to login with Esewa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-3" role="tab">
                                <div class="accordion-heading d-flex justify-content-between">
                                    <div class="acc-heading d-flex align-items-center">
                                        <input type="radio" id="card_payment" name="payment" value="CARD">
                                        <i class="czi-card font-size-lg mr-2 mt-n1 align-middle ml-2"></i>Pay with Credit Card
                                    </div>
                                    <a href="#tab3" data-toggle="collapse" class="d-flex justify-content-between"><span class="accordion-indicator"></span></a>
                                </div>
                            </div>
                            <div class="collapse " id="tab3" data-parent="#payment-method" role="tabpanel">
                                <div class="card-body">
                                    <p class="font-size-sm">We accept credit cards:</p>
                                    <div class="interactive-credit-card row">
                                        <div class="form-group col-md-6">
                                            <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- Navigation (desktop)-->
                    <div class=" d-flex pt-4 mt-3">
                        <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="{{route('cart-item')}}"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>

                        <!-- <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="#sucess-modal" data-toggle="modal"><span class="d-none d-sm-inline">Complete Order</span><span class="d-inline d-sm-none">Next</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div> -->

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
    <div class="modal fade" id="sucess-modal" tabindex="-1" role="dialog">
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
    </div>
</section>

@endsection
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const shippingSelect = document.getElementById("checkout-shipping");
    const shippingPriceEl = document.getElementById("shipping-price");
    const subtotalEl = document.getElementById("subtotal");
    const discountEl = document.getElementById("discount-code");
    const grandTotalEl = document.getElementById("grand-total");

    let subtotal = parseFloat({{ $final }});
    let discountAmount = 0;
    let shippingPrice = 0;

    function updateGrandTotal() {
        let totalAfterDiscount = subtotal - discountAmount;
        grandTotalEl.textContent = "Rs. " + (totalAfterDiscount + shippingPrice);
    }

    // Shipping select
    shippingSelect.addEventListener("change", function () {
        let selectedOption = this.options[this.selectedIndex];
        shippingPrice = parseFloat(selectedOption.getAttribute("data-price")) || 0;
        shippingPriceEl.textContent = "Rs. " + shippingPrice;
        updateGrandTotal();
    });

    // Promo form
    document.getElementById('promo-form').addEventListener('submit', async function(e) {
        e.preventDefault();

        const code = this.promo_code.value.trim();
        const errorSpan = document.getElementById('promo-error');
        const successSpan = document.getElementById('promo-success');
        const discountHidden = document.getElementById('discount-id');

        errorSpan.textContent = '';
        successSpan.textContent = '';

        if (!code) return;

        try {
            const response = await fetch('/apply-promo', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value
                },
                body: JSON.stringify({ code })
            });
            const data = await response.json();

            if (data.success) {
                // Determine discount amount
                if(data.discount.type === 'percent') {
                    discountAmount = subtotal * (parseFloat(data.discount.discount)/100);
                    discountEl.textContent = "Rs. " + discountAmount.toFixed(2) + ` (${data.discount.discount}%)`;
                } else {
                    discountAmount = parseFloat(data.discount.discount);
                    discountEl.textContent = "Rs. " + discountAmount.toFixed(2);
                }

                discountEl.dataset.discount = discountAmount; // store for reference
                updateGrandTotal();

                discountHidden.value = data.discount.id;

                successSpan.textContent = data.message;

            } else {
                discountAmount = 0;
                discountEl.textContent = "Rs. 0";
                updateGrandTotal();
                discountHidden.value = '';

                errorSpan.textContent = data.message;
            }
        } catch (err) {
            discountAmount = 0;
            discountEl.textContent = "Rs. 0";
            updateGrandTotal();
            discountHidden.value = '';

            errorSpan.textContent = 'Something went wrong. Please try again.';
        }
    });
});
</script>
@endpush
