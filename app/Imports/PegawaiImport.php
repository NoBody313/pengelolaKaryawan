<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\PegawaiData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PegawaiImport implements ToModel, WithStartRow

{
    public function model(array $row)
    {
        $tanggal_masuk = $this->parseDate($row[4]);
        $tanggal_lahir = $this->parseDate($row[8]);
        $no_ktp = $this->parseNoKtp($row[10]);
        $tanggal_pernikahan = $this->parseDate($row[26]);
        $jumlah_anak = (int) $row[28];
        $lulus_thn_pendidikan_terakhir = $this->parseInteger($row[33]);
        $possibleRoles = ['pegawai', 'admin'];
        $role = in_array($row[38], $possibleRoles) ? $row[38] : 'pegawai';

        return new PegawaiData([
            'nik_admedika' => $row[1],
            'nik_tg' => $row[2],
            'nama' => $row[3],
            'tanggal_masuk' => $tanggal_masuk,
            'jenis_kelamin' => substr($row[5], 0, 10),
            'agama' => substr($row[6], 0, 50),
            'kota_lahir' => $row[7],
            'tanggal_lahir' => $tanggal_lahir,
            // 'tahun_lahir' => $tahun_lahir,
            'no_ktp' => $no_ktp,
            'nama_ibu' => $row[11],
            'nama_ayah' => $row[12],
            'alamat_ktp' => $row[13],
            'kel_ktp' => $row[14],
            'kec_ktp' => $row[15],
            'kab_kota_ktp' => $row[16],
            'provinsi_ktp' => $row[17],
            'kodepos_ktp' => $row[18],
            'alamat_domisili' => $row[19],
            'kel_domisili' => $row[20],
            'kec_domisili' => $row[21],
            'kab_kota_domisili' => $row[22],
            'provinsi_domisili' => $row[23],
            'kodepos_domisili' => $row[24],
            'status_pernikahan' => $row[25],
            'tanggal_pernikahan' => $tanggal_pernikahan,
            'nama_pasangan' => $row[27],
            'jumlah_anak' => $jumlah_anak,
            'pendidikan_terakhir' => $row[29],
            'jurusan_pendidikan_terakhir' => $row[30],
            'nama_institusi' => $row[31],
            'kota_institusi' => $row[32],
            'lulus_thn_pendidikan_terakhir' => $lulus_thn_pendidikan_terakhir,
            'no_hp_tsel' => $row[34],
            'no_hp_nontsel' => $row[35],
            'nama_kontak_emergency' => $row[36],
            'hubungan_kontak_emergency' => $row[37],
            'no_hp_emergency' => $row[38],
            'email_pribadi' => $row[39],
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
            return Carbon::createFromFormat('d/m/Y', $date)->toDateString();
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
