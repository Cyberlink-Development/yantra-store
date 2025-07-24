@extends('frontend.include.master')
@section('content')
   <!-- hero Banner -->
<section
   class="uk-home-banner uk-position-relative uk-visible-toggle" 
   tabindex="-1"
   uk-slideshow="animation: fade; min-height: 300; max-height: 600;">
   <ul class="uk-slideshow-items">
      @foreach($banner as $bannerItem)
      <li>
         <div class="uk-hero-banner">
            <img src="{{asset('images/banner/'.$bannerItem->picture)}}" class="uk-cover" alt="home banner">
            <div class="uk-position-bottom uk-caption-home uk-transition-slide-bottom">
               <div class="uk-container">
                  <div class="uk-padding-large uk-padding-remove-left">
                     <ul class="uk-grid-small" uk-grid="uk-grid">
                        <li class="uk-width-1-2@m">
                           <h1 class="uk-heading-small">
                              <span>{{$bannerItem->title}}</span>
                           </h1>
                           <p class="uk-visible@m f-18">{{$bannerItem->content}}</p>
                           <a href="{{$bannerItem->link}}" class="uk-button  uk-btn-primary ">Shop Now</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </li>
      @endforeach
   </ul>
   <a
      class="uk-position-center-left uk-slider-btn uk-position-small uk-hidden-hover"
      href="#"
      uk-slidenav-previous="uk-slidenav-previous"
      uk-slideshow-item="previous"></a>
   <a
      class="uk-position-center-right uk-slider-btn uk-position-small uk-hidden-hover"
      href="#"
      uk-slidenav-next="uk-slidenav-next"
      uk-slideshow-item="next"></a>
</section>
<!-- end hero banner -->
<!-- categories -->
<section class="uk-section uk-position-relative bg-grey">
   <div class="uk-margin uk-container">
      <div
         class="uk-margin uk-container-item-padding-remove-right uk-position-relative uk-visible-toggle"
         tabindex="-1"
         uk-slider="autoplay:true; sets: true;">
         <ul
            class="uk-slider-items uk-grid   uk-child-width-1-5@l uk-child-width-1-2 uk-grid-match uk-text-center" >
            <!-- -->
            <!-- -->
            @foreach($featured_category as $category)
            <li>
               <a
                  href="{{route('product-list', $category->slug)}}"
                  class="uk-transition-toggle uk-display-block uk-link-toggle">
                  <div class="uk-categories-img">
                     <img
                        src="@if($category->image){{asset('images/categories/'.$category->image)}}@else{{asset('images/categories/1.jpg')}}@endif"
                        class="uk-transition-scale-up uk-transition-opaque"
                        alt="">
                  </div>
                  <h4 class="uk-margin-top uk-margin-remove-bottom">{{$category->name}}</h4>
               </a>
            </li>
            @endforeach
            <!-- -->
            <!-- -->
         </ul>
      </div>
   </div>
</section>
<!-- end categories -->
<!-- product list -->
<section class="uk-section bg-white">
   <div class="uk-container">
      <div class="uk-title uk-margin-large-bottom uk-display-block">
         <h2 class="uk-h3 f-w-600 uk-text-uppercase uk-text-center uk-margin-remove">Featured Products</h2>
         <div class="uk-divider-small uk-text-center"></div>
      </div>

      <ul class="uk-child-width-1-2 uk-child-width-1-4@m  uk-grid-small" uk-height-match="target: .uk-product-list" uk-grid="uk-grid">
         @foreach($product as $data)
         <li>
            <div class="uk-product-list">
               <a href="{{route('product-single', $data->slug)}}" class="uk-inline-clip uk-transition-toggle">
                  <figure class="uk-product-img">
                     <div class="uk-position-top uk-position-z-index uk-padding-small">
                        <!-- <div class="uk-label f-10 bg-primary uk-magin">New</div> -->
                     </div>
                     <img src="{{asset('images/products/'.$data->get_main_image($data->id))}}" alt="Product">
                        <!-- <div class="uk-hover-hide-show">
                           <a  class="uk-addtocart uk-flex uk-flex-middle" onclick="UIkit.notification({message: '<span uk-icon=\'icon: cart\'></span> Added to cart <a  uk-toggle=\'target: #cart\'>Check </a>', pos: 'bottom-center', status: 'primary'})">
                                 <span uk-icon="icon:cart;" class="uk-icon"></span> <span>Add to cart</span>
                           </a>
                        </div> -->
                  </figure>
               </a>
               <div class="uk-product-description">
                  <div class="uk-grid-small uk-flex uk-flex-middle uk-text-center" uk-grid>
                     <div class="uk-width-1-1">
                        <h5 class="uk-margin-remove"><a href="{{route('product-single', $data->slug)}}">{{$data->product_name}} </a></h5>
                     </div>
                     <div class="uk-width-expand">
                        <div>
                           <h5 class="uk-margin-remove text-primary">${{$data->discount_price}} <del class="f-12">${{$data->price}}</del></h5>
                        </div>
                     </div>
                  
                  </div>
               </div>
               
            </div>
         </li>
         @endforeach
      </ul>

   </div>
