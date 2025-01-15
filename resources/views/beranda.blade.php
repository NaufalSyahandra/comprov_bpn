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

<!-- Header Image -->
<header>
    <img src="images/Headerbpn.png" alt="Header Image" class="w-full h-auto object-cover"
         style="max-height: 400px; object-fit: cover;">
</header>

<!-- Welcome Text -->
<section class="text-center py-8 bg-sky-900 background-color: rgb(12 74 110);">
    <h1 class="text-2xl text-white font-bold">Selamat Datang Di Portal Website Kantor Pertanahan Kabupaten Gresik</h1>
    <h3 class="mt-4 text-white">“Melayani dengan Integritas, Membangun Kepercayaan” Solusi Pertanahan Terbaik Untuk Masa
        Depan Gresik.</h3>
</section>

<!-- Goals Section -->
<section class="py-8 px-4 md:px-16 bg-slate-700 background-color: rgb(51 65 85);">
    <div class="max-w-4xl mx-auto">
        <p class="text-white mb-6 ">
            Sesuai Peraturan Menteri Agraria Dan Tata Ruang/Kepala Badan Pertanahan Nasional Republik Indonesia Nomor 17
            Tahun 2020 Tentang Organisasi Dan Tata Kerja Kantor Wilayah Badan Pertanahan Nasional Dan Kantor Pertanahan,
            Kantor Pertanahan adalah instansi vertikal Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional di
            kabupaten/kota yang berada di bawah dan bertanggung jawab kepada Menteri Agraria dan Tata Ruang/Kepala Badan
            Pertanahan Nasional melalui Kepala Kantor Wilayah Badan Pertanahan Nasional, khususnya di wilayah Kabupaten
            Gresik.
        </p>
        <div class="flex flex-col md:flex-row justify-between md:space-x-8">
            <!-- Teks Kiri -->
            <div class="md:w-1/2 text-left">
                <p class="font-bold text-white mb-2">Dalam melaksanakan tugasnya, Kantor Pertanahan Kabupaten Gresik
                    menyelenggarakan fungsi:</p>
                <ol class="list-decimal list-inside text-white mb-8 pl-4">
                    <li>Penyusunan rencana, program, anggaran, dan pelaporan;</li>
                    <li>Pelaksanaan survei dan pemetaan;</li>
                    <li>Pelaksanaan penetapan hak dan pendaftaran tanah;</li>
                    <li>Pelaksanaan penataan dan pemberdayaan;</li>
                    <li>Pelaksanaan pengadaan tanah dan pengembangan pertanahan;</li>
                    <li>Pelaksanaan pengendalian dan penanganan sengketa pertanahan;</li>
                    <li>Pelaksanaan modernisasi pelayanan pertanahan berbasis elektronik;</li>
                    <li>Pelaksanaan reformasi birokrasi dan penanganan pengaduan; dan</li>
                    <li>Pelaksanaan pemberian dukungan administrasi kepada seluruh unit organisasi Kantor Pertanahan.
                    </li>
                </ol>
            </div>

            <!-- Teks Kanan -->
            <div class="md:w-1/2 text-left">
                <p class="font-bold text-white mb-2">Kantor Pertanahan Kabupaten Gresik terdiri atas:</p>
                <ol class="list-decimal list-inside text-white mb-8 pl-4">
                    <li>Kepala Kantor Pertanahan;</li>
                    <li>Sub Bagian Tata Usaha;</li>
                    <li>Seksi Survei dan Pemetaan Pertanahan dan Ruang;</li>
                    <li>Seksi Penetapan Hak dan Pendaftaran Tanah;</li>
                    <li>Seksi Penataan Agraria dan Pemberdayaan;</li>
                    <li>Seksi Pengadaan Tanah Pemerintah;</li>
                    <li>Seksi Penanganan Sengketa dan Konflik Pertanahan;</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="py-8 px-4 md:px-16 bg-sky-900">
    <h2 class="text-center text-xl font-semibold mb-6 text-white">Berita Terkini</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <!-- Berita 1 -->
        <a href="#"
           class="group block bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
            <img src="images/Infografis-ATR-BPN-1.jpg" alt="Berita 1"
                 class="w-full h-40 object-cover group-hover:opacity-80 transition duration-300">
            <div class="p-4 flex flex-col h-full">
                <h3 class="text-lg font-semibold">Kementerian ATRBPN</h3>
                <p class="text-gray-600 flex-grow">Penyampaian pesan pada Mentri ATRBPN</p>
            </div>
        </a>
        <!-- Berita 2 -->
        <a href="#"
           class="group block bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
            <img src="images/news1.jpg" alt="Berita 2"
                 class="w-full h-40 object-cover group-hover:opacity-80 transition duration-300">
            <div class="p-4 flex flex-col h-full">
                <h3 class="text-lg font-semibold">Kementerian ATRBPN</h3>
                <p class="text-gray-600 flex-grow">Selamat Atas Dilantiknya Ketua dan Wakil Kementrian ATRBPN 2024</p>
            </div>
        </a>
        <!-- Berita 3 -->
        <a href="#"
           class="group block bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
            <img src="images/news2.jpeg" alt="Berita 3"
                 class="w-full h-40 object-cover group-hover:opacity-80 transition duration-300">
            <div class="p-4 flex flex-col h-full">
                <h3 class="text-lg font-semibold">Kementerian ATRBPN</h3>
                <p class="text-gray-600 flex-grow">Pertemuan antara mentri bpn barau dan mentri bpn lama</p>
            </div>
        </a>
        <!-- Berita 4 -->
        <a href="#"
           class="group block bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
            <img src="images/news3.jpg" alt="Berita 4"
                 class="w-full h-40 object-cover group-hover:opacity-80 transition duration-300">
            <div class="p-4 flex flex-col h-full">
                <h3 class="text-lg font-semibold">Kementerian ATRBPN</h3>
                <p class="text-gray-600 flex-grow">Rapat koordinasi mentri bpn kepada kakanwil di Jawa Barat</p>
            </div>
        </a>
        <!-- Berita 5 -->
        <a href="#"
           class="group block bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
            <img src="images/news5.jpeg" alt="Berita 5"
                 class="w-full h-40 object-cover group-hover:opacity-80 transition duration-300">
            <div class="p-4 flex flex-col h-full">
                <h3 class="text-lg font-semibold">Kementerian ATRBPN</h3>
                <p class="text-gray-600 flex-grow">Wanti-wanti Oknum BPN Jadi Mafia Tanah, Nusron: Saya yang Antar ke
                    Penegak Hukum</p>
            </div>
        </a>
        <!-- Berita 6 -->
        <a href="#"
           class="group block bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
            <img src="images/news6.jpeg" alt="Berita 6"
                 class="w-full h-40 object-cover group-hover:opacity-80 transition duration-300">
            <div class="p-4 flex flex-col h-full">
                <h3 class="text-lg font-semibold">Kementerian ATRBPN</h3>
                <p class="text-gray-600 flex-grow">Perluas Kerja Sama, Kementerian ATR/BPN Gandeng Kementerian
                    Pertahanan dan BIN</p>
            </div>
        </a>
        <!-- Berita 7 -->
        <a href="#"
           class="group block bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
            <img src="images/news7.jpeg" alt="Berita 7"
                 class="w-full h-40 object-cover group-hover:opacity-80 transition duration-300">
            <div class="p-4 flex flex-col h-full">
                <h3 class="text-lg font-semibold">Kementerian ATRBPN</h3>
                <p class="text-gray-600 flex-grow">Beri Efek Jera, Tersangka Tindak Pidana Pertanahan di Bandung
                    Dimiskinkan Baca artikel detiknews</p>
            </div>
        </a>
        <!-- Berita 8 -->
        <a href="#"
           class="group block bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
            <img src="images/news8.jpeg" alt="Berita 8"
                 class="w-full h-40 object-cover group-hover:opacity-80 transition duration-300">
            <div class="p-4 flex flex-col h-full">
                <h3 class="text-lg font-semibold">Kementerian ATRBPN</h3>
                <p class="text-gray-600 flex-grow">15 Personel Ditkrimsus Polda Jabar Dapat Pin Emas dari Menteri
                    ATR/BPN</p>
            </div>
        </a>
    </div>
