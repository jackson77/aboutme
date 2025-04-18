<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

// Main routes
Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/services', [PortfolioController::class, 'services'])->name('services');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

// Contact form submission route
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Language switch route
Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'de'])) {
        abort(400);
    }

    session(['locale' => $locale]); // Store the selected language in session
    return redirect()->back(); // Redirect back to the previous page
})->name('lang.switch');

// Optional: Language switch links for the frontend
Route::get('/switch-lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'de'])) {
        abort(400);
    }

    session(['locale' => $locale]); // Store the selected language in session
    return redirect()->back(); // Redirect back to the previous page
})->name('switch.lang');