<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('App.dashboard');
});

Route::post('/reviews/login', [ReviewController::class, 'login'])->name('reviews.login');
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/images/{filename}', function ($filename) {
    $path = public_path('images/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
})->name('image.show');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 
