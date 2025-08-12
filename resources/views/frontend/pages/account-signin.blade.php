@extends('frontend.include.master')
@section('content')
    <!-- Page Content-->
    <section class="uk-section uk-background-muted uk-section-muted uk-flex uk-flex-middle">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#signin-tab-2" data-toggle="tab" role="tab"
                                aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#signup-tab-2" data-toggle="tab" role="tab"
                                aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
                    </ul>
                </div>
                <div class="modal-body tab-content py-4">
                    <form method="post" action="{{route('login')}}" class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab-2">
                        @csrf
                        <div class="form-group">
                            <label for="si-email">Email address</label>
                            <input class="form-control" type="email" id="si-email" name="email"
                                placeholder="johndoe@example.com" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="form-group">
                            <label for="si-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="si-password" name="password" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox">
                                    <i class="czi-eye password-toggle-indicator"></i>
                                    <span class="sr-only">Show password</span>
                                </label>
                                <div class="invalid-feedback">Please enter a password.</div>
                            </div>
                        </div>
                        <!-- <div class="form-group d-flex flex-wrap justify-content-between">
                         <div class="custom-control custom-checkbox mb-2">
                           <input class="custom-control-input" type="checkbox" id="si-remember">
                           <label class="custom-control-label" for="si-remember">Remember me</label>
                         </div><a class="font-size-sm" href="#">Forgot password?</a>
                        </div> -->
                        <div>
                            <p class="login-text">Or</p>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <div class="d-inline-block align-middle">Login With: 
                                <a class="social-btn sb-google mr-2 mb-2" href="{{ url('auth/google') }}" data-toggle="tooltip" title="" data-original-title="Sign in with Google"><i class="czi-google"></i></a>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
                    </form>

                    <form action="{{route('user-registration')}}" method="POST" class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab-2">
                        @csrf
                        <div class="form-group">
                            <label for="su-name">Full name</label>
                            <input class="form-control" type="text" name="full_name" id="su-name" placeholder="Enter Full Name" required>
                            <div class="invalid-feedback">Please fill in your name.</div>
                        </div>
                        <div class="form-group">
                            <label for="su-email">Email address</label>
                            <input class="form-control" type="email" name="email" id="su-email" placeholder="Enter Valid Email"
                                required>
                            <div class="invalid-feedback"> Please provide a valid email address.</div>
                        </div>
                        
                        <small style="color:#d9534f">
                            Note: Please enter a valid email address. Your password will be sent to the email you provide, so make sure it is correct.
                        </small>
                        <!-- <div class="form-group">
                            <label for="su-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                        class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show
                                        password</span>
                                </label>
                                <div class="invalid-feedback">Please enter a password.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="su-password-confirm">Confirm password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password-confirm" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                        class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show
                                        password</span>
                                </label>
                            </div>
                        </div> -->
                        <div>
                            <p class="login-text">Or</p>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <div class="d-inline-block align-middle">Sign up With: 
                                <a class="social-btn sb-google mr-2 mb-2" href="{{ url('auth/google') }}" data-toggle="tooltip" title="" data-original-title="Sign up with Google"><i class="czi-google"></i></a>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
