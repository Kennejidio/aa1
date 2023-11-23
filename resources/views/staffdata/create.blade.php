@extends('layouts.app')
@section('content')
    <section class="d-flex justify-content-center">
        <!-- ! FORM -->
        <form method="POST" action="{{ route('staffdata.store') }}" class="bg-white rounded-1 shadow px-5 py-5
        mb-5">
            @csrf
            <div class="text-center">
                <h2 class="text-black fw-bolder">STAFF ACCOUNT CREATE</h2>
            </div>

            <!-- * PERSONAL DETAILS -->
            <div class="text-center bg-green mt-3">
                <h4 class="text-white">PERSONAL DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">User Type<span class="text-red"> *</span></span>
                    @error('type')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <select class="form-select @error('type') is-invalid
                    @enderror" name="type">
                        <option disabled selected>Choose...</option>
                        <option value="Staff" @if (old('type') == 'm') {{ 'selected' }} @endif>Staff</option>
                        <option value="Faculty" @if (old('type') == 'f') {{ 'selected' }} @endif>Faculty
                        </option>
                    </select>
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder"></span>
                    <input class="form-control" type="hidden">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Firstname<span class="text-red">
                            *</span></span>
                    @error('firstname')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('firstname')
                    is-invalid @enderror"
                        value="{{ old('firstname') }}" type="text" name="firstname">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Middlename</span>
                    @error('middlename')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('middlename')
                    is-invalid @enderror"
                        value="{{ old('middlename') }}" type="text" name="middlename">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Lastname<span class="text-red">
                            *</span></span>
                    @error('lastname')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('lastname') is-invalid
                    @enderror"
                        value="{{ old('lastname') }}" type="text" name="lastname">
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
                    <select class="form-select @error('sex') is-invalid
                    @enderror" name="sex">
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
                    <input class="form-control @error('birthdate')
                    is-invalid @enderror"
                        value="{{ old('birthdate', date('d-m-Y')) }}" type="date" name="birthdate">
                </div>
            </div>

            <!-- * ADDRESS DETAILS -->
            <div class="text-center bg-green mt-3">
                <h4 class="text-white">ADDRESS DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Barangay<span class="text-red">
                            *</span></span>
                    @error('barangay')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('barangay') is-invalid
                    @enderror"
                        value="{{ old('barangay') }}" type="text" name="barangay">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Municipality/City<span class="text-red"> *</span></span>
                    @error('municipal')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('municipal')
                    is-invalid @enderror"
                        value="{{ old('municipal') }}" type="text" name="municipal">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Province<span class="text-red">
                            *</span></span>
                    @error('province')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('province') is-invalid
                    @enderror"
                        value="{{ old('province') }}" type="text" name="province">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Zip<span class="text-red"> *</span></span>
                    @error('zip')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('zip') is-invalid
                    @enderror"
                        value="{{ old('zip') }}" type="number" name="zip">
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
                    <input class="form-control @error('guardian') is-invalid
                    @enderror"
                        value="{{ old('guardian') }}" type="text" name="guardian">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Contact<span class="text-red"> *</span></span>
                    @error('contact')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('contact') is-invalid
                    @enderror"
                        value="{{ old('contact') }}" type="tel" pattern="[0][9][0-9]{9}" maxlength="11"
                        name="contact">
                </div>
            </div>

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
                    <input class="form-control @error('email') is-invalid
                    @enderror"
                        value="{{ old('email') }}" type="email" name="email">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Mobile Number<span class="text-red"> *</span></span>
                    @error('mobilenumber')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('mobilenumber')
                    is-invalid @enderror"
                        value="{{ old('mobilenumber') }}" type="tel" pattern="[0][9][0-9]{9}" maxlength="11"
                        name="mobilenumber">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Password<span class="text-red">
                            *</span></span>
                    @error('password')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('password') is-invalid
                    @enderror"
                        type="password" name="password">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">{{ __('Confirm Password') }}<span class="text-red"> *</span></span>
                    @error('password')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('password') is-invalid
                    @enderror"
                        type="password" name="password_confirmation">
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
