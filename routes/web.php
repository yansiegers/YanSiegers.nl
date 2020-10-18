<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/get-in-contact', function () {
    return view('contact');
});

use App\Http\Controllers\ProjectController;
Route::resource('projects', ProjectController::class)->only([
    'index', 'show'
]);

// Route::get('/blog', function () {
//     return view('blog');
// });

// use App\Http\Controllers\BlogPostsController;
// Route::get('/blog/posts', [BlogPostsController::class, 'index']);

// Route::get('/', function () {
//     return view('home');
// });
