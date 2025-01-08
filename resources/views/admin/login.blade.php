<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex min-h-screen bg-gray-100">
    <div class="w-1/3 bg-[#1E3A56] text-white flex flex-col justify-center items-center px-8">
        <div class="text-center">
            <img src="../images/logobpn.png" alt="Logo Bpn" class="w-20 h-20 mx-auto mb-4">
            <h1 class="text-xl font-semibold mb-6">Admin Kantor Pertanahan <br>Kabupaten Gresik</h1>
        </div>
        <div class="w-full">
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-white mb-1">Username</label>
                    <input id="username" name="username" type="text"
                           class="w-full p-2 rounded bg-gray-200 text-black" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-white mb-1">Password</label>
                    <input id="password" name="password" type="password"
                           class="w-full p-2 rounded bg-gray-200 text-black" required>
                </div>
                <div class="flex items-center justify-between mb-6">
                    <label class="inline-flex items-center text-white">
                        <input type="checkbox" name="remember" class="mr-2">
                        Ingat Saya
                    </label>
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="w-2/3 bg-gray-100"></div>
</div>
</body>
</html>
