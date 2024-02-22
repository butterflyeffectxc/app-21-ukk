@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>User Detail</h3>
    </div>
    <div class="page-content">
        <div class="card px-3">
            <div class="card-header mb-2">
                <br>
            </div>
            <div class="card-body">
                <div class="container book-detail">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img src="{{ asset('assets/book-lover.svg') }}" alt="" width="200" class="pb-3">
                        </div>
                        <div class="col-12 col-md-8">
                            <h4>{{ $user->name }}</h4>
                            <div class="table-responsive">
                                <table class="table table-hover p-0 m-0">
                                    <tbody>
                                        <tr>
                                            <th class="text-bold-500">NIK</th>
                                            <td>{{ $user->nik }}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-bold-500">Email</th>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-bold-500">Telephone</th>
                                            <td>{{ $user->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-bold-500">Active since</th>
                                            <td>{{ $user->created_at ? $user->created_at : "12-05-2023" }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless p-0 m-0">
                                    <thead>
                                        <tr>
                                            <th>Address:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>{{ $user->address}}</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/users" class="btn btn-warning back-button"><span>Back</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
