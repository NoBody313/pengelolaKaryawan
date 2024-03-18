<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminTambahDataController extends Controller
{
    public function createPribadi($nik_admedika)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        return view('admin.form-tambah-admin.dataPribadi', ['data' => $data]);
    }

    public function storePribadi(Request $request)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $nik_admedika = Session::get('admin');

        Session::put('temp_pribadi',  $request->all());
        return redirect()->route('tambah-data-alamat', ['nik_admedika' => $nik_admedika]);
    }

    public function createAlamat($nik_admedika)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $dataPribadi = Session::get('temp_pribadi');

        if (!$dataPribadi) {
            return redirect()->route('tambah-data-pribadi', ['nik_admedika' => $nik_admedika]);
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        return view('admin.form-tambah-admin.alamat', ['data' => $data]);
    }

    public function storeAlamat(Request $request)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $nik_admedika = Session::get('admin');

        Session::put('temp_alamat', $request->all());
        return redirect()->route('tambah-data-status', ['nik_admedika' => $nik_admedika]);
    }

    public function createStatus($nik_admedika)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        return view('admin.form-tambah-admin.statusPendidikan', ['data' => $data]);
    }

    public function storeStatus(Request $request)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $nik_admedika = Session::get('admin');

        Session::put('temp_status',  $request->all());
        return redirect()->route('tambah-data-kontak', ['nik_admedika' => $nik_admedika]);
    }

    public function createKontak($nik_admedika)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        return view('admin.form-tambah-admin.kontak', ['data' => $data]);
    }

    public function storeKontak(Request $request)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $nik_admedika = Session::get('admin');
        Session::put('temp_kontak',  $request->all());

        $dataPribadi = Session::get('temp_pribadi');
        $dataAlamat = Session::get('temp_alamat');
        $dataStatus = Session::get('temp_status');
        $dataKontak = Session::get('temp_kontak');

        if (!$dataPribadi || !$dataAlamat || !$dataStatus || !$dataKontak) {
            return redirect()->route('tambah-data-pribadi', ['nik_admedika' => $nik_admedika]);
        }

        $mergedData = array_merge($dataPribadi, $dataAlamat, $dataStatus, $dataKontak);

        PegawaiData::create($mergedData);

        Session::forget('temp_pribadi');
        Session::forget('temp_alamat');
        Session::forget('temp_status');
        Session::forget('temp_kontak');

        return redirect()->route('list-data-karyawan', ['nik_admedika' => $nik_admedika]);
    }
}
