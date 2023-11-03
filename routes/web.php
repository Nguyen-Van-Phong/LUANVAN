<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProductController as ControllersProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ControllersProductController::class, 'index']);


Route::get('/admin', [HomeController::class, 'index'])->name('admin.home');
Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/create', [CategoryController::class, 'store'])->name('admin.category.create');
Route::post('/admin/category/edit/{id}', [CategoryController::class, 'update'])->name('admin.category.edit');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::get('/admin/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.product');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/product/create', [ProductController::class, 'store'])->name('admin.product.create');
Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::post('/admin/product/edit/{id}', [ProductController::class, 'update'])->name('admin.product.edit');
Route::get('/admin/product/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.product.delete');

Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');
Route::get('/admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
Route::post('/admin/user/create', [UserController::class, 'store'])->name('admin.user.create');
Route::get('/admin/user/destroy/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');

Route::get('/product', [ControllersProductController::class, 'index'])->name('home');
Route::get('/product_detail/{id}', [ControllersProductController::class, 'show'])->name('product_detail');
