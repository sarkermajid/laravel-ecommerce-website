<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendBlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
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


Route::get('/',function(){
    return view('frontend.home.index');
});

Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blogs',[FrontendBlogController::class, 'index'])->name('blogs');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/user/profile', [UserProfileController::class, 'index'])->name('user.profile');
Route::get('/user/edit', [UserProfileController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserProfileController::class, 'update'])->name('user.update');
Auth::routes();

 Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    // Profile Routes

    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile', 'index')->name('profile.index');
        Route::post('/profile/update/{id}', 'update')->name('profile.update');
    });

    // Categories Routes

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



    // Brands Routes

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

    // Products routes

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

    // Blog Categories routes

    Route::controller(BlogController::class)->group(function(){
        Route::get('/blog/category/add', 'blogCategoryIndex')->name('blog.category.add');
        Route::post('/blog/category/store', 'blogCategoryStore')->name('blog.category.store');
        Route::get('/blog/category/manage','blogCategoryManage')->name('blog.category.manage');
        Route::get('/blog/category/view/{id}','blogCategoryView')->name('blog.category.view');
        Route::get('/blog/category/status/{id}','blogCategoryStatus')->name('blog.category.status');
        Route::get('/blog/category/edit/{id}','blogCategoryEdit')->name('blog.category.edit');
        Route::post('/blog/category/update/{id}','blogCategoryUpdate')->name('blog.category.update');
        Route::post('/blog/category/delete/{id}','blogCategoryDelete')->name('blog.category.delete');
    });

    // Blogs Routes

    Route::controller(BlogController::class)->group(function(){
        Route::get('/blog/add', 'index')->name('blog.add');
        Route::post('/blog/store', 'store')->name('blog.store');
        Route::get('/blog/manage', 'manage')->name('blog.manage');
        Route::get('/blog/view/{id}','view')->name('blog.view');
        Route::get('/blog/status/{id}','status')->name('blog.status');
        Route::get('/blog/edit/{id}','edit')->name('blog.edit');
        Route::post('/blog/update/{id}','update')->name('blog.update');
        Route::post('/blog/delete/{id}','delete')->name('blog.delete');
    });

    // Users Routes for admin

    Route::controller(UserController::class)->group(function (){
        Route::get('/user/manage', 'manage')->name('user.manage');
        Route::post('/user/delete/{id}', 'status')->name('user.delete');
    });

 });

