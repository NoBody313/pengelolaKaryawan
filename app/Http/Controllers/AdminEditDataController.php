<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminEditDataController extends Controller
{
    public function dataPribadi($nik_admedika, $id)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        return view('admin.form-edit-admin.dataPribadi', compact('data', 'pegawaiData'));
    }

    public function updateDataPribadi(Request $request, $nik_admedika, $id)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        $pegawaiData->update($request->all());

        return redirect()->route('edit-alamat-ktp', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]);
    }

    public function dataAlamatKTP($nik_admedika, $id)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        session()->put('provinsi', $pegawaiData->provinsi_ktp);
        $provinsiList = Provinsi::all();

        return view('admin.form-edit-admin.alamatKTP', compact('provinsiList', 'pegawaiData', 'data'));
    }

    public function updateAlamatKTP(Request $request, $nik_admedika, $id)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        $pegawaiData->update($request->all());
        session()->remove('provinsi');

        return redirect()->route('edit-alamat-domisili', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]);
    }

    public function dataAlamatDomisili($nik_admedika, $id)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        session()->put('provinsi', $pegawaiData->provinsi_ktp);
        $provinsiList = Provinsi::all();

        return view('admin.form-edit-admin.alamatDomisili', compact('provinsiList', 'pegawaiData', 'data'));
    }

    public function updateAlamatDomisili(Request $request, $nik_admedika, $id)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        $pegawaiData->update($request->all());
        session()->remove('provinsi');

        return redirect()->route('edit-status', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]);
    }

    public function dataStatus($nik_admedika, $id)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        return view('admin.form-edit-admin.statusPendidikan', compact('data', 'pegawaiData'));
    }

    public function updateStatus(Request $request, $nik_admedika, $id)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        $pegawaiData->update($request->all());

        return redirect()->route('edit-kontak', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]);
    }

    public function dataKontak($nik_admedika, $id)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        return view('admin.form-edit-admin.kontak', compact('data', 'pegawaiData'));
    }

    public function updateKontak(Request $request, $nik_admedika, $id)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        $pegawaiData->update($request->all());

        return redirect()->route('list-data-karyawan', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]);
    }
}
