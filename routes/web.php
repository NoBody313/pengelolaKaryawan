<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\VerifikasiDataController;
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

// Admin Dashboard
Route::get('/admin', [AdminDashboardController::class, 'index'])->name('dashboard-admin');
Route::get('/admin/tambah-data', [AdminDashboardController::class, 'create'])->name('create-data-form');
Route::post('/admin/store-data', [AdminDashboardController::class, 'store'])->name('store-data-form');
Route::get('/admin/list-data', [AdminDashboardController::class, 'show'])->name('list-data-karyawan');
Route::get('/admin/edit-data/{id}', [AdminDashboardController::class, 'edit'])->name('edit-data-karyawan');
Route::put('/admin/update-data/{id}', [AdminDashboardController::class, 'update'])->name('update-data-karyawan');
Route::delete('/admin/delete-data/{nik_admedika}', [AdminDashboardController::class, 'destroy'])->name('delete-data-karyawan');

// User Dashboard
Route::get('/verifikasi-data', [VerifikasiDataController::class, 'index']);
