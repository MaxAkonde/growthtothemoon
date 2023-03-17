<?php

use App\Http\Controllers\AvisController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/our-services', [PageController::class, 'services'])->name('services');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/blog/{post}', [PageController::class, 'single'])->name('single');

Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');

Route::get('/terms', [PageController::class, 'terms'])->name('terms');

Route::get('/refund', [PageController::class, 'refund'])->name('refund');

Auth::routes();

Route::get('/register', function() {
    return 'Access denied !';
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/topics', TopicController::class);
Route::resource('/posts', PostController::class);
Route::resource('/avis', AvisController::class);
