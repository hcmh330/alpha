<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\user\ProfilController;

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
    return view('auth.login');
});

Route::get('/home', function () {
    return view('/home');
});

Route::get('/course', function () {
    return view('/course');
});

Route::get('/about', function () {
    return view('/about');
});

Route::get('/home', function () {
    return view('/home');
});

Auth::routes(["verify"=>true]);
// Route::get('/user/profil', [ProfilController::class, 'index'])->name('user.profil');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/user/profil', [App\Http\Controllers\user\ProfilController::class, 'index'])->name('user.profil')->middleware('auth');
