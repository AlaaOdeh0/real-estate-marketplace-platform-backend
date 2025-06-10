<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;


    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(['purchase', 'sale', 'rent']),
            'amount' => fake()->randomFloat(2, 10, 1000),
            'transaction_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'status' => fake()->randomElement(['pending', 'completed', 'failed']),
            'payment_method' => fake()->randomElement(['cash', 'credit_card', 'bank_transfer']),
        ];
    }
}
