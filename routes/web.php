<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ColorController;
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
    return view('index');
})->name('index');


Route::get('/about',[MainController::class, 'about'])->name('about');

Route::get('/cart',[MainController::class, 'cart'])->name('cart');

Route::get('/contact-us',[MainController::class, 'contact-us'])->name('contact-us');

Route::get('/checkout',[MainController::class, 'checkout'])->name('checkout');


/** brands **/
Route::get('/admin/brands',[BrandController::class, 'brands'])->name('brands');
Route::post('/admin/add_brand',[BrandController::class, 'add_brand'])->name('add_brand');
Route::get('/admin/edit_brand_page/{id}',[BrandController::class, 'edit_brand_page'])->name('edit_brand_page');
Route::post('/admin/update_brand/{id}',[BrandController::class, 'update_brand'])->name('update_brand');
Route::get('/admin/delete_brand/{id}',[BrandController::class, 'delete_brand'])->name('delete_brand');


/** categories **/
Route::get('/admin/categories',[CategoryController::class, 'categories'])->name('categories');
Route::post('/admin/add_category',[CategoryController::class, 'add_category'])->name('add_category');
Route::get('/admin/edit_category_page/{id}',[CategoryController::class, 'edit_category_page'])->name('edit_category_page');
Route::post('/admin/update_category/{id}',[CategoryController::class, 'update_category'])->name('update_category');
Route::get('/admin/delete_category/{id}',[CategoryController::class, 'delete_category'])->name('delete_category');

/** colors **/
Route::get('/admin/colors',[ColorController::class, 'colors'])->name('colors');
Route::post('/admin/add_color',[ColorController::class, 'add_color'])->name('add_color');
Route::get('/admin/edit_color_page/{id}',[ColorController::class, 'edit_color_page'])->name('edit_color_page');
Route::post('/admin/update_color/{id}',[ColorController::class, 'update_color'])->name('update_color');
Route::get('/admin/delete_color/{id}',[ColorController::class, 'delete_color'])->name('delete_color');


/** products **/
Route::get('/admin/products',[ProductController::class, 'products'])->name('products');
Route::post('/admin/add_product',[ProductController::class, 'add_product'])->name('add_product');
Route::get('/admin/edit_product_page/{id}',[ProductController::class, 'edit_product_page'])->name('edit_product_page');
Route::post('/admin/update_product/{id}',[ProductController::class, 'update_product'])->name('update_product');
Route::get('/admin/delete_product/{id}',[ProductController::class, 'delete_product'])->name('delete_product');

/** users **/ 
Route::get('/admin/users',[UserController::class, 'users'])->name('users');
Route::get('/admin/admins',[UserController::class, 'admins'])->name('admins');




Route::get('/shop',[ProductController::class, 'shop'])->name('shop');
Route::get('/details/{id}',[ProductController::class, 'details'])->name('details');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
