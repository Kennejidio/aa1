<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Abuyog Academy') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-ff481f0e.css') }}">
    <script src="{{ asset('build/assets/app-99ff8b32.js') }}"></script> --}}
    @vite(['resources/js/app.js'])

</head>

<body>
    <!-- //* Header Starts Here -->
    <header class="fixed-top">
        <!-- * Logo and Title -->
        <div class="container-fluid pt-3 bg-dark text-center">
            <img src="{{ asset('images/aa-icon.png') }}" alt="School Logo" class="logo" height="60"
                width="60" />
            <span class="aa-header h1">ABUYOG ACADEMY INC.</span>
        </div>

        <!-- * Navigation  -->
        <div>
            <nav class="navbar navbar-expand-sm bg-white shadow mt-0">
                <div class="container">
                    <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarCollapse"
                        class="collapse navbar-collapse
                            text-center-alt">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a href="/"
                                    class="nav-link text-darkpink
                                        fw-semibold btn">
                                    <img src="{{ asset('images/home.png') }}" alt="i" width="20"
                                        height="20" />
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('students.create-new') }}"
                                    class="nav-link
                                    text-darkpink
                                        fw-semibold btn">
                                    <img src="{{ asset('images/forms.png') }}" alt="i" width="20"
                                        height="20" />
                                    New Student
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('students.create-transferee') }}"
                                    class="nav-link text-darkpink
                                        fw-semibold btn">
                                    <img src="{{ asset('images/forms.png') }}" alt="i" width="20"
                                        height="20" />
                                    Returnee/Transferee
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- //* Header Ends Here -->

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <!-- //* Footer Here -->
    <footer class="container-fluid p-3 bg-dark text-center">
        <span class="text-light">Copyright &#169; 2023, Abuyog Academy</span>
    </footer>
    <!-- //* Footer Ends -->
</body>

</html>
