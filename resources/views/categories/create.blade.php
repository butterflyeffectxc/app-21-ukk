@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header mb-2">
                <h5 class="card-title">
                    Add Genre
                </h5>
            </div>
            <div class="card-body">
                <form action="/categories/create" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" autofocus value="{{ old('name')}}">

                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <small class="text-muted"><i>(optional)</i></small>
                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description')}}">

                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="justify-content-end d-flex">
                        <a href="/categories" class="btn btn-warning back-button me-2"><span>Back</span></a>
                        <button type="submit" class="btn btn-primary add-button"><span>Submit</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


