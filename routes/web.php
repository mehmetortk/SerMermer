<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/ev', function () {
    return view('ev-dekorasyon');
});
Route::get('/login', function () {
    return view('login');
});
Route::Post('/login', [UserController::class, 'Register']);
Route::get('/register', function () {
    return view('register');
});
Route::Post('/index', [UserController::class, 'Login']);

Route::get('/index', function () {
    return view('index');
});
Route::get('/hakkımızda', function () {
    return view('hakkımızda');
});
Route::get('/verone', [UserController::class, 'getData']);

Route::get('/sepet', function () {
    return view('sepet');
});
Route::get('/mutfak', function () {
    return view('mutfak');
});
Route::get('/banyo', function () {
    return view('banyo');
});
