<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\pageController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\adminPageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;

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


Route::group(['domain' => 'xmanage.localhost'], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('/home', function () { 
        return redirect('/');
    });
    Route::group(['middleware' => ['web', 'auth']], function () {
        Route::get('/', [adminPageController::class, 'Index']);
        Route::get('/cars', [adminPageController::class, 'Car'])->name('xmCars');
        Route::get('/brands', [adminPageController::class, 'Brand'])->name('xmBrands');
        Route::get('/categories', [adminPageController::class, 'Category']);
        Route::get('/banners', [adminPageController::class, 'Banner']);
        Route::get('/banners/get', [adminController::class, 'GetBanner']);
        Route::POST('/banners/add', [adminController::class, 'AddBanner'])->name('addBanner');
        Route::DELETE('/banners/del', [adminController::class, 'DelBanner'])->name('delBanner');
        Route::get('/sales', [adminPageController::class, 'Sales']);
        Route::POST('/sales/add', [adminController::class, 'AddSales'])->name('addSales');
        Route::DELETE('/sales/del', [adminController::class, 'DelSales'])->name('delSales');
        Route::PUT('/sales/ch', [adminController::class, 'ChSales'])->name('chSales');
        Route::get('/coba', [adminPageController::class, 'Coba']);
        Route::POST('/car/in', [adminController::class, 'CarIn'])->name('carIn');
        Route::PUT('/car/update', [adminController::class, 'CarUpdate'])->name('uCar');
        Route::DELETE('/car/del', [adminController::class, 'CarDel'])->name('carDel');
        Route::DELETE('/car/rimg', [adminController::class, 'CarImgDel'])->name('carImgDel');
        Route::POST('/brand/in', [adminController::class, 'BrandIn'])->name('brandIn');
        Route::DELETE('/brand/del', [adminController::class, 'BrandDel'])->name('brandDel');
        Route::POST('/brand/up', [adminController::class, 'BrandUp'])->name('brandUp');
        Route::POST('/category/in', [adminController::class, 'CategoryIn'])->name('categoryIn');
        Route::DELETE('/category/del', [adminController::class, 'CatDel'])->name('catDel');
        Route::get('/out', [adminController::class, 'LogOut'])->name('logout');
        Route::get('/car/img', [adminController::class, 'GetImgPro'])->name('getImgPro');
        Route::POST('/car/addImg', [adminController::class, 'AddImgPro'])->name('addImgPro');
        Route::POST('/user/crpass', [ResetPasswordController::class, 'CheckPass'])->name('crPass');
        Route::PUT('/user/chpass', [ResetPasswordController::class, 'ChangePass'])->name('chPass');
    });
});

Route::group(['domain' => 'localhost'], function () {
    Route::get('/', [pageController::class, 'HomePage']);

    Route::get('/home', function () { 
        return redirect('/');
    });

    Route::get('/car', [pageController::class, 'Car']);

    Route::get('/car/{con}', [pageController::class, 'Cars']);

    Route::get('/brand/{id}', [pageController::class, 'Brand']);

    Route::get('/tag/{con}', [pageController::class, 'Tag']);

    Route::get('/contact', [pageController::class, 'Contact']);

    Route::get('/product/{id}', [pageController::class, 'Product']);

    Route::get('/about', [pageController::class, 'About']);

    Route::get('/test', [pageController::class, 'Test']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});