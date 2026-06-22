<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});