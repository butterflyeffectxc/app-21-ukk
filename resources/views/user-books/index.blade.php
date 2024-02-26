@extends('layouts.main')
@section('content')
    <div class="vh-100">
        <div class="container px-0 pt-5 d-flex justify-content-between">
            <h4 class="p-3 bold">Book List</h4>

            <div class="row ml-auto">
                <form action="/user/books/category/search" method="POST">
                    @csrf
                    <div class="form-row py-3 mr-3">
                        <div class="col">
                            <button class="btn btn-color dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" id="filterCategory">
                                Pick Genre
                              </button>
                              <div class="dropdown-menu">
                                @foreach ($categories as $category)
                                <button class="dropdown-item" type="submit" name="category" value="{{ $category->id }}">{{ $category->name }}</button>
                                @endforeach
                              </div>
                        </div>
                        {{-- <div class="col">
                            <button class="btn btn-color" type="submit"><i class="bi bi-search"></i></button>
                        </div> --}}
                    </div>
                </form>
                <form action="/user/books/search" method="POST">
                    @csrf
                    <div class="form-row py-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Search Book" name="input" id="search">
                        </div>
                        <div class="col">
                            <button class="btn btn-color" type="submit"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="background-dashboard justify-content-between d-flex vh-100 mt-5 ">
            <div class="container py-2">
                <div class="row justify-content-center">
                    @foreach ($books as $book)
                    <div class="col-6 col-md-3 pb-5">
                        <img src="{{ $book->cover ? asset('storage/'. $book->cover) : asset('assets/book-undefined.png') }}" alt="book-cover" width="130">
                        <h5 class="pt-2">{{ $book->title }}</h5>
                        <small>@foreach ($book->categories as $category)
                            {{ $category->name }},
                        @endforeach</small>
                        <div class="justify-content-center d-flex">
                            <a type="button" href="/user/books/detail/{{ $book->id }}" class="btn btn-color btn-sm">Detail</a>
                        </div>
                    </div>
                    @endforeach
                    </adiv>
                </div>
            </div>
        </div>
    @endsection
