<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/home',function (){
    return view('home');
});
 Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category/add', 'index')->name('category.add');
        Route::post('/category/store','store')->name('category.store');
        Route::get('/category/manage','manage')->name('category.manage');
        Route::get('/category/view/{id}','view')->name('category.view');
        Route::get('/category/status/{id}','status')->name('category.status');
        Route::get('/category/edit/{id}','edit')->name('category.edit');
        Route::post('/category/update/{id}','update')->name('category.update');
        Route::post('/category/delete/{id}','delete')->name('category.delete');
    });

    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile', 'index')->name('profile.index');
        Route::post('/profile/update/{id}', 'update')->name('profile.update');
    });

    Route::controller(BrandController::class)->group(function(){
        Route::get('/brand/add', 'index')->name('brand.add');
        Route::post('/brand/store', 'store')->name('brand.store');
        Route::get('/brand/manage', 'manage')->name('brand.manage');
        Route::get('/brand/view/{id}','view')->name('brand.view');
        Route::get('/brand/status/{id}','status')->name('brand.status');
        Route::get('/brand/edit/{id}','edit')->name('brand.edit');
        Route::post('/brand/update/{id}','update')->name('brand.update');
        Route::post('/brand/delete/{id}','delete')->name('brand.delete');
    });

    Route::controller(ProductController::class)->group(function(){
        Route::get('/product/add', 'index')->name('product.add');
        Route::post('/product/store', 'store')->name('product.store');
        Route::get('/product/manage','manage')->name('product.manage');
        Route::get('/product/view/{id}','view')->name('product.view');
        Route::get('/product/status/{id}','status')->name('product.status');
        Route::get('/product/edit/{id}','edit')->name('product.edit');
        Route::post('/product/update/{id}','update')->name('product.update');
        Route::post('/product/delete/{id}','delete')->name('product.delete');
    });

 });
