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
        $data = Kabupaten::where('provinsi_id', $id)->where(
            'name',
            'LIKE',
            '%' . request('q') . '%'
        );
        return response()->json($data);
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
