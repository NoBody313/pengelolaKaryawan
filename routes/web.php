<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifikasiDataController;
use App\Http\Controllers\WilayahIndonesiaController;
use Illuminate\Auth\Events\Login;
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
// User Dashboard
Route::get('/pegawai/{nik_admedika}', [UserController::class, 'index'])->name('user-dashboard');
Route::get('/pegawai/edit-data/{nik_admedika}', [UserController::class, 'edit'])->name('edit-data');
Route::put('/pegawai/update-data/{nik_admedika}', [UserController::class, 'update'])->name('update-data');
Route::get('/logout/{nik_admedika}', [UserController::class, 'logout'])->name('logout');
Route::get('/verifikasi-data', [VerifikasiDataController::class, 'index']);

// Login Routes
Route::get('/', [LoginController::class, 'showForm'])->name('login.form');
Route::post('/cek-data', [LoginController::class, 'cekData'])->name('login.cekData');

// Admin Dashboard
Route::get('/admin/{nik_admedika}', [AdminDashboardController::class, 'index'])->name('dashboard-admin');
Route::get('/admin/{nik_admedika}/tambah-data', [AdminDashboardController::class, 'create'])->name('create-data-form');
Route::post('/admin/{nik_admedika}/store-data/', [AdminDashboardController::class, 'store'])->name('store-data-form');
Route::get('/admin/{nik_admedika}/list-data', [AdminDashboardController::class, 'show'])->name('list-data-karyawan');
Route::get('/admin/{nik_admedika}/edit-data/{id}', [AdminDashboardController::class, 'edit'])->name('edit-data-karyawan');
Route::put('/admin/{nik_admedika}/update-data/{id}', [AdminDashboardController::class, 'update'])->name('update-data-karyawan');
Route::delete('/admin/{nik_admedika}/delete-data/{id}', [AdminDashboardController::class, 'destroy'])->name('delete-data-karyawan');
Route::get('/admin/{nik_admedika}/list-data/export_excel', [AdminDashboardController::class, 'export_excel'])->name('karyawan-export');
Route::post('/admin/{nik_admedika}/list-data/import_excel', [AdminDashboardController::class, 'import'])->name('import_excel');
Route::get('/admin/logout/{nik_admedika}', [AdminDashboardController::class, 'logout'])->name('logout');

Route::get('selectProv', [WilayahIndonesiaController::class, 'provinsi'])->name('provinsi.index');
Route::get('selectKab/{id}', [WilayahIndonesiaController::class, 'kabupaten']);
Route::get('selectKec/{id}', [WilayahIndonesiaController::class, 'kecamatan']);
Route::get('selectKel/{id}', [WilayahIndonesiaController::class, 'kelurahan']);
