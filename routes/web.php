<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about-us');
});

Route::get('/event', function () {
    return view('pages.event');
});

Route::get('/menu', [MenuController::class, 'index'])->name('pages.menu');

Route::get('/layanan', function () {
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