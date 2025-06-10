<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;
use Faker\Factory as Faker;

class messagesSeeders extends Seeder
{
    public function run()
    {
       Message::factory()->count(20)->create();
        }
    }

