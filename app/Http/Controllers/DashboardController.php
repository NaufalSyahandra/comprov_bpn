<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Pengaduan;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $totalPengaduan = Pengaduan::count();
        $totalBerkas = Berkas::count();
        $totalBerkasSelesai = Berkas::where('status', 'Selesai')->count();
        $totalBerkasPending = Berkas::where('status', 'Diproses')->count();

        $notifikasiPengaduan = Pengaduan::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalPengaduan', 'totalBerkas', 'totalBerkasSelesai', 'totalBerkasPending', 'notifikasiPengaduan'));
    }
}
