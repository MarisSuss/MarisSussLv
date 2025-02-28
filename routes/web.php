<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactMeController;

// Redirect to the default language
Route::get('/', function () {
    return redirect('/en'); // Default language
})->name('home');

// Change the language
Route::post('/{language}', LanguageController::class)->name('language');

// Group all routes and give them a prefix of the first segment as $language
Route::group(['prefix' => '{language}'], function () {

    // Home page
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Contact page
    Route::get('/contact', [ContactMeController::class, 'create'])->name('contact');
    Route::post('/contact', [ContactMeController::class, 'send']);

})->where([
    'language' => 'lv|en',
]);