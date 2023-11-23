@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <section class="container mt-4 pt-3">
        <!-- //* Card status starts here -->
        <div class="row">
            <div class="col-md-8 text-center-alt mb-3">
                <h2 class="fw-bold">CLASS</h2>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-design text-light p-3 shadow">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/students-white.png') }}" alt="students" width="60" height="60">
                        </div>
                        <div class="col-6">
                            <font class="h3">N/A</font>
                            <h4>Total</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- //* Search method -->
        <div class="p-2 mt-2 bg-gray-200 shadow">
            <form class="row justify-content-center">
                <div class="col-md-3 m-1">
                    <div class="input-group fsont-monospace">
                        <label class="input-group-text text-bg-green" for="g">Grade Level</label>
                        <select class="form-select form-select-sm" name="quarter" id="g">
                            <option value=""></option>
                            <option value="1">Grade 7</option>
                            <option value="2">Grade 8</option>
                            <option value="3">Grade 9</option>
                            <option value="4">Grade 10</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 m-1">
                    <div class="input-group font-monospace">
                        <label class="input-group-text text-bg-green" for="s">Section</label>
                        <select class="form-select form-select-sm" name="quarter" id="s">
                            <option value=""></option>
                            <option value="1">Alpha</option>
                            <option value="2">Bravo</option>
                            <option value="3">Charlie</option>
                            <option value="4">Delta</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <!-- //* Tables -->
        <div class="p-4 my-4 overflow-scroll shadow">
            <table class="table table-bordered table-responsive-sm">
                <thead>
                    <tr>
                        <th>Subject ID</th>
                        <th>Subject Name</th>
                        <th>Grade Level</th>
                        <th>Section</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
