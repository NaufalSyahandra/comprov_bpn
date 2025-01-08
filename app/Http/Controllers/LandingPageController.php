<?php

namespace App\Http\Controllers;

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
}
