<?php

use Illuminate\Support\Facades\Route;
use App\Models\Paragraphs;


Route::get('/', function () {
    return view('home');
});

Route::get('/over-ons', function () {
    return view('about');
});

Route::get('/gallerij', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

// // All paragraphs
// Route::get('/', function () {
//     return view(
//         'paragraphs',
//         [
//             'heading' => 'This Is The Big Title',
//             'paragraphs' => Paragraphs::all()
//         ]
//     );
// });

// // Single Paragraph
// Route::get('/paragraph/{id}', function ($id) {
//     return view('paragraph', [
//         'paragraph' => Paragraphs::find($id)
//     ]);
// });
