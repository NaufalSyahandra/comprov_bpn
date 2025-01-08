<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">
    @include('admin.sidebar')

    <div class="flex-1 bg-gray-100 ml-64">
        <header class="bg-white shadow px-6 py-4">
            <h1 class="text-2xl font-semibold text-gray-700">Profile</h1>
        </header>

        <main class="p-6">
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white rounded-lg shadow-md p-6 flex items-center space-x-8">
                <div class="flex-shrink-0">
                    <img src="https://i.pinimg.com/736x/f5/2f/28/f52f28b0fbd8afa54105f07138d8573a.jpg"
                         alt="Profile Photo" class="w-40 h-40 rounded-full object-cover border">
                </div>

                <div class="space-y-4 text-gray-700">
                    <div>
                        <span class="block font-semibold text-lg">Nama</span>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div>
                        <span class="block font-semibold text-lg">NIP</span>
                        <p>{{ $user->nip }}</p>
                    </div>
                    <div>
                        <span class="block font-semibold text-lg">Golongan</span>
                        <p>{{ $user->golongan }}</p>
                    </div>
                    <div>
                        <span class="block font-semibold text-lg">Jabatan</span>
                        <p>{{ $user->jabatan }}</p>
                    </div>

                    <div>
                        <button onclick="toggleModal()"
                                class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
                            Edit Profile
                        </button>
                    </div>
                </div>
            </div>
        </main>

        <div id="edit-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white p-6 rounded-lg shadow-md w-96">
                <h2 class="text-xl font-semi-bold text-gray-700 mb-4">Edit Profile</h2>
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="space-y-4">
                        <div>
                            <label for="nama" class="block font-semibold text-gray-700">Nama</label>
                            <input type="text" id="nama" name="name" value="{{ old('name', $user->name) }}"
                                   class="w-full p-2 border rounded">
                        </div>
                        <div>
                            <label for="nip" class="block font-semibold text-gray-700">NIP</label>
                            <input type="text" id="nip" name="nip" value="{{ old('nip', $user->nip) }}"
                                   class="w-full p-2 border rounded">
                        </div>
                        <div>
                            <label for="golongan" class="block font-semibold text-gray-700">Golongan</label>
                            <select id="golongan" name="golongan" class="w-full p-2 border rounded"
                                    onchange="updateJabatan()">
                                @foreach (['Golongan III/a', 'Golongan III/b', 'Golongan III/c', 'Golongan IV/a'] as $golongan)
                                    <option
                                        value="{{ $golongan }}" @selected(old('golongan', $user->golongan) === $golongan)>
                                        {{ $golongan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="jabatan" class="block font-semibold text-gray-700">Jabatan</label>
                            <input type="text" id="jabatan" name="jabatan" value="{{ old('jabatan', $user->jabatan) }}"
                                   class="w-full p-2 border rounded" readonly>
                        </div>
                        <div class="flex justify-end space-x-2">
                            <button type="button" onclick="toggleModal()" class="bg-gray-300 py-2 px-4 rounded">Cancel
                            </button>
                            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleModal() {
        const modal = document.getElementById('edit-modal');
        modal.classList.toggle('hidden');
    }

    function updateJabatan() {
        const golongan = document.getElementById('golongan').value;
        const jabatanMapping = {
            'Golongan III/a': 'Penata Muda',
            'Golongan III/b': 'Penata Muda Tk 1',
            'Golongan III/c': 'Penata',
            'Golongan IV/a': 'Pembina',
        };
        document.getElementById('jabatan').value = jabatanMapping[golongan];
    }
</script>
</body>
</html>
