@extends('frontend.include.master')

@section('meta-keywords') @if($product->seo){!! strip_tags($product->seo->seo_keyword) !!}@endif @endsection
@section('meta-description') @if($product->seo){!! strip_tags($product->seo->seo_description) !!}@endif @endsection

@section('title', $product->product_name)
@section('image', asset('images/products/'.$product->images->where('is_main', 1)->first()->image))
@section('short_description', strip_tags($product->short_description))

@section('content')
<!-- breadcrumb -->
<section class="uk-section-xsmall"> 
   <div class="uk-container">
      <ul class="uk-breadcrumb">
         <li><a href="{{ route('index') }}">Home </a></li>
         <li><a href="{{route('product-list',$product->categories->first()->slug)}}">{{$product->categories->first()->name}}</a></li>
         <li><span>{{$product->product_name}}</span></li> 
      </ul>
   </div>
</section>
<!-- breadcrumb -->
<!-- product  -->
<section class="uk-section uk-padding-remove-top">
   <div class="uk-container">
   
   <!-- start -->
   <div uk-slideshow="ratio: 10:15; minHeight: 300; "  class="uk-grid-expand uk-grid-column-large uk-margin-large" uk-grid>
      <div class="uk-width-2-5@m">
         <div class="uk-margin uk-position-relative">
            <ul class="uk-slideshow-items"  uk-lightbox="animation: slide">
               <li class="uk-item uk-zoom-image">
                  <img class="uk-image" uk-cover uk-img="target: !.uk-slideshow-items"  
                   data-srcset="{{asset('images/products/'.$product->images->where('is_main','=',1)->first()->image)}}">       
               </li>
                @foreach($product->images->where('is_main',0) as $key=>$img)
               <li class="uk-item uk-zoom-image">
                  <img class="uk-image" uk-cover uk-img="target: !.uk-slideshow-items"  data-srcset="{{asset('images/products/'.$img->image)}}">       
               </li>
               @endforeach
                
            </ul>

            <a class="uk-slider-btn uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-slider-btn uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            <!-- audio video -->
            <div class="uk-position-bottom-right uk-margin-small-right uk-margin-small-bottom">
               <!-- audio -->
               @if($product->audio)
               <a   href="avoide:javascript;" class="uk-product-btn uk-audio-btn uk-flex uk-flex-middle uk-flex-center " id="audio-btn"></a>
               <audio id="audio" src="{{asset('audio/'.$product->audio)}}" preload="metadata" type="audio/mpeg">
                  Your browser does not support the audio element.
               </audio>
               @endif
               <!-- end -->
               <!-- video -->
               @if($product->video)
               <a  data-youtube-id="{{$product->video}}" class="uk-product-btn uk-flex uk-flex-middle uk-flex-center  open-video" uk-tooltip="Watch Video">
                <i class="fa fa-video-camera"></i>
               </a>  
               @endif                   
               <!-- end -->
            </div>
            <!-- end audio video -->
            <!-- <div class="uk-hidden-hover uk-hidden-touch uk-visible@s">
               <a class="uk-slidenav uk-slider-btn uk-slidenav-large uk-position-medium uk-position-center-left" href="#" uk-slidenav-previous uk-slideshow-item="previous">
               </a>
               <a class="uk-slidenav uk-slider-btn uk-slidenav-large uk-position-medium uk-position-center-right" href="#" uk-slidenav-next uk-slideshow-item="next">
               </a>
               </div> -->
         </div>
         <ul class="uk-nav uk-thumbnav uk-flex-left uk-margin-small-top" uk-margin>
            <li uk-slideshow-item="0">
               <a href="#">
               <img alt data-src="{{asset('images/products/'.$product->images->where('is_main','=',1)->first()->image)}}" data-sizes="(min-width: 70px) 70px" width="70" height="70" uk-img>
               </a>
            </li>
            @php $i = 1; @endphp
            @foreach($product->images->where('is_main',0) as $key=>$img)
            <li uk-slideshow-item="{{$i}}">
               <a href="#">
               <img alt data-src="{{asset('images/products/'.$img->image)}}" data-sizes="(min-width: 70px) 70px" width="70" height="70" uk-img>
               </a>
            </li>
            @php $i++; @endphp
            @endforeach
         </ul>
      </div>
      <div class="uk-grid-item-match uk-width-expand@m">
         <div class="uk-panel uk-width-1-1">
            <h1 class="uk-h2 uk-margin uk-width-xlarge f-w-600">{{ $product->product_name }}</h1>
            <div class="uk-margin">
                {!! $product->short_description !!}
            </div>
            <div class="uk-margin">
               <div class="uk-h2 uk-margin-remove f-w-600 text-secondary">${{$product->discount_price}} <del class="uk-h4">$ {{$product->price}}</del></div>
            </div>
            <form class="mb-grid-gutter" id="add_to_cart">
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <div class="uk-margin">
               <label class="uk-margin-remove f-w-600 f-12" for="colour">Select Colour:</label>
               <ul class="uk-color uk-nav uk-thumbnav uk-flex-left uk-margin-small-top" id="colour" uk-margin>
                  <input type="hidden" name="color" id="hidden-color">
                  @if($product->size_variation==0)
                  @foreach($product->colorstocks as $color)
                  <li class="color-item">
                     <a href="#" data-color-stock="{{$product->totalStock($color->id)}}" uk-tooltip="{{$color->title}}">
                        <div class="uk-product-color" style="background:{{$color->title}};">
                        </div>
                     </a>
                  </li>
                  @endforeach
                  @else
                  @foreach($product->uniqueStockColor() as $stock)
                  <li class="color-item-variation">
                     <a href="#"
                      data-color-id="{{$stock->colors->id}}"
                      uk-tooltip="{{$stock->colors->title}}">
                        <div class="uk-product-color" style="background:{{$stock->colors->title}};">
                        </div>
                     </a>
                  </li>
                  @endforeach
                  @endif
               </ul>
            </div>
            <div class="uk-margin">
               <div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-3@m" uk-grid>
                  @if($product->size_variation==1)
                  <div>
                     <label class="uk-margin-remove f-w-600 f-12 uk-display-block" for="size">Select Size:</label>
                     <select name="size" id="size" class="uk-select  uk-margin-small-top">
                        <option value="0" option-id="{{$product->totalStock()}}" hidden>Choose an Option...</option>
                        @foreach($product->uniqueStockSize() as $data)
                        <option value="{{$data->size->title}}" data-size-id="{{$data->size->id}}" data-size-stock="{{$product->totalStock(null, $data->size->id)}}">{{$data->size->title}}</option>
                        @endforeach
                     </select>
                     <a href="" class="f-w-600 f-12 uk-margin-small-top uk-display-block text-secondary" uk-toggle="target: #SizeGuide">Size Guide</a>
                  </div>
                  @endif
                  <div>
                     <div> 
                        <label class="uk-margin-remove f-w-600 f-12 uk-display-block" for="size">Qty:</label>
                        <div class="number-input  uk-margin-small-top">
                           <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                           <input class="quantity" id="quantity" readonly min="1" max="{{$product->totalStock()}}" name="quantity" value="1" type="number">
                           <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                     </div>
                  </div>
               </div>
               </form>
               @if($product->totalStock()<=0)
                  <div class="f-w-600 f-12 uk-margin-small-top uk-display-block text-secondary">
                     <h4 class="uk-alert-danger" id="outofstock">Out of Stock !!</h4>
                  </div>
                  @endif
               <div class="uk-margin-medium uk-padding bg-grey uk-border-rounded">
                  
                  <div class="uk-grid-small" uk-grid>
                     <div>
                        <a class="uk-content uk-button uk-btn-primary uk-width-1-1" id="cart_btn">
                        <span uk-icon="icon:cart;"></span> Add to Cart
                        </a>
                     </div>
                     <div>
                        <form action="{{route('order-now')}}" id="order-now-form" method="GET">

                           <input type="hidden" name="product_slug" value="{{$product->slug}}" />
                           <input type="hidden" name="color" id="hidden-color-order-now" value="" />
                           <input type="hidden" name="quantity" id="hidden-quantity-order-now" value="" />
                           <input type="hidden" name="size" id="hidden-size-order-now" value="" />

                           <button class="uk-content uk-button uk-btn-black uk-width-1-1">
                              Order Now
                           </button>
                        </form>
                     </div>
                     <div>
                        <a class="uk-content uk-button uk-btn-secondary uk-width-1-1" href="#quotation" uk-toggle>
                        Get Quotation  
                        </a>
                     </div>
                  </div>

                  <div class="f-10 uk-margin-small uk-margin-remove-bottom"><i><b> NOTE: </b> The actual color of the product may slightly differ due to photographic effects.</i></div>
                  <div class="uk-margin-small f-12 uk-flex uk-flex-middle">
                     <span class="uk-margin-small-right ">We accept</span>
                     <ul class="uk-grid-small" uk-grid>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/esewa.svg')}}" alt="">
                           </div>
                        </li>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/khalti.svg')}}" alt="">
                           </div>
                        </li>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/visa.svg')}}" alt="">
                           </div>
                        </li>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/master-card.svg')}}" alt="">
                           </div>
                        </li>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/american-express.svg')}}" alt="">
                           </div>
                        </li>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/discover.svg')}}" alt="">
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="uk-margin-small-bottom f-12 uk-flex uk-flex-middle">
                     <div class="uk-margin-small-right">Share</div>
                     <div class="sharethis-inline-share-buttons"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end  -->
   </div>
    <div class="uk-container">
      <!-- tab start -->
      <div class=" ">
         <div class="uk-width-1-1">
            <div class="uk-grid-large uk-grid-match" uk-height-match="target: > div > ul" uk-grid>
               <div class="uk-width-1-4@m">
                  <ul class="uk-tab uk-tab-left f-w-600" uk-tab="connect: #uk-pd-tab; animation: uk-animation-slide-right-medium" >
                     <li><a href="/">Description</a></li>
                     <li><a href="/">Review</a></li>
                     @foreach($product->descriptions as $description)
                     <li><a href="/">{{$description->title}}</a></li>
                     @endforeach
                  </ul>
               </div>
               <div class="uk-width-expand@m">
                  <ul id="uk-pd-tab" class="uk-switcher">
                     <li>
                        <div class="uk-panel uk-margin-medium-bottom">
                         {!! $product->long_description !!}
                        </div>
                     </li>
                     <li>
                        <div class="uk-panel uk-margin-medium-bottom">
                           <h4 class="uk-margin-remove-top uk-flex">Ratings and reviews <a href="#review" uk-toggle class=""> <span class="material-icons-outlined">arrow_forward</span></a></h4>
                           <div class="uk-flex uk-flex-middle uk-grid" uk-grid>
                              <!--  -->
                              <div class="uk-width-auto@m uk-text-center">
                                 <h1 class="uk-margin-remove f-w-600">{{$average}}</h1>
                                 <div class="uk-star">
                                    @for($i=0; $i<(int)$average; $i++)
                                    <span class="material-icons-outlined uk-active">star</span>
                                    @endfor
                                    @for($i=(int)$average; $i<5; $i++)
                                    <span class="material-icons-outlined">star</span>
                                    @endfor
                                 </div>
                                 <div class="f-12">{{$allreviews->count()}} reviews</div>
                              </div>
                              <!--  -->
                              <!--  -->
                              <div class="uk-width-expand@m">
                                 <!-- progress -->
                                 <div class="uk-flex uk-flex-middle uk-grid-collapse" uk-grid>
                                    <div class="uk-margin-small-right uk-width-auto">5</div>
                                    <div class="uk-width-expand">
                                       <progress value="{{$fivestar->count()}}" max="{{$allreviews->count()}}" class="bg-primary"></progress>
                                    </div>
                                 </div>
                                 <!-- progress -->
                                 <!-- progress -->
                                 <div class="uk-flex uk-flex-middle uk-grid-collapse" uk-grid>
                                    <div class="uk-margin-small-right uk-width-auto">4</div>
                                    <div class="uk-width-expand">
                                       <progress value="{{$fourstar->count()}}" max="{{$allreviews->count()}}" class="bg-primary"></progress>
                                    </div>
                                 </div>
                                 <!-- progress -->
                                 <!-- progress -->
                                 <div class="uk-flex uk-flex-middle uk-grid-collapse" uk-grid>
                                    <div class="uk-margin-small-right uk-width-auto">3</div>
                                    <div class="uk-width-expand">
                                       <progress value="{{$threestar->count()}}" max="{{$allreviews->count()}}" class="bg-primary"></progress>
                                    </div>
                                 </div>
                                 <!-- progress -->
                                 <!-- progress -->
                                 <div class="uk-flex uk-flex-middle uk-grid-collapse" uk-grid>
                                    <div class="uk-margin-small-right uk-width-auto">2</div>
                                    <div class="uk-width-expand">
                                       <progress value="{{$twostar->count()}}" max="{{$allreviews->count()}}" class="bg-primary"></progress>
                                    </div>
                                 </div>
                                 <!-- progress -->
                                 <!-- progress -->
                                 <div class="uk-flex uk-flex-middle uk-grid-collapse" uk-grid>
                                    <div class="uk-margin-small-right uk-width-auto">1</div>
                                    <div class="uk-width-expand">
                                       <progress value="{{$onestar->count()}}" max="{{$allreviews->count()}}" class="bg-primary"></progress>
                                    </div>
                                 </div>
                                 <!-- progress -->
                              </div>
                              <!--  -->
                           </div>
                           <ul class="uk-list uk-review-list uk-margin-medium-top">
                              @foreach($allreviews as $data)
                              <li>
                                 <div class="uk-flex uk-flex-middle">
                                    <div>
                                       <p class="f-w-600 uk-margin-remove">{{$data->name}}</p>
                                    </div>
                                 </div>
                                 <div class="uk-margin-top">
                                    <div class="uk-flex">
                                       <div>
                                          <div class="uk-star uk-margin-small-right">
                                             @for($i=0; $i<(int)$data->rating; $i++)
                                             <span class="material-icons-outlined uk-active">star</span>
                                             @endfor
                                             @for($i=(int)$data->rating; $i<5; $i++)
                                             <span class="material-icons-outlined">star</span>
                                             @endfor
                                          </div>
                                       </div>
                                       <div>
                                          <span>{{$data->created_at->format('M d Y')}}</span>
                                       </div>
                                    </div>
                                    <p>{{$data->review}}</p>
                                 </div>
                              </li>
                              @endforeach
                           </ul>
                           <div class="uk-flex uk-flex-middle uk-flex-between" uk-grid>
                              <div>
                                 <a href="#review" uk-toggle class="uk-button uk-button-link f-w-600">See all reviews</a>
                              </div>
                              <div>
                              <a class="uk-button uk-btn-primary uk-flex uk-flex-middle togglecontent" href="#togglecontent" uk-toggle="target: .togglecontent; animation: uk-animation-fade"  >Write a review  <span class="material-icons-outlined">expand_more</span></a>
                	            <a class="uk-button uk-button-danger uk-flex uk-flex-middle togglecontent" href="#togglecontent" uk-toggle="target: .togglecontent; animation: uk-animation-fade"  hidden>Cancel review <span class="material-icons-outlined">expand_less</span></a>
                               </div>
                           </div>

                           <div class="togglecontent uk-margin-medium-top" id="togglecontent" hidden>
                        <form id="review-form" class="uk-grid-small uk-grid" uk-grid="">
                           <input type="hidden" value="{{$product->id}}" name="product_id">
                           <div class="uk-width-1-2@s">
                              <label>Full Name</label>
                              <input class="uk-input" type="text" name="name" value="@if(Auth::user()){{Auth::user()->first_name}} {{Auth::user()->last_name}}@endif" placeholder=" " spellcheck="false" data-ms-editor="true"> 
                           </div>
                           <div class="uk-width-1-2@s  ">
                              <label>Email Address</label>
                              <input class="uk-input" type="email" name="email" value="@if(Auth::user()){{Auth::user()->email}}@endif"  placeholder=" "> 
                           </div>
                           
                           <div class="uk-width-1-1@s uk-margin-small uk-grid-margin">
                              <label>Rating</label>
                              <div class="uk-rating">
                                 <input id="radio1" type="radio" name="rating" value="5" class="uk-star">
                                 <label for="radio1">★</label>
                                 <input id="radio2" type="radio" name="rating" value="4" class="uk-star">
                                 <label for="radio2">★</label>
                                 <input id="radio3" type="radio" name="rating" value="3" class="uk-star">
                                 <label for="radio3">★</label>
                                 <input id="radio4" type="radio" name="rating" value="2" class="uk-star">
                                 <label for="radio4">★</label>
                                 <input id="radio5" type="radio" name="rating" value="1" class="uk-star">
                                 <label for="radio5">★</label>
                              </div>
                           </div>
                           <div class="uk-width-1-1@s uk-margin-small uk-grid-margin">
                              <label>Review </label>
                              <textarea name="review" class="uk-textarea" rows="5" placeholder="Write Review" spellcheck="false" data-ms-editor="true"> </textarea>
                           </div>
                           <div class="uk-width-1-1@s uk-margin-top uk-grid-margin">
                              <button class="uk-button uk-btn-black">Submit Review </button>
                           </div>
                        </form>
                       </div>
                     </div>
                     </li>
                     @foreach($product->descriptions as $description)
                     <li>
                        <div class="uk-panel uk-margin-medium-bottom ck-desc">
                           {!!$description->description!!}
                        </div>
                     </li>
                     @endforeach
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- tab end -->
   </div>
   <hr class="uk-margin-remove-top uk-margin">
