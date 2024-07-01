@extends('user.form-liat-user.index')

@section('stepNav')
    <div class="flex flex-col items-center justify-center md:flex-row">
        <ul class="flex flex-wrap items-center justify-center w-full max-w-4xl gap-4">
            <li>
                <a href="{{ url('/admin', ['nik_admedika' => $data->nik_admedika]) }}"
                    class="flex items-center gap-2 px-2 py-2 mx-10 my-4 text-sm w-fit">
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

            <li class="flex items-center flex-1 gap-x-2 shrink basis-0 group">
                <span class="min-h-[28px] group inline-flex items-center text-xs align-middle">
                    <span
                        class="flex items-center justify-center flex-shrink-0 font-medium bg-gray-200 rounded-full w-7 h-7">
                        <span class="font-bold text-blue-950">1</span>
                        <svg class="flex-shrink-0 hidden w-3 h-3 " xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </span>
                    <span class="text-sm font-semibold tracking-wide ms-3 text-slate-900">
                        Data Pribadi
                    </span>
                </span>
            </li>

            <li class="flex items-center flex-1 shrink basis-0">
                <span class="min-h-[28px] inline-flex items-center text-xs align-middle">
                    <span
                        class="flex items-center justify-center flex-shrink-0 font-medium bg-gray-200 rounded-full w-7 h-7">
                        <span class="font-bold text-blue-950">2</span>
                        <svg class="flex-shrink-0 hidden w-3 h-3 " xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </span>
                    <span class="text-sm font-semibold tracking-wide ms-3 text-slate-900">
                        Alamat KTP
                    </span>
                </span>
            </li>

            <li class="flex items-center flex-1 shrink basis-0">
                <span class="min-h-[28px] inline-flex items-center text-xs align-middle">
                    <span
                        class="flex items-center justify-center flex-shrink-0 font-medium bg-blue-300 rounded-full w-7 h-7">
                        <span class="font-bold text-blue-950">3</span>
                        <svg class="flex-shrink-0 hidden w-3 h-3 " xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </span>
                    <span class="text-sm font-semibold tracking-wide ms-3 text-slate-900">
                        Alamat Domisili
                    </span>
                </span>
            </li>

            <li class="flex items-center flex-1 basis-0">
                <div class="min-h-[28px] inline-flex items-center text-xs align-middle">
                    <div
                        class="flex items-center justify-center flex-shrink-0 font-medium bg-gray-200 rounded-full w-7 h-7">
                        <p class="font-bold text-blue-950">4</p>
                        <svg class="flex-shrink-0 hidden w-3 h-3 " xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </div>
                    <span class="text-sm font-semibold tracking-wide ms-3 text-slate-900">
                        Status Pendidikan & Pernikahan
                    </span>
                </div>
            </li>

            <li class="flex items-center flex-1 shrink basis-0 group">
                <div class="min-h-[28px] inline-flex items-center text-xs align-middle">
                    <div
                        class="flex items-center justify-center flex-shrink-0 font-medium bg-gray-200 rounded-full w-7 h-7">
                        <p class="font-bold text-blue-950">5</p>
                        <svg class="flex-shrink-0 hidden w-3 h-3 " xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </div>
                    <span class="text-sm font-semibold tracking-wide ms-3 text-slate-900">
                        Kontak
                    </span>
                </div>
            </li>
        </ul>
    </div>
@endsection

@section('form')
    <form id="updateForm"
        action="{{ route('post-pegawai-edit-alamat-domisili', ['nik_admedika' => $data->nik_admedika]) }}" method="POST"
        class="flex flex-col w-full">
        @csrf
        <div class="flex flex-col w-full my-4">
            <div class="form-layout">

                {{-- Domisili --}}
                <div class="flex flex-col items-center justify-center w-full gap-4">
                    <span class="flex justify-start items-start w-[660px] mt-2 font-semibold tracking-wide">Alamat
                        Domisili</span>
                    @include('components.alamat-hint')
                    <div class="form-container-alamat">
                        <div class="input-layout-alamat">
                            <label class="input-label" for="input-alamatDomisili">Alamat Lengkap</label>
                            <input name="alamat_ktp" required class="input-field-form-alamat" id="input-alamatDomisili"
                                type="text" value="{{ optional($data)->alamat_domisili }}">
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout-alamat">
                            <label class="input-label" for="input-provinsiDomisili">Provinsi</label>
                            <select name="provinsi_domisili" id="selectProvDomisili" class="input-field-form-alamat">
                                <option disabled selected>Pilih Provinsi</option>
                            </select>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout-alamat">
                            <label class="input-label" for="input-kabKota">Kab/Kota</label>
                            <select name="kab_kota_domisili" class="input-field-form-alamat" id="selectKabDomisili">
                                <option>
                                    {{ $data->kab_kota_domisili }}
                                </option>
                            </select>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout-alamat">
                            <label class="input-label" for="input-kabKota">Kecamatan</label>
                            <select name="kec_domisili" class="input-field-form-alamat" id="selectKecDomisili">
                                <option>
                                    {{ $data->kec_domisili }}
                                </option>
                            </select>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout-alamat">
                            <label class="input-label" for="input-kelurahan">Desa / Kelurahan</label>
                            <select name="kel_domisili" class="input-field-form-alamat" id="selectKelDomisili">
                                <option>
                                    {{ $data->kel_domisili }}
                                </option>
                            </select>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout-alamat">
                            <label class="input-label" for="input-kodePos">Kode
                                Pos</label>
                            <input name="kodepos_domisili" class="input-field-form-alamat" id="input-kodePosDomisili"
                                required type="number" inputmode="numeric"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                min="0" maxlength="5" value="{{ optional($data)->kodepos_domisili }}">
                            @include('components.required-kol')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row items-center justify-around">
            <a href="{{ route('edit-pegawai-alamat-ktp', ['nik_admedika' => $data->nik_admedika, 'id' => $data->id]) }}"
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
@endsection
