<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjukanPemesananController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenyetujuanController;
use App\Http\Controllers\Admin\TambahPemasananController;
use App\Http\Controllers\Admin\RiwayatPemesananController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ajukan-pemesanan', [AjukanPemesananController::class,'index'])
->middleware(['auth'])
->name('ajukan-pemesanan.index');
Route::get('/ajukan-pemesanan/show', [AjukanPemesananController::class,'show'])
->middleware(['auth'])
->name('ajukan-pemesanan.show');

Route::get('/pemesanan', [PemesananController::class,'index'])
->middleware(['auth'])
->name('pemesanan.index');

Route::get('/penyetujuan', [PenyetujuanController::class,'index'])
->middleware(['auth'])
->name('penyetujuan.index');

Route::get('/admin/tambah-pemesanan', [TambahPemasananController::class,'index'])
->middleware(['auth'])
->name('tambahPemesanan.index');
Route::get('/admin/tambah-pemesanan/show', [TambahPemasananController::class,'show'])
->middleware(['auth'])
->name('tambahPemesanan.show');
Route::get('/admin/tambah-pemesanan/edit', [TambahPemasananController::class,'edit'])
->middleware(['auth'])
->name('tambahPemesanan.edit');

Route::get('/admin/riwayat-pemesanan', [RiwayatPemesananController::class,'index'])
->middleware(['auth'])
->name('riwayatPemesanan.index');
Route::get('/admin/riwayat-pemesanan/show', [RiwayatPemesananController::class,'show'])
->middleware(['auth'])
->name('riwayatPemesanan.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
