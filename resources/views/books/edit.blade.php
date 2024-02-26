@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header mb-2">
                <h5 class="card-title">
                    Edit Book
                </h5>
            </div>
            <div class="card-body">
                <form action="/books/edit/{{ $book->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" autofocus value="{{ old('isbn', $book->isbn )}}">

                        @error('isbn')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title )}}">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" name="author"  value="{{ old('author', $book->author )}}">

                        @error('author')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher"  value="{{ old('publisher', $book->publisher )}}">

                        @error('publisher')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="published" class="form-label">Published</label>
                        <input type="text" class="form-control" id="published" name="published"  value="{{ old('published', $book->published )}}">

                        @error('published')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="language" class="form-label">Language</label>
                        <input type="text" class="form-control" id="language" name="language"  value="{{ old('language', $book->language )}}">

                        @error('language')
                            {{ $message }}
                        @enderror
                    </div>
                
                    <div class="form-group mb-3">
                        <label for="availability" class="form-label">Quantity</label>
                        <input type="numeric" class="form-control" id="availability" name="availability" value="{{ old('availability', $book->availability )}}">
                        @error('availability')
                        {{ $message }}
                    @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="categories" class="form-label">Category</label>
                        <select class="choices form-select multiple-remove" name="categories[]" multiple="multiple">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" 
                                @foreach ($categoryDetail as $categoryBook)
                                @if ($categoryBook->category_id == $category->id)
                                    selected
                                @endif
                                @endforeach>{{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        {{-- <input type="numeric" class="form-control" id="categories" name="categories" value="{{ old('categories')}}"> --}}
                        @error('categories')
                        {{ $message }}
                    @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $book->description ) }}</textarea>
                      </div>
                    <div class="form-group mb-3">
                        <label for="cover" class="form-label">Cover:</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                        <img src="{{ old('cover', asset('storage/' . $book->cover)) }}" alt="" width="100" class="cover-img pt-2">
                    </div>
                    <div class="justify-content-end d-flex">
                        <a href="/books" class="btn btn-warning back-button me-2"><span>Back</span></a>
                        <button type="submit" class="btn btn-primary add-button"><span>Submit</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


