<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\HomeController;

// Redirect to the default language
Route::get('/', function () {
    return redirect('/{language}');
})->name('home');

// Change the language
Route::post('/{language}/change-language', LanguageController::class);

// Group all routes and give them a prefix of the first segment as $language
Route::group(['prefix' => '{language}'], function () {

    // Home page
    Route::get('/', HomeController::class);

})->where([
    'language' => 'lv|en',
]);
