<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class PegawaiData extends Authenticatable implements AuthenticatableContract
{
    use Searchable, HasFactory;

    protected $table = 'pegawai_datas';

    protected $fillable = [
        'urutan',
        'nik_admedika',
        'nik_tg',
        'nama',
        'tanggal_masuk',
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
        'password',
        'username',
        'created_at',
        'updated_at',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->urutan) {
                $model->urutan = self::getNextSequenceNumber();
            }
        });

        static::deleted(function ($model) {
            self::reassignSequenceNumbers();
        });

        static::saving(function ($model) {
            if (!is_null($model->nik_admedika)) {
                $model->password = Hash::make($model->nik_admedika);
                $model->username = $model->no_ktp;
            }
        });
    }

    private static function getNextSequenceNumber()
    {
        return self::max('urutan') + 1;
    }

    private static function reassignSequenceNumbers()
    {
        $records = self::orderBy('urutan')->get();

        foreach ($records as $key => $record) {
            $record->urutan = $key + 1;
            $record->save();
        }
    }

    public function toSearchableArray()
    {
        return [
            'nik_admedika'  => $this->nik_admedika,
            'nik_tg'        => $this->nik_tg,
            'nama'          => $this->nama,
            'role'       => $this->role,
        ];
    }
}
