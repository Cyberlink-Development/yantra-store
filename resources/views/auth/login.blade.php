<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <style>
            body,
            html {
                height: 100%;
            }

            .login-container {
                min-height: 100vh;
                place-content: center;
                padding: 5rem;
            }

            .logo-side {
                background-color: #f8f9fa;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .logo-side img {
                max-width: 80%;
                height: auto;
            }

            .form-side {
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0px 0px 28px -5px rgba(0,0,0,0.32);
            }

            @media (max-width: 768px) {
                .logo-side {
                    display: none;
                }
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </head>
    <body>
        @include('toastr.response')
        <div class="container-fluid login-container">
            <div class="row">
                <!-- Logo Side -->
                <div class="col-md-6 logo-side">
                    <img src="{{asset('backend/images/logo-placeholder.png')}}" alt="Logo" />
                </div>
                <!-- Form Side -->
                <div class="col-md-6 form-side">
                    <div class="w-75">
                        <h2 class="mb-4">Login </h2>
                        <form action={{ route('admin.authenticate') }} method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label >
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember" />
                                <label class="form-check-label" for="rememberMe" >Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
