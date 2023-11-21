<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Petugas::create([
            'nm_petugas' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'telp' => '081315594977',
            'level' => 'admin',
        ]);
    }
}
