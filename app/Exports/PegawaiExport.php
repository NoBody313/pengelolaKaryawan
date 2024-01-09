<?php

namespace App\Exports;

use App\Models\PegawaiData;
use Maatwebsite\Excel\Concerns\FromCollection;

class PegawaiExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PegawaiData::select(
            'urutan',
            'nik_admedika',
            'nik_tg',
            'nama',
            'jenis_kelamin',
            'agama',
            'kota_lahir',
            'tanggal_lahir',
            'tahun_lahir',
            'no_ktp',
            'alamat_ktp',
            'provinsi_ktp',
            'kab_kota_ktp',
            'kec_ktp',
            'kel_ktp',
            'kodepos_ktp',
            'alamat_domisili',
            'provinsi_domisili',
            'kab_kota_domisili',
            'kec_domisili',
            'kel_domisili',
            'kodepos_domisili',
            'status_pernikahan',
            'tanggal_pernikahan',
            'jumlah_anak',
            'pendidikan_terakhir',
            'jurusan_pendidikan_terakhir',
            'nama_institusi',
            'kota_institusi',
            'lulus_thn_pendidikan_terakhir',
            'email_pribadi',
            'no_hp_tsel',
            'no_hp_nontsel',
            'nama_kontak_emergency',
            'no_hp_emergency',
            'hubungan_kontak_emergency',
            'nama_ibu'
        )->get();
    }
}
