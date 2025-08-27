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
    </div>
  </div>

@endsection
@push('scripts')

@endpush