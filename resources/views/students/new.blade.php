@extends('students.app')
@section('content')
    <section class="container justify-content-center my-3">
        <!-- ! FORM -->
        <form method="POST" action="{{ route('students.store') }}"
            class="bg-white rounded-1 shadow px-5 py-5
        mb-5 register-margin-top">
            @csrf
            @if ($is_transferee)
                <div class="text-center">
                    <h2 class="text-black fw-bolder">BASIC ENROLLMENT FORM FOR BALIK ARAL OR TRANSFEREE</h2>
                </div>
            @else
                <div class="text-center">
                    <h2 class="text-black fw-bolder">BASIC ENROLLMENT FORM FOR NEW STUDENT</h2>
                </div>
            @endif

            <!-- * PERSONAL DETAILS -->
            <div class="text-center bg-green mt-3">
                <h4 class="text-white">PERSONAL DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">LRN No.</span>
                    <input class="form-control" value="{{ old('lrn') }}" type="text" name="lrn">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Last Elementary School<span class="text-red"> *</span></span>
                    @error('elementary')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('elementary') is-invalid @enderror" value="{{ old('elementary') }}"
                        type="text" name="elementary">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Firstname<span class="text-red"> *</span></span>
                    @error('firstname')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}"
                        type="text" name="firstname">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Middlename</span>
                    @error('middlename')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('middlename') is-invalid @enderror" value="{{ old('middlename') }}"
                        type="text" name="middlename">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Lastname<span class="text-red"> *</span></span>
                    @error('lastname')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}"
                        type="text" name="lastname">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Extname</span>
                    <input class="form-control" value="{{ old('extname') }}" type="text" name="extname">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Sex<span class="text-red"> *</span></span>
                    @error('sex')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <select class="form-select @error('sex') is-invalid @enderror" name="sex">
                        <option disabled selected>Choose...</option>
                        <option value="m" @if (old('sex') == 'm') {{ 'selected' }} @endif>m</option>
                        <option value="f" @if (old('sex') == 'f') {{ 'selected' }} @endif>f</option>
                    </select>
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Birthdate (dd-mm-yy)<span class="text-red"> *</span></span>
                    @error('birthdate')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('birthdate') is-invalid @enderror"
                        value="{{ old('birthdate', date('d-m-Y')) }}" type="date" name="birthdate">
                </div>
            </div>

            <!-- * ADDRESS DETAILS -->
            <div class="text-center bg-green mt-3">
                <h4 class="text-white">ADDRESS DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Barangay<span class="text-red"> *</span></span>
                    @error('barangay')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('barangay') is-invalid @enderror" value="{{ old('barangay') }}"
                        type="text" name="barangay">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Municipality/City<span class="text-red"> *</span></span>
                    @error('municipal')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('municipal') is-invalid @enderror" value="{{ old('municipal') }}"
                        type="text" name="municipal">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Province<span class="text-red"> *</span></span>
                    @error('province')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('province') is-invalid @enderror" value="{{ old('province') }}"
                        type="text" name="province">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Zip<span class="text-red"> *</span></span>
                    @error('zip')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('zip') is-invalid @enderror" value="{{ old('zip') }}"
                        type="number" name="zip">
                </div>
            </div>

            <!-- * PARENTS DETAILS -->
            <div class="text-center bg-green mt-3">
                <h4 class="text-white">PARENTS DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Mothers Name</span>
                    <input class="form-control" value="{{ old('mother') }}" type="text" name="mother">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Fathers Name</span>
                    <input class="form-control" value="{{ old('father') }}" type="text" name="father">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Guardians Name<span class="text-red"> *</span></span>
                    @error('guardian')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('guardian') is-invalid @enderror" value="{{ old('guardian') }}"
                        type="text" name="guardian">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Contact<span class="text-red"> *</span></span>
                    @error('contact')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact') }}"
                        type="tel" pattern="[0][9][0-9]{9}" maxlength="11" name="contact">
                </div>
            </div>

            <!-- * FOR RETURNING LEARNERS (BALIK-ARAL) AND THOSE WHO SHALL TRANSFER/MOVE IN DETAILS -->
            @if ($is_transferee)
                <div class="text-center bg-green mt-3">
                    <h4 class="text-white">FOR RETURNING LEARNERS (BALIK-ARAL)
                        OR TRANSFEREE</h4>
                </div>
                <div class="row">
                    <div class="col-md mt-1">
                        <span class="fw-bolder">Grade Level Completed<span class="text-red"> *</span></span>
                        @error('gradelevelcompleted')
                            <br>
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <select class="form-select @error('gradelevelcompleted') is-invalid @enderror"
                            name="gradelevelcompleted">
                            <option disabled selected>Choose...</option>
                            <option value="Grade 6" @if (old('gradelevelcompleted') == 'Grade 6') {{ 'selected' }} @endif>Grade 6
                            </option>
                            <option value="Grade 7" @if (old('gradelevelcompleted') == 'Grade 7') {{ 'selected' }} @endif>Grade 7
                            </option>
                            <option value="Grade 8" @if (old('gradelevelcompleted') == 'Grade 8') {{ 'selected' }} @endif>Grade 8
                            </option>
                            <option value="Grade 9" @if (old('gradelevelcompleted') == 'Grade 9') {{ 'selected' }} @endif>Grade 9
                            </option>
                        </select>
                    </div>
                    <div class="col-md mt-1">
                        <span class="fw-bolder">Last School Year
                            Completed<span class="text-red"> *</span></span>
                        @error('lastschoolyearcompleted')
                            <br>
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input class="form-control @error('lastschoolyearcompleted') is-invalid @enderror"
                            value="{{ old('lastschoolyearcompleted') }}" type="text" name="lastschoolyearcompleted">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md mt-1">
                        <span class="fw-bolder">School Name<span class="text-red"> *</span></span>
                        @error('schoolname')
                            <br>
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input class="form-control @error('schoolname') is-invalid @enderror"
                            value="{{ old('schoolname') }}" type="text" name="schoolname">
                    </div>
                    <div class="col-md mt-1">
                        <span class="fw-bolder">School Address<span class="text-red"> *</span></span>
                        @error('schooladdress')
                            <br>
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input class="form-control @error('schooladdress') is-invalid @enderror"
                            value="{{ old('schooladdress') }}" type="text" name="schooladdress">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md mt-1">
                        <span class="fw-bolder">School ID</span>
                        <input class="form-control" value="{{ old('schoolid') }}" type="text" name="schoolid">
                    </div>
                    <div class="col-md input-group mt-1">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            @endif

            <!-- * LOGIN DETAILS -->
            <div class="text-center bg-green mt-3">
                <h4 class="text-white">LOGIN DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Email<span class="text-red"> *</span></span>
                    @error('email')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                        type="email" name="email">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Mobile Number<span class="text-red"> *</span></span>
                    @error('mobilenumber')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('mobilenumber') is-invalid @enderror"
                        value="{{ old('mobilenumber') }}" type="tel" pattern="[0][9][0-9]{9}" maxlength="11"
                        name="mobilenumber">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Password<span class="text-red"> *</span></span>
                    @error('password')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">{{ __('Confirm Password') }}<span class="text-red"> *</span></span>
                    @error('password')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                        name="password_confirmation">
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
