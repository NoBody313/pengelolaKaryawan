<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PegawaiEditDataController extends Controller
{
    public function dataPribadi($nik_admedika)
    {
        if (!Session::has('pegawai')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        return view('user.form-liat-user.dataPribadi', compact('data'));
    }

    public function updateDataPribadi(Request $request, $nik_admedika)
    {
        if (!Session::has('pegawai')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $data->update($request->all());
        return redirect()->route('edit-pegawai-alamat', ['nik_admedika' => $data->nik_admedika]);
    }

    public function dataAlamat($nik_admedika)
    {
        if (!Session::has('pegawai')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        session()->put('provinsi', $data->provinsi_ktp);
        $provinsiList = Provinsi::all();

        return view('user.form-liat-user.alamat', compact('provinsiList', 'data'));
    }

    public function updateAlamat(Request $request, $nik_admedika)
    {
        if (!Session::has('pegawai')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $data->update($request->all());
        session()->remove('provinsi');

        return redirect()->route('edit-pegawai-status', ['nik_admedika' => $data->nik_admedika]);
    }

    public function dataStatus($nik_admedika)
    {
        if (!Session::has('pegawai')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        return view('user.form-liat-user.statusPendidikan', compact('data'));
    }

    public function updateStatus(Request $request, $nik_admedika)
    {
        if (!Session::has('pegawai')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $data->update($request->all());

        return redirect()->route('edit-pegawai-kontak', ['nik_admedika' => $data->nik_admedika]);
    }

    public function dataKontak($nik_admedika)
    {
        if (!Session::has('pegawai')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        return view('user.form-liat-user.kontak', compact('data'));
    }

    public function updateKontak(Request $request, $nik_admedika)
    {
        if (!Session::has('pegawai')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $data->update($request->all());

        return redirect()->route('user-dashboard', ['nik_admedika' => $data->nik_admedika]);
    }
}
