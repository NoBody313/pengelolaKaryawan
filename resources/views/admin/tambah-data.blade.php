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
        @include('components.form-data')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Dropdown KTP
        $(document).ready(function() {
            // Fungsi untuk mengisi dropdown provinsi
            function fillProvinsiDropdown() {
                // Implementasi AJAX untuk mengambil data provinsi
                $.ajax({
                    url: "{{ route('provinsi.index') }}",
                    data: {
                        q: $('#selectProvKTP').val()
                    },
                    success: function(data) {
                        // Hapus semua opsi sebelum menambahkan yang baru
                        $('#selectProvKTP').empty();

                        // Tambahkan opsi placeholder
                        $('#selectProvKTP').append(
                            '<option value="" disabled selected>Pilih Provinsi</option>');

                        // Tambahkan opsi baru berdasarkan data yang diterima
                        data.forEach(function(item) {
                            $('#selectProvKTP').append('<option value="' + item.id + '">' + item
                                .text + '</option>');
                        });

                        // Memanggil fungsi untuk mengisi dropdown kabupaten
                        fillKabupatenDropdown();
                    }
                });
            }

            // Mengisi dropdown provinsi saat halaman dimuat
            fillProvinsiDropdown();

            // Menangani perubahan pada dropdown provinsi
            $("#selectProvKTP").change(function() {
                // Memanggil fungsi untuk mengisi dropdown kabupaten
                fillKabupatenDropdown();
            });

            // Fungsi untuk mengisi dropdown kabupaten
            function fillKabupatenDropdown() {
                let idProvinsi = $('#selectProvKTP').val();

                // Implementasi AJAX untuk mengambil data kabupaten
                $.ajax({
                    url: "{{ url('selectKab') }}/" + idProvinsi,
                    success: function(data) {
                        // Hapus semua opsi sebelum menambahkan yang baru
                        $('#selectKabKTP').empty();

                        // Tambahkan opsi placeholder
                        $('#selectKabKTP').append(
                            '<option value="" disabled selected>Pilih Kabupaten</option>');

                        // Tambahkan opsi baru berdasarkan data yang diterima
                        data.forEach(function(item) {
                            $('#selectKabKTP').append('<option value="' + item.id + '">' + item
                                .text + '</option>');
                        });

                        // Memanggil fungsi untuk mengisi dropdown kecamatan
                        fillKecamatanDropdown();
                    }
                });
            }

            // Menangani perubahan pada dropdown kabupaten
            $("#selectKabKTP").change(function() {
                // Memanggil fungsi untuk mengisi dropdown kecamatan
                fillKecamatanDropdown();
            });

            // Fungsi untuk mengisi dropdown kecamatan
            function fillKecamatanDropdown() {
                let idKabupaten = $('#selectKabKTP').val();

                // Implementasi AJAX untuk mengambil data kecamatan
                $.ajax({
                    url: "{{ url('selectKec') }}/" + idKabupaten,
                    success: function(data) {
                        // Hapus semua opsi sebelum menambahkan yang baru
                        $('#selectKecKTP').empty();

                        // Tambahkan opsi placeholder
                        $('#selectKecKTP').append(
                            '<option value="" disabled selected>Pilih Kecamatan</option>');

                        // Tambahkan opsi baru berdasarkan data yang diterima
                        data.forEach(function(item) {
                            $('#selectKecKTP').append('<option value="' + item.id + '">' + item
                                .text + '</option>');
                        });

                        // Memanggil fungsi untuk mengisi dropdown kelurahan
                        fillKelurahanDropdown();
                    }
                });
            }

            // Menangani perubahan pada dropdown kecamatan
            $("#selectKecKTP").change(function() {
                // Memanggil fungsi untuk mengisi dropdown kelurahan
                fillKelurahanDropdown();
            });

            // Fungsi untuk mengisi dropdown kelurahan
            function fillKelurahanDropdown() {
                let idKecamatan = $('#selectKecKTP').val();

                // Implementasi AJAX untuk mengambil data kelurahan
                $.ajax({
                    url: "{{ url('selectKel') }}/" + idKecamatan,
                    success: function(data) {
                        // Hapus semua opsi sebelum menambahkan yang baru
                        $('#selectKelKTP').empty();

                        // Tambahkan opsi placeholder
                        $('#selectKelKTP').append(
                            '<option value="" disabled selected>Pilih Kelurahan</option>');

                        // Tambahkan opsi baru berdasarkan data yang diterima
                        data.forEach(function(item) {
                            $('#selectKelKTP').append('<option value="' + item.id + '">' + item
                                .text + '</option>');
                        });
                    }
                });
            }
        });

        // Dropdown Domisili
        $(document).ready(function() {
            // Fungsi untuk mengisi dropdown provinsi
            function fillProvinsiDomisiliDropdown() {
                // Implementasi AJAX untuk mengambil data provinsi
                $.ajax({
                    url: "{{ route('provinsi.index') }}",
                    data: {
                        q: $('#selectProvDomisili').val()
                    },
                    success: function(data) {
                        // Hapus semua opsi sebelum menambahkan yang baru
                        $('#selectProvDomisili').empty();

                        // Tambahkan opsi placeholder
                        $('#selectProvDomisili').append(
                            '<option value="" disabled selected>Pilih Provinsi</option>');

                        // Tambahkan opsi baru berdasarkan data yang diterima
                        data.forEach(function(item) {
                            $('#selectProvDomisili').append('<option value="' + item.id + '">' +
                                item
                                .text + '</option>');
                        });

                        // Memanggil fungsi untuk mengisi dropdown kabupaten
                        fillKabupatenDomisiliDropdown();
                    }
                });
            }

            // Mengisi dropdown provinsi saat halaman dimuat
            fillProvinsiDomisiliDropdown();

            // Menangani perubahan pada dropdown provinsi
            $("#selectProvDomisili").change(function() {
                // Memanggil fungsi untuk mengisi dropdown kabupaten
                fillKabupatenDomisiliDropdown();
            });

            // Fungsi untuk mengisi dropdown kabupaten
            function fillKabupatenDomisiliDropdown() {
                let idProvinsi = $('#selectProvDomisili').val();

                // Implementasi AJAX untuk mengambil data kabupaten
                $.ajax({
                    url: "{{ url('selectKab') }}/" + idProvinsi,
                    success: function(data) {
                        // Hapus semua opsi sebelum menambahkan yang baru
                        $('#selectKabDomisili').empty();

                        // Tambahkan opsi placeholder
                        $('#selectKabDomisili').append(
                            '<option value="" disabled selected>Pilih Kabupaten</option>');

                        // Tambahkan opsi baru berdasarkan data yang diterima
                        data.forEach(function(item) {
                            $('#selectKabDomisili').append('<option value="' + item.id + '">' +
                                item
                                .text + '</option>');
                        });

                        // Memanggil fungsi untuk mengisi dropdown kecamatan
                        fillKecamatanDomisiliDropdown();
                    }
                });
            }

            // Menangani perubahan pada dropdown kabupaten
            $("#selectKabDomisili").change(function() {
                // Memanggil fungsi untuk mengisi dropdown kecamatan
                fillKecamatanDomisiliDropdown();
            });

            // Fungsi untuk mengisi dropdown kecamatan
            function fillKecamatanDomisiliDropdown() {
                let idKabupaten = $('#selectKabDomisili').val();

                // Implementasi AJAX untuk mengambil data kecamatan
                $.ajax({
                    url: "{{ url('selectKec') }}/" + idKabupaten,
                    success: function(data) {
                        // Hapus semua opsi sebelum menambahkan yang baru
                        $('#selectKecDomisili').empty();

                        // Tambahkan opsi placeholder
                        $('#selectKecDomisili').append(
                            '<option value="" disabled selected>Pilih Kecamatan</option>');

                        // Tambahkan opsi baru berdasarkan data yang diterima
                        data.forEach(function(item) {
                            $('#selectKecDomisili').append('<option value="' + item.id + '">' +
                                item
                                .text + '</option>');
                        });

                        // Memanggil fungsi untuk mengisi dropdown kelurahan
                        fillKelurahanDomisiliDropdown();
                    }
                });
            }

            // Menangani perubahan pada dropdown kecamatan
            $("#selectKecDomisili").change(function() {
                // Memanggil fungsi untuk mengisi dropdown kelurahan
                fillKelurahanDomisiliDropdown();
            });

            // Fungsi untuk mengisi dropdown kelurahan
            function fillKelurahanDomisiliDropdown() {
                let idKecamatan = $('#selectKecDomisili').val();

                // Implementasi AJAX untuk mengambil data kelurahan
                $.ajax({
                    url: "{{ url('selectKel') }}/" + idKecamatan,
                    success: function(data) {
                        // Hapus semua opsi sebelum menambahkan yang baru
                        $('#selectKelDomisili').empty();

                        // Tambahkan opsi placeholder
                        $('#selectKelDomisili').append(
                            '<option value="" disabled selected>Pilih Kelurahan</option>');

                        // Tambahkan opsi baru berdasarkan data yang diterima
                        data.forEach(function(item) {
                            $('#selectKelDomisili').append('<option value="' + item.id + '">' +
                                item
                                .text + '</option>');
                        });
                    }
                });
            }
        });
    </script>

</body>

</html>
