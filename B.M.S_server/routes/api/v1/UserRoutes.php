<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::apiResource('users', UserController::class);

Route::middleware([
    // 'auth'
])
    ->name('users')
    ->group( function() {
        Route::get('/users', [UserController::class, 'index'])->name('.index');
        Route::get('/users/{user}', [UserController::class, 'show'])
            ->name('.show')
            // validate a parameter based on a regex
            // ->where('user', '[0-9]')
            ->whereNumber('user')
        ;
        Route::post('/users', [UserController::class, 'store'])->name('.store');
        Route::patch('/users/{user}', [UserController::class, 'update'])
            ->name('.update')
            ->whereNumber('user')
        ;
        Route::delete('/users/{user}', [UserController::class, 'destroy'])
            ->name('.destroy')
            ->whereNumber('user')
        ;
    } );
