<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.event');
});


Route::get('/contact', function () {
    return view('pages.contact-us');
});