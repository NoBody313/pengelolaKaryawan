@extends('admin.form-edit-admin.index')

@section('contentForm')
    <form id="updateForm"
        action="{{ route('post-edit-kontak', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
        method="POST" id="formData">
        @csrf
        <div class="flex flex-col w-full my-4">
            <div class="form-layout">
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-nomorTsel">Nomor
                            Handphone
                            Telkomsel</label>
                        <input name="no_hp_tsel" class="input-field-form" id="input-nomorTsel" type="tel"
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required value="{{ optional($pegawaiData)->no_hp_tsel }}" min="10" maxlength="15"
                            pattern="[0-9]{10,14}">
                        <p class="text-xs font-medium">Format : 08123456789</p>
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-nomorNon-tsel">Nomor
                            Handphone
                            Non Telkomsel</label>
                        <input name="no_hp_nontsel" class="input-field-form" id="input-noHpNonTsel" type="tel"
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            value="{{ optional($pegawaiData)->no_hp_nontsel }}" min="10" maxlength="15" required
                            pattern="[0-9]{10,14}">
                        <p class="text-xs font-medium">Format : 08123456789</p>
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-namaKontakEmergency">Nama
                            Kontak
                            Emergency</label>
                        <input name="nama_kontak_emergency" class="input-field-form" id="input-namaKontakEmergency" required
                            type="text" value="{{ optional($pegawaiData)->nama_kontak_emergency }}">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-hubunganKontakEmergency">Hubungan
                            Kontak Emergency</label>
                        <select name="hubungan_kontak_emergency" class="input-field-form pe-9"
                            id="input-hubunganKontakEmergency" required>
                            <option disabled selected>{{ $pegawaiData->hubungan_kontak_emergency }}
                            </option>
                            <option>Suami</option>
                            <option>Istri</option>
                            <option>Ayah</option>
                            <option>Ibu</option>
                            <option>Kakak</option>
                            <option>Adik</option>
                            <option>Paman</option>
                            <option>Bibi</option>
                        </select>
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-nomorEmergency">Nomor Handphone
                            Emergency</label>
                        <input name="no_hp_emergency" class="input-field-form" id="input-nomorEmergency" type="tel"
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            value="{{ optional($pegawaiData)->no_hp_emergency }}" min="10" maxlength="15" required
                            pattern="[0-9]{10,14}">
                        <p class="text-xs font-medium">Format : 08123456789</p>
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-emailPribadi">Email
                            Pribadi</label>
                        <input name="email_pribadi" class="input-field-form" id="input-emailPribadi" type="email" required
                            value="{{ optional($pegawaiData)->email_pribadi }}">
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="flex flex-col justify-center items-center gap-2 self-stretch w-full md:w-[660px]">
                        <label class="input-label" name="role">Role</label>
                        <select name="role" class="normal-case input-role">
                            <option disabled selected value="{{ $pegawaiData->role }}">{{ $pegawaiData->role }}</option>
                            <option class="normal-case" value="admin">Admin</option>
                            <option class="normal-case" value="pegawai">Pegawai</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button Group -->
        <div class="flex flex-row items-center justify-around">
            <a href="{{ route('edit-status', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
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
                Finish
            </button>
        </div>
    </form>
@endsection
