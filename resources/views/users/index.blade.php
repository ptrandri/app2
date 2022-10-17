@extends('dashboard.layouts.main')
@section('container')
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 border-bottom">
            <h1 class="h5">User Management </h1>
            <div class="mb-3 text-end">
                <td>
                    <a href="{{ route('users.create') }}" method="get" style="display: inline-block">
                        <button class="btn btn-success btn-sm" type="submit">Add User</button>
                    </a>
                </td>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="mt-3 ms-3">
                <h1 class="h4">List Users</h1>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><a href="/users/{{ $user->id }}/edit">{{ $user->username }}</a></td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
