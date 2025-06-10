<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Property;

class PropertyFactory extends Factory
{
    protected $model = Property::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'price' => $this->faker->numberBetween(50000, 500000),
            'description' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'status' => $this->faker->randomElement(['Available', 'sold', 'rent' ,'buy']),
            'bedrooms' => $this->faker->randomFloat(1, 1, 5),
            'bathrooms' => $this->faker->randomFloat(1, 1, 4),
            'area' => $this->faker->numberBetween(50, 500), // m²
            'agency' => $this->faker->company,
            'agent' => $this->faker->name,
            'media_url'=> $this->faker->url(),
            'features' => implode(', ', $this->faker->words(3)),
            'amount' => $this->faker->numberBetween(1000, 20000),
            'price_cut_date' => $this->faker->date(),
        ];
    }
}
