@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header mb-2">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">
                        User List
                    </h5>
                    <div class="ml-auto">
                        <a href="/users/create" class="btn btn-primary add-button"><span>Add Data</span></a>
                        {{-- <a href="/users/index" class="btn btn-warning back-button"><span>Back</span></a> --}}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                <div class="btn-group mr-2" role="group" aria-label="Action Button">
                                    <a href="/users/detail/{{ $user->id }}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                    <a href="/users/edit/{{ $user->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                   <form action="/users/delete/{{ $user->id }}" method="POST">
                                    @csrf
                                        @method('DELETE')
                                       <form action="users/delete/{{ $user->id}}" method="POST">
                                     <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                                    </form>
                                </div>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
