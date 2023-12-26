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
    <div class="m-14">
        @include('components.form-data')
    </div>

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Panggil fungsi untuk mengisi select
            fetchProvinsiData();

            // Fungsi untuk mengambil data provinsi dari server
            function fetchProvinsiData() {
                fetch("{{ route('provinsi.index') }}")
                    .then(response => response.json())
                    .then(data => {
                        // Bersihkan opsi sebelum menambahkan yang baru
                        var selectProv = document.getElementById('selectProv');
                        selectProv.innerHTML = '<option value="" disabled selected>Pilih Provinsi</option>';

                        // Tambahkan opsi baru
                        data.forEach(provinsi => {
                            var option = document.createElement('option');
                            option.value = provinsi.id;
                            option.textContent = provinsi.text;
                            selectProv.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }
        });
    </script> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


    <script>
        $(document).ready(function() {
            $("#selectProv").select2({
                placeholder: 'Pilih Provinsi',
                ajax: {
                    url: "{{ route('provinsi.index') }}",
                    data: function(params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data
                        };

                    }
                }
            });

            $("#selectProv").change(function() {
                let id = $('#selectProv').val();

                $("#selectKab").val(null).trigger('change');
                $("#selectKec").val(null).trigger('change');
                $("#selectKel").val(null).trigger('change');

                $("#selectKab").select2({
                    placeholder: 'Pilih Kabupaten',
                    ajax: {
                        url: "{{ url('selectKab') }}/" + id,
                        processResults: function(data) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.text
                                    }
                                })
                            }
                        }
                    },
                });
            });

            $("#selectKab").change(function() {
                let id = $('#selectKab').val();

                $("#selectKec").val(null).trigger('change');
                $("#selectKel").val(null).trigger('change');

                $("#selectKec").select2({
                    placeholder: 'Pilih Kecamatan',
                    ajax: {
                        url: "{{ url('selectKec') }}/" + id,
                        processResults: function(data) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.text
                                    }
                                })
                            }
                        }
                    },
                });
            });

            $("#selectKec").change(function() {
                let id = $('#selectKec').val();

                $("#selectKel").val(null).trigger('change');

                $("#selectKel").select2({
                    placeholder: 'Pilih Keluharan',
                    ajax: {
                        url: "{{ url('selectKel') }}/" + id,
                        processResults: function(data) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.text
                                    }
                                })
                            }
                        }
                    },
                });
            });
        });
    </script>

</body>

</html>
