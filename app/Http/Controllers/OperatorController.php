<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $admins = User::where('role', 1)->get();
        $operators = User::where('role', 2)->get();
        // dd($users);
        return view('users.index-operator', compact('admins', 'operators'));
    }
    public function getById(User $user)
    {
        return view('users.detail', compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create-operator');
    }

    public function createAdmin()
    {
        return view('users.create-admin');
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
        return redirect('/operators');
    }

    /**
     * Display the specified resource.
     */
  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit-operator', compact('user'));
    }

    public function editAdmin(User $user)
    {
        return view('users.edit-admin', compact('user'));
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
        return redirect('/operators');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/operators');
    }
}