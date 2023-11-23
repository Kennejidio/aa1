@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="container">
        <div class=" ms-3 mt-3">
            <a class="btn bg-blue text-white p-1" href="#"><b>BACK</b></a>
        </div>
    </div>
    <section class="d-flex justify-content-center my-5">

        <!-- ! FORM -->
        <form action="{{ route('enrollments.update', $enrollment->id) }}" method="PATCH"
            class="bg-white rounded-1 shadow p-3
        mb-5">
            <div class="text-center">
                <h2 class="text-darkpink">EDIT ENROLLMENT STATUS</h2>
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
                <div class="col-md mt-1">
                    <span class="fw-bolder">STUDENT</span>
                    <input class="form-control" type="text" disabled value="{{ $enrollment->student->firstname }}">
                </div>
            </div>

            <div class="text-center mt-4">
                <h6 class="h6 fw-bolder">STATUSES</h6>
            </div>

            <div class="row">
                <div class="col-md input-group m-1">
                    <span class="input-group-text text-bg-darkpink">Schoolyear</span>
                    <select class="form-select" name="schoolyear">
                        @foreach ($schoolyears as $schoolyear)
                            <option value="{{$schoolyear->id}}" @if (old('schoolyear') == '{{$enrollment->school_year}}') {{ 'selected' }} @endif>{{ $schoolyear->schoolyear }}
                                {{ $schoolyear->description }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md input-group m-1">
                    <span class="input-group-text text-bg-green">Grade Level</span>
                    <select class="form-select" name="gradelevel">
                        @foreach ($gradelevels as $gradelevel)
                            <option value="{{$gradelevel->id}}" @if (old('gradelevel') == '{{$enrollment->grade_level}}') {{ 'selected' }} @endif>{{ $gradelevel->gradelevel }}
                                {{ $gradelevel->description }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md input-group m-1">
                    <span class="input-group-text text-bg-darkpink">Section</span>
                    <select class="form-select" name="section">
                        @foreach ($gradelevels as $gradelevel)
                            <option value="{{$gradelevel->id}}" @if (old('gradelevel') == '{{$enrollment->grade_level}}') {{ 'selected' }} @endif>{{ $gradelevel->gradelevel }}
                                {{ $gradelevel->description }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md input-group m-1">
                    <span class="input-group-text text-bg-green">Status</span>
                    <select class="form-select" name="status">
                        <option value="Admitted" @if (old('status') == 'Adnitted') {{ 'selected' }} @endif>Admit</option>
                        <option value="Enrolled" @if (old('status') == 'Enrolled') {{ 'selected' }} @endif>Enrol</option>
                    </select>
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
