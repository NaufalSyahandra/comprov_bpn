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
        <a href="{{ route('login') }}" target="_blank" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Login</a>
    </div>
</nav>

<!-- Add padding to avoid overlap with fixed navbar -->
<div class="pt-20">
    <!-- Content goes here -->
</div>

<!-- Border Layanan -->
<div class="flex items-center border-t bg-sky-900 text-white h-20 mb-8">
    <h3 class="text-xl font-semibold ml-4">Layanan</h3>
</div>

<!-- Container -->
<div class="max-w-5xl mx-auto py-10 px-4">
    <!-- Title Section -->
    <div class="text-center mb-10">
        <h1 class="text-2xl md:text-4xl font-bold text-gray-800">Formulir Layanan Pengaduan</h1>
        <p class="text-gray-600 mt-4">
            Hubungi kami atau sampaikan permasalahan Anda melalui Layanan Pengaduan dengan mengisi formulir di bawah
            ini. Anda dapat melampirkan file dokumen atau foto jika diperlukan untuk memperjelas, tim kami akan segera
            merespons aduan Anda.
        </p>
    </div>

    <!-- Form Section -->
    <div class="md:flex gap-8">
        <!-- Formulir Pengaduan -->
        <div class="bg-white p-6 shadow-md rounded-md w-full md:w-2/3">
            <h2 class="text-xl font-semibold mb-4 text-gray-700">Kirim Pengaduan</h2>
            <form id="pengaduanForm" onsubmit="handlePengaduan(event)">
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Nama</label>
                    <input type="text" id="nama" name="nama"
                           class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                           required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email"
                           class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                           required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Nomor HP</label>
                    <input type="text" id="no_hp" name="no_hp"
                           class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                           required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Kategori Pengaduan</label>
                    <select id="kategori" name="kategori"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            required>
                        <option value="Pelayanan">Kategori Pelayanan</option>
                        <option value="Informasi">Informasi</option>
                        <option value="Komplain">Komplain</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="4"
                              class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                              required></textarea>
                </div>
                <button type="submit"
                        class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Kirim Pengaduan
                </button>
            </form>
            <div id="nomorPengaduan" class="mt-4 hidden text-green-600 font-medium"></div>
        </div>

        <!-- Lihat Pengaduan -->
        <div class="bg-white p-6 shadow-md rounded-md w-full md:w-1/3">
            <h2 class="text-xl font-semibold mb-4 text-gray-700">Lihat Pengaduan</h2>
            <form id="lihatPengaduanForm" onsubmit="handleLihatPengaduan(event)">
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Nomor Pengaduan</label>
                    <input type="text" id="nomor_pengaduan" name="nomor_pengaduan"
                           class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                           required>
                </div>
                <button type="submit"
                        class="w-full bg-green-500 text-white font-semibold py-2 px-4 rounded-md shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Lihat
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    function handlePengaduan(event) {
        event.preventDefault(); // Mencegah reload halaman

        // Buat nomor pengaduan secara acak mulai dari 1000
        const nomorPengaduan = Math.floor(1000 + Math.random() * 9000); // Range 1000 - 9999

        // Tampilkan nomor pengaduan ke elemen dengan id 'nomorPengaduan'
        const nomorPengaduanElement = document.getElementById('nomorPengaduan');
        nomorPengaduanElement.textContent = `Nomor Pengaduan Anda: ${nomorPengaduan}`;
        nomorPengaduanElement.classList.remove('hidden'); // Tampilkan elemen jika tersembunyi

        // Bersihkan form setelah pengiriman
        document.getElementById('pengaduanForm').reset();
    }
</script>

<script>
    // Fungsi untuk menangani kirim pengaduan
    function handlePengaduan(event) {
        event.preventDefault(); // Mencegah reload halaman

        // Buat nomor pengaduan secara acak mulai dari 1000
        const nomorPengaduan = Math.floor(1000 + Math.random() * 9000); // Range 1000 - 9999

        // Tampilkan nomor pengaduan ke elemen dengan id 'nomorPengaduan'
        const nomorPengaduanElement = document.getElementById('nomorPengaduan');
        nomorPengaduanElement.textContent = `Nomor Pengaduan Anda: ${nomorPengaduan}`;
        nomorPengaduanElement.classList.remove('hidden'); // Tampilkan elemen jika tersembunyi

        // Bersihkan form setelah pengiriman
        document.getElementById('pengaduanForm').reset();
    }

    // Fungsi untuk menangani lihat pengaduan
    function handleLihatPengaduan(event) {
        event.preventDefault(); // Mencegah reload halaman

        // Ambil nomor pengaduan dari input
        const nomorPengaduan = document.getElementById('nomor_pengaduan').value;

        // Tampilkan pesan konfirmasi
        alert(`Terima kasih atas pengaduan Anda terhadap layanan Kantor Pertanahan Kabupaten Gresik (Nomor Pengaduan: ${nomorPengaduan}). Pengaduan Anda akan segera kami proses.`);

        // Bersihkan form setelah pengiriman
        document.getElementById('lihatPengaduanForm').reset();
    }
</script>

</body>
</html>
