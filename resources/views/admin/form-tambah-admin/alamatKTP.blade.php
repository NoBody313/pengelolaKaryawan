@extends('admin.form-tambah-admin.index')

@section('contentForm')
    <form action="{{ route('store-tambah-data-alamat-ktp', ['nik_admedika' => $data->nik_admedika]) }}" method="POST">
        @csrf
        <div class="flex flex-col w-full my-4">
            <div class="form-layout">
                <div class="flex flex-col items-center justify-center w-full gap-4">
                    <div class="flex flex-col w-full">
                        <span class="flex items-start justify-start w-full mt-2 font-semibold tracking-wide ">Alamat
                            KTP</span>
                    </div>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="alamatKTP">Alamat Lengkap</label>
                            <input name="alamat_ktp" class="input-field-form-alamat" id="alamatKTP" type="text" required
                                placeholder="Masukkan alamat lengkap KTP">
                            <p class="text-xs">Format : Jalan, RT, RW, Kelurahan, Kecamatan, Kabupaten/Kota, Provinsi
                                dan Kode Pos.</p>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="selectProvKTP">Provinsi</label>
                            <select name="provinsi_ktp" id="selectProvKTP" class="input-field-form-alamat" required>
                                <option disabled selected>Pilih Provinsi</option>
                            </select>
                            @include('components.required-kol')
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="selectKabKTP">Kab/Kota</label>
                            <select name="kab_kota_ktp" id="selectKabKTP" class="input-field-form-alamat" required>
                                <option disabled selected>Pilih Kabupaten/Kota</option>
                            </select>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="selectKecKTP">Kecamatan</label>
                            <select name="kec_ktp" id="selectKecKTP" class="input-field-form-alamat" required>
                                <option disabled selected>Pilih Kecamatan</option>
                            </select>
                            @include('components.required-kol')
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="selectKelKTP">Kelurahan/Desa</label>
                            <select name="kel_ktp" id="selectKelKTP" class="input-field-form-alamat" required>
                                <option disabled selected>Pilih Kelurahan/Desa</option>
                            </select>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="kodePosKTP">Kode Pos</label>
                            <input name="kodepos_ktp" class="input-field-form-alamat" id="kodePosKTP" type="number"
                                inputmode="numeric" required min="0" maxlength="5"
                                placeholder="Masukkan kode pos sesuai KTP">
                            @include('components.required-kol')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row items-center justify-around">
            <a href="{{ route('tambah-data-pribadi', ['nik_admedika' => $data->nik_admedika]) }}"
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
