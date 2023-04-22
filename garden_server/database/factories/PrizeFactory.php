<?php

namespace Database\Factories;

use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Prize>
 */
class PrizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = FactoryHelper::getRandomModelId(User::class);

        return [
            'name' => $this->faker->title(),
            'description' => $this->faker->words(10),
            'expiration_date' => $this->faker->dateTimeThisYear(),
            'user_id' => $user_id
        ];
    }
}
