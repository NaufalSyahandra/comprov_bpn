<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Berkas</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<!-- Sidebar -->
<div class="flex min-h-screen">
    @include('admin.sidebar')

    <!-- Main Content -->
    <div class="flex-1 bg-gray-100 ml-64">
        <!-- Header -->
        <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-gray-700">Cek Berkas</h1>
        </header>

        <!-- Content -->
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-bold mb-4">Kelola Berkas</h1>

            <!-- Tambah Berkas -->
            <section class="mb-6 bg-white p-4 rounded shadow">
                <h2 class="text-lg font-semibold mb-4">Tambah Berkas</h2>
                <form id="tambah-berkas-form" class="space-y-4">
                    <input type="text" id="nama" placeholder="Nama" class="w-full p-2 border rounded" required>
                    <select id="jenis_berkas" class="w-full p-2 border rounded" required>
                        <option value="" disabled selected>Pilih Jenis Berkas</option>
                        <option value="Pembuatan Sertifikat">Pembuatan Sertifikat</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Sertifikat Hilang">Sertifikat Hilang</option>
                    </select>
                    <input type="number" id="nomor_berkas" placeholder="Nomor Berkas" class="w-full p-2 border rounded"
                           required>
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Tambah
                    </button>
                </form>
            </section>

            <!-- Tabel Berkas Masuk -->
            <section>
                <h2 class="text-lg font-semibold mb-4">Berkas Masuk</h2>
                <table class="min-w-full bg-white rounded-lg shadow-lg">
                    <thead>
                    <tr class="bg-blue-600 text-white">
                        <th class="p-3">Nama</th>
                        <th class="p-3">Jenis Berkas</th>
                        <th class="p-3">Nomor Berkas</th>
                        <th class="p-3">Status</th>
                        <th class="p-3">Aksi</th>
                    </tr>
                    </thead>
                    <tbody id="berkas-table">
                    <!-- Data akan di-load lewat fetch -->
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>
