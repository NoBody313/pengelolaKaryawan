<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('helper.helper')
    <title>Login</title>
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="max-w-lg p-6 bg-white rounded shadow-md">
        <h2 class="mb-5 text-2xl font-bold">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700" for="email">Email</label>
                <input id="email" type="email" name="email" class="block w-full mt-1" required autofocus>
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="password">Password</label>
                <input id="password" type="password" name="password" class="block w-full mt-1" required>
                @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Login</button>
            </div>
        </form>
    </div>
</body>

</html>
