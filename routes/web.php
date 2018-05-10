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
 
Route::get('/', function () {
    return view('welcome');
});
 


Auth::routes();
 
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/logout','Auth\LoginController@userLogout')->name('user.logout');
 
//admin route for our multi-auth system
 
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminPanelController@index')->name('admin.home');
    Route::get('/login', 'Admin\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout','Admin\Auth\AdminLoginController@logout')->name('admin.logout');
    Route::post('/add_product', 'Admin\AdminPanelController@addProduct')->name('admin.add_product');
    Route::resource('products','Admin\AdminProductsController');
    Route::get('/all_products','Admin\AdminProductsController@showAll')->name('admin.all_products');
    Route::resource('categories','Admin\AdminCategoryController');
});


/////////////////////////////////////////////////////
 
	/// Routes for products 

Route::resource('products','ProductController');