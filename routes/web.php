<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TextController;
use Illuminate\Support\Facades\Route;




Route::get('/', [TextController::class, 'indexHome'])->name('home');

Route::get('/over-ons', function () {
    return view('about');
});
Route::get('/gallerij', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});



// ADMIN
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('edit-text/home', [TextController::class, 'updateHome'])->middleware(['auth', 'verified'])->name('edit-text.home');

Route::get('edit-text/contact', [TextController::class, 'updateContact'])->middleware(['auth', 'verified'])->name('edit-text.contact');

Route::get('edit-text/about', [TextController::class, 'updateAbout'])->middleware(['auth', 'verified'])->name('edit-text.about');

Route::resource('edit-images', ImageController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
