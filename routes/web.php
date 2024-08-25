<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('Halaman Login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logOut']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('IsLogin')->name('dashboard');

Route::get('/guru', function () {
    return view('pages.guru');
})->middleware('IsLogin');

Route::get('/siswa', function () {
    return view('pages.siswa');
})->middleware('IsLogin');
