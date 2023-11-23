@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="container">
        <div class="ms-3 mt-3 ">
            <a class="btn bg-blue text-white p-1" href="{{ route('enrollments.index') }}"><b>BACK</b></a>
        </div>
    </div>
    <section class="d-flex justify-content-center my-3">
        <!-- ! FORM -->
        <div class="bg-white rounded-1 shadow p-3 mb-5">
            <div class="text-center">
                <h2 class="text-darkpink">SHOW ENROLLMENT STATUS</h2>
            </div>

            <!-- * LOGIN DETAILS -->
            <div class="text-center mt-3">
                <h4 class="fw-bolder">STATUS DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Name</span>
                    <input class="form-control " disabled value="{{ $enrollment->student->firstname }} {{ $enrollment->student->middlename }}
                    {{ $enrollment->student->lastname }} {{ $enrollment->student->extname }}">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Grade Level</span>
                    <input class="form-control " disabled value="{{ $enrollment->grade_level->gradelevel }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Section</span>
                    <input class="form-control " disabled value="{{ $enrollment->section->section}}">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Status</span>
                    <input class="form-control" disabled value="{{ $enrollment->status }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">School Year</span>
                    <input class="form-control " disabled value="{{ $enrollment->school_year->schoolyear }}">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder"></span>
                    <input class="form-control" type="hidden" disabled>
                </div>
            </div>
    </section>
@endsection
