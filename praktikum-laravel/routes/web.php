<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar/mahasiswa', [\App\Http\Controllers\MahasiswaController::class, 'index']);

Route::get('/kalkulator/segitiga', [\App\Http\Controllers\KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga/proses', [\App\Http\Controllers\KalkulatorController::class, 'prosesSegitiga']);
