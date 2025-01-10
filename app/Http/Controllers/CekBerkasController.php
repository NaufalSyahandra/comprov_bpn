<?php

namespace App\Http\Controllers;

use App\Enums\StatusBerkas;
use App\Models\Berkas;
use Illuminate\Http\Request;

class CekBerkasController extends Controller
{
    public function index()
    {
        $berkas = Berkas::orderBy('created_at', 'desc')->get();
        return view('admin.cekberkas', compact('berkas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_berkas' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf|max:2048',
        ]);

        $path = $request->file('file')->store('berkas', 'public');

        Berkas::create([
            'nama' => $request->nama,
            'jenis_berkas' => $request->jenis_berkas,
            'nomor_berkas' => uniqid(),
            'status' => StatusBerkas::DIPROSES->value,
            'file_path' => $path,
        ]);

        return redirect()->back()->with('success', 'Berkas berhasil ditambahkan.');
    }

    public function download($id)
    {
        $berkas = Berkas::findOrFail($id);

        $filePath = storage_path('app/public/' . $berkas->file_path);

        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        return redirect()->back()->with('error', 'File tidak ditemukan.');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:' . implode(',', array_map(fn($case) => $case->value, StatusBerkas::cases())),
        ]);

        $berkas = Berkas::findOrFail($id);
        $berkas->status = $request->status;
        $berkas->save();

        return redirect()->back()->with('success', 'Status berkas berhasil diperbarui.');
    }
}
