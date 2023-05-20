<?php

use \App\Http\Controllers\ContactUsInfoController;

Route::middleware([
    //''
])
    ->name('contact-us-info')
    ->group( function() {
        Route::get('/contact-us-infos', [ContactUsInfoController::class, 'index'])->name('.index');
        Route::post('/contact-us-infos', [ContactUsInfoController::class, 'store'])->name('.store');
        Route::delete('/contact-us-infos/{messageId}', [ContactUsInfoController::class, '.delete'])
            ->name('delete')
            ->whereNumber('messageId');
    } );
