<?php

namespace Database\Factories;

use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = FactoryHelper::getRandomModelId(User::class);

        $words = $this->faker->words(100);
        $body = implode(' ', $words);

        return [
            'title' => $this->faker->title(),
            'body' => json_encode($body),
            'image' => $this->faker->imageUrl(),
            'user_id' => $user_id
        ];
    }
}
