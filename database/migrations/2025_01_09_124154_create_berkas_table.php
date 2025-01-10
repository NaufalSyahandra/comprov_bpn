<?php

use App\Enums\StatusBerkas;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_berkas');
            $table->string('nomor_berkas')->unique();
            $table->enum('status', [
                StatusBerkas::DIPROSES->value,
                StatusBerkas::DITOLAK->value,
                StatusBerkas::SELESAI->value,
            ])->default(StatusBerkas::DIPROSES->value);
            $table->string('file_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
