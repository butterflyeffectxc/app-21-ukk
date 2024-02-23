@extends('layouts.main')
@section('content')
    <div class="">
        <div class="heading py-5">
            <div class="container">
                <div class="row justify-content-center d-flex align-items-center py-5 pl-5">
                    <div class="col-12 col-md-4">
                        <img src="{{ asset('assets/book.png') }}" alt="" width="200" class="book-heading-img">
                    </div>
                    <div class="col">
                        <h3 class="extra-bold">Month's Pick!</h3>
                        <h4 class="bold">The Honjin's Murderer</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis semper risus sed est bibendum, quis
                            vehicula felis porttitor. Etiam sed risus pulvinar, accumsan justo ut, dignissim libero. Sed a
                            tellus rhoncus, tempor urna nec, consequat urna. Mauris quis diam nunc. Aliquam pharetra
                            suscipit
                            sodales. Mauris eu venenatis magna. Maecenas scelerisque lacus neque, iaculis rhoncus ipsum
                            venenatis eget. Phasellus gravida sodales volutpat.</p>
                    </div>
                </div>
                <div class="justify-content-center d-flex">
                    <a href="#collections" class="icon-link"><i class="bi bi-chevron-compact-down "></i></a>
                </div>
            </div>
        </div>
        <div class="background-dashboard vh-auto" id="collections">
            <div class="book-list my-5 py-5 h-auto">
                <div class="d-flex justify-content-center">
                    <button type="button" class="block btn btn-rounded btn-sm mb-2">New Arrival</button>
                </div>
                <div class="d-flex justify-content-center mb-5">
                    <h4 class="bold">Book List</h4>
                </div>
                <div class="book container">
                    <div class="row flex-row flex-nowrap">
                        @if ($books->isEmpty())
                        <div class="col-12">
                            <div class="text-center">
                                <h4 class="bold">Data Not Found</h4>
                            </div>
                        </div>
                        @else
                        <div class="container">
                            <div class="row justify-content-center">
                                @foreach ($books as $book)
                                <div class="col-6 col-md-3">
                                    <img src="{{ $book->cover ? asset('storage/'. $book->cover) : asset('assets/book-undefined.png') }}" alt="book-cover" width="130" class="cover-img">
                                    <h5 class="bold pt-2">{{ $book->title }}</h5>
                                    <small> @foreach ($book->categories as $category)
                                        {{ $category->name }}, </small>
                                    @endforeach
                                    <div class="justify-content-center d-flex">
                                        <a type="button" href="/user/books/detail/{{ $book->id }}" class="btn btn-color btn-sm">Detail</a>
                                    </div>
                                </div>
                                @endforeach
                                <div class="d-flex align-items-center">
                                    <a href="/user/books" class="icon-link">
                                        <i class="bi bi-chevron-compact-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="category-list py-5 h-auto">
                <div class="d-flex justify-content-center">
                    <button type="button" class="block btn btn-rounded btn-sm mb-2">Waiting For You</button>
                </div>
                <div class="d-flex justify-content-center mb-4">
                    <h4 class="bold">Book Wishlist</h4>
                </div>
                <div class="collection container">
                    <div class="row flex-row flex-nowrap">
                        @if ($collections->isEmpty())
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="bold text-muted">Add Book to your Wishlist and your Books will Appear Here.</h4>
                                </div>
                            </div>
                        @else
                        <div class="container">
                            <div class="row justify-content-center">
                                @foreach ($collections as $collection)
                                <div class="col-6 col-md-3">
                                    {{-- <p>{{ dd($collections) }}</p> --}}
                                   <img src="{{ $collection->books->cover ? asset('storage/'. $collection->books->cover) : asset('assets/book-undefined.png') }}" alt="book-cover" width="130" class="cover-img">
                                    <h5 class="bold pt-2">{{ $collection->books->title }}</h5>
                                    <small>@foreach ($collection->books->categories as $category)
                                        {{ $category->name }}, 
                                @endforeach</small>
                                    <div class="justify-content-center d-flex">
                                        <a type="button" href="/user/books/detail/{{ $collection->book_id }}" class="btn btn-color btn-sm">Detail</a>
                                    </div>
                                </div>
                                @endforeach
                                <div class="d-flex align-items-center">
                                    <a href="/user/collections" class="icon-link">
                                        <i class="bi bi-chevron-compact-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
        <div class="bg-pink">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 col-md-4">
                        <img src="{{ asset('assets/book-re.svg') }}" alt="" width="270" class="feature-img">
                    </div>
                    <div class="col-12 col-md-8 pt-2">
                        <h5 class="bold pb-2"><u>Search</u> Based on Category!</h5>
                        <p>Dive into a vast collection of books covering every genre imaginable. Whether you're into
                            fiction,
                            non-fiction, mystery, or romance, we've got something for everyone.</p>
                        <a href="/user/books#filterCategory" class="btn btn-color">Search</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
