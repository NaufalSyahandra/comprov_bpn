<aside class="bg-[#1E3A56] text-white w-64 space-y-6 py-7 px-4">
    <!-- Logo & Title -->
    <div class="flex items-center space-x-2 px-4">
        <img src="../images/logobpn.png" alt="Logo Bpn" class="w-12 h-12 rounded-full">
        <span class="text-xl font-bold">Admin Panel</span>
    </div>

    <!-- Navigation Links -->
    <nav>
        <a href="{{ route('dashboard') }}" class="block py-2.5 px-4 rounded transition hover:bg-blue-700">Dashboard</a>
        <a href="{{ route('profile') }}" class="block py-2.5 px-4 rounded transition hover:bg-blue-700">Profile</a>
        <a href="{{ route('cekberkas') }}" class="block py-2.5 px-4 rounded transition hover:bg-blue-700">Cek Berkas</a>
        <a href="{{ route('pengaduan') }}" class="block py-2.5 px-4 rounded transition hover:bg-blue-700">Pengaduan</a>
    </nav>

    <!-- Profile Section -->
    <div class="mt-auto flex items-center px-4 space-x-3">
        <img src="https://i.pinimg.com/736x/f5/2f/28/f52f28b0fbd8afa54105f07138d8573a.jpg" alt="Profile"
             class="w-10 h-10 rounded-full">
        <div>
            <p class="text-sm font-semibold">{{ Auth::user()->name }}</p>
            <p class="text-xs text-gray-400">My Profile</p>
        </div>
    </div>

    <!-- Logout Button -->
    <div class="mt-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                    class="w-full py-2 bg-red-600 text-white font-semibold rounded hover:bg-red-700 transition">
                Logout
            </button>
        </form>
    </div>

</aside>
