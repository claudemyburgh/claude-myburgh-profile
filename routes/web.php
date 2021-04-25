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

Route::get('tips', [\App\Http\Controllers\TipsController::class, 'index'])
    ->name('tips.index');

Route::get('tips/{tip}', [\App\Http\Controllers\TipsController::class, 'show'])
    ->name('tips.show');

/*
 * @params string $prefix
 * @return Guardian $routes
*/
Route::guardian();

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function() {
    Route::resource('posts', \App\Http\Controllers\PostsAdminController::class);
    Route::resource('tuts', \App\Http\Controllers\TutsAdminController::class);
    Route::post('tuts-upload/{tut}', [\App\Http\Controllers\TutImageUploadController::class, 'upload'])
        ->name('tuts.upload');
    Route::delete('tuts-upload/{media}', [\App\Http\Controllers\TutImageUploadController::class, 'destroy'])
        ->name('tuts.delete');
});
