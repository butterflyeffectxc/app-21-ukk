@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header mb-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">
                                Administrator List
                            </h5>
                            <div class="ml-auto">
                                <a href="/admins/create" class="btn btn-primary add-button"><span>Add Data</span></a>
                                {{-- <a href="/admins/index" class="btn btn-warning back-button"><span>Back</span></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
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
                                        @foreach ($admins as $admin)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>{{ $admin->phone }}</td>
                                                <td>
                                                    <div class="btn-group mr-2" role="group" aria-label="Action Button">
                                                        <a href="/admins/detail/{{ $admin->id }}"
                                                            class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                                        @if (Auth::user()->id == $admin->id)
                                                            <a href="/admins/edit/{{ $admin->id }}"
                                                                class="btn btn-warning"><i
                                                                    class="bi bi-pencil-square"></i></a>
                                                            <form action="admins/delete/{{ $admin->id }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"><i
                                                                        class="bi bi-trash3-fill"></i></button>
                                                            </form>
                                                        @endif
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
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header mb-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">
                                Librarian List
                            </h5>
                            <div class="ml-auto">
                                <a href="/operators/create" class="btn btn-primary add-button"><span>Add Data</span></a>
                                {{-- <a href="/operators/index" class="btn btn-warning back-button"><span>Back</span></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table" id="table2">
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
                                        @foreach ($operators as $operator)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $operator->name }}</td>
                                                <td>{{ $operator->email }}</td>
                                                <td>{{ $operator->phone }}</td>
                                                <td>
                                                    <div class="btn-group mr-2" role="group" aria-label="Action Button">
                                                        <a href="/operators/detail/{{ $operator->id }}"
                                                            class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                                        <a href="/operators/edit/{{ $operator->id }}"
                                                            class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                        <form action="operators/delete/{{ $operator->id }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><i
                                                                    class="bi bi-trash3-fill"></i></button>
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
            </div>
        </div>
    </div>
@endsection
