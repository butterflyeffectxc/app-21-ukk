@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header mb-2">
                <h5 class="card-title">
                    Edit User
                </h5>
            </div>
            <div class="card-body">
                <form action="/admins/edit/{{ $user->id }}" method="POST">
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
                        <input type="string" class="form-control" id="phone" name="phone" value="{{ old('phone',$user->phone) }}">

                    </div>
                    <div class="form-group mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik"
                            value="{{ old('nik', $user->nik) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="2" name="address">
                                {{ old('phone',$user->address) }}
                            </textarea>
                            
                        </div>
                        <input type="text" class="form-control" id="role" name="role"
                            value="1" hidden>
                    <div class="justify-content-end d-flex">
                        <a href="/users" class="btn btn-warning back-button me-2"><span>Back</span></a>
                        <button type="submit" class="btn btn-primary add-button "><span>Submit</span></button>
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
            <input type="text" class="form-control" id="author" name="author" autofocus value="{{ old('author') }}">

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
