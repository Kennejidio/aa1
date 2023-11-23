@extends('layouts.app')
@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-7 text-center-alt">
                <h3><b>Student Profiles</b></h3>
                <h4 class="text-gray-500"><b>LIST</b></h4>
            </div>
        </div>

        <div class="table-responsive overflow-scroll mt-3">
            <table class="table table-bordered table-hover">
                <thead class="text-bg-dark">
                    <tr>
                        <th>LRN</th>
                        <th>NAME</th>
                        <th>STATUS</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $student)
                        <tr role="button" onclick="window.location='{{ route('studentdata.show', $student->id) }}'">
                            <td>{{ $student->lrn }}</td>
                            <td>{{ $student->firstname }} {{ $student->middlename }} {{ $student->lastname }}
                                {{ $student->extname }}</td>
                            <td>{{ $student->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
