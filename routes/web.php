<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.event');
});

Route::get('/menu', function () {
    return view('pages.menu');
});