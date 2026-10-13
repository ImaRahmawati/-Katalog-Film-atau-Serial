<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

// Alur navigasi: Beranda -> Daftar Item -> Detail Item
Route::get('/', [FilmController::class, 'beranda'])->name('beranda');
Route::get('/film', [FilmController::class, 'daftar'])->name('film.daftar');
Route::get('/film/{slug}', [FilmController::class, 'detail'])->name('film.detail');
