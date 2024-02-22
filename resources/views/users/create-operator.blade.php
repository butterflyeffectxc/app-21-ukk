@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header mb-2">
                <h5 class="card-title">
                    Add Librarian
                </h5>
            </div>
            <div class="card-body">
                <form action="/operators/create" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" autofocus value="{{ old('name') }}">

                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" >

                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">Telephone</label>
                        <input type="string" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">

                    </div>
                    <div class="form-group mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik"
                            value="{{ old('nik') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="2" name="address"></textarea>
                            
                        </div>
                        <input type="text" class="form-control" id="role" name="role"
                            value="2" hidden>
                    <div class="justify-content-end d-flex">
                        <a href="/users" class="btn btn-warning back-button me-2"><span>Back</span></a>
                        <button type="submit" class="btn btn-primary add-button "><span>Submit</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


