<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// FrontendController 
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/demande/de/devis', [FrontendController::class, 'requestQuote'])->name('frontend.requestQuote');
Route::get('/demande/en/cours', [FrontendController::class, 'announcements'])->name('frontend.announcements');
Route::get('/transport-details', [FrontendController::class, 'details'])->name('frontend.details');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
