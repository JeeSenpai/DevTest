<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




Route::post('/add-post',[PostController::class,'savePost'])->name('save.post');
Route::post('/update-post',[PostController::class,'updatePost'])->name('update.post');

Route::get('/add-post',[PostController::class,'addPost'])->name('post.add');
Route::get('/post-list',[PostController::class,'postList'])->name('post.list');
Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('edit.post');
Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('delete.post');

Route::get('/dashboard',[PostController::class,'showPost'])->name('dashboard');
