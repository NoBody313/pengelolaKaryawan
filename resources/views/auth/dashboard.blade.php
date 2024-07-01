<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('helper.helper')
    <title>Dashboard</title>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded shadow-md">
        <h2 class="mb-5 text-2xl font-bold">Dashboard</h2>
        <div class="mb-4">
            <p class="text-gray-700"><strong>Name:</strong> {{ Auth::user()->nama }}</p>
            <p class="text-gray-700"><strong>Email:</strong> {{ Auth::user()->nik_admedika }}</p>
        </div>
        <form method="POST" action="{{ route('logout.pulse') }}">
            @csrf
            <button type="submit" class="px-4 py-2 text-white bg-red-500 rounded">Logout</button>
        </form>
    </div>
</body>
</html>
