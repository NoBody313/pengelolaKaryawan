<!-- Stepper -->
<div data-hs-stepper class="flex flex-col">
    <!-- Stepper Nav -->
    <div class="flex flex-col md:flex-row items-center justify-center">
        <ul class="flex flex-wrap justify-center items-center gap-4 w-full max-w-3xl">
            <li>
                <a href="{{ url('/admin', ['nik_admedika' => $data->nik_admedika]) }}" class="w-fit my-4 mx-10 py-2 px-2 text-sm flex items-center gap-2">
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
            <!-- Item -->
            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                data-hs-stepper-nav-item='{
                "index": 1
              }'>
                <span class="min-w-[28px] min-h-[28px] group inline-flex items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-300 hs-stepper-active:text-white hs-stepper-success:bg-blue-300 hs-stepper-success:text-white">
                        <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">1</span>
                        <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </span>
                    <span class="ms-2 text-sm font-medium">
                        Data Pribadi
                    </span>
                </span>
                <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-300">
                </div>
            </li>

            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                data-hs-stepper-nav-item='{
                "index": 2
              }'>
                <span class="min-w-[28px] min-h-[28px] group inline-flex items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-300 hs-stepper-active:text-white hs-stepper-success:bg-blue-300 hs-stepper-success:text-white">
                        <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
                        <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </span>
                    <span class="ms-2 text-sm font-medium">
                        Alamat
                    </span>
                </span>
                <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-300">
                </div>
            </li>

            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                data-hs-stepper-nav-item='{
                  "index": 3
                }'>
                <span class="min-w-[28px] min-h-[28px] group inline-flex items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-300 hs-stepper-active:text-white hs-stepper-success:bg-blue-300 hs-stepper-success:text-white">
                        <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
                        <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </span>
                    <span class="ms-2 text-sm font-medium">
                        Status & Pendidikan
                    </span>
                </span>
                <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-300">
                </div>
            </li>
            <!-- End Item -->

            <!-- Item -->
            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                data-hs-stepper-nav-item='{
                  "index": 4
                }'>
                <span class="min-w-[28px] min-h-[28px] group inline-flex items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-300 hs-stepper-active:text-white hs-stepper-success:bg-blue-300 hs-stepper-success:text-white">
                        <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">4</span>
                        <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </span>
                    <span class="ms-2 text-sm font-medium">
                        Kontak
                    </span>
                </span>
                <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-300">
                </div>
            </li>
            <!-- End Item -->
        </ul>
        <!-- End Stepper Nav -->
    </div>

    <div class="flex flex-col justify-center items-center py-4">

        <form action="{{ route('store-data-form', ['nik_admedika' => $data->nik_admedika]) }}" method="POST" class="flex flex-col w-full">
            @csrf
            <!-- Stepper Content -->
            <div class="flex flex-col my-4 w-full">
                <!-- First Contnet -->
                <div data-hs-stepper-content-item='{
                    "index": 1
                  }'>
                    <div class="form-layout">
                        <div class="form-container">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="nik_admedika">NIK Admedika</label>
                                <input name="nik_admedika" class="input-field-form" id="nik_admedika" type="number"
                                    required inputmode="numeric"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    maxlength="6" pattern="[0-9]{6}" placeholder="Masukkan NIK Admedika">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-nikTg">NIK TG</label>
                                <input name="nik_tg" class="input-field-form" id="input-nikTg" type="number"
                                    required inputmode="numeric"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    maxlength="6" pattern="[0-9]{6}" placeholder="Masukkan NIK TG">
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="input-label" for="input-nama">Nama</label>
                            <input name="nama" class="input-field-form" id="input-nama" type="text" required
                                placeholder="Masukkan nama sesuai KTP">
                        </div>
                        <div class="form-container">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="hs-select"
                                    name="
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
                                <label class="input-label" for="hs-select name="" -label-agama">Agama</label>
                                <select name="agama"
                                    class="py-3 px-4 pe-9 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    id="hs-select" required>
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
                        <div class="form-container w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-kotaKelahiran">Kota
                                    Kelahiran</label>
                                <input name="kota_lahir" class="input-field-form" id="input-kotaKelahiran"
                                    type="text" required placeholder="Masukkan kota kelahiran">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-ttl">Tanggal Lahir</label>
                                <input name="tanggal_lahir" class="input-field-form" id="input-ttl" type="date"
                                    required placeholder="Masukkan tanggal lahir sesuai KTP">
                            </div>
                        </div>
                        <div class="form-container w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-tahunLahir">Tahun
                                    Lahir</label>
                                <input name="tahun_lahir" class="input-field-form" id="input-tahunLahir"
                                    type="number" required inputmode="numeric"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    min="0" maxlength="4" placeholder="Masukkan tahun lahir sesuai KTP">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-noKTP">No. KTP</label>
                                <input name="no_ktp" class="input-field-form" id="input-noKTP" type="number"
                                    required inputmode="numeric"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    min="0" maxlength="16" placeholder="Masukkan nomor KTP">
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
                <!-- End First Contnet -->

                <!-- First Contnet -->
                <div data-hs-stepper-content-item='{
                    "index": 2
                  }'>
                    <div class="form-layout">
                        {{-- Alamat KTP --}}
                        <div class="flex flex-col justify-center items-center gap-4 w-full">
                            <span class="flex justify-start items-start w-full mt-2 font-medium tracking-wide">Alamat
                                KTP</span>
                            <div class="form-container w-full">
                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="input-alamatKTP">Alamat
                                        Lengkap</label>
                                    <input name="alamat_ktp" class="input-field-form" id="alamatKTP" type="text"
                                        required placeholder="Masukkan alamat lengkap KTP">
                                </div>
                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="input-provinsiKTP">Provinsi</label>
                                    <select name="provinsi_ktp" id="selectProvKTP" class="input-field-form" required>
                                        <option disabled selected>Pilih Provinsi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-container w-full">
                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="input-kabKotaKTP">Kab/Kota</label>
                                    <select name="kab_kota_ktp" id="selectKabKTP" class="input-field-form" required>
                                        <option disabled selected>Pilih Kabupaten</option>
                                    </select>
                                </div>
                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="input-provinsi">Kecamatan</label>
                                    <select name="kec_ktp" id="selectKecKTP" class="input-field-form"
                                        id="input-provinsi" type="text" required
                                        placeholder="Masukkan provinsi sesuai KTP"></select>
                                </div>
                            </div>
                            <div class="form-container w-full">
                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="input-kabKota">Desa /
                                        Kelurahan</label>
                                    <select name="kel_ktp" id="selectKelKTP" class="input-field-form" required
                                        placeholder="Masukkan Kab/Kota sesuai KTP"></select>
                                </div>

                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="input-kodePos">Kode Pos</label>
                                    <input name="kodepos_ktp" class="input-field-form" id="kodePosKTP"
                                        type="number" required inputmode="numeric"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        required min="0" maxlength="5"
                                        placeholder="Masukan kode pos sesuai KTP">
                                </div>
                            </div>
                        </div>

                        {{-- Domisili --}}
                        <div class="flex flex-col justify-center items-center gap-4 w-full">
                            <span class="flex justify-start items-start w-full mt-2 font-medium tracking-wide">Alamat
                                Domisili</span>
                            <div class="form-container w-full">
                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="input-alamatDomisili">Alamat
                                        Lengkap</label>
                                    <input name="alamat_domisili" class="input-field-form" id="alamatDomisili"
                                        type="text" required placeholder="Masukkan alamat lengkap Domisili">
                                </div>
                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="input-provinsiDomisili">Provinsi</label>
                                    <select name="provinsi_domisili" id="selectProvDomisili" class="input-field-form"
                                        required>
                                        <option disabled selected>Pilih Provinsi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-container w-full">
                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="input-kabKotaDomisili">Kab/Kota</label>
                                    <select name="kab_kota_domisili" id="selectKabDomisili" class="input-field-form"
                                        required>
                                        <option value="" disabled selected>Pilih Kabupaten</option>
                                    </select>
                                </div>
                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="input-provinsi">Kecamatan</label>
                                    <select name="kec_domisili" id="selectKecDomisili" class="input-field-form"
                                        id="input-provinsi" type="text" required
                                        placeholder="Masukkan provinsi sesuai KTP"></select>
                                </div>
                            </div>
                            <div class="form-container w-full">
                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="inputDesa">Desa /
                                        Kelurahan</label>
                                    <select name="kel_domisili" id="selectKelDomisili" class="input-field-form"
                                        type="text" required placeholder="Masukkan Kelurahan/Desa"></select>
                                </div>

                                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                    <label class="input-label" for="input-kodePosDomisili">Kode
                                        Pos</label>
                                    <input name="kodepos_domisili" class="input-field-form" id="kodePosDomisili"
                                        type="number" required inputmode="numeric"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        required min="0" maxlength="5"
                                        placeholder="Masukan kode pos sesuai KTP">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- End First Contnet -->

                <!-- First Contnet -->
                <div data-hs-stepper-content-item='{
                    "index": 3
                  }'>
                    <div class="form-layout">
                        <div class="form-container w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-statusPernikahan">Status
                                    Pernihan</label>
                                <select name="status_pernikahan" class="input-field-form pe-9"
                                    id="input-statusPernikahan" required>
                                    <option disabled selected>Buka untuk memilih</option>
                                    <option>Belum Menikah</option>
                                    <option>Menikah</option>
                                    <option>Janda</option>
                                    <option>Duda</option>
                                </select>
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-tgl-menikah">Tanggal
                                    Menikah</label>
                                <input name="tanggal_pernikahan" class="input-field-form" id="input-ttl"
                                    type="date" placeholder="Masukkan tanggal lahir sesuai KTP">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-jumlah-anak">Jumlah
                                    Anak</label>
                                <input name="jumlah_anak" class="input-field-form" id="input-kotaKelahiran"
                                    type="number" placeholder="Masukkan kota kelahiran">
                            </div>
                        </div>
                        <div class="form-container w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-pendidikan">Pendidikan
                                    Terakhir</label>
                                <select name="pendidikan_terakhir" class="input-field-form pe-9"
                                    id="input-pendidikan" required>
                                    <option disabled selected>Pilih pendidikan terakhir</option>
                                    <option>Tidak Sekolah</option>
                                    <option>SD/Sederajat</option>
                                    <option>SMP/Sederajat</option>
                                    <option>SMA/Sederajat</option>
                                    <option>D3</option>
                                    <option>D4</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                </select>
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-jurusan">Jurusan Pendidikan
                                    Terakhir</label>
                                <input name="jurusan_pendidikan_terakhir" class="input-field-form" id="input-jurusan"
                                    type="text" required placeholder="Masukan Jurusan Pendidikan Terakhir">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-institusi">Nama
                                    Institusi</label>
                                <input name="nama_institusi" class="input-field-form" id="input-institusi"
                                    type="text" required placeholder="Masukan nama institusi">
                            </div>
                        </div>
                        <div class="form-container w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-kotaInstitusi">Kota
                                    Institusi</label>
                                <input name="kota_institusi" class="input-field-form" id="input-kotaInstitusi"
                                    type="text" required placeholder="Masukan kota institusi">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-tahunKelulusan">Tahun
                                    Kelulusan</label>
                                <input name="lulus_thn_pendidikan_terakhir" class="input-field-form"
                                    id="input-tahunKelulusan" type="number" required
                                    placeholder="Masukan Tahun Kelulusan">
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
                        <div class="form-container w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-nomorTsel">Nomor Handphone
                                    Telkomsel</label>
                                <input name="no_hp_tsel" class="input-field-form" id="input-nomorTsel"
                                    type="tel" required inputmode="numeric"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    required placeholder="Masukan nomor Telkomsel" min="10" maxlength="15"
                                    pattern="[0-9]{10,14}">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-nomorNon-tsel">Nomor Handphone
                                    Non Telkomsel</label>
                                <input name="no_hp_nontsel" class="input-field-form" id="input-nama" type="tel"
                                    required inputmode="numeric"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    required placeholder="Masukan nomor non Telkomsel" min="10" maxlength="15"
                                    pattern="[0-9]{10,14}">
                            </div>
                        </div>

                        <div class="form-container w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-namaKontakEmergency">Nama Kontak
                                    Emergency</label>
                                <input name="nama_kontak_emergency" class="input-field-form"
                                    id="input-namaKontakEmergency" type="text" required
                                    placeholder="Masukan nama kontak Emergency">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-hubunganKontakEmergency">Hubungan
                                    Kontak Emergency</label>
                                <input name="hubungan_kontak_emergency" class="input-field-form"
                                    id="input-hubunganKontakEmergency" type="text" required
                                    placeholder="Masukan hubungan kontak Emergency">
                            </div>
                        </div>

                        <div class="form-container w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-nomorEmergency">Nomor Handphone
                                    Emergency</label>
                                <input name="no_hp_emergency" class="input-field-form" id="input-nomorEmergency"
                                    type="tel" required inputmode="numeric"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    required placeholder="Masukan nomor Telkomsel" min="10" maxlength="15"
                                    pattern="[0-9]{10,14}">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-emailPribadi">Email
                                    Pribadi</label>
                                <input name="email_pribadi" class="input-field-form" id="input-emailPribadi"
                                    type="email" required placeholder="Masukan Email pribadi">
                            </div>
                        </div>

                        <div class="form-container w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="input-ibuKandung">Nama Ibu
                                    Kandung</label>
                                <input name="nama_ibu" class="input-field-form" id="input-ibuKandung" type="text"
                                    required placeholder="Masukan nama ibu kandung">
                            </div>

                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="input-label" for="hs-select"
                                    name="role">Role</label>
                                <select name="role"
                                    class="py-3 px-4 pe-9 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    id="hs-select">
                                    <option disabled selected>Buka untuk memilih</option>
                                    <option>Admin</option>
                                    <option>Pegawai</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Button Group -->
            <div class="flex flex-row justify-between items-center mt-2 px-16">
                <button
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-stepper-back-btn type="button">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                    Back
                </button>
                <button
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-stepper-next-btn type="button">
                    Next
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
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
        </form>
    </div>
</div>

<!-- End Stepper Content -->
<!-- End Stepper -->
