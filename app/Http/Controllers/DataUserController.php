<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.data_user', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'nip' => 'required|numeric|digits:13|unique:users',
            'email' => 'required|email|unique:users',
            'golongan' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'nip' => $request->nip,
            'email' => $request->email,
            'golongan' => $request->golongan,
            'jabatan' => $request->jabatan,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'nip' => 'required|numeric|digits:13|unique:users,nip,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'golongan' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'password' => 'nullable|string|min:8',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'nip' => $request->nip,
            'email' => $request->email,
            'golongan' => $request->golongan,
            'jabatan' => $request->jabatan,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus.');
    }
}
