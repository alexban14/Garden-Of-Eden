<?php

namespace App\Repositories;

use App\Exceptions\GeneralJsonException;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentRepository
{
    public function create(array $attributes)
    {
        return DB::transaction(function() use($attributes) {
            $createdComment = Comment::query()->create([
                'body' => data_get($attributes, 'body'),
                'user_id' => data_get($attributes, 'user_id'),
                'article_id' => data_get($attributes, 'article_id')
            ]);

            throw_if(!$createdComment, GeneralJsonException::class, 'Failed to create comment');

            return $createdComment;
        });
    }

    public function update(array $attributes, Comment $comment)
    {
        return DB::transaction(function() use($attributes, $comment) {
            $updatedComment = $comment->update([
                'body' => data_get($attributes, 'body') ?? $comment->body
            ]);

            throw_if(!$updatedComment, GeneralJsonException::class, 'Failed to update comment');

            return $updatedComment;
        });
    }

    public function forceDelete($comment)
    {
        return DB::transaction(function() use($comment) {
            $deleted = $comment->forceDelete();
            return $deleted;
        });
    }
}
