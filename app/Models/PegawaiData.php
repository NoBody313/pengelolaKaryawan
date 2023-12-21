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
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'urutan' => 'nullable|integer',
        'nik_admedika' => 'required',
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
        'tanggal_pernikahan' => 'required',
        'jumlah_anak' => 'required',
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
