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

Route::get('/', function () {
    return view('welcome');
});

/*User Sign In and Sign Up*/
Route::match(array('GET','POST'),'/signin', [UserController::class, 'signin'])->name('signin');
Route::get('/signup', [UserController::class, 'signup'])->name('signup');
Route::post('/store', [UserController::class, 'store'])->name('store');

/*User Route After Sign In*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
