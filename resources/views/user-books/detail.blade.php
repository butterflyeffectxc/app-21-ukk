@extends('layouts.main')
@section('content')
    <div class="background-main">
        <div class="py-5">
            <div class="container">
                {{-- <div class="page-content"> --}}
                <div class="card p-3">
                    <div class="card-body mt-5">
                        <div class="container book-detail">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="{{ $book->cover ? asset('storage/'. $book->cover) : asset('assets/book-undefined.png') }}" alt="book-cover" width="200">
                                    <div class="mt-3">
                                        {{-- <p>{{ Auth::user()->id }}</p> --}}
                                    @if ($collection)
                                        <form action="/collections/delete/{{ $collection->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn cancel-button btn-color-light"><span>Delete from Wishlist</span></button>
                                        </form>
                                    @else
                                        <form action="/collections/create/{{ $book->id }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn add-button btn-color"><span>Add to Wishlist</span></button>
                                        </form>
                                    @endif
                                    </div>


                                </div>
                                <div class="col-12 col-md-8">
                                    <h4 class="text-pink">{{ $book->title }}</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover p-0 m-0">
                                            <tbody>
                                                <tr>
                                                    <th class="pl-0">ISBN</th>
                                                    <td>{{ $book->isbn }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0">Author</th>
                                                    <td>{{ $book->author }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0">Publisher</th>
                                                    <td>{{ $book->publisher }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0">Published</th>
                                                    <td>{{ $book->published }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0">Language</th>
                                                    <td>{{ $book->language }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0">Availability</th>
                                                    <td>{{ $book->availability }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0">Category</th>
                                                    <td>@foreach ($book->categories as $category)
                                                        {{ $category->name }},
                                                    @endforeach</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-borderless p-0 m-0">
                                            <thead>
                                                <tr>
                                                    <th class="pl-0">Synopsis:</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0">
                                                        <td>{{$book->description ? $book->description : "This Book doesn't have description"}}</td>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="/user/books" class="btn btn-warning back-button"><span>Back</span></a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Give Your Opinion!</h4>
                            </div>
                            <div class="card-body">
                                {{-- <p>I love this book!</p> --}}
                                <form action="/reviews/create/{{ $book->id }}" method="POST">
                                    @csrf
                                    {{-- <div id="full">
                                        <p>I love this <strong>book!</strong></p>
                                        <p><br></p>
                                    </div> --}}
                                    <div class="form-group">
                                        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                                        <input type="text" name="book_id" value="{{ $book->id }}" hidden>
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
                                        <textarea name="comment" class="form-control" cols="30" rows="5"></textarea>
                                        @error('comment')
                                        {{ $message }}
                                    @enderror
                                    </div>
                                    <div class="d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-color">Submit</button>
                                    </div>
                                </form>
                            </div>

                            {{-- Comments --}}
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="card-title">What Other said About <span class="text-pink">{{ $book->title }}</span>?</h4>
                            </div>
                            <div class="card-body">
                                @foreach ($reviews as $review)
                                    <div class="card my-3">
                                        <div class="container comment">
                                            <div class="d-flex justify-content-between">
                                                <p class="pt-3" >{{ $review->users->name }}</p>
                                                <div class="dropdown">
                                                    @if (in_array($review->id, $reviewId))
                                                    <a class="btn ropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a href="/reviews/edit/{{ $review->id}}" class="btn btn-warning dropdown-item">Edit Comment</a>
                                                      <form action="/reviews/delete/{{ $review->id}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger dropdown-item">Delete Comment</button>
                                                    </form>
                                                    </div>
                                                    @endif
                                                  </div>
                                            </div>
                                            <hr>
                                            <p class="text-muted">@if ($review->rating == 1)
                                                I really like this book!
                                            @elseif ($review->rating == 2)
                                                Just so so...
                                            @else I hate this book.
                                            @endif</p>
                                            <p>{{ $review->comment }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
@endsection
