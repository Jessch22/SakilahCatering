<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('pages.home');

Route::get('/about-us', function () {
    return view('pages.about-us');
});

Route::get('/event', function () {
    return view('pages.event');
});

Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/contact', function () {
    return view('pages.contact-us');
});

Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
});

Route::get('/sejarah', function () {
    return view('pages.sejarah');
});