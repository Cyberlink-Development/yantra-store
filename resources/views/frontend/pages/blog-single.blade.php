@extends('frontend.include.master')

@section('meta-description', $blog->title)

@section('title', $blog->title)
@section('image', asset('images/blog/'.$blog->image))
@section('short_description', strip_tags($blog->content))

@section('content')

<section class="uk-section uk-position-relative">
      <div class="uk-container uk-position-relative">
         <div class="uk-grid-large" uk-grid>
            <div class="uk-width-expand@m">
               <h1 class="uk-h2 f-w-400 uk-margin"> {{$blog->title}} </h1>
               <!--  -->
               <div class="uk-border-light-top uk-border-light-bottom uk-margin-bottom uk-padding-small">
                  <div class="  uk-flex-middle uk-flex uk-flex-between"  >
                     <div class="uk-text-muted uk-flex uk-flex-middle"><span class="material-icons-outlined uk-margin-small-right">schedule</span> Jan 20, 2021</div>
                     <div>
                        <!-- ShareThis BEGIN -->
                        <div class="sharethis-inline-share-buttons uk-flex uk-flex-right"></div>
                        <!-- ShareThis END -->
                     </div>
                  </div>
               </div>
               <!--  -->
               
            <figure class="uk-feature-image uk-margin-medium-bottom" uk-lightbox="">
               <a href="{{asset('images/blog/'.$blog->image)}}" data-caption="{{$blog->title}}"> 
                  <img src="{{asset('images/blog/'.$blog->image)}}" alt=""> </a>
             </figure>
               <!-- if video -->
               <!-- <figure class="uk-feature-video uk-margin-medium-bottom">
                  <iframe width="100%" height="500" src="https://www.youtube.com/embed/I2o_UNexZkM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <figcaption class="f-14">How I Chose Therapy Over Pain & Overcame My Demons</figcaption>
               </figure> -->
               <!-- end if video -->
               <p>{!! $blog->content !!}</p>
            </div>
            <div class="uk-width-1-1@l">
               <h1 class="uk-h4 f-w-600">Related</h1>
               <!--  -->
               <ul class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid" 
         uk-grid="uk-grid">
         <!--  -->
         @foreach($related_blogs->take(3) as $blog)
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
         <!--  -->   
      </ul>
               <!--  -->
            </div>
         </div>
      </div>
   </section>

@endsection