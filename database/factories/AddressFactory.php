<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;
use App\Models\Country;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country_id' => Country::query()->inRandomOrder()->first()->id,
            'city_id' => City::query()->inRandomOrder()->first()->id,
            'address' => fake()->address(),
            'post_index' => fake()->postcode(),
        ];
    }
}
