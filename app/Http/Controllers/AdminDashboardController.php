<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;
use App\Exports\PegawaiExport;
use App\Imports\PegawaiImport;
use App\Models\Provinsi;
use Maatwebsite\Excel\Facades\Excel;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    // Tambah Data Form
    public function create()
    {
        return view('admin.tambah-data');
    }

    public function store(Request $request)
    {
        PegawaiData::create($request->all());
        return redirect()->route('dashboard-admin')->with('success', 'Pegawai Data Berhasil Dibuat');
    }

    // Other Panel
    public function show()
    {
        $pegawaiDatas = PegawaiData::paginate(10);

        return view('admin.list-data', compact('pegawaiDatas'));
    }

    // Tambahkan action edit
    // In your controller

    public function edit($id)
    {
        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        // Store the selected provinsi in session
        session()->put('provinsi', $pegawaiData->provinsi_ktp);

        $provinsiList = Provinsi::all();

        return view('admin.edit-data', ['provinsiList' => $provinsiList, 'pegawaiData' => $pegawaiData]);
    }

    // Tambahkan action update
    public function update(Request $request, $id)
    {
        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            abort(404);
        }

        $pegawaiData->update($request->all());

        // Remove the provinsi from session after update
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
