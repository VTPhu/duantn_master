<?php

use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\PostsController;
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
