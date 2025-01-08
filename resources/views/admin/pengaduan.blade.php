<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Pengaduan</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
   @include('admin.sidebar')

    <!-- Konten Utama -->
    <div class="flex-1 bg-gray-100">
        <!-- Header Halaman -->
        <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-gray-700">Pengaduan Masuk</h1>
        </header>

        <!-- Isi Halaman Dashboard -->
        <main class="p-6">
            <!-- Tabel Daftar Pengaduan -->
            <div class="overflow-x-auto bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Daftar Pengaduan</h2>
                <table class="w-full table-auto border-collapse border border-gray-200">
                    <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="border border-gray-200 px-4 py-2">Nomor Pengaduan</th>
                        <th class="border border-gray-200 px-4 py-2">Nama</th>
                        <th class="border border-gray-200 px-4 py-2">Email</th>
                        <th class="border border-gray-200 px-4 py-2">Kategori</th>
                        <th class="border border-gray-200 px-4 py-2">Pesan</th>
                        <th class="border border-gray-200 px-4 py-2">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Contoh Data -->
                    <tr>
                        <td class="border border-gray-200 px-4 py-2">12345</td>
                        <td class="border border-gray-200 px-4 py-2">Budi Santoso</td>
                        <td class="border border-gray-200 px-4 py-2">budi@email.com</td>
                        <td class="border border-gray-200 px-4 py-2">Informasi</td>
                        <td class="border border-gray-200 px-4 py-2">Ingin mengetahui status berkas...</td>
                        <td class="border border-gray-200 px-4 py-2">
                            <select class="border rounded px-2 py-1 focus:outline-none focus:ring">
                                <option value="Diproses" selected>Diproses</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-200 px-4 py-2">12346</td>
                        <td class="border border-gray-200 px-4 py-2">Pasmingbased</td>
                        <td class="border border-gray-200 px-4 py-2">pasming22@email.com</td>
                        <td class="border border-gray-200 px-4 py-2">Komplain</td>
                        <td class="border border-gray-200 px-4 py-2">Berkas terlambat diproses...</td>
                        <td class="border border-gray-200 px-4 py-2">
                            <select class="border rounded px-2 py-1 focus:outline-none focus:ring">
                                <option value="Diproses">Diproses</option>
                                <option value="Selesai" selected>Selesai</option>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
</body>
</html>
