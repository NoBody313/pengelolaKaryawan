<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegawaiData extends Model
{
    protected $table = 'pegawai_datas';

    protected $fillable = [
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
        'kab_kota_ktp',
        'provinsi_ktp',
        'kodepos_ktp',
        'alamat_domisili',
        'kab_kota_domisili',
        'provinsi_domisili',
        'kodepos_domisili',
        'status_pernikahan',
        'pendidikan_terakhir',
        'jurusan_pendidikan_terakhir',
        'nama_institusi',
        'kota_institusi',
        'lulus_thn_pendidikan_terakhir',
        'email_pribadi',
        'no_hp_tsel',
        'no_hp_nontsel',
        'no_hp_emergency',
        'nama_kontak_emergency',
        'hubungan_kontak_emergency',
        'nama_ibu',
    ];

    public static $rules = [
        'nik_admedika' => 'required|unique:pegawai_datas|min:6',
        'nik_tg' => 'required|unique:pegawai_datas|min:6',
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'agama' => 'required',
        'kota_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'tahun_lahir' => 'required',
        'no_ktp' => 'required|unique:pegawai_datas|min:16',
        'alamat_ktp' => 'required',
        'kab_kota_ktp' => 'required',
        'provinsi_ktp' => 'required',
        'kodepos_ktp' => 'required|min:10',
        'alamat_domisili' => 'required',
        'kab_kota_domisili' => 'required',
        'provinsi_domisili' => 'required',
        'kodepos_domisili' => 'required|min:10',
        'status_pernikahan' => 'required',
        'pendidikan_terakhir' => 'required',
        'jurusan_pendidikan_terakhir' => 'required',
        'nama_institusi' => 'required',
        'kota_institusi' => 'required',
        'lulus_thn_pendidikan_terakhir' => 'required',
        'email_pribadi' => 'required|email|unique:pegawai_datas',
        'no_hp_tsel' => 'required|min:15',
        'no_hp_nontsel' => 'required|min:15',
        'no_hp_emergency' => 'required|min:15',
        'nama_kontak_emergency' => 'required',
        'hubungan_kontak_emergency' => 'required',
        'nama_ibu' => 'required',
    ];
}
