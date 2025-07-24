@extends('frontend.include.master')
@section('content')

<!-- MobileMenu -->
<div class="bg-primary  uk-hidden@m">
   <div class="uk-container">
      <nav class="uk-navbar uk-padding-small " uk-navbar>
         <div class="uk-navbar-left">
            <a class="text-white" uk-navbar-toggle-icon uk-toggle href="#DashboardMenu"></a> 
         </div>
         <div class="uk-navbar-center">
            <h5 class="text-white uk-margin-remove">Dashboard</h5>
         </div>
      </nav>
   </div>
</div>
<!-- MobileMenu -->
<!-- section -->
<section class="uk-section bg-white"> 
   <div class="uk-container">
      <div uk-grid class="uk-grid-large">
         <div class="uk-width-1-4@m uk-visible@m">
            <ul class="uk-dasboard-nav">
               <li class="uk-nav-header text-black">Navigation</li>
               <li><a href="{{ route('user-dashboard') }}" class="active"><span class="material-icons-outlined uk-margin-small-right">dashboard</span> Dashboard</a></li>
               <li><a href="{{ route('user-orders') }}"><span class="material-icons-outlined uk-margin-small-right">view_list</span>Orders</a></li>
               <li><a href="{{ route('user-profile') }}"><span class="material-icons-outlined uk-margin-small-right">person</span>Profile</a></li>
               {{-- <li><a href="addresses.php"><span class="material-icons-outlined uk-margin-small-right">assignment</span>Addresses</a></li> --}}
               <li class="uk-nav-header text-black">More</li>
               <li><a href="{{ route('logout') }}"><span class="material-icons-outlined uk-margin-small-right">logout</span>Logout</a></li>
            </ul> 
         </div>
         <div class="uk-width-expand@m">
            <div class="uk-margin-top">
                <h1 class="uk-h3 uk-margin-small uk-visible@m">Dashboard</h1>
               <h1 class="uk-h4 uk-margin-remove">Welcome <span class="text-secondary">{{ $user->first_name }}</span></h1>
               <p class="greeting">
                  Hello
                  <span class="text-dark font-weight-bold">{{ $user->first_name }} {{ $user->last_name }}</span>
                  (not
                  <span class="text-dark font-weight-bold">{{ $user->first_name }} {{ $user->last_name }}</span>?
                  <a href="{{ route('logout') }}" class="text-primary">Log out</a>)
               </p>
               <p class="mb-4">
                  From your account dashboard you can view your 
                  <a href="{{ route('user-orders') }}" class="text-primary">recent orders</a>,
                  <a href="{{ route('user-profile') }}" class="text-primary">profile</a>, 
                  and edit your password and account details.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- section -->
<!-- offcanvas -->
<div id="DashboardMenu" uk-offcanvas="mode: reveal; overlay: true;">
   <div class="uk-offcanvas-bar uk-box-shadow-medium">
      <div>
         <div class="uk-flex uk-flex-middle uk-position-relative  uk-margin-large-bottom">
            <div class="uk-icon-button bg-secondary text-white uk-margin-small-right">
               <span class="material-icons-outlined">perm_identity</span>
            </div>
            <div class="">
               <h1 class="uk-h5 f-w-600 text-primary uk-margin-remove">{{ $user->first_name }} {{ $user->last_name }}</h1>
               <h2 class="uk-h6 uk-margin-remove">{{ $user->email }}</h2>
            </div>
         </div>
      </div>
      <div>
         <ul class="uk-dasboard-nav">
            <li class="uk-nav-header text-white">Navigation</li>
            <li><a href="{{ route('user-dashboard') }}" class="active"><span class="material-icons-outlined uk-margin-small-right">dashboard</span> Dashboard</a></li>
            <li><a href="{{ route('user-orders') }}"><span class="material-icons-outlined uk-margin-small-right">view_list</span> Orders</a></li>
            <li><a href="{{ route('user-profile') }}"><span class="material-icons-outlined uk-margin-small-right">person</span>Profile</a></li>
            {{-- <li><a href="addresses.php"><span class="material-icons-outlined uk-margin-small-right">assignment</span>Addresses</a></li> --}}
            <li class="uk-nav-header text-white">More</li>
            <li><a href="{{ route('logout') }}"><span class="material-icons-outlined uk-margin-small-right">logout</span>Logout</a></li>
         </ul>
      </div>
   </div>
</div>
<!-- offcanvas -->

@stop