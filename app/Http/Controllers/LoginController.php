<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showForm()
    {
        if (Session::has('pegawai_data_' . request('nik_admedika'))) {
            return redirect()->route('user-dashboard', ['nik_admedika' => request('nik_admedika')]);
        }
        return view('login');
    }

    public function cekData(Request $request)
    {
        $nikAdmedika = $request->input('nik_admedika');
        $tanggalLahir = $request->input('tanggal_lahir');

        $data = PegawaiData::where('nik_admedika', $nikAdmedika)
            ->where('tanggal_lahir', $tanggalLahir)
            ->first();

        if ($data) {
            $sessionKey = 'pegawai_data_' . $data->nik_admedika;

            Session::put($sessionKey, $data);
            return $this->redirectToUserDashboard($data->nik_admedika);
        } else {
            return redirect('/')->with('message', 'Data tidak ditemukan');
        }
    }

    protected function redirectToUserDashboard($nik_admedika): RedirectResponse
    {
        return redirect()->route('user-dashboard', ['nik_admedika' => $nik_admedika]);
    }
}
