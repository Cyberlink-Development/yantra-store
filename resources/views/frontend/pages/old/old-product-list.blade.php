@extends('frontend.include.master')

@section('meta-keywords') {!! strip_tags($category->first()->seo_keyword) !!} @endsection
@section('meta-description') {!! strip_tags($category->first()->seo_description) !!} @endsection

@section('title', $category->first()->name)

@section('image') 
@if($category->first()->image){{asset('images/categories/'.$category->first()->image)}}@else{{asset('images/logo.png')}}@endif
@endsection

@section('short_description', strip_tags($category->first()->description))


@section('content')
<section class="uk-section-xsmall">
   <div class="uk-container">
      <ul class="uk-breadcrumb">
         @if($category->first()->getParent())
         <li><a href="{{route('product-list',$category->first()->getParent()->slug)}}">{{$category->first()->getParent()->name}}</a></li>
         @endif
         <li><span>{{$category->first()->name}}</span></li>
      </ul>
   </div>
</section>
<!-- breadcrumb -->
<!-- banner -->
@if($category->first()->banner)
<div class="uk-container">
   <div class="uk-section uk-list-banner uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover 
      uk-background-top-center" data-src="{{asset('images/categories/'. $category->first()->banner) }}" uk-img >
        <div class="uk-overlay-primary  uk-position-cover "></div>
      <div class="uk-hero-banner-content uk-width-1-1 uk-position-z-index ">
         <div class="uk-position-relative  uk-flex-middle uk-flex uk-light">
            <div class="uk-padding">
               <div class="uk-grid">
                  <div class="uk-width-expand@m uk-width-1-2">
                     <h3 class="f-w-600  uk-margin-remove"> {{$category->first()->name}} </h3>
                     <div class="uk-visible@m uk-margin-top">
                          {!! $category->first()->description !!}
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
@endif
</section>
 

</div>




<!-- end banner -->




<!-- categories -->
<!--<section class="uk-section uk-position-relative bg-grey">-->
 
@if(optional($children->first())->name)
  <div class="uk-margin uk-container">
      <div
         class="uk-margin uk-position-relative uk-visible-toggle"
         tabindex="-1"
         uk-slider="autoplay:true; sets: true;">
         <ul
            class="uk-slider-items uk-grid  uk-margin-remove uk-child-width-1-4@l uk-child-width-1-2 uk-grid-match uk-text-center " >
            <!-- -->
            <!-- -->
            @foreach($children as $value)
            <li class="bg-grey uk-padding uk-padding-remove-horizontal">
               <a
                  href="{{route('product-list', $value->slug)}}"
                  class="uk-transition-toggle uk-display-block uk-link-toggle uk-padding uk-padding-remove-vertical">
                  <div class="uk-categories-img">
                     <img
                        src="@if($value->image){{asset('images/categories/'.$value->image)}}@else{{asset('images/categories/1.jpg')}}@endif"
                        class="uk-transition-scale-up uk-transition-opaque"
                        alt="">
                  </div>
                  <h4 class="uk-margin-top uk-margin-remove-bottom uk-category-h4">{{$value->name}}</h4>
               </a>
            </li>
            @endforeach
            <!-- -->
            <!-- -->
         </ul>
      </div>
   </div>
   @endif
<!--</section>-->
<!-- end categories -->

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
   @if($products->isNotEmpty())
   @foreach($products as $value) 
   <li>
      <div class="uk-product-list">
         <a href="{{route('product-single',$value->slug)}}" class="uk-inline-clip uk-transition-toggle">
            <figure class="uk-product-img">
               <div class="uk-position-top uk-position-z-index uk-padding-small">
                  <!-- <div class="uk-label f-10 bg-primary uk-magin">New</div> -->
               </div>
               <img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="{{$value->product_name}}">
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
   @else
   <h3>No Products Available...</h3>
   @endif
   <!--  -->
</ul>

    {!! $products->links('frontend.include.pagination') !!}

   </div>
</section>
<!-- end product list -->
 
@endsection
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
