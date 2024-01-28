<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('login');

Route::post('register', [App\Http\Controllers\Api\AuthController::class, 'register'])->name('register');
Route::get('/auth/register', [App\Http\Controllers\MainController::class, 'index']);

Route::get('logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->name('logout');

// Post
//Route::post('posts/create', [App\Http\Controllers\Api\PostController::class, 'create'])->middleware('jwtAuth');
//Route::post('posts/edit', [App\Http\Controllers\Api\PostController::class, 'update'])->middleware('jwtAuth');
//Route::post('posts/delete', [App\Http\Controllers\Api\PostController::class, 'delete'])->middleware('jwtAuth');
//Route::get('posts', [App\Http\Controllers\Api\PostController::class, 'posts'])->middleware('jwtAuth');


