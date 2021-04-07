<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Posts;

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
    return view('welcome');
})->name('home');
Route::get('/contacts', [Contacts::class,'index']);

Route::get('/posts/', [\App\Http\Controllers\PostsController::class,'index'])->name('public_posts-index');
Route::get('/posts/{id}', [\App\Http\Controllers\PostsController::class,'show'])->name('public_posts-show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('post',Posts::class)->name('Post');
