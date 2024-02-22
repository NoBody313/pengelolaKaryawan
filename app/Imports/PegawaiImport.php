<?php

namespace App\Imports;

use App\Models\PegawaiData;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Maatwebsite\Excel\Cell;
use Maatwebsite\Excel\Concerns\WithStartRow;
use PhpOffice\PhpSpreadsheet\Cell\DataType;

class PegawaiImport implements ToModel, WithStartRow

{
    public function model(array $row)
    {

        // $tanggal_lahir = $this->parseDate($row[7]);
        $tahun_lahir = substr($row[8], 0, 10);
        $no_ktp = $this->parseNoKtp($row[9]);
        $tanggal_pernikahan = $this->parseDate($row[24]);
        $jumlah_anak = (int) $row[26];
        $lulus_thn_pendidikan_terakhir = $this->parseInteger($row[31]);
        $possibleRoles = ['pegawai', 'admin'];
        $role = in_array($row[38], $possibleRoles) ? $row[38] : 'pegawai';

        return new PegawaiData([
            'nik_admedika' => $row[1],
            'nik_tg' => $row[2],
            'nama' => $row[3],
            'tanggal_masuk' => Carbon::parse($row[4])->format('Y/m/d'),
            'jenis_kelamin' => substr($row[5], 0, 10),
            'agama' => substr($row[6], 0, 50),
            'kota_lahir' => $row[7],
            'tanggal_lahir' => Carbon::parse($row[8])->format('Y/m/d'),
            // 'tahun_lahir' => $tahun_lahir,
            'no_ktp' => $no_ktp,
            'nama_ibu' => $row[9],
            'nama_ayah' => $row[10],
            'alamat_ktp' => $row[11],
            'provinsi_ktp' => $row[12],
            'kab_kota_ktp' => $row[13],
            'kec_ktp' => $row[14],
            'kel_ktp' => $row[15],
            'kodepos_ktp' => $row[16],
            'alamat_domisili' => $row[17],
            'provinsi_domisili' => $row[18],
            'kab_kota_domisili' => $row[19],
            'kec_domisili' => $row[20],
            'kel_domisili' => $row[21],
            'kodepos_domisili' => $row[22],
            'status_pernikahan' => $row[23],
            'tanggal_pernikahan' => $tanggal_pernikahan,
            'nama_pasangan' => $row[25],
            'jumlah_anak' => $jumlah_anak,
            'pendidikan_terakhir' => $row[27],
            'jurusan_pendidikan_terakhir' => $row[28],
            'nama_institusi' => $row[29],
            'kota_institusi' => $row[30],
            'lulus_thn_pendidikan_terakhir' => $lulus_thn_pendidikan_terakhir,
            'no_hp_tsel' => $row[32],
            'no_hp_nontsel' => $row[33],
            'nama_kontak_emergency' => $row[34],
            'hubungan_kontak_emergency' => $row[35],
            'no_hp_emergency' => $row[36],
            'email_pribadi' => $row[37],
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
