<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kantor Pertanahan Kabupaten Gresik</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav
    class="bg-white text-gray-900 px-8 py-4 flex justify-between items-center shadow-md fixed top-0 left-0 w-full z-50">
    <!-- Logo and Title Section -->
    <div class="flex items-center space-x-4">
        <img src="images/logobpn.png" alt="Logo BPN" class="w-12 h-12">
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

<!-- Add padding to avoid overlap with fixed navbar -->
<div class="pt-20">
    <!-- Content goes here -->
</div>

<!-- Border dan Profil Pejabat -->
<div class="flex items-center border-t bg-sky-900 background-color: rgb(12 74 110); text-white h-20 mb-8">
    <h3 class="text-xl font-semibold ml-4">Layanan</h3>
</div>

<!-- Sentuh Tanahku Section -->
<section class="py-8 px-4 md:px-16 bg-grey">
    <div class="md:flex items-start">
        <!-- Teks Kiri -->
        <div class="md:w-1/2 md:pr-8">
            <h2 class="text-xl font-bold mb-4">Aplikasi Sentuh Tanahku</h2>
            <p class="text-dark-700 mb-4">Kini proses pengecekan pengurusan berkas dan sertipikat tanah menjadi lebih
                mudah dan cukup melalui genggaman Anda dengan aplikasi Sentuh Tanahku. Jika sertipikat tanah belum
                terdaftar pada aplikasi, Anda dapat melaporkannya langsung melalui aplikasi ini dengan menyertakan
                informasi rinci sertipikat dan foto bukti sertipikat Anda.</p>
            <p class="text-dark-700 mb-4">Namun untuk dapat menggunakan fitur info Sertipikat Saya, Anda wajib
                mengkonfirmasikan Nomor Induk Kependudukan (NIK) ke kantor pertanahan terdekat untuk proses
                aktifasi.</p>
            <p class="text-dark-700 mb-4">Selain itu Sentuh Tanahku menyajikan fitur untuk partisipasi plot bidang tanah
                jika sertipikat tanah Anda belum terdata sebagai persil bidang pada peta yang bisa diperiksa pada fitur
                Lokasi Bidang Tanah.</p>
            <p class="text-dark-700 mb-4">Berbagai informasi syarat-syarat pengurusan pelayanan juga disajikan beserta
                simulasi biaya yang interaktif sehingga Anda dapat memprediksikan besaran biaya yang diperlukan untuk
                pengurusan layanan tersebut.</p>
        </div>

        <!-- Gambar Kanan -->
        <div class="md:w-1/2">
            <div class="overflow-y-auto max-h-[500px]">
                <img src="images/Tampilan-layar-aplikasi-Sentuh-Tanahku.jpg" alt="Aplikasi Sentuh Tanahku"
                     class="w-full rounded-lg shadow-lg object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Layanan 4 Kolom -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-4">
    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-shadow duration-300">
        <!-- Ellipse with Icon -->
        <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m0 0h.01M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10s10-4.48 10-10c0-5.52-4.48-10-10-10z"/>
                </svg>
            </div>
        </div>
        <h2 class="text-xl font-bold mb-2">Pengumuman</h2>
        <p class="text-gray-600">Klik di sini untuk pengumuman.</p>
        <a href="index.html"
           class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Lihat</a>
    </div>
    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-shadow duration-300">
        <!-- Ellipse with Icon -->
        <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m0 0h.01M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10s10-4.48 10-10c0-5.52-4.48-10-10-10z"/>
                </svg>
            </div>
        </div>
        <h2 class="text-xl font-bold mb-2">SOP Pelayanan</h2>
        <p class="text-gray-600">Klik di sini untuk SOP pelayanan.</p>
        <a href="https://www.regulasip.id/book/15917/read"
           class="mt-4 inline-block bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Lihat</a>
    </div>
    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-shadow duration-300">
        <!-- Ellipse with Icon -->
        <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m0 0h.01M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10s10-4.48 10-10c0-5.52-4.48-10-10-10z"/>
                </svg>
            </div>
        </div>
        <h2 class="text-xl font-bold mb-2">Dokumentasi</h2>
        <p class="text-gray-600">Klik di sini untuk dokumentasi.</p>
        <a href="#" class="mt-4 inline-block bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Lihat</a>
    </div>
    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-shadow duration-300">
        <!-- Ellipse with Icon -->
        <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m0 0h.01M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10s10-4.48 10-10c0-5.52-4.48-10-10-10z"/>
                </svg>
            </div>
        </div>
        <h2 class="text-xl font-bold mb-2">Karir</h2>
        <p class="text-gray-600">Klik di sini untuk informasi karir.</p>
        <a href="#" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Lihat</a>
    </div>
