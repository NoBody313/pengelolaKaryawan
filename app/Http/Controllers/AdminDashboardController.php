<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;
use App\Exports\PegawaiExport;
use App\Imports\PegawaiImport;
use App\Models\Provinsi;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class AdminDashboardController extends Controller
{
    public function index($nik_admedika)
    {
        if (!Session::has('admin')) {
            return view('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        return view('admin.dashboard', ['data' => $data]);
    }

    public function logout()
    {
        Session::forget('admin');
        Session::flush();
        auth()->logout();

        if (session_status() == PHP_SESSION_ACTIVE) {
            session_destroy();
        }

        return redirect('/');
    }

    // Tambah Data Form
    public function create($nik_admedika)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        return view('admin.tambah-data', ['nik_admedika' => $nik_admedika]);
    }

    public function store(Request $request)
    {
        PegawaiData::create($request->all());
        return redirect()->route('dashboard-admin')->with('success', 'Pegawai Data Berhasil Dibuat');
    }

    // Other Panel
    public function show($nik_admedika)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiDatas = PegawaiData::paginate(10);
        return view('admin.list-data', ['pegawaiDatas' => $pegawaiDatas, 'nik_admedika' => $nik_admedika, 'data' => $data]);
    }

    // Tambahkan action edit
    public function edit($id)
    {
        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        session()->put('provinsi', $pegawaiData->provinsi_ktp);
        $provinsiList = Provinsi::all();

        return view('admin.edit-data', ['provinsiList' => $provinsiList, 'pegawaiData' => $pegawaiData]);
    }

    public function update(Request $request, $id)
    {
        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        $pegawaiData->update($request->all());
        session()->remove('provinsi');
        return redirect()->route('dashboard-admin')->with('success', 'Data Pegawai berhasil diupdate.');
    }

    public function destroy($nik_admedika)
    {
        $pegawaiData = PegawaiData::find($nik_admedika);
        $pegawaiData->delete();

        return redirect()->route('list-data-karyawan')->with('success', 'Data Pegawai berhasil dihapus.');
    }

    public function export_excel()
    {
        return Excel::download(new PegawaiExport, 'dataPegawai.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        $lastUrutan = PegawaiData::max('urutan');

        Excel::import(new PegawaiImport, request()->file('file'));

        $importedData = PegawaiData::where('urutan', '>', $lastUrutan)->get();

        foreach ($importedData as $data) {
            $lastUrutan++;
            $data->urutan = $lastUrutan;
            $data->save();
        }

        return back();
    }
}
