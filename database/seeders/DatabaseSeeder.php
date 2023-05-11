<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            End_use_energy_classifications::class,
            Ghg_reduction_classifications::class,
            Region_classifications::class,
            Role::class,
            User::class,

        ]);
    }
}
