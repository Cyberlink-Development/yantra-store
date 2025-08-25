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
    <div class="row">
      <div class="text-center mt-5">
        <h2 class=" h3">
          Help Center – Frequently Asked Questions
        </h2>
      </div>

      <div class="col-12 mt-3">
        <div class="accordion border-bottom pb-4" id="order1">
          <div class="card">
            <div class="card-header">
              <h3 class="accordion-heading"><a class="collapsed" href="#faq1" role="button" data-toggle="collapse"
                  aria-expanded="true" aria-controls="faq1">01. What types of electronics do you sell?<span
                    class="accordion-indicator"></span></a></h3>
            </div>
            <div class="collapse show" id="faq1" data-parent="#order1">
              <div class="card-body font-size-sm">
                <p>We offer a wide range of electronics including smartphones, laptops, tablets, smartwatches, audio
                  devices, gaming accessories, home appliances, and more from top brands.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion border-bottom pb-4" id="order2">
          <div class="card">
            <div class="card-header">
              <h3 class="accordion-heading"><a class="collapsed" href="#faq2" role="button" data-toggle="collapse"
                  aria-expanded="true" aria-controls="faq1">02. Are your products original and brand new?<span
                    class="accordion-indicator"></span></a></h3>
            </div>
            <div class="collapse " id="faq2" data-parent="#order2">
              <div class="card-body font-size-sm">
                <p>We offer a wide range of electronics including smartphones, laptops, tablets, smartwatches, audio
                  devices, gaming accessories, home appliances, and more from top brands.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion border-bottom pb-4" id="order3">
          <div class="card">
            <div class="card-header">
              <h3 class="accordion-heading"><a class="collapsed" href="#faq3" role="button" data-toggle="collapse"
                  aria-expanded="true" aria-controls="faq1">03. Do you offer warranty on your products?<span
                    class="accordion-indicator"></span></a></h3>
            </div>
            <div class="collapse " id="faq3" data-parent="#order3">
              <div class="card-body font-size-sm">
                <p>We offer a wide range of electronics including smartphones, laptops, tablets, smartwatches, audio
                  devices, gaming accessories, home appliances, and more from top brands.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion border-bottom pb-4" id="order4">
          <div class="card">
            <div class="card-header">
              <h3 class="accordion-heading"><a class="collapsed" href="#faq4" role="button" data-toggle="collapse"
                  aria-expanded="true" aria-controls="faq1">04. How can I track my order?<span
                    class="accordion-indicator"></span></a></h3>
            </div>
            <div class="collapse " id="faq4" data-parent="#order4">
              <div class="card-body font-size-sm">
                <p>We offer a wide range of electronics including smartphones, laptops, tablets, smartwatches, audio
                  devices, gaming accessories, home appliances, and more from top brands.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

@endsection
@push('scripts')

@endpush