<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    // 'auth'
])
    ->name('comments')
    ->group( function() {
        Route::get('/comments', [CommentController::class, 'index'])->name('.index');
        Route::get('/comments/{comment}', [CommentController::class, 'show'])
            ->name('.show')
            // validate a parameter based on a regex
            // ->where('article', '[0-9]')
            ->whereNumber('comment')
        ;
        Route::post('/comments', [CommentController::class, 'store'])->name('.store');
        Route::patch('/comments/{comment}', [CommentController::class, 'update'])
            ->name('.update')
            ->whereNumber('comment')
        ;
        Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])
            ->name('.destroy')
            ->whereNumber('comment')
        ;
    } );
