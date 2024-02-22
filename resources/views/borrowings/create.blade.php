@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header mb-2">
                <h5 class="card-title">
                    Add Borrowing
                </h5>
            </div>
            <div class="card-body">
                <form action="/borrowings/create" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="user_id">Borrower</label>
                        <select class="form-control" id="user_id" name="user_id" autofocus>
                          @foreach ($users as $user)
                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="book_id">Borrower</label>
                        <select class="form-control" id="book_id" name="book_id">
                          @foreach ($books as $book)
                          <option value="{{ $book->id }}">{{ $book->title }}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity')}}">

                        @error('quantity')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="start_date" class="form-label">Borrow Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date')}}">

                        @error('start_date')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="end_date" class="form-label">Return Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date')}}">
                        
                        @error('end_date')
                        {{ $message }}
                        @enderror
                    </div>
                    <input type="text" class="form-control" id="status" name="status" value="1" hidden>
                    <div class="justify-content-end d-flex">
                        <a href="/borrowings" class="btn btn-warning back-button me-2"><span>Back</span></a>
                        <button type="submit" class="btn btn-primary add-button"><span>Submit</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


