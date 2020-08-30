<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\Hash;

class User_controller extends Controller {
    function create_user (Request $request) {
        $user = new User();
        $user->forename = $request->forename;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('http://127.0.0.1:8000/login');
    }

    function login_user (Request $request) {
        $credentials = array (
        'email' => $request->email,
        'password' => $request->password
        );
        if (Auth::attempt($credentials)) {
            return redirect('http://127.0.0.1:8000/about');
        } else {
            return request()->all();
        }
    }

    function logout_user (Request $request) {
        Auth::logout();
        return redirect('http://127.0.0.1:8000/login');
    }
}
