@extends('frontend.include.master')
@section('content')

   <!-- section -->
<section class="uk-section-small bg-white">
    <div class="uk-container">
    <h3>Billing Details</h3>
    <form action="{{route('checkout-address')}}" method="post">  
    <div uk-grid="uk-grid" class="uk-grid">
            <div class="uk-width-expand@m">     
                @csrf        

                @if(isset($product))
                <input type="hidden" name="is_order" value="1" />
                <input type="hidden" name="product_slug" value="{{$product->slug}}" />
                <input type="hidden" name="quantity" value="{{$quantity}}" />
                <input type="hidden" name="size" value="{{$size}}" />
                <input type="hidden" name="color" value="{{$color}}" />
                @endif
              
                <div class="uk-grid-medium" uk-grid="uk-grid">
                    <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="first_name">First Name
                            <span class="uk-text-danger">*</span></label>
                        <input
                            class="uk-input"
                            type="text"
                            name="first_name"
                            value="{{$user->first_name}}"
                            placeholder="Enter your first name"
                            id="first_name">
                    </div>
                    <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="last_name">Last Name
                            <span class="uk-text-danger">*</span></label>
                        <input
                            class="uk-input"
                            type="text"
                            name="last_name"
                            value="{{$user->last_name}}"
                            placeholder="Enter your last name"
                            id="last_name">
                    </div>
                    <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="phone">Phone Number
                            <span class="uk-text-danger">*</span></label>
                        <input
                            class="uk-input"
                            type="text"
                            name="phone"
                            placeholder="Please enter your phone number"
                            value="{{$user->phone}}"
                            id="phone">
                    </div>
                    <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="Email">Email
                            <span class="uk-text-danger">*</span></label>
                        <input
                            class="uk-input"
                            type="email"
                            name="email"
                            value="{{$user->email}}"
                            placeholder="Please enter your phone number"
                            id="Email">
                    </div>
                    {{-- <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="Country">Country
                            <span class="uk-text-danger">*</span></label>
                        <select class="uk-select" name="country" id="country" required="required">
                            <option selected disabled style="display:none;">Please choose your country</option>
                            @foreach($countries as $country)
                            <option value="{{$country->slug}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    {{-- <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="city">City
                            <span class="uk-text-danger">*</span></label>
                        <select class="uk-select" name="city" id="city" required="required">
                            <option selected disabled value="">Please choose your city</option>
                        </select>
                    </div> --}}
                    <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="country">Country
                            <span class="uk-text-danger">*</span></label>
                        <input
                            class="uk-input"
                            type="text"
                            name="country"
                            placeholder="Please enter your country"
                            id="country">
                    </div>
                    <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="city">City
                            <span class="uk-text-danger">*</span></label>
                        <input
                            class="uk-input"
                            type="text"
                            name="city"
                            placeholder="Please enter your city"
                            id="city">
                    </div>

                    <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="shipping_option">Shipping Option
                            <span class="uk-text-danger">*</span></label>
                        <select class="uk-select" name="shipping_option" id="shipping_option" required="required">
                            <option selected disabled style="display:none;">Please shipping option</option>
                            @foreach($shipping_option as $row)
                            <option data-price="{{$row->price}}" data-id="{{$row->id}}" value="{{$row->id}}">{{$row->medium->title}}</option>
                            @endforeach
                        </select>
                    </div>
                  
                    <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="Address">Address 1
                        <span class="uk-text-danger">*</span>
                        </label>
                        <input
                            class="uk-input"
                            type="text"
                            name="address_1"
                            placeholder="For Example: House# 123, Street# 123, ABC Road"
                            id="Address">
                    </div>
                    <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="Address">Address 2</label>
                        <input
                            class="uk-input"
                            type="text"
                            name="address_2"
                            placeholder="For Example: House# 123, Street# 123, ABC Road"
                            id="Address">
                    </div>
                    <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="zipcode">Zipcode</label>
                        <input
                            class="uk-input"
                            type="number"
                            name="zip_code"
                            placeholder="For Example: 44600"
                            id="zip_code">
                    </div>
                
          
                    <div class="uk-width-1-1@m">
                        <label class="uk-margin-small-bottom uk-display-block" for="note">Order notes (optional)
                        </label>
                        <textarea class="uk-textarea" name="order_note" id="note" rows="5"></textarea>
                    </div>

                    <!-- Required hidden files -->
                    <input type="hidden" id="subtotal" value="{{$final}}" name="subtotal">
                    <input type="hidden" id="shipping" name="shipping">
                    <input type="hidden" id="shipping_id" name="shipping_id">
                    <input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">
                    <input type="hidden" name="weight" id="weight" value="{{$weight}}">

                </div>
              
                <div class="uk-payment-methods uk-margin-medium uk-border">
                <div class="uk-width-1-1 uk-margin-medium-bottom"> 
                    <h3 class="uk-margin-small">Payment</h3>
                    <span>All transactions are secure and encrypted.</span>
                </div>
                    <ul uk-accordion="" class="uk-accordion-outline">
                        <!-- <li>
                            <div class="uk-accordion-title">
                                <div class="uk-flex uk-flex-between">
                                    <div>
                                         Pay with Credit Card  
                                    </div> 
                                    <div>
                                    <ul class="uk-flex uk-grid-small" uk-grid>
                                        <li>
                                            <img src="assets/images/payments/visa.svg" alt="">
                                        </li>
                                        <li>
                                            <img src="assets/images/payments/master-card.svg" alt="">
                                        </li>
                                        <li>
                                            <img src="assets/images/payments/american-express.svg" alt="">
                                        </li>
                                    </ul>
                                    </div>   
                                </div> 
                            </div>
                            <div class="uk-accordion-content uk-text-center uk-padding">
                               <div class="uk-grid-small" uk-grid>
                                     <div class="uk-inline-block uk-width-1-1">
                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                        <input class="uk-input" type="text" placeholder="Card Number">
                                     </div>
                                     <div class="uk-inline-block uk-width-1-1">
                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                                        <input class="uk-input" type="text" placeholder="Name on card">
                                     </div>
                                     <div class="uk-inline-block uk-width-1-2@m">
                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                        <input class="uk-input" type="text" placeholder="Expiration Date (MM / YY)">
                                     </div>
                                     <div class="uk-inline-block uk-width-1-2@m">
                                        <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: question" uk-tooltip="3-digit security code usually found on the back of your card. American Express cards have a 4-digit code located on the front."></a>
                                        <input class="uk-input" type="text" placeholder="Security Code">
                                     </div>
                               </div>
                            </div>
                        </li> -->
                        <!-- <li>
                        <div class="uk-accordion-title">
                                <div class="uk-flex uk-flex-between">
                                    <div>
                                    Esewa Payment
                                    </div> 
                                    <div>
                                    <ul class="uk-flex uk-grid-small" uk-grid>
                                        <li>
                                            <img src="assets/images/payments/esewa.svg" alt="">
                                        </li> 
                                    </ul>
                                    </div>   
                                </div> 
                            </div>


                         
                            <div class="uk-accordion-content uk-text-center uk-padding">
                                <img src="assets/images/payments/blank-window.svg" alt="">
                                <p>After clicking “Complete order”, you will be redirected to You will be asked to login with Esewa.</p>
                                <p>Total <strong class="emphasis">$314.71</strong></p>
                            </div>
                        </li> -->
                        <!-- <li>
                            
                            <div class="uk-accordion-title">
                                <div class="uk-flex uk-flex-between">
                                    <div>
                                    Khalti - Digital Wallet
                                    <small class="uk-display-block">Pay with Khalti Balance or 16+ eBanking Services</small>
                                    </div> 
                                    <div>
                                    <ul class="uk-flex uk-grid-small" uk-grid>
                                        <li>
                                            <img src="assets/images/payments/khalti.svg" alt="">
                                        </li> 
                                    </ul>
                                    </div>   
                                </div> 
                            </div>

                            <div class="uk-accordion-content uk-text-center uk-padding">
                                <img src="assets/images/payments/blank-window.svg" alt="">
                                <p>After clicking “Complete order”, you will be redirected to You will be asked to login with Khalti.</p>
                                <p>Total <strong class="emphasis">$314.71</strong></p>
                            </div>
                        </li> -->
                        <li>
                            <div class="uk-accordion-title">
                                <div class="uk-flex uk-flex-between">
                                    <div>
                                        Cash On Delivery<small class="uk-display-block">Pay cash at the time of delivery</small>
                                    </div> 
                                    <div>
                                    <ul class="uk-flex uk-grid-small" uk-grid>
                                        <li>
                                            <img src="assets/images/payments/cod.svg" alt="">
                                        </li> 
                                    </ul>
                                    </div>   
                                </div> 
                            </div>

                            <div class="uk-accordion-content uk-text-center uk-padding">
                                <p>You can pay cash at the time of delivery. We accept Nepali currency within Nepal, and you can pay the invoice amount when our delivery staff arrives to your home/office.</p>
                            </div>
                        </li>
                    </ul>
                   <div class="uk-flex-between uk-flex uk-flex-middle uk-margin-top" uk-grid>
                    <div>
                        <a href="{{route('index')}}" class="uk-flex uk-flex-middle"><span class="material-icons-outlined f-14 uk-margin-small-right">arrow_back_ios</span>Return to shopping</a>
                    </div>
                    <div>
                    <button class="uk-button uk-button-large uk-btn-primary uk-flex uk-flex-middle">Complete order <span class="material-icons-outlined uk-margin-small-left"> arrow_right_alt </span></button>
                    </div>
                   </div>
                </div>
            </div>
            <div class="uk-width-2-5@m uk-flex-first uk-flex-last@m">
                <div
                    class="uk-summary bg-white uk-border-rounded uk-box-shadow-small"
                    uk-sticky="media: 959; offset:100; bottom: .stickyend;">
                    <div class="uk-summary-header">
                        <h4 class="uk-margin-remove">Your Order</h4>
                    </div>
                    <div class="uk-summary-body">
                        <ul class="uk-calculation uk-margin-small-top uk-margin-small-bottom">
                            @if(isset($cartItem))
                            @foreach($cartItem as $data)
                            <li class="uk-flex uk-flex-between uk-flex-middle">
                                <div class="uk-flex uk-flex-between uk-flex-middle">
                                    <div class="uk-cart-img uk-margin-small-right">
                                        <a href="">
                                            <img src="{{asset('images/products/'.$data->options->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="uk-margin-small-bottom">{{$data->name}}
                                        <span class="uk-display-block  f-14">QTY : {{$data->qty}}
                                            <br>{{$data->options->color}}
                                            <br>Net weight: {{App\Model\Product::find($data->id)->weight}} gm 
                                        </span>
                                    </div>
                                    
                                </div>
                                <div class="f-18">
                                    ${{$data->price * $data->qty}}
                                </div>
                            </li>
                            @endforeach
                            @else
                            <li class="uk-flex uk-flex-between uk-flex-middle">
                                <div class="uk-flex uk-flex-between uk-flex-middle">
                                    <div class="uk-cart-img uk-margin-small-right">
                                        <a href="">
                                            <img src="{{asset('images/products/'.$product->get_main_image($product->id))}}" alt="">
                                        </a>
                                    </div>
                                    <div class="uk-margin-small-bottom">{{$product->product_name}}
                                        <span class="uk-display-block  f-14">QTY : {{$quantity}}
                                            <br>{{$color}}
                                            <br>Net weight: {{$product->weight}} gm 
                                        </span>
                                    </div>
                                    
                                </div>
                                <div class="f-18">
                                    ${{$product->price * $quantity}}
                                </div>
                            </li>
                            @endif
                            
                            <li class="uk-flex uk-flex-between">
                                <div>
                                    Subtotal
                                </div>
                                <div class="f-18">
                                 ${{$final}}
                                </div>
                            </li>
                            <li class="uk-flex uk-flex-between">
                                <div>
                                Shipping Cost
                                </div>
                                <div class="f-18" id="shipping-cost">

                                </div>
                            </li>
                            <li class="uk-flex uk-flex-between">
                                <div>
                                Total Weight
                                </div>
                                <div class="f-18" id="shipping-cost">
                                {{$weight}} gm
                                </div>
                            </li>
                            @if($weight_category)
                            <li class="uk-flex uk-flex-between">
                                <div>
                                Weight Category
                                </div>
                                <div class="f-18" id="shipping-cost">
                                {{$weight_category->min}}-{{$weight_category->max}}
                                </div>
                            </li>
                            @endif
                            <li class="uk-flex uk-flex-between uk-flex-middle text-primary">
                                <div class="uk-h4 uk-margin-remove">
                                    Total
                                </div>
                                <div class="uk-h4 uk-margin-remove" id="total" data-sub-total={{$final}}>
                                ${{$final}}
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="uk-summary-footer">
                        <a href="checkout.php" class="uk-button uk-btn-primary uk-width-1-1">Place Order</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<div class="uk-display-block stickyend"></div>
