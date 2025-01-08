<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekBerkasController extends Controller
{
    public function index()
    {
        return view('admin.cekberkas');
    }
}
