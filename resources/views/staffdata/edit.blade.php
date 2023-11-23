@extends('layouts.app')
@section('content')
    <section class="d-flex justify-content-center">
        <!-- ! FORM -->
        <form action="{{ route('staffdata.update', $staff->id) }}" method="POST" class="bg-white rounded-1 shadow px-5 py-5
        mb-5">
            @csrf
            @method('PUT')
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
                        <option value="Staff" @if ($staff->type == 'Staff') {{ 'selected' }} @endif>Staff</option>
                        <option value="Faculty" @if ($staff->type == 'Faculty') {{ 'selected' }} @endif>Faculty
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
                        value="{{ $staff->firstname }}" type="text" name="firstname">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Middlename</span>
                    @error('middlename')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('middlename')
                    is-invalid @enderror"
                        value="{{ $staff->middlename }}" type="text" name="middlename">
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
                        value="{{ $staff->lastname }}" type="text" name="lastname">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Extname</span>
                    <input class="form-control" value="{{ $staff->extname }}" type="text" name="extname">
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
                        <option value="m" @if ($staff->sex == 'm') {{ 'selected' }} @endif>m</option>
                        <option value="f" @if ($staff->sex == 'f') {{ 'selected' }} @endif>f</option>
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
                        value="{{ $staff->birthdate, date('d-m-Y') }}" type="date" name="birthdate">
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
                        value="{{ $staff->barangay }}" type="text" name="barangay">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Municipality/City<span class="text-red"> *</span></span>
                    @error('municipal')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('municipal')
                    is-invalid @enderror"
                        value="{{ $staff->municipal }}" type="text" name="municipal">
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
                        value="{{ $staff->province }}" type="text" name="province">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Zip<span class="text-red"> *</span></span>
                    @error('zip')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('zip') is-invalid
                    @enderror"
                        value="{{ $staff->zip }}" type="number" name="zip">
                </div>
            </div>

            <!-- * PARENTS DETAILS -->
            <div class="text-center bg-green mt-3">
                <h4 class="text-white">PARENTS DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Mothers Name</span>
                    <input class="form-control" value="{{ $staff->mother }}" type="text" name="mother">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Fathers Name</span>
                    <input class="form-control" value="{{ $staff->father }}" type="text" name="father">
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
                        value="{{ $staff->guardian }}" type="text" name="guardian">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Contact<span class="text-red"> *</span></span>
                    @error('contact')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="form-control @error('contact') is-invalid
                    @enderror"
                        value="{{ $staff->contact }}" type="number" name="contact">
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
