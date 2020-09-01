<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Validator;
use DB;
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
        return redirect('http://127.0.0.1:8000/log_in');
    }

    function log_in_user (Request $request) {
        $credentials = array (
        'email' => $request->email,
        'password' => $request->password
        );
        $remember_me = ($request->remember_me === "on") ? true : false; 
        if (Auth::attempt($credentials, $remember_me)) {
            return redirect('http://127.0.0.1:8000/about');
        } else {
            return request()->all();
        }
    }

    function log_out_user (Request $request) {
        $id = Auth::user()->id;
        Auth::logout();
        DB::table('users')
            ->where('id', $id)
            ->update(['remember_token' => NULL]);
        return redirect('http://127.0.0.1:8000/log_in');
    }
}
