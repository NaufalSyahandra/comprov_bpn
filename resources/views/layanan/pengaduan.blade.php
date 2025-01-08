<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantor Pertanahan Kabupaten Gresik</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100">
<!-- Navbar -->
<nav
    class="bg-white text-gray-900 px-8 py-4 flex justify-between items-center shadow-md fixed top-0 left-0 w-full z-50">
    <!-- Logo and Title Section -->
    <div class="flex items-center space-x-4">
        <img src="../images/logobpn.png" alt="Logo BPN" class="w-12 h-12">
        <span class="font-semibold text-lg">Kantor Pertanahan Kabupaten Gresik</span>
    </div>

    <!-- Navigation Links -->
    <div class="flex items-center space-x-6">
        <a href="{{ route('beranda') }}" class="hover:text-gray-600 font-bold">Beranda</a>
        <a href="{{ route('tentang') }}" class="hover:text-gray-600 font-bold">Tentang Kami</a>
        <a href="{{ route('publikasi') }}" class="hover:text-gray-600 font-bold">Publikasi</a>
        <a href="{{ route('layanan') }}" class="hover:text-gray-600 font-bold">Layanan</a>
        <!-- Button Login -->
        <a href="{{ route('login') }}" target="_blank"
           class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Login</a>
    </div>
</nav>

<div class="pt-20">
    <div class="flex items-center border-t bg-sky-900 text-white h-20 mb-8">
        <h3 class="text-xl font-semibold ml-4">Layanan</h3>
    </div>

    <div class="max-w-5xl mx-auto py-10 px-4">
        <div class="text-center mb-10">
            <h1 class="text-2xl md:text-4xl font-bold text-gray-800">Formulir Layanan Pengaduan</h1>
            <p class="text-gray-600 mt-4">Hubungi kami atau sampaikan permasalahan Anda melalui Layanan Pengaduan dengan
                mengisi formulir di bawah ini. Anda dapat melampirkan file dokumen atau foto jika diperlukan untuk
                memperjelas, tim kami akan segera merespons aduan Anda.</p>
        </div>

        <div class="container mx-auto p-6">
            <h1 class="text-2xl font-bold mb-4">Kirim Pengaduan</h1>

            @if (session('success'))
                <div id="alert"
                     class="flex items-center bg-white border border-gray-300 text-gray-800 font-semibold px-4 py-3 rounded-md mb-4 shadow-lg transition-opacity duration-500 opacity-100">
                    <svg class="w-6 h-6 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 2a8 8 0 1 0 8 8 8 8 0 0 0-8-8zm0 14a6 6 0 1 1 6-6 6 6 0 0 1-6 6zM10 5a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0V6a1 1 0 0 1 1-1zm0 10a1 1 0 0 1 1 1 1 1 0 0 1-2 0 1 1 0 0 1 1-1z"/>
                    </svg>
                    <span class="flex-1">{{ session('success') }}</span>
                    <button onclick="document.getElementById('alert').style.display='none'"
                            class="text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 9l-6 6 1.4 1.4L10 11.4l6 6 1.4-1.4z"/>
                        </svg>
                    </button>
                </div>
                <script>
                    setTimeout(() => {
                        const alert = document.getElementById('alert');
                        alert.classList.remove('opacity-100');
                        alert.classList.add('opacity-0');
                        setTimeout(() => alert.style.display = 'none', 500); // Menghilang setelah 3 detik
                    }, 3000); // Tampilkan selama 3 detik
                </script>
            @endif

            <form action="{{ route('layanan.pengaduan') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="nama_pengaduan" class="block text-gray-700">Nama Pengaduan</label>
                    <input type="text" id="nama_pengaduan" name="nama_pengaduan" required
                           class="border-gray-300 border rounded-md p-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                           class="border-gray-300 border rounded-md p-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="no_hp" class="block text-gray-700">Nomor HP</label>
                    <input type="text" id="no_hp" name="no_hp" required
                           class="border-gray-300 border rounded-md p-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="kategori" class="block text-gray-700">Kategori</label>
                    <select id="kategori" name="kategori" required class="border-gray-300 border rounded-md p-2 w-full">
                        @foreach (App\Enums\KategoriPengaduan::cases() as $kategori)
                            <option value="{{ $kategori->value }}">{{ $kategori->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="pesan" class="block text-gray-700">Pesan</label>
                    <textarea id="pesan" name="pesan" required
                              class="border-gray-300 border rounded-md p-2 w-full"></textarea>
                </div>
                <button type="submit"
                        class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600">Kirim
                    Pengaduan
                </button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
