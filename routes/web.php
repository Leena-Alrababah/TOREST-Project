<?php

use App\Http\Controllers\Frontend\ContactUSController as FrontendContactUsController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\RestaurantController as FrontendRestaurantController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::fallback(function () {
    return view('404');
});

// Route::get('/', function () {
//     return view('frontend.home.home');
// });
Route::get('/', [HomeController::class, 'homePage'])->name('home');



// Route::get('/dashboardd', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// me
Route::get('/all_restaurants', [FrontendRestaurantController::class, 'index'])->name('restaurants.index');
Route::get('/restaurant/{restaurant}', [FrontendRestaurantController::class, 'show'])->name('restaurants.show');
Route::post('/reserve_one', [FrontendReservationController::class, 'stepOne'])->name('reserve.stepOne');
Route::get('/search', [FrontendRestaurantController::class, 'searchRestaurant'])->name('search');

Route::middleware(['auth', 'verified'])->name('userSide.')->group(
    function () {
        Route::get('/complete_reservation/{restaurant}', [FrontendReservationController::class, 'showCompleteReservation'])->name('complete.reservation');
        Route::post('/reserve_two', [FrontendReservationController::class, 'stepTwo'])->name('reserve.stepTwo');
        Route::post('/addReview/{user_id}/{restaurant_id}', [FrontendRestaurantController::class, 'AddReview'])->name('AddReview');
    }
);

Route::get('/services', function () {
    return view('frontend.services.services');
})->name('services');

Route::get('/about', function () {
    return view('frontend.aboutUs.about');
})->name('about');


Route::resource('contact', FrontendContactUsController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// /------------ Login With google & Facebook ------------/

Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleController::class, 'callbackGoogle']);

Route::get('auth/facebook', [FacebookController::class, 'facebookPage'])->name('facebook-auth');
Route::get('auth/facebook/callback', [FacebookController::class, 'facebookredirect']);

Route::get('paypal/success', [FrontendReservationController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel',  [FrontendReservationController::class, 'cancel'])->name('paypal_cancel');
require __DIR__ . '/auth.php';
