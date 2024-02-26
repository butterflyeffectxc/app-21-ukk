@extends('layouts.main')
@section('content')
    <div class="background-main ">
        <div class="container my-5 ">
            <div class="d-flex pt-5 justify-content-between">
                <h4 class="p-3 bold"><span class="text-pink">{{ Auth::user()->name }}</span> Wishlist</h4>
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
            <div class=" justify-content-between d-flex vh-100 mt-5 p-0">
                <div class="container">
                    @if ($collections->isEmpty())
                    <div class="col-12">
                        <div class="text-center">
                            <h4 class="bold text-muted">Add Book to your Wishlist and your Books will Appear Here.</h4>
                        </div>
                    </div>
                    @else
                    @foreach ($collections as $collection)
                    <a href="/user/books/detail/{{ $collection->books->id }}" class="card-link">
                        <div class="card border-light mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <div class="justify-content-center d-flex">
                                        <img src="{{ $collection->books->cover ? asset('storage/'. $collection->books->cover) : asset('assets/book-undefined.png') }}" alt="book-cover" width="130">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $collection->books->title }}</h5>
                                        <p class="card-text"><small class="text-muted">@foreach ($collection->books->categories as $category)
                                                {{ $category->name }}
                                        @endforeach</small></p>
                                        <p class="card-text">{{ Str::limit($collection->books->description, 20)  }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    @endif
                    </adiv>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    @endsection
