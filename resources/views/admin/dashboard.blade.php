<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<!-- Sidebar -->
<div class="flex min-h-screen">
    @include('admin.sidebar')

    <!-- Main Content -->
    <div class="flex-1 bg-gray-100">
        <!-- Header -->
        <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-gray-700">Dashboard</h1>
        </header>

        <!-- Content -->
        <main class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Total Berkas</h2>
                    <p class="text-3xl font-bold text-blue-600">120</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Total Pengaduan</h2>
                    <p class="text-3xl font-bold text-blue-600">45</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Berkas Selesai</h2>
                    <p class="text-3xl font-bold text-green-600">30</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Berkas Pending</h2>
                    <p class="text-3xl font-bold text-red-600">15</p>
                </div>
            </div>

            <!-- Notifikasi Cek Berkas -->
            <div class="bg-white p-6 rounded-lg shadow mt-6">
                <h2 class="text-xl font-bold mb-4">Notifikasi Cek Berkas</h2>
                <ul id="cek-berkas-notif" class="space-y-4">
                    <li class="py-3 px-4 border rounded-md bg-gray-50 shadow-sm">
                        <strong>Nama Berkas</strong> - Nomor Berkas <br>
                        <small class="text-gray-500">Tanggal</small>
                    </li>
                </ul>
            </div>

            <!-- Notifikasi Pengaduan -->
            <div class="bg-white p-6 rounded-lg shadow mt-6">
                <h2 class="text-xl font-bold mb-4">Notifikasi Pengaduan</h2>
                <ul id="pengaduan-notif" class="space-y-4">
                    <li class="py-3 px-4 border rounded-md bg-gray-50 shadow-sm">
                        <strong>Nama Pengaduan</strong> - Kategori <br>
                        <small class="text-gray-500">Tanggal</small>
                    </li>
                </ul>
            </div>

        </main>
    </div>
</div>
</body>
</html>
