<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $validateData = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if (Auth::attempt($validateData)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password  Salah');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Anda Berhasil Logout Tuanku!!');
    }
}
