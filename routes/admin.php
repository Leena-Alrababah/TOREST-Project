<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->name('dashboard.')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('customers', CustomerController::class);
    Route::resource('providers', ProviderController::class);
    Route::resource('admins', AdminController::class);

    Route::resource('restaurants', RestaurantController::class);
    Route::resource('reservations', ReservationController::class);
    Route::resource('reviews', ReviewController::class);

    Route::resource('menu', MenuController::class);
    Route::resource('tables', TableController::class);
    Route::resource('all_contact', ContactUsController::class);


    //** Profile Routes
    // Route::get('/profile', [AdminController::class, 'adminProfile'])->name('profile');
    // Route::get('/profile/change-password', [AdminController::class, 'changePassword'])->name('profile.change-password');
    // Route::post('/profile/update-password/{id}', [AdminController::class, 'updatePassword'])->name('profile.update-password');
});


// Route::middleware(['auth', 'provider'])->name('provider.')->group(function () {

//     // Route::get('/provider/dashboard', [IndexController::class, 'indexProvider'])->name('home');
//     // Route::get('/provider/reservations', [ReservationController::class, 'providerReservations'])->name('reservations');
//     // Route::get('/provider/reservations', [ReservationController::class, 'index'])->name('reservations');
//     // Route::resource('reservations', ReservationController::class);

//     // Route::get('/provider/reviews', [ReviewController::class, 'index'])->name('reviews');
//     // Route::resource('reviews', ReviewController::class);

//     // Route::resource('menu', MenuController::class);
//     // Route::resource('tables', TableController::class);
//     // Route::resource('admins', AdminController::class);

//     // Route::resource('reviews', ReviewController::class);
// });
