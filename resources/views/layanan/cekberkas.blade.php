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
<div class="flex items-center border-t bg-sky-900 background-color: rgb(12 74 110); text-white h-20 mb-8">
    <h3 class="text-xl font-semibold ml-4">Layanan</h3>
</div>

<section class="py-8 px-4 md:px-16 bg-grey">
    <div class="text-center">
        <!-- Title Section -->
        <h2 class="text-2xl font-bold mb-2">Cari Berkas</h2>
        <p class="text-gray-700 mb-6">Cari status berkas Anda</p>
    </div>

    <!-- Form Section -->
    <form action="/submit-form" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        <!-- Kantor Field -->
        <div class="mb-4">
            <label for="kantor" class="block text-sm font-medium text-gray-700 mb-1">Kantor</label>
            <select
                id="kantor"
                name="kantor"
                class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                <option value="">Pilih kantor Pertanahan</option>
                <option value="kantor1">Kantor Pertanahan Kabupaten Gresik</option>
                <option value="kantor2">Kantor Pertanahan Surabaya 1</option>
                <option value="kantor3">Kantor Pertanahan Surabaya 2</option>
                <option value="kantor4">Kantor Pertanahan Kabupaten Malang</option>
                <option value="kantor5">Kantor Pertanahan Kabupaten Sidoarjo</option>
                <option value="kantor6">Kantor Wilayah Jawa Timur</option>
            </select>
        </div>

        <!-- Nomor Berkas Field -->
        <div class="mb-4">
            <label for="nomor_berkas" class="block text-sm font-medium text-gray-700 mb-1">Nomor Berkas</label>
            <input
                type="text"
                id="nomor_berkas"
                name="nomor_berkas"
                class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                placeholder="Isi nomor berkas Anda">
        </div>

        <!-- Tahun Field -->
        <div class="mb-4">
            <label for="tahun" class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
            <select
                id="tahun"
                name="tahun"
                class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:ring focus:ring-blue-200">
            Cari Berkas
        </button>
    </form>
</section>


</body>
</html>
