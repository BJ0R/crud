<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // Make sure to import the controller

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

Route::get('/', function () {
    return redirect('/posts');
});

Route::resource('posts', PostController::class);