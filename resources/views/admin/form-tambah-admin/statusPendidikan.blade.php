@extends('admin.form-tambah-admin.index')

@section('contentForm')
    <form action="{{ route('store-tambah-data-status', ['nik_admedika' => $data->nik_admedika]) }}" method="POST">
        @csrf
        <div class="flex flex-col w-full my-4">
            <div class="form-layout">
                <div class="flex flex-col items-center justify-center w-full gap-4">
                    <span class="flex items-start justify-start w-full mt-2 font-semibold tracking-wide">Riwayat</span>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="input-pendidikan">Pendidikan
                                Terakhir</label>
                            <select name="pendidikan_terakhir" class="input-field-form" id="input-pendidikan" required>
                                <option disabled selected>Pilih pendidikan terakhir</option>
                                <option>SMA/Sederajat</option>
                                <option>D1</option>
                                <option>D2</option>
                                <option>D3</option>
                                <option>D4</option>
                                <option>S1</option>
                                <option>S2</option>
                                <option>S3</option>
                            </select>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="input-jurusan">Jurusan Pendidikan
                                Terakhir</label>
                            <input name="jurusan_pendidikan_terakhir" class="input-field-form" id="input-jurusan"
                                type="text" required placeholder="Masukan Jurusan Pendidikan Terakhir">
                            @include('components.required-kol')
                        </div>
                    </div>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="input-institusi">Nama Perguruan Tinggi</label>
                            <input name="nama_institusi" class="input-field-form" id="input-institusi" type="text"
                                required placeholder="Masukan nama institusi">
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="input-kotaInstitusi">Kota
                                Perguruan Tinggi</label>
                            <input name="kota_institusi" class="input-field-form" id="input-kotaInstitusi" type="text"
                                required placeholder="Masukan kota institusi">
                            @include('components.required-kol')
                        </div>
                    </div>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="input-tahunKelulusan">Tahun
                                Kelulusan</label>
                            <input name="lulus_thn_pendidikan_terakhir" class="input-field-form" type="number" required
                                placeholder="Masukan Tahun Kelulusan">
                            @include('components.required-kol')
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center w-full gap-4">
                    <span class="flex items-start justify-start w-full mt-2 font-semibold tracking-wide">Status
                        Pernikahan</span>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="input-statusPernikahan">Status Pernikahan</label>
                            <select name="status_pernikahan" class="input-field-form pe-9" id="input-statusPernikahan"
                                required>
                                <option disabled selected>Buka untuk memilih</option>
                                <option>Belum Menikah</option>
                                <option>Menikah</option>
                                <option>Janda</option>
                                <option>Duda</option>
                            </select>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="input-tgl-menikah">Tanggal
                                Menikah</label>
                            <input name="tanggal_pernikahan" class="input-field-form" id="input-tgl-menikah" type="date"
                                placeholder="Masukkan Tanggal Pernikahan">
                        </div>
                    </div>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="nama_pasangan">Nama Pasangan</label>
                            <input name="nama_pasangan" class="input-field-form" id="nama_pasangan" type="text"
                                placeholder="Masukkan Nama Pasangan">
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="input-jumlah-anak">Jumlah
                                Anak</label>
                            <input name="jumlah_anak" class="input-field-form" id="jumlah_anak" type="number"
                                placeholder="Masukkan Jumlah Anak">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button Group -->
        <div class="flex flex-row items-center justify-around">
            <a href="{{ route('tambah-data-alamat-domisili', ['nik_admedika' => $data->nik_admedika]) }}"
                class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-1 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Kembali
            </a>
            <button
                class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-green-600 border border-transparent rounded-lg gap-x-1 hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none"
                type="submit">
                Selanjutnya
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </button>
        </div>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var inputElements = document.querySelectorAll("input, select");
            inputElements.forEach(function(element) {
                element.addEventListener("input", function() {
                    if (this.tagName.toLowerCase() === "select") {
                        var selectedIndex = this.selectedIndex;
                        if (selectedIndex !== -1) {
                            this.options[selectedIndex].text = this.options[selectedIndex].text
                                .toUpperCase();
                        }
                    } else {
                        this.value = this.value.toUpperCase();
                    }
                });
            });

            const statusPernikahan = document.getElementById("input-statusPernikahan");
            const tanggalMenikah = document.getElementById("input-tgl-menikah");
            const namaPasangan = document.getElementById("nama_pasangan");
            const jumlahAnak = document.getElementById("jumlah_anak");

            function handleStatusPernikahan() {
                // Jika status pernikahan adalah "Belum Menikah"
                if (statusPernikahan.value === "BELUM MENIKAH") {
                    // Set semua elemen lain ke disabled dan kosongkan nilainya
                    tanggalMenikah.disabled = true;
                    tanggalMenikah.value = "";
                    namaPasangan.disabled = true;
                    namaPasangan.value = "";
                    jumlahAnak.disabled = true;
                    jumlahAnak.value = "";
                } else if (statusPernikahan.value === "JANDA" || statusPernikahan.value === "DUDA") {
                    tanggalMenikah.disabled = true;
                    tanggalMenikah.value = "";
                    namaPasangan.disabled = true;
                    namaPasangan.value = "";
                    jumlahAnak.disabled = false;
                } else {
                    tanggalMenikah.disabled = false;
                    namaPasangan.disabled = false;
                    jumlahAnak.disabled = false;
                }
            }

            // Tambahkan event listener untuk perubahan pada elemen status pernikahan
            statusPernikahan.addEventListener("change", handleStatusPernikahan);

            // Panggil fungsi untuk menangani status pernikahan saat halaman dimuat
            handleStatusPernikahan();
        });
    </script>
@endsection
