<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $article_id = FactoryHelper::getRandomModelId(Article::class);
        $user_id = FactoryHelper::getRandomModelId(User::class);

        return [
            'body' => $this->faker->words(10),
            'user_id' => $user_id,
            'username' => $this->faker->name(),
            'article_id' => $article_id
        ];
    }
}
