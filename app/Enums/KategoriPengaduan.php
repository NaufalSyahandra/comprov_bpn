<?php

namespace App\Enums;

enum KategoriPengaduan: string
{
    case PendaftaranPTSL = 'Pendaftaran PTSL';
    case PelayananDigital = 'Pelayanan Digital';
    case PelayananPublik = 'Pelayanan Publik';
    case SengketaTanah = 'Sengketa Tanah';
    case PengaduanSertifikatTanah = 'Pengaduan Sertifikat Tanah';
}
