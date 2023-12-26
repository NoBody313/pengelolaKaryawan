<?php

namespace App\Imports;

use App\Models\PegawaiData;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;

class PegawaiImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        $tanggal_lahir = $this->parseDate($row[7]);
        $tahun_lahir = substr($row[8], 0, 10);
        $no_ktp = $this->parseNoKtp($row[9]);
        $tanggal_pernikahan = $this->parseDate($row[19]);
        $jumlah_anak = (int) $row[22];
        $lulus_thn_pendidikan_terakhir = $this->parseInteger($row[26]);

        return new PegawaiData([
            'nik_admedika' => $row[1],
            'nik_tg' => $row[2],
            'nama' => $row[3],
            'jenis_kelamin' => substr($row[4], 0, 10),
            'agama' => substr($row[5], 0, 50),
            'kota_lahir' => $row[6],
            'tanggal_lahir' => $tanggal_lahir ?? now()->toDateString(),
            'tahun_lahir' => $tahun_lahir,
            'no_ktp' => $no_ktp,
            'alamat_ktp' => $row[10],
            'kab_kota_ktp' => $row[11],
            'provinsi_ktp' => $row[12],
            'kodepos_ktp' => $row[13],
            'alamat_domisili' => $row[14],
            'kab_kota_domisili' => $row[15],
            'provinsi_domisili' => $row[16],
            'kodepos_domisili' => $row[17],
            'status_pernikahan' => $row[18],
            'tanggal_pernikahan' => $tanggal_pernikahan,
            'jumlah_anak' => $jumlah_anak,
            'pendidikan_terakhir' => $row[21],
            'jurusan_pendidikan_terakhir' => $row[22],
            'nama_institusi' => $row[23],
            'kota_institusi' => $row[24],
            'lulus_thn_pendidikan_terakhir' => $lulus_thn_pendidikan_terakhir,
            'email_pribadi' => $row[26],
            'no_hp_tsel' => $row[27],
            'no_hp_nontsel' => $row[28],
            'no_hp_emergency' => $row[29],
            'nama_kontak_emergency' => $row[30],
            'hubungan_kontak_emergency' => $row[31],
            'nama_ibu' => $row[32],
        ]);
    }

    private function parseDate($date)
    {
        try {
            // Attempt to create a Carbon date instance
            return Carbon::createFromFormat('Y-m-d', $date)->toDateString();
        } catch (\Exception $e) {
            // Handle invalid date format
            // You can log the error or perform other actions here
            return null;
        }
    }
    private function parseInteger($value)
    {
        // Attempt to cast the value to an integer
        return is_numeric($value) ? (int) $value : null;
    }

    private function parseNoKtp($value)
    {
        // Your parsing logic here
        // You might need to remove non-numeric characters or handle expressions
        return (int) preg_replace('/[^0-9]/', '', $value);
    }
}
