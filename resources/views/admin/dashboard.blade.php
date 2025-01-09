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
    <div class="flex-1 bg-gray-100 ml-64">
        <!-- Header -->
        <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-gray-700">Dashboard</h1>
        </header>

        <!-- Content -->
        <main class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card Total Pengaduan -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Total Pengaduan</h2>
                    <p class="text-3xl font-bold text-blue-600">{{ $totalPengaduan }}</p>
                </div>

                <!-- Card Lainnya (sesuaikan dengan kebutuhan) -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Total Berkas</h2>
                    <p class="text-3xl font-bold text-blue-600">120</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Berkas Selesai</h2>
                    <p class="text-3xl font-bold text-green-600">30</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Berkas Pending</h2>
                    <p class="text-3xl font-bold text-red-600">15</p>
                </div>
            </div>

            <!-- Notifikasi Pengaduan -->
            <div class="bg-white p-6 rounded-lg shadow mt-6">
                <h2 class="text-xl font-bold mb-4">Notifikasi Pengaduan</h2>
                <ul id="pengaduan-notif" class="space-y-4">
                    @foreach ($notifikasiPengaduan as $pengaduan)
                        <li class="py-3 px-4 border rounded-md bg-gray-50 shadow-sm">
                            <strong>{{ $pengaduan->nama_pengaduan }}</strong> - {{ $pengaduan->kategori }} <br>
                            <small class="text-gray-500">{{ $pengaduan->created_at->format('d M Y') }}</small>
                        </li>
                    @endforeach
                </ul>
            </div>

        </main>
    </div>
</div>
</body>
</html>
