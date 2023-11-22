<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
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
})->middleware('auth');

Route::middleware('OnlyGuest')->group(function(){
    Route::get('login',[AuthController::class,'login'])->name('login')->middleware('OnlyGuest');
    Route::post('login',[AuthController::class,'authenticating'])->middleware('OnlyGuest');
    Route::get('register',[AuthController::class,'register'])->middleware('OnlyGuest');
    Route::post('register',[AuthController::class, 'registrasi']);

});

Route::middleware('auth')->group(function(){
    Route::get('logout',[AuthController::class,'logout']);
    Route::get('dashboard',[DashboardController::class,'index'])->middleware(['OnlyAdmin']);
    Route::get('profile',[UserController::class,'profile'])->middleware(['OnlyClient']);
    Route::get('profile',[ProfileController::class,'index']);
    Route::get('/profile/{id}',[ProfileController::class,'show']);
});


Route::get('books',[BookController::class,'books']);
