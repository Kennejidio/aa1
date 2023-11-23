@extends('layouts.app')
@section('content')
    <section>
        <form action="{{ route('studentdata.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- * Top Buttons -->
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white shadow mt-4 p-3">
                        <div class="row">
                            <div class="col-md-9">
                                <h4 class="fw-bolder text-bg-dark
                            text-center">STUDENT
                                    INFORMATION</h4>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="btn-group" role="group" aria-label="Basic
                            example">
                                    <button type="submit"
                                        class="btn
                                btn-green">SAVE</button>
                                    <a class="btn btn-red" href="{{ URL::previous() }}">CANCEL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <input class="form-control form-control-sm" type="hidden" value="{{ $student->id }}"
                                    disabled>
                            </div>
                            <div class="col-md-3">
                                <span class="fw-bolder">LRN</span>
                                <input class="form-control form-control-sm" type="text" name="lrn"
                                    value="{{ $student->lrn }}">
                            </div>
                            <div class="col-md-3">
                                <span class="fw-bolder">First Name</span>
                                <input class="form-control form-control-sm" type="text" name="firstname"
                                    value="{{ $student->firstname }}">
                            </div>
                            <div class="col-md-3">
                                <span class="fw-bolder">Middle Name</span>
                                <input class="form-control form-control-sm" type="text" name="middlename"
                                    value="{{ $student->middlename }}">
                            </div>
                            <div class="col-md-3">
                                <span class="fw-bolder">Last Name</span>
                                <input class="form-control form-control-sm" type="text" name="lastname"
                                    value="{{ $student->lastname }}">
                            </div>
                        </div>
                        <div class="row justify-content-md-center p-3">
                            <div class="col-md-3">
                                <span class="fw-bolder">Extension Name</span>
                                <input class="form-control form-control-sm" type="text" name="extname"
                                    value="{{ $student->extname }}">
                            </div>
                            <div class="col-md-3">
                                <span class="fw-bolder">Sex</span>
                                <select class="form-select form-select-sm" name="sex">
                                    <option value="m" {{ $student->sex == 'm' ? 'selected' : '' }}>m</option>
                                    <option value="f" {{ $student->sex == 'f' ? 'selected' : '' }}>f</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <span class="fw-bolder">Birth Date</span>
                                <input class="form-control form-control-sm" type="date" name="birthdate"
                                    value="{{ $student->birthdate }}">
                            </div>
                            <div class="col-md-3">
                                <span class="fw-bolder">Age</span>
                                <input class="form-control form-control-sm" type="text" disabled
                                    value="{{ $student->age }}">
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="fw-bolder text-bg-green">ADDRESS
                                DETAILS</h4>
                        </div>
                        <div class="row justify-content-md-center p-3">
                            <div class="col-md-3">
                                <span class="fw-bolder">Barangay</span>
                                <input class="form-control form-control-sm" type="text" name="barangay"
                                    value="{{ $student->barangay }}">
                            </div>
                            <div class="col-md-3">
                                <span class="fw-bolder">Municipal/City</span>
                                <input class="form-control form-control-sm" type="text" name="municipal"
                                    value="{{ $student->municipal }}">
                            </div>
                            <div class="col-md-3">
                                <span class="fw-bolder">Province/Region</span>
                                <input class="form-control form-control-sm" type="text" name="province"
                                    value="{{ $student->province }}">
                            </div>
                            <div class="col-md-3">
                                <span class="fw-bolder">Zip</span>
                                <input class="form-control form-control-sm" type="text" name="zip"
                                    value="{{ $student->zip }}">
                            </div>
                        </div>
                        <div class="row justify-content-md-start p-3">
                            <div class="col-md-3">
                                <span class="fw-bolder">Contact Number</span>
                                <input class="form-control form-control-sm" type="text" name="contact" disabled
                                    value="{{ $student->contact }}">
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
                                <input class="form-control form-control-sm" type="text" name="mother"
                                    value="{{ $student->mother }}">
                            </div>
                        </div>
                        <div class="row justify-content-md-center p-3">
                            <div class="col-md-8">
                                <span class="fw-bolder">Father</span>
                                <input class="form-control form-control-sm" type="text" name="father"
                                    value="{{ $student->father }}">
                            </div>
                        </div>
                        <div class="row justify-content-md-center p-3">
                            <div class="col-md-8">
                                <span class="fw-bolder">Guardian</span>
                                <input class="form-control form-control-sm" type="text" name="guardian"
                                    value="{{ $student->guardian }}">
                            </div>
                        </div>
                        <div class="row justify-content-md-center p-3">
                            <div class="col-md-8">
                                <span class="fw-bolder">Contact number in
                                    case
                                    of Emergency</span>
                                <input class="form-control form-control-sm" type="text" name="contact"
                                    value="{{ $student->contact }}">
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
                                <input class="form-control form-control-sm" type="text" name="elementary"
                                    value="{{ $student->elementary }}">
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
                                <input class="form-control form-control-sm" type="text" name="gradelevelcompleted"
                                    value="{{ $student->gradelevelcompleted }}">
                            </div>
                            <div class="col-md-2">
                                <span class="fw-bolder">Last School Year</span>
                                <input class="form-control form-control-sm" type="text" name="lastschoolyearcompleted"
                                    value="{{ $student->lastschoolyearcompleted }}">
                            </div>
                            <div class="col-md-2">
                                <span class="fw-bolder">School Name</span>
                                <input class="form-control form-control-sm" type="text" name="schoolname"
                                    value="{{ $student->schoolname }}">
                            </div>
                            <div class="col-md-2">
                                <span class="fw-bolder">School Address</span>
                                <input class="form-control form-control-sm" type="text" name="schooladdress"
                                    value="{{ $student->schooladdress }}">
                            </div>
                            <div class="col-md-2">
                                <span class="fw-bolder">School ID</span>
                                <input class="form-control form-control-sm" type="text" name="schoolid"
                                    value="{{ $student->schoolid }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
