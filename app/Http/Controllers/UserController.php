<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index($nik_admedika)
    {
        // Periksa apakah sesi pegawai atau admin aktif
        if (!Session::has('pegawai')) {
            // Jika tidak aktif, redirect ke halaman login atau halaman lain
            return redirect('/'); // Gantilah dengan URL yang sesuai
        }

        // Ambil data pengguna dari sesi atau database sesuai kebutuhan
        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        // Pastikan data ditemukan sebelum menampilkan halaman
        if (!$data) {
            abort(404); // Atau tampilkan halaman error 404
        }

        return view('user.dashboard-user', ['data' => $data]);
    }

    public function logout()
    {
        // Hapus data sesuai dengan kebutuhan
        Session::forget('pegawai');

        // Hancurkan sesi
        Session::flush();

        // Lakukan logout menggunakan Laravel Auth
        auth()->logout();

        // Hancurkan sesi PHP secara manual
        if (session_status() == PHP_SESSION_ACTIVE) {
            session_destroy();
        }

        return redirect('/');
    }

    // Tambahkan action edit
    public function edit($nik_admedika)
    {
        // Periksa apakah sesi pegawai atau admin aktif
        if (!Session::has('pegawai') && !Session::has('admin')) {
            // Jika tidak aktif, redirect ke halaman login atau halaman lain
            return redirect('/'); // Gantilah dengan URL yang sesuai
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        return view('user.user-edit-data', ['pegawaiData' => $data]);
    }

    // Tambahkan action update
    public function update(Request $request, $nik_admedika)
    {
        // Periksa apakah sesi pegawai atau admin aktif
        if (!Session::has('pegawai') && !Session::has('admin')) {
            // Jika tidak aktif, redirect ke halaman login atau halaman lain
            return redirect('/'); // Gantilah dengan URL yang sesuai
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        // Update the data with the validated request
        $data->update($request->all());

        return redirect()->route('user-dashboard', ['nik_admedika' => $nik_admedika])->with('success', 'Data Pegawai berhasil diupdate.');
    }
}
