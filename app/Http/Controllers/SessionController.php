<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('session.create');
    }

    public function store(){
        $attributes = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        if (! auth()->attempt(['user_email'=>$attributes['email'],'password'=>$attributes['password']])) {
            throw ValidationException::withMessages([
                'user_email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');
    }
}
