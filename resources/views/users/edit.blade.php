@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="container">
        <div class=" ms-3 mt-3">
            <a class="btn bg-blue text-white p-1" href="{{ route('users.index') }}"><b>BACK</b></a>
        </div>
    </div>
    <section class="d-flex justify-content-center my-3">
        <!-- ! FORM -->
        {!! Form::model($user, [
            'method' => 'PATCH',
            'class' => 'bg-white rounded-1 shadow p-3
                                        mb-5',
            'route' => ['users.update', $user->id],
        ]) !!}
        <div class="text-center">
            <h2 class="text-darkpink">EDIT USERS</h2>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- * LOGIN DETAILS -->
        <div class="text-center bg-green mt-3">
            <h4 class="text-white">LOGIN DETAILS</h4>
        </div>
        <div class="row">
            <div class="col-md input-group mt-1">
                <span class="input-group-text">Name</span>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
            <div class="col-md input-group mt-1">
                <span class="input-group-text">Email</span>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md input-group mt-1">
                <span class="input-group-text">Mobile Number</span>
                {!! Form::text('mobilenumber', null, array('placeholder' => 'Mobile number','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md input-group mt-1">
                <span class="input-group-text">Password</span>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
            <div class="col-md input-group mt-1">
                <span class="input-group-text">Re-enter Password</span>
                {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
            </div>
        </div>

        <!-- * ROLES -->
        <div class="text-center bg-green mt-3">
            <h4 class="text-white">ROLES</h4>
        </div>
        <div class="row">
            <div class="col-md input-group mt-1">
                <span class="input-group-text">Role</span>
                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
            </div>
        </div>
        <!-- ! BUTTON SUBMIT -->
        <div class="row">
            <div class="col-md mt-5 text-center">
                <button class="btn btn-darkpink px-5 py-1" type="submit" name="register">SUBMIT</button>
            </div>
        </div>
        {!! Form::close() !!}
    </section>
@endsection
