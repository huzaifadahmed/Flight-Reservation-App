<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\LoginAdminRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function store(LoginAdminRequest $request)
    {
        $validated = $request->validated();

        //Login credentials: username: hdahmed@ryerson.ca - password: password
        //$2y$10$2y8StiPh.7cbwGlVTRa28uG1wVXe95CpkK6b9qq1esS2JoxgpP0e.

        if(!auth()->attempt($validated)){
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
