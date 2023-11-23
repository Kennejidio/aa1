@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <section class="container mt-4">
        <!-- * CONTENTS -->
        <div class="row">
            <div class="col-md-7 text-center-alt">
                <h3><b>SUBJECT</b></h3>
                <h4 class="text-gray-500"><b>LIST</b></h4>
            </div>
        </div>

        <div class="row bg-gray-200 shadow my-4">
            <div class="col-lg-6">
                @can('subject-create')
                    <a href="{{ route('subject.create') }}" class="btn mt-2">
                        <div>
                            <img class="mb-3" src="../images/add-user.png" alt="add user" width="40" height="40">
                            <font class="h4">ADD NEW</font>
                        </div>
                    </a>
                @endcan
            </div>
        </diV>

        <!-- * Result Table -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="p-4 mb-5 shadow overflow-scroll">
            <table class="table table-bordered table-responsive-sm">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>SUBJECT</th>
                        <th>DESCRIPTION</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $subject->code }}</td>
                            <td>{{ $subject->description }}</td>
                            <td class="text-center">
                                <form action="{{ route('subject.destroy', $subject->id) }}" method="POST">
                                    <a class="btn btn-blue m-1"
                                        href="{{ route('subject.show', $subject->id) }}">Show</a>
                                    @can('subject-edit')
                                        <a class="btn btn-green m-1"
                                            href="{{ route('subject.edit', $subject->id) }}">Edit</a>
                                    @endcan
                                    @csrf
                                    @method('DELETE')
                                    @can('subject-delete')
                                        <button class="btn btn-red m-1" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
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
