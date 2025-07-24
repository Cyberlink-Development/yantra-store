@extends('frontend.include.master')

@section('meta-keywords', 'Mountain Handicraft Blogs')
@section('meta-description', 'Articles about handicraft')

@section('title', 'Blogs of handicraft')
@section('short_description', 'Blogs about handicraft')


@section('content')



   <!-- banner -->
   <section class="bg-primary uk-background-norepeat uk-background-top-right uk-background-image@s  
   uk-position-relative uk-flex uk-flex-middle uk-text-left" uk-height-viewport="expand: true; min-height: 150;">
      <div class="uk-width-1-1 uk-position-z-index">
         <div class="uk-container text-white">
            <h2 class="f-30 f-w-600  uk-margin-remove">Blog</h2> </div>
      </div>
   </section>
   <!-- end banner -->
<!-- section -->
<section class="uk-section  bg-white uk-position-relative ">
   <div class="uk-container">
   <ul class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid" 
         uk-grid="uk-grid">
         <!--  -->
         @foreach($blogs as $blog)
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
      
      {!! $blogs->links('frontend.include.pagination') !!}
      
   </div>
</section>

@endsection