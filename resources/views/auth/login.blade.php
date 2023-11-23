<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Abuyog Academy') }}</title>
    @vite(['resources/js/app.js'])
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body>

    <!-- //* Form Design Starts Here -->

    <div class="d-flex aligns-items-center justify-content-center">
        <div class="shadow mt-5 pb-5" style="background-color: white; min-height: auto; width: 25rem">
            <div class="aaimage" style="background-image: url('{{ asset('images/aa-bg.png') }}')">
                <div class="image-overlay"></div>
            </div>
            <div class="mt-3">
                <img src="../images/employee.png" alt="Student" style="height: 45px; width: 50px" class="center" />
                <div style="text-align: center">
                    <h4 class="text-color">LOGIN</h4>
                </div>
            </div>
            @if ($success = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $success }}</p>
                </div>
            @endif
            <!-- //* Form Sign-in Starts Here -->

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-floating mb-3 mt-3 m-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" />
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-floating mb-3 m-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="{{ __('Password') }}" />
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- //*Button -->
                <div class="d-grid m-3">
                    <button type="submit" name="login" class="button-pink">{{ __('Login') }}</button>
                </div>
                <!-- //*Support and others-->
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="link-color">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        {{-- <div class="col">
                            <span style="font-size: 13px">New? </span>
                            <a href="{{ route('register') }}" class="link-color">Register</a>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/" class="link-color">Back to homepage</a>
                        </div>
                    </div>
                </div>
            </form>

            <!-- //* Form Sign-in Ends Here -->
        </div>
    </div>
    <!-- //* Form Design Ends Here -->

</body>

</html>
