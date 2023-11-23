@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <section class="container mt-4">
        <!-- * CONTENTS -->
        <div class="row">
            <div class="col-md-7 text-center-alt">
                <h3><b>SECTIONS</b></h3>
                <h4 class="text-gray-500"><b>LIST</b></h4>
            </div>
        </div>

        <div class="row bg-gray-200 shadow my-4">
            <div class="col-lg-6">
                @can('schoolyear-create')
                    <a href="{{ route('section.create') }}" class="btn mt-2">
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
                        <th>SECTION</th>
                        <th>GRADE LEVEL</th>
                        <th>DESCRIPTION</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($sections as $section)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $section->code }}</td>
                            <td>{{ $section->grade_level->code }}</td>
                            <td>{{ $section->description }}</td>
                            <td class="text-center">
                                <form action="{{ route('section.destroy', $section->id) }}" method="POST">
                                    <a class="btn btn-blue m-1"
                                        href="{{ route('section.show', $section->id) }}">Show</a>
                                    @can('section-edit')
                                        <a class="btn btn-green m-1"
                                            href="{{ route('section.edit', $section->id) }}">Edit</a>
                                    @endcan
                                    @csrf
                                    @method('DELETE')
                                    @can('section-delete')
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