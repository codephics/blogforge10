<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
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

// Blog
Route::get('/', [BlogController::class, 'index'])->name('template.blog');
Route::get('blog-detail/{slug}', [BlogController::class, 'detail'])->name('template.blog.detail');