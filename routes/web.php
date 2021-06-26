<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MoverController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Admin Route Group 
Route::group(['prefix' => 'admin'], function () {

    // AdminController 
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
});

// FrontendController 
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/demande/de/devis', [FrontendController::class, 'requestQuote'])->name('frontend.requestQuote');
Route::get('/demande/en/cours', [FrontendController::class, 'announcements'])->name('frontend.announcements');
Route::get('/transport-details', [FrontendController::class, 'details'])->name('frontend.details');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/inscription/demenageur', [FrontendController::class, 'moverReg'])->name('frontend.moverReg');

// Mover Route Groups  
Route::group(['prefix' => 'mover'], function () {

    // MoverController
    Route::post('/register', [MoverController::class, 'register'])->name('mover.register');
    Route::get('/dashboard', [MoverController::class, 'index'])->name('mover.dashboard');
});

// User Route Groups
Route::group(['prefix' => 'user'], function () {

    // UserController 
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard'); 
});