<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BlogController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blogPost',[App\Http\Controllers\backend\BlogController::class,'blog_post'])->name('blog.add');
Route::POST('/blogstore',[BlogController::class,'store_post'])->name('blog.storepost');
Route::GET('/allpost',[BlogController::class,'all_post'])->name('blog.allpost');