</section>
<!-- end product  -->
<!-- related products -->
<section class="uk-section uk-padding-remove-top bg-white">
   <div class="uk-container">
      <div class="uk-title uk-margin-large-bottom uk-display-block">
         <h2 class="uk-h3 f-w-600 uk-text-uppercase uk-text-center uk-margin-remove">Related Products</h2>
         <div class="uk-divider-small uk-text-center"></div>
      </div>
      <ul class="uk-child-width-1-2 uk-child-width-1-4@m  uk-grid-small" uk-height-match="target: .uk-product-list" uk-grid="uk-grid">
      @foreach($related_products->take(8) as $data)
         <li>
            <div class="uk-product-list">
               <a href="{{route('product-single', $data->slug)}}" class="uk-inline-clip uk-transition-toggle">
                  <figure class="uk-product-img">
                     <div class="uk-position-top uk-position-z-index uk-padding-small">
                        <!-- <div class="uk-label f-10 bg-primary uk-magin">New</div> -->
                     </div>
                     <img src="{{asset('images/products/'.$data->get_main_image($data->id))}}" alt="Product">
                     <!--{{---->
                     <!--<img src="@if($data->images->count()>1){{asset('images/products/'.$data->images->where('is_main', 0)->first()->image)}}@else{{asset('images/products/'.$data->get_main_image($data->id))}}@endif" class="uk-position-cover uk-transition-scale-up" alt="Product">-->
                        <!-- <div class="uk-hover-hide-show">
                           <a  class="uk-addtocart uk-flex uk-flex-middle" onclick="UIkit.notification({message: '<span uk-icon=\'icon: cart\'></span> Added to cart <a  uk-toggle=\'target: #cart\'>Check </a>', pos: 'bottom-center', status: 'primary'})">
                                 <span uk-icon="icon:cart;" class="uk-icon"></span> <span>Add to cart</span>
                           </a>
                        </div> -->
                        <!----}}-->
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
<!-- end related products -->
<!-- Size Guide  -->
<div id="SizeGuide" uk-modal>
   <div class="uk-modal-dialog">
   <div class="uk-modal-header uk-flex uk-flex-between uk-flex-middle">     
      <h4 class="uk-margin-remove">Size guide</h4> 
      <button class="uk-modal-close" type="button" uk-close></button>
      </div>
      <div class=" uk-modal-body">
        
      <div class="uk-overflow-auto">
         <table class="uk-table uk-table-striped">
            <thead>
               <tr>
                  <th>Size</th>
                  <th>US</th>
                  <th>Bust</th>
                  <th>Waist</th>
                  <th>Low Hip</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>XS</td>
                  <td>2</td>
                  <td>32</td>
                  <td>24 - 25</td>
                  <td>33 - 34</td>
               </tr>
               <tr>
                  <td>S</td>
                  <td>4</td>
                  <td>34 - 35</td>
                  <td>26 - 27</td>
                  <td>35 - 26</td>
               </tr>
               <tr>
                  <td>M</td>
                  <td>6</td>
                  <td>36 - 37</td>
                  <td>28 - 29</td>
                  <td>38 - 40</td>
               </tr>
               <tr>
                  <td>L</td>
                  <td>8</td>
                  <td>38 - 29</td>
                  <td>30 - 31</td>
                  <td>42 - 44</td>
               </tr>
               <tr>
                  <td>XL</td>
                  <td>10</td>
                  <td>40 - 41</td>
                  <td>32 - 33</td>
                  <td>45 - 47</td>
               </tr>
               <tr>
                  <td>XXL</td>
                  <td>12</td>
                  <td>42 - 43</td>
                  <td>34 - 35</td>
                  <td>48 - 50</td>
               </tr>
            </tbody>
         </table>
      </div>
      <hr>
      <div class="uk-grid" uk-grid>
         <div class="uk-width-expand@m">
            <h4 class="f-w-600">Measuring Tips</h4>
            <h5 class="uk-margin-remove f-w-600">Bust</h5>
            <p class="uk-margin-small">Measure around the fullest part of your bust.</p>
            <h5 class="uk-margin-remove f-w-600">Waist</h5>
            <p class="uk-margin-small">Measure around the narrowest part of your torso.</p>
            <h5 class="uk-margin-remove f-w-600">Low Hip</h5>
            <p class="uk-margin-small">With your feet together measure around the fullest part of your hips/rear.</p>
         </div>
         <div class="uk-width-auto@m">
            <img src="assets/images/products/sizechart.jpg" alt="">
         </div>
          
      </div>
      </div>
   </div>
