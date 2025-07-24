   <div class="uk-modal-dialog">
   
   <div class="uk-modal-header uk-flex uk-flex-between uk-flex-middle">
         <h4 class="uk-margin-remove">Order No - {{$order_details[0]->orders->order_track}} </h4>
         <button class="uk-modal-close" type="button" uk-close></button>
      </div>
      <div class="uk-modal-body" uk-overflow-auto>
         <ul class="uk-cart-list">
            <!-- -->
             @foreach($order_details as $value)
            <li>
               <div class="uk-width-1-1">
                  <div class="uk-grid-small uk-grid" uk-grid="uk-grid">
                     <div class="uk-width-auto uk-first-column">
                        <div class="uk-cart-img-lg">
                           <a href="">
                           <img src="{{asset('images/products/'.$value->products->images->where('is_main','=',1)->first()->image)}}" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="uk-width-expand@m">
                        <div class="uk-margin-remove f-11">
                           <a href="{{route('product-single', $value->products->slug)}}" class="text-black">{{$value->products->product_name}}
                           </a>
                        </div>
                        
                        <h5 class="uk-margin-small text-secondary">${{$value->price}}
                        </h5>
                        <span>Color: {{$value->color}}</span>
                        @if($value->size)
                        <span>Size: {{$value->size}}</span>
                        @endif
                     </div>
                     <div class="uk-width-auto@m">
                        <span class="uk-margin-small text-black uk-display-block">Quantity</span>
                        <span class="uk-margin-small text-secondary">{{$value->quantity}}</span>
                     </div>
                     <div class="uk-width-auto@m">
                        <span class="uk-margin-small text-black uk-display-block">Subtotal</span>
                        <span class="uk-margin-small text-secondary">${{$value->price*$value->quantity}}</span>
                     </div>
                  </div>
               </div>
            </li>
            @endforeach
            <!-- -->
         
            
         </ul>
      </div>
      <div class="uk-modal-footer uk-flex uk-flex-between">
        <div>
          <span class="text-muted">Subtotal:&nbsp;</span><span>${{$value->orders->subtotal}}</span>
        </div>
        <div>
          <span class="text-muted">Shipping:&nbsp;</span><span>${{$value->orders->shippings->shipping_price}}</span>
        </div>
        <div>
          <span class="text-muted">Total:&nbsp;</span><span>${{$value->orders->grand_total}}</span>
        </div>
      </div>
   </div>