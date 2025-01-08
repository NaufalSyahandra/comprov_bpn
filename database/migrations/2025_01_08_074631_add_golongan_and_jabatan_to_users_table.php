<?php

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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nip', 20)->unique()->nullable()->after('password');
            $table->enum('golongan', ['Golongan III/a', 'Golongan III/b', 'Golongan III/c', 'Golongan IV/a'])
                ->default('Golongan III/a')->after('NIP');
            $table->enum('jabatan', ['Penata Muda', 'Penata Muda Tk 1', 'Penata', 'Pembina'])
                ->default('Penata Muda')->after('golongan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nip' ,'golongan', 'jabatan']);
        });
    }
};
