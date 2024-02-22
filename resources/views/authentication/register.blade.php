@extends('layouts.without')
@section('contentOne')
    <div class="container-fluid login-bg vh-100">
        <div class="container">
            <div class="d-flex py-5 justify-content-center">
                <img src="{{ asset('assets/logo-dark.svg') }}" alt="">
            </div>
            <div class=" row d-flex justify-content-center align-items-center">
                <div class="card" style="width: 50rem; max-width: 55rem">
                    <div class="card-body">
                        {{-- <div class=""> --}}
                        {{-- <div class="col-6"> --}}
                        <form action="/register" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="name" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}">

                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}">

                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="{{ old('password') }}">

                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="phone" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone') }}">

                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik"
                                        value="{{ old('nik') }}">

                                    @error('nik')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="2"></textarea>
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="role" name="role" value="3"
                                    hidden>
                                <div class="justify-content-end d-flex mb-3">
                                    <small>Already have an Account? <a href="/login" class="text-link"><i>Click
                                                Here</i></a></small>
                                </div>
                            </div>
                            <div class="justify-content-center d-flex">
                                <button type="submit" class="btn btn-color">Submit</button>
                            </div>
                        </form>
                        {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
