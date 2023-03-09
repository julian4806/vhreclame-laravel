<?php

use App\Http\Controllers\ParagraphsController;
use Illuminate\Support\Facades\Route;
use App\Models\Paragraphs;


// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [ParagraphsController::class, 'index']);


Route::get('/over-ons', function () {
    return view('about');
});

Route::get('/gallerij', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin');
});
