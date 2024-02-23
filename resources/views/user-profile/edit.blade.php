@extends('layouts.main')
@section('content')
    <div class="background-main">
        <div class="py-5">
            <div class="container">
                {{-- <div class="page-content"> --}}
                <div class="card p-3">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h4 class="bold">Edit Profile</h4>
                            {{-- <a href="/profile/edit/id" class="btn btn-color next-button mr-2"><span>Edit Profile</span></a> --}}
                            <a href="/profile" class="btn btn-warning back-button"><span>Back</span></a>
                        </div>
                    </div>
                    <div class="card-body mt-3">
                        <form action="/user/profile/edit/{{ $user->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" autofocus value="{{ old('name',$user->name) }}">
        
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email',$user->email) }}">
                                
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
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone',$user->phone) }}">
                                @error('phone')
                                {{ $message }}
                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik',$user->nik) }}">
                                @error('nik')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" rows="2" name="address">{{ old('address',$user->address) }}</textarea>
                                @error('address')
                                {{ $message }}
                            @enderror
                        </div>
                        <input type="text" class="form-control" id="role" name="role" value="3" hidden>
                            <div class="form-group mb-3">
                            <div class="justify-content-center d-flex">
                                <button type="submit" class="btn btn-color next-button">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    {{-- <script>
        windows.print();
    </script> --}}
@endsection
