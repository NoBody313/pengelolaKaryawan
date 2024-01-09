<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PegawaiData extends Model
{
    protected $table = 'pegawai_datas';

    protected $fillable = [
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
        'created_at',
        'updated_at',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Set the next sequence number if not provided
            if (!$model->urutan) {
                $model->urutan = self::getNextSequenceNumber();
            }
        });

        static::deleted(function ($model) {
            // Reassign sequence numbers after deletion
            self::reassignSequenceNumbers();
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

    use HasFactory;
}