</div>

<section class="py-8 px-4 md:px-16 bg-grey">
    <div class="md:flex flex-col items-start">
        <!-- Form Input Title -->
        <h2 class="text-xl font-bold mb-4">Form Input Layanan Pengaduan dan Cek Berkas</h2>

        <!-- Link Section -->
        <div class="flex flex-col gap-2 mt-4">
            <!-- Link 1: Layanan Cek Berkas -->
            {{--            <a--}}
            {{--                href="{{ url('/layanan/cekberkas') }}"--}}
            {{--                class="text-gray-600 hover:text-blue-800 font-medium transition duration-300"--}}
            {{--            >--}}
            {{--                Layanan Cek Berkas--}}
            {{--            </a>--}}

            <!-- Link 2: Layanan Pengaduan -->
            <a
                href="{{ url('/layanan/pengaduan') }}"
                class="text-gray-600 hover:text-blue-800 font-medium transition duration-300"
            >
                Layanan Pengaduan
            </a>
        </div>
    </div>
</section>

<main class="container mx-auto py-12 px-6">
    <h2 class="text-center text-2xl font-bold text-gray-800 mb-8">JENIS LAYANAN PERTANAHAN</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Pendaftaran -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Pendaftaran</h2>
            <hr class="border-t-2 border-gray-200 w-16 mx-auto mb-4">
            <p class="text-gray-600 mb-4">Anda dapat melakukan antrian pendaftaran secara online, kantor offline dibuka
                pada pukul.</p>
            <p class="font-semibold text-gray-800">08.00 WIB - 12.00 WIB</p>
        </div>

        <!-- Pengambilan -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Pengambilan</h2>
            <hr class="border-t-2 border-gray-200 w-16 mx-auto mb-4">
            <p class="text-gray-600 mb-4">Anda dapat melakukan antrian pengambilan secara online, kantor offline dibuka
                pada pukul.</p>
            <p class="font-semibold text-gray-800">13.00 WIB - 15.00 WIB</p>
        </div>

        <!-- Pelataran -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Pelataran (Pelayanan Tanah Akhir Pekan)</h2>
            <hr class="border-t-2 border-gray-200 w-16 mx-auto mb-4">
            <p class="text-gray-600 mb-4">PEMOHON LANGSUNG dapat melakukan antrian pendaftaran & pengambilan secara
                online, kantor offline PELATARAN dibuka pada pukul.</p>
            <p class="font-semibold text-gray-800">08.00 WIB - 12.00 WIB</p>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-sky-900 background-color: rgb(12 74 110) text-white py-8">
    <div class="container mx-auto px-4 md:px-16">
        <div class="md:flex justify-between">
            <!-- Logo and Office Info -->
            <div class="mb-6 md:mb-0 md:w-1/3">
                <img src="images/logobpn.png" alt="Logo BPN" class="w-14 h-14 mb-4">
                <p>Kantor Pertanahan Kabupaten Gresik</p>
                <p>Jl. Dr. Wahidin Sudirohusodo No.234, Kembangan, Dahanrejo, Kec. Kebomas, Kabupaten Gresik, Jawa Timur
                    61124</p>
            </div>

            <!-- Contact Information -->
            <div class="mb-6 md:mb-0 md:w-1/3">
                <h3 class="font-semibold mb-2">Kontak</h3>
                <p>Jam Kerja: Senin - Jumat, 08:00 - 16:00</p>
                <p>No Telfon: 031-3930324</p>
                <p>Email: kab-gresik@atrbpn.go.id</p>
                <p>Alamat: Jl. Dr. Wahidin Sudirohusodo No.234, Kembangan, Dahanrejo, Kec. Kebomas, Kabupaten Gresik,
                    Jawa Timur 61124</p>
            </div>

            <!-- Social Media Links -->
            <div class="md:w-1/4">
                <h3 class="font-semibold mb-2">Ikuti Kami</h3>
                <div class="flex space-x-4">
                    <a href="#"><img src="images/iconig1.png" alt="Instagram" class="w-12 h-12"></a>
                    <a href="#"><img src="images/icontwt.png" alt="Twitter" class="w-12 h-12"></a>
                    <a href="#"><img src="images/iconfb.png" alt="Facebook" class="w-12 h-12"></a>
                    <a href="#"><img src="images/iconyt.png" alt="YouTube" class="w-12 h-12"></a>
                    <a href="#"><img src="images/logobpn.png" alt="BPN Logo" class="w-12 h-12"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
