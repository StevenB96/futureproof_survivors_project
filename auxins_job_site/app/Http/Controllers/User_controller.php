<?php

namespace App\Http\Controllers;

use Validator;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\Hash;
use Illuminate\Http\Response;

class User_controller extends Controller {
    function create_user (Request $request) {
        // XSS protection.
        $request->forename = trim(htmlspecialchars($request->forename));
        $request->surname = trim(htmlspecialchars($request->surname));
        $request->email = trim(htmlspecialchars($request->email));
        $request->password = trim(htmlspecialchars($request->password));
        $request->password_confirm = trim(htmlspecialchars($request->password_confirm));
        // If email is invalid.
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL) == FALSE) {
            return (new Response('Registration failed because the "email" field value was invalid.', 401))
            ->header('Content-Type', 'status');
        }
        // If password quality is insufficient.
        elseif (  ((strlen($request->password) > 7) == FALSE)  ||  (preg_match("/[0-9]/", $request->password) == 0)  ||  (preg_match("/[A-Z]/", $request->password) == 0)  ) {
            return (new Response('Registration failed because the "password" field value did not contain a minimum of: eight characters, one digit and one capital letter.', 401))
            ->header('Content-Type', 'status');           
        }
        // If password does not match password_confirm.
        elseif ($request->password !== $request->password_confirm) {
            return (new Response('Registration failed because the "password" field value did not match the "password_confirm" field value.', 401))
            ->header('Content-Type', 'status');            
        }
        // If emaill already exists.
        elseif (DB::table('users')->where('email', '=', $request->email)->count() > 0) {
            return (new Response('Registration failed because the "email" field value already exists in the database.', 401))
            ->header('Content-Type', 'status');  
        }
        // Create user.
        else {
            $user = new User();
            $user->forename = $request->forename;
            $user->surname = $request->surname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('http://127.0.0.1:8000/log_in'); 
        }
    }

    function log_in_user (Request $request) {
        // XSS protection.
        $request->email = trim(htmlspecialchars($request->email));
        $request->password = trim(htmlspecialchars($request->password));
        // If email is invalid.
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL) == FALSE) {
            return (new Response('Login failed because the "email" field value was invalid.', 401))
            ->header('Content-Type', 'status');
        }
        // Attempt login.
        $credentials = array (
        'email' => $request->email,
        'password' => $request->password
        );
        $remember_me = ($request->remember_me === "on") ? true : false; 
        if (Auth::attempt($credentials, $remember_me)) {
            return redirect('http://127.0.0.1:8000/about');
        } else {
            return (new Response('Login failed because the credentials supplied were invalid.', 401))
            ->header('Content-Type', 'status');
        }
    }

    function log_out_user (Request $request) {
        $id = Auth::user()->id;
        Auth::logout();
        // If the current user ID exists in the database.
        if (DB::table('users')->where('id', $id)->get()->first()->id == TRUE) {
            DB::table('users')
                ->where('id', $id)
                ->update(['remember_token' => NULL]);
        }
        return redirect('http://127.0.0.1:8000/log_in');
    }
}
