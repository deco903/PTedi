<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $login = $request->only('email', 'password');

        if (Auth()->attempt($login)) {
            // Authentication passed...
            return redirect()->back();
        }
        
        // if (!auth()->attempt(['email' => $request->email, 'password' => $request->password ]))
        // {
        //     return redirect()->back();
        // }

        return redirect()->route('home');
        
    }

    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        //validation
        $validation = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed' //field_confirmed
        ]);
        //insert into
        $user = user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password) 
        ]);

       
        //stright to home page/dashboard
        auth()->loginUsingId($user->id);

        return redirect()->route('home');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
