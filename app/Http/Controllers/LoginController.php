<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]); 

        // echo bcrypt('password');
        //$2y$10$2y8StiPh.7cbwGlVTRa28uG1wVXe95CpkK6b9qq1esS2JoxgpP0e.

        if(!auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=>'Your provided credentials could not be verified.'
            ]);
        }
        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
