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

</body>

</html>
