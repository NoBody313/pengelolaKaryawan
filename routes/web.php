<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminEditDataController;
use App\Http\Controllers\AdminTambahDataController;
use App\Http\Controllers\Auth\PulseLoginController;
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
Route::get('/admin/logout/{nik_admedika}', [AdminDashboardController::class, 'logout'])->name('admin.logout');

Route::get('selectProv', [WilayahIndonesiaController::class, 'provinsi'])->name('provinsi.index');
Route::get('selectKab/{id}', [WilayahIndonesiaController::class, 'kabupaten']);
Route::get('selectKec/{id}', [WilayahIndonesiaController::class, 'kecamatan']);
Route::get('selectKel/{id}', [WilayahIndonesiaController::class, 'kelurahan']);

// Edit Data Admin
Route::get('/admin/{nik_admedika}/edit-data/{id}', [AdminEditDataController::class, 'index'])->name('edit-data-admin.index');
Route::get('/admin/{nik_admedika}/edit-data/{id}/data-pribadi', [AdminEditDataController::class, 'dataPribadi'])->name('edit-data-pribadi');
Route::post('admin/{nik_admedika}/edit-data/{id}/data-pribadi', [AdminEditDataController::class, 'updateDataPribadi'])->name('post-edit-data-pribadi');
Route::get('/admin/{nik_admedika}/edit-data/{id}/data-alamat-ktp', [AdminEditDataController::class, 'dataAlamatKTP'])->name('edit-alamat-ktp');
Route::post('admin/{nik_admedika}/edit-data/{id}/data-alamat-ktp', [AdminEditDataController::class, 'updateAlamatKTP'])->name('post-edit-alamat-ktp');
Route::get('/admin/{nik_admedika}/edit-data/{id}/data-alamat-domisili', [AdminEditDataController::class, 'dataAlamatDomisili'])->name('edit-alamat-domisili');
Route::post('admin/{nik_admedika}/edit-data/{id}/data-alamat-domisili', [AdminEditDataController::class, 'updateAlamatDomisili'])->name('post-edit-alamat-domisili');
Route::get('/admin/{nik_admedika}/edit-data/{id}/data-status', [AdminEditDataController::class, 'dataStatus'])->name('edit-status');
Route::post('admin/{nik_admedika}/edit-data/{id}/data-status', [AdminEditDataController::class, 'updateStatus'])->name('post-edit-status');
Route::get('/admin/{nik_admedika}/edit-data/{id}/data-kontak', [AdminEditDataController::class, 'dataKontak'])->name('edit-kontak');
Route::post('admin/{nik_admedika}/edit-data/{id}/data-kontak', [AdminEditDataController::class, 'updateKontak'])->name('post-edit-kontak');

// Tambah Data Admin
Route::get('/admin/{nik_admedika}/tambah-data/data-pribadi', [AdminTambahDataController::class, 'createPribadi'])->name('tambah-data-pribadi');
Route::post('/admin/{nik_admedika}/tambah-data/data-pribadi', [AdminTambahDataController::class, 'storePribadi'])->name('store-tambah-data-pribadi');
Route::get('/admin/{nik_admedika}/tambah-data/data-alamat-ktp', [AdminTambahDataController::class, 'createAlamatKTP'])->name('tambah-data-alamat-ktp');
Route::post('/admin/{nik_admedika}/tambah-data/data-alamat-ktp', [AdminTambahDataController::class, 'storeAlamatKTP'])->name('store-tambah-data-alamat-ktp');
Route::get('/admin/{nik_admedika}/tambah-data/data-alamat-domisili', [AdminTambahDataController::class, 'createAlamatDomisili'])->name('tambah-data-alamat-domisili');
Route::post('/admin/{nik_admedika}/tambah-data/data-alamat-domisili', [AdminTambahDataController::class, 'storeAlamatDomisili'])->name('store-tambah-data-alamat-domisili');
Route::get('/admin/{nik_admedika}/tambah-data/data-status', [AdminTambahDataController::class, 'createStatus'])->name('tambah-data-status');
Route::post('/admin/{nik_admedika}/tambah-data/data-status', [AdminTambahDataController::class, 'storeStatus'])->name('store-tambah-data-status');
Route::get('/admin/{nik_admedika}/tambah-data/data-kontak', [AdminTambahDataController::class, 'createKontak'])->name('tambah-data-kontak');
Route::post('/admin/{nik_admedika}/tambah-data/data-kontak', [AdminTambahDataController::class, 'storeKontak'])->name('store-tambah-data-kontak');

// Edit Data Pegawai
Route::get('/pegawai/{nik_admedika}/edit-data/data-pribadi', [PegawaiEditDataController::class, 'dataPribadi'])->name('edit-pegawai-data-pribadi');
Route::post('pegawai/{nik_admedika}/edit-data/data-pribadi', [PegawaiEditDataController::class, 'updateDataPribadi'])->name('post-pegawai-edit-data-pribadi');
Route::get('/pegawai/{nik_admedika}/edit-data/data-alamat-ktp', [PegawaiEditDataController::class, 'dataAlamatKTP'])->name('edit-pegawai-alamat-ktp');
Route::post('pegawai/{nik_admedika}/edit-data/data-alamat-ktp', [PegawaiEditDataController::class, 'updateAlamatKTP'])->name('post-pegawai-edit-alamat-ktp');
Route::get('/pegawai/{nik_admedika}/edit-data/data-alamat-domisili', [PegawaiEditDataController::class, 'dataAlamatDomisili'])->name('edit-pegawai-alamat-domisili');
Route::post('pegawai/{nik_admedika}/edit-data/data-alamat-domisili', [PegawaiEditDataController::class, 'updateAlamatDomisili'])->name('post-pegawai-edit-alamat-domisili');
Route::get('/pegawai/{nik_admedika}/edit-data/data-status', [PegawaiEditDataController::class, 'dataStatus'])->name('edit-pegawai-status');
Route::post('pegawai/{nik_admedika}/edit-data/data-status', [PegawaiEditDataController::class, 'updateStatus'])->name('post-pegawai-edit-status');
Route::get('/pegawai/{nik_admedika}/edit-data/data-kontak', [PegawaiEditDataController::class, 'dataKontak'])->name('edit-pegawai-kontak');
Route::post('pegawai/{nik_admedika}/edit-data/data-kontak', [PegawaiEditDataController::class, 'updateKontak'])->name('post-pegawai-edit-kontak');

Route::get('/login', [PulseLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PulseLoginController::class, 'login']);
Route::post('/logout', [PulseLoginController::class, 'logout'])->name('logout.pulse');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PulseLoginController::class, 'dashboard'])->name('auth.dashboard');
});
