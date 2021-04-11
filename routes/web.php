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

Route::get('/', \App\Http\Controllers\HomeController::class)
    ->name('home');

Route::get('/about', \App\Http\Controllers\AboutPageController::class)
    ->name('about');

Route::get('blog', [\App\Http\Controllers\BlogController::class, 'index'])
    ->name('blog.index');

Route::get('blog/{blog}', [\App\Http\Controllers\BlogController::class, 'show'])
    ->name('blog.show');


/*
 * @params string $prefix
 * @return Guardian $routes
*/
Route::guardian();
