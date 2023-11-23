@extends('layouts.app')
@section('content')
    <!-- ! Contents -->
    <section class="container mt-4">
        <div class="row">
            <div class="col-md-7 text-center-alt">
                <h3><b>USERS</b></h3>
                <h4 class="text-gray-500"><b>LIST</b></h4>
            </div>
        </div>
        <!-- * Search Content -->

        <div class="row bg-gray-200 shadow my-5">
            <div class="col-lg-6">
                <a href="{{ route('users.create') }}" class="btn mt-2">
                    <div>
                        <img class="mb-3" src="../images/add-user.png" alt="add user" width="40" height="40">
                        <font class="h4">ADD NEW</font>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <form>
                    <div class="input-group input-group-md p-3">
                        <span class="input-group-text">
                            <input class="btn" type="submit" value="Search">
                        </span>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
        </div>
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Role</th>
                        <th width="280px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $user)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobilenumber }}</td>
                            <td>
                                @if (!empty($user->getRoleNames()))
                                    @foreach ($user->getRoleNames() as $v)
                                        <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                                    @endforeach
                                @endif
                            </td>
                            <td class="text-center">
                                <a class="btn btn-blue m-1" href="{{ route('users.show', $user->id) }}">Show</a>
                                @can('user-edit')
                                    <a class="btn btn-green m-1" href="{{ route('users.edit', $user->id) }}">Edit</a>
                                @endcan
                                @can('user-delete')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                    {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                                    <button class="btn btn-danger" type="submit"
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
    {!! $data->render() !!}
@endsection
