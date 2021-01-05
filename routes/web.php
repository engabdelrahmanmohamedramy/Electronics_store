<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;

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

Route::get('/about', function () {
    return view('about-us');
})->name('about');


Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');


Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/return-policy', function () {
    return view('return-policy');
})->name('return-policy');

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms-conditions');


Route::get('/contact-us',[ContactController::class, 'contact'])->name('contact-us');
Route::post('/send-message',[ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/language/{lang}',[MainController::class, 'language'])->name('language');


Route::middleware(['admin'])->prefix('/admin')->group(function () 
{
	/**admin**/

	Route::get('/admin',[AdminController::class, 'admin'])->name('admin');


	/** brands **/
	Route::get('/brands',[BrandController::class, 'brands'])->name('brands');
	Route::post('/add_brand',[BrandController::class, 'add_brand'])->name('add_brand');
	Route::get('/edit_brand_page/{id}',[BrandController::class, 'edit_brand_page'])->name('edit_brand_page');
	Route::post('/update_brand/{id}',[BrandController::class, 'update_brand'])->name('update_brand');
	Route::get('/delete_brand/{id}',[BrandController::class, 'delete_brand'])->name('delete_brand');


	/** categories **/
	Route::get('/categories',[CategoryController::class, 'categories'])->name('categories');
	Route::post('/add_category',[CategoryController::class, 'add_category'])->name('add_category');
	Route::get('/edit_category_page/{id}',[CategoryController::class, 'edit_category_page'])->name('edit_category_page');
	Route::post('/update_category/{id}',[CategoryController::class, 'update_category'])->name('update_category');
	Route::get('/delete_category/{id}',[CategoryController::class, 'delete_category'])->name('delete_category');

	/** colors **/
	Route::get('/colors',[ColorController::class, 'colors'])->name('colors');
	Route::post('/add_color',[ColorController::class, 'add_color'])->name('add_color');
	Route::get('/edit_color_page/{id}',[ColorController::class, 'edit_color_page'])->name('edit_color_page');
	Route::post('/update_color/{id}',[ColorController::class, 'update_color'])->name('update_color');
	Route::get('/delete_color/{id}',[ColorController::class, 'delete_color'])->name('delete_color');


	/** products **/
	Route::get('/products',[ProductController::class, 'products'])->name('products');
	Route::post('/add_product',[ProductController::class, 'add_product'])->name('add_product');
	Route::get('/edit_product_page/{id}',[ProductController::class, 'edit_product_page'])->name('edit_product_page');
	Route::post('/update_product/{id}',[ProductController::class, 'update_product'])->name('update_product');
	Route::get('/delete_product/{id}',[ProductController::class, 'delete_product'])->name('delete_product');

	/** users **/ 
	
	Route::get('/admins',[UserController::class, 'admins'])->name('admins');
	Route::get('/users',[UserController::class, 'users'])->name('users');
	Route::post('/add_user',[UserController::class, 'add_user'])->name('add_user');
	Route::post('/add_admin',[UserController::class, 'add_admin'])->name('add_admin');

	Route::get('/edit_admin_page/{id}',[UserController::class, 'edit_admin_page'])->name('edit_admin_page');
	Route::post('/update_admin/{id}',[UserController::class, 'update_admin'])->name('update_admin');
	
	Route::get('/edit_user_page/{id}',[UserController::class, 'edit_user_page'])->name('edit_user_page');
	Route::post('/update_user/{id}',[UserController::class, 'update_user'])->name('update_user');
	Route::get('/delete_user/{id}',[UserController::class, 'delete_user'])->name('delete_user');

});

Route::middleware(['auth'])->prefix('/user')->group(function () 
{	
	Route::get('/add_cart/{id}',[CartController::class, 'add_cart'])->name('add_cart');
	Route::get('/cart',[CartController::class, 'cart'])->name('cart');

	Route::get('/checkout',[CheckoutController::class, 'checkout'])->name('checkout');
});


Route::get('/shop',[ProductController::class, 'shop'])->name('shop');
Route::get('/details/{id}',[ProductController::class, 'details'])->name('details');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
