@extends('layouts.app')
@section('content')
    <section class="container mt-4">

        <!-- * Title -->
        <div class="row">
            <div class="col-md-7 text-center-alt">
                <h3><b>CLASS ASSIGNMENT</b></h3>
            </div>
        </div>

        <!-- * Message -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- * ADD BUTTON -->
        @can('class-create')
        <div class="container mt-2">
            <a href="{{ route('classes.create') }}" class="btn btn-blue">ADD CLASS</a>
        </div>
        @endcan

        <!-- * Result Table -->
        <div class="h-50 p-4 mt-3 mb-5 shadow overflow-scroll table-responsive-sm">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subject</th>
                        <th>Teacher</th>
                        <th>School Year</th>
                        <th class="text-center" width="280px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $class)
                        <tr>
                            <td>{{ $class->id }}</td>
                            <td>{{ $class->subject->code }}</td>
                            <td>{{ $class->staff->firstname }} {{ $class->staff->middlename }} {{ $class->staff->lastname }}
                                {{ $class->staff->exttname }}</td>
                            <td>{{ $class->school_year->start_date }} - {{ $class->school_year->end_date }}</td>
                            <td class="text-center">
                                <form action="{{ route('classes.destroy', $class->id) }}" method="POST">
                                    <a class="btn btn-blue m-1" href="{{ route('classes.show', $class->id) }}">Show</a>
                                    @can('class-edit')
                                    <a class="btn btn-green m-1"
                                        href="{{ route('classes.edit', $class->id) }}">Edit</a>
                                    @endcan
                                    @csrf
                                    @method('DELETE')
                                    @can('class-delete')
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
