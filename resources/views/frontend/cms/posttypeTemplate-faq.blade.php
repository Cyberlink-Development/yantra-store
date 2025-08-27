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
      <!-- <div class="text-center mt-5">
        <h2 class=" h3">
          {{ $data->caption }}
        </h2>
      </div> -->

      <div class="col-12 mt-5">
        @foreach($posts as $row)
          <div class="accordion border-bottom pb-4" id="order1">
            <div class="card">
              <div class="card-header">
                <h3 class="accordion-heading">
                  <a class="{{ $loop->first ? '' : 'collapsed' }}" href="#faq{{ $loop->iteration }}" 
                    role="button" data-toggle="collapse" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" 
                    aria-controls="faq{{ $loop->iteration }}">
                    {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}. {{ $row->post_title }}
                    <span class="accordion-indicator"></span>
                  </a>
                </h3>
              </div>
              <div class="collapse {{ $loop->first ? 'show' : '' }}" id="faq{{ $loop->iteration }}" data-parent="#order1">
                <div class="card-body font-size-sm">
                  <p>{!! $row->post_content !!}</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="large-top">
        {!! $posts->links('frontend.include.pagination') !!}
    </div>

  </div>

@endsection
@push('scripts')

@endpush