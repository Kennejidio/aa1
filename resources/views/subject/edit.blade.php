@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="container position-relative">
        <div class="position-absolute ms-3 mt-3 top-0 start-0">
            <a class="btn bg-blue text-white p-1" href="{{ route('subject.index') }}"><b>BACK</b></a>
        </div>
    </div>
    <section class="d-flex justify-content-center my-5">
        <!-- ! FORM -->
        <form action="{{ route('subject.update', $subject->id) }}" method="POST"
            class="bg-white rounded-1 shadow p-3
        mb-5">
            @csrf
            @method('PUT')
            <div class="text-center">
                <h2 class="text-darkpink">EDIT SUBJECTS</h2>
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
            <!-- * DETAILS -->
            <div class="row mt-4">
                <div class="col-md input-group mt-1">
                    <span class="input-group-text">SUBJECT</span>
                    <input class="form-control" value="{{ $subject->code }}" type="text" name="subject">
                </div>
            </div>

            <div class="text-center mt-4">
                <h6 class="h6">DETAILS</h6>
            </div>
            <div class="row">
                <div class="col-md input-group mt-1">
                    <textarea class="form-control" cols="30" rows="2" name="description">{{ $subject->description }}</textarea>
                </div>
            </div>

            <!-- ! BUTTON SUBMIT -->
            <div class="row">
                <div class="col-md mt-5 text-center">
                    <button class="btn btn-darkpink px-5 py-1" type="submit" name="register">UPDATE</button>
                </div>
            </div>
        </form>
    </section>
@endsection
