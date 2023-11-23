@extends('layouts.app')
@section('content')
    <section>
        <!-- * Top Buttons -->
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white shadow mt-4 p-3">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="fw-bolder text-bg-dark
                                text-center">STUDENT PROFILE</h4>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="btn-group" role="group" aria-label="Basic
                                example">
                                <a class="btn btn-green" href="{{ route('studentdata.edit', $student->id) }}">EDIT</a>
                                <a class="btn btn-red" href="{{ route('studentdata.index') }}">BACK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- * STUDENT INFORMATION -->

        <div class="row">
            <!-- * STUDENT INFO -->
            <div class="col-md-8">
                <div class="bg-white shadow mt-4 p-3">
                    <div class="text-center">
                        <h4 class="fw-bolder text-bg-green">PERSONAL
                            DETAILS</h4>
                    </div>
                    <div class="row justify-content-md-center p-3">
                        <div>
                            {{-- <span class="fw-bolder"></span> --}}
                            <input class="form-control form-control-sm" type="hidden" value="{{ $student->id }}" disabled>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bolder">LRN</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->lrn }}" disabled>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bolder">First Name</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->firstname }}"
                                disabled>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bolder">Middle Name</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->middlename }}"
                                disabled>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bolder">Last Name</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->lastname }}"
                                disabled>
                        </div>
                    </div>
                    <div class="row justify-content-md-center p-3">
                        <div class="col-md-3">
                            <span class="fw-bolder">Extension Name</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->extname }}"
                                disabled>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bolder">Sex</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->sex }}" disabled>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bolder">Birth Date</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->birthdate }}"
                                disabled>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bolder">Age</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->age }}" disabled>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4 class="fw-bolder text-bg-green">ADDRESS
                            DETAILS</h4>
                    </div>
                    <div class="row justify-content-md-center p-3">
                        <div class="col-md-3">
                            <span class="fw-bolder">Barangay</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->barangay }}"
                                disabled>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bolder">Municipal/City</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->municipal }}"
                                disabled>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bolder">Province/Region</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->province }}"
                                disabled>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bolder">Zip</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->zip }}"
                                disabled>
                        </div>
                    </div>
                    <div class="row justify-content-md-start p-3">
                        <div class="col-md-3">
                            <span class="fw-bolder">Contact Number</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->contact }}"
                                disabled>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bolder"></span>
                            <input class="form-control form-control-sm" type="hidden">
                        </div>
                    </div>
                </div>
            </div>

            <!-- * Panel 2 -->
            <div class="col-md-4">
                <div class="bg-white shadow mt-4 p-3">
                    <div class="text-center">
                        <h4 class="fw-bolder text-bg-green">PARENTS /
                            GUADIAN</h4>
                    </div>
                    <div class="row justify-content-md-center p-3">
                        <div class="col-md-8">
                            <span class="fw-bolder">Mother</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->mother }}"
                                disabled>
                        </div>
                    </div>
                    <div class="row justify-content-md-center p-3">
                        <div class="col-md-8">
                            <span class="fw-bolder">Father</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->father }}"
                                disabled>
                        </div>
                    </div>
                    <div class="row justify-content-md-center p-3">
                        <div class="col-md-8">
                            <span class="fw-bolder">Guardian</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->guardian }}"
                                disabled>
                        </div>
                    </div>
                    <div class="row justify-content-md-center p-3">
                        <div class="col-md-8">
                            <span class="fw-bolder">Contact number in
                                case
                                of Emergency</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->contact }}"
                                disabled>
                        </div>
                    </div>
                    <div class="row justify-content-md-center p-3">
                        <div class="col-md-8">
                            <span class="fw-bolder"></span>
                            <input class="form-control form-control-sm" type="hidden">
                        </div>
                    </div>
                </div>
            </div>

            <!-- * Panel 3 -->
            <div class="col-md-4">
                <div class="bg-white shadow mt-4 p-3">
                    <div class="text-center">
                        <h5 class="fw-bolder text-bg-green">EDUCATIONAL
                            BACKGROUND</h5>
                    </div>
                    <div class="row justify-content-md-center p-3">
                        <div class="col-md-8">
                            <span class="fw-bolder">Last Elementary
                                school
                                Graduated</span>
                            <input class="form-control form-control-sm" type="text"
                                value="{{ $student->elementary }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="bg-white shadow mt-4 p-3">
                    <div class="text-center">
                        <h5 class="fw-bolder text-bg-green">RETURNEE /
                            TRANSFEREE</h5>
                    </div>
                    <div class="row justify-content-md-center p-3">
                        <div class="col-md-3">
                            <span class="fw-bolder">Grade Level
                                Completed</span>
                            <input class="form-control form-control-sm" type="text"
                                value="{{ $student->gradelevelcompleted }}" disabled>
                        </div>
                        <div class="col-md-2">
                            <span class="fw-bolder">Last School Year</span>
                            <input class="form-control form-control-sm" type="text"
                                value="{{ $student->lastschoolyearcompleted }}" disabled>
                        </div>
                        <div class="col-md-2">
                            <span class="fw-bolder">School Name</span>
                            <input class="form-control form-control-sm" type="text"
                                value="{{ $student->schoolname }}" disabled>
                        </div>
                        <div class="col-md-2">
                            <span class="fw-bolder">School Address</span>
                            <input class="form-control form-control-sm" type="text"
                                value="{{ $student->schooladdress }}" disabled>
                        </div>
                        <div class="col-md-2">
                            <span class="fw-bolder">School ID</span>
                            <input class="form-control form-control-sm" type="text" value="{{ $student->schoolid }}"
                                disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
