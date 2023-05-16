<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    // 'auth'
])
    ->name('articles')
    ->group( function() {
        Route::get('/articles', [ArticleController::class, 'index'])->name('.index');
        Route::get('/articles/{article}', [ArticleController::class, 'show'])
            ->name('.show')
            // validate a parameter based on a regex
            // ->where('article', '[0-9]')
            ->whereNumber('article')
        ;
        Route::middleware('auth:api')->post('/articles', [ArticleController::class, 'store'])->name('.store');
        Route::middleware([
            'auth:api',
            'verify.article-ownership'
        ])
            ->patch('/articles/{article}', [ArticleController::class, 'update'])
            ->name('.update')
            ->whereNumber('article')
        ;
        Route::middleware([
            'auth:api',
            'verify.article-ownership'
        ])
            ->delete('/articles/{article}', [ArticleController::class, 'destroy'])
            ->name('.destroy')
            ->whereNumber('article')
        ;
    } );
