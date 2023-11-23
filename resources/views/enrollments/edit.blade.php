@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="container">
        <div class=" ms-3 mt-3">
            <a class="btn bg-blue text-white p-1" href="{{ route('enrollments.index') }}"><b>BACK</b></a>
        </div>
    </div>
    <section class="container-fluid justify-content-center my-5">

        <!-- ! FORM -->
        <form action="{{ route('enrollments.update', $enrollment->id) }}" method="POST"
            class="bg-white rounded-1 shadow p-3
        mb-5">
            @csrf
            @method('PUT')
            <div class="text-center">
                <h2 class="text-darkpink">ENROLLMENT</h2>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- * DETAILS -->
            <div class="row mt-4">
                <div class="col-md mt-1 text-center">
                    <span class="fw-bolder">STUDENT</span>
                    <input class="form-control  text-center" type="text"
                        value="{{ $enrollment->student->firstname }} {{ $enrollment->student->middlename }} {{ $enrollment->student->lastname }} {{ $enrollment->student->exttname }}"
                        disabled>
                </div>
            </div>

            <div class="text-center mt-4">
                <h6 class="h6 fw-bolder">STATUSES</h6>
            </div>

            <div class="row">
                <div class="col-md input-group m-1">
                    <span class="input-group-text text-bg-darkpink">Schoolyear</span>
                    <select class="form-select" name="schoolyear">
                        {{-- <option disabled selected>Choose...</option> --}}
                        @foreach ($schoolyears as $schoolyear)
                            <option value="{{ $schoolyear->id }}" @if ($enrollment->school_year->id == $schoolyear->id) selected @endif>
                                {{ $schoolyear->start_date }} -
                                {{ $schoolyear->end_date }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md input-group m-1">
                    <span class="input-group-text text-bg-darkpink">Section</span>
                    <select class="form-select" name="section">
                        @foreach ($sections as $section)
                            <option value="{{ $section->id }}" @if ($enrollment->section->id == $section->id) selected @endif>
                                {{ $section->code }} {{ $section->grade_level->code }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md input-group m-1">
                    <span class="input-group-text text-bg-green">Status</span>
                    <select class="form-select" name="status">
                        <option value="Enrolled" @if ($enrollment->status == 'Enrolled') selected @endif>Enrolled</option>
                        <option value="Admitted" @if ($enrollment->status == 'Admitted') selected @endif>Admitted</option>
                    </select>
                </div>
                <div class="col-md input-group m-1">
                    <span></span>
                    <span></span>
                </div>
            </div>

            <!-- ! BUTTON SUBMIT -->
            <div class="row">
                <div class="col-md mt-5 text-center">
                    <button class="btn btn-darkpink px-5 py-1" type="submit" name="register">SUBMIT</button>
                </div>
            </div>
        </form>
    </section>
@endsection
