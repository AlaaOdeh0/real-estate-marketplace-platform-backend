<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(10)->create(['role' => 'buyer']);
        User::factory()->count(10)->create(['role' => 'customer']);
        User::factory()->count(5)->create(['role' => 'admin']);
    }
}
