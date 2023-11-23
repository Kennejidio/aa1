@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <section class="container mt-4">
        <div class="row">
            <div class="col-md-7 text-center-alt">
                <h3><b>ROLE</b></h3>
                <h4 class="text-gray-500"><b>LIST</b></h4>
            </div>
        </div>
        <!-- * Add Roles -->
        <div class="row bg-gray-200 shadow my-4">
            <div class="col-lg-6">
                @can('role-create')
                    <a href="{{ route('roles.create') }}" class="btn mt-2">
                        <div>
                            <img class="mb-3" src="../images/add-user.png" alt="add user" width="40" height="40">
                            <font class="h4">ADD NEW</font>
                        </div>
                    </a>
                @endcan
            </div>
        </diV>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <!-- * Result Table -->
        <div class="p-4 mb-5 shadow overflow-scroll">
            <table class="table table-bordered table-responsive-sm">
                <thead>
                    <tr>
                        <th width="180px">NO</th>
                        <th>Name</th>
                        <th width="280px" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td class="text-center">
                                <a class="btn btn-blue m-1" href="{{ route('roles.show', $role->id) }}">Show</a>
                                @can('role-edit')
                                    <a class="btn btn-green m-1" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                @endcan
                                @can('role-delete')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                    <button class="btn btn-red m-1" type="submit"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    {!! $roles->render() !!}
@endsection
