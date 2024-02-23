@extends('layouts.main')
@section('content')
<div class="container">
    <div class="page-heading mt-5 mb-4">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content mb-4">
        <div class="card">
            <div class="card-header mb-2">
                <h5 class="card-title">
                    Edit Review
                </h5>
            </div>
            <div class="card-body">
                <form action="/reviews/edit/{{ $review->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                        <input type="text" name="book_id" value="{{ $review->book_id }}" hidden>
                        {{-- {{ Auth::user()->id }}
                        {{ $review->book_id }} --}}
                        <label for="rating">Header</label>
                        <select  class="form-control" id="rating" name="rating">
                            <option value="1">I really like this book!</option>
                            <option value="2">Just so so...</option>
                            <option value="3">I hate this book.</option>
                        </select>
                        @error('rating')
                        {{ $message }}
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea name="comment" class="form-control" cols="30" rows="5">{{ old('comment', $review->comment )}}</textarea>
                        @error('comment')
                        {{ $message }}
                    @enderror
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                    </div>
                    <div class="justify-content-end d-flex">
                        <a href="/user/books/detail/{{ $review->book_id }}" class="btn btn-warning back-button mr-2"><span>Back</span></a>
                        <button type="submit" class="btn btn-color add-button"><span>Submit</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


