<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showForm()
    {
        // Jika sudah ada sesi aktif, redirect ke halaman yang sesuai
        if (Session::has('pegawai') || Session::has('admin')) {
            // Gantilah {nik_admedika} dengan nilai sesuai yang sesuai dengan kebutuhan Anda
            $nik_admedika = Session::get('pegawai') ?? Session::get('admin');
            return redirect("/user/{$nik_admedika}");
        }
        return view('login');
    }

    public function cekData(Request $request)
    {
        $nik_admedika = $request->input('nik_admedika');
        $tanggal_lahir = $request->input('tanggal_lahir');

        $user = PegawaiData::where('nik_admedika', $nik_admedika)
            ->where('tanggal_lahir', $tanggal_lahir)
            ->first();

        if ($user && $user->role === 'pegawai') {
            Session::put('pegawai', $nik_admedika); // Menggunakan sesi Laravel
            return redirect("/user/{$nik_admedika}");
        } elseif ($user && $user->role === 'admin') {
            Session::put('admin', $nik_admedika); // Menggunakan sesi Laravel
            return redirect("/admin/{$nik_admedika}");
        } else {
            // Otentikasi gagal, mungkin tampilkan pesan kesalahan atau atur variabel sesuai kebutuhan
            $pesanError = 'Username atau password salah';
            return redirect()->back()->with('pesanError', $pesanError);
        }
    }
}
