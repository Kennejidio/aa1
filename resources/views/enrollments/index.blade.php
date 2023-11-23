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
                        <th>Status</th>
                        <th>Section</th>
                        <th>Grade Level</th>
                        <th>Date Enrolled</th>
                        <th>Schoolyear</th>
                        <th class="text-center" width="280px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($enrollments as $enrollment)
                        <tr>
                            <td>{{ $enrollment->id }}</td>
                            <td>{{ $enrollment->student->firstname }} {{ $enrollment->student->middlename }}
                                {{ $enrollment->student->lastname }} {{ $enrollment->student->extname }}</td>
                            <td>{{ $enrollment->status }}</td>
                            <td>{{ $enrollment->section->code }}</td>
                            <td>{{ $enrollment->section->grade_level->code }}</td>
                            <td>{{ $enrollment->enroll_date}}</td>
                            <td>{{ $enrollment->school_year->start_date }} - {{ $enrollment->school_year->end_date }}</td>
                            <td class="text-center">
                                <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST">
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
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
