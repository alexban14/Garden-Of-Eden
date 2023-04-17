<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository
{
    public function create(array $attributes)
    {
        $createdArticle = Article::query()->create([
            'title' => data_get($attributes, 'title'),
            'body' => data_get($attributes, 'body'),
            'image' => data_get($attributes, 'image'),
            'user_id' => data_get($attributes, 'user_id')
        ]);

        return $createdArticle;
    }

    public function update(array $attributes, Article $article)
    {}

    public function forceDelete()
    {}
}
