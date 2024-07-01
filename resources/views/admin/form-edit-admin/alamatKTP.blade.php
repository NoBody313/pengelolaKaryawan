@extends('admin.form-edit-admin.index')

@section('contentForm')
    <form id="updateForm"
        action="{{ route('post-edit-alamat-ktp', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
        method="POST" id="formData">
        @csrf
        <div class="flex flex-col w-full my-4">
            <div class="form-layout">
                <div class="flex flex-col w-full">
                    <span class="flex items-start justify-start w-full mt-2 font-semibold tracking-wide ">Alamat
                        KTP</span>
                    @include('components.alamat-hint')
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-alamatKTP">Alamat
                            Lengkap</label>
                        <textarea name="alamat_ktp" class="input-field-form" id="input-alamatKTP" type="text" rows="3" required>{{ $pegawaiData->alamat_ktp }}</textarea>
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-provinsiKTP">Provinsi</label>
                        <select name="provinsi_ktp" id="selectProvKTP" class="input-field-form">
                            <option disabled selected>Pilih Provinsi</option>
                        </select>
                        @include('components.required-kol')
                    </div>
                </div>

                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-kabKota">Kab/Kota</label>
                        <select name="kab_kota_ktp" class="input-field-form" id="input-kabKota-ktp">
                            <option>{{ $pegawaiData->kab_kota_ktp }}</option>
                        </select>
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-kabKota">Kecamatan</label>
                        <select name="kec_ktp" class="input-field-form" id="input-kecamatan-ktp">
                            <option>{{ $pegawaiData->kec_ktp }}</option>
                        </select>
                        @include('components.required-kol')
                    </div>
                </div>

                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-kelurahan">Desa / Kelurahan</label>
                        <select name="kel_ktp" class="input-field-form" id="input-kelurahan-ktp">
                            <option>{{ $pegawaiData->kel_ktp }}</option>
                        </select>
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-kodePos">Kode
                            Pos</label>
                        <input name="kodepos_ktp" class="input-field-form" id="input-kodePos" type="number"
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required min="0" maxlength="5" value="{{ $pegawaiData->kodepos_ktp }}">
                        @include('components.required-kol')
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row items-center justify-around">
            <a href="{{ route('edit-data-pribadi', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
                class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-1 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Back
            </a>
            <button
                class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-green-600 border border-transparent rounded-lg gap-x-1 hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none"
                type="submit">
                Next
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </button>
        </div>
    </form>
@endsection
