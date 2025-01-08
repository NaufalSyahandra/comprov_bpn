<?php

namespace App\Models;

use App\Enums\KategoriPengaduan;
use App\Enums\StatusPengaduan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan'; // Nama tabel

    protected $fillable = [
        'nama_pengaduan',
        'email',
        'no_hp',
        'kategori',
        'pesan',
        'status',
    ];

    protected $casts = [
        'status' => StatusPengaduan::class,
    ];

    public function getKategoriEnum(): KategoriPengaduan
    {
        return KategoriPengaduan::from($this->kategori);
    }
}
