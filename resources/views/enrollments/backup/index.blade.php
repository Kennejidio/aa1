@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <section class="container mt-4">

        <!-- * Title -->
        <div class="row">
            <div class="col-md-7 text-center-alt">
                <h3><b>ENROLLEES</b></h3>
                <h4 class="text-gray-500"><b>LIST</b></h4>
            </div>
        </div>

        <!-- * Search Content -->
        <div class="bg-gray-200 shadow p-2 mb-3">
            <form action="{{ route('enrollments.index') }}" method="GET">
                @csrf
                <div class="row">
                    <div class="col-md input-group m-1">
                        <span class="input-group-text text-bg-darkpink">Schoolyear</span>
                        <select class="form-select" name="gender">
                            <option disabled selected>Choose...</option>
                            @foreach ($schoolyears as $schoolyear)
                                <option value="{{ $schoolyear->id }}">{{ $schoolyear->schoolyear }}
                                    {{ $schoolyear->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md input-group m-1">
                        <span class="input-group-text text-bg-green">Grade Level</span>
                        <select class="form-select" name="gender">
                            <option disabled selected>Choose...</option>
                            @foreach ($gradelevels as $gradelevel)
                                <option value="{{ $gradelevel->id }}">{{ $gradelevel->gradelevel }}
                                    {{ $gradelevel->description }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md input-group m-1">
                        <span class="input-group-text text-bg-darkpink">Section</span>
                        <select class="form-select" name="gender">
                            <option disabled selected>Choose...</option>
                            @foreach ($sections as $section)
                                <option value="{{ $section->id }}">{{ $section->section }} {{ $section->description }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md input-group m-1">
                        <span class="input-group-text text-bg-green">Status</span>
                        <select class="form-select" name="gender">
                            <option disabled selected>Choose...</option>
                            <option value="Enrolled">Enroll</option>
                        </select>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md text-center">
                        <button class="btn btn-green" type="submit">
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <!-- * ADD BUTTON -->
        <div class="container mt-2">
            <a href="{{ route('enrollments.create') }}" class="btn btn-outline-blue shadow">
                <div>
                    <img class="mb-3" src="../images/add-user.png" alt="add user" width="40" height="40">
                    <font class="h4">ADD NEW</font>
                </div>
            </a>
        </div>

        <!-- * Result Table -->
        <div class="h-50 p-4 mt-3 mb-5 shadow overflow-scroll table-responsive-sm">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student</th>
                        <th>Status</th>
                        <th>Grade Level</th>
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
                            <td>{{ $enrollment->grade_level->gradelevel }}</td>
                            <td>{{ $enrollment->school_year->schoolyear }}</td>
                            <td class="text-center">
                                <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST">
                                    <a class="btn btn-blue m-1"
                                        href="{{ route('enrollments.show', $enrollment->id) }}">Show</a>
                                    @can('enrollments-edit')
                                        <a class="btn btn-green m-1"
                                            href="{{ route('gradelevel.edit', $enrollment->id) }}">Edit</a>
                                    @endcan
                                    @csrf
                                    @method('DELETE')
                                    @can('enrollments-delete')
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
