<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});

Route::get('/get-in-contact', function () {
    return view('contact');
});

Route::resource('projects', ProjectController::class)->only([
    'index', 'show'
]);

Route::resource('posts', PostController::class)->only([
    'index', 'show'
]);

Route::get('examples', function () {
    return view('examples');
});

Route::get('cms', function () {
    return view('cms');
});
