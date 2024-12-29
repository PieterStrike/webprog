<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home2', function () {
    return view('home2');
})->name('home2');

Route::get('/populer', function () {
    return view('populer');
});

Route::get('/terbaru', function () {
    return view('terbaru');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
})-> name('login');

Route::post('/login', function () {
    return redirect()->route('home2');
});

Route::get ('/register', function () {
    return view('register');
});

Route::post('/register', function () {
    return redirect()->route('login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/forgot_password', function () {
    return view('forgot_password');
});
