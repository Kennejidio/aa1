@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="container">
        <div class="ms-3 mt-3 ">
            <a class="btn bg-blue text-white p-1" href="{{ route('users.index') }}"><b>BACK</b></a>
        </div>
    </div>
    <section class="d-flex justify-content-center my-3">
        <!-- ! FORM -->
        <div class="bg-white rounded-1 shadow p-3 mb-5">
            <div class="text-center">
                <h2 class="text-darkpink">SHOW USER</h2>
            </div>

            <!-- * LOGIN DETAILS -->
            <div class="text-center mt-3">
                <h4 class="fw-bolder">LOGIN DETAILS</h4>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Name</span>
                    <input class="form-control " disabled value="{{ $user->name }}">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Email</span>
                    <input class="form-control " disabled value="{{ $user->email }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-1">
                    <span class="fw-bolder">Mobile Number</span>
                    <input class="form-control " disabled value="{{ $user->mobilenumber }}">
                </div>
                <div class="col-md mt-1">
                    <span class="fw-bolder">Role</span>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $v)
                            <input class="form-control " disabled value="{{ $v }}">
                        @endforeach
                    @endif
                </div>
            </div>
    </section>
@endsection
