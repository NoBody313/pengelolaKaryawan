@extends('admin.form-edit-admin.index')

@section('stepNav')
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
                        Alamat
                    </span>
                </span>
            </li>

            <li class="flex items-center basis-0 flex-1">
                <div class="min-h-[28px] inline-flex items-center text-xs align-middle">
                    <div
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-blue-300 font-medium rounded-full">
                        <p class="text-blue-950 font-bold">3</p>
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
                        <p class="text-blue-950 font-bold">4</p>
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
@endsection

@section('contentForm')
    <form id="updateForm"
        action="{{ route('post-edit-status', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
        method="POST" class="flex flex-col w-full" id="formData">
        @csrf
        <div class="flex flex-col my-4 w-full">
            <!-- First Contnet -->
            <div class="form-layout">
                <div class="flex flex-col justify-center items-center gap-4 w-full">
                    <span class="flex justify-start items-start w-[660px] mt-2 font-semibold tracking-wide">Riwayat
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
                            <input name="jurusan_pendidikan_terakhir" class="input-field-form" id="input-jurusan"
                                required type="text" value="{{ optional($pegawaiData)->jurusan_pendidikan_terakhir }}">
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
                <div class="flex flex-col justify-center items-center gap-4 w-full">
                    <span class="flex justify-start items-start w-[660px] mt-2 font-semibold tracking-wide">Status
                        Pernikahan</span>
                    <div class="form-container">
                        <div class="input-layout">
                            <label class="input-label" for="input-statusPernikahan">Status Pernikahan</label>
                            <select name="status_pernikahan" class="input-field-form" id="input-statusPernikahan"
                                required>
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
        <div class="flex flex-row justify-around items-center">
            <a href="{{ route('edit-alamat-domisili', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Back
            </a>
            <button
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none"
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
                    // Set semua elemen lain ke disabled dan kosongkan nilainya
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

            // Tambahkan event listener untuk perubahan pada elemen status pernikahan
            statusPernikahan.addEventListener("change", handleStatusPernikahan);

            // Panggil fungsi untuk menangani status pernikahan saat halaman dimuat
            handleStatusPernikahan();
        });
    </script>
@endsection
