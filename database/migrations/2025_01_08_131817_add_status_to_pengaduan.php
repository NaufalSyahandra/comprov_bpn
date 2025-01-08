<?php

use App\Enums\StatusPengaduan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pengaduan', function (Blueprint $table) {
            $table->enum('status', [
                StatusPengaduan::DIPROSES->value,
                StatusPengaduan::SELESAI->value,
            ])->default(StatusPengaduan::DIPROSES->value);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaduan', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
