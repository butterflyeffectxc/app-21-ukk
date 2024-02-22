@extends('layouts.without')
@section('contentOne')
    <div class="container-fluid login-bg">
        <div class=" row container justify-content-center vh-100 align-items-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-transparent d-flex align-items-center">
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-6 login-left align-items-center pt-4">
                                <img src="{{ asset('assets/login.svg') }}" alt="" width="90%">
                            </div>
                            <div class="col-12 col-md-6">
                                <form action="/login" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email') }}">

                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            value="{{ old('password') }}">

                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="justify-content-end d-flex mb-3">
                                        <small>Don't have Account? <a href="/register" class="text-link"> Click
                                                Here</a></small>
                                    </div>
                                    <div class="justify-content-center d-flex">
                                        <button type="submit" class="btn btn-color">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
