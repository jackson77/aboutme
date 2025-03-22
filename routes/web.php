<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [PortfolioController::class, 'home']);
Route::get('/about', [PortfolioController::class, 'about']);
Route::get('/services', [PortfolioController::class, 'services']);
Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/contact', [PortfolioController::class, 'contact']);


Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
// Route::get('/check-lang', function () {
//     return session('locale');
// });

Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'de'])) {
        abort(400);
    }

    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');


// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/projects', function () {
//     return view('projects');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
