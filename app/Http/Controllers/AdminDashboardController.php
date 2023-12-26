<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;
use App\Exports\PegawaiExport;
use App\Imports\PegawaiImport;
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
        request()->validate([
            'nik_admedika' => 'required',
            'nik_tg' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'kota_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'tahun_lahir' => 'required',
            'no_ktp' => 'required',
            'alamat_ktp' => 'required',
            'provinsi_ktp' => 'required',
            'kab_kota_ktp' => 'required',
            'kec_ktp' => 'required',
            'kel_ktp' => 'required',
            'kodepos_ktp' => 'required',
            'alamat_domisili' => 'required',
            'provinsi_domisili' => 'required',
            'kab_kota_domisili' => 'required',
            'kec_domisili' => 'required',
            'kel_domisili' => 'required',
            'kodepos_domisili' => 'required',
            'status_pernikahan' => 'required',
            'tanggal_pernikahan' => 'required',
            'jumlah_anak' => 'required',
            'pendidikan_terakhir' => 'required',
            'jurusan_pendidikan_terakhir' => 'required',
            'nama_institusi' => 'required',
            'kota_institusi' => 'required',
            'lulus_thn_pendidikan_terakhir' => 'required',
            'email_pribadi' => 'required',
            'no_hp_tsel' => 'required',
            'no_hp_nontsel' => 'required',
            'nama_kontak_emergency' => 'required',
            'no_hp_emergency' => 'required',
            'hubungan_kontak_emergency' => 'required',
            'nama_ibu' => 'required',
        ]);

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
            abort(404);
        }

        $pegawaiData->update($request->all());

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
