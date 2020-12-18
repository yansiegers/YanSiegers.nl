<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/404', function () { return view('errors.404'); });
Route::get('/500', function () { return view('errors.500'); });

Route::get('/mobile', function () {
  return view('pages.mobile');
});

Route::get('/get-in-contact', function () {
    return view('pages.contact');
})->name('contact');

Route::resource('projects', ProjectController::class)->only([
    'index', 'show'
]);

Route::resource('posts', PostController::class)->only([
    'index', 'show'
]);

Route::get('examples', function () {
    return view('pages.examples');
})->name('examples');

// Route::get('cv', function () {
//   return view('pages.cv');
// })->name('cv');

Route::get('cms', function () {
    return view('pages.cms');
})->name('cms');
