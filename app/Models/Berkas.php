<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    protected $table = 'berkas';

    protected $fillable = [
        'nama',
        'jenis_berkas',
        'nomor_berkas',
        'status',
        'file_path',
        'created_at',
    ];

    public $timestamps = true;
}
