<?php

namespace App\Repositories;

use App\Models\Comment;

class CommentRepository
{
    public function create(array $attributes)
    {
        $createComment = Comment::query()->create([
            'body' => data_get($attributes, 'body'),
            'user_id' => data_get($attributes, 'user_id'),
            'article_id' => data_get($attributes, 'article_id')
        ]);

        return $createComment;
    }

    public function update(array $attributes, Comment $comment)
    {}

    public function forceDelete()
    {}
}
