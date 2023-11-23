@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <section class="container mt-4 pt-3 mb-5">
        <!-- //* Card status starts here -->
        <div class="row">
            <div class="col-md-8 text-center-alt mb-3">
                <h2 class="fw-bold">DASHBOARD</h2>
                <font class=" fw-semibold">Welcome {{ $student->user->name }}</font>
            </div>
            @php
                $status = $student->status;
            @endphp
            <div class="col-md-4 text-center">
                <div class="card-design text-light p-3 shadow @if ($status == 'PENDING') bg-red @endif">
                    <p>Enrollment Status</p>
                    <h3>{{ $student->status }}</h3>
                </div>
            </div>
        </div>

        <!-- //* Card statuses -->
        <div class="row mt-5">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body text-bg-maroon text-center rounded-2">
                        <div class="row">
                            <div class="col-md">
                                <img class=" m-2" src="{{ asset('images/subjects.png') }}" alt="" width="50"
                                    height="50">
                            </div>
                            <div class="col-md">
                                @if ($status == 'PENDING')
                                    <h4 class="card-title">N/A</h4>
                                @else
                                    <h4 class="card-title">0</h4>
                                @endif
                                <p class="card-text">Number of Subjects</p>
                                <a href="{{ route('students.schedules', Auth::user()) }}" class=" link-light">Schedules</a>
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
                                <img class=" m-2" src="{{ asset('images/payment.png') }}" alt="" width="50"
                                    height="50">
                            </div>
                            <div class="col-md">
                                @if ($status == 'PENDING')
                                    <h4 class="card-title">N/A</h4>
                                @else
                                    <h4 class="card-title">0</h4>
                                @endif
                                <p class="card-text">Total Balance</p>
                                <a href="{{ route('students.payments', Auth::user())}}" class=" link-light">Payment Status</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
    </section>
@endsection
