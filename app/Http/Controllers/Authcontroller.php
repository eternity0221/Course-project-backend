<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RequestLogin;
Use App\Http\Requests\RequestRegister;
Use App\Models\User;
Use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    public function register () {
        if (Auth::check()) return back();
        return view('pages.auth.register');
    }
    public function login () {
        if (Auth::check()) return back();
        return view('pages.auth.login');
    }
    public function logout (Request $request) {
        Auth::logout();
        $request->session()->regenerate();
        return redirect()->route('home');
    }

    public function register_post (RequestRegister $request) {
        $request->merge(["password"=>Hash::make($request->input('password'))]);

        $user = User::create([
            "name"=>$request->input('name'),
            "email"=>$request->input('email'),
            "address"=>$request->input('address'),
            "password"=>$request->input('password'),
        ]);
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function login_post (RequestLogin $request) {
        if (!Auth::attempt($request->validated())){return back()->withErrors(["auth"=>"Wrong Login & Password"]);}
        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }
}
