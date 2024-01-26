<?php

namespace App\Imports;

use App\Models\PegawaiData;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithStartRow;
class PegawaiImport implements ToModel, WithStartRow

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
        $tanggal_pernikahan = $this->parseDate($row[25]);
        $jumlah_anak = (int) $row[27];
        $lulus_thn_pendidikan_terakhir = $this->parseInteger($row[32]);
        $possibleRoles = ['pegawai', 'admin'];
        $role = in_array($row[39], $possibleRoles) ? $row[39] : 'pegawai';

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
            'nama_ibu' => $row[10],
            'nama_ayah' => $row[11],
            'alamat_ktp' => $row[12],
            'provinsi_ktp' => $row[13],
            'kab_kota_ktp' => $row[14],
            'kec_ktp' => $row[15],
            'kel_ktp' => $row[16],
            'kodepos_ktp' => $row[17],
            'alamat_domisili' => $row[18],
            'provinsi_domisili' => $row[19],
            'kab_kota_domisili' => $row[20],
            'kec_domisili' => $row[21],
            'kel_domisili' => $row[22],
            'kodepos_domisili' => $row[23],
            'status_pernikahan' => $row[24],
            'tanggal_pernikahan' => $tanggal_pernikahan,
            'nama_pasangan' => $row[26],
            'jumlah_anak' => $jumlah_anak,
            'pendidikan_terakhir' => $row[28],
            'jurusan_pendidikan_terakhir' => $row[29],
            'nama_institusi' => $row[30],
            'kota_institusi' => $row[31],
            'lulus_thn_pendidikan_terakhir' => $lulus_thn_pendidikan_terakhir,
            'no_hp_tsel' => $row[33],
            'no_hp_nontsel' => $row[34],
            'nama_kontak_emergency' => $row[35],
            'hubungan_kontak_emergency' => $row[36],
            'no_hp_emergency' => $row[37],
            'email_pribadi' => $row[38],
            'role' => $role,
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }

    private function parseDate($date)
    {
        try {
            return Carbon::createFromFormat('Y-m-d', $date)->toDateString();
        } catch (\Exception $e) {
            return null;
        }
    }
    private function parseInteger($value)
    {
        return is_numeric($value) ? (int) $value : null;
    }

    private function parseNoKtp($value)
    {
        return (int) preg_replace('/[^0-9]/', '', $value);
    }
}
