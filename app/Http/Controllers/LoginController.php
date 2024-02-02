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
        if (Session::has('pegawai')) {
            $nik_admedika = Session::get('pegawai');
            return redirect("/user/{$nik_admedika}");
        } elseif (Session::has('admin')) {
            $nik_admedika = Session::get('admin');
            return redirect("/admin/{$nik_admedika}");
        } else {
            return view('login');
        }
    }

    public function cekData(Request $request)
    {
        $nik_admedika = $request->input('nik_admedika');
        $tanggal_lahir = $request->input('tanggal_lahir');

        $request->validate([
            'nik_admedika' => 'required',
            'tanggal_lahir' => 'required',
            'h-captcha-response' => ['hcaptcha'],
        ]);

        $user = PegawaiData::where('nik_admedika', $nik_admedika)
            ->where('tanggal_lahir', $tanggal_lahir)
            ->first();

        if ($user && $user->role === 'pegawai') {
            Session::put('pegawai', $nik_admedika);
            return redirect("/user/{$nik_admedika}");
        } elseif ($user && $user->role === 'admin') {
            Session::put('admin', $nik_admedika);
            return redirect("/admin/{$nik_admedika}");
        } else {
            $pesanError = 'Username atau password salah';
            return redirect()->back()->with('pesanError', $pesanError);
        }
    }
}