</div>
<!-- end Size Guide-->
<!-- all review -->
<div id="review" uk-modal>
   <div class="uk-modal-dialog">
      <div class="uk-modal-header">
         <div class="uk-flex uk-grid-small" uk-grid>
            <div class="uk-width-auto">
               <div class="uk-product-img-review">
                  <img src="{{asset('images/products/'.$product->images->where('is_main','=',1)->first()->image )}}" alt="">
               </div>
            </div>
            <div class="uk-width-expand">
               <h4 class="uk-margin-remove">{{$product->product_name}}</h4>
               <span class="text-secondary">Ratings and reviews</span>
            </div>
            <div class="uk-width-auto">
               <button class="uk-modal-close-default uk-position-relative" type="button" uk-close></button>
            </div>
         </div>
      </div>
      <div class="uk-modal-body" uk-overflow-auto>
         <ul class="uk-list uk-review-list">
            @foreach($allreviews as $data)
            <li>
               <div class="uk-flex uk-flex-middle">
                  <div>
                     <p class="f-w-600 uk-margin-remove">{{$data->name}}</p>
                  </div>
               </div>
               <div class="uk-margin-top">
                  <div class="uk-flex">
                     <div>
                        <div class="uk-star uk-margin-small-right">
                           @for($i=0; $i<(int)$data->rating; $i++)
                           <span class="material-icons-outlined uk-active">star</span>
                           @endfor
                           @for($i=(int)$data->rating; $i<5; $i++)
                           <span class="material-icons-outlined">star</span>
                           @endfor
                        </div>
                     </div>
                     <div>
                        <span>{{$data->created_at->format('M d Y')}}</span>
                     </div>
                  </div>
                  <p>{{$data->review}}</p>
               </div>
            </li>
            @endforeach
         </ul>
      </div>
      <div class="uk-padding">
      </div>
   </div>
