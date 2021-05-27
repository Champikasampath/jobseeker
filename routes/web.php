<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'displayRegistrationForm'])->name('displayRegistrationForm');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/candidate', [\App\Http\Controllers\LoginController::class, 'candidate'])->name('candidate');
Route::get('/employee', [\App\Http\Controllers\LoginController::class, 'employee'])->name('employee');