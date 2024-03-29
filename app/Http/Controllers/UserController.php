<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role', 3)->orderBy('name', 'ASC')->get();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nik' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'role' => 'required',
        ]);

        User::create($data);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function getById(User $user)
    {
        return view('users.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
            'nik' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'role' => 'required',
        ]);
        $item = $user;
        $item->name = $request['name'];
        $item->email = $request['email'];
        $item->nik = $request['nik'];
        $item->phone = $request['phone'];
        $item->address = $request['address'];
        $item->role = $request['role'];
        if($request->has('password') && $request['password'] != '')
        $item->password = $request->has('password') && $request['password'] != '';
        $item->save();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');
    }
}
