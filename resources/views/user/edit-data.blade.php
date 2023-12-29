<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data {{ optional($pegawaiData)->nama }}</title>

    @include('helper.helper')
</head>

<body>
<div data-hs-stepper>

    <ul class="relative flex flex-row gap-x-2 max-w-xs mx-auto">
        <!-- Item -->
        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
            data-hs-stepper-nav-item='{
                "index": 1
              }'>
            <div class="min-w-[28px] min-h-[28px] w-full inline-flex items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full">
                        1
                    </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
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
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full">
                        2
                    </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
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
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full">
                        3
                    </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
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
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full">
                        4
                    </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
            </div>
        </li>
        <!-- End Item -->
    </ul>
    <!-- End Stepper Nav -->

    <form action="{{ route('update-data-karyawan', ['id' => $pegawaiData->id]) }}" method="POST">
        @csrf
        @method('PUT')
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
                            <input name="nik_admedika"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="nik_admedika" type="number" inputmode="numeric"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   maxlength="6" pattern="[0-9]{6}"
                                   value="{{ optional($pegawaiData)->nik_admedika }}">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-nikTg">NIK TG</label>
                            <input name="nik_tg"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-nikTg" type="number" inputmode="numeric"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   maxlength="6" pattern="[0-9]{6}"
                                   value="{{ optional($pegawaiData)->nik_tg }}">
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label class="block text-sm font-medium mb-2" for="input-nama">Nama</label>
                        <input name="nama"
                               class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                               id="input-nama" type="text" value="{{ optional($pegawaiData)->nama }}">
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="hs-select" name="
                                    -label-jenisKelamin">Jenis
                                Kelamin</label>
                            <select name="jenis_kelamin"
                                    class="py-3 px-4 pe-9 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    id="hs-select">
                                <option disabled selected>{{ $pegawaiData->jenis_kelamin }}</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="hs-select"
                                   name="label-agama">Agama</label>
                            <select
                                class="py-3 px-4 pe-9 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="hs-select" name="label-agama">
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
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-kotaKelahiran">Kota
                                Kelahiran</label>
                            <input name="kota_lahir"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-kotaKelahiran" type="text"
                                   value="{{ optional($pegawaiData)->kota_lahir }}">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-ttl">Tanggal Lahir</label>
                            <input name="tanggal_lahir"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-ttl" type="date"
                                   value="{{ optional($pegawaiData)->tanggal_lahir }}">
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-tahunLahir">Tahun
                                Lahir</label>
                            <input name="tahun_lahir"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-tahunLahir" type="number" inputmode="numeric"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   min="0" maxlength="4"
                                   value="{{ optional($pegawaiData)->tahun_lahir }}">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-noKTP">No. KTP</label>
                            <input name="no_ktp"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-noKTP" type="number" inputmode="numeric"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   min="0" maxlength="16"
                                   value="{{ optional($pegawaiData)->no_ktp }}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End First Contnet -->

            <!-- First Contnet -->
            <div data-hs-stepper-content-item='{
                    "index": 2
                  }'
                 style="display: none;">
                <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                    <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-alamatKTP">Alamat
                                Lengkap</label>
                            <input name="alamat_ktp"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-alamatKTP" type="text"
                                   value="{{ optional($pegawaiData)->alamat_ktp }}">
                        </div>
                        <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-kabKota">Kab/Kota</label>
                                <input name="kab_kota_ktp"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-kabKota" type="text"
                                       value="{{ optional($pegawaiData)->kab_kota_ktp }}">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2"
                                       for="input-provinsi">Provinsi</label>
                                <input name="provinsi_ktp"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-provinsi" type="text"
                                       value="{{ optional($pegawaiData)->provinsi_ktp }}">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-kodePos">Kode Pos</label>
                                <input name="kodepos_ktp"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-kodePos" type="number" inputmode="numeric"
                                       oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                       min="0" maxlength="5"
                                       value="{{ optional($pegawaiData)->provinsi_ktp }}">
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-alamatLengkap">Alamat
                                Lengkap</label>
                            <input name="alamat_domisili"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-alamatLengkap" type="text"
                                   value="{{ optional($pegawaiData)->alamat_domisili }}">
                        </div>
                        <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2"
                                       for="input-kabKotaDomisili">Kab/Kota</label>
                                <input name="kab_kota_domisili"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-kabKotaDomisili" type="text"
                                       value="{{ optional($pegawaiData)->kab_kota_domisili }}">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2"
                                       for="input-provinsiDomsili">Provinsi</label>
                                <input name="provinsi_domisili"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-provinsiDomsili" type="text"
                                       value="{{ optional($pegawaiData)->provinsi_domisili }}">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-kodePosDomisili">Kode
                                    Pos</label>
                                <input name="kodepos_domisili"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-kodePosDomisili" type="number" inputmode="numeric"
                                       oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                       min="0" maxlength="5"
                                       value="{{ optional($pegawaiData)->provinsi_domisili }}">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End First Contnet -->

            <!-- First Contnet -->
            <div data-hs-stepper-content-item='{
                    "index": 3
                  }'
                 style="display: none;">
                <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                    <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                        <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-statusPernikahan">Status
                                    Pernihan</label>
                                <select name="status_pernikahan"
                                        class="py-3 px-4 pe-9 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        id="input-statusPernikahan">
                                    <option disabled selected>{{ $pegawaiData->status_pernikahan }}</option>
                                    <option>Belum Menikah</option>
                                    <option>Menikah</option>
                                    <option>Cerai Hidup</option>
                                    <option>Cerai Mati</option>
                                </select>
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-tgl-menikah">Tanggal
                                    Menikah</label>
                                <input name="tanggal_pernikahan"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-ttl" type="date"
                                       value="{{ optional($pegawaiData)->tanggal_pernikahan }}">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-jumlah-anak">Jumlah
                                    Anak</label>
                                <input name="jumlah_anak"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-kotaKelahiran" type="number"
                                       value="{{ optional($pegawaiData)->jumlah_anak }}">
                            </div>
                        </div>
                        <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-pendidikan">Pendidikan
                                    Terakhir</label>
                                <select name="pendidikan_terakhir"
                                        class="py-3 px-4 pe-9 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        id="input-pendidikan">
                                    <option disabled selected>{{ $pegawaiData->pendidikan_terakhir }}</option>
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
                                <label class="block text-sm font-medium mb-2" for="input-jurusan">Jurusan
                                    Pendidikan
                                    Terakhir</label>
                                <input name="jurusan_pendidikan_terakhir"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-jurusan" type="text"
                                       value="{{ optional($pegawaiData)->jurusan_pendidikan_terakhir }}">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-institusi">Nama
                                    Institusi</label>
                                <input name="nama_institusi"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-institusi" type="text"
                                       value="{{ optional($pegawaiData)->nama_institusi }}">
                            </div>
                        </div>
                        <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-kotaInstitusi">Kota
                                    Institusi</label>
                                <input name="kota_institusi"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-kotaInstitusi" type="text"
                                       value="{{ optional($pegawaiData)->kota_institusi }}">
                            </div>
                            <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                                <label class="block text-sm font-medium mb-2" for="input-tahunKelulusan">Tahun
                                    Kelulusan</label>
                                <input name="lulus_thn_pendidikan_terakhir"
                                       class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                       id="input-tahunKelulusan" type="text"
                                       value="{{ optional($pegawaiData)->lulus_thn_pendidikan_terakhir }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End First Contnet -->

            <!-- First Contnet -->
            <div data-hs-stepper-content-item='{
                    "index": 4
                  }'
                 style="display: none;">
                <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-emailPribadi">Email
                                Pribadi</label>
                            <input name="email_pribadi"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-emailPribadi" type="email"
                                   value="{{ optional($pegawaiData)->email_pribadi }}">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-nomorTsel">Nomor Handphone
                                Telkomsel</label>
                            <input name="no_hp_tsel"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-nomorTsel" type="tel" inputmode="numeric"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   value="{{ optional($pegawaiData)->no_hp_tsel }}" min="10"
                                   maxlength="15" pattern="[0-9]{10,14}">
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-nomorNon-tsel">Nomor
                                Handphone
                                Non Telkomsel</label>
                            <input name="no_hp_nontsel"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-nama" type="tel" inputmode="numeric"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   value="{{ optional($pegawaiData)->no_hp_nontsel }}" min="10"
                                   maxlength="15" pattern="[0-9]{10,14}">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-nomorEmergency">Nomor
                                Handphone
                                Emergency</label>
                            <input name="no_hp_emergency"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-nomorEmergency" type="tel" inputmode="numeric"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   value="{{ optional($pegawaiData)->no_hp_emergency }}" min="10"
                                   maxlength="15" pattern="[0-9]{10,14}">
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2" for="input-namaKontakEmergency">Nama
                                Kontak
                                Emergency</label>
                            <input name="nama_kontak_emergency"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-namaKontakEmergency" type="text"
                                   value="{{ optional($pegawaiData)->nama_kontak_emergency }}">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label class="block text-sm font-medium mb-2"
                                   for="input-hubunganKontakEmergency">Hubungan
                                Kontak Emergency</label>
                            <input name="hubungan_kontak_emergency"
                                   class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                   id="input-hubunganKontakEmergency" type="text"
                                   value="{{ optional($pegawaiData)->hubungan_kontak_emergency }}">
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label class="block text-sm font-medium mb-2" for="input-ibuKandung">Nama Ibu
                            Kandung</label>
                        <input name="nama_ibu"
                               class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                               id="input-ibuKandung" type="text"
                               value="{{ optional($pegawaiData)->nama_ibu }}">
                    </div>
                </div>
            </div>


            <!-- Button Group -->
            <div class="mt-5 flex justify-between items-center gap-x-2">
                <button
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-stepper-back-btn type="button">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                    Back
                </button>
                <button
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-stepper-next-btn type="button">
                    Next
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
</div>
</body>

</html>
