<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $collections = Collection::where('user_id', $userId)->with(['books', 'books.categories'])->get();
        return view('collections.index', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Book $book)
    {
        $user_id = Auth::user()->id;
        Collection::create([
            'user_id' => $user_id,
            'book_id' => $book->id
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function getById(Collection $collection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collection $collection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $collection = Collection::findOrFail($id);
        $collection->delete();
        return redirect()->back();
    }
}
