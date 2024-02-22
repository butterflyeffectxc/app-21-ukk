@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header mb-2">
                <h5 class="card-title">
                    Add Book
                </h5>
            </div>
            <div class="card-body">
                <form action="/books/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" autofocus value="{{ old('isbn')}}">

                        @error('isbn')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" name="author"  value="{{ old('author')}}">

                        @error('author')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher"  value="{{ old('publisher')}}">

                        @error('publisher')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="published" class="form-label">Published</label>
                        <input type="text" class="form-control" id="published" name="published"  value="{{ old('published')}}">

                        @error('published')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="language" class="form-label">Language</label>
                        <input type="text" class="form-control" id="language" name="language"  value="{{ old('language')}}">

                        @error('language')
                            {{ $message }}
                        @enderror
                    </div>
                
                    <div class="form-group mb-3">
                        <label for="availability" class="form-label">Quantity</label>
                        <input type="numeric" class="form-control" id="availability" name="availability" value="{{ old('availability')}}">
                        @error('availability')
                        {{ $message }}
                    @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="categories" class="form-label">Category</label>
                        <select class="choices form-select multiple-remove" name="categories[]" multiple="multiple">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="numeric" class="form-control" id="categories" name="categories" value="{{ old('categories')}}"> --}}
                        @error('categories')
                        {{ $message }}
                    @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                      </div>
                    <div class="form-group mb-3">
                        <label for="cover" class="form-label">Cover:</label>
                        <input type="file" class="form-control" id="cover" name="cover">

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


{{-- <div style="margin-top: 100px;">
    <form action="/books/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author"  value="{{ old('author') }}">

            @error('author')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">

            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">

            @error('slug')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="cover" class="form-label">Cover:</label>
            <input type="file" class="form-control" id="cover" name="cover">

            @error('cover')
                {{ $message }}
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script type="module">
    let slug = document.querySelector("#slug");
    let input = document.querySelector("#title");

    input.addEventListener("change", async function() {
        if (!input.value) {
            slug.value = "";
        } else {
            fetch(`/books/checkSlug?title=${input.value}`)
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    slug.value = data.slug;
                });
        }
    });
</script> --}}
