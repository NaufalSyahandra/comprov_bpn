<?php

namespace App\Http\Controllers;

use App\Enums\KategoriPengaduan;
use App\Models\Pengaduan;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function beranda(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('beranda');
    }

    public function tentang(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('tentang');
    }

    public function publikasi(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('publikasi');
    }

    public function layanan(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('layanan.layanan');
    }

    public function layanan_cekberkas(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('layanan.cekberkas');
    }

    public function layanan_pengaduan(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('layanan.pengaduan');
    }

    public function layanan_pengaduan_store(Request $request)
    {
        $request->validate([
            'nama_pengaduan' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|numeric|digits_between:10,13',
            'kategori' => 'required|in:' . implode(',', array_map(fn($case) => $case->value, KategoriPengaduan::cases())),
            'pesan' => 'required|string',
        ]);

        Pengaduan::create($request->all());

        return redirect()->route('layanan.pengaduan')->with('success', 'Pengaduan berhasil dikirim!');
    }
}
