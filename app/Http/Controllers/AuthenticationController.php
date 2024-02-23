<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function loginView() {
        return view('authentication.login');
    }
    public function registerView() {
        return view('authentication.register');
    }
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $roles = Auth::user()->role;
            if ($roles == '1'){
                return redirect('/books');
            } elseif ($roles == '2'){
                return redirect('/books');
            } else {
                return redirect()->intended('/user-dashboard');
            }
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }

    public function register(Request $request) {
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
        return redirect('/login');
    }
}
