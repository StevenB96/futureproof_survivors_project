<?php

use Illuminate\Support\Facades\Route;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dcv_builder', function () {
    return view('dcv_builder');
});

Route::get('/job_coaching', function () {
    return view('job_coaching');
});

Route::post('/user/create', 'User_controller@create_user');

Route::get('/user/login', 'User_controller@login_user');
