@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="position-relative">
        <div class="position-absolute ms-3 mt-3 top-0 start-0">
            <a class="btn bg-blue text-white p-1" href="{{ route('subject.index') }}"><b>BACK</b></a>
        </div>
    </div>
    <section class="d-flex justify-content-center my-5">
        <!-- ! DISPLAY -->
        <div class="bg-white rounded-1 shadow p-3 pb-5">
            <div class="text-center">
                <h2 class="text-darkpink">SHOW SUBJECTS</h2>
            </div>

            <div class="text-center mt-4">
                <h6 class="h6">SUBJECT</h6>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p class="fst-normal">{{ $subject->code }}</p>
                </div>
            </div>

            <div class="text-center mt-4">
                <h6 class="h6">DETAILS</h6>
            </div>
            <div class="row">
                <div class="col-md input-group mt-1">
                    <div class="form-control">
                        <p>{{ $subject->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
