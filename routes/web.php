<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});

Route::get('/signup', function () {
    return view('web.registration');
})->name('signup');


Route::get('/wallet', function () {
    return view('web.wallet');
})->name('wallet');

// Route::get()->name('reg');