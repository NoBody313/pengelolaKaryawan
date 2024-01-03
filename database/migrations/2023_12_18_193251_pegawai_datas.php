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
            $table->integer('nik_admedika')->nullable();
            $table->integer('nik_tg')->nullable();
            $table->string('nama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('kota_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tahun_lahir')->nullable();
            $table->bigInteger('no_ktp')->nullable();

            $table->text('alamat_ktp')->nullable();
            $table->text('provinsi_ktp')->nullable();
            $table->text('kab_kota_ktp')->nullable();
            $table->text('kec_ktp')->nullable();
            $table->text('kel_ktp')->nullable();
            $table->string('kodepos_ktp')->nullable();

            $table->text('alamat_domisili')->nullable();
            $table->text('provinsi_domisili')->nullable();
            $table->text('kab_kota_domisili')->nullable();
            $table->text('kec_domisili')->nullable();
            $table->text('kel_domisili')->nullable();
            $table->string('kodepos_domisili')->nullable();

            $table->string('status_pernikahan')->nullable();
            $table->date('tanggal_pernikahan')->nullable();
            $table->integer('jumlah_anak')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->text('jurusan_pendidikan_terakhir')->nullable();
            $table->text('nama_institusi')->nullable();
            $table->text('kota_institusi')->nullable();
            $table->year('lulus_thn_pendidikan_terakhir')->nullable();

            $table->string('email_pribadi')->nullable();
            $table->char('no_hp_tsel')->nullable();
            $table->char('no_hp_nontsel')->nullable();
            $table->char('no_hp_emergency')->nullable();
            $table->text('nama_kontak_emergency')->nullable();
            $table->text('hubungan_kontak_emergency')->nullable();
            $table->text('nama_ibu')->nullable();

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
