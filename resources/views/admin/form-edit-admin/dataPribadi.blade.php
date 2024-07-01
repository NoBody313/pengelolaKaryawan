@extends('admin.form-edit-admin.index')

@section('contentForm')
    <form id="updateForm"
        action="{{ route('post-edit-data-pribadi', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
        method="POST" id="formData">
        @csrf
        <div class="flex flex-col w-full my-4">
            <div class="form-layout">
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="nik_admedika">NIK
                            Admedika</label>
                        <input name="nik_admedika" class="input-field-form" id="nik_admedika" type="number"
                            inputmode="numeric" required
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required maxlength="6" pattern="[0-9]{6}" value="{{ optional($pegawaiData)->nik_admedika }}">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-nikTg">NIK TG</label>
                        <input name="nik_tg" class="input-field-form" id="input-nikTg" type="number" inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required maxlength="6" pattern="[0-9]{6}" value="{{ optional($pegawaiData)->nik_tg }}">
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-nama">Nama</label>
                        <input name="nama" class="input-field-form" id="input-nama" type="text" required
                            value="{{ optional($pegawaiData)->nama }}">
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="input-field-form" required>
                            <option disabled selected>{{ $pegawaiData->jenis_kelamin }}</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label">Agama</label>
                        <select class="input-field-form" name="label-agama" required>
                            <option disabled selected>{{ $pegawaiData->agama }}</option>
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
                            required value="{{ optional($pegawaiData)->kota_lahir }}">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="tanggal_lahir">Tanggal
                            Lahir</label>
                        <input name="tanggal_lahir" class="input-field-form" id="tanggal_lahir" type="date" required
                            value="{{ optional($pegawaiData)->tanggal_lahir }}">
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-tahunLahir">Tahun
                            Lahir</label>
                        <input name="tahun_lahir" class="input-field-form" id="input-tahunLahir" type="number"
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required min="0" maxlength="4" value="{{ optional($pegawaiData)->tahun_lahir }}">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-noKTP">No. KTP</label>
                        <input name="no_ktp" class="input-field-form" id="input-noKTP" type="number" inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required min="0" maxlength="16" value="{{ optional($pegawaiData)->no_ktp }}">
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-ibuKandung">Nama Ibu
                            Kandung</label>
                        <input name="nama_ibu" class="input-field-form" id="input-ibuKandung" type="text" required
                            value="{{ optional($pegawaiData)->nama_ibu }}">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label for="nama_ayah" class="input-label">
                            Nama Ayah Kandung
                        </label>
                        <input type="text" name="nama_ayah" id="nama_ayah" required
                            value="{{ $pegawaiData->nama_ayah }}" class="input-field-form">
                        @include('components.required-kol')
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center">
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
