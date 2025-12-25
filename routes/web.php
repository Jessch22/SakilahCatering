<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about-us');
});

Route::get('/event', function () {
    return view('pages.event');
});

Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/layanan',[ServiceController::class, 'index'])->name('pages.services');

Route::get('/contact', function () {
    return view('pages.contact-us');
});

Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
});

Route::get('/sejarah', function () {
    return view('pages.sejarah');
});
