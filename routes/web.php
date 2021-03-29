<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarPesertaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('landingPage');

Route::get('daftar', [DaftarPesertaController::class, 'index'])->name('daftar');
Route::get('list-daftar', [DaftarPesertaController::class, 'list_daftar'])->name('listDaftar');
Route::get('list-daftar/tampil/{id}', [DaftarPesertaController::class, 'daftar_hasil'])->name('daftarHasil');
Route::get('list-daftar/ubah/{id}', [DaftarPesertaController::class, 'daftar_edit'])->name('daftarEdit');
Route::post('daftar-update/{id}', [DaftarPesertaController::class, 'update'])->name('daftarUpdate');
Route::get('list-daftar/hapus/{id}', [DaftarPesertaController::class, 'destroy'])->name('daftarHapus');
Route::get('laporan-pdf/print/{id}', [DaftarPesertaController::class, 'generatePDF'])->name('laporanPdf');
Route::resource('daftars', DaftarPesertaController::class);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
