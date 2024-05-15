@extends('admin.form-tambah-admin.index')

@section('formTambah')
    <div class="flex flex-col md:flex-row items-center justify-center">
        <ul class="flex flex-wrap justify-center items-center gap-4 w-full max-w-4xl">
            <li>
                <a href="{{ url('/admin', ['nik_admedika' => $data->nik_admedika]) }}"
                    class="w-fit my-4 mx-10 py-2 px-2 text-sm flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 40 40" fill="none">
                        <mask id="mask0_418_673" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="40" height="40">
                            <rect width="40" height="40" fill="#D9D9D9" />
                        </mask>
                        <g mask="url(#mask0_418_673)">
                            <path
                                d="M15.0256 20L28.0032 32.9776C28.2817 33.2561 28.4195 33.5962 28.4166 33.9979C28.4138 34.3996 28.2731 34.7454 27.9946 35.0353C27.7119 35.3251 27.3679 35.4701 26.9626 35.4701C26.5573 35.4701 26.2098 35.3251 25.9199 35.0353L12.7116 21.8248C12.4516 21.5648 12.2621 21.276 12.1432 20.9584C12.0243 20.6407 11.9648 20.3212 11.9648 20C11.9648 19.6788 12.0243 19.3594 12.1432 19.0417C12.2621 18.724 12.4516 18.4317 12.7116 18.1646L25.9477 4.93915C26.2304 4.64926 26.5712 4.5086 26.9701 4.51715C27.3689 4.52571 27.7133 4.67492 28.0032 4.96478C28.2817 5.25467 28.4238 5.59761 28.4295 5.99361C28.4351 6.38961 28.293 6.73256 28.0032 7.02244L15.0256 20Z"
                                fill="#1C1B1F" />
                        </g>
                    </svg>
                    <span class="hidden md:inline-block">Kembali ke Dashboard</span>
                </a>
            </li>

            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group">
                <span class="min-h-[28px] group inline-flex items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-200 font-medium rounded-full">
                        <span class="text-blue-950 font-bold">1</span>
                        <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </span>
                    <span class="ms-3 text-sm font-semibold text-slate-900 tracking-wide">
                        Data Pribadi
                    </span>
                </span>
            </li>

            <li class="flex items-center shrink basis-0 flex-1">
                <span class="min-h-[28px] inline-flex items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-200 font-medium rounded-full">
                        <span class="text-blue-950 font-bold">2</span>
                        <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </span>
                    <span class="ms-3 text-sm font-semibold text-slate-900 tracking-wide">
                        Alamat KTP
                    </span>
                </span>
            </li>

            <li class="flex items-center shrink basis-0 flex-1">
                <span class="min-h-[28px] inline-flex items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-blue-300 font-medium rounded-full">
                        <span class="text-blue-950 font-bold">3</span>
                        <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </span>
                    <span class="ms-3 text-sm font-semibold text-slate-900 tracking-wide">
                        Alamat Domisili
                    </span>
                </span>
            </li>

            <li class="flex items-center basis-0 flex-1">
                <div class="min-h-[28px] inline-flex items-center text-xs align-middle">
                    <div
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-200 font-medium rounded-full">
                        <p class="text-blue-950 font-bold">4</p>
                        <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </div>
                    <span class="ms-3 text-sm font-semibold text-slate-900 tracking-wide">
                        Status Pendidikan & Pernikahan
                    </span>
                </div>
            </li>

            <li class="flex items-center shrink basis-0 flex-1 group">
                <div class="min-h-[28px] inline-flex items-center text-xs align-middle">
                    <div
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-200 font-medium rounded-full">
                        <p class="text-blue-950 font-bold">5</p>
                        <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </div>
                    <span class="ms-3 text-sm font-semibold text-slate-900 tracking-wide">
                        Kontak
                    </span>
                </div>
            </li>
        </ul>
    </div>

    <div class="flex flex-col justify-center items-center py-4">
        <form action="{{ route('store-tambah-data-alamat-domisili', ['nik_admedika' => $data->nik_admedika]) }}"
            method="POST" class="flex flex-col w-full">
            @csrf
            <div class="flex flex-col my-4 w-full">
                <div class="form-layout">

                    {{-- Domisili --}}
                    <div class="flex flex-col justify-center items-center gap-4 w-full">
                        <span class="flex justify-start items-start w-[660px] mt-2 font-semibold tracking-wide">Alamat
                            Domisili</span>
                        <div class="form-container-alamat">
                            <div class="input-layout-alamat">
                                <label class="input-label" for="input-alamatDomisili">Alamat
                                    Lengkap</label>
                                <input name="alamat_domisili" class="input-field-form-alamat" id="alamatDomisili"
                                    type="text" required placeholder="Masukkan alamat lengkap Domisili">
                                <p class="text-xs">Format : Jalan, RT, RW, Kelurahan, Kecamatan, <br>
                                    Kabupaten/Kota, Provinsi dan Kode Pos.</p>
                                @include('components.required-kol')
                            </div>
                            <div class="input-layout-alamat">
                                <label class="input-label" for="input-provinsiDomisili">Provinsi</label>
                                <select name="provinsi_domisili" id="selectProvDomisili" class="input-field-form-alamat"
                                    required>
                                    <option disabled selected>Pilih Provinsi</option>
                                </select>
                                @include('components.required-kol')
                            </div>
                            <div class="input-layout-alamat">
                                <label class="input-label" for="input-kabKotaDomisili">Kab/Kota</label>
                                <select name="kab_kota_domisili" id="selectKabDomisili" class="input-field-form-alamat"
                                    required>
                                    <option value="" disabled selected>Pilih Kabupaten</option>
                                </select>
                                @include('components.required-kol')
                            </div>
                            <div class="input-layout-alamat">
                                <label class="input-label" for="input-provinsi">Kecamatan</label>
                                <select name="kec_domisili" id="selectKecDomisili" class="input-field-form-alamat"
                                    id="input-provinsi" type="text" required
                                    placeholder="Masukkan provinsi sesuai Domisili"></select>
                                @include('components.required-kol')
                            </div>
                            <div class="input-layout-alamat">
                                <label class="input-label" for="inputDesa">Desa /
                                    Kelurahan</label>
                                <select name="kel_domisili" id="selectKelDomisili" class="input-field-form-alamat"
                                    type="text" required placeholder="Masukkan Kelurahan/Desa"></select>
                                @include('components.required-kol')
                            </div>
                            <div class="input-layout-alamat">
                                <label class="input-label" for="input-kodePosDomisili">Kode
                                    Pos</label>
                                <input name="kodepos_domisili" class="input-field-form-alamat" id="kodePosDomisili"
                                    type="number" inputmode="numeric"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    required min="0" maxlength="5"
                                    placeholder="Masukan kode pos sesuai Domisili">
                                @include('components.required-kol')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-row justify-around items-center">
                <a href="{{ route('tambah-data-alamat-ktp', ['nik_admedika' => $data->nik_admedika]) }}"
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                    Kembali
                </a>
                <button
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none"
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
    </div>
    </div>

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