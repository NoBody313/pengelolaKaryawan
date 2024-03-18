<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminEditDataController;
use App\Http\Controllers\AdminTambahDataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiEditDataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WilayahIndonesiaController;
use Illuminate\Support\Facades\Route;

// User Dashboard
Route::get('/pegawai/{nik_admedika}', [UserController::class, 'index'])->name('user-dashboard');
Route::get('/logout/{nik_admedika}', [UserController::class, 'logout'])->name('logout');

// Login Routes
Route::get('/', [LoginController::class, 'showForm'])->name('login.form');
Route::post('/cek-data', [LoginController::class, 'cekData'])->name('login.cekData');

// Admin Dashboard
Route::get('/admin/{nik_admedika}', [AdminDashboardController::class, 'index'])->name('dashboard-admin');
Route::get('/admin/{nik_admedika}/tambah-data', [AdminDashboardController::class, 'create'])->name('create-data-form');
Route::post('/admin/{nik_admedika}/store-data/', [AdminDashboardController::class, 'store'])->name('store-data-form');
Route::get('/admin/{nik_admedika}/list-data', [AdminDashboardController::class, 'show'])->name('list-data-karyawan');
Route::delete('/admin/{nik_admedika}/delete-data/{id}', [AdminDashboardController::class, 'destroy'])->name('delete-data-karyawan');
Route::get('/admin/{nik_admedika}/list-data/export_excel', [AdminDashboardController::class, 'export_excel'])->name('karyawan-export');
Route::post('/admin/{nik_admedika}/list-data/import_excel', [AdminDashboardController::class, 'import'])->name('import_excel');
Route::get('/admin/logout/{nik_admedika}', [AdminDashboardController::class, 'logout'])->name('logout');

Route::get('selectProv', [WilayahIndonesiaController::class, 'provinsi'])->name('provinsi.index');
Route::get('selectKab/{id}', [WilayahIndonesiaController::class, 'kabupaten']);
Route::get('selectKec/{id}', [WilayahIndonesiaController::class, 'kecamatan']);
Route::get('selectKel/{id}', [WilayahIndonesiaController::class, 'kelurahan']);

// Edit Data Admin
Route::get('/admin/{nik_admedika}/edit-data/{id}', [AdminEditDataController::class, 'index'])->name('edit-data-admin.index');
Route::get('/admin/{nik_admedika}/edit-data/{id}/data-pribadi', [AdminEditDataController::class, 'dataPribadi'])->name('edit-data-pribadi');
Route::post('admin/{nik_admedika}/edit-data/{id}/data-pribadi', [AdminEditDataController::class, 'updateDataPribadi'])->name('post-edit-data-pribadi');
Route::get('/admin/{nik_admedika}/edit-data/{id}/data-alamat', [AdminEditDataController::class, 'dataAlamat'])->name('edit-alamat');
Route::post('admin/{nik_admedika}/edit-data/{id}/data-alamat', [AdminEditDataController::class, 'updateAlamat'])->name('post-edit-alamat');
Route::get('/admin/{nik_admedika}/edit-data/{id}/data-status', [AdminEditDataController::class, 'dataStatus'])->name('edit-status');
Route::post('admin/{nik_admedika}/edit-data/{id}/data-status', [AdminEditDataController::class, 'updateStatus'])->name('post-edit-status');
Route::get('/admin/{nik_admedika}/edit-data/{id}/data-kontak', [AdminEditDataController::class, 'dataKontak'])->name('edit-kontak');
Route::post('admin/{nik_admedika}/edit-data/{id}/data-kontak', [AdminEditDataController::class, 'updateKontak'])->name('post-edit-kontak');

// Tambah Data Admin
Route::get('/admin/{nik_admedika}/tambah-data/data-pribadi', [AdminTambahDataController::class, 'createPribadi'])->name('tambah-data-pribadi');
Route::post('/admin/{nik_admedika}/tambah-data/data-pribadi', [AdminTambahDataController::class, 'storePribadi'])->name('store-tambah-data-pribadi');
Route::get('/admin/{nik_admedika}/tambah-data/data-alamat', [AdminTambahDataController::class, 'createAlamat'])->name('tambah-data-alamat');
Route::post('/admin/{nik_admedika}/tambah-data/data-alamat', [AdminTambahDataController::class, 'storeAlamat'])->name('store-tambah-data-alamat');
Route::get('/admin/{nik_admedika}/tambah-data/data-status', [AdminTambahDataController::class, 'createStatus'])->name('tambah-data-status');
Route::post('/admin/{nik_admedika}/tambah-data/data-status', [AdminTambahDataController::class, 'storeStatus'])->name('store-tambah-data-status');
Route::get('/admin/{nik_admedika}/tambah-data/data-kontak', [AdminTambahDataController::class, 'createKontak'])->name('tambah-data-kontak');
Route::post('/admin/{nik_admedika}/tambah-data/data-kontak', [AdminTambahDataController::class, 'storeKontak'])->name('store-tambah-data-kontak');

// Edit Data Pegawai
Route::get('/pegawai/{nik_admedika}/edit-data/data-pribadi', [PegawaiEditDataController::class, 'dataPribadi'])->name('edit-pegawai-data-pribadi');
Route::post('pegawai/{nik_admedika}/edit-data/data-pribadi', [PegawaiEditDataController::class, 'updateDataPribadi'])->name('post-pegawai-edit-data-pribadi');
Route::get('/pegawai/{nik_admedika}/edit-data/data-alamat', [PegawaiEditDataController::class, 'dataAlamat'])->name('edit-pegawai-alamat');
Route::post('pegawai/{nik_admedika}/edit-data/data-alamat', [PegawaiEditDataController::class, 'updateAlamat'])->name('post-pegawai-edit-alamat');
Route::get('/pegawai/{nik_admedika}/edit-data/data-status', [PegawaiEditDataController::class, 'dataStatus'])->name('edit-pegawai-status');
Route::post('pegawai/{nik_admedika}/edit-data/data-status', [PegawaiEditDataController::class, 'updateStatus'])->name('post-pegawai-edit-status');
Route::get('/pegawai/{nik_admedika}/edit-data/data-kontak', [PegawaiEditDataController::class, 'dataKontak'])->name('edit-pegawai-kontak');
Route::post('pegawai/{nik_admedika}/edit-data/data-kontak', [PegawaiEditDataController::class, 'updateKontak'])->name('post-pegawai-edit-kontak');
