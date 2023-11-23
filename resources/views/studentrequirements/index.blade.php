@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <section class="container mt-4">

        <!-- * Title -->
        <div class="row">
            <div class="col-md-7 text-center-alt">
                <h3><b>ENROLLMENTS</b></h3>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <!-- * ADD BUTTON -->
        <div class="container mt-2">
            <a href="{{ route('enrollments.create') }}" class="btn btn-blue">ENROLL</a>
        </div>

        <!-- * Result Table -->
        <div class="h-50 p-4 mt-3 mb-5 shadow overflow-scroll table-responsive-sm">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student</th>
                        <th>Requirement</th>
                        <th>School Year</th>
                        <th>Status</th>
                        <th>Date Enrolled</th>
                        <th>Schoolyear</th>
                        <th class="text-center" width="280px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center">
                                {{-- <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST">
                                    <a class="btn btn-blue m-1"
                                        href="{{ route('enrollments.show', $enrollment->id) }}">Show</a>
                                    @can('enrollment-edit')
                                        <a class="btn btn-green m-1"
                                            href="{{ route('enrollments.edit', $enrollment->id) }}">Edit</a>
                                    @endcan
                                    @csrf
                                    @method('DELETE')
                                    @can('enrollment-delete')
                                        <button class="btn btn-red m-1" type="submit"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    @endcan
                                </form> --}}
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
