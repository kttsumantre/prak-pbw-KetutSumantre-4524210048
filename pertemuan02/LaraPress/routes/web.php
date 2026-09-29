<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about'); // Kita akan menampilkan view bernama 'about'
});

Route::get('/kontak', function () {
    return view('Kontak'); // Kita akan menampilkan view bernama 'Kontak'
});