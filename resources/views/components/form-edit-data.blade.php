<div class="flex flex-col my-4 w-full">
    <!-- First Contnet -->
    <div data-hs-stepper-content-item='{"index": 1}'>
        <div class="form-layout">
            <div class="form-container">
                <div class="input-layout">
                    <label class="input-label" for="nik_admedika">NIK
                        Admedika</label>
                    <input name="nik_admedika" class="input-field-form" id="nik_admedika" type="number"
                        inputmode="numeric"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        maxlength="6" pattern="[0-9]{6}" value="{{ optional($pegawaiData)->nik_admedika }}">
                </div>
                <div class="input-layout">
                    <label class="input-label" for="input-nikTg">NIK TG</label>
                    <input name="nik_tg" class="input-field-form" id="input-nikTg" type="number" inputmode="numeric"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        maxlength="6" pattern="[0-9]{6}" value="{{ optional($pegawaiData)->nik_tg }}">
                </div>
            </div>
            <div class="form-container">
                <div class="input-layout">
                    <label class="input-label" for="input-nama">Nama</label>
                    <input name="nama"
                        class="input-field-form"
                        id="input-nama" type="text" value="{{ optional($pegawaiData)->nama }}">
                </div>
                <div class="input-layout">
                    <label class="input-label" for="input-tanggal_masuk">Tanggal Masuk Admedika</label>
                    <input name="tanggal_masuk"
                        class="input-field-form"
                        id="input-nama" type="date" value="{{ optional($pegawaiData)->tanggal_masuk }}">
                </div>
            </div>
            <div class="form-container">
                <div class="input-layout">
                    <label class="input-label" for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="input-field-form">
                        <option disabled selected>{{ $pegawaiData->jenis_kelamin }}</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="input-layout">
                    <label class="input-label">Agama</label>
                    <select class="input-field-form" name="label-agama">
                        <option disabled selected>{{ $pegawaiData->agama }}</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="form-container">
                <div class="input-layout">
                    <label class="input-label" for="input-kotaKelahiran">Kota
                        Kelahiran</label>
                    <input name="kota_lahir" class="input-field-form" id="input-kotaKelahiran" type="text"
                        value="{{ optional($pegawaiData)->kota_lahir }}">
                </div>
                <div class="input-layout">
                    <label class="input-label" for="input-ttl">Tanggal
                        Lahir</label>
                    <input name="tanggal_lahir" class="input-field-form" id="input-ttl" type="date"
                        value="{{ optional($pegawaiData)->tanggal_lahir }}">
                </div>
            </div>
            <div class="form-container">
                <div class="input-layout">
                    <label class="input-label" for="input-tahunLahir">Tahun
                        Lahir</label>
                    <input name="tahun_lahir" class="input-field-form" id="input-tahunLahir" type="number"
                        inputmode="numeric"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        min="0" maxlength="4" value="{{ optional($pegawaiData)->tahun_lahir }}">
                </div>
                <div class="input-layout">
                    <label class="input-label" for="input-noKTP">No. KTP</label>
                    <input name="no_ktp" class="input-field-form" id="input-noKTP" type="number" inputmode="numeric"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        min="0" maxlength="16" value="{{ optional($pegawaiData)->no_ktp }}">
                </div>
            </div>
            <div class="form-container">
                <div class="input-layout">
                    <label class="input-label" for="input-ibuKandung">Nama Ibu
                        Kandung</label>
                    <input name="nama_ibu" class="input-field-form" id="input-ibuKandung" type="text"
                        value="{{ optional($pegawaiData)->nama_ibu }}">
                </div>
                <div class="input-layout">
                    <label for="nama_ayah" class="input-label">
                        Nama Ayah
                    </label>
                    <input type="text" name="nama_ayah" id="nama_ayah" value="{{ $pegawaiData->nama_ayah }}"
                        class="input-field-form">
                </div>
            </div>

        </div>
    </div>
    <!-- End First Contnet -->

    <!-- First Contnet -->
    <div data-hs-stepper-content-item='{
        "index": 2
    }'>
        <div class="form-layout">
            {{-- KTP --}}
            <div class="flex flex-col justify-center items-center gap-4 w-full">
                <span class="flex justify-start items-start w-[660px] mt-2 font-semibold tracking-wide">Alamat
                    KTP</span>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-alamatKTP">Alamat
                            Lengkap</label>
                        <input name="alamat_ktp" class="input-field-form" id="input-alamatKTP" type="text"
                            value="{{ $pegawaiData->alamat_ktp }}">
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-provinsi">Provinsi</label>
                        <select name="provinsi_ktp" class="input-field-form" id="input-provinsi-ktp">
                            <option>{{ $pegawaiData->provinsi_ktp }}</option>
                        </select>
                    </div>
                </div>

                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-kabKota">Kab/Kota</label>
                        <select name="kab_kota_ktp" class="input-field-form" id="input-kabKota-ktp">
                            <option>{{ $pegawaiData->kab_kota_ktp }}</option>
                        </select>
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-kabKota">Kecamatan</label>
                        <select name="kec_ktp" class="input-field-form" id="input-kecamatan-ktp">
                            <option>{{ $pegawaiData->kec_ktp }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-kelurahan">Desa / Kelurahan</label>
                        <select name="kel_ktp" class="input-field-form" id="input-kelurahan">
                            <option>{{ $pegawaiData->kel_ktp }}</option>
                        </select>
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-kodePos">Kode
                            Pos</label>
                        <input name="kodepos_ktp" class="input-field-form" id="input-kodePos" type="number"
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            min="0" maxlength="5" value="{{ $pegawaiData->kodepos_ktp }}">
                    </div>
                </div>
            </div>

            {{-- Domisili --}}
            <div class="flex flex-col justify-center items-center gap-4 w-full">
                <span class="flex justify-start items-start w-[660px] mt-2 font-semibold tracking-wide">Alamat
                    Domisili</span>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-alamatDomisili">Alamat
                            Lengkap</label>
                        <input name="alamat_ktp" class="input-field-form" id="input-alamatDomisili" type="text"
                            value="{{ optional($pegawaiData)->alamat_domisili }}">
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-provinsi">Provinsi</label>
                        <select name="provinsi_domisili" class="input-field-form" id="selectProvDomisili">
                            <option>
                                {{ $pegawaiData->provinsi_domisili }}
                            </option>
                        </select>
                    </div>
                </div>

                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-kabKota">Kab/Kota</label>
                        <select name="kab_kota_domisili" class="input-field-form" id="selectKabDomisili">
                            <option>
                                {{ $pegawaiData->kab_kota_domisili }}
                            </option>
                        </select>
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-kabKota">Kecamatan</label>
                        <select name="kec_domisili" class="input-field-form" id="selectKecDomisili">
                            <option>
                                {{ $pegawaiData->kec_domisili }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-container">

                    <div class="input-layout">
                        <label class="input-label" for="input-kelurahan">Desa / Kelurahan</label>
                        <select name="kel_domisili" class="input-field-form" id="selectKelDomisili">
                            <option>
                                {{ $pegawaiData->kel_domisili }}
                            </option>
                        </select>
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-kodePos">Kode
                            Pos</label>
                        <input name="kodepos_domisili" class="input-field-form" id="input-kodePosDomisili"
                            type="number" inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            min="0" maxlength="5" value="{{ optional($pegawaiData)->kodepos_domisili }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End First Contnet -->

    <!-- First Contnet -->
    <div data-hs-stepper-content-item='{"index": 3}'>
        <div class="form-layout">
            <div class="flex flex-col justify-center items-center gap-4 w-full">
                <span class="flex justify-start items-start w-[660px] mt-2 font-semibold tracking-wide">Riwayat
                    Pendidikan</span>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-pendidikan">Pendidikan
                            Terakhir</label>
                        <select name="pendidikan_terakhir" class="input-field-form" id="input-pendidikan">
                            <option disabled selected>{{ $pegawaiData->pendidikan_terakhir }}
                            </option>
                            <option>SMA/Sederajat</option>
                            <option>D1</option>
                            <option>D2</option>
                            <option>D3</option>
                            <option>D4</option>
                            <option>S1</option>
                            <option>S2</option>
                            <option>S3</option>
                        </select>
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-jurusan">Jurusan
                            Pendidikan
                            Terakhir</label>
                        <input name="jurusan_pendidikan_terakhir" class="input-field-form" id="input-jurusan"
                            type="text" value="{{ optional($pegawaiData)->jurusan_pendidikan_terakhir }}">
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-institusi">Nama
                            Institusi</label>
                        <input name="nama_institusi" class="input-field-form" id="input-institusi" type="text"
                            value="{{ optional($pegawaiData)->nama_institusi }}">
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-kotaInstitusi">Kota
                            Institusi</label>
                        <input name="kota_institusi" class="input-field-form" id="input-kotaInstitusi"
                            type="text" value="{{ optional($pegawaiData)->kota_institusi }}">
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-tahunKelulusan">Tahun
                            Kelulusan</label>
                        <input name="lulus_thn_pendidikan_terakhir" class="input-field-form"
                            id="input-tahunKelulusan" type="text"
                            value="{{ optional($pegawaiData)->lulus_thn_pendidikan_terakhir }}">
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center gap-4 w-full">
                <span class="flex justify-start items-start w-[660px] mt-2 font-semibold tracking-wide">Status
                    Pernikahan</span>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-statusPernikahan">Status Pernikahan</label>
                        <select name="status_pernikahan" class="input-field-form" id="input-statusPernikahan">
                            <option disabled selected>{{ $pegawaiData->status_pernikahan }}
                            </option>
                            <option>Belum Menikah</option>
                            <option>Menikah</option>
                            <option>Janda</option>
                            <option>Duda</option>
                        </select>
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-tgl-menikah">Tanggal
                            Menikah</label>
                        <input name="tanggal_pernikahan" class="input-field-form" id="input-ttl" type="date"
                            value="{{ optional($pegawaiData)->tanggal_pernikahan }}">
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="nama_pasangan">Nama Pasangan</label>
                        <input name="nama_pasangan" class="input-field-form" id="nama_pasangan" type="text"
                            value="{{ $pegawaiData->nama_pasangan }}">
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-jumlah-anak">Jumlah
                            Anak</label>
                        <input name="jumlah_anak" class="input-field-form" id="input-jumlahAnak" type="number"
                            value="{{ optional($pegawaiData)->jumlah_anak }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End First Contnet -->

    <!-- First Contnet -->
    <div data-hs-stepper-content-item='{
        "index": 4
    }'>
        <div class="form-layout">
            <div class="form-container">
                <div class="input-layout">
                    <label class="input-label" for="input-nomorTsel">Nomor
                        Handphone
                        Telkomsel</label>
                    <input name="no_hp_tsel" class="input-field-form" id="input-nomorTsel" type="tel"
                        inputmode="numeric"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        value="{{ optional($pegawaiData)->no_hp_tsel }}" min="10" maxlength="15"
                        pattern="[0-9]{10,14}">
                    <p class="font-medium text-xs">Format : 08123456789</p>
                </div>
                <div class="input-layout">
                    <label class="input-label" for="input-nomorNon-tsel">Nomor
                        Handphone
                        Non Telkomsel</label>
                    <input name="no_hp_nontsel" class="input-field-form" id="input-noHpNonTsel" type="tel"
                        inputmode="numeric"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        value="{{ optional($pegawaiData)->no_hp_nontsel }}" min="10" maxlength="15"
                        pattern="[0-9]{10,14}">
                    <p class="font-medium text-xs">Format : 08123456789</p>
                </div>
            </div>
            <div class="form-container">
                <div class="input-layout">
                    <label class="input-label" for="input-namaKontakEmergency">Nama
                        Kontak
                        Emergency</label>
                    <input name="nama_kontak_emergency" class="input-field-form" id="input-namaKontakEmergency"
                        type="text" value="{{ optional($pegawaiData)->nama_kontak_emergency }}">
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
                </div>
            </div>
            <div class="form-container">
                <div class="input-layout">
                    <label class="input-label" for="input-nomorEmergency">Nomor Handphone
                        Emergency</label>
                    <input name="no_hp_emergency" class="input-field-form" id="input-nomorEmergency" type="tel"
                        inputmode="numeric"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        value="{{ optional($pegawaiData)->no_hp_emergency }}" min="10" maxlength="15"
                        pattern="[0-9]{10,14}">
                    <p class="font-medium text-xs">Format : 08123456789</p>
                </div>
                <div class="input-layout">
                    <label class="input-label" for="input-emailPribadi">Email
                        Pribadi</label>
                    <input name="email_pribadi" class="input-field-form" id="input-emailPribadi" type="email"
                        value="{{ optional($pegawaiData)->email_pribadi }}">
                </div>
            </div>
        </div>
    </div>

    <!-- Button Group -->
    <div class="flex flex-col justify-center items-center">
        <div class="flex flex-row justify-between items-center mt-2 px-16 w-1/2">
            <button
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-back-btn type="button">
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Back
            </button>
            <button
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-next-btn type="button">
                Next
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </button>

            <button
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-finish-btn type="submit" style="display: none;">
                Finish
            </button>
        </div>
    </div>
    <!-- End Button Group -->
</div>
