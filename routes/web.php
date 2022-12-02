<?php

use App\Http\Controllers\admin\AdminController;
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
use App\Http\Controllers\client\ClientController;
use App\Http\Controllers\client\ShopController;
use App\Http\Controllers\client\ProductCateController;
use App\Http\Controllers\client\ProfileController;

// product
Route::get('/admin/show-product', [ProductController::class, 'index']);
Route::get('/admin/product', [ProductController::class, 'addProduct']);
Route::post('/admin/product', [ProductController::class, 'store']);
Route::get('/admin/product/{id}', [ProductController::class, 'updated']);
Route::post('/admin/product/{id}', [ProductController::class, 'edit']);
Route::get('/admin/deletedProduct/{id}', [ProductController::class, 'destroy']);
//category
Route::get('/admin/show-category', [CategoryController::class, 'index']);
Route::get('/admin/category', [CategoryController::class, 'addCategory']);
Route::post('/admin/category', [CategoryController::class, 'store']);
Route::get('/admin/category/{id}', [CategoryController::class, 'updated']);
Route::post('/admin/category/{id}', [CategoryController::class, 'edit']);

Route::get('/admin/deletedCate/{id}', [CategoryController::class, 'destroy']);
//posts
Route::get('/admin/show-posts', [PostsController::class, 'index']);
Route::get('/admin/posts', [PostsController::class, 'addPosts']);
Route::post('/admin/posts', [PostsController::class, 'store']);
Route::post('/admin/posts/{id}', [PostsController::class, 'updated']);
Route::get('/admin/posts/{id}', [PostsController::class, 'edit']);
Route::get('/admin/deleted/{id}', [PostsController::class, 'destroy']);
// Brand
Route::get('/admin/show-brand', [BrandController::class, 'index']);
Route::get('/admin/brand', [BrandController::class, 'create']);
Route::post('/admin/brand', [BrandController::class, 'store']);
Route::get('/admin/edit/brand/{id}', [BrandController::class, 'edit']);
Route::post('/admin/edit/brand/{id}', [BrandController::class, 'update']);
Route::get('/admin/deleteBrand/{id}', [BrandController::class, 'destroy']);
//admin dashboard
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::post('/admin/filter', [AdminController::class, 'filter']);
Route::post('/admin/dashboard-filter', [AdminController::class, 'dashboard_filter']);
Route::post('/admin/day-order', [AdminController::class, 'dayorder']);
//order
Route::get('/admin/show-order', [OrderController::class, 'index']);
Route::get('/admin/show-order/{id}', [OrderController::class, 'create']);
Route::post('/admin/show-order/{id}', [OrderController::class, 'store']);
Route::get('/admin/deleteOrder/{id}', [OrderController::class, 'destroy']);
//orderDetail
Route::get('/admin/show-orderDetail/{id}', [OrderDetailController::class, 'index']);
// Route::post('/admin/show-orderDetail', [OrderDetailController::class, 'store']);
Route::get('/admin/deleteOrderDetail/{id}', [OrderDetailController::class, 'destroy']);
//Coupon
Route::get('/admin/show-coupon', [CouponController::class, 'index']);
Route::get('/admin/coupon', [CouponController::class, 'create']);
Route::post('/admin/coupon', [CouponController::class, 'store']);
Route::get('/admin/deleteCoupon/{id}', [CouponController::class, 'destroy']);
//user
Route::get('/admin/show-user', [UserController::class, 'index']);
Route::get('/admin/show-user/{id}', [UserController::class, 'showUpdate']);
Route::post('/admin/show-user/{id}', [UserController::class, 'edit']);
//Phần người dùng
Route::get('/', [ClientController::class, 'index']);
Route::get('/productDetail/{id}', [ClientController::class, 'productDetail']);
// Cart
Route::get('/AddCart/{id}', [CartController::class, 'AddCart']);
Route::get('/DeleteCart/{id}', [CartController::class, 'DeletedCart']);
Route::get('/listCart', [CartController::class, 'listCart']);
Route::get('/DeleteListCart/{id}', [CartController::class, 'DeletedListCart']);
Route::get('/SaveListCart/{id}/{quantily}', [CartController::class, 'SaveListCart']);
Route::get('/AddDetail/{id}/{quantily}/{size}', [CartController::class, 'AddDetailProduct']);
//profile

Route::get('/profile', [ProfileController::class, 'Profile']);
