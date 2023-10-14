<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\RestaurantController as FrontendRestaurantController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboardd', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// me
// Route::get('/home', [HomeController::class, 'index']);
Route::get('/all_restaurants', [FrontendRestaurantController::class, 'index'])->name('restaurants.index');
Route::get('/restaurant/{restaurant}', [FrontendRestaurantController::class, 'show'])->name('restaurants.show');
Route::post('/reserve_one', [FrontendReservationController::class, 'stepOne'])->name('reserve.stepOne');

Route::get('/services', function () {
    return view('frontend.services.services');
})->name('services');

Route::get('/about', function () {
    return view('frontend.aboutUs.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contactUs.contact');
})->name('contact');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
