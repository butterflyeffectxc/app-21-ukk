<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getById(User $user) {
        // dd('masuk');
        return view('user-profile.index', compact('user'));
    }
    public function edit(User $user) {
        return view('user-profile.edit', compact('user'));
    }
    public function update(Request $request, User $user) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nik' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'role' => 'required',
        ]);

        $user->update($data);
        return redirect("/user/profile/$user->id");
    }
}
