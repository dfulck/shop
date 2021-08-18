<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\home;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\DiscountController;

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

Route::get('/',[home::class,'home']);

Route::prefix('/panel')->group(function (){
    Route::get('/admin',function (){ return view('Admin.panel');});
    Route::resource('categories',CategoryController::class);
    Route::resource('brands',BrandController::class);
    Route::resource('products',ProductController::class);
    Route::resource('products.pictures',PictureController::class);
    Route::resource('products.discounts',DiscountController::class);
});


