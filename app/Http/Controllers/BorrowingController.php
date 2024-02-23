<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with(['books'])->get();
        return view('borrowings.index', compact('borrowings'));
    }

    public function getById(Borrowing $borrowing)
    {
        return view('borrowings.detail', compact('borrowing'));
    }
    public function reportOne(Borrowing $borrowing) {
        // dd($borrowing);
        return view('reports.one', compact('borrowing'));
    }

    public function reportAll(Borrowing $borrowing) {
        // dd($borrowing);
        $borrowings = Borrowing::all();
        return view('reports.all', compact('borrowings'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 3)->get();
        $books = Book::all();
        return view('borrowings.create', compact('books', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return 'masuk';
        $data = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'quantity' => 'required',
            'status' => 'required',
        ]);
        $data['status'] = 1;
        Borrowing::create($data);
        return redirect('/borrowings');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Borrowing $borrowing)
    {
        if(Carbon::now()->greaterThan($borrowing->end_date)){
            // $borrowing->update([
            //     'status' => '2'
            // ]);
            $borrowing['status'] = "2";
            $borrowing->update();
            return redirect('/borrowings');
        } else {
            $borrowing['status'] = "0";
            $borrowing->update();
            return redirect('/borrowings');
        }
    }

}
