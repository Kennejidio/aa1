@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <div class="container position-relative">
        <div class="position-absolute ms-3 mt-3 top-0 start-0">
            <a class="btn bg-blue text-white p-1" href="{{ route('schoolyear.index') }}"><b>BACK</b></a>
        </div>
    </div>
    <section class="d-flex justify-content-center my-5">
        <!-- ! DISPLAY -->
        <div class="bg-white rounded-1 shadow p-3 pb-5">
            <div class="text-center">
                <h2 class="text-darkpink">SHOW SCHOOL YEAR</h2>
            </div>

            <div class="text-center mt-4">
                <h6 class="h6">START DATE</h6>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p class="fst-normal">{{ $schoolyear->start_date }}</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <h6 class="h6">END DATE</h6>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p class="fst-normal">{{ $schoolyear->end_date }}</p>
                </div>
            </div>

            <div class="text-center mt-4">
                <h6 class="h6">DETAILS</h6>
            </div>
            <div class="row">
                <div class="col-md input-group mt-1">
                    <div class="form-control">
                        <p>{{ $schoolyear->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
