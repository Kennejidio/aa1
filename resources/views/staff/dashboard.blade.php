@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <section class="container">

        <!-- * Card status starts here -->
        <div class="row mt-4 mb-4">
            <div class="col-md-4 text-center-alt">
                <h3><b>DASHBOARD</b></h3>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <div class="card-design bg-green1 text-light
                        text-center shadow">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/students-white.png') }}" alt="student" width="50" height="50">
                        </div>
                        <div class="col-6">
                            <font class="h3">{{ $students }}</font>
                            <p>Total Enrolled Students</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card-design bg-maroon text-light
                        text-center shadow">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/students-white.png') }}" alt="student" width="50" height="50">
                        </div>
                        <div class="col-6">
                            <font class="h3">{{ $pendingStudents }}</font>
                            <p>Total Pending Students</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card-design bg-pink text-light
                        text-center shadow">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/people-white.png') }}" alt="student" width="50" height="50">
                        </div>
                        <div class="col-6">
                            <font class="h3">{{ $staffs }}</font>
                            <h5>Total Staffs</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card-design bg-violet text-light
                        text-center shadow">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/people-white.png') }}" alt="student" width="50" height="50">
                        </div>
                        <div class="col-6">
                            <font class="h3">{{ $faculties }}</font>
                            <h5>Total Faculty</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <div class="card-design bg-blue1 text-light
                        text-center shadow">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/sy-white.png') }}" alt="student" width="50"
                                height="50">
                        </div>
                        <div class="col-6">
                            <font class="h3">2023-2024</font>
                            <h5>School Year</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
