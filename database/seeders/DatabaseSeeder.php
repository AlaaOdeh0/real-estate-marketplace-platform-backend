<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
           User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
          $this->call([
        PropertySeeder::class,
        messagesSeeders::class
    ]);
    }
}
