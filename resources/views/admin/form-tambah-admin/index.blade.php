<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>

    @include('helper.helper')
</head>

<body>
    <nav class="flex flex-col items-center justify-center m-8 md:flex-row">

        @php
            $steps = [
                ['label' => 'Data Pribadi', 'number' => 1, 'route' => 'tambah-data-pribadi'],
                ['label' => 'Alamat KTP', 'number' => 2, 'route' => 'tambah-data-alamat-ktp'],
                ['label' => 'Alamat Domisili', 'number' => 3, 'route' => 'tambah-data-alamat-domisili'],
                ['label' => 'Status Pendidikan & Pernikahan', 'number' => 4, 'route' => 'tambah-data-status'],
                ['label' => 'Kontak', 'number' => 5, 'route' => 'tambah-data-kontak'],
            ];

            $currentRouteName = Route::currentRouteName();
        @endphp

        <ul class="flex flex-wrap items-center justify-center w-full max-w-4xl gap-4">
            <li>
                <a href="{{ url('/admin', ['nik_admedika' => $data->nik_admedika]) }}"
                    class="flex items-center p-2 text-sm w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 40 40"
                        fill="none">
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

            @foreach ($steps as $step)
                <li class="flex items-center shrink basis-0 group">
                    <a href="{{ route($step['route'], ['nik_admedika' => $data->nik_admedika, 'id' => $data->id]) }}"
                        class="min-h-[28px] group inline-flex items-center text-xs align-middle ">
                        <span
                            class="flex items-center justify-center flex-shrink-0 font-medium {{ $currentRouteName === $step['route'] ? 'bg-blue-300' : 'bg-gray-200' }} rounded-full w-7 h-7">
                            <span class="font-bold text-blue-950">{{ $step['number'] }}</span>
                            <svg class="flex-shrink-0 hidden w-3 h-3"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>
                        <span class="w-32 text-xs font-semibold tracking-wide ms-3 text-slate-900">
                            {{ $step['label'] }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>

    <div class="flex flex-col items-center justify-center w-full py-4">
        <div class="w-full max-w-2xl">
            @yield('contentForm')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Fungsi untuk mengisi dropdown provinsi
            function fillDropdown(elementId, data, placeholder) {
                $(elementId).empty();
                $(elementId).append('<option value="" disabled selected>' + placeholder + '</option>');
                data.forEach(function(item) {
                    $(elementId).append('<option value="' + item.text.toUpperCase() + '">' + item.text
                        .toUpperCase() + '</option>');
                });
            }

            // Dropdown KTP
            function fillProvinsiDropdown() {
                $.ajax({
                    url: "{{ route('provinsi.index') }}",
                    data: {
                        q: $('#selectProvKTP').val()
                    },
                    success: function(data) {
                        fillDropdown('#selectProvKTP', data, 'Pilih Provinsi');
                        fillKabupatenDropdown();
                    }
                });
            }

            $(document).ready(function() {
                fillProvinsiDropdown();
                $("#selectProvKTP").change(function() {
                    fillKabupatenDropdown();
                });
            });

            function fillKabupatenDropdown() {
                let idProvinsi = $('#selectProvKTP').val();
                $.ajax({
                    url: "{{ url('selectKab') }}/" + idProvinsi,
                    success: function(data) {
                        fillDropdown('#selectKabKTP', data, 'Pilih Kabupaten');
                        fillKecamatanDropdown();
                    }
                });
            }

            $("#selectKabKTP").change(function() {
                fillKecamatanDropdown();
            });

            function fillKecamatanDropdown() {
                let idKabupaten = $('#selectKabKTP').val();
                $.ajax({
                    url: "{{ url('selectKec') }}/" + idKabupaten,
                    success: function(data) {
                        fillDropdown('#selectKecKTP', data, 'Pilih Kecamatan');
                        fillKelurahanDropdown();
                    }
                });
            }

            $("#selectKecKTP").change(function() {
                fillKelurahanDropdown();
            });

            function fillKelurahanDropdown() {
                let idKecamatan = $('#selectKecKTP').val();
                $.ajax({
                    url: "{{ url('selectKel') }}/" + idKecamatan,
                    success: function(data) {
                        fillDropdown('#selectKelKTP', data, 'Pilih Kelurahan');
                    }
                });
            }

            // Dropdown Domisili
            function fillProvinsiDomisiliDropdown() {
                $.ajax({
                    url: "{{ route('provinsi.index') }}",
                    data: {
                        q: $('#selectProvDomisili').val()
                    },
                    success: function(data) {
                        fillDropdown('#selectProvDomisili', data, 'Pilih Provinsi Domisili');
                        fillKabupatenDomisiliDropdown();
                    }
                });
            }

            fillProvinsiDomisiliDropdown();

            $("#selectProvDomisili").change(function() {
                fillKabupatenDomisiliDropdown();
            });

            function fillKabupatenDomisiliDropdown() {
                let idProvinsi = $('#selectProvDomisili').val();
                $.ajax({
                    url: "{{ url('selectKab') }}/" + idProvinsi,
                    success: function(data) {
                        fillDropdown('#selectKabDomisili', data, 'Pilih Kabupaten Domisili');
                        fillKecamatanDomisiliDropdown();
                    }
                });
            }

            $("#selectKabDomisili").change(function() {
                fillKecamatanDomisiliDropdown();
            });

            function fillKecamatanDomisiliDropdown() {
                let idKabupaten = $('#selectKabDomisili').val();
                $.ajax({
                    url: "{{ url('selectKec') }}/" + idKabupaten,
                    success: function(data) {
                        fillDropdown('#selectKecDomisili', data, 'Pilih Kecamatan Domisili');
                        fillKelurahanDomisiliDropdown();
                    }
                });
            }

            $("#selectKecDomisili").change(function() {
                fillKelurahanDomisiliDropdown();
            });

            function fillKelurahanDomisiliDropdown() {
                let idKecamatan = $('#selectKecDomisili').val();
                $.ajax({
                    url: "{{ url('selectKel') }}/" + idKecamatan,
                    success: function(data) {
                        fillDropdown('#selectKelDomisili', data, 'Pilih Kelurahan Domisili');
                    }
                });
            }
        });
    </script>
</body>

</html>
