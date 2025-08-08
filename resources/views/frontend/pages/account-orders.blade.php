@extends('frontend.include.master')
@section('content')

<!-- Page Title-->
<div class=" bg-primary pt-4 pb-4">
    <div class="container py-2 py-lg-3">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center align-item-center  mb-3 mb-lg-0 pt-lg-2 ">
                <div>
                    <nav aria-label="breadcrumb text-center">
                        <ol class="breadcrumb  flex-lg-nowrap justify-content-center">
                            <li class="breadcrumb-item"><a class="text-nowrap text-white" href="{{ url('/') }}"><i class="czi-home"></i>Home</a></li>
                            <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">Order</li>
                        </ol>
                    </nav>
                    <div class=" pr-lg-4 text-center">
                        <h1 class="h3 mb-0 text-white">Your Orders</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-3 pt-4 pt-lg-0 mt-n5">
           @include('frontend.include.sidenav')
        </aside>
        <!-- Content  -->
        <section class="col-lg-9">
          <!-- Orders list-->
          <div class="table-responsive font-size-md mt-5 bg-white rounded shadow">
            <table class="table table-striped table-hover mb-0">
              <thead class="thead-dark">
                <tr>
                  <th>Order #</th>
                  <th>Date Purchased</th>
                  <th>Status</th>
                  <th>Payment Method</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $value)
                  <tr>
                    <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">{{$value->order_track}}</a></td>
                    <td class="py-3">{{$value->created_at->format('d M Y')}}</td>
                    <td class="py-3">
                        @if($value->status==0)
                          <span class="text-info m-0">Pending</span>
                        @endif
                        @if(($value->status==1))
                          <span class="text-success m-0">Completed</span>
                        @endif
                        @if(($value->status==2))
                          <span class="text-danger m-0">Canceled</span>
                        @endif
                        @if(($value->status==3))
                          <span class="text-danger m-0">Return</span>
                        @endif 
                    </td>
                    <th>Cash on Delivery</th>
                    <td class="py-3">{{$value->grand_total}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <hr class="pb-4">
          <!-- Pagination-->
        </section>
    </div>
</div>

</div>

@endsection

@push('scripts')
@endpush
