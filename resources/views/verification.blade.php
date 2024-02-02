<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi KTP</title>
</head>
<body>

    <h2>Verifikasi KTP</h2>

    @if(session('pesanError'))
        <p style="color: red;">{{ session('pesanError') }}</p>
    @endif

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/verify-ktp" method="post">
        @csrf

        <label for="ktp_start">4 Digit Awal Nomor KTP:</label>
        <input type="text" name="ktp_start" required>
        <br>

        <label for="ktp_end">4 Digit Akhir Nomor KTP:</label>
        <input type="text" name="ktp_end" required>
        <br>

        <button type="submit">Verifikasi</button>
    </form>

</body>
</html>
