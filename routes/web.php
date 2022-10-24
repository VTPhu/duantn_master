<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProductController;

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
// product
Route::get('/admin/show-product', [ProductController::class, 'index']);
Route::get('/admin/product', [ProductController::class, 'addProduct']);
Route::post('/admin/product', [ProductController::class, 'store']);
Route::get('/admin/product/{id}', [ProductController::class, 'updated']);
Route::post('/admin/product/{id}', [ProductController::class, 'edit']);
Route::get('/admin/deleted/{id}', [ProductController::class, 'destroy']);
