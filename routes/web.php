<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('pages.home');

Route::get('/about-us', [AboutController::class, 'index'])->name('pages.about-us');

Route::get('/event', [EventController::class, 'index'])->name('pages.event');

Route::get('/menu', [MenuController::class, 'index'])->name('pages.menu');

Route::get('/layanan', function () {
    return view('pages.service');
});

Route::get('/contact', [ContactController::class, 'index'])->name('pages.contact-us');

Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
});

Route::get('/sejarah', function () {
    return view('pages.sejarah');
});