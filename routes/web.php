<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\user\ProfilController;
use App\Http\Controllers\TestController;

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

// Public routes
Route::get('/testhomepage', function () {
    return view('/testhomepage');
});

Route::get('/', function () {
    return view('auth.login')->middleware('guest');
});

Route::get('/home', function () {
    return view('/home');
});
Route::get('/', function () {
    return view('/home');
});
Route::get('/', function () {
    return view('/login');
});

Route::get('/course', function () {
    return view('/course');
});

Route::get('/about', function () {
    return view('/about');
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

// Auth routes
Auth::routes(['verify' => true]);

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/user/profil', [ProfilController::class, 'index'])->name('user.profil');

    Route::get('/evaluation', [TestController::class, 'showTestForm'])->name('evaluation.form');
    Route::post('/evaluation', [TestController::class, 'submitTestForm'])->name('evaluation.submit');
    Route::get('/evaluation/result', [TestController::class, 'showResult'])->name('evaluation.result');

    Route::get('/test', [TestController::class, 'showTestForm'])->name('evaluation.form');
    Route::post('/test', [TestController::class, 'submitTestForm'])->name('evaluation.submit');
    Route::get('/result', [TestController::class, 'showResult'])->name('evaluation.result');
});
Route::get('/', function () {
    return view('auth.login');
});