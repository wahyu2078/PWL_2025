<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ItemController; 
use App\Http\Controllers\UserProfileController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda.
| Rute-rute ini dimuat oleh RouteServiceProvider dan semuanya akan
| diberikan ke dalam grup middleware "web". Buat sesuatu yang luar biasa!
|
*/
Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');


// Rute halaman utama (/) yang menampilkan tampilan 'welcome'
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

// Rute sederhana yang mengembalikan teks "World" saat diakses melalui /world
Route::get('/world', function () {
    return 'World';
});


Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2341760153';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID $id";
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});

// Route::get('/user/profile', function () {
//     //
// })->name('profile');

// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');

// // Generating URLs...
// $url = route('profile');

// // Generating Redirects...
// return redirect()->route('profile');

// Route::get('/user/profile', function () {
//     //
// })->name('profile');

// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');

// // Generating URLs...
// $url = route('profile');

// // Generating Redirects...
// return redirect()->route('profile');


// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });

//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });

// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Route::redirect('/here', '/there');

// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// $url = route('profile'); 
// return redirect()->route('profile');

// Route::get('/user/profile', function () {
//     return "Halaman Profil";
// })->name('profile');



// Rute resource untuk mengelola items menggunakan ItemController
// Rute ini secara otomatis menyediakan operasi CRUD untuk 'items'
Route::resource('items', ItemController::class);
