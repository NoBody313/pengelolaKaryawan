<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    // Tambah Data Form
    public function create()
    {
        return view('tambah-data');
    }

    public function store(Request $request)
    {
        // $request->validate(PegawaiData::$rules);
        PegawaiData::create($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Pegawai Data Berhasil Dibuat');
    }

    // Other Panel
    // public function show(AdminDashboardController $pegawaiData)
    // {
    //     return view('pegawaiData.show', compact('pegawaiData'));
    // }

    // public function edit(AdminDashboardController $pegawaiData)
    // {
    //     return view('pegawaiData.edit', compact('pegawaiData'));
    // }

    // public function update(Request $request)
    // {
    //     $request->validate(PegawaiData::$rules);

    //     $pegawaiData = PegawaiData::findOrFail();
    //     $pegawaiData->update($request->all());

    //     return redirect()->route('pegawaiData.index')->with('success', 'Pegawai Data Berhasil Diperbarui');
    // }

    // public function destroy(AdminDashboardController $pegawaiData)
    // {
    //     $pegawaiData->delete();
    //     return redirect()->route('pegawaiData.index')->with('success', 'Pegawai Data Berhasil Dihapus');
    // }
}
