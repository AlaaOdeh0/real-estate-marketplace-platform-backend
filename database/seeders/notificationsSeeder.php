<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        DB::table('notifications')->insert([
            [
                'type' => 'new_listing',
                'content' => 'A new property has been listed in your area.',
                'status' => 'unread',
                'is_read' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'type' => 'price_change',
                'content' => 'The price of a property you liked has changed.',
                'status' => 'unread',
                'is_read' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'type' => 'inquiry',
                'content' => 'Someone has inquired about your listed property.',
                'status' => 'read',
                'is_read' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
