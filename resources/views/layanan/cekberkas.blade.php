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
    <div class="flex items-center space-x-4">
        <img src="../images/logobpn.png" alt="Logo BPN" class="w-12 h-12">
        <span class="font-semibold text-lg">Kantor Pertanahan Kabupaten Gresik</span>
    </div>
    <div class="flex items-center space-x-6">
        <a href="{{ route('beranda') }}" class="hover:text-gray-600 font-bold">Beranda</a>
        <a href="{{ route('tentang') }}" class="hover:text-gray-600 font-bold">Tentang Kami</a>
        <a href="{{ route('publikasi') }}" class="hover:text-gray-600 font-bold">Publikasi</a>
        <a href="{{ route('layanan') }}" class="hover:text-gray-600 font-bold">Layanan</a>
        <a href="{{ route('login') }}" target="_blank"
           class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Login</a>
    </div>
</nav>

<div class="pt-20">
    <!-- Content goes here -->
</div>

<div class="flex items-center border-t bg-sky-900 text-white h-20 mb-8">
    <h3 class="text-xl font-semibold ml-4">Layanan</h3>
</div>

<section class="py-8 px-4 md:px-16 bg-grey">
    <div class="text-center">
        <h2 class="text-2xl font-bold mb-2">Cari Berkas</h2>
        <p class="text-gray-700 mb-6">Cari status berkas Anda</p>
        @if(session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <!-- Form -->
    <form action="{{ route('layanan.cari-berkas.submit') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="nomor_berkas" class="block text-sm font-medium text-gray-700 mb-1">Nomor Berkas</label>
            <input type="text" id="nomor_berkas" name="nomor_berkas"
                   class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                   placeholder="Isi nomor berkas Anda" required>
        </div>

        <div class="mb-4">
            <label for="tahun" class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
            <select id="tahun" name="tahun"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    required>
                <option value="" disabled selected>Pilih Tahun</option>
                @if(isset($tahun) && $tahun->isNotEmpty())
                    @foreach($tahun as $year)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endforeach
                @else
                    <option value="">Tidak ada tahun tersedia</option>
                @endif
            </select>
        </div>

        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:ring focus:ring-blue-200">
            Cari Berkas
        </button>
    </form>

    <!-- Hasil Pencarian -->
    @if(isset($berkas))
        <div class="mt-6">
            <h3 class="text-lg font-bold">Hasil Pencarian:</h3>
            @if($berkas->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
                    @foreach($berkas as $item)
                        <div class="bg-white shadow-lg rounded-lg p-4 transition-transform transform hover:scale-105">
                            <h4 class="font-semibold text-lg">{{ $item->nama }}</h4>
                            <p class="text-gray-700">Jenis Berkas: <strong>{{ $item->jenis_berkas }}</strong></p>
                            <p class="text-gray-700">Nomor Berkas: <strong>{{ $item->nomor_berkas }}</strong></p>
                            <p class="text-gray-700">Status: <strong>{{ $item->status }}</strong></p>
                            <p class="text-gray-500 text-sm">
                                Tanggal: {{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</p>
                            <a href="{{ route('berkas.download', $item->id) }}"
                               class="mt-2 inline-block text-blue-500 hover:underline">
                                Download
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="mt-4 text-gray-500">Tidak ada berkas yang ditemukan untuk nomor dan tahun ini.</p>
            @endif
        </div>
    @endif
</section>

</body>
</html>
