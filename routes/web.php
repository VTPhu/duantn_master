<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\OrderDetailController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\CheckoutController;
use App\Http\Controllers\client\ClientController;
// use App\Http\Controllers\client\ShopController;
// use App\Http\Controllers\client\ProductCateController;
use App\Http\Controllers\client\ProfileController;
use Illuminate\Support\Facades\Auth;

Auth::routes();
//Auth
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    // product
    Route::get('/show-product', [ProductController::class, 'index']);
    Route::get('/product', [ProductController::class, 'addProduct']);
    Route::post('/product', [ProductController::class, 'store']);
    Route::get('/product/{id}', [ProductController::class, 'updated']);
    Route::post('/product/{id}', [ProductController::class, 'edit']);
    Route::get('/deletedProduct/{id}', [ProductController::class, 'destroy']);
    //category
    Route::get('/show-category', [CategoryController::class, 'index']);
    Route::get('/category', [CategoryController::class, 'addCategory']);
    Route::post('/category', [CategoryController::class, 'store']);
    Route::get('/category/{id}', [CategoryController::class, 'updated']);
    Route::post('/category/{id}', [CategoryController::class, 'edit']);

    Route::get('/deletedCate/{id}', [CategoryController::class, 'destroy']);
    //posts
    Route::get('/show-posts', [PostsController::class, 'index']);
    Route::get('/posts', [PostsController::class, 'addPosts']);
    Route::post('/posts', [PostsController::class, 'store']);
    Route::post('/posts/{id}', [PostsController::class, 'updated']);
    Route::get('/posts/{id}', [PostsController::class, 'edit']);
    Route::get('/deleted/{id}', [PostsController::class, 'destroy']);
    // Brand
    Route::get('/show-brand', [BrandController::class, 'index']);
    Route::get('/brand', [BrandController::class, 'create']);
    Route::post('/brand', [BrandController::class, 'store']);
    Route::get('/edit/brand/{id}', [BrandController::class, 'edit']);
    Route::post('/edit/brand/{id}', [BrandController::class, 'update']);
    Route::get('/deleteBrand/{id}', [BrandController::class, 'destroy']);
    //admin dashboard
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::post('/filter', [AdminController::class, 'filter']);
    Route::post('/dashboard-filter', [AdminController::class, 'dashboard_filter']);
    Route::post('/day-order', [AdminController::class, 'dayorder']);
    //order
    Route::get('/show-order', [OrderController::class, 'index']);
    Route::get('/show-order/{id}', [OrderController::class, 'create']);
    Route::post('/show-order/{id}', [OrderController::class, 'store']);
    Route::get('/deleteOrder/{id}', [OrderController::class, 'destroy']);
    //orderDetail
    Route::get('/show-orderDetail/{id}', [OrderDetailController::class, 'index']);
    // Route::post('/admin/show-orderDetail', [OrderDetailController::class, 'store']);
    Route::get('/deleteOrderDetail/{id}', [OrderDetailController::class, 'destroy']);
    //Coupon
    Route::get('/show-coupon', [CouponController::class, 'index']);
    Route::get('/coupon', [CouponController::class, 'create']);
    Route::post('/coupon', [CouponController::class, 'store']);
    Route::get('/deleteCoupon/{id}', [CouponController::class, 'destroy']);
    //user
    Route::get('/show-user', [UserController::class, 'index']);
    Route::get('/show-user/{id}', [UserController::class, 'showUpdate']);
    Route::post('/show-user/{id}', [UserController::class, 'edit']);
    //banner
    Route::get('/show-banner', [BannerController::class, 'index']);
    Route::get('/banner', [BannerController::class, 'create']);
    Route::post('/banner', [BannerController::class, 'store']);
    Route::get('/banner/{id}', [BannerController::class, 'edit']);
    Route::post('/banner/{id}', [BannerController::class, 'updated']);
    Route::get('/deleteBanner/{id}', [BannerController::class, 'destroy']);
});


//Phần người dùng
Route::get('/', [ClientController::class, 'index']);
Route::get('/productDetail/{id}', [ClientController::class, 'productDetail']);
// Cart
Route::get('/AddCart/{id}/{sl}/{sized}/{color}', [CartController::class, 'AddCart']);
Route::get('/DeleteCart/{id}{sized}{color}', [CartController::class, 'DeletedCart']);
Route::get('/xoahet', [CartController::class, 'Xoahet']);
Route::get('/listCart', [CartController::class, 'listCart']);
Route::get('/DeleteListCart/{id}', [CartController::class, 'DeletedListCart']);
Route::get('/SaveListCart/{id}/{quantily}', [CartController::class, 'SaveListCart']);
// Route::get('/AddDetail/{id}/{quantily}/{size}/{color}', [CartController::class, 'AddDetailProduct']);
//profile
Route::get('/profile/edit_profile', [ProfileController::class, 'edit_profile']);
//sửa profile
Route::put('/profile/edit_profile', [ProfileController::class, 'update_profile']);
//password
Route::get('/profile/change-password', [ProfileController::class, 'change_password']);
Route::post('/profile/update-password', [ProfileController::class, 'update_password']);
//checkout
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::post('/checkout', [CheckoutController::class, 'create']);
Route::post('/city', [CheckoutController::class, 'vietnam_city']);
