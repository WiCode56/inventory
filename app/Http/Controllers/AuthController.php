<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterCreateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function authenticating(Request $request){
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Session::flash('successlogin', 'success');
            return redirect()->intended('/');
        }

        Session::flash('logingagal','failed');

        return redirect('/login');
    }
    public function register(){
        return view('register');
    }

    public function regis(RegisterCreateRequest $request){
        $request->validate([
            'password' => 'confirmed'
        ]);

        $user = User::create([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hashing password
        ]);

            Session::flash('successregis', 'success');
            Session::flash('message', 'Anda telah berhasil registrasi!');

        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request ->session()->regenerateToken();

        Session::flash('logout','logout');
        Session::flash('message', 'logout berhasil!');

        return redirect('/login');

    }
}
