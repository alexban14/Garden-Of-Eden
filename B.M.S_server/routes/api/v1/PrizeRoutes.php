<?php

use App\Http\Controllers\PrizeController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth'
])
    ->name('prizes')
    ->group( function() {
        Route::get('/prizes', [PrizeController::class, 'index'])->name('.index');
        Route::get('/prizes/{prize}', [PrizeController::class, 'show'])
            ->name('.show')
            // validate a parameter based on a regex
            // ->where('article', '[0-9]')
            ->whereNumber('prize')
        ;
        Route::post('/prizes', [PrizeController::class, 'store'])->name('.store');
        Route::patch('/prizes/{prize}', [PrizeController::class, 'update'])
            ->name('.update')
            ->whereNumber('prize')
        ;
        Route::delete('/prizes/{prize}', [PrizeController::class, 'destroy'])
            ->name('.destroy')
            ->whereNumber('prize')
        ;
    } );
