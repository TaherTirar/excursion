<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AppController;
// use App\Http\Controllers\excursionController;
// use App\Http\Controllers\activiteController;
// use App\Http\Controllers\detailController;
use App\Http\Controllers\ServiceController;
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

// Route::get('/services/excursion',[ServiceController::class,'search']);


