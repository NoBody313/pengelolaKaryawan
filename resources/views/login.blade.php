<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <meta name="desccription" content="Web Admedika">
    @include('helper.helper')
</head>

<body>
    <div class="flex flex-col justify-center items-center w-full h-screen">
        <form class="flex flex-col justify-center items-center bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 gap-4"
            action="{{ route('login.cekData') }}" method="post">
            @csrf
            <img src="{{ asset('images/admedLogo.png') }}" alt="logo-admedika" class="mx-auto w-auto h-auto" width="96">
            <div class="w-full mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nik_admedika">
                    NIK Admedika
                </label>
                <input
                    class="appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nik_admedika" type="text" placeholder="Masukan NIK Admedika" name="nik_admedika" required>
            </div>
            <div class="w-full">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_lahir">
                    Tanggal Lahir
                </label>
                <input
                    class="appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="tanggal_lahir" type="date" name="tanggal_lahir" required>
            </div>
            <div class="flex items-center justify-center mb-2">
                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Login
                </button>
            </div>

            {!! HCaptcha::display() !!}
            {!! HCaptcha::script() !!}

        </form>
        <p class="text-center text-gray-500 text-xs tracking-wider">
            &copy; 2002 - 2024 | PT. Administrasi Medika
        </p>
    </div>
</body>

</html>
