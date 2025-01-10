<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
    @include('admin.sidebar')

    <div class="flex-1 ml-64">
        <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-gray-700">Data User</h1>
            <button onclick="toggleAddUserModal()" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700">
                Tambah User
            </button>
        </header>

        <main class="p-6">
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Perhatian!</strong>
                    <span class="block sm:inline">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </span>
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                     role="alert">
                    <strong class="font-bold">Sukses!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="overflow-x-auto bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Daftar User</h2>

                @if ($users->isEmpty())
                    <div class="text-center p-4">
                        <i class="fas fa-times-circle icon-empty text-4xl"></i>
                        <p class="mt-2 text-gray-700">Tidak ada data user.</p>
                    </div>
                @else
                    <table class="w-full table-auto border-collapse border border-gray-200">
                        <thead>
                        <tr class="bg-gray-100 text-left">
                            <th class="border border-gray-200 px-4 py-2">Name</th>
                            <th class="border border-gray-200 px-4 py-2">Username</th>
                            <th class="border border-gray-200 px-4 py-2">NIP</th>
                            <th class="border border-gray-200 px-4 py-2">Email</th>
                            <th class="border border-gray-200 px-4 py-2">Golongan</th>
                            <th class="border border-gray-200 px-4 py-2">Jabatan</th>
                            <th class="border border-gray-200 px-4 py-2">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="border border-gray-200 px-4 py-2">{{ $user->name }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $user->username }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $user->nip }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $user->email }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ ucfirst($user->golongan) }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ ucfirst($user->jabatan) }}</td>
                                <td class="border border-gray-200 px-4 py-2">
                                    <button class="text-blue-600 hover:underline editButton"
                                            data-id="{{ $user->id }}"
                                            data-name="{{ $user->name }}"
                                            data-username="{{ $user->username }}"
                                            data-nip="{{ $user->nip }}"
                                            data-email="{{ $user->email }}"
                                            data-golongan="{{ $user->golongan }}"
                                            data-jabatan="{{ $user->jabatan }}"
                                            onclick="openEditUserModal(this)">
                                        Edit
                                    </button>
                                    |
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </main>
    </div>
</div>

<!-- Modal Tambah User -->
<div id="addUserModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex justify-center items-center">
    <div class="bg-white rounded-lg p-6 w-full max-w-md mx-4">
        <h2 class="text-xl font-bold mb-4">Tambah User</h2>
        <form id="addUserForm" method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="mb-4">
                <label for="addName" class="block">Name</label>
                <input type="text" name="name" id="addName" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="addUsername" class="block">Username</label>
                <input type="text" name="username" id="addUsername" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="addNip" class="block">NIP</label>
                <input type="text" name="nip" id="addNip" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="addEmail" class="block">Email</label>
                <input type="email" name="email" id="addEmail" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="addGolongan" class="block">Golongan</label>
                <select id="addGolongan" name="golongan" class="border p-2 w-full" onchange="updateAddJabatan()">
                    <option value="Golongan III/a">Golongan III/a</option>
                    <option value="Golongan III/b">Golongan III/b</option>
                    <option value="Golongan III/c">Golongan III/c</option>
                    <option value="Golongan IV/a">Golongan IV/a</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="addJabatan" class="block">Jabatan</label>
                <input type="text" id="addJabatan" name="jabatan" class="border p-2 w-full" readonly>
            </div>
            <div class="mb-4">
                <label for="addPassword" class="block">Password</label>
                <input type="password" name="password" id="addPassword" class="border p-2 w-full" required>
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="toggleAddUserModal()" class="bg-gray-300 text-black px-4 py-2 mr-2">
                    Cancel
                </button>
                <button type="submit" class="bg-green-600 text-white px-4 py-2">Tambah</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit User -->
<div id="editUserModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex justify-center items-center">
    <div class="bg-white rounded-lg p-6 w-full max-w-md mx-4">
        <h2 class="text-xl font-bold mb-4">Edit User</h2>
        <form id="editUserForm" method="POST" action="">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="editName" class="block">Name</label>
                <input type="text" name="name" id="editName" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="editUsername" class="block">Username</label>
                <input type="text" name="username" id="editUsername" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="editNip" class="block">NIP</label>
                <input type="text" name="nip" id="editNip" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="editEmail" class="block">Email</label>
                <input type="email" name="email" id="editEmail" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="editGolongan" class="block">Golongan</label>
                <select id="editGolongan" name="golongan" class="border p-2 w-full" onchange="updateEditJabatan()">
                    <option value="Golongan III/a">Golongan III/a</option>
                    <option value="Golongan III/b">Golongan III/b</option>
                    <option value="Golongan III/c">Golongan III/c</option>
                    <option value="Golongan IV/a">Golongan IV/a</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="editJabatan" class="block">Jabatan</label>
                <input type="text" id="editJabatan" name="jabatan" class="border p-2 w-full" readonly>
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="toggleEditUserModal()" class="bg-gray-300 text-black px-4 py-2 mr-2">
                    Cancel
                </button>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function toggleAddUserModal() {
        const modal = document.getElementById('addUserModal');
        modal.classList.toggle('hidden');
    }

    function toggleEditUserModal() {
        const modal = document.getElementById('editUserModal');
        modal.classList.toggle('hidden');
    }

    function openEditUserModal(button) {
        const userId = button.getAttribute('data-id');
        const userName = button.getAttribute('data-name');
        const userUsername = button.getAttribute('data-username');
        const userNip = button.getAttribute('data-nip');
        const userEmail = button.getAttribute('data-email');
        const userGolongan = button.getAttribute('data-golongan');
        const userJabatan = button.getAttribute('data-jabatan');

        document.getElementById('editUserForm').action = `/admin/data-user/${userId}`;
        document.getElementById('editName').value = userName;
        document.getElementById('editUsername').value = userUsername;
        document.getElementById('editNip').value = userNip;
        document.getElementById('editEmail').value = userEmail;
        document.getElementById('editGolongan').value = userGolongan;
        document.getElementById('editJabatan').value = userJabatan;

        toggleEditUserModal();
    }

    function updateAddJabatan() {
        const golongan = document.getElementById('addGolongan').value;
        const jabatanMapping = {
            'Golongan III/a': 'Penata Muda',
            'Golongan III/b': 'Penata Muda Tk 1',
            'Golongan III/c': 'Penata',
            'Golongan IV/a': 'Pembina',
        };
        document.getElementById('addJabatan').value = jabatanMapping[golongan] || '';
    }

    function updateEditJabatan() {
        const golongan = document.getElementById('editGolongan').value;
        const jabatanMapping = {
            'Golongan III/a': 'Penata Muda',
            'Golongan III/b': 'Penata Muda Tk 1',
            'Golongan III/c': 'Penata',
            'Golongan IV/a': 'Pembina',
        };
        document.getElementById('editJabatan').value = jabatanMapping[golongan] || '';
    }
</script>
</body>
</html>
