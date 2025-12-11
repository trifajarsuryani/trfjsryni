<?php
use App\Http\Controllers;

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');


Route::get('/berita/{slug}', [BeritaController::class, 'tampildata'])->name('berita.show');
   

Route::get('/aboutme', function () {
    return view('aboutme');
});
Route::get('/mahasiswa', [MahasiswaController::class, 'index'] )->name('mahasiswa');

Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'] )->name('tambahmahasiswa');

Route::post('/insertdata', [MahasiswaController::class, 'insertdata'] )->name('insertdata');

Route::get('/editmahasiswa/{id}', [MahasiswaController::class, 'edit'])->name('editmahasiswa');

Route::post('/editdata/{id}', [MahasiswaController::class, 'update'])->name('updatemahasiswa');

Route::get('/deletedatamahasiswa/{id}', [MahasiswaController::class, 'delete'])->name('deletedata');

use App\Http\Controllers\HapusController;

Route::delete('/mahasiswa/{id}', [HapusController::class, 'destroy'])->name('hapusmahasiswa');
use App\Http\Controllers\EditController;

Route::get('/mahasiswa/{id}/edit', [EditController::class, 'edit'])->name('editmahasiswa');
Route::put('/mahasiswa/{id}', [EditController::class, 'update'])->name('updatemahasiswa');

Route::get('/mahasiswa/{id}/edit', [EditController::class, 'edit'])->name('editmahasiswa');
Route::put('/mahasiswa/{id}', [EditController::class, 'update'])->name('updatemahasiswa');

