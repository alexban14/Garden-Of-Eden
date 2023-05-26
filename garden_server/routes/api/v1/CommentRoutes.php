<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    // 'auth'
])
    ->name('comments')
    ->group( function() {
        Route::get('/comments/{article_id}', [CommentController::class, 'index'])
            ->name('.index')
            ->whereNumber('article_id')
        ;
        Route::get('/comments/{comment}', [CommentController::class, 'show'])
            ->name('.show')
            // validate a parameter based on a regex
            // ->where('article', '[0-9]')
            ->whereNumber('comment')
        ;
        Route::middleware('auth:api')->post('/comments', [CommentController::class, 'store'])->name('.store');
        Route::middleware(['auth:api'])
            ->patch('/comments/{comment}', [CommentController::class, 'update'])
            ->name('.update')
            ->whereNumber('comment')
        ;
        Route::middleware(['auth:api', ])
            ->delete('/comments/{comment}', [CommentController::class, 'destroy'])
            ->name('.destroy')
            ->whereNumber('comment')
        ;
    } );
