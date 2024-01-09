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
        'nama_ibu',
        'role',
        'created_at',
        'updated_at',
    ];

    protected static function booted()
    {
        static::created(function ($model) {
            // Otomatis atur urutan saat pembuatan
            if (!$model->urutan) {
                $model->urutan = $model->id;
                $model->save();
            }
        });

        static::deleted(function ($model) {
            // Hapus dan atur ulang urutan
            $model->resetUrutan();
        });
    }

    public function resetUrutan()
    {
        // Ambil semua data dengan urutan lebih besar dari yang dihapus
        $affectedRows = self::where('urutan', '>', $this->urutan)
            ->decrement('urutan');

        // Atur ulang urutan
        DB::statement('SET @count = 0;');
        DB::statement('UPDATE pegawai_datas SET urutan = @count:= @count + 1;');
    }

    use HasFactory;
}
