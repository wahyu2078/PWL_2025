<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

// Route untuk User Profile
Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');

// Route untuk Hello (Pastikan WelcomeController memiliki metode hello)
Route::get('/hello', [WelcomeController::class, 'hello']);

// Single Action Controller
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', [ArticleController::class, '__invoke']);

// Route Resource (Dibatasi hanya index dan show)
Route::resource('photos', PhotoController::class)->only(['index', 'show']);

// Route untuk Greeting dengan View Blade
Route::get('/greeting', function () {
    return view('hellow', ['name' => 'Wahyu']);
});

Route::get('/greeting', [WelcomeController::class, 'greeting']);


// Route dengan Parameter
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

// Route dengan Dua Parameter
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

// Route dengan Parameter Opsional
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

// Route Resource untuk Items
Route::resource('items', ItemController::class);