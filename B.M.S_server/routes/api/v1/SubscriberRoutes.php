<?php

use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth'
])
    ->name('subscribers')
    ->group( function() {
        Route::get('/subscribers', [SubscriberController::class, 'index'])->name('.index');
        Route::get('/subscribers/{subscriber}', [SubscriberController::class, 'show'])
            ->name('.show')
            // validate a parameter based on a regex
            // ->where('article', '[0-9]')
            ->whereNumber('subscriber')
        ;
        Route::post('/subscribers', [SubscriberController::class, 'store'])->name('.store');
        Route::patch('/subscribers/{subscriber}', [SubscriberController::class, 'update'])
            ->name('.update')
            ->whereNumber('subscriber')
        ;
        Route::delete('/subscribers/{subscriber}', [SubscriberController::class, 'destroy'])
            ->name('.destroy')
            ->whereNumber('subscriber')
        ;
    } );
