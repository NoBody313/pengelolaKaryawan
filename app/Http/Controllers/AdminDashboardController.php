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

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        return view('admin.tambah-data', ['data' => $data]);
    }

    public function store(Request $request)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $nik_admedika = Session::get('admin');

        PegawaiData::create($request->all());
        return redirect()->route('dashboard-admin', ['nik_admedika' => $nik_admedika])->with('success', 'Pegawai Data Berhasil Dibuat');
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

        $search_param = request()->input('query');

        request()->validate([
            'query' => 'nullable|string|max:50',
        ]);

        $pegawai_query = PegawaiData::search($search_param);

        $pegawaiDatas = $pegawai_query->orderBy('urutan')->paginate(10);

        return view('admin.list-data', [
            'pegawaiDatas' => $pegawaiDatas,
            'nik_admedika' => $nik_admedika,
            'data' => $data,
            'search_param' => $search_param,
        ]);
    }

    // Tambahkan action edit
    public function edit($nik_admedika, $id)
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

        return view('admin.edit-data', ['provinsiList' => $provinsiList, 'pegawaiData' => $pegawaiData, 'data' => $data]);
    }

    public function update(Request $request, $nik_admedika, $id)
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
        return redirect()->route('dashboard-admin', ['nik_admedika' => $data->nik_admedika])->with('success', 'Data Pegawai berhasil diupdate.');
    }

    public function destroy($nik_admedika, $id)
    {

        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();

        if (!$data) {
            abort(404);
        }

        $pegawaiData = PegawaiData::find($id);
        $pegawaiData->delete();

        return redirect()->route('list-data-karyawan', ['data' => $data, 'pegawaiData' => $pegawaiData->id, 'nik_admedika' => $data->nik_admedika])->with('success', 'Data Pegawai berhasil dihapus.');
    }

    public function export_excel($nik_admedika)
    {
        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->firstOrFail();

        if (!$data) {
            abort(404);
        }

        return Excel::download(new PegawaiExport, 'dataPegawai.xlsx');
    }

    public function import(Request $request, $nik_admedika)
    {

        if (!Session::has('admin')) {
            return redirect('/');
        }

        $data = PegawaiData::where('nik_admedika', $nik_admedika)->firstOrFail();

        if (!$data) {
            abort(404);
        }

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
