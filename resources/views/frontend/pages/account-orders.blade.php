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
                  @php
                    $orderJson = json_encode($value->getOrderDataForModal(), JSON_HEX_APOS | JSON_HEX_QUOT);
                  @endphp
                  <tr>
                    <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm order-detail-link" href="#order-details" data-toggle="modal" data-value="{{ $orderJson }}">{{$value->order_track}}</a></td>
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
          {!! $orders->links('frontend.include.pagination') !!}
        </section>
    </div>
</div>
<div class="modal fade" id="order-details" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Order No - <span id="order-track"></span></h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
              <div id="order-products-list">
                  <!-- Products will be appended here by JS -->
              </div>

              <hr>
              <div class="order-summary">
                  <p><strong>Subtotal:</strong> $<span id="order-subtotal"></span></p>
                  <p><strong>Shipping:</strong> $<span id="order-shipping"></span></p>
                  <p><strong>Tax:</strong> $<span id="order-tax"></span></p>
                  <p><strong>Total:</strong> $<span id="order-total"></span></p>
              </div>
          </div>
      </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $('.order-detail-link').on('click', function() {
        const jsonString = $(this).attr('data-value');
        const orderData = JSON.parse(jsonString);

        // Set order tracking number
        $('#order-track').text(orderData.order_track);

        // Clear previous products list
        $('#order-products-list').empty();

        // Append each product with detailed info
        orderData.products.forEach(product => {
            let productUrl = `/product-${product.slug}`;
            let productHtml = `
                <div class="product-item mb-3">
                    <a href="${productUrl}"><h5>Product: ${product.name}</h5></a>
                    ${product.brand ? `<p>Brand: ${product.brand}</p>` : ''}
                    ${product.size ? `<p>Size: ${product.size}</p>` : ''}
                    ${product.color ? `<p>Color: ${product.color}</p>` : ''}
                    <p>Price: $${parseFloat(product.price).toFixed(2)}</p>
                    <p>Quantity: ${product.quantity}</p>
                    <p>Subtotal: $${parseFloat(product.subtotal).toFixed(2)}</p>
                </div>
                <hr>
            `;
            $('#order-products-list').append(productHtml);
        });

        // Set order summary
        $('#order-subtotal').text(parseFloat(orderData.summary.subtotal).toFixed(2));
        $('#order-shipping').text(parseFloat(orderData.summary.shipping).toFixed(2));
        $('#order-tax').text(parseFloat(orderData.summary.tax).toFixed(2));
        $('#order-total').text(parseFloat(orderData.summary.total).toFixed(2));
    });
});
</script>

@endsection

@push('scripts')
@endpush
