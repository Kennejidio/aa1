@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="container">
        <div class=" ms-3 mt-3">
            <a class="btn bg-blue text-white p-1" href="{{ route('classes.index') }}"><b>BACK</b></a>
        </div>
    </div>
    <section class="container-fluid justify-content-center my-5">

        <!-- ! FORM -->
        <div class="bg-white rounded-1 shadow p-3 mb-5">
            <div class="text-center">
                <h2 class="text-darkpink">CLASS CREATE</h2>
            </div>

            <!-- * DETAILS -->
            <div class="row mt-4">
                <div class="col-md mt-1">
                    <span class="fw-bolder">FACULTY</span>
                    <input class="form-control text-center-alt" type="text"
                        value="{{ $class->staff->firstname }} {{ $class->staff->middlename }} {{ $class->staff->lastname }} {{ $class->staff->extname }}"
                        disabled>
                </div>
            </div>

            <div class="text-center mt-4">
                <h6 class="h6 fw-bolder">STATUSES</h6>
            </div>

            <div class="row">
                <div class="col-md input-group m-1">
                    <span class="input-group-text text-bg-darkpink">Schoolyear</span>
                    <input class="form-control" type="text" value="{{ $class->school_year->start_date }} - {{ $class->school_year->end_date }}" disabled>
                </div>
                <div class="col-md input-group m-1">
                    <span class="input-group-text text-bg-darkpink">Subject</span>
                    <input class="form-control" type="text" value="{{ $class->subject->code }}" disabled>
                </div>
            </div>
        </div>
    </section>
@endsection
