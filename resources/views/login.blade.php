<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @include('helper.helper')
    {{-- {!! NoCaptcha::renderJs() !!} --}}
    <script src="https://www.google.com/recaptcha/api.js" nonce="{{ csp_nonce() }}" defer></script>
</head>

<body>
    <div class="flex flex-col items-center justify-center w-screen h-screen"
        style="background-image: url('{{ asset('images/BG5.jpg') }}'); background-size: cover;">
        <form class="flex flex-col items-center justify-center gap-4 px-8 pt-6 pb-8 mb-4"
            action="{{ route('login.cekData') }}" method="post">
            @csrf
            <img src="{{ asset('images/AdMedika Logo RedWhite.png') }}" alt="logo-admedika" class="mx-auto"
                width="128">
            @if (session('pesanError'))
                <div class="relative px-4 py-3 mt-4 text-red-700 bg-red-100 border border-red-400 rounded"
                    role="alert">
                    <strong class="font-bold">{{ session('pesanError') }}</strong>
                    @if (session('timeLeft'))
                        <br>
                        Akun akan terbuka dalam <span id="countdown">{{ session('timeLeft') }}</span> detik.
                    @endif
                </div>
            @endif
            <div class="w-full mt-6">
                <label class="block mb-2 text-sm font-bold text-white" for="nik_admedika">
                    NIK Admedika
                </label>
                <input
                    class="w-full p-3 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                    id="nik_admedika" type="text" placeholder="Masukan NIK Admedika" name="nik_admedika" required
                    @if (session('timeLeft')) disabled @endif {{-- pattern="[0-9]{6}" oninput="this.value = this.value.replace(/[^0-9]/g, '');" --}}>
            </div>
            <div class="w-full">
                <label class="block mb-2 text-sm font-bold text-white" for="tanggal_lahir">
                    Tanggal Lahir
                </label>
                <input
                    class="w-full p-3 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                    id="tanggal_lahir" type="date" name="tanggal_lahir" required
                    @if (session('timeLeft')) disabled @endif>
            </div>
            <div class="w-full">
                <label class="block mb-2 text-sm font-bold text-white" for="no_ktp">
                    Nomor KTP
                </label>
                <input
                    class="w-full p-3 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                    id="no_ktp" type="text" inputmode="numeric" name="no_ktp"
                    placeholder="Masukkan Nomor KTP anda" required @if (session('timeLeft')) disabled @endif
                    {{-- pattern="[0-9]{16}" oninput="this.value = this.value.replace(/[^0-9]/g, '');" --}}>

            </div>
            <div class="flex items-center justify-center w-full">
                <button
                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                    type="submit" @if (session('timeLeft')) disabled @endif>
                    @if (session('timeLeft'))
                        <span id="countdownButton" class="text-white">Countdown: {{ session('timeLeft') }} detik</span>
                    @else
                        Login
                    @endif
                </button>
            </div>

            {{-- {!! NoCaptcha::display() !!} --}}
            <div class="mt-4 g-recaptcha" data-sitekey={{config('services.recaptcha.key')}}></div>

        </form>
        <p class="text-xs tracking-wider text-center text-white">
            &copy; 2024 | PT. Administrasi Medika
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

    <script async src="https://www.google.com/recaptcha/api.js" nonce="<?php echo $nonce; ?>"></script>
</body>

</html>
