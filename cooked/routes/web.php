<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|, 'middleware'=>'adminLogin'
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', 'UserController@getLoginAdmin');
Route::post('admin/login', 'UserController@postLoginAdmin');
Route::get('admin/logout', 'UserController@getLogoutAdmin');

Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=>'category'], function() {
		Route::get('list', 'categoryController@getList');
		
		Route::get('edit/{id}', 'categoryController@getEdit');
		Route::post('edit/{id}', 'categoryController@postEdit');

		Route::get('insert', 'categoryController@getInsert');
		Route::post('insert', 'categoryController@postInsert');

		Route::get('delete/{id}', 'categoryController@getDelete');
	});

	Route::group(['prefix'=>'type'], function() {
		Route::get('list', 'typeController@getList');
		
		Route::get('edit/{id}', 'typeController@getEdit');
		Route::post('edit/{id}', 'typeController@postEdit');

		Route::get('insert', 'typeController@getInsert');
		Route::post('insert', 'typeController@postInsert');

		Route::get('delete/{id}', 'typeController@getDelete');
	});

	Route::group(['prefix'=>'product'], function() {
		Route::get('list', 'productController@getList');
		
		Route::get('edit/{id}', 'productController@getEdit');
		Route::post('edit/{id}', 'productController@postEdit');

		Route::get('insert', 'productController@getInsert');
		Route::post('insert', 'productController@postInsert');

		Route::get('delete/{id}', 'productController@getDelete');
	});

	Route::group(['prefix'=>'material'], function() {
		Route::get('list', 'materialController@getList');
		
		Route::get('edit/{id}', 'materialController@getEdit');
		Route::post('edit/{id}', 'materialController@postEdit');

		Route::get('insert', 'materialController@getInsert');
		Route::post('insert', 'materialController@postInsert');

		Route::get('delete/{id}', 'materialController@getDelete');
	});

	Route::group(['prefix'=>'spice'], function() {
		Route::get('list', 'spiceController@getList');
		
		Route::get('edit/{id}', 'spiceController@getEdit');
		Route::post('edit/{id}', 'spiceController@postEdit');

		Route::get('insert', 'spiceController@getInsert');
		Route::post('insert', 'spiceController@postInsert');

		Route::get('delete/{id}', 'spiceController@getDelete');
	});

	Route::group(['prefix'=>'timeCook'], function() {
		Route::get('list', 'timeCookController@getList');
		
		Route::get('edit/{id}', 'timeCookController@getEdit');
		Route::post('edit/{id}', 'timeCookController@postEdit');

		Route::get('insert', 'timeCookController@getInsert');
		Route::post('insert', 'timeCookController@postInsert');

		Route::get('delete/{id}', 'timeCookController@getDelete');
	});

	Route::group(['prefix'=>'detail'], function() {
		Route::get('list', 'detailController@getList');
		
		Route::get('edit/{id}', 'detailController@getEdit');
		Route::post('edit/{id}', 'detailController@postEdit');

		Route::get('insert', 'detailController@getInsert');
		Route::post('insert', 'detailController@postInsert');

		Route::get('delete/{id}', 'detailController@getDelete');
	});

	Route::group(['prefix'=>'User'], function() {
		Route::get('list', 'UserController@getList');
		
		Route::get('edit/{id}', 'UserController@getEdit');
		Route::post('edit/{id}', 'UserController@postEdit');

		Route::get('insert', 'UserController@getInsert');
		Route::post('insert', 'UserController@postInsert');

		Route::get('delete/{id}', 'UserController@getDelete');
	});
});


Route::get('homepage', 'PageController@homePage');
