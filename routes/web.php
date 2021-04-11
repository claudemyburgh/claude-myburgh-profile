<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\HomeController::class)
    ->name('home');

Route::get('/about', \App\Http\Controllers\AboutPageController::class)
    ->name('about');

Route::get('posts', [\App\Http\Controllers\PostsController::class, 'index'])
    ->name('posts.index');

Route::get('post/{post}', [\App\Http\Controllers\PostsController::class, 'show'])
    ->name('posts.show');

/*
 * @params string $prefix
 * @return Guardian $routes
*/
Route::guardian();

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function() {
    Route::resource('posts', \App\Http\Controllers\PostsAdminController::class);
});
