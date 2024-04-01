<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register');



Route::get('/wallet', function () {
    return view('auth.wallet');
})->name('wallet');

// Route::get()->name('reg');