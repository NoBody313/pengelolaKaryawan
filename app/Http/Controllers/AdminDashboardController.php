<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Exports\PegawaiExport;
use App\Imports\PegawaiImport;
use Maatwebsite\Excel\Facades\Excel;

use Session;


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
        // $validator = Validator::make($request->all(), PegawaiData::$rules);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        PegawaiData::create($request->all());

        return redirect()->route('dashboard-admin')->with('success', 'Pegawai Data Berhasil Dibuat');
    }

    // Other Panel
    public function show()
    {
        $pegawaiDatas = PegawaiData::paginate(10); // Ubah angka 10 sesuai dengan jumlah data yang ingin ditampilkan per halaman

        return view('admin.list-data', compact('pegawaiDatas'));
    }

    // Tambahkan action edit
    public function edit($nik_admedika)
    {
        $pegawaiData = PegawaiData::find($nik_admedika);

        if (!$pegawaiData) {
            abort(404);
        }

        return view('admin.edit-data', ['pegawaiData' => $pegawaiData]);
    }

    // Tambahkan action update
    public function update(Request $request, $id)
    {
        $pegawaiData = PegawaiData::find($id);

        if (!$pegawaiData) {
            // Handle the case where the record is not found, for example, redirect to a 404 page
            abort(404);
        }

        // Update the data only if it exists
        $pegawaiData->update($request->all());

        return redirect()->route('dashboard-admin')->with('success', 'Data Pegawai berhasil diupdate.');
    }


    // Tambahkan action delete
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

        // Mendapatkan data yang diimpor
        $importedData = PegawaiData::where('urutan', '>', $lastUrutan)->get();

        // Menetapkan nilai urutan yang sesuai
        foreach ($importedData as $data) {
            $lastUrutan++;
            $data->urutan = $lastUrutan;
            $data->save();
        }

        return back();
    }
}
