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
            <h5 class="text-white uk-margin-remove">Orders</h5>
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
               <li><a href="{{ route('user-orders') }}"  class="active"><span class="material-icons-outlined uk-margin-small-right">view_list</span>Orders</a></li>
               <li><a href="{{ route('user-profile') }}"><span class="material-icons-outlined uk-margin-small-right">person</span>Profile</a></li>
               {{-- <li><a href="addresses.php"><span class="material-icons-outlined uk-margin-small-right">assignment</span>Addresses</a></li> --}}
               <li class="uk-nav-header text-black">More</li>
               <li><a href="{{ route('logout') }}"><span class="material-icons-outlined uk-margin-small-right">logout</span>Logout</a></li>
            </ul>
         </div>
         <div class="uk-width-expand@m">
            <div class="uk-margin-top">
               <h1 class="uk-h3 uk-margin-small uk-visible@m">Orders</h1>
               <div class="uk-overflow-auto">
                  <table class="uk-table uk-table-small uk-table-striped">
                     <thead>
                        <tr>
                           <th>Order #</th>
                           <th>Date Purchased</th>
                           
                           <th>Status</th>
                           <th>Payment Method</th>
                           <th>Total</th>
                        </tr>
                     </thead>
                     <tbody>
                                               
                     @foreach($order as $value)
                        <tr>
                           <td><a href="#order-details_modal" class="order_id_value text-secondary" data-id="{{$value->id}}" uk-toggle>{{$value->order_track}}</a></td>
                           <td>{{$value->created_at->format('d M Y')}}</td>
                          
                           <td>
                              {{-- <span class="text-primary">In Progress</span> --}}
                                   @if($value->status==0)
                                        <span class="badge badge-danger">Pending</span>
                                    @endif
                                    @if(($value->status==1))
                                        <span class="badge badge-success">Completed</span>
                                    @endif
                                    @if(($value->status==2))
                                        <span class="badge badge-secondary">Cancel</span>
                                    @endif
                                    @if(($value->status==3))
                                        <span class="badge badge-primary">Return</span>
                                    @endif 
                                    </td>
                           <td>Cash on Delivery</td>
                           <td>{{$value->grand_total}}</td>
                        </tr>
                      @endforeach
      
                      
                     </tbody>
                  </table>
                  {!! $order->links() !!} 
                 
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
<!-- all order -->
<div id="order-details_modal" uk-modal class="modal">
  

</div>

@endsection

@push('scripts')

    <script>
        $(document).ready(function () {
            var $modal = $('#order-details_modal');

            $('.order_id_value').click(function (e) { 
                var id = $(this).attr('data-id');
                var tempEditUrl = "{{route('order-detail-modal',':id')}}";
                tempEditUrl = tempEditUrl.replace(':id', id);
                $modal.load(tempEditUrl);
            });
        });

    </script>
@endpush
