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

    {{-- @include('helper.helper-script') --}}

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
                    },
                },
            });
        });
    </script>
</body>

</html>
