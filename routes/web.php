<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MoverController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CalloutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\RegistrationController;

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

    // BannerController 
    Route::resource('banners', BannerController::class);

    //ServiceController 
    Route::get('services', [ServiceController::class, 'index'])->name('services.index');
    Route::post('services/store', [ServiceController::class, 'store'])->name('services.store');
    Route::get('services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('services/update', [ServiceController::class, 'update'])->name('services.update');
    Route::get('services/delete/{id}', [ServiceController::class, 'delete'])->name('services.delete');


    //WorksController 
    Route::get('works', [WorkController::class, 'index'])->name('works.index');
    Route::post('works/store', [WorkController::class, 'store'])->name('works.store');
    Route::get('works/{id}/edit', [WorkController::class, 'edit'])->name('works.edit');
    Route::post('works/update', [WorkController::class, 'update'])->name('works.update');
    Route::get('works/delete/{id}', [WorkController::class, 'delete'])->name('works.delete');


    //TeamsController 
    Route::get('teams', [TeamController::class, 'index'])->name('teams.index');
    Route::post('teams/store', [TeamController::class, 'store'])->name('teams.store');
    Route::get('teams/{id}/edit', [TeamController::class, 'edit'])->name('teams.edit');
    Route::post('teams/update', [TeamController::class, 'update'])->name('teams.update');
    Route::get('teams/delete/{id}', [TeamController::class, 'delete'])->name('teams.delete');


    //TestimonialsController 
    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
    Route::post('testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::get('testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::post('testimonials/update', [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::get('testimonials/delete/{id}', [TestimonialController::class, 'delete'])->name('testimonials.delete');


    //CounterController 
    Route::get('counters', [CounterController::class, 'index'])->name('counters.index');
    Route::post('counters/store', [CounterController::class, 'store'])->name('counters.store');
    Route::get('counters/{id}/edit', [CounterController::class, 'edit'])->name('counters.edit');
    Route::post('counters/update', [CounterController::class, 'update'])->name('counters.update');
    Route::get('counters/delete/{id}', [CounterController::class, 'delete'])->name('counters.delete');


    //BlogController 
    Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::post('blogs/store', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::get('blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::post('blogs/update', [BlogController::class, 'update'])->name('blogs.update');
    Route::get('blogs/delete/{id}', [BlogController::class, 'delete'])->name('blogs.delete');


    //CalloutController 
    Route::get('callouts', [CalloutController::class, 'index'])->name('callouts.index');
    Route::post('callouts/store', [CalloutController::class, 'store'])->name('callouts.store');
    Route::get('callouts/{id}/edit', [CalloutController::class, 'edit'])->name('callouts.edit');
    Route::post('callouts/update', [CalloutController::class, 'update'])->name('callouts.update');
    Route::get('callouts/delete/{id}', [CalloutController::class, 'delete'])->name('callouts.delete');


    //ClientController 
    Route::get('clients', [ClientController::class, 'index'])->name('clients.index');
    Route::post('clients/store', [ClientController::class, 'store'])->name('clients.store');
    Route::get('clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::post('clients/update', [ClientController::class, 'update'])->name('clients.update');
    Route::get('clients/delete/{id}', [ClientController::class, 'delete'])->name('clients.delete');


    //ContactController 
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::post('contacts/store', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('contacts/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('contacts/delete/{id}', [ContactController::class, 'delete'])->name('contacts.delete');

    // RegistationController
    Route::resource('registrations', RegistrationController::class);

    // GeneralSettingsController 
    Route::get('/site-settings', [GeneralSettingController::class, 'index'])->name('settings.index');
    Route::post('/site-settings-store', [GeneralSettingController::class, 'store'])->name('settings.store');

    
});

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

// FrontendController 
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/demande/de/devis', [FrontendController::class, 'requestQuote'])->name('frontend.requestQuote');
Route::get('/form/{category}/quote', [FrontendController::class, 'form'])->name('frontend.requestQuoteForm');
Route::post('/household/step-three', [FrontendController::class, 'householdThree'])->name('step3.household');
Route::post('/vehicle/step-three', [FrontendController::class, 'vehicleThree'])->name('step3.vehicle');
Route::post('/motorcyclesport/step-three', [FrontendController::class, 'motorcyclesportThree'])->name('step3.motorcyclesport');
Route::post('/boatvolimunoussport/step-three', [FrontendController::class, 'boatvolimunoussportThree'])->name('step3.boatvolimunoussport');
Route::post('/fragilegoods/step-three', [FrontendController::class, 'fragilegoodsThree'])->name('step3.fragilegoods');
Route::post('/package/step-three', [FrontendController::class, 'packageThree'])->name('step3.package');
Route::post('/pallet/step-three', [FrontendController::class, 'palletThree'])->name('step3.pallet');
Route::post('/animal/step-three', [FrontendController::class, 'animalThree'])->name('step3.animal');
Route::post('/agrifood/step-three', [FrontendController::class, 'agrifoodThree'])->name('step3.agrifood');
Route::post('/commercialgoods/step-three', [FrontendController::class, 'commercialgoodsThree'])->name('step3.commercialgoods');
Route::post('/miscellaneous/step-three', [FrontendController::class, 'miscellaneousThree'])->name('step3.miscellaneous');
Route::get('/demande/en/cours', [FrontendController::class, 'announcements'])->name('frontend.announcements');
Route::get('/transport-details', [FrontendController::class, 'details'])->name('frontend.details');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/inscription/demenageur', [FrontendController::class, 'moverReg'])->name('frontend.moverReg');