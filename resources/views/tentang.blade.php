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
        <a href="{{ route('login') }}" target="_blank" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Login</a>
    </div>
</nav>

<!-- Add padding to avoid overlap with fixed navbar -->
<div class="pt-20">
    <!-- Content goes here -->
</div>

<!-- Tentang Page -->
<section class="text-center py-8 bg-white">
    <!-- Struktur Organisasi -->
    <h2 class="text-2xl font-bold mb-6">Struktur Organisasi</h2>
    <img src="images/strukturorganisasi.jpg" alt="Struktur Organisasi" class="mx-auto mb-8"
         style="width: 1195px; height: 850px;">

    <!-- Border dan Profil Pejabat -->
    <div class="flex items-center border-t bg-sky-900	background-color: rgb(12 74 110); text-white h-20 mb-8">
        <h3 class="text-xl font-semibold ml-4">Profil Pejabat</h3>
    </div>

    <!-- Profil Pejabat Section -->
    <section class="py-8 px-4 text-center">
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-6 justify-center mx-auto max-w-screen-lg">

            <!-- Pejabat 1 -->
            <div class="relative group mx-auto w-[183px] h-[276px]">
                <img src="images/pakfanani.png" alt="Pejabat 1"
                     class="w-full h-full object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105 duration-300">
                <div class="absolute inset-x-0 bottom-0 bg-opacity-70 bg-black text-white text-sm font-semibold p-2">
                    Nama Pejabat 1
                </div>
            </div>

            <!-- Pejabat 2 -->
            <div class="relative group mx-auto w-[183px] h-[276px]">
                <img src="images/pakkamarudin.png" alt="Pejabat 2"
                     class="w-full h-full object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105 duration-300">
                <div class="absolute inset-x-0 bottom-0 bg-opacity-70 bg-black text-white text-sm font-semibold p-2">
                    Nama Pejabat 2
                </div>
            </div>

            <!-- Pejabat 3 -->
            <div class="relative group mx-auto w-[183px] h-[276px]">
                <img src="images/pakagung.png" alt="Pejabat 3"
                     class="w-full h-full object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105 duration-300">
                <div class="absolute inset-x-0 bottom-0 bg-opacity-70 bg-black text-white text-sm font-semibold p-2">
                    Nama Pejabat 3
                </div>
            </div>

            <!-- Pejabat 4 -->
            <div class="relative group mx-auto w-[183px] h-[276px]">
                <img src="images/pakgigih.png" alt="Pejabat 4"
                     class="w-full h-full object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105 duration-300">
                <div class="absolute inset-x-0 bottom-0 bg-opacity-70 bg-black text-white text-sm font-semibold p-2">
                    Nama Pejabat 4
                </div>
            </div>

            <!-- Pejabat 5 (next row) -->
            <div class="relative group mx-auto w-[183px] h-[276px]">
                <img src="images/pakrangga.png" alt="Pejabat 5"
                     class="w-full h-full object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105 duration-300">
                <div class="absolute inset-x-0 bottom-0 bg-opacity-70 bg-black text-white text-sm font-semibold p-2">
                    Nama Pejabat 5
                </div>
            </div>

            <!-- Pejabat 6 (next row) -->
            <div class="relative group mx-auto w-[183px] h-[276px]">
                <img src="images/paktriwahyu.png" alt="Pejabat 5"
                     class="w-full h-full object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105 duration-300">
                <div class="absolute inset-x-0 bottom-0 bg-opacity-70 bg-black text-white text-sm font-semibold p-2">
                    Nama Pejabat 5
                </div>
            </div>

            <!-- Pejabat 7 (next row) -->
            <div class="relative group mx-auto w-[183px] h-[276px]">
                <img src="images/busharih.png" alt="Pejabat 5"
                     class="w-full h-full object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105 duration-300">
                <div class="absolute inset-x-0 bottom-0 bg-opacity-70 bg-black text-white text-sm font-semibold p-2">
                    Nama Pejabat 5
                </div>
            </div>
        </div>
    </section>

    <!-- Border dan Profil Pejabat -->
    <div class="flex items-center border-t bg-sky-900	background-color: rgb(12 74 110); text-white h-20 mb-8">
        <h3 class="text-xl font-semibold ml-4">Kepegawaian</h3>
    </div>

    <!-- Kontainer Shapes -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-center mx-auto max-w-screen-lg mt-6">
        <!-- Kolom Kiri: 2 Shapes di sebelah kiri -->
        <div class="flex flex-col items-center space-y-4">
            <div
                class="flex items-center justify-between bg-gray-200 w-[280px] h-[53px] p-4 rounded-lg shadow-lg hover:bg-gray-300 transition-all duration-300">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-user text-blue-500"></i>
                    <span class="text-sm font-semibold text-gray-800">Pegawai Nasional</span>
                </div>
                <span class="font-semibold text-gray-800">18,704</span>
            </div>
            <div
                class="flex items-center justify-between bg-gray-200 w-[280px] h-[53px] p-4 rounded-lg shadow-lg hover:bg-gray-300 transition-all duration-300">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-user text-blue-500"></i>
                    <span class="text-sm font-semibold text-gray-800">Pegawai Pensiun</span>
                </div>
                <span class="font-semibold text-gray-800">558</span>
            </div>
        </div>

        <!-- Kolom Tengah: 3 Shapes di tengah -->
        <div class="flex flex-col items-center space-y-4">
            <div
                class="flex items-center justify-between bg-gray-200 w-[280px] h-[53px] p-4 rounded-lg shadow-lg hover:bg-gray-300 transition-all duration-300">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-user text-blue-500"></i>
                    <span class="text-sm font-semibold text-gray-800">Pegawai Eselon I</span>
                </div>
                <span class="font-semibold text-gray-800">18,704</span>
            </div>
            <div
                class="flex items-center justify-between bg-gray-200 w-[280px] h-[53px] p-4 rounded-lg shadow-lg hover:bg-gray-300 transition-all duration-300">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-user text-blue-500"></i>
                    <span class="text-sm font-semibold text-gray-800">Pegawai Eselon II</span>
                </div>
                <span class="font-semibold text-gray-800">18,704</span>
            </div>
            <div
                class="flex items-center justify-between bg-gray-200 w-[280px] h-[53px] p-4 rounded-lg shadow-lg hover:bg-gray-300 transition-all duration-300">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-user text-blue-500"></i>
                    <span class="text-sm font-semibold text-gray-800">Pegawai Eselon III</span>
                </div>
                <span class="font-semibold text-gray-800">769</span>
            </div>
        </div>

        <!-- Kolom Kanan: 2 Shapes di sebelah kanan -->
        <div class="flex flex-col items-center space-y-4">
            <div
                class="flex items-center justify-between bg-gray-200 w-[280px] h-[53px] p-4 rounded-lg shadow-lg hover:bg-gray-300 transition-all duration-300">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-user text-blue-500"></i>
                    <span class="text-sm font-semibold text-gray-800">Pegawai Wanita</span>
                </div>
                <span class="font-semibold text-gray-800">7,414</span>
            </div>
            <div
                class="flex items-center justify-between bg-gray-200 w-[280px] h-[53px] p-4 rounded-lg shadow-lg hover:bg-gray-300 transition-all duration-300">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-user text-blue-500"></i>
                    <span class="text-sm font-semibold text-gray-800">Pegawai Pria</span>
                </div>
                <span class="font-semibold text-gray-800">11,290</span>
            </div>
        </div>
    </div>
</section>


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
