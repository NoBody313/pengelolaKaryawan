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

    public function kabupaten($name)
    {
        $query = request('q');

        $provinsi = Provinsi::where('name', $name)->first();

        if (!$provinsi) {
            // Handle ketika provinsi tidak ditemukan
            return response()->json([]);
        }

        $kabupatens = Kabupaten::where('provinsi_id', $provinsi->id)
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

    public function kecamatan($name)
    {
        $query = request('q');

        $kabupaten = Kabupaten::where('name', $name)->first();

        if (!$kabupaten) {
            // Handle ketika provinsi tidak ditemukan
            return response()->json([]);
        }

        $kecamatans = Kecamatan::where('kabupaten_id', $kabupaten->id)
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

    public function kelurahan($name)
    {
        $query = request('q');

        $kecamatan = Kecamatan::where('name', $name)->first();

        if (!$kecamatan) {
            // Handle ketika provinsi tidak ditemukan
            return response()->json([]);
        }

        $kelurahans = Kelurahan::where('kecamatan_id', $kecamatan->id)
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
}
