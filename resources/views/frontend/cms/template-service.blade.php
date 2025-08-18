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
                            <li class="breadcrumb-item"><a class="text-nowrap text-white" href="{{url('/')}}"><i class="czi-home"></i>Home</a></li>
                            <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">{{$post_type->post_type}}</li>
                        </ol>
                    </nav>
                    <div class=" pr-lg-4 text-center">
                        <h1 class="h3 mb-0 text-white">{{$data->post_title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Content-->
  <section class="container-fluid px-4 px-md-5 mt-4">
    <div class="row mb-3 bg-white shadow rounded">
        <div class="col-md-4 p-0">
            <img src="{{ $data->banner ? asset('uploads/banners/'.$data->banner) : asset('theme-assets/img/service/cloud.png')}}" alt="" class="service-img">
        </div>
        <div class="col-md-8">
            <div class="p-5" style="border-left: 1px solid #e5e4e4c7;">
                <h1 class="mb-3">{{ $data->associated_title }}</h1>
                <p class="text-muted">{{$data->post_excerpt}}</p>
                <h4 class="mt-4">Our Cloud Services Include:</h4>

                <p>{{ $data->post_content }}</p>
                <div class="container">
                    <div class="row d-flex" style="gap:10px;">
                      <div class=" p-0">
                        <div class="price-badge text-center" style="width:175px;">Rs. 40,000</div>
                      </div>
                      <div class=" p-0">
                        <a href="#quote" data-toggle="modal" class="quote-badge text-center" style="width:175px;">Get A Quote</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>


  <!--quote modal-->
  <div class="modal fade" id="quote" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="h3 m-0">Get a Quote</h2>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body tab-content py-4">
              <form>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="quote-name">Full Name</label>
                            <input class="form-control" type="text" id="quote-name"  required>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="quote-email">Email address</label>
                            <input class="form-control" type="email" id="quote-email"  required>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="quote-phone">Phone</label>
                            <input class="form-control" type="number" id="quote-phone"  required>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="quote-address">Address</label>
                            <input class="form-control" type="text" id="quote-address"  required>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                            <label class="mb-3" for="message">Message</label>
                            <textarea class="form-control" rows="4" id="messasge"></textarea>
                          </div>
                      </div>
                  </div>

              <button class="btn btn-primary btn-block btn-shadow" type="submit">Send the quote</button>
            </form>
          </div>
        </div>
      </div>
    </div>

@endsection
@push('scripts')
@endpush
