<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        function generateRandomNIP() {
            $nip = '';
            for ($i = 0; $i < 13; $i++) {
                $nip .= rand(0, 9);
            }
            return $nip;
        }

        User::create([
            'name' => 'superadmin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
            'nip' => generateRandomNIP(),
            'golongan' => 'Golongan IV/a',
            'jabatan' => 'Pembina',
        ]);

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'nip' => generateRandomNIP(),
            'golongan' => 'Golongan III/c',
            'jabatan' => 'Penata',
        ]);

    }
}
