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

  <!-- Page Content-->
  <div class="container-fluid  px-4 px-md-5">
    <div class="row">
      <div class="col-md-6">
        <form class="mt-5" action="{{route('contact_us')}}" method="post">
          @csrf
          <div class="row bg-white rounded shadow p-3 p-md-5">
            <h2>Feel Free to Contact Us</h2>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="fn">First Name* </label>
                <input class="form-control" name="first_name" type="text" id="fn">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="ln">Last Name*</label>
                <input class="form-control" name="last_name" type="text" id="ln">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="email">Email Address*</label>
                <input class="form-control" name="email" type="email" id="email">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="phone">Phone Number*</label>
                <input class="form-control" name="phone" type="text" id="phone">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label class="mb-3" for="message">Message</label>
                <textarea class="form-control" name="message" rows="4" id="messasge"></textarea>
              </div>
            </div>
            <div class="col-12">
              <hr class="mt-2 mb-3">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <button class="btn btn-primary mt-3 mt-sm-0" type="submit">Send Message</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-6 ">
        <div class="mt-5 d-none d-md-block ">
          <img src="{{ $data->banner ? asset('uploads/banners/'.$data->banner) :asset('theme-assets/img/contact.jpg') }}" class="shadow rounded" style="height:560px; object-fit:cover;" alt="{{ $data->post_type }}"/>
        </div>
      </div>
    </div>
    <div class="row text-center mt-4">
      <div class="col-md-4 col-6 info-box p-2">
        <div class=" shadow rounded bg-primary mb-2 p-4">
          <div><i class="czi-phone text-white" style="font-size:35px"></i></div>
          <h6 class="fw-bold mt-2 text-white">Call us directly</h6>
          <p class="text-white">Phone primary: {{$setting->phone1}}</p>
          <p class="text-white">Phone secondary: {{$setting->phone2}}</p>
        </div>
      </div>
      <div class="col-md-4 col-6 info-box p-2">
        <div class=" shadow rounded bg-primary mb-2 p-4">
          <div><i class="czi-message text-white" style="font-size:35px"></i></div>
          <h6 class="fw-bold mt-2 text-white">Send a message</h6>
          <p class="text-white">Email: {{$setting->email_primary}}</p>
          <p class="text-white">Email: {{$setting->email_secondary}}</p>
        </div>
      </div>
      <div class="col-md-4 col-6 info-box p-2">
        <div class=" shadow rounded bg-primary mb-2 p-4">
          <div><i class="czi-location text-white" style="font-size:35px"></i></div>
          <h6 class="fw-bold mt-2 text-white">Store location</h6>
          <p class="text-white">{{ $setting->address }}</p>
          <p class="text-white">Nepal</p>
        </div>
      </div>
    </div>
  </div>

@endsection
@push('scripts')

@endpush