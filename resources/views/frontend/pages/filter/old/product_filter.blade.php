   @if($products->isNotEmpty())
   @foreach($products->take(12) as $value) 
 
   <li>
      <div class="uk-product-list">
         <a href="{{route('product-single',$value->slug)}}" class="uk-inline-clip uk-transition-toggle">
            <figure class="uk-product-img">
               <div class="uk-position-top uk-position-z-index uk-padding-small">
                  <!-- <div class="uk-label f-10 bg-primary uk-magin">New</div> -->
               </div>
               <img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product">
               <img src="@if($value->images->count()>1){{asset('images/products/'.$value->images->where('is_main', 0)->first()->image)}}@else{{asset('images/products/'.$value->get_main_image($value->id))}}@endif" class="uk-position-cover uk-transition-scale-up" alt="Product"> 
                 
            </figure>
         </a>
         <div class="uk-product-description">
            <div class="uk-grid-small uk-flex uk-flex-middle uk-text-center" uk-grid>
               <div class="uk-width-1-1">
                  <h5 class="uk-margin-remove"><a href="{{route('product-single',$value->slug)}}">{{$value->product_name}} </a></h5>
               </div>
               <div class="uk-width-expand">
                  <div>
                     <h5 class="uk-margin-remove text-primary">${{$value->discount_price}} <del class="f-12">${{$value->price}}</del></h5>
                  </div>
               </div>
              
            </div>
         </div>
         
      </div>
   </li> 
   @endforeach
   @endif

@push('scripts')
    <script>
        // filter
        $(document).ready(function () {

            $('.item_sort').change(function (e) {
                var val = $(this).find(':checked').val();

                $.ajax({
                    url: document.URL,
                    type: 'get',
                    data: {
                        value: val,
                    },
                    success: function (result) {

                        $('.product_filter_result').replaceWith($('.product_filter_result')).html(result);
                    }
                });

            })


        });
    </script>
@endpush
