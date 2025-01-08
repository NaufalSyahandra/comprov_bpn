<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::all();
        $pengaduansSelesai = Pengaduan::where('status', 'Selesai')->get();
        return view('admin.pengaduan', compact('pengaduans', 'pengaduansSelesai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Diproses,Selesai',
        ]);

        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->status = $request->status;
        $pengaduan->save();

        return redirect()->route('pengaduan')->with('success', 'Status pengaduan berhasil diperbarui.');
    }}
