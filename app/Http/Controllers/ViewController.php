<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Review;
use Illuminate\Database\Eloquent\Builder;
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
        $books = Book::paginate(4);
        // $bookId = Collection::where('user_id', $userId)->pluck('book_id')->toArray();
        $collections = Collection::where('user_id', $userId)->with(['books', 'books.categories'])->get();
        return view('dashboard.user', compact('books', 'collections'));
    }
    public function index()
    {
        $books = Book::all();
        $categories = Category::all();
        return view('user-books.index', compact('books', 'categories'));
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

    public function searchBook(Request $request) {
        $bookSearch = Book::where('title', 'LIKE', '%'. $request['input'].'%')->get();
        // dd($bookSearch);
        return view('user-books.search', compact('bookSearch'));
    }
    public function searchCategory(Request $request) {
        $books = Book::whereHas('categoryDetails', function (Builder $query) use($request){
            $query->where('category_id', 'like', $request['category']);
        })->get();
        // dd($books);
        return view('user-books.category-search', compact('books'));
    }
    
}
