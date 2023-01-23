<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FallbackController;

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
    return view('welcome');
});


Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::post('/postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'store'])->name('postsignup');

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/profile', function () {
    return view('profile.profile');
});

Route::fallback(FallbackController::class);