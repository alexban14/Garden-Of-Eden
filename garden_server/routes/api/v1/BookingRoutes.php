<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialistBookingController;

Route::middleware([
    //
])
    ->name('specialist-booking')
    ->group( function() {
        Route::get('/bookings', [SpecialistBookingController::class, 'index'])->name('.index');
        Route::middleware(['auth:api'])
            ->post('/bookings', [SpecialistBookingController::class, 'store'])->name('.store');
        Route::get('/bookings/{user_id}', [SpecialistBookingController::class, 'showUserBookings'])
            ->name('.show_bookings')
            ->whereNumber('user_id')
        ;
        Route::middleware([
            'auth:api',
            'verify.booking-ownership'
        ])
            ->delete('/bookings/{booking}', [SpecialistBookingController::class, 'delete'])
            ->name('.delete')
            ->whereNumber('booking')
        ;
    });
