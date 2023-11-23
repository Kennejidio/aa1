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

    <link rel="stylesheet" href="{{ asset('build/assets/app-5eddb806.css') }}">
    <script src="{{ asset('build/assets/app-99ff8b32.js') }}"></script>
    {{-- @vite(['resources/js/app.js']) --}}

</head>

<body>
    @guest
        <!-- !Header -->
        <header>
            <!-- //* Logo and Title -->
            <div class="container-fluid pt-3 bg-dark text-center">
                <img src="{{ asset('images/aa-icon.png') }}" alt="School Logo" class="logo" height="40"
                    width="40" />
                <span class="aa-header h1 fw-bolder">ABUYOG ACADEMY INC.</span>
            </div>
        </header>
    @else
        @hasanyrole('student')
            <!-- !Header -->
            <header>
                <!-- //* Logo and Title -->
                <div class="container-fluid pt-3 bg-dark text-center">
                    <img src="{{ asset('images/aa-icon.png') }}" alt="School Logo" class="logo" height="40"
                        width="40" />
                    <span class="aa-header h1 fw-bolder">ABUYOG ACADEMY INC.</span>
                </div>

                <!-- //* Navigation  -->
                <div>
                    <nav class="navbar navbar-expand-sm navbar-light bg-gray-400">
                        <div class="container">
                            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse"
                                data-bs-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="navbarCollapse" class="collapse navbar-collapse text-center-alt">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item">
                                        <a href="{{ route('students.dashboard', Auth::user()) }}"
                                            class="nav-link text-black fw-semibold btn">
                                            <img src="{{ asset('images/dashboard2.png') }}" alt="i" width="30"
                                                height="30" />
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('students.schedules', Auth::user()) }}"
                                            class="nav-link text-black fw-semibold btn">
                                            <img src="{{ asset('images/class.png') }}" alt="i" width="30"
                                                height="30" />
                                            Subjects/Schedules
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('students.payments', Auth::user()) }}"
                                            class="nav-link text-black fw-semibold btn">
                                            <img src="{{ asset('images/payment-status.png') }}" alt="i" width="30"
                                                height="30" />
                                            Payments
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav ms-auto">
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle text-black fw-semibold btn"
                                            data-bs-toggle="dropdown">
                                            <img src="{{ asset('images/student.png') }}" alt="admin" width="30"
                                                height="30">
                                            {{ Auth::user()->name }} ({{ Auth::user()->roles->first()->name }})
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end bg-gray-300 text-center-alt">
                                            <a href="#" class="dropdown-item fw-semibold">Settings</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="{{ route('logout') }}" class="dropdown-item fw-semibold"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        @else
            @hasanyrole('faculty')
                <!-- ! Header -->
                <header>
                    <!-- //* Logo and Title -->
                    <div class="container-fluid pt-3 bg-dark text-center">
                        <img src="{{ asset('images/aa-icon.png') }}" alt="School Logo" class="logo" height="40"
                            width="40" />
                        <span class="aa-header h1 fw-bolder">ABUYOG ACADEMY INC.</span>
                    </div>

                    <!-- //* Navigation  -->
                    <div>
                        <nav class="navbar navbar-expand-sm navbar-light bg-gray-400">
                            <div class="container">
                                <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse"
                                    data-bs-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div id="navbarCollapse" class="collapse navbar-collapse text-center-alt">
                                    <ul class="nav navbar-nav">
                                        <li class="nav-item">
                                            <a href="{{ route('faculty.dashboard', Auth::user()) }}"
                                                class="nav-link text-black fw-semibold btn">
                                                <img src="{{ asset('images/dashboard2.png') }}" alt="i" width="30"
                                                    height="30" />
                                                Dashboard
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('faculty.students', Auth::user()) }}"
                                                class="nav-link text-black fw-semibold btn">
                                                <img src="{{ asset('images/class.png') }}" alt="i" width="30"
                                                    height="30" />
                                                Students
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('faculty.class', Auth::user()) }}"
                                                class="nav-link text-black fw-semibold btn">
                                                <img src="{{ asset('images/subjects.png') }}" alt="i" width="30"
                                                    height="30" />
                                                Class
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav ms-auto">
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle text-black fw-semibold btn"
                                                data-bs-toggle="dropdown">
                                                <img src="{{ asset('images/faculty.png') }}" alt="admin" width="30"
                                                    height="30">
                                                {{ Auth::user()->name }} ({{ Auth::user()->roles->first()->name }})
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end bg-gray-300 text-center-alt">
                                                <a href="#" class="dropdown-item fw-semibold">Settings</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="{{ route('logout') }}" class="dropdown-item fw-semibold"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
            @else
                @hasanyrole('Admin|staff')
                    <!-- ! Header -->
                    <header>
                        <!-- * Logo and Title -->
                        <div class="container-fluid pt-3 bg-dark text-center">
                            <img src="{{ asset('images/aa-icon.png') }}" alt="School Logo" class="logo" height="40"
                                width="40" />
                            <span class="aa-header h1 fw-bolder">ABUYOG ACADEMY INC.</span>
                        </div>

                        <!-- * Navigation  -->
                        <div>
                            <nav class="navbar navbar-expand-sm navbar-light bg-gray-400">
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
                                                <a href="{{ route('staff.dashboard', Auth::user()) }}"
                                                    class="nav-link text-black
                                        fw-semibold btn">
                                                    <img src="{{ asset('images/dashboard2.png') }}" alt="i" width="30"
                                                        height="30" />
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#"
                                                    class="nav-link dropdown-toggle
                                        text-black fw-semibold btn"
                                                    data-bs-toggle="dropdown">
                                                    <img src="{{ asset('images/users2.png') }}" alt="i" width="30"
                                                        height="30" />
                                                    Users
                                                </a>
                                                <div
                                                    class="dropdown-menu bg-gray-300
                                        text-center-alt">
                                                    <a href="{{ route('studentdata.index') }}"
                                                        class="dropdown-item fw-semibold">Students</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('staffdata.index') }}"
                                                        class="dropdown-item fw-semibold">Staffs</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('users.index') }}" class="dropdown-item fw-semibold">Manage
                                                        Users</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('roles.index') }}" class="dropdown-item fw-semibold">Roles</a>
                                                </div>
                                            </li>
                                            {{-- <li class="nav-item dropdown">
                                                <a href="#"
                                                    class="nav-link dropdown-toggle
                                        text-black fw-semibold btn"
                                                    data-bs-toggle="dropdown">
                                                    <img src="{{ asset('images/document.png') }}" alt="i" width="30"
                                                        height="30" />
                                                    Tables
                                                </a>
                                                <div
                                                    class="dropdown-menu bg-gray-300
                                        text-center-alt">
                                                    <a href="{{ route('gradelevel.index') }}" class="dropdown-item fw-semibold">Grade
                                                        Levels</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('section.index') }}"
                                                        class="dropdown-item fw-semibold">Sections</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('subject.index') }}"
                                                        class="dropdown-item fw-semibold">Subjects</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('requirements.index') }}"
                                                        class="dropdown-item fw-semibold">Requirements</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('schoolyear.index') }}"
                                                        class="dropdown-item fw-semibold">School
                                                        Years</a>
                                                </div>
                                            </li> --}}
                                            <li class="nav-item dropdown">
                                                <a href="#"
                                                    class="nav-link dropdown-toggle
                                        text-black fw-semibold btn"
                                                    data-bs-toggle="dropdown">
                                                    <img src="{{ asset('images/register_form.png') }}" alt="i" width="30"
                                                        height="30" />
                                                    Student Management
                                                </a>
                                                <div
                                                    class="dropdown-menu bg-gray-300
                                        text-center-alt">
                                                    <a href="{{ route('enrollments.index') }}"
                                                        class="dropdown-item fw-semibold">Enrollment</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item fw-semibold">Student Requirements</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('classes.index') }}"
                                                        class="dropdown-item fw-semibold">Class</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="nav navbar-nav ms-auto">
                                            <li class="nav-item dropdown">
                                                <a href="#"
                                                    class="nav-link dropdown-toggle
                                        text-black fw-semibold btn"
                                                    data-bs-toggle="dropdown">
                                                    <img src="{{ asset('images/admin.png') }}" alt="admin" width="30"
                                                        height="30">
                                                    {{ Auth::user()->name }} ({{ Auth::user()->roles->first()->name }})
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end bg-gray-300 text-center-alt">
                                                    <a href="{{ route('staff.settings', Auth::user()) }}"
                                                        class="dropdown-item
                                            fw-semibold">Settings</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('logout') }}" class="dropdown-item fw-semibold"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </header>
                @else
                    <header>
                        <!-- //* Logo and Title -->
                        <div class="container-fluid pt-3 bg-dark text-center">
                            <img src="{{ asset('images/aa-icon.png') }}" alt="School Logo" class="logo" height="40"
                                width="40" />
                            <span class="aa-header h1 fw-bolder">ABUYOG ACADEMY INC.</span>
                        </div>

                        <!-- //* Navigation  -->
                        <div>
                            <nav class="navbar navbar-expand-sm navbar-light bg-gray-400">
                                <div class="container">
                                    <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse"
                                        data-bs-target="#navbarCollapse">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div id="navbarCollapse" class="collapse navbar-collapse text-center-alt">
                                        <ul class="nav navbar-nav ms-auto">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle text-black fw-semibold btn"
                                                    data-bs-toggle="dropdown">
                                                    <img src="{{ asset('images/people.png') }}" alt="admin" width="30"
                                                        height="30">
                                                    {{ Auth::user()->name }} ({{ Auth::user()->roles->first()->name }})
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end bg-gray-300 text-center-alt">
                                                    <a href="#" class="dropdown-item fw-semibold">Settings</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('logout') }}" class="dropdown-item fw-semibold"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </header>
                @endhasanyrole
            @endhasanyrole
        @endhasanyrole
    @endguest
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
