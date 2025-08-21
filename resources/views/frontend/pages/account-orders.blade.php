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
                    <th>{{$value->payment_type}}</th>
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

<div class="modal fade" id="order-details">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white"></h5>
        <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body pb-0">
        <!-- Item list -->
        <div id="order-products-list"></div>

        <!-- Order summary -->
        <!-- <div class="mt-3">
          <p>Subtotal: <span id="order-subtotal"></span></p>
          <p>Shipping: <span id="order-shipping"></span></p>
          <p>Tax: <span id="order-tax"></span></p>
          <p><strong>Total: <span id="order-total"></span></strong></p>
        </div> -->
        
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $('.order-detail-link').on('click', function() {
        const jsonString = $(this).attr('data-value');
        const orderData = JSON.parse(jsonString);
        let baseImageUrl = "{{ asset('images/products') }}";

        // Set order tracking number in the modal title
        $('.modal-title').text(`Order No - ${orderData.order_track}`);

        // Clear previous products
        $('#order-products-list').empty();

        // Append each product with full structure
        orderData.products.forEach(product => {
            let productUrl = `/product-${product.slug}`;
            let imagePath = `${baseImageUrl}/${product.image}`;

            let productHtml = `
                <div class="d-sm-flex justify-content-between mb-4 pb-3 pb-sm-2 border-bottom">
                    <div class="media d-block d-sm-flex text-center text-sm-left">
                        <a class="d-inline-block mx-auto mr-sm-4" href="${productUrl}" style="width: 10rem;">
                            <img src="${imagePath}" alt="${product.name}">
                        </a>
                        <div class="media-body pt-2">
                            <h3 class="product-title font-size-base mb-2">
                                <a href="${productUrl}">${product.name}</a>
                            </h3>
                            ${product.model ? `<div class="font-size-sm"><span class="text-muted mr-2">Model:</span>${product.model}</div>` : ''}
                            ${product.brand ? `<div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>${product.brand}</div>` : ''}
                            ${product.size ? `<div class="font-size-sm"><span class="text-muted mr-2">Size:</span>${product.size}</div>` : ''}
                            ${product.color ? `<div class="font-size-sm"><span class="text-muted mr-2">Color:</span>${product.color}</div>` : ''}
                            <div class="font-size-sm"><span class="text-muted mr-2">Quantity:</span>${product.quantity}</div>
                            <div class="font-size-sm"><span class="text-muted mr-2">Price:</span>Rs. ${parseFloat(product.price).toLocaleString()}</div>
                            <div class="text-muted mb-2">Subtotal: <span class="font-size-lg font-secondary pt-2">Rs. ${parseFloat(product.subtotal).toLocaleString()}</span></div>
                        </div>
                    </div>
                </div>
            `;
            $('#order-products-list').append(productHtml);
        });

        // Set order summary
        $('#order-subtotal').text(`Rs. ${parseFloat(orderData.summary.subtotal).toLocaleString()}`);
        $('#order-shipping').text(`Rs. ${parseFloat(orderData.summary.shipping).toLocaleString()}`);
        $('#order-tax').text(`Rs. ${parseFloat(orderData.summary.tax).toLocaleString()}`);
        $('#order-total').text(`Rs. ${parseFloat(orderData.summary.total).toLocaleString()}`);
    });
});
</script>

@endsection

@push('scripts')
@endpush
