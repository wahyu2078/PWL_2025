<?php

use Illuminate\Support\Facades\Route; //Menggunakan Route untuk mendefinisikan rute aplikasi.
use App\Http\Controllers\ItemController; //Menggunakan ItemController untuk mengelola item.


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

Route::get('/', function () { //Menggunakan Route::get untuk mendefinisikan rute get.
    return view('welcome'); //Mengembalikan view welcome.
});

Route::resource('items', ItemController::class); //Menggunakan Route::resource untuk mendefinisikan rute resource.