<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('home');
});

Route::get('/get-in-contact', function () {
    return view('contact');
});





use App\Http\Controllers\ProjectController;
// Route::get('/projects', [ProjectController::class, 'index']);
// Route::get('project/{id}', [ProjectController::class, 'show']);
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
