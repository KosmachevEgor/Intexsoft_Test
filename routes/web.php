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

Route::group(['namespace' => 'App\Http\Controllers\Home'], function (){
    Route::get('/', IndexController::class)->name('home.index');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::group(['namespace' => 'Post'], function(){
        Route::get('/posts', IndexController::class)->name('post.index');
        Route::get('/posts/create', CreateController::class)->name('post.create');
        Route::get('/posts/{post}', ShowController::class)->name('post.show');
        Route::delete('/posts/{post}', DestroyController::class)->name('post.delete');
        Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
        Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
        Route::post('/posts', StoreController::class)->name('post.store');
    });

    Route::group(['namespace' => 'Category'], function(){
        Route::get('/categories', IndexController::class)->name('category.index');
        Route::get('/categories/{category}', ShowController::class)->name('category.show');
        Route::get('/category/create', CreateController::class)->name('category.create');
        Route::post('/categories', StoreController::class)->name('category.store');
        Route::patch('/categories/{category}', UpdateController::class)->name('category.update');
        Route::delete('/categories/{category}', DestroyController::class)->name('category.delete');
        Route::get('/categories/{category}/edit', EditController::class)->name('category.edit');
    });
});

