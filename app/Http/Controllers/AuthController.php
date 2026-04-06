<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
   
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
         $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if(Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ])){
        return redirect('/home');
    } else {
        return back()->with('error', 'Email atau password salah!');
    }
}

    
    public function registration()
    {
        return view('register');
    }

   
    public function register(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'name' => 'required',
        'password' => 'required|min:3'
    ]);

    User::create([
        'email' => $request->email,
        'name' => $request->name,
        'password' => bcrypt($request->password)
    ]);

    return back()->with('success', 'Berhasil daftar!');
}
    
    public function home()
    {
        if(Auth::check()){
            return view('home', [
                'user' => Auth::user()
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}