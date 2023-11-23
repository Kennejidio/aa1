@extends('layouts.app')
@section('content')
    <section class="container-fluid mb-5">

        <div class="text-center-alt mb-5">
            <h1 class="fw-bolder">Settings</h1>
        </div>

        <div class="bg-gray-200 text-center-alt p-2 mb-2">
            <h3>TABLES</h3>
        </div>
        <div class="row text-center-alt">
            <a class="col-md btn btn-green m-1" href="{{ route('gradelevel.index') }}">Grade Levels</a>
            <a class="col-md btn btn-green m-1" href="{{ route('section.index') }}">Sections</a>
            <a class="col-md btn btn-green m-1" href="{{ route('subject.index') }}">Subjects</a>
            <a class="col-md btn btn-green m-1" href="{{ route('requirements.index') }}">Requirements</a>
            <a class="col-md btn btn-green m-1" href="{{ route('schoolyear.index') }}">Schoolyears</a>
        </div>
    </section>
    <div class="mb-5">
        <br><br><br><br>
    </div>
@endsection
