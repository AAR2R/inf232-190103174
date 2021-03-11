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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/posts/index', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

Route::get('/blogs/index', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('/blogs/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
