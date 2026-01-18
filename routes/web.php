<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// panggil auth routes Breeze
require __DIR__.'/auth.php';

// Route publik
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    // jika route /dashboard belum ada
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // sebelumnya sudah ada route /home
    Route::get('/home', function () {
        return redirect()->route('dashboard');
    });

    // mahasiswa
    Route::resource('mahasiswa', MahasiswaController::class);
});
