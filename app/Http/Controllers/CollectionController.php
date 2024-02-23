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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Book $book)
    {
        // dd('masuk');
        // return 'masuk';
        // $data = $request->validate([
        //     'user_id' => 'required',
        //     'book_id' => 'required',
        // ]);
        // dd($request);
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
