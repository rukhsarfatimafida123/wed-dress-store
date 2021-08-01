<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/'					,	'HomeController@index');
Route::get('/shop'					,	'HomeController@product_list');
Route::get('/details/{id?}'					,	'HomeController@product_details');
Route::post('/add_to_cart'					,	'CartController@add_to_cart');
Route::get('/cart'					,	'CartController@cart');
Route::get('/remove_cart/{id?}'					,	'CartController@remove_cart');
Route::get('/checkout'					,	'CartController@checkout');

Route::post('/place_order'					,	'CartController@place_order');

Auth::routes();


Route::middleware(['auth', 'admin.role'])->prefix('admin')->group(function () {
	Route::get('/', 'Admin\DashboardController@index')->name('admin');
    
   /*Category Routes*/
	Route::get('/category'					,	'Admin\\CategoryController@index')->name('category_list');
	Route::get('/category/create'			,	'Admin\\CategoryController@create')->name('category_create');
	Route::post('/category/create'			,	'Admin\\CategoryController@create')->name('category_insert');
	Route::get('/category/edit'				,	'Admin\\CategoryController@edit')->name('category_edit');
	Route::post('/category/edit/{id?}'		,	'Admin\\CategoryController@edit')->name('category_update');
	Route::get('/category/delete/{id?}'		,	'Admin\\CategoryController@delete')->name('category_delete');

      /*product Routes*/
	Route::get('/product'					,	'Admin\\ProductController@index')->name('product_list');
	Route::get('/product/create'			,	'Admin\\ProductController@create')->name('product_create');
	Route::post('/product/create'			,	'Admin\\ProductController@create')->name('product_insert');
	Route::get('/product/edit'				,	'Admin\\ProductController@edit')->name('product_edit');
	Route::post('/product/edit/{id?}'		,	'Admin\\ProductController@edit')->name('product_update');
	Route::get('/product/delete/{id?}'		,	'Admin\\ProductController@delete')->name('product_delete');

    /*brand Routes*/
	Route::get('/brand'					,	'Admin\\BrandController@index')->name('brand_list');
	Route::get('/brand/create'			,	'Admin\\BrandController@create')->name('brand_create');
	Route::post('/brand/create'			,	'Admin\\BrandController@create')->name('brand_insert');
	Route::get('/brand/edit'				,	'Admin\\BrandController@edit')->name('brand_edit');
	Route::post('/brand/edit/{id?}'		,	'Admin\\BrandController@edit')->name('brand_update');
	Route::get('/brand/delete/{id?}'		,	'Admin\\BrandController@delete')->name('brand_delete');

     /*cart Routes*/
	Route::get('/cart'					,	'Admin\\CartController@index')->name('cart_list');
	Route::get('/cart/create'			,	'Admin\\CartController@create')->name('cart_create');
	Route::post('/cart/create'			,	'Admin\\CartController@create')->name('cart_insert');
	Route::get('/cart/edit'				,	'Admin\\CartController@edit')->name('cart_edit');
	Route::post('/cart/edit/{id?}'		,	'Admin\\CartController@edit')->name('cart_update');
	Route::get('/cart/delete/{id?}'		,	'Admin\\CartController@delete')->name('cart_delete');

    /*cart_item Routes*/
	Route::get('/cart_item'					,	'Admin\\CartItemController@index')->name('cart_item_list');
	Route::get('/cart_item/create'			,	'Admin\\CartItemController@create')->name('cart_item_create');
	Route::post('/cart_item/create'			,	'Admin\\CartItemController@create')->name('cart_item_insert');
	Route::get('/cart_item/edit'				,	'Admin\\CartItemController@edit')->name('cart_item_edit');
	Route::post('/cart_item/edit/{id?}'		,	'Admin\\CartItemController@edit')->name('cart_item_update');
	Route::get('/cart_item/delete/{id?}'		,	'Admin\\CartItemController@delete')->name('cart_item_delete');

    /*order_item Routes*/
	Route::get('/order_item'					,	'Admin\\OrderItemController@index')->name('order_item_list');
	Route::get('/order_item/create'			,	'Admin\\OrderItemController@create')->name('order_item_create');
	Route::post('/order_item/create'			,	'Admin\\OrderItemController@create')->name('order_item_insert');
	Route::get('/order_item/edit'				,	'Admin\\OrderItemController@edit')->name('order_item_edit');
	Route::post('/order_item/edit/{id?}'		,	'Admin\\OrderItemController@edit')->name('order_item_update');
	Route::get('/order_item/delete/{id?}'		,	'Admin\\OrderItemController@delete')->name('order_item_delete');

    /*order Routes*/
	Route::get('/order'					,	'Admin\\OrderController@index')->name('order_list');
	Route::get('/order/create'			,	'Admin\\OrderController@create')->name('order_create');
	Route::post('/order/create'			,	'Admin\\OrderController@create')->name('order_insert');
	Route::get('/order/edit'				,	'Admin\\OrderController@edit')->name('order_edit');
	Route::post('/order/edit/{id?}'		,	'Admin\\OrderController@edit')->name('order_update');
	Route::get('/order/delete/{id?}'		,	'Admin\\OrderController@delete')->name('order_delete');


     /*tag Routes*/
	Route::get('/tag'					,	'Admin\\TagController@index')->name('tag_list');
	Route::get('/tag/create'			,	'Admin\\TagController@create')->name('tag_create');
	Route::post('/tag/create'			,	'Admin\\TagController@create')->name('tag_insert');
	Route::get('/tag/edit'				,	'Admin\\TagController@edit')->name('tag_edit');
	Route::post('/tag/edit/{id?}'		,	'Admin\\TagController@edit')->name('tag_update');
	Route::get('/tag/delete/{id?}'		,	'Admin\\TagController@delete')->name('tag_delete');

     /*review Routes*/
	Route::get('/review'					,	'Admin\\ReviewController@index')->name('review_list');
	Route::get('/review/create'			,	'Admin\\ReviewController@create')->name('review_create');
	Route::post('/review/create'			,	'Admin\\ReviewController@create')->name('review_insert');
	Route::get('/review/edit'				,	'Admin\\ReviewController@edit')->name('review_edit');
	Route::post('/review/edit/{id?}'		,	'Admin\\ReviewController@edit')->name('review_update');
	Route::get('/review/delete/{id?}'		,	'Admin\\ReviewController@delete')->name('review_delete');


     /*payment Routes*/
	Route::get('/payment'					,	'Admin\\PaymentController@index')->name('payment_list');
	Route::get('/payment/create'			,	'Admin\\PaymentController@create')->name('payment_create');
	Route::post('/payment/create'			,	'Admin\\PaymentController@create')->name('payment_insert');
	Route::get('/payment/edit'				,	'Admin\\PaymentController@edit')->name('payment_edit');
	Route::post('/payment/edit/{id?}'		,	'Admin\\PaymentController@edit')->name('payment_update');
	Route::get('/payment/delete/{id?}'		,	'Admin\\PaymentController@delete')->name('payment_delete');




});

Route::middleware(['auth', 'customer.role'])->group(function () {
	//Route::get('/', 'Customer\HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
});
