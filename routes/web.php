<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/over-ons', [AboutController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/gallerij', [GalleryController::class, 'gallery']);
Route::get('/fetch_images', [GalleryController::class, 'gallery']);


Route::resource('edit-home', HomeController::class)
    ->only(['index', 'store', 'edit', 'update'])
    ->middleware(['auth', 'verified']);

Route::resource('edit-about', AboutController::class)
    ->only(['index', 'store', 'edit', 'update'])
    ->middleware(['auth', 'verified']);

Route::resource('edit-gallery', GalleryController::class)
    ->only(['index', 'store', 'edit', 'update'])
    ->middleware(['auth', 'verified']);



Route::resource('edit-contact', ContactController::class)
    ->only(['index', 'store', 'edit', 'update'])
    ->middleware(['auth', 'verified']);

Route::resource('edit-images', ImageController::class)
    ->only(['index', 'store', 'edit', 'update'])
    ->middleware(['auth', 'verified']);
Route::get('/edit-images/fetch_images', [ImageController::class, 'showFolder'])->middleware(['auth', 'verified']);
Route::get('/edit-images/add_folder', [ImageController::class, 'addFolder'])->middleware(['auth', 'verified']);
Route::get('/edit-images/delete_folder', [ImageController::class, 'deleteFolder'])->middleware(['auth', 'verified']);





// ADMIN
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
