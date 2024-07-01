@extends('admin.form-tambah-admin.index')

@section('contentForm')
    <form action="{{ route('store-tambah-data-alamat-domisili', ['nik_admedika' => $data->nik_admedika]) }}" method="POST">
        @csrf
        <div class="flex flex-col w-full my-4">
            <div class="form-layout">
                <div class="flex flex-col items-center justify-center w-full gap-4">
                    <div class="flex flex-col w-full">
                        <span class="flex items-start justify-start w-full mt-2 font-semibold tracking-wide ">Alamat
                            Domisili</span>
                    </div>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="input-alamatDomisili">Alamat
                                Lengkap</label>
                            <input name="alamat_domisili" class="input-field-form-alamat" id="alamatDomisili" type="text"
                                required placeholder="Masukkan alamat lengkap Domisili">
                            <p class="text-xs">Format : Jalan, RT, RW, Kelurahan, Kecamatan, <br>
                                Kabupaten/Kota, Provinsi dan Kode Pos.</p>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="input-provinsiDomisili">Provinsi</label>
                            <select name="provinsi_domisili" id="selectProvDomisili" class="input-field-form-alamat"
                                required>
                                <option disabled selected>Pilih Provinsi</option>
                            </select>
                            @include('components.required-kol')
                        </div>
                    </div>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="input-kabKotaDomisili">Kab/Kota</label>
                            <select name="kab_kota_domisili" id="selectKabDomisili" class="input-field-form-alamat"
                                required>
                                <option value="" disabled selected>Pilih Kabupaten</option>
                            </select>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="input-provinsi">Kecamatan</label>
                            <select name="kec_domisili" id="selectKecDomisili" class="input-field-form-alamat"
                                id="input-provinsi" type="text" required
                                placeholder="Masukkan provinsi sesuai Domisili"></select>
                            @include('components.required-kol')
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="inputDesa">Desa /
                                Kelurahan</label>
                            <select name="kel_domisili" id="selectKelDomisili" class="input-field-form-alamat"
                                type="text" required placeholder="Masukkan Kelurahan/Desa"></select>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="input-kodePosDomisili">Kode
                                Pos</label>
                            <input name="kodepos_domisili" class="input-field-form-alamat" id="kodePosDomisili"
                                type="number" inputmode="numeric"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                required min="0" maxlength="5" placeholder="Masukan kode pos sesuai Domisili">
                            @include('components.required-kol')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row items-center justify-around">
            <a href="{{ route('tambah-data-alamat-ktp', ['nik_admedika' => $data->nik_admedika]) }}"
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
