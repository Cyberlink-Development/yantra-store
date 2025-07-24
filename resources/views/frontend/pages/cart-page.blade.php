@extends('frontend.include.master')
@section('content')

<!-- section -->
<section class="uk-section-small bg-white">
    <div class="uk-container">  
        <div class="uk-width-1-1"> <h3>Shopping Cart</h3></div>
        <div uk-grid  class="uk-grid">
            <div class="uk-width-expand@m">
                <ul class="uk-cart-list-large bg-white uk-border-rounded uk-box-shadow-small">
                    <form id="update-form" method="POST">
                        @foreach($cartItem as $data)
                        <!-- -->
                        <li id="{{$data->rowId}}">
                        <input type="hidden" name="id[]" value="{{$data->rowId}}">
                            <div class="uk-width-1-1">
                                <div class="uk-grid-medium uk-flex-middle" uk-grid="uk-grid">
                                    <div class="uk-width-auto@m">
                                        <div class="uk-cart-img-lg">
                                            <a href="{{route('product-single', $data->options->slug)}}">
                                                <img src="{{asset('images/products/'.$data->options->image)}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="uk-margin-remove">
                                            <a href="{{route('product-single', $data->options->slug)}}" class="text-black uk-h4 uk-oneline-text uk-margin-small">{{$data->name}}
                                            </a>
                                        </div>
                                        <div class="f-w-600 f-13">
                                            @if($data->options->size)
                                            Size:{{$data->options->size}}
                                            @endif
                                            Color: {{$data->options->color}}
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-hidden@m"></div>

                                    <div class="uk-width-auto">
                                        <span class="uk-margin-small text-black uk-h5 uk-display-block">Price per Unit</span>
                                        <div class="uk-margin-remove text-secondary uk-h5">${{$data->price}}
                                        </div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="  uk-flex-middle">
                                            <label class="uk-margin-small text-black uk-h5 uk-display-block" for="size">Qty:</label>
                                            <div class="number-input-small">
                                                <button type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                    class="minus small quantity-button" data-row-id="{{$data->rowId}}" data-row-price="{{$data->price}}"></button>
                                                @php
                                                $color_id = App\Model\Color::where('title', $data->options->color)->pluck('id')->first();
                                                $size_id = App\Model\Size::where('title', $data->options->size)->pluck('id')->first();
                                                @endphp 
                                                <input class="quantity" readonly id="qt{{$data->rowId}}" min="1" max="{{App\Model\Product::find($data->id)->totalStock($color_id, $size_id)}}" name="quantity[]" value="{{$data->qty}}" type="number">
                                                <button type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                    class="plus small quantity-button" data-row-id="{{$data->rowId}}" data-row-price="{{$data->price}}"></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-auto">
                                        <span class="uk-margin-small text-black uk-h5 uk-display-block">Total</span>
                                        <span class="uk-margin-small text-secondary uk-h5" id="mintotal{{$data->rowId}}">${{$data->qty * $data->price}}
                                        </span>
                                    </div>

                                    <div class="uk-width-auto">
                                        <a
                                            class="uk-text-danger uk-flex delete-btn"
                                            href="#"
                                            uk-tooltip="Remove"
                                            data-row-id="{{$data->rowId}}"
                                            title=""
                                            aria-expanded="false">
                                            <span class="material-icons-outlined">close</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- -->
                        @endforeach

                        
                    </ul>
                    @if(count($cartItem)>0)
                    <button class="uk-button uk-btn-primary uk-width-1-1" id="update-button" style="margin-top:20px;">Update</button>
                    @endif
                    </form>
             </div>
            <div class="uk-width-1-3@m">
                <div class="uk-summary bg-white uk-border-rounded uk-box-shadow-small">
                    <div class="uk-summary-header"> 
                        <h4 class="uk-margin-remove">Order Summary</h4>
                    </div> 
                    <div class="uk-summary-body"> 
                     <ul class="uk-calculation uk-margin-small-top uk-margin-small-bottom">
                        <li class="uk-flex uk-flex-between">
                            <div>
                            Sub-Total  
                            </div>
                            <div id="sub-total">
                            ${{Gloudemans\Shoppingcart\Facades\Cart::subtotal();}}
                            </div>
                        </li>
                     </ul>
                    </div>
                    @if(Gloudemans\Shoppingcart\Facades\Cart::count() > 0)
                    <div class="uk-summary-footer">  
                    <a href="{{route('checkout-address')}}" class="uk-button uk-btn-primary uk-width-1-1">Proceed to Checkout</a>
                    </div>
                    @endif                                    
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- section -->

@endsection
@push('scripts')

    <script>

        $("#update-form").submit(function(event) {
            event.preventDefault();

            let form = document.getElementById("update-form");
            let formData = new FormData(form);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{route('cart-update')}}',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,

                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {

                        toastr.success(data.message);
                        // alert({{Gloudemans\Shoppingcart\Facades\Cart::count();}});
                        $(".uk-cart-count").replaceWith($(".uk-cart-count")).html(data.count);
                        $("#sub-total").replaceWith($("#sub-total")).html("$"+data.subTotal);

                    }
                    jQuery.each(data.errors, function (key, value) {

                        toastr.error(value);
                        // hideLoading();

                    })
                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });
        });

        $(".quantity").keyup(function(event) {
            event.preventDefault();
            alert($(this).val()); 
        });

        $(".quantity-button").click(function(event){
            event.preventDefault();
            let cartId = $(this).attr("data-row-id");
            let quantity = $("#qt"+cartId).val();
            let price = $(this).attr("data-row-price");

            $("#mintotal"+cartId).html("$"+quantity*price);

        });

        $(".delete-btn").click(function(event){
            event.preventDefault();
            let cartId = $(this).attr("data-row-id");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'GET',
                url: '{{route('cart-remove')}}',
                data: {'id':cartId},
                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {
                        $("#"+cartId).remove();
                        //$('.mini-cart').replaceWith($('.mini-cart')).html(data);
                        $('.uk-cart-count').replaceWith($('.uk-cart-count')).html(data.count);
                        $("#sub-total").replaceWith($("#sub-total")).html("$"+data.subTotal);
                        toastr.success(data.message);
                        if(data.count==0){
                            $("#update-button").remove();
                        }

                    }
                    jQuery.each(data.errors, function (key, value) {

                        toastr.error(value);
                        // hideLoading();

                    })
                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });
         });
    </script>

@endpush
