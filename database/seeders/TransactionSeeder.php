<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        $buyers = User::where('role', 'buyer')->pluck('id');
        $customers = User::where('role', 'customer')->pluck('id');




        for ($i = 0; $i < 30; $i++) {
            Transaction::factory()->create([
                'buyer_id' => $buyers->random(),
                'customer_id' => $customers->random(),

            ]);
        }
    }
}
