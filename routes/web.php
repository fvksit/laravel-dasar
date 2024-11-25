<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthenticationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// route resource book
Route::resource('/books', BookController::class);


Route::redirect('/', '/dashboard');

// route resource authentication
Route::get('/register', [AuthenticationController::class, 'register'])->name('register');
Route::post('/store', [AuthenticationController::class, 'store'])->name('store');
Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthenticationController::class, 'authenticate'])->name('authenticate');
Route::get('/dashboard', [AuthenticationController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
