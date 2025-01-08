<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|numeric|digits:13',
            'golongan' => 'required|in:Golongan III/a,Golongan III/b,Golongan III/c,Golongan IV/a',
        ]);

        $jabatanMapping = [
            'Golongan III/a' => 'Penata Muda',
            'Golongan III/b' => 'Penata Muda Tk 1',
            'Golongan III/c' => 'Penata',
            'Golongan IV/a' => 'Pembina',
        ];

        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'nip' => $request->nip,
            'golongan' => $request->golongan,
            'jabatan' => $jabatanMapping[$request->golongan],
        ]);

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui!');
    }
}
