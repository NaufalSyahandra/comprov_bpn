<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Pengaduan</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .icon-empty {
            color: rgba(255, 0, 0, 0.5);
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
    @include('admin.sidebar')

    <!-- Konten Utama -->
    <div class="flex-1 bg-gray-100 ml-64">
        <!-- Header Halaman -->
        <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-gray-700">Pengaduan Masuk</h1>
        </header>

        <!-- Isi Halaman Dashboard -->
        <main class="p-6">
            <!-- Tabel Daftar Pengaduan -->
            <div class="overflow-x-auto bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Daftar Pengaduan</h2>
                @if ($pengaduans->isEmpty())
                    <div class="text-center p-4">
                        <i class="fas fa-times-circle icon-empty text-4xl"></i>
                        <p class="mt-2 text-gray-700">Tidak ada data pengaduan.</p>
                    </div>
                @else
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
                        @foreach ($pengaduans as $pengaduan)
                            <tr>
                                <td class="border border-gray-200 px-4 py-2">{{ $pengaduan->id }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $pengaduan->nama_pengaduan }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $pengaduan->email }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $pengaduan->kategori }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $pengaduan->pesan }}</td>
                                <td class="border border-gray-200 px-4 py-2">
                                    <form action="{{ route('pengaduan.update', $pengaduan->id) }}" method="POST"
                                          class="inline">
                                        @csrf
                                        <select name="status"
                                                class="border rounded px-2 py-1 focus:outline-none focus:ring"
                                                onchange="this.form.submit()">
                                            @foreach (App\Enums\StatusPengaduan::cases() as $status)
                                                <option
                                                    value="{{ $status->value }}" {{ $pengaduan->status->value === $status->value ? 'selected' : '' }}>
                                                    {{ $status->value }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>

            <!-- Tabel Pengaduan Selesai -->
            <div class="overflow-x-auto bg-white rounded-lg shadow-md p-6 mt-6">
                <h2 class="text-xl font-bold mb-4">Daftar Pengaduan Selesai</h2>
                @if ($pengaduansSelesai->isEmpty())
                    <div class="text-center p-4">
                        <i class="fas fa-times-circle icon-empty text-4xl"></i>
                        <p class="mt-2 text-gray-700">Tidak ada data pengaduan selesai.</p>
                    </div>
                @else
                    <table class="w-full table-auto border-collapse border border-gray-200">
                        <thead>
                        <tr class="bg-gray-100 text-left">
                            <th class="border border-gray-200 px-4 py-2">Nomor Pengaduan</th>
                            <th class="border border-gray-200 px-4 py-2">Nama</th>
                            <th class="border border-gray-200 px-4 py-2">Email</th>
                            <th class="border border-gray-200 px-4 py-2">Kategori</th>
                            <th class="border border-gray-200 px-4 py-2">Pesan</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($pengaduansSelesai as $pengaduan)
                            <tr>
                                <td class="border border-gray-200 px-4 py-2">{{ $pengaduan->id }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $pengaduan->nama_pengaduan }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $pengaduan->email }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $pengaduan->kategori }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $pengaduan->pesan }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </main>
    </div>
</div>
</body>
</html>
