@extends('layouts.main')
@section('content')
    <div class="background-main">
        <div class="py-5">
            <div class="container">
                {{-- <div class="page-content"> --}}
                <div class="card p-3">
                    <div class="container">

                    </div>
                    {{-- <div class="card-header">
                    </div> --}}
                    <div class="card-body mt-5">
                        <div class="container book-detail">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="{{ asset('assets/book.png') }}" alt="" width="200">
                                    {{-- <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Basic Rating</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="basic"></div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="container mt-3">
                                        <input type="checkbox" id="rating" class="hidden-checkbox">
                                        <label for="rating" class="heart-icon">
                                            <i class="bi bi-heart"></i>
                                            <i class="bi bi-heart-fill"></i>
                                            <span>Add to Wishlist</span>
                                        </label>
                                    </div> --}}


                                </div>
                                <div class="col-12 col-md-8">
                                    <h4 class="pb-3 bold">Your Profile</h4>
                                    <h4 class="text-pink">Name</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover p-0 m-0">
                                            <tbody>
                                                <tr>
                                                    <th class="text-bold-500 pl-0">NIK</th>
                                                    <td>937798298497</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-bold-500 pl-0">Phone</th>
                                                    <td>Michael Right</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-bold-500 pl-0">Email</th>
                                                    <td>Gramedia</td>
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
                                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                                            eius
                                                            veniam aspernatur assumenda quam itaque accusantium a repellat
                                                            minima
                                                            hic.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="/profile/edit-password/id" class="btn btn-color-light next-button mr-2"><span>Edit
                                    Password</span></a>
                            <a href="/profile/edit/id" class="btn btn-color next-button mr-2"><span>Edit Profile</span></a>
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
