<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(){


        $attributes = request()->validate(
            [
                'user_last_name'=>'required|max:255',
                'user_first_name'=>'required|max:255',
                'user_user_name'=>'required|min:3|max:255|unique:users,user_user_name',
                'user_email'=>'required|email|max:255|unique:users,user_email',
                'user_password'=>'required|min:7|max:255'
            ]
        );

        $attributes['role_id'] = 2;
        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/')->with('success','Your account has been created');

    }
}
