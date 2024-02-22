@extends('layouts.main')
@section('content')
    <div class="background-main">
        <div class="py-5">
            <div class="container">
                {{-- <div class="page-content"> --}}
                <div class="card p-3">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h4 class="bold">Make New Password</h4>
                            <a href="/profile" class="btn btn-warning back-button"><span>Back</span></a>
                        </div>
                    </div>
                    {{-- <div class="card-header">
                    </div> --}}
                    <div class="card-body mt-3">
                        <form action="/users/edit" method="POST">
                            {{-- @csrf --}}
                            <div class="mb-3 form-group">
                                <label for="password" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    {{-- value="{{ old('password', $user->password) }}" --}}>

                                {{-- @error('password')
                                        {{ $message }}
                                    @enderror --}}
                            </div>
                            <div class="mb-3 form-group">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    value="{{ old('password') }}">

                                {{-- @error('password')
                                        {{ $message }}
                                    @enderror --}}
                            </div>
                            <div class="justify-content-center d-flex">
                                <button type="submit" class="btn btn-color">Submit</button>
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
