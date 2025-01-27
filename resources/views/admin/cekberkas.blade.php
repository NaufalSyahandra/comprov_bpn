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

            <!-- Pesan Sukses dan Error -->
            @if(session('success'))
                <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-200 text-red-800 p-4 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Tambah Berkas -->
            <section class="mb-6 bg-white p-4 rounded shadow">
                <h2 class="text-lg font-semibold mb-4">Tambah Berkas</h2>
                <form id="tambah-berkas-form" action="{{ route('cekberkas.store') }}" method="POST"
                      enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <input type="text" id="nama" name="nama" placeholder="Nama"
                           class="w-full p-2 border rounded shadow-sm" required>
                    <select id="jenis_berkas" name="jenis_berkas" class="w-full p-2 border rounded shadow-sm" required>
                        <option value="" disabled selected>Pilih Jenis Berkas</option>
                        <option value="Pembuatan Sertifikat">Pembuatan Sertifikat</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Sertifikat Hilang">Sertifikat Hilang</option>
                    </select>
                    <input type="file" id="file" name="file" accept=".pdf" class="w-full p-2 border rounded shadow-sm"
                           required>
                    <button type="submit"
                            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Tambah
                    </button>
                </form>
            </section>

            <!-- Tabel Berkas Masuk -->
            <section class="mb-6">
                <h2 class="text-lg font-semibold mb-4">Berkas Masuk</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg shadow-lg">
                        <thead>
                        <tr class="bg-blue-600 text-white">
                            <th class="p-3 text-left">Nama</th>
                            <th class="p-3 text-left">Jenis Berkas</th>
                            <th class="p-3 text-left">Nomor Berkas</th>
                            <th class="p-3 text-left">Status</th>
                            <th class="p-3 text-left">Tanggal Diterima</th>
                            <th class="p-3 text-left">Aksi</th>
                        </tr>
                        </thead>
                        <tbody id="berkas-table">
                        @foreach ($berkas as $item)
                            <tr class="hover:bg-gray-100">
                                <td class="p-3">{{ $item->nama }}</td>
                                <td class="p-3">{{ $item->jenis_berkas }}</td>
                                <td class="p-3">{{ $item->nomor_berkas }}</td>
                                <td class="p-3">
                                    <form action="{{ route('cekberkas.updateStatus', $item->id) }}" method="POST"
                                          class="inline">
                                        @csrf
                                        <select name="status" class="p-2 border rounded shadow-sm"
                                                onchange="this.form.submit()">
                                            <option
                                                value="Diproses" {{ $item->status == 'Diproses' ? 'selected' : '' }}>
                                                Diproses
                                            </option>
                                            <option value="Ditolak" {{ $item->status == 'Ditolak' ? 'selected' : '' }}>
                                                Ditolak
                                            </option>
                                            <option value="Selesai" {{ $item->status == 'Selesai' ? 'selected' : '' }}>
                                                Selesai
                                            </option>
                                        </select>
                                    </form>
                                </td>
                                <td class="p-3">{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</td>
                                <td class="p-3">
                                    <a href="{{ route('cekberkas.download', $item->id) }}"
                                       class="text-blue-600 hover:underline">Download</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Tabel Berkas Ditolak -->
            <section class="mb-6">
                <h2 class="text-lg font-semibold mb-4">Berkas Ditolak</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg shadow-lg">
                        <thead>
                        <tr class="bg-red-600 text-white">
                            <th class="p-3 text-left">Nama</th>
                            <th class="p-3 text-left">Jenis Berkas</th>
                            <th class="p-3 text-left">Nomor Berkas</th>
                            <th class="p-3 text-left">Tanggal Diterima</th>
                            <th class="p-3 text-left">Aksi</th>
                        </tr>
                        </thead>
                        <tbody id="berkas-ditolak-table">
                        @foreach ($berkas->where('status', 'Ditolak') as $item)
                            <tr class="hover:bg-gray-100">
                                <td class="p-3">{{ $item->nama }}</td>
                                <td class="p-3">{{ $item->jenis_berkas }}</td>
                                <td class="p-3">{{ $item->nomor_berkas }}</td>
                                <td class="p-3">{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</td>
                                <td class="p-3">
                                    <a href="{{ route('cekberkas.download', $item->id) }}"
                                       class="text-blue-600 hover:underline">Download</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Tabel Berkas Selesai -->
            <section class="mb-6">
                <h2 class="text-lg font-semibold mb-4">Berkas Selesai</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg shadow-lg">
                        <thead>
                        <tr class="bg-green-600 text-white">
                            <th class="p-3 text-left">Nama</th>
                            <th class="p-3 text-left">Jenis Berkas</th>
                            <th class="p-3 text-left">Nomor Berkas</th>
                            <th class="p-3 text-left">Tanggal Diterima</th>
                            <th class="p-3 text-left">Aksi</th>
                        </tr>
                        </thead>
                        <tbody id="berkas-selesai-table">
                        @foreach ($berkas->where('status', 'Selesai') as $item)
                            <tr class="hover:bg-gray-100">
                                <td class="p-3">{{ $item->nama }}</td>
                                <td class="p-3">{{ $item->jenis_berkas }}</td>
                                <td class="p-3">{{ $item->nomor_berkas }}</td>
                                <td class="p-3">{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</td>
                                <td class="p-3">
                                    <a href="{{ route('cekberkas.download', $item->id) }}"
                                       class="text-blue-600 hover:underline">Download</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
