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

use App\Http\Controllers\PostController;
Route::resource('posts', PostController::class)->only([
    'index', 'show'
]);

// Route::get('/', function () {
//     return view('home');
// });
