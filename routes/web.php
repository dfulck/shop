<?php

use App\Models\PropertyGroup;
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
use App\Http\Controllers\PropertyGroupController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ProductPropertyController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryDiscountController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\CatdiscountController;

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
Route::get('/porofile/users/log',[userController::class,'log'])->name('login');
Route::post('/porofile/users/login',[userController::class,'login'])->name('users.login');



Route::prefix('/panel')->middleware('auth')->group(function (){
    Route::get('/admin',[home::class,'panel'])->name('Admins.panel');
    Route::resource('categories',CategoryController::class);
    Route::resource('brands',BrandController::class);
    Route::resource('products',ProductController::class);
    Route::resource('products.pictures',PictureController::class);
    Route::resource('products.discounts',DiscountController::class);
    Route::resource('roles',RoleController::class);
    Route::resource('user',GainerController::class);
    Route::resource('propertyGroups',PropertyGroupController::class);
    Route::resource('properties',PropertyController::class);
    Route::resource('product.properties',ProductPropertyController::class);
    Route::resource('sliders',SliderController::class);
    Route::resource('notifications',NotificationController::class);
    Route::resource('category.discount',CategoryDiscountController::class);
    Route::resource('offers',OfferController::class);
});
Route::post('/offer',[CartController::class,'offer']);
Route::resource('catdiscounts',CatdiscountController::class);
Route::get('/search',[home::class,'search']);
Route::resource('wallet',WalletController::class);
Route::post('/Order/store',[OrderController::class,'store'])->name('Orders.store');
Route::get('/Order/create',[OrderController::class,'create'])->name('Orders.create');
Route::get('/ShopingCart',[CartController::class,'index'])->name('shopingcart');
Route::post('/cart/{product}',[CartController::class,'store'])->name('addCart');
Route::delete('/DeleteCart/{product}',[CartController::class,'destroy'])->name('destroyCart');
Route::delete('/UpdateCart/{product}',[CartController::class,'update'])->name('destroyCart');
Route::post('/like/{product}',[LikeController::class,'store'])->name('like');
Route::get('/like/index',[LikeController::class,'index'])->name('like.index');
Route::post('/like/delete/{product}',[LikeController::class,'delete'])->name('dislike');
Route::resource('products.cart',CartController::class);
Route::get('/product/{product}/details',[ProductController::class,'details'])->name('product.details');
Route::patch('/product/{product}/properties/value',[ProductPropertyController::class,'updateValue'])->name('product.properties.updateValue');
Route::resource('questions.answer',AnswerController::class);
Route::resource('product.questions',QuestionController::class);
Route::resource('product.answers',AnswerController::class);
Route::post('/product/{product}/rate',[RateController::class,'store'])->name('product.rate');
Route::get('/panel/products/{product}',[ProductController::class,'show'])->name('products.show');
Route::resource('users',userController::class);
Route::post('/users/verify/{user}',[userController::class,'verify'])->name('users.verify');
Route::get('/porofile/users/logout/',[userController::class,'logout'])->name('users.logout');
