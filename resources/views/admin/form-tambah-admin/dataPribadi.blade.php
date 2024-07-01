@extends('admin.form-tambah-admin.index')

@section('contentForm')
    <form action="{{ route('store-tambah-data-pribadi', ['nik_admedika' => $data->nik_admedika]) }}" method="POST">
        @csrf
        <div class="flex flex-col w-full my-4">
            <div class="form-layout">
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="nik_admedika">NIK Admedika</label>
                        <input name="nik_admedika" class="input-field-form" id="nik_admedika" type="number" required
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            maxlength="6" pattern="[0-9]{6}" placeholder="Masukkan NIK Admedika">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-nikTg">NIK TG</label>
                        <input name="nik_tg" class="input-field-form" id="input-nikTg" type="number" required
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            maxlength="6" pattern="[0-9]{6}" placeholder="Masukkan NIK TG">
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-nama">Nama</label>
                        <input name="nama" class="input-field-form" id="input-nama" type="text" required
                            placeholder="Masukkan nama sesuai KTP">
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="jenis-kelamin" name="jenis-kelamin">Jenis
                            Kelamin</label>
                        <select name="jenis_kelamin" class="input-field-form" required>
                            <option disabled selected>Buka untuk memilih</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="agama">Agama</label>
                        <select name="agama" class="input-field-form" id="agama" required>
                            <option disabled selected>Buka untuk memilih</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Konghucu</option>
                        </select>
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-kotaKelahiran">Kota
                            Kelahiran</label>
                        <input name="kota_lahir" class="input-field-form" id="input-kotaKelahiran" type="text" required
                            placeholder="Masukkan kota kelahiran">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-ttl">Tanggal Lahir</label>
                        <input name="tanggal_lahir" class="input-field-form" id="input-ttl" type="date" required
                            placeholder="Masukkan tanggal lahir sesuai KTP">
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-tahunLahir">Tahun
                            Lahir</label>
                        <input name="tahun_lahir" class="input-field-form" id="input-tahunLahir" type="number" required
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            min="0" maxlength="4" placeholder="Masukkan tahun lahir sesuai KTP">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-noKTP">No. KTP</label>
                        <input name="no_ktp" class="input-field-form" id="input-noKTP" type="number" required
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            min="0" maxlength="16" placeholder="Masukkan nomor KTP">
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-ibuKandung">Nama Ibu
                            Kandung</label>
                        <input name="nama_ibu" class="input-field-form" id="input-ibuKandung" type="text" required
                            placeholder="Masukan nama ibu kandung">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="nama_ibu">Nama Ayah Kandung</label>
                        <input name="nama_ayah" class="input-field-form" id="nama_ibu" type="text" required
                            placeholder="Masukan nama ayah kandung">
                        @include('components.required-kol')
                    </div>
                </div>
            </div>

            <script>
                document.getElementById('input-ttl').addEventListener('input', function() {
                    var tanggalLahir = new Date(this.value);
                    var tahunLahir = isNaN(tanggalLahir.getFullYear()) ? '' : tanggalLahir.getFullYear();
                    document.getElementById('input-tahunLahir').value = tahunLahir;
                });
            </script>
        </div>

        <div class="flex flex-col items-center justify-center">
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
            // Mengambil semua elemen input dan select dalam dokumen
            var inputElements = document.querySelectorAll("input, select");

            // Menggunakan loop untuk menerapkan perubahan pada setiap elemen input dan select
            inputElements.forEach(function(element) {
                // Menambahkan event listener untuk setiap elemen input dan select
                element.addEventListener("input", function() {
                    // Mengonversi nilai input atau teks opsi select menjadi huruf kapital
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
        });
    </script>
@endsection