</div>
<!-- end review -->

<!-- Quotation popup -->
<div id="quotation" uk-modal>
   <div class="uk-modal-dialog uk-modal-border-rounded">
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="uk-modal-header uk-background-muted uk-text-center uk-padding">
         <h3 class="uk-margin-remove">Get Quotation</h3>
         <h5 class="uk-margin-remove text-primary">{{$product->product_name}}</h5>
      </div>
      <div class="uk-modal-body uk-padding">
         <form id="quotation-form" action="POST" uk-grid>
            <input type="hidden" name="product_id" value="{{$product->id}}">
             <div class="uk-width-1-2@s">
               <label>Full Name <span class="text-red">*</span></label>
               <input class="uk-input" type="text" name="full_name" placeholder="Full Name"> 
            </div>
            
            <div class="uk-width-1-2@s">
               <label>Email Address <span class="text-red">*</span></label>
               <input class="uk-input" type="email" placeholder="E-mail" name="email"> 
            </div>
            <div class="uk-width-1-2@s">
               <label>Country <span class="text-red">*</span></label>
               <input class="uk-input" name="country" type="text" placeholder="Country"> 
            </div>
            <div class="uk-width-1-2@s">
               <label>Contact Number</label>
               <input class="uk-input" type="text" name="phone" placeholder="Contact Number"> 
            </div>
            <div class="uk-width-1-1@s">
               <label>Your Message/Questions <span class="text-red">*</span></label>
               <textarea name="message" class="uk-textarea" rows="5" placeholder="Let us know all your enquiries and we will get back to you shortly.."> </textarea>
            </div>
            <div class="uk-width-1-1@s uk-text-center">
               <button class="uk-button uk-btn-primary">Submit </button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- Quotation popup -->

