<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @include('helper.helper')
</head>

<body>
    <div class="flex flex-col justify-center items-center w-screen h-screen">
        <form class="flex flex-col justify-center items-center px-8 pt-6 pb-8 mb-4 gap-4"
            action="{{ route('login.cekData') }}" method="post">
            @csrf
            <img src="{{ asset('images/admedLogo.png') }}" alt="logo-admedika" class="mx-auto" width="96">
            @if (session('pesanError'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4"
                    role="alert">
                    <strong class="font-bold">{{ session('pesanError') }}</strong>
                    @if (session('timeLeft'))
                        <br>
                        Akun akan terbuka dalam <span id="countdown">{{ session('timeLeft') }}</span> detik.
                    @endif
                </div>
            @endif
            <div class="w-full mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nik_admedika">
                    NIK Admedika
                </label>
                <input
                    class="appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nik_admedika" type="text" placeholder="Masukan NIK Admedika" name="nik_admedika" required
                    @if (session('timeLeft')) disabled @endif {{-- pattern="[0-9]{6}" oninput="this.value = this.value.replace(/[^0-9]/g, '');" --}}>
            </div>
            <div class="w-full">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_lahir">
                    Tanggal Lahir
                </label>
                <input
                    class="appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="tanggal_lahir" type="date" name="tanggal_lahir" required
                    @if (session('timeLeft')) disabled @endif>
            </div>
            <div class="w-full">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="no_ktp">
                    Nomor KTP
                </label>
                <input
                    class="appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="no_ktp" type="text" inputmode="numeric" name="no_ktp"
                    placeholder="Masukkan Nomor KTP anda" required @if (session('timeLeft')) disabled @endif
                    {{-- pattern="[0-9]{16}" oninput="this.value = this.value.replace(/[^0-9]/g, '');" --}}>

            </div>
            <div class="flex w-full items-center justify-center">
                <button
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit" @if (session('timeLeft')) disabled @endif>
                    @if (session('timeLeft'))
                        <span id="countdownButton" class="text-white">Countdown: {{ session('timeLeft') }} detik</span>
                    @else
                        Login
                    @endif
                </button>
            </div>

            {!! NoCaptcha::display() !!}
            {!! NoCaptcha::renderJs() !!}

            {{-- //Test --}}

            {{-- {!! HCaptcha::display() !!}
            {!! HCaptcha::script() !!} --}}

        </form>
        <p class="text-center text-gray-500 text-xs tracking-wider">
            &copy; 2002 - 2024 | PT. Administrasi Medika
        </p>

        <script>
            var countdownElement = document.getElementById('countdown');
            var countdownButtonElement = document.getElementById('countdownButton');
            var countdownValue = {{ session('timeLeft', 0) }};

            function updateCountdown() {
                if (countdownValue > 0) {
                    countdownElement.textContent = countdownValue;
                    countdownButtonElement.textContent = 'Hitung Mundur: ' + countdownValue + ' Detik';
                    countdownValue--;

                    setTimeout(updateCountdown, 1000);
                } else {
                    location.reload();
                }
            }

            if (countdownValue > 0) {
                updateCountdown();
            }
        </script>
    </div>
</body>

</html>
