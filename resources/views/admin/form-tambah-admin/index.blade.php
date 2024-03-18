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
    <div class="m-8">
        @yield('formTambah')
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
