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
                        <div class="price-badge text-center" style="width:175px;">Rs. {{ $data->price }}</div>
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

@endsection
@push('scripts')
@endpush
