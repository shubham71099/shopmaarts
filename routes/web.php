<?php

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

// Route::get('/', function () {

    // return view('web.layout.index');

    // return view('welcome');
// });


Auth::routes();



Route::group(['middleware' => 'customer_auth'], function() {

Route::post('/customer/logout', 'customer\Auth\LoginController@logout')->name('web_customer_logout');
Route::get('/customer/cust_home', 'customer\Auth\RegisterController@cust_home')->name('cust_home');
Route::get('/customer/address', 'OrderController@customer_address')->name('customer_address');
Route::post('/customer/address', 'OrderController@customer_address_submit')->name('customer_address_submit');
Route::get('/customer/address_delete/{id}', 'OrderController@address_delete')->name('address_delete');
Route::get('/finalcart/{aid}', 'OrderController@finalcart')->name('finalcart');
Route::post('/orderplace', 'OrderController@orderplace')->name('orderplace');
Route::get('/orders', 'OrderController@orders')->name('orders');

});


Route::group(['middleware' => 'customer_auth_guest'], function() {

Route::get('/customer/register', 'customer\Auth\RegisterController@showregisterform')->name('web_customer_register');
Route::post('/customer/register', 'customer\Auth\RegisterController@customer_register_submit')->name('web_customer_register_submit');
Route::get('/customer/login', 'customer\Auth\LoginController@showloginform')->name('web_customer_login');
Route::post('/customer/signin', 'customer\Auth\LoginController@login')->name('web_customer_login_submit');
});



Route::group(['middleware'=>'auth'],function(){
Route::get('/home', 'HomeController@index')->name('home');

Route::get('addcategory', 'HomeController@addcategory')->name('addcategory');
Route::post('add_category','HomeController@add_category')->name('add_category');
Route::get('viewcategory','HomeController@viewcategory')->name('viewcategory');
Route::get('deletecategory/{id}','HomeController@deletecategory')->name('deletecategory');
Route::get('editcategory/{id}','HomeController@editcategory')->name('editcategory');
Route::post('editcategory_post','HomeController@editcategory_post')->name('editcategory_post');

Route::get('addsubcategory', 'HomeController@addsubcategory')->name('addsubcategory');
Route::post('postsubcategory', 'HomeController@postsubcategory')->name('postsubcategory');
Route::get('viewsubcategory','HomeController@viewsubcategory')->name('viewsubcategory');
Route::get('deletesubcategory/{id}','HomeController@deletesubcategory')->name('deletesubcategory');
Route::get('editsubcategory/{id}','HomeController@editsubcategory')->name('editsubcategory');
Route::post('editsubcategorypost','HomeController@editsubcategorypost')->name('editsubcategorypost');

Route::get('addproduct', 'HomeController@addproduct')->name('addproduct');
Route::post('postproduct', 'HomeController@postproduct')->name('postproduct');
Route::get('viewproduct', 'HomeController@viewproduct')->name('viewproduct');
Route::get('productdetail/{id}', 'HomeController@productdetail')->name('productdetail');
Route::get('deleteproduct/{id}','HomeController@deleteproduct')->name('deleteproduct');

Route::get('/mainlayout', 'HomeController@mainlayout')->name('mainlayout');

Route::get('account','HomeController@account')->name('account');
Route::get('accountview','HomeController@accountview')->name('accountview');
Route::get('edit_account/{id}','HomeController@edit_account')->name('edit_account');
Route::post('edit_account_post','HomeController@edit_account_post')->name('edit_account_post');

Route::get('logo', 'HomeController@logo')->name('logo');
Route::get('editlogo/{id}', 'HomeController@editlogo')->name('editlogo');
Route::post('editlogopost','HomeController@editlogopost')->name('editlogopost');

Route::get('customers', 'HomeController@customers')->name('customers');
Route::get('deletecustomer/{id}','HomeController@deletecustomer')->name('deletecustomer');


Route::get('banner', 'HomeController@banner')->name('banner');


Route::get('careerapp', 'HomeController@careerapp')->name('careerapp');

Route::get('complaints', 'HomeController@complaints')->name('complaints');

Route::post('addbanner', 'HomeController@addbanner')->name('addbanner');
Route::get('viewbanner','HomeController@viewbanner')->name('viewbanner');
Route::get('deletebanner/{id}','HomeController@deletebanner')->name('deletebanner');
Route::get('banner_active/{id}/{status}','HomeController@banner_active')->name('banner_active');
Route::get('product_active/{id}/{status}','HomeController@product_active')->name('product_active');

Route::get('orderdetails', 'HomeController@orderdetails')->name('orderdetails');
Route::get('sale_order_view/{id}', 'HomeController@sale_order_view')->name('sale_order_view');

Route::get('orderstatus/{id}','HomeController@orderstatus')->name('orderstatus');
Route::post('orderstatuspost','HomeController@orderstatuspost')->name('orderstatuspost');


});

Route::get('/','WebController@web')->name('web');
Route::get('front','WebController@front')->name('front');

Route::get('contact','WebController@contact')->name('contact');
Route::post('postcontact','WebController@postcontact')->name('postcontact');

Route::get('career','WebController@career')->name('career');
Route::post('postcareer','WebController@postcareer')->name('postcareer');

Route::get('shop','WebController@shop')->name('shop');
Route::get('productfetch/{id}', 'WebController@productfetch')->name('productfetch');
Route::get('shopbycategory/{id}', 'WebController@shopbycategory')->name('shopbycategory');

Route::get('saree','WebController@saree')->name('saree');
Route::get('lehanga','WebController@lehanga')->name('lehanga');
Route::get('kurti','WebController@kurti')->name('kurti');

Route::post('add','CartController@add')->name('add');
Route::post('addtocart','WebController@addtocart')->name('addtocart');
Route::get('cart','CartController@cart')->name('cart');
Route::post('removecart','CartController@removecart')->name('removecart');
Route::post('update', 'CartController@update')->name('update');
Route::post('clear', 'CartController@clear')->name('clear');










