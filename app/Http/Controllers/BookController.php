<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use App\Models\Category;
use App\Models\CategoryDetail;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['categories'])->get();
        return view('books.index', compact('books'));
    }

    public function getById(Book $book)
    {
        return view('books.detail', compact('book', 'reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return 'masuk';
        $data = $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'published' => 'required',
            'language' => 'required',
            'availability' => 'required',
            'cover' => 'nullable',
            'description' => 'nullable',
            'categories' => 'required'
        ]);

        if($request->file('cover')){
            $cover = $request->file('cover')->store('book-cover');
            $data['cover'] = $cover;
        }
        $book = Book::create($data);
        $book->categories()->sync($request['categories']);
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        $categoryDetail = $book->categoryDetails;
        return view('books.edit', compact('categories', 'book', 'categoryDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'published' => 'required',
            'language' => 'required',
            'availability' => 'required',
            'cover' => 'nullable',
            'description' => 'nullable',
            'categories' => 'required'
        ]);
        if($request['cover']){
            if($book->cover) $book = Storage::delete($book->cover);
            $cover = $request->file('cover')->store('book-cover');
            $data['cover'] = $cover;
        } 

        $book->update($data);
        $book->categories()->sync($request['categories']);
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if($book->cover) Storage::delete($book->cover);
        $book->delete();
        return redirect('/books');
    }
}
