@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="container">
        <div class="ms-3 mt-3">
            <a class="btn bg-blue text-white p-1" href="{{ route('roles.index') }}"><b>BACK</b></a>
        </div>
    </div>
    <section class="d-flex justify-content-center my-3">
        <!-- ! FORM -->
        {!! Form::model($role, [
            'method' => 'PATCH',
            'route' => ['roles.update', $role->id],
            'class' => 'bg-white rounded-1 shadow p-3
                        mb-5',
        ]) !!}
        <div class="text-center">
            <h2 class="text-darkpink">EDIT ROLES</h2>
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
        <!-- * DETAILS -->
        <div class="row mt-4">
            <div class="col-md input-group mt-1">
                <span class="input-group-text">Role Name</span>
                {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
            </div>
        </div>

        <div class="text-center mt-4">
            <h6 class="h6">Permissions</h6>
        </div>
        <div class="row">
            @foreach ($permission as $value)
                <div class="col-md-12 input-group mt-1" style="max-width: 300px">
                    <span class="input-group-text">
                        {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'form-check']) }}
                    </span>
                    <span class="form-control">{{ $value->name }}</span>
                </div>
            @endforeach
        </div>

        <!-- ! BUTTON SUBMIT -->
        <div class="row">
            <div class="col-md mt-5 text-center">
                <button class="btn btn-darkpink px-5 py-1" type="submit" name="register">UPDATE</button>
            </div>
        </div>
        {!! Form::close() !!}
    </section>
@endsection
