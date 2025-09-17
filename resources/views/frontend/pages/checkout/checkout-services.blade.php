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
                <div class="cz-sidebar-static rounded-lg box-shadow-lg ">
                    <div class="widget mb-3">
                        <h2 class="h4 text-center">Order summary</h2>
                        <div class="media align-items-center py-3 border-bottom">
                            <a class="d-block mr-2" href="{{ route('page.pagedetail', $service->uri) }}">
                                <img width="64" src="{{$service->banner ? asset('uploads/banners/'.$service->banner) : asset('theme-assets/img/computer/computer1.webp')}}" alt="{{ $service->post_title }}" />
                            </a>
                            <div class="media-body">
                                <h6 class="widget-product-title two-line">
                                    <a href="{{ route('page.pagedetail', $service->uri) }}">{{ $service->post_title }}</a>
                                </h6>
                                <div class="widget-product-meta">
                                    <span class="font-secondary mr-2">Rs {{ number_format($service->price,2) }}</span>
                                    {{-- <span class="text-muted">x 1</span> --}}
                                </div>
                            </div>
                        </div>
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
                        <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">Rs. {{ number_format($total,2) }}</span></li>
                        <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Discount:</span><span class="text-right" id="discount-code">Rs. 0.00</span></li>
                    </ul>
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold text-center">Grand Total:</p>
                        <p class="font-weight-bold text-center" id="grand-total">Rs. {{ number_format($total,2) }}</p>
                    </div>
                </div>
            </aside>
            <!-- List of items-->
            <section class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mt-5 border-bottom mb-4">
                    <h2 class="h4">Billing / Shipping Address</h2>
                </div>
                    <form action="{{ route('checkout-services-success') }}" Method="post">
                        @csrf
                        <div class="row">
                            <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response">
                            <input class="form-control" type="hidden" id="checkout-fn" name="service_id" value="{{ $service->id }}" required>
                            <input type="hidden" name="discount_id" id="discount-id" value="">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="checkout-fn">Full Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="checkout-fn" name="first_name" value="{{ old('first_name', $user->first_name ?? '') }}" required>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="checkout-ln">Last Name<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="checkout-ln" name="last_name" required>
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
                                    <input class="form-control" type="text" id="checkout-country" name="country" value="{{ $userInfo->country }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="checkout-province">Province<span class="text-danger">*</span></label>
                                    <!-- <input class="form-control" type="text" id="checkout-province" name="province" required> -->
                                    <select class="form-control custom-select" id="checkout-province" name="province" required>
                                        <option value="" selected hidden>Choose Province</option>
                                        <option value="Province 1" {{$userInfo->province == 'Province 1' ? 'selected' : ''}}>
                                            Province 1
                                        </option>
                                        <option value="Madhesh Province" {{$userInfo->province == 'Madhesh Province' ? 'selected' : ''}}>
                                            Madhesh Province
                                        </option>
                                        <option value="Bagmati Province" {{$userInfo->province == 'Bagmati Province' ? 'selected' : ''}}>
                                            Bagmati Province
                                        </option>
                                        <option value="Gandaki Province" {{$userInfo->province == 'Gandaki Province' ? 'selected' : ''}}>
                                            Gandaki Province
                                        </option>
                                        <option value="Lumbini Province" {{$userInfo->province == 'Lumbini Province' ? 'selected' : ''}}>
                                            Lumbini Province
                                        </option>
                                        <option value="Karnali Province" {{$userInfo->province == 'Karnali Province' ? 'selected' : ''}}>
                                            Karnali Province
                                        </option>
                                        <option value="Sudurpashchim Province" {{$userInfo->province == 'Sudurpashchim Province' ? 'selected' : ''}}>
                                            Sudurpashchim Province
                                        </option>
                                    </select>
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
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="checkout-address">Address<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="address" name="address" value="{{ $userInfo->address1 ?? '' }}" required>
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
                            <div class="w-50 pr-3">
                                <a class="btn btn-secondary btn-block" href="{{ route('page.pagedetail', $service->uri) }}">
                                    <i class="czi-arrow-left mt-sm-0 mr-1"></i>
                                    <span class="d-none d-sm-inline">Back </span>
                                    <span class="d-inline d-sm-none">Back</span>
                                </a>
                            </div>
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
</section>

@endsection
@push('scripts')
<script src="https://www.google.com/recaptcha/api.js?render={{env('SITE_KEY')}}"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('<?php echo env("SITE_KEY"); ?>', {action: 'homepage'}).then(function (token) {
            document.getElementById('g_recaptcha_response').value = token;
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const subtotalEl = document.getElementById("subtotal");
    const discountEl = document.getElementById("discount-code");
    const grandTotalEl = document.getElementById("grand-total");

    let subtotal = parseFloat({{ $total }});
    let discountAmount = 0;

    function updateGrandTotal() {
        let grandTotal = subtotal - discountAmount;
        grandTotalEl.textContent = "Rs. " + grandTotal.toFixed(2);
    }
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
                    discountEl.textContent = ` (${data.discount.discount}%)` + " Rs. " + discountAmount.toFixed(2) ;
                } else {
                    discountAmount = parseFloat(data.discount.discount);
                    discountEl.textContent = "Rs. " + discountAmount.toFixed(2);
                }
                discountEl.dataset.discount = discountAmount; // store for reference
                updateGrandTotal();
                discountHidden.value = data.discount.id;
                successSpan.textContent = data.message;
                ajax_response(data);
            } else {
                discountAmount = 0;
                discountEl.textContent = "Rs. 0";
                updateGrandTotal();
                discountHidden.value = '';
                errorSpan.textContent = data.message;
                ajax_response(data);
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