</section>
<!-- end product list -->
<!-- action banner -->
<section class="uk-section bg-grey">
   <div class="uk-container">
      <ul class="uk-grid uk-child-width-1-4@m  uk-child-width-1-2 uk-text-center" uk-grid>
         <li>
            <img src="{{asset('images/action/1.png')}}" alt="" width="71" height="51">
            <div class="uk-margin-top">sizes from  <br>XS to XXXL </div>
         </li>
         <li>
            <img   src="{{asset('images/action/2.png')}}" alt=" " width="53" height="42">
            <div class="uk-margin-top">Next day  <br>delivery available</div>
         </li>
         <li>
            <img src="{{asset('images/action/3.png')}}" alt="" width="45" height="45">
            <div class="uk-margin-top">Customer<br> service available</div>
         </li>
         <li>
            <img src="{{asset('images/action/4.png')}}" alt="" width="45" height="45">
            <div class="uk-margin-top">Customer<br> service available</div>
         </li>
      </ul>
   </div>
</section>
<!-- end action banner --> 
<!-- Best Selling Items -->
<section class="uk-section bg-white">
   <div class="uk-container"> 
      <div class="uk-title uk-margin-large-bottom uk-display-block">
         <h2 class="uk-h3 f-w-600 uk-text-uppercase uk-text-center uk-margin-remove">Best Selling Items</h2>
         <div class="uk-divider-small uk-text-center"></div>
      </div>
      <ul class="uk-child-width-1-2 uk-child-width-1-4@m  uk-grid-small" uk-height-match="target: .uk-product-list" uk-grid="uk-grid">
         @foreach($best as $data)
         <li>
            <div class="uk-product-list">
               <a href="{{route('product-single', $data->slug)}}" class="uk-inline-clip uk-transition-toggle">
                  <figure class="uk-product-img">
                     <div class="uk-position-top uk-position-z-index uk-padding-small">
                        <!-- <div class="uk-label f-10 bg-primary uk-magin">New</div> -->
                     </div>
                     <img src="{{asset('images/products/'.$data->get_main_image($data->id))}}" alt="Product">
                     <img src="@if($data->images->count()>1){{asset('images/products/'.$data->images->where('is_main', 0)->first()->image)}}@else{{asset('images/products/'.$data->get_main_image($data->id))}}@endif" class="uk-position-cover uk-transition-scale-up" alt="Product">
                        <!-- <div class="uk-hover-hide-show">
                           <a  class="uk-addtocart uk-flex uk-flex-middle" onclick="UIkit.notification({message: '<span uk-icon=\'icon: cart\'></span> Added to cart <a  uk-toggle=\'target: #cart\'>Check </a>', pos: 'bottom-center', status: 'primary'})">
                                 <span uk-icon="icon:cart;" class="uk-icon"></span> <span>Add to cart</span>
                           </a>
                        </div> -->
                  </figure>
               </a>
               <div class="uk-product-description">
                  <div class="uk-grid-small uk-flex uk-flex-middle uk-text-center" uk-grid>
                     <div class="uk-width-1-1">
                        <h5 class="uk-margin-remove"><a href="{{route('product-single', $data->slug)}}">{{$data->product_name}} </a></h5>
                     </div>
                     <div class="uk-width-expand">
                        <div>
                           <h5 class="uk-margin-remove text-primary">${{$data->price}} <del class="f-12">${{$data->discount_price}}</del></h5>
                        </div>
                     </div>
                  
                  </div>
               </div>
               
            </div>
         </li>
         @endforeach
      </ul>
   </div>
</section>
<!-- end Best Selling Items-->

<!-- blog -->
<section class="uk-section bg-grey">
   <div class="uk-container">
      <div class="uk-title uk-margin-large-bottom uk-display-block">
         <h2 class="uk-h3 f-w-600 uk-text-uppercase uk-text-center uk-margin-remove">Latest from Blog</h2>
         <div class="uk-divider-small uk-text-center"></div>
      </div>
      <ul class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid" 
         uk-grid="uk-grid">
         @foreach($latest_blogs as $blog)
         <!--  -->
         <li>
            <a class="uk-transition-toggle uk-display-block uk-link-toggle" href="{{route('blog-single', $blog->slug)}}">
               <div class="uk-blog-img">
                  <img  src="{{asset('images/blog/'.$blog->image)}}"  alt="" class="uk-transition-scale-up uk-transition-opaque">
               </div>
               <div class="uk-padding-small">
                  <div class="uk-meta uk-h6 text-secondary uk-margin-top uk-margin-remove-bottom">{{date_format($blog->created_at,"M d, Y")}}</div>
                  <h5 class="uk-margin-small-top uk-margin-remove-bottom">
                     {{$blog->title}}
                  </h5>
               </div>
            </a>
         </li>
         @endforeach
         <!--  --> 
      </ul>
   </div>
</section>
<!-- end blog -->
@stop
