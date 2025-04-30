<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AppController;
// use App\Http\Controllers\excursionController;
// use App\Http\Controllers\activiteController;
// use App\Http\Controllers\detailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;





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

// Set home as the default landing page
Route::get('/', function () {
    return redirect('/home');
});

// Home routes
Route::get('/home', [ServiceController::class, 'index'])->name('home');

// Services routes
Route::get('/services/excursion', [ServiceController::class, 'excursion'])->name('excursion');
Route::get('/services/activite', [ServiceController::class, 'activity'])->name('activite');

// Other routes
Route::get('/detail/{id}', [ServiceController::class, 'show'])->name('activity.show');
Route::get('/contact', [ServiceController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ServiceController::class, 'store'])->name('store');
Route::get('/info', [HomeController::class, 'info'])->name('info');

// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (requires authentication)
Route::middleware(['auth'])->group(function () {
    // Profile routes
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::put('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');

    // Booking routes
    Route::post('/excursion/{id}/book', [ServiceController::class, 'bookExcursion'])->name('excursion.book');
    Route::post('/activity/{id}/book', [ServiceController::class, 'bookActivity'])->name('activity.book');
    Route::get('/my-bookings', [ServiceController::class, 'myBookings'])->name('bookings');
    Route::delete('/booking/{id}/cancel', [ServiceController::class, 'cancelBooking'])->name('booking.cancel');

    // Review routes
    Route::post('/excursion/{id}/review', [ServiceController::class, 'addExcursionReview'])->name('excursion.review');
    Route::post('/activity/{id}/review', [ServiceController::class, 'addActivityReview'])->name('activity.review');
    // Add any routes that should only be accessible to logged-in users here
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    // You can add more protected routes here as needed
});

// Route::get('/services/excursion',[ServiceController::class,'search']);


