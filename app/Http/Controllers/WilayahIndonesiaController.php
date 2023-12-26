<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class WilayahIndonesiaController extends Controller
{
    public function provinsi(Request $request)
    {
        $query = $request->input('q');

        $provinsis = Provinsi::where('name', 'LIKE', "%$query%")->get();

        $formattedProvinsis = $provinsis->map(function ($provinsi) {
            return [
                'id' => $provinsi->id,
                'text' => $provinsi->name,
            ];
        });

        return response()->json($formattedProvinsis);
    }

    public function kabupaten($id)
    {
        $query = request('q');

        $kabupatens = Kabupaten::where('provinsi_id', $id)
            ->where('name', 'LIKE', "%$query%")
            ->get();

        $formattedData = $kabupatens->map(function ($kabupaten) {
            return [
                'id' => $kabupaten->id,
                'text' => $kabupaten->name,
            ];
        });

        return response()->json($formattedData);
    }

    public function kecamatan($id)
    {
        $query = request('q');

        $kecamatans = Kecamatan::where('kabupaten_id', $id)
            ->where('name', 'LIKE', "%$query%")
            ->get();

        $formattedData = $kecamatans->map(function ($kecamatans) {
            return [
                'id' => $kecamatans->id,
                'text' => $kecamatans->name,
            ];
        });

        return response()->json($formattedData);
    }

    public function kelurahan($id)
    {
        $query = request('q');

        $kelurahans = Kelurahan::where('kecamatan_id', $id)
            ->where('name', 'LIKE', "%$query%")
            ->get();

        $formattedData = $kelurahans->map(function ($kelurahans) {
            return [
                'id' => $kelurahans->id,
                'text' => $kelurahans->name,
            ];
        });

        return response()->json($formattedData);
    }


    // public function kecamatan($kabupaten_id)
    // {
    //     $data = Kecamatan::where(
    //         'kabupaten_id',
    //         'name',
    //         'code',
    //         'full_code',
    //         'LIKE',
    //         '%' . request('q') . '%'
    //     );
    //     return response()->json($data);
    // }

    // public function desa($kabupaten_id)
    // {
    //     $data = Kelurahan::where(
    //         'name',
    //         'kabupaten_id',
    //         'LIKE',
    //         '%' . request('q') . '%'
    //     );
    //     return response()->json($data);
    // }
}
