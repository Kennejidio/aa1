@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <section class="container mt-4 pt-3">
        <!-- //* Card status starts here -->
        <div class="row">
            <div class="col-md-8 text-center-alt mb-3">
                <h2 class="fw-bold">DASHBOARD</h2>
                <font class=" fw-semibold">Welcome {{ $faculty->user->name }}</font>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-design text-bg-blue1 text-light p-3 shadow">
                    <div class="row">
                        <div class="col-md">
                            <img class=" m-2" src="{{ asset('images/subjects.png') }}" alt="" width="50"
                                height="50">
                        </div>
                        <div class="col-md">
                            <h4 class="card-title">N/A</h4>
                            <p class="card-text">Number of Subjects</p>
                            <a href="#" class=" link-light">Subjects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- * -->
        <div class="row mt-5">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body text-bg-maroon text-center rounded-2">
                        <div class="row">
                            <div class="col-md">
                                <img class=" m-2" src="{{ asset('images/class.png') }}" alt="" width="50"
                                    height="50">
                            </div>
                            <div class="col-md">
                                <h4 class="card-title">N/A</h4>
                                <p class="card-text">Number of Students</p>
                                <a href="#" class=" link-light">Students</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body text-bg-blue2 text-center rounded-2">
                        <div class="row">
                            <div class="col-md">
                                <img class=" m-2" src="{{ asset('images/subjects.png') }}" alt="" width="50"
                                    height="50">
                            </div>
                            <div class="col-md">
                                <h4 class="card-title">N/A</h4>
                                <p class="card-text">Number of Classes</p>
                                <a href="#" class=" link-light">Class</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-2">
                <div class="card">
                    <div class="card-body text-bg-violet text-center rounded-2">
                        <div class="row">
                            <div class="col-md">
                                <img class=" m-2" src="{{ asset('images/sy-white.png') }}" alt="" width="50"
                                    height="50">
                            </div>
                            <div class="col-md">
                                <h4 class="card-title">2023 - 2024</h4>
                                <p class="card-text">School Year</p>
                                {{-- <a href="#" class=" link-light">Payment Status</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
    </section>
@endsection
