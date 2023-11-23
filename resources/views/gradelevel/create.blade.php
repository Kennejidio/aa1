@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="position-relative">
        <div class="position-absolute ms-3 mt-3 top-0 start-0">
            <a class="btn bg-blue text-white p-1" href="{{ route('gradelevel.index') }}"><b>BACK</b></a>
        </div>
    </div>
    <section class="d-flex justify-content-center my-5">
        <!-- ! FORM -->
        <form action="{{ route('gradelevel.store') }}" method="POST" class="bg-white rounded-1 shadow p-3
        mb-5">
            @csrf
            <div class="text-center">
                <h2 class="text-darkpink">CREATE GRADE LEVELS</h2>
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
                    <span class="input-group-text">Grade Level</span>
                    <input class="form-control" type="text" name="gradelevel">
                </div>
            </div>

            <div class="text-center mt-4">
                <h6 class="h6">DETAILS</h6>
            </div>
            <div class="row">
                <div class="col-md input-group mt-1">
                    <textarea class="form-control" name="description" cols="30" rows="2"></textarea>
                </div>
            </div>

            <!-- ! BUTTON SUBMIT -->
            <div class="row">
                <div class="col-md mt-5 text-center">
                    <button class="btn btn-darkpink px-5 py-1" type="submit" name="submit">SUBMIT</button>
                </div>
            </div>
        </form>
    </section>
@endsection
