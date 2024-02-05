<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showForm()
    {
        if (Session::has('pegawai')) {
            $nik_admedika = Session::get('pegawai');
            return redirect("/pegawai/{$nik_admedika}");
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
<<<<<<< Updated upstream
            'h-captcha-response' => ['hcaptcha'],
=======
            'no_ktp' => 'required',
            'h-captcha-response' => ['required' , 'hcaptcha'],
>>>>>>> Stashed changes
        ]);

        $user = PegawaiData::where('nik_admedika', $nik_admedika)
            ->where('tanggal_lahir', $tanggal_lahir)
            ->first();

        if ($user && $user->role === 'pegawai') {
            Session::put('pegawai', $nik_admedika);

            return redirect()->route('verification.form');
        } elseif ($user && $user->role === 'admin') {
            Session::put('admin', $nik_admedika);

            return redirect()->route('verification.form');
        } else {
            $pesanError = 'Username atau password salah';
            return redirect()->back()->with('pesanError', $pesanError);
        }
    }

    public function showVerificationForm()
    {
        if (Session::has('pegawai') || Session::has('admin')) {
            $isVerified = Session::get('isVerified', false);

            if (!$isVerified) {
                return view('verification');
            } else {
                $role = Session::get('pegawai') ? 'pegawai' : 'admin';
                $nik_admedika = Session::get($role);

                return redirect("/{$role}/{$nik_admedika}")->with('pesanError', 'Anda sudah diverifikasi sebelumnya.');
            }
        } else {
            return redirect('/')->with('pesanError', 'Silakan login terlebih dahulu.');
        }
    }

    public function verifyKTP(Request $request)
    {
        if (Session::has('pegawai') || Session::has('admin')) {
            $nik_admedika = Session::get('pegawai') ?? Session::get('admin');

            $request->validate([
                'ktp_start' => 'required|digits:4',
                'ktp_end' => 'required|digits:4',
            ]);

            $pegawaiData = PegawaiData::where('nik_admedika', $nik_admedika)->first();

            if ($pegawaiData) {
                $noKTP = $pegawaiData->no_ktp;

                $inputKTP = substr($noKTP, 0, 4) . substr($noKTP, -4);

                if ($inputKTP === $request->input('ktp_start') . $request->input('ktp_end')) {
                    Session::put('isVerified', true);

                    $role = ($pegawaiData->role === 'pegawai') ? 'pegawai' : 'admin';
                    return redirect("/{$role}/{$nik_admedika}")->with('success', 'Verifikasi KTP berhasil!');
                } else {
                    return redirect()->back()->with('pesanError', 'Verifikasi KTP gagal. Nomor KTP tidak cocok.');
                }
            } else {
                return redirect()->back()->with('pesanError', 'Data Pegawai tidak ditemukan.');
            }
        } else {
            return redirect('/')->with('pesanError', 'Silakan login terlebih dahulu.');
        }
    }
}
