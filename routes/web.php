<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactMeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;

// Redirect to the default language
Route::get('/', function () {
    return redirect('/en'); // Default language
})->name('home');

// Change the language
Route::post('/{language}', LanguageController::class)->name('language');

// Group all routes and give them a prefix of the first segment as $language
Route::group(['prefix' => '{language}'], function () {

    // Home page
    Route::get('/', HomeController::class)->name('home');

    // Contact page
    Route::get('/contact', [ContactMeController::class, 'create'])->name('contact');
    Route::post('/contact', [ContactMeController::class, 'send']);

    // Posts page
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/search', [PostController::class, 'search'])->name('posts.search');

    // Admin routes
    Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/admin/login', [AdminController::class, 'login']);
    Route::middleware('auth:admin')->group(function () {

        // Admin dashboard
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
        // messages management
        Route::get('/admin/messages', [AdminController::class, 'messages'])->name('admin.messages');
        Route::get('/admin/messages/{message}', [AdminController::class, 'showMessage'])->name('admin.messages.show');

        // Posts management
        Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts.index');       
        Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
        Route::post('/admin/posts/create', [PostController::class, 'store'])->name('admin.posts.store');
        Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
        Route::post('/admin/posts/{post}/edit', [PostController::class, 'update'])->name('admin.posts.update');
        Route::delete('/admin/posts/{post}/delete', [PostController::class, 'destroy'])->name('admin.posts.delete');
    });

})->where([
    'language' => 'lv|en',
]);