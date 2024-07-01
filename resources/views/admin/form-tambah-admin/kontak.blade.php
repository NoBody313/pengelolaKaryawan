@extends('admin.form-tambah-admin.index')

@section('contentForm')
    <form action="{{ route('store-tambah-data-kontak', ['nik_admedika' => $data->nik_admedika]) }}" method="POST">
        @csrf
        <div class="flex flex-col w-full my-4">
            <div class="form-layout">
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-nomorTsel">Nomor Handphone
                            Telkomsel</label>
                        <input name="no_hp_tsel" class="input-field-form" id="input-nomorTsel" type="tel" required
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            placeholder="Masukan nomor Telkomsel" min="10" maxlength="15" pattern="[0-9]{10,14}">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-nomorNon-tsel">Nomor Handphone
                            Non Telkomsel</label>
                        <input name="no_hp_nontsel" class="input-field-form" id="input-nama" type="tel"
                            inputmode="numeric"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            placeholder="Masukan nomor non Telkomsel" min="10" maxlength="15" pattern="[0-9]{10,14}">
                    </div>
                </div>
                <div class="form-container">
                    <div class="input-layout">
                        <label class="input-label" for="input-namaKontakEmergency">Nama Kontak
                            Emergency</label>
                        <input name="nama_kontak_emergency" class="input-field-form" id="input-namaKontakEmergency"
                            type="text" required placeholder="Masukan nama kontak Emergency">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-hubunganKontakEmergency">Hubungan Kontak
                            Emergency</label>
                        <select name="hubungan_kontak_emergency" class="input-field-form pe-9"
                            id="input-hubunganKontakEmergency" required>
                            <option disabled selected>Buka untuk memilih</option>
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
                            required placeholder="Masukan nomor Telkomsel" min="10" maxlength="15"
                            pattern="[0-9]{10,14}">
                        @include('components.required-kol')
                    </div>
                    <div class="input-layout">
                        <label class="input-label" for="input-emailPribadi">Email
                            Pribadi</label>
                        <input name="email_pribadi" class="input-field-form" id="input-emailPribadi" type="email" required
                            placeholder="Masukan Email pribadi">
                        @include('components.required-kol')
                    </div>
                </div>
                <div class="form-container">
                    <div class="flex flex-col justify-center items-center gap-2 self-stretch w-full md:w-[660px]">
                        <label class="input-label" name="role">Role</label>
                        <select name="role" class="normal-case input-role">
                            <option disabled selected>Buka untuk memilih</option>
                            <option class="normal-case">Admin</option>
                            <option class="normal-case">Pegawai</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button Group -->
        <div class="flex flex-row items-center justify-around">
            <a href="{{ route('tambah-data-status', ['nik_admedika' => $data->nik_admedika]) }}"
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
                Submit
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
            // Mengambil semua elemen input dan select dalam dokumen
            var inputElements = document.querySelectorAll("input, select");

            // Menggunakan loop untuk menerapkan perubahan pada setiap elemen input dan select
            inputElements.forEach(function(element) {
                // Menambahkan event listener untuk setiap elemen input dan select
                element.addEventListener("input", function() {
                    // Mengonversi nilai input atau teks opsi select menjadi huruf kapital
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
        });
    </script>
@endsection