</section>

<!-- Sentuh Tanahku Section -->
<section class="py-8 px-4 md:px-16 bg-slate-700 background-color: rgb(51 65 85);">
    <div class="md:flex items-start">
        <!-- Teks Kiri -->
        <div class="md:w-1/2 md:pr-8">
            <h2 class="text-xl text-white mb-4">Aplikasi Sentuh Tanahku</h2>
            <p class="text-white mb-4">Kini proses pengecekan pengurusan berkas dan sertipikat tanah menjadi lebih mudah
                dan cukup melalui genggaman Anda dengan aplikasi Sentuh Tanahku. Jika sertipikat tanah belum terdaftar
                pada aplikasi, Anda dapat melaporkannya langsung melalui aplikasi ini dengan menyertakan informasi rinci
                sertipikat dan foto bukti sertipikat Anda.</p>
            <p class="text-white mb-4">Namun untuk dapat menggunakan fitur info Sertipikat Saya, Anda wajib
                mengkonfirmasikan Nomor Induk Kependudukan (NIK) ke kantor pertanahan terdekat untuk proses
                aktifasi.</p>
            <p class="text-white  mb-4">Selain itu Sentuh Tanahku menyajikan fitur untuk partisipasi plot bidang tanah
                jika sertipikat tanah Anda belum terdata sebagai persil bidang pada peta yang bisa diperiksa pada fitur
                Lokasi Bidang Tanah.</p>
            <p class="text-white  mb-4">Berbagai informasi syarat-syarat pengurusan pelayanan juga disajikan beserta
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

<!-- Footer -->
<footer class="bg-sky-900 background-color: rgb(12 74 110); text-white py-8">
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
