@extends('admin.form-edit-admin.index')

@section('contentForm')
    <form id="updateForm"
        action="{{ route('post-edit-status', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
        method="POST"id="formData">
        @csrf
        <div class="flex flex-col w-full my-4">
            <!-- First Contnet -->
            <div class="form-layout">
                <div class="flex flex-col items-center justify-center w-full gap-4">
                    <span class="flex items-start justify-start w-full mt-2 font-semibold tracking-wide">Riwayat
                        Pendidikan</span>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="input-pendidikan">Pendidikan
                                Terakhir</label>
                            <select name="pendidikan_terakhir" class="input-field-form" id="input-pendidikan" required>
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
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="input-jurusan">Jurusan
                                Pendidikan
                                Terakhir</label>
                            <input name="jurusan_pendidikan_terakhir" class="input-field-form" id="input-jurusan" required
                                type="text" value="{{ optional($pegawaiData)->jurusan_pendidikan_terakhir }}">
                            @include('components.required-kol')
                        </div>
                    </div>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="input-institusi">Nama
                                Institusi</label>
                            <input name="nama_institusi" class="input-field-form" id="input-institusi" type="text"
                                required value="{{ optional($pegawaiData)->nama_institusi }}">
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="input-kotaInstitusi">Kota
                                Institusi</label>
                            <input name="kota_institusi" class="input-field-form" id="input-kotaInstitusi" required
                                type="text" value="{{ optional($pegawaiData)->kota_institusi }}">
                            @include('components.required-kol')
                        </div>
                    </div>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="input-tahunKelulusan">Tahun
                                Kelulusan</label>
                            <input name="lulus_thn_pendidikan_terakhir" class="input-field-form" required
                                id="input-tahunKelulusan" type="text"
                                value="{{ optional($pegawaiData)->lulus_thn_pendidikan_terakhir }}">
                            @include('components.required-kol')
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center w-full gap-4">
                    <span class="flex items-start justify-start w-full mt-2 font-semibold tracking-wide">Status
                        Pernikahan</span>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="input-statusPernikahan">Status Pernikahan</label>
                            <select name="status_pernikahan" class="input-field-form" id="input-statusPernikahan" required>
                                <option disabled selected>{{ $pegawaiData->status_pernikahan }}
                                </option>
                                <option>Belum Menikah</option>
                                <option>Menikah</option>
                                <option>Janda</option>
                                <option>Duda</option>
                            </select>
                            @include('components.required-kol')
                        </div>
                        <div class="input-layout">
                            <label class="input-label" for="input-tgl-menikah">Tanggal
                                Menikah</label>
                            <input name="tanggal_pernikahan" class="input-field-form" id="input-tgl-menikah" type="date"
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
                            <input name="jumlah_anak" class="input-field-form" id="jumlah_anak" type="number"
                                value="{{ optional($pegawaiData)->jumlah_anak }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End First Contnet -->

        <!-- Button Group -->
        <div class="flex flex-row items-center justify-around">
            <a href="{{ route('edit-alamat-domisili', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var inputElements = document.querySelectorAll("input, select");
            inputElements.forEach(function(element) {
                element.addEventListener("input", function() {
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

            const statusPernikahan = document.getElementById("input-statusPernikahan");
            const tanggalMenikah = document.getElementById("input-tgl-menikah");
            const namaPasangan = document.getElementById("nama_pasangan");
            const jumlahAnak = document.getElementById("jumlah_anak");

            function handleStatusPernikahan() {
                if (statusPernikahan.value === "BELUM MENIKAH") {
                    tanggalMenikah.disabled = true;
                    tanggalMenikah.value = "";
                    namaPasangan.disabled = true;
                    namaPasangan.value = "";
                    jumlahAnak.disabled = true;
                    jumlahAnak.value = "";
                } else if (statusPernikahan.value === "JANDA" || statusPernikahan.value === "DUDA") {
                    tanggalMenikah.disabled = true;
                    tanggalMenikah.value = "";
                    namaPasangan.disabled = true;
                    namaPasangan.value = "";
                    jumlahAnak.disabled = false;
                } else {
                    tanggalMenikah.disabled = false;
                    namaPasangan.disabled = false;
                    jumlahAnak.disabled = false;
                }
            }

            statusPernikahan.addEventListener("change", handleStatusPernikahan);
            handleStatusPernikahan();
        });
    </script>
@endsection
