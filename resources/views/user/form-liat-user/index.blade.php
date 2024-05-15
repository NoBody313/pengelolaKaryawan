<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data {{ optional($data)->nama }}</title>

    @include('helper.helper')
</head>

<body>
    <div class="m-8">
        <div data-hs-stepper class="flex flex-col">
            @yield('stepNav')
            <div class="flex flex-col justify-center items-center py-4">
                @yield('form')
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const finishButton = document.querySelector('[data-hs-stepper-finish-btn]');
            finishButton.addEventListener('click', function(event) {
                event.preventDefault();

                // Tampilkan dialog konfirmasi
                const isDataCorrect = confirm('Apakah data sudah sesuai?');

                // Jika pengguna menekan OK, submit formulir
                if (isDataCorrect) {
                    document.getElementById('updateForm').submit();
                }
            });
        });
    </script>

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
                        fillDropdown('#selectProvKTP', data, '{{ $data->provinsi_ktp }}');
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
                        fillDropdown('#select-kabKota-ktp', data, '{{ $data->kab_kota_ktp }}');
                        fillKecamatanDropdown();
                    }
                });
            }

            $("#select-kabKota-ktp").change(function() {
                fillKecamatanDropdown();
            });

            function fillKecamatanDropdown() {
                let idKabupaten = $('#select-kabKota-ktp').val();
                $.ajax({
                    url: "{{ url('selectKec') }}/" + idKabupaten,
                    success: function(data) {
                        fillDropdown('#selectKecKTP', data, '{{ $data->kec_ktp }}');
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
                        fillDropdown('#selectKelKTP', data, '{{ $data->kel_ktp }}');
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
                        fillDropdown('#selectProvDomisili', data,
                            '{{ $data->provinsi_domisili }}');
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
                        fillDropdown('#selectKabDomisili', data,
                            '{{ $data->kab_kota_domisili }}');
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
                        fillDropdown('#selectKecDomisili', data, '{{ $data->kec_domisili }}');
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
                        fillDropdown('#selectKelDomisili', data, '{{ $data->kel_domisili }}');
                    }
                });
            }
        });
    </script>

</body>

</html>
