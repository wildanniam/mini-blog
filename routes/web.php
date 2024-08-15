<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('home', [
        'name' => 'Wildan Syukri Niam blogs',
        'title' => 'Home',
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "name" => "Wildan Syukri Niam",
        "email" => "wildanniam4@gmail.com",
        "image" => "willy.jpg",
        "title" => "About",

    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Single page route

Route::get('post/{slug}', [PostController::class, 'show']);

