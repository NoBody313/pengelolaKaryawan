<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi KTP</title>
    @include('helper.helper')
</head>

<body>
    <div>
        @if (session('pesanError'))
            <script>
                alert("Error: {{ session('pesanError') }}");
            </script>
        @endif

        @if (session('success'))
            <script>
                alert("Success: {{ session('success') }}");
            </script>
        @endif
    </div>

    <div class="flex flex-col justify-center items-center w-full h-screen">

        <form action="/verify-ktp" method="post"
            class="flex flex-col justify-center items-center bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 gap-4">
            <img src="{{ asset('images/admedLogo.png') }}" alt="logo-admedika" class="mx-auto" width="96">
            <h1 class="font-medium text-lg mt-2 mb-6">Verifikasi KTP</h1>

            @csrf
            <div class="w-full">
                <label for="ktp_start" class="text-gray-800 text-sm font-bold mb-2">4 Digit Awal Nomor KTP:</label>
                <input type="number" name="ktp_start"
                    class="appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2"
                    required>
            </div>
            <div class="w-full">
                <label for="ktp_end" class="text-gray-800 text-sm font-bold mb-2">4 Digit Akhir Nomor KTP:</label>
                <input type="number" name="ktp_end"
                    class="appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2"
                    required>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline">Verifikasi</button>
        </form>
    </div>
</body>

</html>
