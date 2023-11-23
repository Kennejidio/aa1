@extends('layouts.app')
@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-7 text-center-alt">
                <h3><b>Staff Profiles</b></h3>
                <h4 class="text-gray-500"><b>LIST</b></h4>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div>
            <a class="btn btn-blue m-1" href="{{ route('staffdata.create') }}">Create</a>
        </div>
        <div class="table-responsive overflow-scroll mt-3">
            <table class="table table-bordered table-hover">
                <thead class="text-bg-dark">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>TYPE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($staffs as $staff)
                        <tr>
                            <td>{{ $staff->id }}</td>
                            <td>{{ $staff->firstname }} {{ $staff->middlename }} {{ $staff->lastname }}
                                {{ $staff->extname }}</td>
                            <td>{{ $staff->type }}</td>
                            <td>
                                <a class="btn btn-blue m-1" href="{{ route('staffdata.show', $staff->id) }}">Show</a>
                                <a class="btn btn-blue m-1" href="{{ route('staffdata.edit', $staff->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
