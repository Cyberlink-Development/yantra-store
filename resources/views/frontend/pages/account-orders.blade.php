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
                            <li class="breadcrumb-item"><a class="text-nowrap text-white" href="index.php"><i class="czi-home"></i>Home</a></li>
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
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">34VB5540K83</a></td>
                  <td class="py-3">May 21, 2019</td>
                  <td class="py-3"><span class="text-info m-0">In Progress</span></td>
                  <th>Cash on Delivery</th>
                  <td class="py-3">Rs 4,00,000</td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">78A643CD409</a></td>
                  <td class="py-3">December 09, 2018</td>
                  <td class="py-3"><span class="text-danger m-0">Canceled</span></td>
                  <th>Paid</th>
                  <td class="py-3"><span>Rs 7,00,000</span></td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">28BA67U0981</a></td>
                  <td class="py-3">July 19, 2018</td>
                  <td class="py-3"><span class="text-success m-0">Delivered</span></td>
                  <th>Cash on Delivery</th>
                  <td class="py-3">Rs 40,000</td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">502TR872W2</a></td>
                  <td class="py-3">April 04, 2018</td>
                  <td class="py-3"><span class="text-success m-0">Delivered</span></td>
                  <th>Cash on Delivery</th>
                  <td class="py-3">Rs 4,000</td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">47H76G09F33</a></td>
                  <td class="py-3">March 30, 2018</td>
                  <td class="py-3"><span class="text-success m-0">Delivered</span></td>
                  <th>Cash on Delivery</th>
                  <td class="py-3">Rs 7,00,000</td>
                </tr>
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
