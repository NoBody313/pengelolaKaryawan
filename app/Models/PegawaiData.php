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
        'no_hp_emergency',
        'nama_kontak_emergency',
        'hubungan_kontak_emergency',
        'nama_ibu',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->fillable = array_merge($this->fillable, [
            'nik_admedika' => request()->input('nik_admedika'),
            'nik_tg' => request()->input('nik_tg'),
            'nama' => request()->input('nama'),
            'jenis_kelamin' => request()->input('jenis_kelamin'),
            'agama' => request()->input('agama', 'islam'),
            'kota_lahir' => request()->input('kota_lahir'),
            'tanggal_lahir' => request()->input('tanggal_lahir'),
            'tahun_lahir' => request()->input('tahun_lahir'),
            'no_ktp' => request()->input('no_ktp'),
            'alamat_ktp' => request()->input('alamat_ktp'),
            'kab_kota_ktp' => request()->input('kab_kota_ktp'),
            'provinsi_ktp' => request()->input('provinsi_ktp'),
            'kodepos_ktp' => request()->input('kodepos_ktp'),
            'alamat_domisili' => request()->input('alamat_domisili'),
            'kab_kota_domisili' => request()->input('kab_kota_domisili'),
            'provinsi_domisili' => request()->input('provinsi_domisili'),
            'kodepos_domisili' => request()->input('kodepos_domisili'),
            'status_pernikahan' => request()->input('status_pernikahan'),
            'tanggal_pernikahan' => request()->input('tanggal_pernikahan'),
            'jumlah_anak' => request()->input('jumlah_anak'),
            'pendidikan_terakhir' => request()->input('pendidikan_terakhir'),
            'jurusan_pendidikan_terakhir' => request()->input('jurusan_pendidikan_terakhir'),
            'nama_institusi' => request()->input('nama_institusi'),
            'kota_institusi' => request()->input('kota_institusi'),
            'lulus_thn_pendidikan_terakhir' => request()->input('lulus_thn_pendidikan_terakhir'),
            'email_pribadi' => request()->input('email_pribadi'),
            'no_hp_tsel' => request()->input('no_hp_tsel'),
            'no_hp_nontsel' => request()->input('no_hp_nontsel'),
            'no_hp_emergency' => request()->input('no_hp_emergency'),
            'nama_kontak_emergency' => request()->input('nama_kontak_emergency'),
            'hubungan_kontak_emergency' => request()->input('hubungan_kontak_emergency'),
            'nama_ibu' => request()->input('nama_ibu'),
        ]);
    }


    public static $rules = [
        'nik_admedika',
        'nik_tg' => 'required',
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'agama' => 'required',
        'kota_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'tahun_lahir' => 'required',
        'no_ktp' => 'required',
        'alamat_ktp' => 'required',
        'kab_kota_ktp' => 'required',
        'provinsi_ktp' => 'required',
        'kodepos_ktp' => 'required',
        'alamat_domisili' => 'required',
        'kab_kota_domisili' => 'required',
        'provinsi_domisili' => 'required',
        'kodepos_domisili' => 'required',
        'status_pernikahan' => 'required',
        'pendidikan_terakhir' => 'required',
        'jurusan_pendidikan_terakhir' => 'required',
        'nama_institusi' => 'required',
        'kota_institusi' => 'required',
        'lulus_thn_pendidikan_terakhir' => 'required',
        'email_pribadi' => 'required',
        'no_hp_tsel' => 'required',
        'no_hp_nontsel' => 'required',
        'no_hp_emergency' => 'required',
        'nama_kontak_emergency' => 'required',
        'hubungan_kontak_emergency' => 'required',
        'nama_ibu' => 'required',
    ];

    use HasFactory;
}