</section>

@endsection
@push('scripts')
    <script type="text/javascript">

        // $("#country").on('change', function(){
        //    let slug = $(this).find(":selected").val();

        //     $.ajax({
        //         type: 'GET',
        //         url: '/getcity/'+slug,
        //         success: function (response) {

        //           $("#city").empty();
        //           $("#city").append(`<option value='' style="display:none;">Please Choose Your City</option>`);

        //           response.map(function(obj){
        //             let htmlObj = `
        //               <option value="`+obj["name"]+`">`+obj["name"]+`</option>
        //             `;
        //             $("#city").append(htmlObj);
        //           });

        //         },
        //         error: function (data) {//if an error occurs
        //             toastr.error("There is something wrong");
        //         }
        //     });

        // });

        // $('#city').on('change', function() {
        //     // alert( this.value );

        //     /*let shipping= $('.shipping_price').html(this.value);
        //     let shipping_cost=parseFloat(this.value);
        //     let tax=parseFloat($('.tax').html());
        //     let subtotal=parseFloat($('.subtotal').html());

        //     let total=(subtotal+tax +shipping_cost);

        //     $('.total').html(total);*/

        //     let city = $(this).find(":selected").html();

        //     $.ajax({
        //         type: 'GET',
        //         url: '/getshippingprice/'+city,
        //         success: function (response) {
        //           $("#shipping-cost").html("$"+response.shipping_price);
        //           $("#shipping").val(response.shipping_price);
        //           $("#shipping_id").val(response.id);
        //           let total = parseFloat($("#total").attr("data-sub-total"))+parseFloat(response.shipping_price);
        //           $("#total").html("$"+total);
        //         },
        //         error: function (data) {//if an error occurs
        //             toastr.error("There is something wrong");
        //         }
        //     });

        // });

        $("#shipping_option").change(function(){
            let price = $('option:selected', this).attr('data-price');
            let id = $('option:selected', this).attr('data-id');

            $("#shipping-cost").html("$"+price);
            $("#shipping").val(price);
            $("#shipping_id").val(id);
            let total = parseFloat($("#total").attr("data-sub-total"))+parseFloat(price);
            $("#total").html("$"+total);
        });

        $('#payment_page').click(function () {
            let myform = document.getElementById('address_form');
            let formData = new FormData(myform);
            let shipping= $('.shipping_price').text();
            var shipping_id = $("#shipping_id").val();
            var product_id=$('#product_id').val();
            console.log(product_id);

            formData.append('subtotal',{{$final}});
            formData.append('tax',{{0.13*$final}});
            formData.append('shipping',shipping);
            formData.append('shipping_id',shipping_id);
            formData.append('user_id',{{\Illuminate\Support\Facades\Auth::user()->id}});


            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{route('checkout-address')}}',
                data:formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    console.log(response.route);
                    if (response.status == 'success') {
                        toastr.success(response.message);
                    }
                    window.location=response.route;

                },
                error: function (data) {//if an error occurs
                    if (data.status == 406) {
                        jQuery.each(data.responseJSON.errors, function (key, value) {
                            toastr.error(value);

                        });
                    }
                }
            });

        });
    </script>

@endpush
