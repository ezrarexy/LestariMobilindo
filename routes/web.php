<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\pageController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\adminPageController;

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

Auth::routes();

Route::group(['domain' => 'xmanage.localhost'], function () {
    Route::group(['middleware' => ['web', 'auth']], function () {
        Route::get('/', [adminPageController::class, 'Index']);
        Route::get('/cars', [adminPageController::class, 'Car'])->name('xmCars');
        Route::get('/brands', [adminPageController::class, 'Brand'])->name('xmBrands');
        Route::get('/categories', [adminPageController::class, 'Category']);
        Route::get('/coba', [adminPageController::class, 'Coba']);
        Route::POST('/car/in', [adminController::class, 'CarIn'])->name('carIn');
        Route::POST('/brand/in', [adminController::class, 'BrandIn'])->name('brandIn');
        Route::POST('/category/in', [adminController::class, 'CategoryIn'])->name('categoryIn');
    });
});

    Route::get('/', [pageController::class, 'HomePage']);

    Route::get('/car', [pageController::class, 'Car']);

    Route::get('/car/{con}', [pageController::class, 'Cars']);

    Route::get('/brand', [pageController::class, 'Brand']);

    Route::get('/tag', [pageController::class, 'Tag']);

    Route::get('/contact', [pageController::class, 'Contact']);

    Route::get('/product/{id}', [pageController::class, 'Product']);

    Route::get('/about', [pageController::class, 'About']);

    Route::get('/test', [pageController::class, 'Test']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');