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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

// Route::get('/home',[HomeController::class,'acceuil'])->name('acceuil');
Route::get('/services/excursion',[HomeController::class,'excursion'])->name('excursion');
Route::get('/services/activite',[HomeController::class,'activite'])->name('activite');
Route::get('/detail',[HomeController::class,'detail'])->name('detail');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/info',[HomeController::class,'info'])->name('info');

Route::get('/home',[ServiceController::class,'index']);
// Route::get('/services/excursion',[ServiceController::class,'excursion'])->name('excursion2');
Route::get('/services/activite',[ServiceController::class,'activity'])->name('activity');
Route::get('detail/{id}', [ServiceController::class,'show'])->name('activity.show');
Route::post('store',[ServiceController::class,'store'])->name('store');
Route::get('contact', [ServiceController::class,'contact'])->name('contact');


// Route::get('/services/excursion',[ServiceController::class,'search']);


