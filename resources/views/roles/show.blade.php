@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="container position-relative">
        <div class="position-absolute ms-3 mt-3 top-0 start-0">
            <a class="btn bg-blue text-white p-1" href="{{ route('roles.index') }}"><b>BACK</b></a>
        </div>
    </div>
    <section class="d-flex justify-content-center my-5">
        <!-- ! DISPLAY -->
        <div class="bg-white rounded-1 shadow p-3 pb-5">
            <div class="text-center">
                <h2 class="text-darkpink">SHOW ROLES</h2>
            </div>

            <div class="text-center mt-4">
                <h6 class="h6">Rolename</h6>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p class="fst-normal">{{ $role->name }}</p>
                </div>
            </div>

            <div class="text-center mt-4">
                <h6 class="h6">Permissions</h6>
            </div>
            <div class="row text-center">
                <div class="col">
                    @if (!empty($rolePermissions))
                        @foreach ($rolePermissions as $v)
                            <label class="label label-success">{{ $v->name }},</label>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
