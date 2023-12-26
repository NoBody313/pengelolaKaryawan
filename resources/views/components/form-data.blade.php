<!-- Stepper -->
<div data-hs-stepper>
    <!-- Stepper Nav -->
    <ul class="relative flex flex-row gap-x-2 max-w-xs mx-auto">
        <!-- Item -->
        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
            data-hs-stepper-nav-item='{
            "index": 1
          }'>
            <div class="min-w-[28px] min-h-[28px] w-full inline-flex items-center text-xs align-middle">
                <span
                    class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700">
                    1
                </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
            </div>
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
            data-hs-stepper-nav-item='{
            "index": 2
          }'>
            <div class="min-w-[28px] min-h-[28px] w-full inline-flex items-center text-xs align-middle">
                <span
                    class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700">
                    2
                </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
            </div>
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
            data-hs-stepper-nav-item='{
            "index": 3
          }'>
            <div class="min-w-[28px] min-h-[28px] w-full inline-flex items-center text-xs align-middle">
                <span
                    class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700">
                    3
                </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
            </div>
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
            data-hs-stepper-nav-item='{
            "index": 4
          }'>
            <div class="min-w-[28px] min-h-[28px] w-full inline-flex items-center text-xs align-middle">
                <span
                    class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700">
                    4
                </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
            </div>
        </li>
        <!-- End Item -->
    </ul>
    <!-- End Stepper Nav -->

    <form action="{{ route('store-data-form') }}" method="POST">
        @csrf
        <!-- Stepper Content -->
        <div class="mt-5 sm:mt-8">
            <!-- First Contnet -->
            <div data-hs-stepper-content-item='{
                "index": 1
              }'>
                <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="nik_admedika">NIK Admedika</label>
                            <input name="nik_admedika" class="input-field" id="nik_admedika" type="number" required
                                inputmode="numeric"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="6" pattern="[0-9]{6}" placeholder="Masukkan NIK Admedika">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-nikTg">NIK TG</label>
                            <input name="nik_tg" class="input-field" id="input-nikTg" type="number" required
                                inputmode="numeric"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="6" pattern="[0-9]{6}" placeholder="Masukkan NIK TG">
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label class="block text-sm font-medium mb-2" for="input-nama">Nama</label>
                        <input name="nama" class="input-field" id="input-nama" type="text" required
                            placeholder="Masukkan nama sesuai KTP">
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="hs-select name=""
                                -label-jenisKelamin">Jenis
                                Kelamin</label>
                            <select name="jenis_kelamin"
                                class="py-3 px-4 pe-9 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="hs-select name="" -label-jenisKelamin" required>
                                <option disabled selected>Buka untuk memilih</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select name="agama">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="hs-select name=""
                                -label-agama">Agama</label>
                            <select name=""
                                class="py-3 px-4 pe-9 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="hs-select name="" -label-agama" required>
                                <option disabled selected>Buka untuk memilih</option>
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Katolik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-kotaKelahiran">Kota
                                Kelahiran</label>
                            <input name="kota_lahir" class="input-field" id="input-kotaKelahiran" type="text"
                                required placeholder="Masukkan kota kelahiran">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-ttl">Tanggal Lahir</label>
                            <input name="tanggal_lahir" class="input-field" id="input-ttl" type="date" required
                                placeholder="Masukkan tanggal lahir sesuai KTP">
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-tahunLahir">Tahun Lahir</label>
                            <input name="tahun_lahir" class="input-field" id="input-tahunLahir" type="number" required
                                inputmode="numeric"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                min="0" maxlength="4" placeholder="Masukkan tahun lahir sesuai KTP">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-noKTP">No. KTP</label>
                            <input name="no_ktp" class="input-field" id="input-noKTP" type="number" required
                                inputmode="numeric"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                min="0" maxlength="16" placeholder="Masukkan nomor KTP">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End First Contnet -->

            <!-- First Contnet -->
            <div data-hs-stepper-content-item='{
                "index": 2
              }' style="display: none;">
                <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                    <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                        <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-alamatKTP">Alamat
                                    Lengkap</label>
                                <input name="alamat_ktp" class="input-field" id="input-alamatKTP" type="text"
                                    required placeholder="Masukkan alamat lengkap KTP">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-provinsiKTP">Provinsi</label>
                                <select name="provinsi_ktp" id="selectProv" class="input-field" required>
                                    <option disabled selected>Pilih Provinsi</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2"
                                    for="input-kabKotaDomisili">Kab/Kota</label>
                                <select name="kabupaten" id="selectKab" class="input-field" required>
                                    <option value="" disabled selected>Pilih Kabupaten</option>
                                </select>
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-provinsi">Kecamatan</label>
                                <select name="provinsi_ktp" id="selectKec" class="input-field" id="input-provinsi"
                                    type="text" required placeholder="Masukkan provinsi sesuai KTP"></select>
                            </div>
                        </div>
                        <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-kabKota">Desa /
                                    Kelurahan</label>
                                <select name="kab_kota_ktp" id="selectKel" class="input-field" type="text"
                                    required placeholder="Masukkan Kab/Kota sesuai KTP"></select>
                            </div>

                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-kodePos">Kode Pos</label>
                                <input name="kodepos_ktp" class="input-field" id="input-kodePos" type="number"
                                    required inputmode="numeric"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    required min="0" maxlength="5" placeholder="Masukan kode pos sesuai KTP">
                            </div>
                        </div>
                    </div>


                    {{-- Domisili --}}
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label class="block text-sm font-medium mb-2" for="input-alamatLengkap">Alamat
                            Lengkap</label>
                        <input name="alamat_domisili" class="input-field" id="input-alamatLengkap" type="text"
                            required placeholder="Masukan alamat domisili">
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-kodePosDomisili">Kode
                                Pos</label>
                            <input name="kodepos_domisili" class="input-field" id="input-kodePosDomisili"
                                type="number" required inputmode="numeric"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                required min="0" maxlength="5" placeholder="Masukan kode pos domisili">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End First Contnet -->

        <!-- First Contnet -->
        <div data-hs-stepper-content-item='{
                "index": 3
              }' style="display: none;">
            <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-statusPernikahan">Status
                                Pernihan</label>
                            <select name="status_pernikahan" class="input-field pe-9" id="input-statusPernikahan"
                                required>
                                <option disabled selected>Buka untuk memilih</option>
                                <option>Belum Menikah</option>
                                <option>Menikah</option>
                                <option>Cerai Hidup</option>
                                <option>Cerai Mati</option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-tgl-menikah">Tanggal
                                Menikah</label>
                            <input name="tanggal_pernikahan" class="input-field" id="input-ttl" type="date"
                                required placeholder="Masukkan tanggal lahir sesuai KTP">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-jumlah-anak">Jumlah
                                Anak</label>
                            <input name="jumlah_anak" class="input-field" id="input-kotaKelahiran" type="number"
                                required placeholder="Masukkan kota kelahiran">
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-pendidikan">Pendidikan
                                Terakhir</label>
                            <select name="pendidikan_terakhir" class="input-field pe-9" id="input-pendidikan"
                                required>
                                <option disabled selected>Pilih pendidikan terakhir</option>
                                <option>Tidak Sekolah</option>
                                <option>SD/Sederajat</option>
                                <option>SMP/Sederajat</option>
                                <option>SMA/Sederajat</option>
                                <option>D3</option>
                                <option>D4/S1</option>
                                <option>S2</option>
                                <option>S3</option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-jurusan">Jurusan Pendidikan
                                Terakhir</label>
                            <input name="jurusan_pendidikan_terakhir" class="input-field" id="input-jurusan"
                                type="text" required placeholder="Masukan Jurusan Pendidikan Terakhir">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-institusi">Nama
                                Institusi</label>
                            <input name="nama_institusi" class="input-field" id="input-institusi" type="text"
                                required placeholder="Masukan nama institusi">
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-kotaInstitusi">Kota
                                Institusi</label>
                            <input name="kota_institusi" class="input-field" id="input-kotaInstitusi" type="text"
                                required placeholder="Masukan kota institusi">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-tahunKelulusan">Tahun
                                Kelulusan</label>
                            <input name="lulus_thn_pendidikan_terakhir" class="input-field" id="input-tahunKelulusan"
                                type="text" required placeholder="Masukan Tahun Kelulusan">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End First Contnet -->

        <!-- First Contnet -->
        <div data-hs-stepper-content-item='{
                "index": 4
              }' style="display: none;">
            <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label class="block text-sm font-medium mb-2" for="input-emailPribadi">Email
                            Pribadi</label>
                        <input name="email_pribadi" class="input-field" id="input-emailPribadi" type="email"
                            required placeholder="Masukan Email pribadi">
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label class="block text-sm font-medium mb-2" for="input-nomorTsel">Nomor Handphone
                            Telkomsel</label>
                        <input name="no_hp_tsel" class="input-field" id="input-nomorTsel" type="tel" required
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required placeholder="Masukan nomor Telkomsel" min="10" maxlength="15"
                            pattern="[0-9]{10,14}">
                    </div>
                </div>
                <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label class="block text-sm font-medium mb-2" for="input-nomorNon-tsel">Nomor Handphone
                            Non Telkomsel</label>
                        <input name="no_hp_nontsel" class="input-field" id="input-nama" type="tel" required
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required placeholder="Masukan nomor non Telkomsel" min="10" maxlength="15"
                            pattern="[0-9]{10,14}">
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label class="block text-sm font-medium mb-2" for="input-nomorEmergency">Nomor Handphone
                            Emergency</label>
                        <input name="no_hp_emergency" class="input-field" id="input-nomorEmergency" type="tel"
                            required inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required placeholder="Masukan nomor Telkomsel" min="10" maxlength="15"
                            pattern="[0-9]{10,14}">
                    </div>
                </div>
                <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label class="block text-sm font-medium mb-2" for="input-namaKontakEmergency">Nama Kontak
                            Emergency</label>
                        <input name="nama_kontak_emergency" class="input-field" id="input-namaKontakEmergency"
                            type="text" required placeholder="Masukan nama kontak Emergency">
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label class="block text-sm font-medium mb-2" for="input-hubunganKontakEmergency">Hubungan
                            Kontak Emergency</label>
                        <input name="hubungan_kontak_emergency" class="input-field"
                            id="input-hubunganKontakEmergency" type="text" required
                            placeholder="Masukan hubungan kontak Emergency">
                    </div>
                </div>
                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                    <label class="block text-sm font-medium mb-2" for="input-ibuKandung">Nama Ibu
                        Kandung</label>
                    <input name="nama_ibu" class="input-field" id="input-ibuKandung" type="text" required
                        placeholder="Masukan nama ibu kandung">
                </div>
            </div>
        </div>


        <!-- Button Group -->
        <div class="mt-5 flex justify-between items-center gap-x-2">
            <button
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
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
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </button>

            <button
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-finish-btn type="submit" style="display: none;">
                Finish
            </button>

        </div>
        <!-- End Button Group -->
</div>
</form>
<!-- End Stepper Content -->
</div>
<!-- End Stepper -->

<!-- Final Contnet -->
{{-- <div data-hs-stepper-content-item="{
    " isFinal": true }" style="display: none;">
<div class="">
    <h3 class="text-gray-500">
        Final content
    </h3>
</div>
</div> --}}
<!-- End Final Contnet -->
