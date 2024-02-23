<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Collection;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function landing() {
        $books = Book::paginate(4);
        return view('dashboard.user', compact('books'));
    }
    
    public function dashboard() {
        $userId = Auth::user()->id;
        $books = Book::paginate(3);
        // $bookId = Collection::where('user_id', $userId)->pluck('book_id')->toArray();
        $collections = Collection::where('user_id', $userId)->with(['books', 'books.categories'])->get();
        return view('dashboard.user', compact('books', 'collections'));
    }
    public function index()
    {
        $books = Book::all();
        return view('user-books.index', compact('books'));
    }
    public function getById(Book $book)
    {
        $userId = Auth::user()->id;
        $reviewId = Review::where('user_id', $userId)->where('book_id', $book->id)->pluck('id')->toArray();
        // dd($reviewId);
        $reviews = Review::where('book_id', $book->id)->orderBy('id', 'desc')->get();
        $collection = Collection::where('user_id', $userId)->where('book_id', $book->id)->first();
        // dd($collection);
        return view('user-books.detail', compact('book', 'reviews', 'collection', 'reviewId'));
    }

    public function search(Request $request) {
        $bookSearch = Book::where('title', 'LIKE', '%'. $request['title'].'%')->get();
        // dd($bookSearch);
        return view('user-books.search', compact('bookSearch'));
    }
    
}
