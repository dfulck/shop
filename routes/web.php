<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\home;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\userController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\GainerController;

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

Route::get('/',[home::class,'home'])->name('home');
Route::get('/porofile/users/log',[home::class,'log'])->name('login');
Route::post('/porofile/users/login',[home::class,'login'])->name('users.login');

Route::prefix('/panel')->middleware('auth')->group(function (){
    Route::get('/admin',[home::class,'panel'])->name('Admins.panel');
    Route::resource('categories',CategoryController::class);
    Route::resource('brands',BrandController::class);
    Route::resource('products',ProductController::class);
    Route::resource('products.pictures',PictureController::class);
    Route::resource('products.discounts',DiscountController::class);
    Route::resource('roles',RoleController::class);
    Route::resource('user',GainerController::class);
});
Route::resource('users',userController::class);
Route::post('/users/verify/{user}',[userController::class,'verify'])->name('users.verify');
Route::get('/porofile/users/logout/',[userController::class,'logout'])->name('users.logout');
