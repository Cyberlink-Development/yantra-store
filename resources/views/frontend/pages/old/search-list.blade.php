@extends('frontend.include.master')
@section('content')
<section class="uk-section-xsmall">
   <div class="uk-container">
      <ul class="uk-breadcrumb">
         <li><a href="#">Product Search </a></li>
         <li><span></span></li>
      </ul>
   </div>
</section>
<!-- breadcrumb -->
<!-- banner -->
<div class="uk-container">
   <div class="uk-list-banner uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover 
      uk-background-top-center" data-src="{{asset('images/products/list-banner.jpg')}}" uk-img >
      <div class="uk-hero-banner-content uk-width-1-1 uk-position-z-index ">
         <div class="uk-position-relative  uk-flex-middle uk-flex uk-light">
            <div class="uk-padding">
               <div class="uk-grid">
                  <div class="uk-width-expand@m uk-width-1-2">
                     <h3 class="f-w-600  uk-margin-remove"> Search Results </h3>
                     <div class="uk-visible@m uk-margin-top">
                        <p>
                           Our luxurious women's pure cashmere cardigans are all crafted by us with comfort and style in mind. Effortless elegance and the highest quality yarn combine to make the perfect cashmere cardigan collection.
                        </p>
                        <p>
                           Buttoned cardigans, zip cardigans, and those in-between, our cardigans offer year-round practicality in attractive colours in the finest cashmere.
                           
                        </p>
                        
                     </div>
                  </div>
                  <div class="uk-width-1-3@m">
                  </div>
                  <div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</section>
</div>
<!-- end banner -->

@if($products->isNotEmpty())
<!-- product list -->
<section class="uk-section-small bg-white">
   <div class="uk-container">
     <div class="uk-margin" >
         <div class="uk-width-medium">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                 <div>
                 <label for="" >Sort By</label>  
                 </div>
                 <div>
                 <select class="item_sort uk-select" name="sortParam">
                     <option value="0">Select One</option>
                     <option value="a_to_z">A to Z</option>
                     <option value="z_to_a">Z to A</option>
                     <option value="low_to_high">Low to High (Price)</option>
                     <option value="high_to_low">High to Low (Price)</option>
                     <option value="recent">Recent</option>
                     <option value="older">Older</option>
                  </select>
                 </div>
            </div>
         </div>
      </div>
      <ul class="product_filter_result uk-child-width-1-2 uk-child-width-1-4@m  uk-grid-small" uk-height-match="target: .uk-product-list" uk-grid="uk-grid">
   <!--  -->
   
   @foreach($products as $value) 
   <li>
      <div class="uk-product-list">
         <a href="{{route('product-single',$value->slug)}}" class="uk-inline-clip uk-transition-toggle">
            <figure class="uk-product-img">
               <div class="uk-position-top uk-position-z-index uk-padding-small">
                  <!-- <div class="uk-label f-10 bg-primary uk-magin">New</div> -->
               </div>
               <img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product">
               <img src="@if($value->images->count()>1){{asset('images/products/'.$value->images->where('is_main', 0)->first()->image)}}@else{{asset('images/products/'.$value->get_main_image($value->id))}}@endif" class="uk-position-cover uk-transition-scale-up" alt="Product">
                  {{-- <div class="uk-hover-hide-show">
                      <a  class="uk-addtocart uk-flex uk-flex-middle" onclick="UIkit.notification({message: '<span uk-icon=\'icon: cart\'></span> Added to cart <a  uk-toggle=\'target: #cart\'>Check </a>', pos: 'bottom-center', status: 'primary'})">
                           <span uk-icon="icon:cart;" class="uk-icon"></span> <span>Add to cart</span>
                     </a>
                  </div> --}}
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
   <!--  -->
</ul>  
 
       
   </div>
</section>
<!-- end product list -->
@else
<section class="uk-section-small bg-white">
   <div class="uk-container">
     <div class="uk-margin" >
         <h4 class="text-center">'{{$key}}' not found</h4>
      </div>
   </div>
</section>
@endif
 
@endsection
@push('scripts')
    <script>
        // filter
        $(document).ready(function () {
          
            $('.item_sort').change(function (e) {
                var val = $(this).find(':checked').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: document.URL,
                    type: 'post',
                    data: {
                        key: '{{$key}}',
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
