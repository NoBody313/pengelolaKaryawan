<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PulseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Fatih Maulana',
                'email' => 'admin@admed.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'role' => 'Pimpinan',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
