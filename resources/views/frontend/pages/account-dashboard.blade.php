@extends('frontend.include.master')
@section('content')

<div class=" bg-primary pt-4 pb-4">
    <div class="container py-2 py-lg-3">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center align-item-center  mb-3 mb-lg-0 pt-lg-2 ">
                <div>
                    <nav aria-label="breadcrumb text-center">
                        <ol class="breadcrumb  flex-lg-nowrap justify-content-center">
                            <li class="breadcrumb-item"><a class="text-nowrap text-white" href="{{url('/')}}"><i class="czi-home"></i>Home</a></li>
                            <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                    <div class=" pr-lg-4 text-center">
                        <h1 class="h3 mb-0 text-white">Your Profile</h1>
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

          <!-- Profile form-->
          <form class="mt-5" action="{{ route('user-profile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-primary rounded-lg p-4 mb-4">
              <div class="media align-items-center">
                @if ( $user->image)
                  <img src="{{ asset('storage/'.$user->image) }}" width="90" alt="{{ $user->first_name }}" class="img-thumbnail rounded-circle">
                @else
                  <img src="{{ $user->avatar ?: asset('theme-assets/img/team/01.jpg') }}" width="90" alt="{{ $user->first_name }}" class="img-thumbnail rounded-circle">
                @endif
                <div class="media-body pl-3">
                  <label for="profileImage" class="btn btn-light btn-shadow btn-sm mb-2"><i class="czi-loading mr-2"></i>Change Your Profile Image</label>
                  <input type="file" id="profileImage" name="profile_image" accept="image/png, image/jpeg, image/gif" style="display: none;">
                  <div class="p mb-0 font-size-ms text-white">Upload JPG, GIF or PNG image.</div>
                </div>
              </div>
            </div>
            <div class="row bg-white rounded shadow p-3">
              <input type="hidden" name="user_id" value="{{ $user->id }}">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="account-fn">Full Name </label>
                  <input class="form-control" type="text" id="account-fn" name="first_name" value="{{ $user->first_name }}">
                </div>
              </div>
              <!-- <div class="col-sm-6">
                <div class="form-group">
                  <label for="account-ln">Last Name</label>
                  <input class="form-control" type="text" id="account-ln" value="Gardner">
                </div>
              </div> -->
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="account-email">Email Address</label>
                  <input class="form-control" type="email" id="account-email" name="email" value="{{ $user->email }}" readonly>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="account-phone">Phone Number</label>
                  <input class="form-control" type="text" id="account-phone" name="phone" value="{{$user->phone}}" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="account-phone">Address</label>
                  <input class="form-control" type="text" id="account-phone" name="address" value="{{$user->country}}" required>
                </div>
              </div>
              <div class="col-12">
                <hr class="mt-2 mb-3">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <button class="btn btn-primary mt-3 mt-sm-0" type="submit">Update profile</button>
                </div>
              </div>
            </div>
          </form>
        </section>
    </div>
</div>

@stop