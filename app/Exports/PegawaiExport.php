<?php

namespace App\Exports;

use App\Models\PegawaiData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PegawaiExport implements FromCollection, WithHeadings, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $pegawaiData = PegawaiData::select(
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
            'nama_ibu',
            'nama_ayah',
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
            'nama_pasangan',
            'jumlah_anak',
            'pendidikan_terakhir',
            'jurusan_pendidikan_terakhir',
            'nama_institusi',
            'kota_institusi',
            'lulus_thn_pendidikan_terakhir',
            'no_hp_tsel',
            'no_hp_nontsel',
            'nama_kontak_emergency',
            'hubungan_kontak_emergency',
            'no_hp_emergency',
            'email_pribadi',
            'role',
        )->get();

        $pegawaiData = $pegawaiData->map(function ($item) {
            $item['no_ktp'] = "'" . $item['no_ktp'];
            return $item;
        });

        return $pegawaiData;
    }

    public function headings(): array
    {
        return [
            'Urutan',
            'NIK Admedika',
            'NIK TG',
            'Nama',
            'Jenis Kelamin',
            'Agama',
            'Kota Lahir',
            'Tanggal Lahir',
            'Tahun Lahir',
            'No KTP',
            'Nama Ibu',
            'Nama Ayah',
            'Alamat KTP',
            'Provinsi KTP',
            'Kabupaten/Kota KTP',
            'Kecamatan KTP',
            'Kelurahan KTP',
            'Kodepos KTP',
            'Alamat Domisili',
            'Provinsi Domisili',
            'Kabupaten/Kota Domisili',
            'Kecamatan Domisili',
            'Kelurahan Domisili',
            'Kodepos Domisili',
            'Status Pernikahan',
            'Tanggal Pernikahan',
            'Nama Pasangan',
            'Jumlah Anak',
            'Pendidikan Terakhir',
            'Jurusan Pendidikan Terakhir',
            'Nama Institusi',
            'Kota Institusi',
            'Lulus Tahun Pendidikan Terakhir',
            'No HP (Tsel)',
            'No HP (Nontsel)',
            'Nama Kontak Emergency',
            'Hubungan Kontak Emergency',
            'No HP Emergency',
            'Email Pribadi',
            'Role',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // Make the first row bold
        $sheet->getStyle('A1:' . $sheet->getHighestColumn() . '1')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
        ]);
    }

}
