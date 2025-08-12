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
            <h5 class="text-white uk-margin-remove">Profile</h5>
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
               <li><a href="{{ route('user-dashboard') }}"><span class="material-icons-outlined uk-margin-small-right">dashboard</span> Dashboard</a></li>
               <li><a href="{{ route('user-orders') }}"><span class="material-icons-outlined uk-margin-small-right">view_list</span>Orders</a></li>
               <li><a href="{{ route('user-profile') }}" class="active"><span class="material-icons-outlined uk-margin-small-right">person</span>Profile</a></li>
               {{-- <li><a href="addresses.php"><span class="material-icons-outlined uk-margin-small-right">assignment</span>Addresses</a></li> --}}
               <li class="uk-nav-header text-black">More</li>
               <li><a href="{{ route('logout') }}"><span class="material-icons-outlined uk-margin-small-right">logout</span>Logout</a></li>
            </ul>
         </div>
         <div class="uk-width-expand@m">
            <div class="uk-margin-top">
               <h1 class="uk-h3 uk-margin-small uk-visible@m">Profile</h1>
               <div>
              
               </div>
               <div class="uk-overflow-auto">
               <table class="uk-table uk-table-small uk-table-striped">
               <tbody>
                  <tr>
                     <td>First Name</td>
                      <td>{{ $user->first_name }}</td>
                  </tr>
                  <tr>
                     <td>Last Name</td>
                      <td>{{ $user->last_name }}</td>
                  </tr>
                  <tr>
                     <td>Contact Number</td>
                      <td>{{ $user->phone }}</td>
                  </tr>
                  <tr>
                     <td>Email Address</td>
                      <td>{{ $user->email }}</td>
                  </tr>
                  
               </tbody>
            </table>
               </div>
               <div class=" uk-align-right uk-margin-small-top uk-margon-remove-bottom">
               <button  href="#edit-profile" uk-toggle class="uk-button uk-btn-black uk-flex uk-flex-middle">
                <span class="material-icons-outlined uk-margin-small-right">mode_edit</span>Edit</a>
               </div>
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
               <h1 class="uk-h5 f-w-600 text-primary uk-margin-remove">{{ $user->first_name }}{{ $user->last_name }}</h1>
               <h2 class="uk-h6 uk-margin-remove">{{ $user->email }}</h2>
            </div>
         </div>
      </div>
      <div>
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
   </div>
</div>
<!-- offcanvas -->
<!-- all order -->
<div id="edit-profile" uk-modal>
   <div class="uk-modal-dialog">  
      <div class="uk-modal-header uk-flex uk-flex-between uk-flex-middle">
         <h4 class="uk-margin-remove">Update Profile</h4>
         <button class="uk-modal-close" type="button" uk-close></button>
      </div>
      <div class="uk-modal-body uk-padding" uk-overflow-auto>
      <form class="uk-grid-medium" uk-grid method="post" action="{{ route('user-profile') }}">
         <input type="hidden" name="user_id" value="{{ $user->id }}">
            @csrf   
                  <div class="uk-width-1-2@m">
                     <label class="uk-margin-small-bottom uk-display-block" for="fname">First Name <span class="uk-text-danger">*</span></label>
                     <input class="uk-input" name="first_name" type="text" value="{{ $user->first_name }}" id="fname"> 
                  </div>
                  <div class="uk-width-1-2@m">
                     <label class="uk-margin-small-bottom uk-display-block" for="lname">Last Name <span class="uk-text-danger">*</span></label>
                     <input class="uk-input" name="last_name" type="text" value="{{ $user->last_name }}" id="lname"> 
                  </div>
                  <div class="uk-width-1-1">
                    <p class="f-w-600">Login Information</p>
                  </div>
                  <div class="uk-width-1-1">
                     <label class="uk-margin-small-bottom uk-display-block" for="Email">Email Address <span class="uk-text-danger">*</span></label>
                     <input class="uk-input" name="email" type="text" value="{{ $user->email }}" id="Email"> 
                  </div>
                  <div class="uk-width-1-1">
                     <label class="uk-margin-small-bottom uk-display-block" for="phone">Contact Number <span class="uk-text-danger">*</span></label>
                     <input class="uk-input" name="phone" type="number" value="{{ $user->phone }}" id="phone"> 
                  </div>
              
                    <div class="uk-modal-footer uk-flex uk-flex-center">
        <button type="submit" class="uk-button uk-btn-primary">Update</button>
      </div>
               </form>
      </div>
     
   </div>
</div>
<!-- end order -->
@endsection
