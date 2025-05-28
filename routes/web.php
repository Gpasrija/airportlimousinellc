<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/aboutus', function () {
    return view('pages.aboutUs');
});

Route::get('/clear_cache', function () {

    \Artisan::call('cache:clear');

    dd("Cache is cleared");

});

Route::get('/services-single', [HomeController::class, 'servicesSingle'])->name('servicesSingle');

Route::get('/intercityRideService', [HomeController::class, 'servicesSingle'])->name('intercityRideService');
Route::get('/groundTransportationService', [HomeController::class, 'servicesSingle'])->name('groundTransportationService');
Route::get('/airportTransportService', [HomeController::class, 'servicesSingle'])->name('airportTransportService');
Route::get('/privateCarService', [HomeController::class, 'servicesSingle'])->name('privateCarService');
// Route::get('/wedding', [HomeController::class, 'servicesSingle'])->name('wedding');
// Route::get('/travelTransfer', [HomeController::class, 'servicesSingle'])->name('travelTransfer');

// Route::get('/services-single', function () {
//     return view('pages.servicesSingle');
// });

Route::get('/fleet', function () {
    return view('pages.fleetList');
});
Route::get('/corporateAccount', function () {
    return view('pages.corporateAccount');
});
Route::get('/cities', function () {
    return view('pages.cities');
});

Route::get('/citylist', [HomeController::class, 'fetchCities'])->name('citylist');
    
Route::get('/faq', [HomeController::class, 'fetchfaq'])->name('faq');


Route::get('/fleet-firstClass', function () {
    return view('pages.fleet_firstClassSingle');
});
Route::get('/fleet-luxury', function () {
    return view('pages.fleet_luxurySingle');
});
Route::get('/fleet-suv', function () {
    return view('pages.fleet_suvSingle');
});
Route::get('/fleet-bussinessVanSuv', function () {
    return view('pages.fleet_bussinessVanSuv');
});

Route::get('/ourTeam', function () {
    return view('pages.fleetList');
});


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/comingSoon', function () {
    return view('pages.comingSoon');
});
Route::get('/privacyPolicy', function () {
    return view('pages.privacyPolicy');
});
Route::get('/terms', function () {
    return view('pages.termsCondition');
});

// Route::post('/submit-form', [ContactController::class, 'submit'])->name('submitContactForm');
Route::post('/search-form', [HomeController::class, 'searchForm'])->name('searchForm');
Route::post('/booking-form', [HomeController::class, 'bookingForm'])->name('bookingForm');