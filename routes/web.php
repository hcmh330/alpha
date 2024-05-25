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

Route::get('/teacher', function () {
    return view('/teacher');
});

Route::get('/blog', function () {
    return view('/blog');
});

Route::get('/review', function () {
    return view('/review');
});

Route::get('/evaliation', function () {
    return view('/evaliation');
});

Auth::routes(["verify"=>true]);
// Route::get('/user/profil', [ProfilController::class, 'index'])->name('user.profil');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/user/profil', [App\Http\Controllers\user\ProfilController::class, 'index'])->name('user.profil')->middleware('auth');


// routes/web.php


use App\Http\Controllers\TestController;

Route::get('/evaluation', [TestController::class, 'showTestForm'])->name('evaluation.form');
Route::post('/evaluation', [TestController::class, 'submitTestForm'])->name('evaluation.submit');
Route::get('/evaluation/result', [TestController::class, 'showResult'])->name('evaluation.result');
