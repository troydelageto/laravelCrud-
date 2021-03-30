<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use  App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CreateController;





// registration Route
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/posts/create',[CreateController::class,'index'])->name('create');


Route::get('/',[PostController::class,'index'])->name('posts');
Route::post('/posts/create',[PostController::class,'store']);
Route::delete('/{post}',[PostController::class,'destroy'])->name('posts.destroy');
Route::put('/{post}',[PostController::class,'edit'])->name('posts.edit');