@stop

@push('scripts')
    <script>

        let selectedColor = 0;
        let selectedSize = 0;
        let max = 0;

        $(document).ready(function(){
            if({{$product->totalStock()}} <= 0){
               $("#quantity").val(0);
            }
        });

        $("#order-now-form").submit(function(){
         $("#hidden-quantity-order-now").val($("#quantity").val());
         $("#hidden-size-order-now").val(selectedSize);
        });

        // Quotation Form
        $("#quotation-form").submit(function( event ) {
            event.preventDefault();
            let myform = document.getElementById('quotation-form');
            let formData = new FormData(myform);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{route('quotation-submit')}}',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,

                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {
                        toastr.success(data.success);
                        $('#quotation-form').trigger("reset");
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

         // Review Form
         $("#review-form").submit(function( event ) {
            event.preventDefault();
            let myform = document.getElementById('review-form');
            let formData = new FormData(myform);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{route('add-review')}}',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,

                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {
                        toastr.success(data.message);
                        $('#review-form').trigger("reset");
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

        $("#size").change(function() {

            selectedSize = $(this).children(":selected").attr("data-size-id");
            ajaxCall();

         });

         // If both size and color field exists
         $(".color-item-variation a").click(function(event){
            
            event.preventDefault()
            $(this).addClass("uk-active");
            let colorName = $(this).attr("uk-tooltip");
            $("#hidden-color").val(colorName);

            selectedColor = $(this).attr("data-color-id");
            ajaxCall();

            // For order now
            let selectedcolor = $(this).attr("uk-tooltip");
            $("#hidden-color-order-now").val(selectedcolor);

         });

         function ajaxCall(){
            let productId = {{$product->id}};

            $.ajax({
                type: 'GET',
                url: "/product-stock/{id}/{color_id}/{size_id}",
                data:{id:productId, color_id:selectedColor, size_id:selectedSize},
                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {

                     $("#quantity").attr("max", data);
                     max = data;
                     adjustVal(data);
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

         }

         function adjustVal(stockSize){
            if($("#quantity").val() > parseInt(stockSize)){
               $("#quantity").val(stockSize);
            }
            if(parseInt(stockSize)>0 && $("#quantity").val()==0){
               $("#quantity").val(1);
            }
         }

         $(".color-item a").click(function(event){
            event.preventDefault();

            $(this).addClass("uk-active");
            let selectedColor = $(this).attr("uk-tooltip");
            $("#hidden-color").val(selectedColor);
            let maxStock = $(this).attr("data-color-stock");
            $("#quantity").attr("max",maxStock);
            max = maxStock;
            adjustVal(maxStock);

            // For order now
            $("#hidden-color-order-now").val(selectedColor);
         });

         

         $('#cart_btn').on('click', function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();

               let myform = document.getElementById('add_to_cart');
               let formData = new FormData(myform);
               $.ajax({
                type: 'POST',
                url: '{{route('cart-add')}}',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,

                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {

                        $('.mini-cart').replaceWith($('.mini-cart')).html(data);
                        toastr.success('Item added to cart');
                        // alert({{Gloudemans\Shoppingcart\Facades\Cart::count();}});
                        // $(".uk-cart-count").replaceWith($(".uk-cart-count")).html("c");

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