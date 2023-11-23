@extends('layouts.app')
@section('content')
    <section class="d-flex justify-content-center">
        <!-- ! FORM -->
        <div class="bg-white rounded-1 shadow px-5 py-5
        mb-5">
            <div class="text-center">
                <h2 class="text-black fw-bolder">STAFF ACCOUNT CREATE</h2>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <!-- * PERSONAL DETAILS -->
            <div class="text-center bg-green mt-3">
                <h4 class="text-white">PERSONAL DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">User Type</span>
                    <input class="form-control" type="text" name="type" disabled value="{{ $staff->type }}">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder"></span>
                    <input class="form-control" type="hidden" value="{{ $staff->id }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Firstname</span>
                    <input class="form-control" type="text" name="firstname" disabled value="{{ $staff->firstname }}">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Middlename</span>
                    <input class="form-control" type="text" name="middlename" disabled value="{{ $staff->middlename }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Lastname</span>
                    <input class="form-control" type="text" name="lastname" disabled value="{{ $staff->lastname }}">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Extname</span>
                    <input class="form-control" type="text" name="extname" disabled value="{{ $staff->extname }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Sex</span>
                    <input class="form-control" type="text" name="sex" disabled value="{{ $staff->sex }}">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Birthdate</span>
                    <input class="form-control" type="date" name="birthdate" disabled value="{{ $staff->birthdate }}">
                </div>
            </div>

            <!-- * ADDRESS DETAILS -->
            <div class="text-center bg-green mt-3">
                <h4 class="text-white">ADDRESS DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Barangay</span>
                    <input class="form-control" type="text" name="barangay" disabled value="{{ $staff->barangay }}">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Municipality/City</span>
                    <input class="form-control" type="text" name="municipal" disabled value="{{ $staff->municipal }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Province</span>
                    <input class="form-control" type="text" name="province" disabled value="{{ $staff->province }}">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Zip</span>
                    <input class="form-control" type="number" name="zip" disabled value="{{ $staff->zip }}">
                </div>
            </div>

            <!-- * PARENTS DETAILS -->
            <div class="text-center bg-green mt-3">
                <h4 class="text-white">PARENTS DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Mothers Name</span>
                    <input class="form-control" value="{{ $staff->mother }}" type="text" name="mother" disabled>
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Fathers Name</span>
                    <input class="form-control" value="{{ $staff->father }}" type="text" name="father" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Guardians Name</span>
                    <input class="form-control" value="{{ $staff->guardian }}" type="text" name="guardian" disabled>
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Contact<span class="text-red"> *</span></span>
                    <input class="form-control" value="{{ $staff->contact }}" type="number" name="contact" disabled>
                </div>
            </div>

            <!-- * CONTACT DETAILS -->
            <div class="text-center bg-green mt-3">
                <h4 class="text-white">CONTACT DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Email</span>
                    <input class="form-control" value="{{ $staff->user->email }}" type="email" name="email"
                        disabled>
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Mobile Number</span>
                    <input class="form-control" value="{{ $staff->user->mobilenumber }}" type="number"
                        name="mobilenumber" disabled>
                </div>
            </div>

            <!-- * EDIT BUTTON-->
            <div class="row">
                <div class="col-md mt-1 text-center">
                    <a class="btn btn-green" href="{{ route('staffdata.edit', $staff->id) }}">EDIT</a>
                </div>
            </div>
        </div>
    </section>
@endsection
