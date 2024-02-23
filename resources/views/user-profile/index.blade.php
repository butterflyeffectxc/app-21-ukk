@extends('layouts.main')
@section('content')
    <div class="background-main">
        <div class="py-5">
            <div class="container">
                <div class="card p-3">
                    <div class="card-body mt-5">
                        <div class="container book-detail">
                            <div class="row">
                                <div class="col-12 col-md-4 text-center">
                                    <img src="{{ asset('assets/book-lover.svg') }}" alt="" width="200">
                                </div>
                                <div class="col-12 col-md-8">
                                    <h4 class="py-3 bold">Your Profile</h4>
                                    <h4 class="text-pink">{{ $user->name }}</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover p-0 m-0">
                                            <tbody>
                                                <tr>
                                                    <th class="text-bold-500 pl-0">NIK</th>
                                                    <td>{{ $user->nik }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-bold-500 pl-0">Phone</th>
                                                    <td>{{ $user->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-bold-500 pl-0">Email</th>
                                                    <td>{{ $user->email }}</td>
                                                </tr>
                                                {{-- <tr>
                                                    <th class="text-bold-500 pl-0">Address</th>
                                                    <td>$15/hr</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-bold-500 pl-0">Language</th>
                                                    <td>Bahasa Indonesia</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-bold-500 pl-0">Availability</th>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-bold-500 pl-0">Category</th>
                                                    <td>Fiction</td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-borderless p-0 m-0">
                                            <thead>
                                                <tr>
                                                    <th class="pl-0">Address:</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0">
                                                        <p>{{ $user->address }}</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            {{-- <a href="/profile/edit-password/id" class="btn btn-color-light next-button mr-2"><span>Edit
                                    Password</span></a> --}}
                            <a href="/user/profile/edit/{{ $user->id }}" class="btn btn-color next-button mr-2"><span>Edit Profile</span></a>
                            <a href="/user/books" class="btn btn-warning back-button"><span>Back</span></a>
                        </div>
                    </div>
                    {{-- <div class="container">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Give Your Opinion!</h4>
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <div id="full">
                                        <p>I love this <strong>book!</strong></p>
                                        <p><br></p>
                                    </div>
                                    <div class="d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-color">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    {{-- <script>
        windows.print();
    </script> --}}
@endsection
