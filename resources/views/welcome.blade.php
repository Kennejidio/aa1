<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Abuyog Academy</title>
    <link rel="icon" type="image/x-icon" href="images/aa-icon.png" />

    <link rel="stylesheet" href="{{asset('build/assets/app-5eddb806.css')}}">
    <script src="{{asset('build/assets/app-99ff8b32.js')}}"></script>
    {{-- @vite(['resources/js/app.js']) --}}

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body>
    <!-- //* Header Starts Here -->
    <header class="container-fluid pt-3 bg-dark text-center">
        <img src="images/aa-icon.png" alt="School Logo" class="logo" height="40" width="40" />
        <span class="aa-header h1 fw-bolder">ABUYOG ACADEMY INC.</span>
    </header>
    <!-- //* Header Ends Here -->

    <!-- //* Navigation Starts Here -->
    <div style="background-image: url('{{ asset('images/aa-bg.png') }}');" class="bg-image">
        <div class="color-overlay">
            <div class="container">
                <div class="row justify-content-center p-3 pt-lg-5">
                    <a href="{{ route('students.create-new') }}" class="btn btn-blue2 col-lg-3 p-4 mt-3 m-2">
                        <div>
                            <img src="{{ asset('images/forms.png') }}" alt="admission" width="70" height="70" />
                            <h4>{{ __('ADMISSION') }}</h4>
                        </div>
                    </a>
                    @auth
                        @hasanyrole('student')
                            <a href="{{ route('students.dashboard', Auth::user()->id) }}"
                                class="btn btn-green1 col-lg-3 p-4 mt-3 m-2">
                            @else
                                @hasanyrole('faculty')
                                    <a href="{{ route('faculty.dashboard', Auth::user()->id) }}"
                                        class="btn btn-green1 col-lg-3 p-4 mt-3 m-2">
                                    @else
                                        @hasanyrole('Admin|staff')
                                            <a href="{{ route('staff.dashboard', Auth::user()->id) }}"
                                                class="btn btn-green1 col-lg-3 p-4 mt-3 m-2">
                                            @else
                                                <a href="{{ route('home.index', Auth::user()->id) }}"
                                                    class="btn btn-green1 col-lg-3 p-4 mt-3 m-2">
                                                @endhasanyrole
                                            @endhasanyrole
                                        @endhasanyrole
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-green col-lg-3 p-4 mt-3 m-2">
                                        @endauth

                                        <div>
                                            <img src="{{ asset('images/new_login.png') }}" alt="student"
                                                width="70" height="70" />
                                            <h4>{{ __('USER PORTAL') }}</h4>
                                        </div>
                                    </a>
                                    <a href="/about" class="btn btn-maroon col-lg-3 p-4 mt-3 m-2">
                                        <div>
                                            <img src="{{ asset('images/about.png') }}" alt="employee" width="70"
                                                height="70" />
                                            <h4>{{ __('ABOUT') }}</h4>
                                        </div>
                                    </a>
                </div>
            </div>
            <!-- //* Navigation Ends Here -->

            <!-- //* Mission and Vision Text Starts Here -->
            <section class="container text-center mt-5">
                <h3 class="aa-text">Mission</h3>
                <p class="aa-text">
                    Providing quality education and training for the less privilege,
                    developing the youth by providing them with relevant and adequate
                    knowledge, skills and proper values; providing learning activities
                    that will harness the students capabilities to be resourceful,
                    creative and competent in emotional and educational fields to
                    increase productivity in living within the community and in the
                    whole society.
                </p>
            </section>

            <section class="container text-center">
                <h3 class="aa-text">Vision</h3>
                <p class="aa-text">
                    We envision the learners to be functionally literate, equipped with
                    life-long learning skills, appreciative in arts and sports, and
                    imbued with desirable values of becoming competent and responsible
                    individual.
                </p>
            </section>
        </div>
    </div>
    <!-- //* Mission and Vision Text Ends Here -->

    <!-- //* Footer Here -->
    <footer class="container-fluid p-3 bg-dark text-center">
        <span class="text-light">Copyright &#169; 2023, Abuyog Academy</span>
    </footer>
    <!-- //* Footer Ends -->
</body>

</html>
