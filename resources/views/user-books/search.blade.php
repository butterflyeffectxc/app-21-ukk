@extends('layouts.main')
@section('content')
    <div class="vh-100">
        <div class="container px-0 mt-5 d-flex justify-content-between">
            <h4 class=" bold">Book List</h4>
            <a href="/user/books" class="btn btn-warning back-button pb-0"><span>Back</span></a>
        </div>
        <div class="background-dashboard justify-content-between d-flex h-100 mt-5 ">
            <div class="container py-2">
                <div class="row justify-content-center">
                    @foreach ($bookSearch as $book)
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
