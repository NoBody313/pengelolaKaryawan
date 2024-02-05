<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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
        $no_ktp = $request->input('no_ktp');

        $request->validate([
            'nik_admedika' => 'required',
            'tanggal_lahir' => 'required',
            'no_ktp' => 'required',
            'h-captcha-response' => ['required' , 'hcaptcha'],
        ]);

        $user = PegawaiData::where('nik_admedika', $nik_admedika)
            ->where('tanggal_lahir', $tanggal_lahir)
            ->where('no_ktp', $no_ktp)
            ->first();

        if ($user && ($user->role === 'pegawai' || $user->role === 'admin')) {
            Session::put($user->role, $nik_admedika);
            Cache::forget("login_attempts:{$nik_admedika}");
            $role = ($user->role === 'pegawai') ? 'pegawai' : 'admin';
            return redirect("/{$role}/{$nik_admedika}");
        }

        $attempts = Cache::get("login_attempts:{$nik_admedika}", 0);
        $attempts++;

        if ($attempts >= 3) {
            Cache::put("softlock:{$nik_admedika}", now()->addMinutes(1));
            $lockExpiration = Cache::get("softlock:{$nik_admedika}");
            $currentTime = now();

            if ($currentTime <= $lockExpiration) {
                $timeLeft = $lockExpiration->diffInSeconds($currentTime);
                $timeLeft = max(0, $timeLeft);

                return redirect()->back()->with('pesanError', 'Akun Anda terkunci sementara. Silakan coba lagi nanti.')->with('timeLeft', $timeLeft);
            } else {
                Cache::forget("softlock:{$nik_admedika}");
                Cache::forget("login_attempts:{$nik_admedika}");
            }
        } else {
            $pesanError = 'NIK Admedika atau Tanggal Lahir atau No KTP anda salah';
            Cache::put("login_attempts:{$nik_admedika}", $attempts, now()->addMinutes(1));
        }

        return redirect()->back()->with('pesanError', $pesanError);
    }
}
