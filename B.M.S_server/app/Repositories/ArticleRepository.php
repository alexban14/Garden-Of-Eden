<?php

namespace App\Repositories;

use App\Exceptions\GeneralJsonException;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleRepository
{
    public function create(array $attributes)
    {
        return DB::transaction( function() use($attributes) {
            $createdArticle = Article::query()->create([
                'title' => data_get($attributes, 'title'),
                'body' => data_get($attributes, 'body'),
                'image' => data_get($attributes, 'image'),
                'user_id' => data_get($attributes, 'user_id')
            ]);

            throw_if(!$createdArticle, GeneralJsonException::class, 'Failed to create the Article');

            return $createdArticle;
        });
    }

    public function update(array $attributes, Article $article)
    {
        return DB::transaction( function() use($attributes, $article) {
            $updated = $article->update([
                'title' => data_get($attributes, 'title') ?? $article->title,
                'body' => data_get($attributes, 'body') ?? $article->body,
                'image' => data_get($attributes, 'image') ?? $article->image,
            ]);

            throw_if(!$updated, GeneralJsonException::class, 'Failed to update the article');

            return $updated;
        });
    }

    public function forceDelete($article)
    {
        return DB::transaction(function () use($article) {
            $deleted = $article->forceDelete();

            throw_if(!$deleted, GeneralJsonException::class, 'Failed to delete the article');

            return $deleted;
        });
    }
}
