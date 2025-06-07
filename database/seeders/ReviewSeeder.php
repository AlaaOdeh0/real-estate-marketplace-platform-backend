<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'content' => 'Great property, very clean and well-located.',
                'rating' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'content' => 'Not bad, but the neighborhood was noisy.',
                'rating' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'content' => 'Terrible experience. The property wasn’t as described.',
                'rating' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
