<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publikasi Kantor Pertanahan Kabupaten Gresik</title>
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

    <<!-- Navigation Links -->
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

<!-- Border dan Profil Pejabat -->
<div class="flex items-center border-t bg-sky-900	background-color: rgb(12 74 110); text-white h-20 mb-8">
    <h3 class="text-xl font-semibold ml-4">Publikasi</h3>
</div>

<!-- Text Publikasi -->
<section class="py-8 px-4 md:px-16 bg-grey">
    <div class="md:flex items-start">
        <!-- Mengatur button -->
        <div class="md:w-1/2 md:pr-8">
            <h3 class="text-xl font-semibold mb-4">Terkait peraturan kunjungi Website JDIH/ATRBPN</h3>
            <a href="https://jdih.atrbpn.go.id/" target="_blank"
               class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-300">
                Kunjungi
            </a>
        </div>
    </div>
</section>

<!-- Foto Web Jdih -->
<img src="images/Screenshot 2024-11-14 104947.png" alt="Struktur Organisasi" class="mx-auto mb-8"
     style="width: 1180px; height: 600px;">

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
