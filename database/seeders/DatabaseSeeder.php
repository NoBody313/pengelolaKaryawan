<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FromJsonSeeder::class);
        $this->call(UserDatasSeeder::class);
        $this->call(PulseSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
