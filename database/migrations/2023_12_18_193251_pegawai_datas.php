<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai_datas', function (Blueprint $table) {
            $table->id();
            $table->integer('urutan')->nullable();
            $table->integer('nik_admedika');
            $table->integer('nik_tg');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('kota_lahir');
            $table->date('tanggal_lahir');
            $table->string('tahun_lahir');
            $table->bigInteger('no_ktp');
            // KTP
            $table->text('alamat_ktp');
            $table->text('provinsi_ktp');
            $table->text('kab_kota_ktp');
            $table->text('kec_ktp');
            $table->text('kel_ktp');
            $table->string('kodepos_ktp');
            // Domisili
            $table->text('alamat_domisili');
            $table->text('provinsi_domisili');
            $table->text('kab_kota_domisili');
            $table->text('kec_domisili');
            $table->text('kel_domisili');
            $table->string('kodepos_domisili');

            $table->string('status_pernikahan');
            $table->date('tanggal_pernikahan');
            $table->integer('jumlah_anak');
            $table->string('pendidikan_terakhir');
            $table->text('jurusan_pendidikan_terakhir');
            $table->text('nama_institusi');
            $table->text('kota_institusi');
            $table->year('lulus_thn_pendidikan_terakhir');

            $table->char('no_hp_tsel');
            $table->char('no_hp_nontsel');
            $table->text('nama_kontak_emergency');
            $table->char('no_hp_emergency');
            $table->text('hubungan_kontak_emergency');
            $table->string('email_pribadi');
            $table->text('nama_ibu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai_datas');
    }
};
