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
                <li class="breadcrumb-item"><a class="text-nowrap text-white" href="{{ url('/') }}"><i
                      class="czi-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">{{ $data->post_type }}</li>
              </ol>
            </nav>
            <div class=" pr-lg-4 text-center">
              <h1 class="h3 mb-0 text-white">{{ $data->caption }}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid  px-4 px-md-5">
    <div class="shadow rounded bg-white p-2 p-md-5 mt-5">
      {!!  $data->posttype_content  !!}

      <p>Welcome to <strong>YourStore</strong>! These Terms and Conditions outline the rules and regulations for using our
        website and purchasing products from our store.</p>
      <p>By accessing this website or placing an order, you agree to accept all the terms listed below. Please read them
        carefully.</p>
      <h4>1. General Information</h4>
      <ul>
        <li>This website is operated by <strong>YourStore</strong>.</li>
        <li>By using our site, you agree to these Terms, including additional policies referenced here.</li>
      </ul>

      <h4>2. Eligibility</h4>
      <ul>
        <li>You must be at least 18 years old to place an order.</li>
        <li>All information you provide must be accurate and complete.</li>
      </ul>

      <h4>3. Products & Availability</h4>
      <ul>
        <li>All products are subject to availability.</li>
        <li>We strive to display accurate images and descriptions, but we cannot guarantee screen accuracy.</li>
      </ul>

      <h4>4. Pricing & Payment</h4>
      <ul>
        <li>All prices are listed in your local currency.</li>
        <li>We may change pricing at any time without prior notice.</li>
        <li>Orders will be processed after full payment is received.</li>
      </ul>

      <h4>5. Shipping & Delivery</h4>
      <ul>
        <li>Delivery details are available on our <a href="#">Shipping Policy</a> page.</li>
        <li>We are not responsible for delays caused by courier partners.</li>
      </ul>

      <h4>6. Returns & Refunds</h4>
      <ul>
        <li>Our full return policy is available <a href="#">here</a>.</li>
        <li>Returned items must be in original condition and packaging.</li>
      </ul>

      <h4>7. Warranty</h4>
      <ul>
        <li>Products may come with manufacturer warranties as mentioned in product details.</li>
        <li>Claims must be made through the manufacturer unless stated otherwise.</li>
      </ul>

      <h4>8. Prohibited Uses</h4>
      <p>You may not use this website for:</p>
      <ul>
        <li>Illegal activities</li>
        <li>Uploading malicious software or spam</li>
        <li>Violating copyright or intellectual property</li>
      </ul>

      <h4>9. Intellectual Property</h4>
      <ul>
        <li>All content is the property of <strong>YourStore</strong>.</li>
        <li>Unauthorized use or copying is strictly prohibited.</li>
      </ul>
    </div>
  </div>

@endsection
@push('scripts')

@endpush