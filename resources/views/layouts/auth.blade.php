<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | {{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Login" name="description" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        @include('layouts._partials._css')
    </head>

    <body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header text-center ">
                                <a href="#">
                                    <span><img src="{{ asset('logo.png') }}" alt="" height="70"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                              @yield('content')
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-muted ml-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            {{ date('Y') }} © {{ config('app.name') }}
        </footer>

        <!-- bundle -->
        @include('layouts._partials._js')
        
    </body>
</html>
