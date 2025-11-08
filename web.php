<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/tables', function () {
    return view('tables');
});