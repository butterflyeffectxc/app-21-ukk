<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, Book $book)
    {
        // dd('masuk');
        // return 'masuk';
        $data = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'rating' => 'required',
            'comment' => 'nullable',
        ]);
        $data['user_id'] = Auth::user()->id;
        $data['book_id'] = $book->id;
        Review::create($data);
        return redirect()->back();
    }

    public function edit(Review $review)
    {
        return view('user-books.edit-review', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        // dd('return');
        $data = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'rating' => 'required',
            'comment' => 'nullable',
        ]);
        // dd($data);
        $data['user_id'] = Auth::user()->id;
        $data['book_id'] = $review->book_id;

        $review->update($data);
        return redirect("/user/books/detail/ $review->book_id ");
    }
    public function destroy(Review $review) {
        $review->delete();
        return redirect()->back();
    }
}
