<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
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



Route::controller(IndexController::class)->group(function () {
	Route::get('/', 'indexAction');
	Route::get('/category/{id}', 'categoryAction', function($id){
		return $id;
	});
	Route::get('/product', 'productAction');
	Route::get('/cart', 'cartAction');
	Route::get('/cabinet', 'cabinetAction');
});


Route::controller(AdminController::class)->group(function () {
	Route::get('/admin', 'indexAction')->name('dashboard');
	Route::get('/admin/login', 'loginAction')->name('login');
	Route::get('/admin/logout', 'logoutAction')->name('logout');
	Route::post('/admin/login-request', 'loginrequestAction');
	Route::get('/admin/category', 'categoryAction')->name('admin-category');
	Route::post('/admin/add-category', 'addcategoryAction');
	Route::post('/admin/delete-category', 'deletecategoryAction');

	Route::get('/admin/products-list', 'productslistAction')->name('admin-products-list');
	Route::get('/admin/add-product', 'addproductAction')->name('admin-add-product');
});
