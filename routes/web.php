<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\pageController;

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

Route::get('/', [pageController::class, 'HomePage']);

Route::get('/car', [pageController::class, 'Car']);

Route::get('/car/{con}', [pageController::class, 'Cars']);

Route::get('/brand', [pageController::class, 'Brand']);

Route::get('/tag', [pageController::class, 'Tag']);

Route::get('/contact', [pageController::class, 'Contact']);

Route::get('/product/{id}', [pageController::class, 'Product']);

Route::get('/about', [pageController::class, 'About']);

Route::get('/test', [pageController::class, 'Test']);