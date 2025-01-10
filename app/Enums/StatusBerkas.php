<?php

namespace App\Enums;

enum StatusBerkas: string
{
    case DIPROSES = 'Diproses';
    case DITOLAK = 'Ditolak';
    case SELESAI = 'Selesai';
}
