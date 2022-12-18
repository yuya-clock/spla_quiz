<?php

namespace Database\Factories;

use App\Models\Weapon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weapon>
 */
class WeaponFactory extends Factory
{
    protected $model = Weapon::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'rifle_range' => fake()->numberBetween(1, 100),
            'maximum_range' => fake()->numberBetween(1, 100),
        ];
    }
}
